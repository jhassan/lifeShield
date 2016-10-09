<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=lifeShield', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM tblemployee WHERE emp_name LIKE (:keyword) ORDER BY emp_id ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$emp_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['emp_name']);
	// add new option
    //echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['country_name']).'\'); clickme('.$rs['_id'].');" style="cursor: pointer;">'.$country_name.'</li>';
	echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['emp_name']).'\'); ('.$rs['emp_id'].');" style="cursor: pointer;">'.$emp_name.'</li>';
}
?>