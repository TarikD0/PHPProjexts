<?php 



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <meta name="appleid-signin-client-id" content="[CLIENT_ID]">
    <meta name="appleid-signin-scope" content="[SCOPES]">
    <meta name="appleid-signin-redirect-uri" content="[REDIRECT_URI]">
    <meta name="appleid-signin-state" content="[STATE]">

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            display: flex;
            height: 100%;
        }

        .column {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .column.empty {
            background-color: white;
            /* Optional: Add a background color to see the empty column */
            flex-direction: column;
            /* Arrange children in a column */
        }

        .half {
            flex: 1;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            border-top: 1px solid #ccc;
        }

        .half:first-child {
            border-top: none;
            /* Remove top border for the first half */
        }

        .wrap-login100 {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login100-form-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .wrap-input100 {
            position: relative;
            margin-bottom: 20px;
        }

        .input100 {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .focus-input100 {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #999;
            pointer-events: none;
        }

        .btn-show-pass {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .container-login100-form-btn {
            text-align: center;
        }

        .login100-form-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login100-form-btn:hover {
            background-color: #0056b3;
        }

        .text-center {
            text-align: center;
        }

        .p-t-115 {
            padding-top: 115px;
        }

        .txt1 {
            color: #666;
        }

        .txt2 {
            color: #007bff;
            text-decoration: none;
        }

        .top-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .top-column {
            flex: 1;
            margin-left: 10px;
            /* Optional: Adjust spacing between columns */
            align-items: center;
            justify-content: center;
        }

        .top-right-column {
            flex: 1;
            margin-right: 10px;
            /* Optional: Adjust spacing between columns */
            display: flex;
            justify-content: center;
        }

        .main-block {
            display: flex;
            width: 90%;
            padding: 10px 0;
            border-radius: 5px;
            box-shadow: 1px 1px 8px 0px #666;
            background: #fff;
        }

        .block-item {
            width: 50%;
            padding: 20px;
        }


        i {
            width: 50px;
            font-size: 24px;
        }

        .btn {
            display: flex;
            align-items: center;
            width: 100%;
            height: 40px;
            margin: 10px 0;
            outline: none;
            border: 0;
            border-radius: 5px;
            box-shadow: 2px 2px 2px #666;
            background: #e8e8e8;
            color: #fff;
            cursor: pointer;
        }

        .btn:hover {
            transform: scale(1.03);
        }

        .btn span {
            font-size: 16px;
        }

        .facebook {
            background: #3a589e;
        }

        .twitter {
            background: #429cd6;
        }

        .google {
            background: #d34836;
        }

        .chat-button {
            position: relative;
            width: 60px;
            height: 60px;
            background-color: #007bff;
            color: white;
            border: 1px;
            border-radius: 50%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            font-size: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .chat-button:hover {
            background-color: #0056b3;
            /* Darker shade for hover effect */
        }

        .chat-container {

            position: relative;
            display: flex;
            height: 60px;
            align-items: center;
            background-color: white;
            color: grey;
            padding: 10px;
            padding-top: 30px;
            z-index: 1000;
            /* Ensure the chat container is on top */
        }

        .chat-text {
            margin-left: 10px;
            /* Add margin to the left of the chat text */
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="column">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-26">
                        Welcome
                    </span>
                    <span class="login100-form-title p-b-48">
                        <i class="zmdi zmdi-font"></i>
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>
                    <div class="text-center p-t-115">
                        <span class="txt1">
                            Don’t have an account?
                        </span>
                        <a class="txt2" href="#">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="column empty">
            <div class="half">
                <script src="https://accounts.google.com/gsi/client" async></script>
                <div class="top-row">
                    <div class="main-block">
                        <div class="block-item left">
                            <h1>Sign up with:</h1>
                            <p><small>W3docs provides free learning materials for programming languages like HTML, CSS,
                                    Java Script, PHP etc.</small>
                            </p>
                        </div>
                        <div class="block-item right">
                            <button class="btn facebook" data-provider="facebook"><i class="fab fa-facebook-f"></i><span>Facebook</span></button>
                            <button class="btn twitter" data-provider="twitter"><i class="fab fa-twitter"></i><span>Twitter</span></button>
                            <button class="btn google" data-provider="google"><i class="fab fa-google"></i><span>Google</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="half">
                <script src="https://accounts.google.com/gsi/client" async></script>
                <div class="top-row">
                    <div class="main-block">
                        <div class="block-item left">
                            <h1>Join our community</h1>
                            <p><small>W3docs provides free learning materials for programming languages like HTML, CSS,
                                    Java Script, PHP etc.</small>
                            </p>
                        </div>
                        <div class="block-item right chat-container">

                            <button class="chat-button" onclick="openChat()">💬</button>
                            <div class="chat-text">24/7 Customer Support</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>
    <script>
        function openChat() {
            // Function to handle opening the chat box
            alert("Chat box opened!");
        }
    </script>
</body>

</html>
