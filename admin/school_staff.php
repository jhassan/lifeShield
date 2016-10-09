<?php include_once('top.php');
//print_r($UserType); die;
	$strRow = "";
//echo "adfasfds"; die;
	if(!empty($_GET['id']))

	{

		$GetID = mysqli_real_escape_string($conn, $_GET['id']);	//pr($GetID);

		$Where = "school_id = '".(int)$GetID."'";

		$GetRow = GetRecord("school_staff", $Where);

		// pr($GetRow);exit;

		$name = $GetRow['name'];

		$father_name =  $GetRow['father_name'];

		$user_type = $GetRow['user_type'];

		$user_blongs = $GetRow['user_blongs'];

		$gender =  $GetRow['gender'];

		$phone_no = $GetRow['phone_no'];

		$class = $GetRow['class'];

		$address =  $GetRow['address'];

		$dob = $GetRow['dob'];

		$join_date = $GetRow['join_date'];

		$img_name = $GetRow['img_name'];

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

                    <h1 class="page-header">School Staff</h1>

                </div>

                <!-- /.col-lg-12 -->

            </div>

            <!-- /.row -->

            <div class="row">

                <div class="col-lg-12">

                    <div class="panel panel-default">

                        <div class="panel-heading">

                            Add Staff and Students

                        </div>

                        <div class="panel-body">

                            <div class="row">

                                <div class="col-lg-12">

                                    <form role="form" action="action.php" id="myForm" method="post" enctype="multipart/form-data">

                                    <input type="hidden" name="action" id="action" value="AddSchoolStaff" />

						            <input type="hidden" name="nSchoolStaff" id="nSchoolStaff" value="<?php echo $GetID; ?>" />

                                        <?php TextField("Name", "name", $name, "50","3","form-control required"); ?>

                                        <?php TextField("Father Name", "father_name", $father_name, "50","3","form-control required"); ?>

                                        <div class="form-group col-lg-3">

                                            <label>User Type</label>

                                            <?php ArrayComboBox("user_type", $staff_type, $UserType, true, "", "---Select Type---", "required form-control", "");?>

                                       </div>



                                        <div class="form-group col-lg-3">

                                            <label>User Belong</label>

                                            <?php ArrayComboBox("user_belongs", $user_belongs, $user_belong, true, "", "---Select User Belong---", "required form-control", "");?>

                                       </div>

                                        <div class="clear"></div>

                                        <div class="form-group col-lg-3">

                                            <label>Gender</label>

                                            <?php ArrayComboBox("Gender", $gender, $genders, true, "", "---Select Gender---", "required form-control", "");?>

                                       </div>

                                        <?php TextField("Phone #", "phone_no", $phone_no, "16","3","form-control");?>

                                        <?php TextField("Class", "class", $class, "16","3","form-control required");?>

                                        <?php TextField("Address", "address", $address, "50","3","form-control required");?>

                                        <div class="clear"></div>

										<?php TextField("DOB", "dob", $dob, "16","3","form-control required datepicker_new");?>

                                        <?php TextField("Join Date", "join_date", $join_date, "16","3","form-control datepicker_new");?>

                                        <div class="clear"></div>



                                        <div class="form-group m-r-15 m-t-10 col-lg-12 p-l-0">

                                            <label>Upload Image</label>

                                            <input type="file" name="fileToUpload" id="fileToUpload" class="">

                                        </div>

                                        <div class="clear"></div>

                                        <div class="form-group col-lg-4 m-t-10">

                                        	<?php if(!empty($GetID) && !empty($img_name)) {  ?>

                                            <img src="security_staff_images/school_staff_img/<?php echo $img_name;?>" height="25" width="70" alt="Security Staff">

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

