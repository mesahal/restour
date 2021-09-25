<?php

include 'connection.php';
if(isset($_POST['save_data']))
{
  $name=$_POST['name'];
  $location=$_POST['location'];
  $address=$_POST['address'];
  $Contact_number=$_POST['Contact_number'];
  $email=$_POST['email'];
  $ratings=$_POST['ratings'];
  $insertquery="INSERT INTO `hotel`( `Name`, `Location`, `Address`, `Contact Number`, `Email`, `Ratings`) VALUES ('$name','$location','$address','$Contact_number','$email','$ratings')";
  $res=mysqli_query($con,$insertquery);


  if($res)
  {
    ?>
    <script>
    alert("Data inserted properly");
    </script>
    <?php
    header('location:allhotel.php');
  }
  else{
    ?>
    <script>
    alert("Data not inserted properly");
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
  <link rel="stylesheet" type="text/css" href="stylereg.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" >
</head>
<body>
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
 
    <a class="navbar-brand" href="#"><img src="image/log.png" width="90px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="members.php">Our Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userinfo.php" >Blood Type</a>
        </li>
      

        <li class="nav-item">
          <a class="nav-link" href="search.php" >Find More</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="receiver.php">Our Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration.php" >Join Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="overview.php" >Overview</a>
        </li>
      </ul>
    </div>
  
</nav>
</section>

<div class="container">
  <div class="row">
    <div class="col-md-6 register-left">
      <img src="image/reg.png">
    </div>
    <div class="col-md-6 register-right">
    <h3>Register Here</h3>
      <div class="register-form">
      <form action="" method="post">
      <div class="form-group">

<label for="name">Name</label>
<input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Hotel Name">
</div>
<div class="form-group">
    <label for="location">Location</label>
    <input type="text" name="location" class="form-control" id="location" placeholder="Location" required>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
  </div>
   
  <div class="form-group">
    <label for="Contact_number">Contact Number</label>
    <input type="text" name="Contact_number" class="form-control" id="Contact_number" placeholder="Number" required>
  </div>


  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="ratings">Ratings</label>
    <input type="text" name="ratings" class="form-control" id="ratings" placeholder="Ratings" required>
  </div>
  <div class="input-group">
  <button type="submit" name="save_data"class="btn btn-primary">Register</button></div>
</form>
<div class="alert alert-info" style="display: none;"></div>


      </div>


    </div>

  </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 </head>
 
 

</body>

</html>
