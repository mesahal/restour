<!DOCTYPE html>
<html>
<head>
  
  <title>website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
 
    <a class="navbar-brand" href="#"><img src="image/log.png" width="80px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="members.php">Our Members</a>
        </li>
      
        
        <li class="nav-item">
          <a class="nav-link" href="receiver.php">Our Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tour.php" >Tour Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" >Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hotel1.php">Find More</a>
        </li>
      </ul>
    </div>
  
</nav>
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
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
 
  
  <div class="form-group">
    <label for="bloodgroup">Blood Group</label>
    <input type="text" name="bloodgroup" class="form-control" id="bloodgroup" placeholder="Blood Group">
  </div>
  
  <div class="form-group">
    <label for="Contact_number">Contact Number</label>
    <input type="text" pattern= "[0-9]{11}" maxlength="11" name="Contact_number"  class="form-control" id="Contact_number" placeholder="+88" >
 
 
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="no_of_rooms">Number of Rooms for reservation</label>
    <input type="number" name="no_of_ticket" class="form-control" id="no_of_ticket" value="1" min="1" max="1" placeholder="Affected or Not">
  </div>
  <button type="submit" name="save_data"class="btn btn-primary">Submit</button>
</form>
<div class="alert alert-info" style="display: none;"></div>


      </div>


    </div>

  </div>

</div>



<section id="about-us">
  <div class="container">
    <h2 class="title text-center">Why choose us</h2>
    <div class="row">
      <div class="col-md-6 about-us">
        <p class="about-title">How are we different</p>
        <ul>
          <li>Online Tour Management</li>
          <li>Online Staff Registration</li>
          <li>Transportation booking facility</li>
          <li>Online Hotel search System</li>
          <li>Online Suite Booking</li>
          <li>Full Control Admin Panel</li>
          <li>Tour Guide Management</li>
          <li>And Many More</li>
        </ul>

      </div>
      <div class="col-md-6">
        <img src="image/banner.png" class="img-fluid" alt="">
      </div>

    </div>
  </div>
</section>

<section id="social">
 <div class="container text-center">
<p>Find us on social media</p>
<div class="icon">
<a href="#"><img src="image/fb.png" alt=""></a>
<a href="#"><img src="image/twitter.png" alt=""></a>
<a href="#"><img src="image/wpts.jpg" alt=""></a>
</div>
 </div>
</section>
<section id="footer">
<img src="image/wave2.png" class="footer-img">
<div class="container">
  <div class="row">
    <div class="col-md-3 footer-box">
      <h4>Address</h4>
      <p>House-21<br>Motijheel<br>Dhaka</p>
    </div>
    <div class="col-md-3 footer-box">
      <h4>Phone</h4>
      <ul>
        <li>
          01767453687
        </li>
        <li>
          01965348790
        </li>
        <li>
          01356795642
        </li>
        <li>
          01490876745
        </li>
      </ul>
    </div>
    <div class="col-md-3 footer-box">
      <h4>Email</h4>
      <ul>
        <li>
          eva@gmail.com
        </li>
        <li>
          rabita@gmail.com
        </li>
        <li>
          sahal@gmail.com
        </li>
        <li>
          arani@gmail.com
        </li>
      </ul>
    </div>
    <div class="col-md-3 footer-box">
      <ul>
        <li>
          Click below to register<br>
          <a href="form.php"><img src="image/rec1.png"></a>
        </li>
      </ul>
</div>

  </div>

</div>       
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
<?php



$username="root";
$password="";
$server="localhost";
$db="login_register";
$con=mysqli_connect($server,$username,$password,$db);
if(isset($_POST['save_data']))
{
  $name=$_POST['name'];
  $bloodgroup=$_POST['bloodgroup'];
  $Contact_number=$_POST['Contact_number'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $no_of_ticket=$_POST['no_of_ticket'];
  $insertquery="insert into register_user_train (name,bloodgroup,Contact_number,email,address,no_of_ticket) values ('$name','$bloodgroup','+88".$Contact_number."','$email','$address','$no_of_ticket')";
  $res=mysqli_query($con,$insertquery);


  if($res)
  {
    ?>
    <script>
    alert("Congratulations.Booking Succesful");
    </script>
    <?php
    header('location:indexnew.php');
  }
  else{
    ?>
    <script>
    alert("Booking Not Successful");
    </script>
    <?php

  }
  
}
?>