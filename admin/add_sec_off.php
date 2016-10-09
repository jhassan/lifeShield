<?php include_once('top.php');
	$strRow = "";
	if(!empty($_GET['id']))
	{
	$GetID = mysql_real_escape_string($_GET['id']);	
	$Where = "off_id = '".(int)$GetID."'";
	$GetRow = GetRecord("tbl_sec_off", $Where);
	$off_name = $GetRow['off_name'];
	$off_dob = $GetRow['off_dob'];
	$off_phone = $GetRow['off_phone'];
	$off_address = $GetRow['off_address'];
	$off_NIC = $GetRow['off_NIC'];
	$off_Join_date = $GetRow['off_Join_date'];
    $off_designation = $GetRow['off_designation'];
	$off_img_name = $GetRow['off_img_name'];
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
                    <h1 class="page-header">Add Security Officer</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Security Officer
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="action.php" id="myForm" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="action" id="action" value="AddSecurityOff" />
						            <input type="hidden" name="nSecurityOff" id="nSecurityOff" value="<?php echo $GetID; ?>" />
                                        <?php TextField("Employee Name", "off_name", $off_name, "50","3","form-control required"); ?>
                                        <?php TextField("DOB", "off_dob", $off_dob, "16","3","form-control datepicker_new");?>

                                        <?php TextField("Phone No.", "off_phone", $off_phone, "50","3","form-control required"); ?>
                                        <?php TextField("Address", "off_address", $off_address, "50","3","form-control required"); ?>
                                        <div class="clear">&nbsp;</div>
                                        <?php TextField("CNIC", "off_NIC", $off_NIC, "50","3","form-control required"); ?>
                                        <?php TextField("Join Date", "off_Join_date", $off_Join_date, "50","3","form-control required datepicker_new"); ?>
                                        <div class="form-group col-lg-3">
                                            <label>Select Designation</label>
                                            <?php ArrayComboBox("off_designation", $off_designation, $Officers, true, "", "---Select Designation---", "required form-control", "");?>
                                       </div>
                                        
                                        <div class="form-group m-r-15 m-t-10 col-lg-12 p-l-0">
                                            <label>Upload Image</label>
                                            <input type="file" name="fileToUpload" id="fileToUpload" class="">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="form-group col-lg-4 m-t-10">
                                        	<?php if(!empty($GetID) && !empty($off_img_name)) {  ?>
                                            <img src="security_staff_images/securityOfficers/<?php echo $off_img_name;?>" height="50" width="70" alt="Security Officer">
                                            <?php } ?>
                                        </div>
                                        <div class="clear"></div>
                                        <?php TextField("", "off_shift", $_SESSION["strUserName"], "50","3","form-control hidden"); ?>
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
