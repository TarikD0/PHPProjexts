<head>
	
	<title>Products</title>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


	 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
    	html {
			width: 100vw;
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

			</ul>
		</div>
