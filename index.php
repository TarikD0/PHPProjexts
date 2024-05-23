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
 <?php include('templates/header.php') ?>
 <h4 class="center grey-text">Products</h4>
 <div class="container grey">
 	<div class="row">
 		<?php foreach ($products as $product): ?>
 			<div class="col s6 md3">
 				<div class="card z-depth-0">
 					<div class="card-content center">
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
 		<?php if(count($products) >= 2): ?>
 			<p>There are more than 2 products</p>
 		<?php else: ?>
 			<p>There are less than 3 products</p>
 		<?php endif; ?>
 	</div>
 </div>
 <?php include('templates/footer.php') ?>
</body>
</html>