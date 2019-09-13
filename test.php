<!--
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body class="ml-5">
		<div class="container-fluid">
		<h1>EDITING CONTENT IN PHP!</h1>
    	<form method="post" class="form-group">
			<p>NAME:<br/><input class="form-control" type="text" name="name" value ="<//$name "></p>
			<p>AGE:<br/><input class="form-control" type="text" name="age" value =" //$age ?>"></p>
			<p>EMAIL:<br/><input class="form-control" type="text" name="email" value =" <?=$email ?>"></p>
			<p>GENDER:<br/><input type="radio" name="gender" value="male"  <?= echo ($gender=='male')?'checked':'' ?> >Male
<input type="radio" name="gender" value="female" <?= echo ($gender=='female')?'checked':'' ?> >Female</p>
			<p>SKILLS:<br/>
			<input type="checkbox" name="skills[]" value="javascript" <?= echo in_array("javascript",$skills)?'checked':''?>> Javascript
			<input type="checkbox" name="skills[]" value="php"  <?= echo in_array("php",$skills)?'checked':'' ?>>PHP
			<input type="checkbox" name="skills[]" value="pdo" <?= echo in_array("pdo",$skills)?'checked':'' ?>>PDO<br/>
			<input type="hidden" name="sno" value ="< //$sno ?>">
			<input type="submit" value="UPDATE">
		</form>
  	</div>
   	
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>	
</body>
</html>
-->
