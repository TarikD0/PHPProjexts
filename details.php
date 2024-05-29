<?php 
// check GET reuquest ID param
include('config/db_connect.php');

if(isset($_POST['delete'])) {

	$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
	$sql = "DELETE FROM product WHERE id = $id_to_delete";
	echo "hello";
	if(mysqli_query($conn, $sql)){
		header('Location: index.php');
	} else {
		echo 'query error:' .mysqli_error($conn);
	}
	

}
if(isset($_GET['id'])){
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	$sql = "SELECT * FROM product WHERE id = $id";

	$result = mysqli_query($conn, $sql);


	//fetch result in array
	$prduct = mysqli_fetch_assoc($result);


	mysqli_free_result($result);
	mysqli_close($conn);

}
?>

<!DOCTYPE html>
<html>

 <?php include('templates/header.php') ?>

 <style>
 	
 	.desc {
 		padding-top: 10%;
 		color: black;
 	}
 	.desc1 {
 		padding-top: 10%;
 		color: black;
 	}
 </style>

 <div class="container center">
 	<?php if($prduct): ?>
 	<div class="desc">
 		
 	
 	<h4><?php echo htmlspecialchars($prduct['name']); ?></h4>
 	<p>Created by: <?php echo htmlspecialchars($prduct["email"]);?></p>

 	<p><?php echo date($prduct["created_at"]);?></p>
 	<h5>Description:</h5>
 	<p><?php echo htmlspecialchars($prduct["description"]);?></p>

 	<form action="details.php" method="POST">
 		<input type="hidden" name="id_to_delete" value="<?php echo $prduct['id']?>">
 		<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
 	</form>

 	<?php else: ?>
 		<div class="desc1"><h5>Product Does not exist</h5></div>
 	<?php endif; ?>
 	</div>
 </div>





 <?php include('templates/footer.php') ?>

</html>