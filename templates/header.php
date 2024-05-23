<head>
	<title>Products</title>

	 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
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
    	        #btnsignin {
            display: inline-block;
            padding: 10px 20px;
            border: 2px solid transparent;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            transition: all 0.3s ease;
        }

        /* Hover effect */
        #btnsignin:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

.lightbox-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
            z-index: 9999; /* Ensure the lightbox is on top */
            justify-content: center;
            align-items: center;
        }

        .lightbox-content {
            max-width: 80%;
            max-height: 80%;
            overflow: auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }

        .lightbox-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .iframe-container {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .iframe-container iframe {
            width: 100%;
            height: 100%;
            border: none;
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
				<li><a href="add.php" class = "btn brand z-depth-0">Add product</a></li>
<a href="#" onclick="openLightbox('<?php echo $pageURL; ?>')">Open Page</a>
				<li><a href="templates/login/login.php" id="btnsignin" class="btn brand z-depth-0" onclick="openLightBox(<?php echo $pageURL; ?>)">Log In</a></li>
			</ul>
		</div>
	</nav>
	<script>
function openLightbox(url) {
            var iframe = document.getElementById('iframeContent');
            iframe.src = url;
            document.querySelector('.lightbox-container').style.display = 'flex';
        }

        // Function to close the lightbox
        function closeLightbox() {
            var iframe = document.getElementById('iframeContent');
            iframe.src = ""; // Clear the iframe content
            document.querySelector('.lightbox-container').style.display = 'none';
        }
        </script>