<?php
	ob_start();
	include_once('config.php');
	include_once('functions.php');
	/*include_once('include/csv.php');
	include_once('accounts.php');*/  
	
	$action = $_REQUEST['action'];
	print_r($action); die;
	$nUserId = $_SESSION["nUserId"];
	$strDate = date("Y-m-d");
	// Upload Images
	$folderName = "uploads/";
		
	switch($action)
	{
		// EMployee
		case "AddEmployee":
			
			if(empty($_POST['nEmployeeID'])){
				$arr = array(
						'emp_name'=>$_POST['emp_name'],
						'emp_department'=>$_POST['emp_department'],
						'emp_vehicle'=>$_POST['emp_vehicle'],
						'entry_time'=>date('H:i:s'),
						'exit_time'=>$_POST['exit_time'],
					);
			}else{
				$arr = array(
						'emp_name'=>$_POST['emp_name'],
						'emp_department'=>$_POST['emp_department'],
						'emp_vehicle'=>$_POST['emp_vehicle'],
						'entry_time'=>date('H:i:s'),
						'exit_time'=>$_POST['exit_time'],
					);
			}
				//print_r($arr);		die;
			if(empty($_POST['nEmployeeID']))
				$nLastID = InsertRec("emp_rec", $arr);
			else
			{
				$nLastID = UpdateRec('emp_rec', "emp_rec_id = '".$_POST['nEmployeeID']."'",$arr);
				$nLastID = $_POST['nEmployeeID'];
			}
			header("Location: reports");
			//}
		break;
		
		/* Visitor */
		case "AddVisitor":
			
			if(empty($_POST['nVisitorID'])){
				if(empty($_POST['accompanying_id'])){ $val=NULL;}else{$val = $_POST['accompanying_id'];};
				$arr = array(
						'visitor_name'=>$_POST['visitor_name'],
						'visitor_NICN'=>$_POST['visitor_NICN'],
						'visitor_vehicle'=>$_POST['visitor_vehicle'],
						'emp_vehicle'=>$_POST['emp_vehicle'],
						'emp_name'=>$_POST['emp_name'],
						'entry_time'=>date('H:i:s'),
						'exit_time'=>$_POST['exit_time'],
						'return_pass'=>$_POST['return_pass'],
						'accompanying_id'=>$val,
					);
			}else{
				$arr = array(
						'visitor_name'=>$_POST['visitor_name'],
						'visitor_NICN'=>$_POST['visitor_NICN'],
						'visitor_vehicle'=>$_POST['visitor_vehicle'],
						'emp_vehicle'=>$_POST['emp_vehicle'],
						'emp_name'=>$_POST['emp_name'],
						'entry_time'=>date('H:i:s'),
						'exit_time'=>$_POST['exit_time'],
						'return_pass'=>$_POST['return_pass'],
						'accompanying_id'=>$_POST['accompanying_id'],
					);
			}
						
			if(empty($_POST['nVisitorID']))
				$nLastID = InsertRec("visitor", $arr);
			else
			{
				$nLastID = UpdateRec('visitor', "visitor_id = '".$_POST['nVisitorID']."'",$arr);
				$nLastID = $_POST['nVisitorID'];
			}
			header("Location: reports");
			//}
		break;
		
		case "AddChild":
			
			if(empty($_POST['nChildID'])){
				$arr = array(
						'child_name'=>$_POST['child_name'],
						'child_age'=>$_POST['child_age'],
						'child_class'=>$_POST['child_class'],
						'gender'=>$_POST['gender'],
						'entry_time'=>date('H:i:s'),
//						'exit_time'=>$_POST['exit_time'],
//						'return_pass'=>$_POST['return_pass'],
					);
			}else{
				$arr = array(
						//'child_name'=>$_POST['child_name'],
//						'child_age'=>$_POST['child_age'],
//						'child_class'=>$_POST['child_class'],
//						'gender'=>$_POST['gender'],
//						'entry_time'=>date('H:i:s'),
						'exit_time'=>$_POST['exit_time'],
						'return_pass'=>$_POST['return_pass'],
					);
			}
						
			if(empty($_POST['nChildID']))
				$nLastID = InsertRec("school_rec", $arr);
			else
			{
				$nLastID = UpdateRec('school_rec', "child_id = '".$_POST['nChildID']."'",$arr);
				$nLastID = $_POST['nChildID'];
			}
			header("Location: reports");
			//}
		break;
		/*=========================================================================================================================*/
		
		case "UpadeteExitTime":
		print_r('jjjjj'); die;
			
			if(empty($_POST['nUpadeteExitTime'])){
				$arr = array(
						'emp_name'=>$_POST['emp_name'],
						'emp_department'=>$_POST['emp_department'],
						'emp_vehicle'=>$_POST['emp_vehicle'],
						'entry_time'=>date('H:i:s'),
						'exit_time'=>$_POST['exit_time'],
					);
			}else{
				$arr = array(
						'emp_name'=>$_POST['emp_name'],
						'emp_department'=>$_POST['emp_department'],
						'emp_vehicle'=>$_POST['emp_vehicle'],
						'entry_time'=>date('H:i:s'),
						'exit_time'=>$_POST['exit_time'],
					);
			}
				//print_r($arr);		die;
			if(empty($_POST['nEmployeeID']))
				$nLastID = InsertRec("emp_rec", $arr);
			else
			{
				$nLastID = UpdateRec('emp_rec', "emp_rec_id = '".$_POST['nEmployeeID']."'",$arr);
				$nLastID = $_POST['nEmployeeID'];
			}
			header("Location: reports");
			//}
		break;
		/*=========================================================================================================================*/
		
		
		/*=========================================================================================================================*/
		
		case "AttandanceReport":
		print_r('jjjjj'); die;
			
			if(empty($_POST['nUpadeteExitTime'])){
				$arr = array(
						'emp_name'=>$_POST['emp_name'],
						'emp_department'=>$_POST['emp_department'],
						'emp_vehicle'=>$_POST['emp_vehicle'],
						'entry_time'=>date('H:i:s'),
						'exit_time'=>$_POST['exit_time'],
					);
			}else{
				$arr = array(
						'emp_name'=>$_POST['emp_name'],
						'emp_department'=>$_POST['emp_department'],
						'emp_vehicle'=>$_POST['emp_vehicle'],
						'entry_time'=>date('H:i:s'),
						'exit_time'=>$_POST['exit_time'],
					);
			}
				//print_r($arr);		die;
			if(empty($_POST['nEmployeeID']))
				$nLastID = InsertRec("emp_rec", $arr);
			else
			{
				$nLastID = UpdateRec('emp_rec', "emp_rec_id = '".$_POST['nEmployeeID']."'",$arr);
				$nLastID = $_POST['nEmployeeID'];
			}
			header("Location: reports");
			//}
		break;
		/*=========================================================================================================================*/
		
		
		// Delete Air Lines
		case "DeleteAirLines":
			$DelID = $_REQUEST['DelID'];
			$Where = " air_line_id = '".$DelID."' ";
			$nRec = DeleteRec('tblairlines', $Where);
			echo "Record Deleted Successfully!";
		break;
		
		// Delete Users
		case "DeleteUsers":
			$DelID = $_REQUEST['DelID'];
			$arrAirLine = array(
								'user_status' => '0');
			$nLastID = UpdateRec('tbluser', "user_id = '".(int)$DelID."'",$arrAirLine);
			echo "Record Deleted Successfully!";
		break;
		
		
		
		
		
	}

?>