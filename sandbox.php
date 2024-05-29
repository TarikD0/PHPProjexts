<?php 


	$score = 50;


#	if ($score > 40) {
#		echo "high score";
#	} else {
#		echo "low score";
#	}

if (isset($_POST['submit'])) {

	setcookie('gender', $_POST['gender'], time() + 86400);
	session_start();
	$_SESSION['name'] = $_POST['name'];
	header('Location: index.php');

}


?>


<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
		<select name="gender">
			<option value="male">male</option>
			<option value="female">female</option>
			
		</select>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>