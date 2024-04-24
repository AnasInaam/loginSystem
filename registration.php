<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
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
                <div class="text-class">Start Your Journey!</div>
            </div>
            <div class="login-class">
                <div class="form-class">
                    <form role="form" method="post" action="registration.php">
                        <div class="register-class">Register here</div>
                        <div class="form-group">
                            <label class="label-class" for="username">Your Username:</label>
                            <input class="form-input" id="username" name="name" type="text" placeholder="Username" required autofocus>
                        </div>
                        <div class="form-group">
                            <label class="label-class" for="email">Email Address:</label>
                            <input class="form-input" id="email" name="email" type="email" placeholder="E-mail" required>
                        </div>
                        <div class="form-group">
                            <label class="label-class" for="password">Password:</label>
                            <input class="form-input" id="password" name="pass" type="password" placeholder="Password" required>
                        </div>
                        <div class="form-group-one">
                            <button class="button-class" type="reset">Reset</button>
                            <button class="button-class" type="submit" name="register">Register</button>
                        </div>
                    </form>
                    <center>
                        <b>Already registered?</b> <a class="color-class" href="login.php">Login here</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php 
include("db_conection.php");//make connection here 
if(isset($_POST['register'])) 
{ 
 $user_name=$_POST['name'];//here getting result from the post array 

 $user_pass=$_POST['pass'];//same 
 $user_email=$_POST['email'];//same 
 if($user_name=='') 
 { 
 //javascript use for input checking 
 echo"<script>alert('Please enter the name')</script>"; 
exit();//this use if first is not work then other will not show
} 
if($user_pass=='') 
{ 
echo"<script>alert('Please enter the password')</script>"; 
exit(); 
} 
if($user_email=='') 
{ 
echo"<script>alert('Please enter the email')</script>"; 
exit(); 
} 
//here query check weather if user already registered so can't register 

$check_email_query="select * from users WHERE 
user_email='$user_email'"; 
$run_query=mysqli_query($dbcon,$check_email_query); 
if(mysqli_num_rows($run_query)>0) 
{ 
echo "<script>alert('Email $user_email is already register, 
Please go to login page!')</script>"; 
exit(); 
} 
//insert the user into the database. 
$insert_user="insert into users (user_name,user_pass,user_email) 
VALUE ('$user_name','$user_pass','$user_email')"; 
if(mysqli_query($dbcon,$insert_user)) 
{ 
echo"<script>window.open('login.php','_self')</script>"; 
} 
} 
?>