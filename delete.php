<?php
require_once "pdo.php";
$var = $_GET['sno'];
echo $var;
if(isset($_GET['sno'])){
	$sql = "DELETE FROM `form` WHERE sno = :sno ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array(
		':sno' => $_GET['sno']));
}
?>