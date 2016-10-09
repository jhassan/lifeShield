<?php
	
	session_start();
	ob_start();
	include_once('config.php');
	include_once('functions.php');
	/*include_once('include/csv.php');
	include_once('accounts.php');*/  
	
	$action = $_REQUEST['action'];
	$nUserId = $_SESSION["nUserId"];
	$strDate = date("Y-m-d");
	// Upload Images
	$folderName = "uploads/";
	
	switch($action)
	{
		// Create User
		
		case "AddUser":
			
			if(empty($_POST['nUser'])){
				$arr = array(
						'user_name'  => $_POST['user_name'],
						'user_password' 		=> MD5($_POST['user_password']),
						'user_type' => $_POST['user_type'],
					);
			}else{
				$arr = array(
						'user_name'  => $_POST['user_name'],
						'user_password' 		=> MD5($_POST['user_password']),
						'user_type' => $_POST['user_type'],
					);
			}
			//print_r($arr); die;
						
			if(empty($_POST['nUser']))
				$nLastID = InsertRec("tbluser", $arr);
			else
			{
				$nLastID = UpdateRec('tbluser', "staf_id = '".$_POST['nUser']."'",$arr);
				$nLastID = $_POST['nUserID'];
			}
			header("Location: view_user");
			//}
		break;
		
		/* ========================================================================================================================================== */
		case "AddStafEmp":
			
			// Upload Image
			$random_no = generateRandomString(5);
			$target_dir = "security_staff_images/Staff_employee/";
			$target_file = $target_dir . basename($random_no.$_FILES["fileToUpload"]["name"]);
			// print_r($files);exit;
//			print_r('<pre>'.$target_file.'</pre>');//exit;
			$uploadOk = 1;
//			print_r($_FILES); //exit;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				//	die;
				}
			}
			
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
				//die;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			//	die;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			//	die;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
				//die;
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					$_POST['fileToUpload'] = $random_no.$_FILES["fileToUpload"]["name"];
					//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				//	die;
				}
			}

			if(empty($_POST['nStafEmp'])){
				$arr = array(
						'staf_name'  => $_POST['staf_name'],
						'staf_dob' 		=> $_POST['staf_dob'],
						'staf_phone' => $_POST['staf_phone'],
						'staf_address' => $_POST['staf_address'],
						'staf_NIC' => $_POST['staf_NIC'],
						'staf_Join_date' => $_POST['staf_Join_date'],
						'staf_designation' => $_POST['staf_designation'],
						'staf_img_name'=>$_POST['fileToUpload'],
						'emp_officer' => $_POST['emp_officer'],
						'staf_created' => date("Y-m-d H:i:s")
					);
			}else{
				$arr = array(
						'staf_name'  => $_POST['staf_name'],
						'staf_dob' 		=> $_POST['staf_dob'],
						'staf_phone' => $_POST['staf_phone'],
						'staf_address' => $_POST['staf_address'],
						'staf_NIC' => $_POST['staf_NIC'],
						'staf_join_date' => $_POST['staf_Join_date'],
						'staf_designation' => $_POST['staf_designation'],
						'emp_officer' => $_POST['emp_officer'],
						'staf_img_name'=>$_POST['fileToUpload'],
						'staf_modified' => date("Y-m-d H:i:s")
					);
			}
			//print_r($arr); die;
						
			if(empty($_POST['nStafEmp']))
				$nLastID = InsertRec("tblStafEmp", $arr);
			else
			{
				$nLastID = UpdateRec('tblStafEmp', "staf_id = '".$_POST['nStafEmp']."'",$arr);
				$nLastID = $_POST['nUserID'];
			}
			header("Location: view_staf_emp");
			//}
		break;
		
		/* ========================================================================================================================================== */
		/* Security Officer */
		
		case "AddSecurityOff":
			
			// Upload Image
			$random_no = generateRandomString(5);
			$target_dir = "security_staff_images/securityOfficers/";
			$target_file = $target_dir . basename($random_no.$_FILES["fileToUpload"]["name"]);
			// print_r($files);exit;
//			print_r('<pre>'.$target_file.'</pre>');//exit;
			$uploadOk = 1;
