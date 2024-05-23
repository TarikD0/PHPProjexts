<?php 
	include('config/db_connect.php');
 	$email = "";
 	$name = "";
 	$description ="";
$errors = array('email' => '', 'name' => '', 'description' => '');

  if(isset($_POST['submit'])){
 	if(empty($_POST['email']))
  	{
  		$errors['email'] = "An email is required <br />";
  	} else {
  		$email = $_POST['email'];
  		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  			$errors['email'] = 'Email must be a valid email address'. '<br />';
  		}
  	}
  	 	if(empty($_POST['name']))
  	{
  		$errors['name'] = "A name is required <br />";
  	} else {
  		$name = $_POST['name'];
  		if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
  			$errors['name'] = 'Name must be letter and spaces only' . '<br />';
  		}
  	}
  	 	if(empty($_POST['description']))
  	{
  		$errors['description'] = "A description is required <br />";
  	} else {
		$description = $_POST['description'];
  		if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $description)){
  			$errors['description'] = 'Description must be words seperated by commas' . '<br />';
  		}

  	  	}
  	  	if(array_filter($errors)){
  			echo "errors in the form";
  		}	
  		else {
  			$email = mysqli_real_escape_string($conn, $_POST['email']);
  			$description = mysqli_real_escape_string($conn, $_POST['description']);
  			$name = mysqli_real_escape_string($conn, $_POST['name']);
  			
  			$sql = "INSERT INTO product(name,description,email) VALUES ('$name', '$description', '$email')";

  			//save to db and check
  			if(mysqli_query($conn, $sql)){
  				//success
  			}else {
  				//fail
  				echo "query error" . mysqli_error($conn);
  			}



  			header('Location: index.php');
  			}
 }

?>



<!DOCTYPE html>
<html>
 <?php include('templates/header.php') ?>

<section class="container grey-text">
	<h4 class="center">Add a Product</h4>
	<form class="white" action="add.php" method="POST">
		<label>Your email:</label>
		<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
		<div class="red-text"><?php echo $errors['email'];?><div>
		<label>Product Name:</label>
		<input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>">
		<div class="red-text"><?php echo $errors['name'];?><div>
		<label>Product Description:</label>
		<input type="text" name="description" value="<?php echo htmlspecialchars($description) ?>">
		<div class="red-text"><?php echo $errors['description'];?><div>
		<div class="center">
			<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
		</div>
	</form>
</section>
 <?php include('templates/footer.php') ?>

</html>