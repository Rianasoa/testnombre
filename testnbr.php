<?php 
	if (isset($_POST['number']) && !empty($_POST['number'])) {
		if ($_POST['number'] < 0) {
			echo "le nombre est inférieur à 0";
		}else{
			echo "le nombre est supérieur à 0";
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post" accept-charset="utf-8">
		Entrer un nombre : <input type="text" name="number">
		<input type="submit" name="" value="Tester">
	</form>
</body>
</html>