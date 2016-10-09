<?php include_once('top.php');
	$strRow = "";
	if(!empty($_GET['id']))
	{
	$GetID = mysql_real_escape_string($_GET['id']);	
	$Where = " chief_id = '".(int)$GetID."'";
	$GetRow = GetRecord("tblchief", $Where);
//	print_r($GetRow); die;
	$chief_name = $GetRow['chief_name'];
	$dob = $GetRow['dob'];
	$phone_no = $GetRow['phone_no'];
	$address = $GetRow['address'];
	$NIC_no = $GetRow['NIC_no'];
	$join_date = $GetRow['join_date'];
	$img_name = $GetRow['img_name'];
	$last_designation = $GetRow['last_designation'];
	$leave_date = $GetRow['leave_date'];
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
                    <h1 class="page-header">Add Chief Record</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Security Chief
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="action.php" id="myForm" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="action" id="action" value="AddChief" />
						            <input type="hidden" name="nChiefID" id="nChiefID" value="<?php echo $GetID; ?>" />
                                        <?php TextField("Chief Name", "chief_name", $chief_name, "50","3","form-control required"); ?>
                                        <?php TextField("DOB", "dob", $dob, "16","3","form-control required datepicker_new");?>
                                        <?php TextField("CNIC", "NIC_no", $NIC_no, "50","3","form-control required"); ?>
                                        <?php TextField("Phone No.", "phone_no", $phone_no, "50","3","form-control required");?>
                                        
                                        <div class="clear">&nbsp;</div>
                                        <?php TextField("Join Date", "join_date", $join_date, "50","3","form-control required datepicker_new"); ?>
                                        <?php TextField("Last Designation", "last_designation", $last_designation, "50","3","form-control required"); ?>
                                        <?php TextField("Address", "address", $address, "50","3","form-control required"); ?>
                                        <?php TextField("Leave Date", "leave_date", $leave_date, "50","3","form-control datepicker_new"); ?>
                                        
                                        
                                        <div class="form-group m-r-15 m-t-10 col-lg-12 p-l-0">
                                            <label>Upload Image</label>
                                            <input type="file" name="fileToUpload" id="fileToUpload" class="">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="form-group col-lg-4 m-t-10">
                                        	<?php if(!empty($GetID) && !empty($img_name)) {  ?>
                                            <img src="security_staff_images/chief/<?php echo $img_name;?>" height="25" width="70" alt="Security Staff">
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
