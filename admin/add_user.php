<?php include_once('top.php');
	$strRow = "";
	if(!empty($_GET['id']))
	{
		$GetID = mysql_real_escape_string($_GET['id']);	
		$Where = "user_id = '".(int)$GetID."'";
		$GetRow = GetRecord("tbluser", $Where);
		$user_name = $GetRow['user_name'];
		$user_password =  $GetRow['user_password'];
		$user_type = $GetRow['user_type'];
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
                                    <input type="hidden" name="action" id="action" value="AddUser" />
						            <input type="hidden" name="nUser" id="nUser" value="<?php echo $GetID; ?>" />
                                        <?php TextField("User Name", "user_name", $user_name, "50","3","form-control required"); ?>
                                        <?php TextField("User Password", "user_password", $usre_password, "50","3","form-control required","password"); ?>
                                        <div class="clear"></div>
                                        <br />

                                        <div class="form-group col-lg-3">
                                            <label>User Type</label>
                                            <?php ArrayComboBox("user_type", $user_type, $UserType, true, "", "---Select Type---", "required form-control", "");?>
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
