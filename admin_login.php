<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <!-- Link to your custom CSS file -->
    <link rel="stylesheet" href="admin_login.css">
</head>
<body>
    <div class="login-container">
        <h2 class="login-title">Admin Login</h2>
        <form class="login-form">
            <input type="text" name="username" class="login-input" placeholder="Username" required>
            <input type="password" name="password" class="login-input" placeholder="Password" required>
            <button type="submit" class="login-button">Login</button>
        </form>
      
    </div>
</body>
</html>

<?php 

include("db_conection.php"); 
 
if(isset($_POST['admin_login']))//this will tell us what to do if some 

{ 
 $admin_name=$_POST['admin_name']; 
 $admin_pass=$_POST['admin_pass']; 
 $admin_query="select * from admin where 
admin_name='$admin_name' AND admin_pass='$admin_pass'"; 
 $run_query=mysqli_query($dbcon,$admin_query); 
 if(mysqli_num_rows($run_query)>0) 
 { 
 echo "<script>window.open('view_users.php','_self')</script>"; 
 } 
 else {echo"<script>alert('Admin Details are incorrect..!')</script>";} 
} 
?>