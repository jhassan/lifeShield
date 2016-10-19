<?php include_once('top.php');
include_once('config.php');

//echo($GLOBALS["DB_Server"] . " " . $GLOBALS["DB_Username"] ." ". $GLOBALS["DB_Password"]); die;
?>
<style>
[type="checkbox"]:not(:checked) + label:after, [type="checkbox"]:checked + label:after {
    content: '✔';
    position: absolute;
    top: 6px;
    left: 2px;
    font-size: 16px;
    line-height: 0.8;
    color: #09ad7e;
    transition: all .2s;
}
</style>
        <link rel="shortcut icon" href="../favicon.ico">
        
        
<body>
    <div id="wrapper"> 
            <!-- Navigation -->
        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <?php include_once('header.php');?>    

        <?php include_once('leftsidebar.php');?>     
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-dashboard"></i> Staff Attandance Report </h1>
                </div>
                <div class="container">
                   <div class="col-lg-12">
					<form role="form" action="action.php" id="myForm" method="post" enctype="multipart/form-data">
    	                <input type="hidden" name="action" id="action" value="AttandanceReport" />
			            <input type="hidden" name="nAttandanceReport" id="nAttandanceReport" value="<?php echo $GetID; ?>" />
                        <?php
							$emp = explode("S",$_SESSION["strUserName"]);

                        	$SQL = "SELECT staf_id, staf_name,emp_officer,staf_img_name FROM tblstafemp ORDER BY staf_id DESC";
							$result = mysqli_query($conn, $SQL);
							while($row = mysqli_fetch_array($result)) {
							$off = explode("O",$row['emp_officer']);
							
							if(trim($off[0]) == trim($emp[0])){
							
						?>
                          <p>
                            <input type="checkbox" id="<?php echo $row['staf_id'];?>" />
                            <label for="<?php echo $row['staf_id'];?>"><?php echo ucfirst($row['staf_name']);?></label>
                          </p>
                        <?php } } ?>
                        <div class="clear"></div>
                        <div class="form-group col-lg-6">
                            <button type="submit" class="btn btn-default m-t-10">Save</button>
                        </div>
                        </form>
                    
                    </div>
                <!-- /.col-lg-12 -->
            </div>

            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    </div>

    <?php include_once('jquery.php');?>

</body>

</html>