//			print_r($_FILES); //exit;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				//	die;
				}
			}
			
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
				//die;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			//	die;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			//	die;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
				//die;
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					$_POST['fileToUpload'] = $random_no.$_FILES["fileToUpload"]["name"];
					//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				//	die;
				}
			}

			if(empty($_POST['nSecurityOff'])){
				$arr = array(
						'off_name'  => $_POST['off_name'],
						'off_dob' 		=> $_POST['off_dob'],
						'off_phone' => $_POST['off_phone'],
						'off_address' => $_POST['off_address'],
						'off_NIC' => $_POST['off_NIC'],
						'off_Join_date' => $_POST['off_Join_date'],
						'off_designation' => $_POST['off_designation'],
						'off_shift' => $_POST['off_shift'],
						'off_img_name'=>$_POST['fileToUpload'],
						'off_created' => date("Y-m-d H:i:s")
					);
			}else{
				$arr = array(
						'off_name'  => $_POST['off_name'],
						'off_dob' 		=> $_POST['off_dob'],
						'off_phone' => $_POST['off_phone'],
						'off_address' => $_POST['off_address'],
						'off_NIC' => $_POST['off_NIC'],
						'off_join_date' => $_POST['off_Join_date'],
						'off_designation' => $_POST['off_designation'],
						'off_shift' => $_POST['off_shift'],
						'off_img_name'=>$_POST['fileToUpload'],
						'off_modified' => date("Y-m-d H:i:s")
					);
			}
			
//			print_r($arr); die;
						
			if(empty($_POST['nSecurityOff']))
				$nLastID = InsertRec("tbl_sec_off", $arr);
			else
			{
				$nLastID = UpdateRec('tbl_sec_off', "off_id = '".$_POST['nSecurityOff']."'",$arr);
				$nLastID = $_POST['nUserID'];
			}
			header("Location: view_sec_off");
			//}
		break;
		
		/* ========================================================================================================================================== */		// Banner Management
		case "AddChief":
			
			// Upload Image
			$random_no = generateRandomString(5);
			$target_dir = "security_staff_images/chief/";
			$target_file = $target_dir . basename($random_no.$_FILES["fileToUpload"]["name"]);
			// print_r($files);exit;
//			print_r('<pre>'.$target_file.'</pre>');//exit;
			$uploadOk = 1;
//			print_r($_FILES); //exit;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				//	die;
				}
			}
			
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
				//die;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			//	die;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			//	die;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
				//die;
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					$_POST['fileToUpload'] = $random_no.$_FILES["fileToUpload"]["name"];
					//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				//	die;
				}
			}
			//echo "fawad";
//die;
			if(empty($_POST['nChiefID'])){ //echo "awais"; //die;
				$arr = array(
						'chief_name'  => $_POST['chief_name'],
						'dob' 		=> $_POST['dob'],
						'NIC_no' => $_POST['NIC_no'],
						'phone_no' => $_POST['phone_no'],
						'address' => $_POST['address'],
						'join_date' => $_POST['join_date'],
						'last_designation' => $_POST['last_designation'],
						'img_name'=>$_POST['fileToUpload'],
						'date_created' => date("Y-m-d H:i:s")
					);
					
					//print_r($arr);die;
			}else{
				$arr = array(
						'chief_name'  => $_POST['chief_name'],
						'dob' 		=> $_POST['dob'],
						'NIC_no' => $_POST['NIC_no'],
						'phone_no' => $_POST['phone_no'],
						'address' => $_POST['address'],
						'join_date' => $_POST['join_date'],
						'last_designation' => $_POST['last_designation'],
						'img_name'=>$_POST['fileToUpload'],
						'leave_date' => $_POST['leave_date'],
						'date_modified' => date("Y-m-d H:i:s")
					);
					
			}
						
			if(empty($_POST['nChiefID']))
				$nLastID = InsertRec("tblchief", $arr);
			else
			{
				$nLastID = UpdateRec('tblchief', "chief_id = '".$_POST['nChiefID']."'",$arr);
				$nLastID = $_POST['nUserID'];
			}
			header("Location: view_chief_record");
			//}
		break;


		/* ========================================================================================================================================== */
		/*Colony worker*/	
	
	case "AddEmployee":
			
			// Upload Image
			$random_no = generateRandomString(5);
			$target_dir = "security_staff_images/employee/";
			$target_file = $target_dir . basename($random_no.$_FILES["fileToUpload"]["name"]);
			// print_r($files);exit;
