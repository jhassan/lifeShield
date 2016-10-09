<?php include_once('top.php');
	$strRow = "";
	if(!empty($_GET['id']))
	{
	$GetID = mysql_real_escape_string($_GET['id']);	
	$Where = "staf_id = '".(int)$GetID."'";
	$GetRow = GetRecord("tblStafEmp", $Where);
	$staf_name = $GetRow['staf_name'];
	$staf_dob = $GetRow['staf_dob'];
	$staf_phone = $GetRow['staf_phone'];
	$staf_address = $GetRow['staf_address'];
	$staf_NIC = $GetRow['staf_NIC'];
	$staf_Join_date = $GetRow['staf_Join_date'];
    $staf_designation = $GetRow['staf_designation'];
	$staf_img_name = $GetRow['staf_img_name'];
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
                    <h1 class="page-header">Add Staff Employee</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Staff Employee
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="action.php" id="myForm" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="action" id="action" value="AddStafEmp" />
						            <input type="hidden" name="nStafEmp" id="nStafEmp" value="<?php echo $GetID; ?>" />
                                        <?php TextField("Employee Name", "staf_name", $staf_name, "50","3","form-control required"); ?>
                                        <?php TextField("DOB", "staf_dob", $staf_dob, "16","3","form-control datepicker_new");?>

                                        <?php TextField("Phone No.", "staf_phone", $staf_phone, "50","3","form-control required"); ?>
                                        <?php TextField("Address", "staf_address", $staf_address, "50","3","form-control required"); ?>
                                        <div class="clear">&nbsp;</div>
                                        <?php TextField("CNIC", "staf_NIC", $staf_NIC, "50","3","form-control required"); ?>
                                        <?php TextField("Join Date", "staf_Join_date", $staf_Join_date, "50","3","form-control required datepicker_new"); ?>
                                        <div class="form-group col-lg-3">
                                            <label>Select Designation</label>
                                            <?php ArrayComboBox("staf_designation", $staf_designation, $arrDesignation, true, "", "---Select Designation---", "required form-control", "");?>
                                       </div>
                                        
                                        <div class="form-group m-r-15 m-t-10 col-lg-12 p-l-0">
                                            <label>Upload Image</label>
                                            <input type="file" name="fileToUpload" id="fileToUpload" class="">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="form-group col-lg-4 m-t-10">
                                        	<?php if(!empty($GetID) && !empty($staf_img_name)) {  ?>
                                            <img src="security_staff_images/Staff_employee/<?php echo $staf_img_name;?>" height="50" width="70" alt="Staff Employee">
                                            <?php } ?>
                                        </div>
                                        <div class="clear"></div>
                                        <?php TextField("", "emp_officer", $_SESSION["strUserName"], "50","3","form-control hidden"); ?>
                                        <!--<input type="hidden" name="emp_officer" value="<?php echo $_SESSION["strUserName"]?>" />-->
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
