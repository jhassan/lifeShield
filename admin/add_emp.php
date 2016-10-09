<?php include_once('top.php');
	$strRow = "";
	if(!empty($_GET['id']))
	{
	$GetID = mysql_real_escape_string($_GET['id']);	
	$Where = "emp_id = '".(int)$GetID."'";
	$GetRow = GetRecord("tblemployee", $Where);
	$emp_name = $GetRow['emp_name'];
	$depart_id =  $GetRow['depart_id'];
	$designation_id = $GetRow['designation_id'];
	$emp_sector = $GetRow['emp_sector'];
	$emp_dob = $GetRow['emp_dob'];
	$emp_phone = $GetRow['emp_phone'];
	$emp_address = $GetRow['emp_address'];
	$emp_NIC = $GetRow['emp_NIC'];
	$emp_Join_date = $GetRow['emp_Join_date'];
	$status = $GetRow['marital_status'];
    $children = $GetRow['children'];
	$emp_img_name = $GetRow['emp_img_name'];
	}
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
                    <h1 class="page-header">Add Employee</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Colony Employee
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="action.php" id="myForm" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="action" id="action" value="AddEmployee" />
						            <input type="hidden" name="nEmployee" id="nEmployee" value="<?php echo $GetID; ?>" />
                                        <?php TextField("Employee Name", "emp_name", $emp_name, "50","3","form-control required"); ?>

                                        <div class="form-group col-lg-3">
                                         <label>Select Department</label>
                                            <select class="form-control required" name="depart_id" id="depart_id">
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
                                        <div class="form-group col-lg-3">
                                         <label>Select Designation</label>
                                            <select class="form-control required" name="designation_id" id="designation_id">
                                            	<option value=""> --- Select Designation --- </option>
                                                 <?php
                                                    $SQL = "SELECT * FROM designation ORDER BY designation_id ASC";
                                                    $result = MySQLQuery($SQL);
                                                    while($row = mysqli_fetch_array($result)) { // ,MYSQL_ASSOC
                                                ?>
                                                        <option value="<?php echo $row['designation_id'];?>"> <?php echo $row['designation_name'];?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Select Sector</label>
                                            <?php ArrayComboBox("emp_sector", $emp_sector, $sector, true, "", "---Select Sector---", "required form-control", "");?>
                                       </div>
                                        <?php TextField("DOB", "emp_dob", $emp_dob, "16","3","form-control required datepicker_new");?>
										<?php TextField("Join Date", "emp_Join_date", $emp_Join_date, "50","3","form-control required datepicker_new"); ?>
                                        <?php TextField("Phone No.", "emp_phone", $emp_phone, "50","3","form-control required"); ?>
                                        
                                        <?php TextField("CNIC", "emp_NIC", $emp_NIC, "50","3","form-control required"); ?>
                                        <div class="clear">&nbsp;</div>
										<?php TextField("Address", "emp_address", $emp_address, "50","3","form-control required"); ?>
                                        <div class="form-group col-lg-3">
                                            <label>Martal Status</label>
                                            <?php ArrayComboBox("marital_status", $status, $marital_status, true, "", "--- Marital Status---", "required form-control", "");?>
                                       </div>
                                        <?php TextField("Children", "children", $children, "50","3","form-control required"); ?>
                                        <div class="form-group m-r-15 m-t-10 col-lg-12 p-l-0">
                                            <label>Upload Image</label>
                                            <input type="file" name="fileToUpload" id="fileToUpload" class="">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="form-group col-lg-4 m-t-10">
                                        	<?php if(!empty($GetID) && !empty($emp_img_name)) {  ?>
                                            <img src="security_staff_images/employee/<?php echo $emp_img_name;?>" height="50" width="70" alt="Employee">
                                            <?php } ?>
                                        </div>
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
    <script type="text/javascript" src="../js/zebra_datepicker.js"></script>
    <link rel="stylesheet" href="../dist/css/default.css" type="text/css">
    <script type="text/javascript">
	jQuery(function (){
		jQuery('#myForm').validate();
		$('input.datepicker_new').Zebra_DatePicker();
		});
	   </script>

</body>

</html>
