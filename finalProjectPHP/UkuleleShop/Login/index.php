<?php
require "../Model/account.php";
require "../Add/database.php";
$sql ="select * from account; ";
$accounts = $db->query($sql)->fetch_all();
// var_dump($accounts);
// $checklogin = 0;
// $checkRegister= -1;
//login
if(isset($_POST["username"]) && isset($_POST["password"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$sql = "SELECT * from Account where username='$username' and password='$password'";
        $user = $db->query($sql)->fetch_object("Account");
        if (isset($user) && $user->checkRole()){
            header("Location: ../Shop/indexAd.php");
            // $checklogin= 1;
        }   
    }
//register 
if(isset($_POST["phonenumber-register"]) && isset($_POST["username-register"]) &&  
isset($_POST["password-register1"]) && isset($_POST["password-register2"])){
        $username = $_POST["username-register"];
        $phone = $_POST["phonenumber-register"];
        $password1 = $_POST["password-register1"];
        $password2 = $_POST["password-register2"];
        $sql = "SELECT * from Account where username='$username';";
        $user = $db->query($sql)->fetch_object("Account");
        if($user==null){
            $user= new Account();
            if ($user->checkPasswordRegister($password1,$password2)&& $user->checkPhone($phone)){
                $sql ="insert into account(username,PASSWORD,phone) values ('". $username ."','" .$password1."','".$phone."'); ";
                $db->query($sql);
            }    
        }
        // if (isset($user)){
        //     $checkRegister= 0; 
        // }else if ($user->checkPasswordRegister($password1,$password2)==true){
        //     $checkRegister= 2;
        // }else {
        //     $checkRegister= 1;
        // }            
}else {

}
//forgot password
if(isset($_POST["forgot-username"]) && isset($_POST["forgot-phonenumber"])){
		$username = $_POST["forgot-username"];
		$phone = $_POST["forgot-phonenumber"];
		$sql = "SELECT * from Account where username='$username' and phone='$phone'";
        $user = $db->query($sql)->fetch_object("Account");
        if (isset($user)){
            echo  "<script>  alert('Your password is: ".$user->getPassword()."');</script>";
        }
    } 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hung Shop Login</title>
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
                <button class="btn-outline-primary" >Sign in</button>
                <!-- onclick="login(?php echo $checklogin; ?>)" -->
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
            <!-- <div class="text-box" id="code-box">
                <i class="fas fa-code"></i>
                <input id="code" type="text" placeholder="Enter code and recheck">
            </div> -->
            <button class="btn-outline-primary" onclick="checkForgotPassword()">Check</button>
            </form>
        </div>
    </div>
    <div id="container-register" style="display: none;">
        <div id="register-box">
            <h1>Register</h1>
            <form action="" method="POST">
            <div class="text-box">
                <i class="fas fa-blender-phone"></i>
                <input id="phonenumber-register" name="phonenumber-register" type="text" placeholder="Your phone number">
            </div>
            <div class="text-box">
                <i class="fas fa-user"></i>
                <input id="username-register" name="username-register" type="text" placeholder="Username">
            </div>
            <div class="text-box">
                <i class="fas fa-lock"></i>
                <input id="password-register1" name="password-register1" type="password" placeholder="Password">
            </div>
            <div class="text-box">
                <i class="fas fa-lock"></i>
                <input id="password-register2" name="password-register2" type="password" placeholder="Enter password again">
            </div>
            <!-- <div class="text-box" id="code-register-box">
                <i class="fas fa-code"></i>
                <input id="code-register" type="text" placeholder="Enter code and recheck">
            </div> -->
            <button class="btn-outline-primary" >Sign up</button>
            <!-- onclick="register(?php $checkRegister; ?>)" -->
            </form>
        </div>
    </div>
    
    <script src="../Login/script.js"></script>
    
</body>

</html>