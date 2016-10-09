<?php include_once('top.php');?>
	    <div id="wrapper">

        <!-- Navigation -->
        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <?php include_once('header.php');?>    

        <?php include_once('leftsidebar.php');?>     
        </nav>

			<section>
				<div id="contact-page" class="container" style="margin-right: 0px !important">
		    	<div class="bg">
			    	<div class="row" >    		
			    		<div class="col-sm-12">    			   			
							<h2 class="title text-center">Staff Employee</strong></h2>
							<div class="contact-map">
                                <div class="tree" align="center">
	                                    <?php 
											$SQL = "SELECT off_name,off_img_name,off_shift FROM tbl_sec_off ORDER BY off_id DESC";			
	    									$record = MySQLQuery($SQL);
											$result = mysqli_fetch_array($record);
											if($result['off_shift'] == $_SESSION["strUserName"]){
										?>
	                                   	<ul>
                                    	    <li style="margin-top:15px !important">  
                                                <a href="#">
													<img src="admin/security_staff_images/securityOfficers/<?php echo $result['off_img_name'];?>" height="50" width="50">
                                                    <br />
													<?php echo ucfirst($result['off_name'])."<br /> ( ".$result['off_shift']." )";?>
                                                </a>
                                                <ul>
													<?php 
                                                        $SQL = "SELECT staf_name,staf_img_name,emp_officer,staf_designation FROM tblstafemp ORDER BY staf_id ASC";			
                                                        $rec = MySQLQuery($SQL);
                                                        while($row = mysqli_fetch_array($rec)) {
                                                            if($result['off_shift'] == $row['emp_officer']){
                                                    ?>
                                                        <li>
                                                            <a href="#">
																<img src="admin/security_staff_images/Staff_employee/<?php echo $row['staf_img_name'];?>" height="50" width="50">
                                                                <br />
                                                                <?php if($row['staf_designation'] == 1){
																		$var = "Computer Operator";
																	  }else{
																		$var = "Guard";
																	  }
																?>
																<?php echo ucfirst($row['staf_name'])."<br /> (".$var.")";?>
                                                            </a>
                                                        </li>
                                               		<?php } ?>

                                              	    <?php } ?>
                                                    
                                                </ul>
                                            </li>
                                        </ul>
                                     <?php } ?>
                                </div>
                              </div>
                           </div>			 		
                        </div>    	
				    </div>	
                 </div>
             </section>
            </div>
		    <?php include_once('jquery.php');?>
 <style type="text/css">
/*Now the CSS*/
/** {margin: 0; padding: 0;}*/

.tree ul {
	padding-top: 20px; position: relative;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

.tree li {
	float: left; text-align: center;
	list-style-type: none;
	position: relative;
	padding: 20px 5px 0 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/

.tree li::before, .tree li::after{
	content: '';
	position: absolute; top: 0; right: 50%;
	border-top: 1px solid #ccc;
	width: 50%; height: 20px;
}
.tree li::after{
	right: auto; left: 50%;
	border-left: 1px solid #ccc;
}

/*We need to remove left-right connectors from elements without 
any siblings*/
.tree li:only-child::after, .tree li:only-child::before {
	display: none;
}

/*Remove space from the top of single children*/
.tree li:only-child{ padding-top: 0;}

/*Remove left connector from first child and 
right connector from last child*/
.tree li:first-child::before, .tree li:last-child::after{
	border: 0 none;
}
/*Adding back the vertical connector to the last nodes*/
.tree li:last-child::before{
	border-right: 1px solid #ccc;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after{
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.tree ul ul::before{
	content: '';
	position: absolute; top: 0; left: 50%;
	border-left: 1px solid #ccc;
	width: 0; height: 20px;
}

.tree li a{
	border: 1px solid #ccc;
	padding: 5px 10px;
	text-decoration: none;
	color: #666;
	font-family: arial, verdana, tahoma;
	font-size: 11px;
	display: inline-block;
	
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.tree li a:hover, .tree li a:hover+ul li a {
	background: #c8e4f8; color: #000; border: 1px solid #94a0b4;
}
/*Connector styles on hover*/
.tree li a:hover+ul li::after, 
.tree li a:hover+ul li::before, 
.tree li a:hover+ul::before, 
.tree li a:hover+ul ul::before{
	border-color:  #94a0b4 !important;
}

/*Thats all. I hope you enjoyed it.
Thanks :)*/
</style>
	 <?php //require_once("footer.php");?>
	
</body>
</html>