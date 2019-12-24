<?php
require "Model/account.php";
$servername = "localhost";
$username = "root";
$password = "";
$database = "ukuleleshopmanagement";
$db = new mysqli($servername, $username, $password, $database);
$sql ="select * from account; ";
$accounts = $db->query($sql)->fetch_all();
// var_dump($accounts);

if(isset($_POST["username"]) && isset($_POST["password"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$sql = "SELECT * from Account where username='$username' and password='$password'";
        $user = $db->query($sql)->fetch_object("Account");
        if (isset($user) && $user->checkRole()){
            header("Location: Model/account.php");
        }
        
	} else {
		
    }
if(isset($_POST["forgot-username"]) && isset($_POST["forgot-phonenumber"])){
		$username = $_POST["forgot-username"];
		$phone = $_POST["forgot-phonenumber"];
		$sql = "SELECT * from Account where username='$username' and password='$phone'";
        $user = $db->query($sql)->fetch_object("Account");
        if (isset($user)){
            echo  "dsadsadsa<script> alert('Your password: login again!'); </script>";
            header("Location: Model/account.php");
        }
        
	} else {
		
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hung Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div id="container-login">
        <div id="login-box">
            <form action="" method="POST">
                <h1>Login</h1>
                <div class="text-box">
                    <i class="fas fa-user"></i>
                    <input id="username" type="text" placeholder="Username" name="username">
                </div>
                <div class="text-box">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" placeholder="Password" name="password">
                </div>
                <button class="btn-outline-primary" onclick="login()">Sign in</button>
            </form>
            <div class="footer-login">
                <p onclick="displayForgotContainer()">Forgot your password!</p>
                <button class="btn-outline-warning" onclick="displayRegister()">Sign up</button>
            </div>
        </div>
        <div id="forgot-box">
            <h3>Form forgot password</h3>
            <form action="" method="POST">
            <div class="text-box">
                <i class="fas fa-user"></i>
                <input id="forgot-username" type="text" name="forgot-username" placeholder="Username">
            </div>
            <div class="text-box">
                <i class="fas fa-blender-phone"></i>
                <input id="forgot-phonenumber" name="forgot-phonenumber" type="text" placeholder="Your phone number">
            </div>
            <div class="text-box" id="code-box">
                <i class="fas fa-code"></i>
                <input id="code" type="text" placeholder="Enter code and recheck">
            </div>
            <button class="btn-outline-primary" onclick="checkForgotPassword()">Check</button>
            </form>
        </div>
    </div>
    <div id="container-register" style="display: none;">
        <div id="register-box">
            <h1>Register</h1>
            <div class="text-box">
                <i class="fas fa-blender-phone"></i>
                <input id="phonenumber-register" type="text" placeholder="Your phone number">
            </div>
            <div class="text-box">
                <i class="fas fa-user"></i>
                <input id="username-register" type="text" placeholder="Username">
            </div>
            <div class="text-box">
                <i class="fas fa-lock"></i>
                <input id="password-register1" type="password" placeholder="Password">
            </div>
            <div class="text-box">
                <i class="fas fa-lock"></i>
                <input id="password-register2" type="password" placeholder="Enter password again">
            </div>
            <div class="text-box" id="code-register-box">
                <i class="fas fa-code"></i>
                <input id="code-register" type="text" placeholder="Enter code and recheck">
            </div>
            <button class="btn-outline-primary" onclick="register()">Sign up</button>
        </div>
    </div>
    <script src="js.js"></script>
</body>

</html>