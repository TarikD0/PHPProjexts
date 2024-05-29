<?php 

session_start();

#$_SESSION['name'] = 'yoshi';

if ($_SERVER['QUERY_STRING'] == 'noname') {

	unset($_SESSION['name']);	

}

$name = $_SESSION['name'] ?? 'Guest';

$gender = $_COOKIE['gender'] ?? 'Unknown';

?>

<head>
	
	<title>Products</title>



	 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
    	html {
        	}

    	.brand {

    		background: #cbb09c;
    	}
    	.brand-text{
    		text-color: black;
    	}
    	form{
    		max-width: 460px;
    		margin: 20px auto;
    		padding: 20px;
    	}
    	 #dialog {
            font-family: Arial, sans-serif;
        }
        .ui-dialog-titlebar {
            display: none;
        }
        @media (max-width: 600px) {
            .ui-dialog {
                width: 90% !important;
                height: 80% !important;
                left: 5% !important;
                top: 10% !important;
            }
        }

    </style>
</head>
 <body clas="grey lighten-4">
 	<?php 
 	    $pageURL = "templates/login/login.php";
?>
	<nav class="z-depth-0">
		<div class="container">
			
			<a href="#" class="brand-logo brand-text">Products</a>
			<ul id = "nav-mobile" class="right hide-on-small-and-down">
				<li><a href="add.php" class = "btn brand z-depth-3">Add product</a></li>
				<li><a href="#" class="btn brand z-depth-0" onclick="#">Log In</a></li>
				<li class="grey-text"><a>Hello <?php echo htmlspecialchars($name); ?></a></li>
				<li class="grey-text"><a>(<?php echo htmlspecialchars($gender);?>)</a></li>
			</ul>
		</div>
