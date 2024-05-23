<?php 
	$conn = mysqli_connect('localhost', 'tarik', '12345','products');
	if(!$conn){
		echo "Connection error: " .mysqli_connect_error();
	}

?>