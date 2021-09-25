<?php
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="new.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>Document</title>
</head>
<body>
    <div class="header">
        <div class="navbar">
            <div class="logo">
                <a href="indexnew.php">Travel<span>GO</span></a>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="indexnew.php">Home</a></li>
                        <li><a href="hotellist.php">Hotel</a></li>
                       <li> <a href="trainlist.php">Train</a></li>
                       <li> <a href="buslist.php">Bus</a></li>
                       <li> <a href="client.php">Our Clients</a></li>
                       <li> <a href="add.php">Join Us</a></li>
                       <li><?php if($_SESSION["email"]){
echo "Welcome user " . $_SESSION["email"];
}?></li>
                       
                    
                </ul>
            </div>

            <div class="reg-btn">
                <a href="logout.php">Log out</a>
            </div>
        </div>
        <div class="banner">
            <div class="app-text">
                <h3>Why we are the best</h3>
                <p>We provide online booking services and an provide you an hassel free journey</p>
                <div class="center-img">
                    <img src="image/new-removebg.png" alt="">
                </div>
                

            </div>
        </div>
        <div class="social-icons">
            <ul>
                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                <li><a href=""><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="wave-animate">
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
        
        
    </div>
    <section id="services">
  <div class="container text-center">
  <h2 class="title">Why are we here for? </h2>
    <div class="row">
      <div class="col-md-4 services">
        <img src="image/newtravel-removebg.png" class="service-img">
        <h4>Tour Management</h4>
        <p>During this pandemic we are trying to provide you a better travel experience</p>
      </div>
      <div class="col-md-4 services">
        <img src="image/register.png" class="service-img">
        <h4>Hotel Reservation</h4>
        <p>Now hotel reservation is just one click away!</p>
      </div>
      <div class="col-md-4 services">
        <img src="image/24.png" class="service-img">
        <h4>Transportation</h4>
        <p>Book your train or bus ticket by simply following some steps</p>
      </div>
    </div>
    <button type="button" class="btn btn-primary">All Services</button>
  </div>
</section>
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
          <a href="receiverreg.php"><img src="image/rec1.png"></a>
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