//			print_r('<pre>'.$target_file.'</pre>');//exit;
			$uploadOk = 1;
//			print_r($_FILES); //exit;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				//	die;
				}
			}
			
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
				//die;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			//	die;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			//	die;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
				//die;
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					$_POST['fileToUpload'] = $random_no.$_FILES["fileToUpload"]["name"];
					//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				//	die;
				}
			}

			if(empty($_POST['nEmployee'])){
				$arr = array(
						'emp_name'  => $_POST['emp_name'],
						'depart_id'=> $_POST['depart_id'],
						'designation_id'=> $_POST['designation_id'],
						'emp_sector'=> $_POST['emp_sector'],
						'emp_dob' 		=> $_POST['emp_dob'],
						'emp_phone' => $_POST['emp_phone'],
						'emp_address' => $_POST['emp_address'],
						'emp_NIC' => $_POST['emp_NIC'],
						'emp_Join_date' => $_POST['emp_Join_date'],
						'marital_status' => $_POST['marital_status'],
						'children' => $_POST['children'],
						'emp_img_name'=>$_POST['fileToUpload'],
						'emp_created' => date("Y-m-d H:i:s")
					);
			}else{
				$arr = array(
						'emp_name'  => $_POST['emp_name'],
						'depart_id'=> $_POST['depart_id'],
						'designation_id'=> $_POST['designation_id'],
						'emp_sector'=> $_POST['emp_sector'],
						'emp_dob' 		=> $_POST['emp_dob'],
						'emp_phone' => $_POST['emp_phone'],
						'emp_address' => $_POST['emp_address'],
						'emp_NIC' => $_POST['emp_NIC'],
						'emp_Join_date' => $_POST['emp_Join_date'],
						'marital_status' => $_POST['marital_status'],
						'children' => $_POST['children'],
						'emp_img_name'=>$_POST['fileToUpload'],
						'emp_modified' => date("Y-m-d H:i:s")
					);
			}
			//print_r($arr); die;
						
			if(empty($_POST['nEmployee']))
				$nLastID = InsertRec("tblemployee", $arr);
			else
			{
				$nLastID = UpdateRec('tblemployee', "emp_id = '".$_POST['nEmployee']."'",$arr);
				$nLastID = $_POST['nUserID'];
			}
			header("Location: view_emp");
			//}
		break;
		
		/* ========================================================================================================================================== */
		
		case "AddDepartment":
			
			
			if(empty($_POST['nDepartment'])){
				$arr = array(
					'depart_name'  => $_POST['depart_name'],
					'depart_created' => date("Y-m-d H:i:s")
				);
			}else{
				$arr = array(
					'depart_name'  => $_POST['depart_name'],
					'depart_modified' => date("Y-m-d H:i:s")
				);
			}
			//print_r($arr); die;
						
			if(empty($_POST['nDepartment']))
				$nLastID = InsertRec("departments", $arr);
			else
			{
				$nLastID = UpdateRec('departments', "depart_id = '".$_POST['nDepartment']."'",$arr);
				$nLastID = $_POST['nUserID'];
			}
			header("Location: view_department");
			//}
		break;
		
		/* ========================================================================================================================================== */
		
		case "AddDesignation":
			
			
			if(empty($_POST['nDesignation'])){
				$arr = array(
					'designation_name'  => $_POST['designation_name'],
					'designation_created' => date("Y-m-d H:i:s")
				);
			}else{
				$arr = array(
					'designation_name'  => $_POST['designation_name'],
					'designation_modified' => date("Y-m-d H:i:s")
				);
			}
			//print_r($arr); die;
						
			if(empty($_POST['nDesignation']))
				$nLastID = InsertRec("designation", $arr);
			else
			{
				$nLastID = UpdateRec('designation', "designation_id = '".$_POST['nDesignation']."'",$arr);
				$nLastID = $_POST['nUserID'];
			}
			header("Location: view_designation");
			//}
		break;

		/* ========================================================================================================================================== */
		case "AddSchoolStaff":
			
			// Upload Image
			$random_no = generateRandomString(5);
			$target_dir = "security_staff_images/school_staff_img/";
			$target_file = $target_dir . basename($random_no.$_FILES["fileToUpload"]["name"]);
			// print_r($files);exit;
