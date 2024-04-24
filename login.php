<?php 
session_start();//session starts here 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="main-class">
        <div class="bar-class">
            <div class="main-bar-home-class">HOME</div>
            <div class="main-bar-menu-class">
                <div class="menu">
                    <div class="menu-image">
                        <div class="line-class"></div>
                        <div class="line-class"></div>
                        <div class="line-class"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-info-class">
            <div class="main-landing-class">
                <div class="text-class">Begin your adventure!</div>
            </div>
            <div class="login-class">
                <div class="form-class">
                    <form role="form" method="post" action="login.php">
                        <div class="register-class">Login here</div>
                        <div class="form-group">
                            <label class="label-class" for="email">Email Address:</label>
                            <input class="form-input" id="email" name="email" type="email" placeholder="E-mail" required autofocus>
                        </div>
                        <div class="form-group">
                            <label class="label-class" for="password">Password:</label>
                            <input class="form-input" id="password" name="pass" type="password" placeholder="Password" required>
                        </div>
                        <div class="form-group-one">
                            <button class="button-class" type="reset">Reset</button>
                            <button class="button-class" type="submit" name="login">Login</button>
                        </div>
                    </form>
                    <center>
                        <b>"Haven't joined yet?</b> <a class="color-class" href="registration.php">Register today!</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<?php 
include("db_conection.php"); 
if(isset($_POST['login'])) 
{ 
 $user_email=$_POST['email']; 
 $user_pass=$_POST['pass']; 
 $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'"; 
 $run=mysqli_query($dbcon,$check_user); 
 if(mysqli_num_rows($run)) 
 { 
 echo "<script>window.open('welcome.php','_self')</script>"; 

 $_SESSION['email']=$user_email;//here session is used 
 } 
 else 
 { 
 echo "<script>alert('Email or password is incorrect!')</script>"; 
 } 
} 
?>


