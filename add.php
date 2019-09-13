<?php
require_once 'pdo.php';


if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['skills']))
{
//	echo $_POST['sno'];
	$checkBox = implode(',', $_POST['skills']);
	$sql = "INSERT INTO form(name, age, email, gender, skills) VALUES (:name, :age, :email, :gender, :skills)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array(
		':name' => $_POST['name'],
		':age' => $_POST['age'],
		':email' => $_POST['email'],
		':gender' => $_POST['gender'],
		':skills' => $checkBox));

	$query = $pdo->query("SELECT `sno`, `name`, `age`, `email`, `gender`, `skills` FROM `form`");
//	$query->execute(array(':sno' => $_POST['sno']));
	while($row = $query->fetch(PDO::FETCH_ASSOC))
	{
		$data['sno'] = $row['sno'];
		$data['name'] = $row['name'];
		$data['age'] = $row['age'];
		$data['email'] = $row['email'];
		$data['gender'] = $row['gender'];
		$data['skills'] = $row['skills']; 
	}
	
	echo json_encode($data);
}

?>