//			print_r('<pre>'.$target_file.'</pre>');//exit;
			$uploadOk = 1;
//			print_r($_FILES); //exit;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				//	die;
				}
			}
			
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
				//die;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			//	die;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			//	die;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
				//die;
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					$_POST['fileToUpload'] = $random_no.$_FILES["fileToUpload"]["name"];
					//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				//	die;
				}
			}

			if(empty($_POST['nSchoolStaff'])){
				$arr = array(
						'name'  		=> $_POST['name'],
						'father_name' 	=> $_POST['father_name'],
						'user_type'		=> $_POST['user_type'],
						'user_belongs' 	=> $_POST['user_belongs'],
						'dob' 			=> $_POST['dob'],
						'gender' 		=> $_POST['gender'],
						'class' 		=> $_POST['class'],
						'join_date'		=> $_POST['join_date'],
						'phone_no' 		=> $_POST['phone_no'],
						'address'		=> $_POST['address'],
						'img_name'=>$_POST['fileToUpload'],
					);
			}else{
				$arr = array(
						'name'  		=> $_POST['name'],
						'father_name' 	=> $_POST['father_name'],
						'user_type'		=> $_POST['user_type'],
						'user_belongs' 	=> $_POST['user_belongs'],
						'gender' 		=> $_POST['gender'],
						'dob' 			=> $_POST['dob'],
						'class' 		=> $_POST['class'],
						'join_date'		=> $_POST['join_date'],
						'phone_no' 		=> $_POST['phone_no'],
						'address'		=> $_POST['address'],
						'img_name'=>$_POST['fileToUpload'],
					);
			}
			//print_r($arr); die;
						
			if(empty($_POST['nSchoolStaff']))
				$nLastID = InsertRec("school_staff", $arr);
			else
			{
				$nLastID = UpdateRec('school_staff', "school_id = '".$_POST['nSchoolStaff']."'",$arr);
				$nLastID = $_POST['nSchoolStaff'];
			}
			header("Location: school_staff");
			//}
		break;
		
		/* ========================================================================================================================================== */
		
		/* ========================================================================================================================================== */

		// Delete Chief Record
		case "DeleteChief":
			$DelID = $_REQUEST['DelID'];
			$Where = " chief_id = '".$DelID."' ";
			$nRec = DeleteRec('tblchief', $Where);
			echo "Record Deleted Successfully!";
		break;
		
		/* ========================================================================================================================================== */		
		// Delete Users
		case "DeleteUsers":
			$DelID = $_REQUEST['DelID'];
			$arrAirLine = array(
						'user_status' => '0');
			$nLastID = UpdateRec('tbluser', "user_id = '".(int)$DelID."'",$arrAirLine);
			echo "Record Deleted Successfully!";
		break;
		
		
		/* ========================================================================================================================================== */
		case "DeleteStafEmp":
			$DelID = $_REQUEST['DelID'];
			$Where = " staf_id = '".$DelID."' ";
			$nRec = DeleteRec('tblStafEmp', $Where);
			echo "Record Deleted Successfully!";
		break;

		/* ========================================================================================================================================== */		
		case "DeleteSecurityOff":
			$DelID = $_REQUEST['DelID'];
			$Where = " off_id = '".$DelID."' ";
			$nRec = DeleteRec('tbl_sec_off', $Where);
			echo "Record Deleted Successfully!";
		break;
		/* ========================================================================================================================================== */
		
		case "DeleteEmployee":
			$DelID = $_REQUEST['DelID'];
			$Where = " emp_id = '".$DelID."' ";
			$nRec = DeleteRec('tblemployee', $Where);
			echo "Record Deleted Successfully!";
		break;
		/* ========================================================================================================================================== */
		
		/* ========================================================================================================================================== */		
		case "DeleteDesignation":
			$DelID = $_REQUEST['DelID'];
			$Where = " designation_id = '".$DelID."' ";
			$nRec = DeleteRec('designation', $Where);
			echo "Record Deleted Successfully!";
		break;
		/* ========================================================================================================================================== */
		
		case "DeleteDepartment":
			$DelID = $_REQUEST['DelID'];
			$Where = "depart_id = '".$DelID."' ";
			$nRec = DeleteRec('departments', $Where);
			echo "Record Deleted Successfully!";
		break;
		/* ========================================================================================================================================== */
		
		
	}

?>