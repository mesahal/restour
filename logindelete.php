<?php
session_start();
error_reporting(0);

$username="root";
$password="";
$server="localhost";
$db="login_register";
$con=mysqli_connect($server,$username,$password,$db);
if(isset($_POST['submit']))

{
  $email=$_POST['email'];
  $pass=$_POST['pass'];
 
  $sql="select * from admin where email='$email' AND password='$pass'";
  $res=mysqli_query($con,$sql);

$row=mysqli_fetch_array($res);
if(($row['email']==$email) && ($row['password']==$pass))
{
    $_SESSION['email']=$email;
        header("location:nextdelete.php");



}
else{
    echo "Log in Failed!Email or Password doesn't match";
}



}



?>





<!DOCTYPE html>
<html>
<head>
  
  <title>website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-6 register-left">
      <img src="image/reg.png">
    </div>
    <div class="col-md-6 register-right">
    <h3>Log in as Admin</h3>
    
      <div class="register-form">
      
      <form action="" class="login-email" method="post">
  

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="pass" class="form-control" id="pass" required>
  </div>
  

  
  <div class="input-group">
  <button type="submit" name="submit"class="btn btn-primary">Log in</button></div>

  
</form>
<div class="alert alert-info" style="display: none;"></div>


      </div>


    </div>

  </div>

</div>

    



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>