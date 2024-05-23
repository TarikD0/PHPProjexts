<?php 
	include('config/db_connect.php');

	//write query for all products
	#$sql = 'SELECT * FROM product'
	$sql = 'SELECT name, description, id FROM product ORDER BY created_at';

	//make query & get result

	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_free_result($result);
	//close connection
	mysqli_close($conn);

	explode(',', $products[0]['description'])



?>


<!DOCTYPE html>
<html>
<style>
.card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    margin: 20px;
    padding: 20px;
    text-align: center;
}

/* Hover effect */
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
}

/* Card header */
.card-header {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

/* Card body */
.card-body {
    font-size: 16px;
    color: #666;
    margin-bottom: 20px;
}

/* Button styles inside the card */
.card .btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

/* Button hover effect */
.card .btn:hover {
    background-color: #0056b3;
}

/* Add a gradient background to the card */
.card-gradient {
    background: linear-gradient(135deg, #ff6f91, #ff9671, #ffc75f);
    color: black;
}

/* Add some padding to the card content */
.card-content {
    padding: 20px;
}
</style>
 <?php include('templates/header.php') ?>
 <h4 class="center grey-text">Products</h4>
 <div class="container">
 	<div class="row">
 		<?php foreach ($products as $product): ?>
 			<div class="col s6 md3">
 				<div class="card card-gradient z-depth-0">
 					<div class="card-body card-content center">
 						<img src="https://upload.wikimedia.org/wikipedia/commons/a/a3/Vehn%C3%A4pelto_6.jpg" width="50" height="50">
 						<h6><?php echo htmlspecialchars($product['name']);?></h6>
 						<ul><?php foreach (explode(',', $product['description']) as $ing){?>
 							<li><?php echo htmlspecialchars($ing);?></li>
 							<?php }?>
 						</ul>
 					</div>
 					<div class="card-action right-align">
 						<a class="brand-text" href="#">more info</a>
 					</div>
 				</div>
 			</div>

 		<?php endforeach;?>
 	</div>
 </div>
 <?php include('templates/footer.php') ?>
</body>
</html>