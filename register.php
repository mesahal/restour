<?php
error_reporting(0);

$username="root";
$password="";
$server="localhost";
$db="login_register";
$con=mysqli_connect($server,$username,$password,$db);
if(isset($_POST['save_data']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $confirmpass=$_POST['confirmpass'];
  
  if($pass==$confirmpass)
  {
    $insertquery="insert into users (name,email,password) values ('$name','$email','$pass')";
  $res=mysqli_query($con,$insertquery);
  if($res)
  {
    ?>
    <script>
    alert("Registration Complete");
    </script>
    <?php
    header('location:userlogin.php');
  }

  else{
    ?>
    <script>
    alert("Something went wrong");
    </script>
    <?php

  }
}
else{
  ?>
    <script>
    alert("Password doesnot match!Try Again");
    </script>
    <?php
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
    <h3>Register Here</h3>
    
      <div class="register-form">
      
      <form action="" class="login-email" method="post">
  <div class="form-group">

    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="User name">
  </div>
  

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="pass" class="form-control" id="pass" required>
  </div>
  <div class="form-group">
    <label for="confirmpass">Confirm Password</label>
    <input type="password" name="confirmpass" placeholder="Confirm Password" required class="form-control" id="confirmpass" >
  </div>
  <div class="input-group">
  <button type="submit" name="save_data"class="btn btn-primary">Register</button></div>

  <p class="login-register-text">Have an account?<a href="userlogin.php">Login Here</a></p>
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