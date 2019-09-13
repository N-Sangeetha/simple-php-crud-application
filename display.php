<?php
require_once 'pdo.php';

$stmt = $pdo->query("SELECT*FROM `form` ");
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//		$data['sno'] = $row['sno'];
//		$data['name'] = $row['name'];
//		$data['age'] = $row['age'];
//		$data['email'] = $row['email'];
//		$data['gender'] = $row['gender'];
//		$data['skills'] = $row['skills'];
		$data[] = $row;
	}
echo json_encode($data);
?>