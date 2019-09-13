<?php 
require_once "pdo.php";
//$var = $_POST['sno'];
////echo $var;

if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['skills']))
{
	$checkBox = implode(',', $_POST['skills']);
	$sql = "UPDATE `form` SET `name`= :name,`age`=:age,`email`= :email,`gender`= :gender,`skills`= :skills WHERE sno =:sno";
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array(
		':sno' => $_POST['sno'],
		':name' => $_POST['name'],
		':age' => $_POST['age'],
		':email' => $_POST['email'],
		':gender' => $_POST['gender'],
		':skills' => $checkBox));
//	header('Location: index.html');
////	echo $_POST['name'];
//	return;
	$query = $pdo->query("SELECT*FROM `form` ");
	while($row = $query->fetch(PDO::FETCH_ASSOC)){
		$table_content[] = '<tr><td>'. $row["sno"] .'</td><td>' . $row["name"] . '</td><td>' . $row["age"] . '</td><td>' . $row["email"] .'</td><td>' . $row["gender"] . '</td><td>' . $row["skills"] . '</td><td><button name="edit" id="edit" data-id='. $row["sno"] . '>EDIT</button></td><td><button name="delete" id="delete" data-id=' . $row["sno"] . '>DELETE</button></td></tr>';
		
	}
	echo json_encode($table_content);
}
else{
	$stmt = $pdo->prepare("SELECT `sno`, `name`, `age`, `email`, `gender`, `skills` FROM `form` WHERE sno =:sno");
	$stmt->execute(array(':sno' => $_POST['sno']));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$data['name'] = htmlentities($row['name']);
	$data['age'] = htmlentities($row['age']);
	$data['email'] = htmlentities($row['email']);
	$data['gender'] = htmlentities($row['gender']);
	$data['skills'] = explode(",",htmlentities($row['skills']));
	$data['sno'] = $row['sno'];
	
	echo json_encode($data);
}


?>


