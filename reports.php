<?php include_once('top.php');
//	$strRow = "";
//	if(!empty($_GET['id']))
//	{
//    	$GetID = mysql_real_escape_string($_GET['id']);	
//    	$Where = " designation_id = '".(int)$GetID."'";
//    	$GetRow = GetRecord("designation", $Where);
//    	$depart_name = $GetRow['depart_name'];
//	}
?>

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
                    <h1 class="page-header">Add Record</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Record
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                               
                                <?php ArrayComboBox("records", $report_type, $records, true, "", "---Select Type---", "required form-control", "");?>
                                <div class="clear"></div>
                                <div class="row">&nbsp;</div>
                                <!--Employee Form-->
                                    <form role="form" action="action.php" id="employee" class="hidden" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="action" id="action" value="AddEmployee" />
                                        <input type="hidden" name="nEmployeeID" id="nEmployeeID" value="<?php echo $GetID; ?>" />
                                       	<?php //TextField("Emp Name", "emp_name", $emp_name, "50","3","form-control required"); ?>
                                        <div class="form-group col-lg-3 input_container">
                                        <label> Employye Name</label>
                                            <input type="text" id="emp_name" name="emp_name" class="form-control" onKeyUp="autocomplet_emp()">
                                            <ul id="emp_name_list"></ul>
                                        </div>

                                        <div class="form-group col-lg-3">
                                         <label>Select Department</label>
                                            <select class="form-control required" name="emp_department" id="emp_department">
                                            	<option value=""> --- Select Department --- </option>
                                                 <?php
                                                    $SQL = "SELECT * FROM departments ORDER BY depart_id ASC";
                                                    $result = MySQLQuery($SQL);
                                                    while($row = mysqli_fetch_array($result)) { // ,MYSQL_ASSOC
                                                ?>
                                                        <option value="<?php echo $row['depart_id'];?>"> <?php echo $row['depart_name'];?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <?php TextField("Vehivle", "emp_vehicle", $visitor_vehicle, "50","3","form-control required"); ?>
                                        <div class="clear"></div>
										
                                        <?php //TextField("Entry Time", "entry_time", $entry_time, "50","3","form-control required"); ?>
                                        <?php TextField("Exit Time", "exit_time", $exit_time, "50","3","form-control required"); ?>

                                        <div class="clear"></div>
                                        <div class="form-group col-lg-6">
                                        <button type="submit" class="btn btn-default m-t-10">Save</button>
                                        </div>
                                    </form>

                                <!--Visitor Form-->
                                    <form role="form" action="action.php" id="visitor" class="hidden" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="action" id="action" value="AddVisitor" />
                                        <input type="hidden" name="nVisitorID" id="nVisitorID" value="<?php echo $GetID; ?>" />
                                       	<?php TextField("Visitor Name", "visitor_name", $visitor_name, "50","3","form-control required"); ?>
                                        <?php TextField("Visitor CNIC", "visitor_NICN", $visitor_NICN, "50","3","form-control required"); ?>
                                        <?php TextField("Vehivle", "visitor_vehicle", $visitor_vehicle, "50","3","form-control required"); ?>
                                        <?php //TextField("Whom to meet", "whome_to_meet", $whome_to_meet, "50","3","form-control required"); ?>
                                        <div class="form-group col-lg-3 input_container">
                                        <label> Whom to meet </label>
                                            <input type="text" id="whome_to_meet" name="whome_to_meet" class="form-control" onKeyUp="autocomplet_visitor()">
                                            <ul id="whome_to_meet_list" class="hidden"></ul>
                                        </div>
                                        <div class="clear"></div>
                                        <?php //TextField("Entry Time", "entry_time", $entry_time, "50","3","form-control required"); ?>
                                        <?php //TextField("Exit Time", "exit_time", $exit_time, "50","3","form-control required"); ?>
                                        <?php //TextField("Return Pass", "return_pass", $return_pass, "50","3","form-control required"); ?>
										<div class="btn btn-default m-t-10 col-sm-2 m-l-15" id="addAccompanying"><i class="glyphicon glyphicon-plus-sign"></i> Add Accompanying</div>
                                        <div class="clear"></div>
                                        
	                                        <div class="form-group name="accompanyingInput" id="accompanyingInput" >
                                            	<div id="accompanyingInput">
                                                	<div class="row">&nbsp;</div>
                                                </div>
                                            </div>
                                        
                                        

                                        <div class="clear"></div>
                                        <div class="form-group col-lg-6">
                                        <button type="submit" class="btn btn-default m-t-10">Save</button>
                                        </div>
                                    </form>

                                <!--School Children Form-->
                                    <form role="form" action="action.php" id="children" class="hidden" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="action" id="action" value="AddChild" />
                                        <input type="hidden" name="nChildID" id="nChildID" value="<?php echo $GetID; ?>" />
                                       	<?php TextField("child Name", "child_name", $child_name, "50","3","form-control required"); ?>
                                        <?php TextField("child Age", "child_age", $child_age, "50","3","form-control required"); ?>
                                        <?php TextField("child Class", "child_class", $child_class, "50","3","form-control required"); ?>
                                        <div class="col-sm-3">
                                        <label>Gender</label>
                                        	<?php ArrayComboBox("gender", $gender_type, $gender, true, "", "---Select Gender---", "required form-control", "");?>
                                        </div>
                                        <div class="row">&nbsp;</div>
                                        <?php //TextField("Entry Time", "entry_time", $entry_time, "50","3","form-control required"); ?>
                                        <?php //TextField("Exit Time", "exit_time", $exit_time, "50","3","form-control required"); ?>
                                        <?php //TextField("Return Pass", "return_pass", $return_pass, "50","3","form-control required"); ?>

                                        <div class="clear"></div>
                                        <div class="form-group col-lg-6">
                                        <button type="submit" class="btn btn-default m-t-10">Save</button>
                                        </div>
                                    </form>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include_once('jquery.php');?>
    
<script>
	$(document).ready(function(){

		$('#records').click(function(){
			var $rec = $('#records').val();
			if($rec == 1){
				$('#employee').removeClass('hidden');
				$('#visitor').addClass('hidden');
				$('#children').addClass('hidden');
			}else if($rec == 2){
				$('#employee').addClass('hidden');
				$('#visitor').removeClass('hidden');
				$('#children').addClass('hidden');
			}else if($rec == 3){
				$('#employee').addClass('hidden');
				$('#visitor').addClass('hidden');
				$('#children').removeClass('hidden');
			}
		});
		
	});
</script>    
 
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>
