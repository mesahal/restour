<?php


include 'connection.php';
$ids=$_GET['id'];
$showquery="select * from trainbook where id={$ids}";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['save_data']))
{
    $idupdate=$_GET['id'];

$trainno=$_POST['trainno'];
  $name=$_POST['name'];
  $fromcity=$_POST['fromcity'];
  $tocity=$_POST['tocity'];
  $arrival=$_POST['arrival'];
  $departure=$_POST['departure'];
  $price=$_POST['price'];
  $class=$_POST['class'];
  
  //$insertquery="INSERT INTO `trainbook`(`trainno`, `name`, `fromcity`, `tocity`, `arrival`, `departure`, `price`, `class`) VALUES ('$trainno','$name','$fromcity','$tocity','$arrival','$departure','$price','$class')";
  $query="UPDATE `trainbook` SET `trainno`='$trainno',`name`='$name',`fromcity`='$fromcity',`tocity`='$tocity',`arrival`='$arrival',`departure`='$departure',`price`='$price',`class`='$class',`id`='$idupdate' WHERE id=$idupdate ";
  $res=mysqli_query($con,$query);


  if($res)
  {
    ?>
    <script>
    alert("Data inserted properly");
    </script>
    <?php
    header('location:trainlist.php');
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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="members.php">Our Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hotelnew.php">Hotel</a>
        </li>
      
        
        <li class="nav-item">
          <a class="nav-link" href="form.php">Join Us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="identity.php" >Login</a>
        </li>
        
      </ul>
</nav>
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

<label for="trainno">Train No</label>
<input type="text" name="trainno" class="form-control" id="trainno" value="<?php echo $arrdata['trainno']?>" placeholder="Train Number">
</div>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" value="<?php echo $arrdata['name']?>" placeholder="Train Name" required>
  </div>
<div class="form-group">
    <label for="fromcity">From</label>
    <input type="text" name="fromcity" class="form-control" id="fromcity" value="<?php echo $arrdata['fromcity']?>" placeholder="From City" required>
  </div>
  <div class="form-group">
    <label for="tocity">To</label>
    <input type="text" name="tocity" class="form-control" id="tocity" value="<?php echo $arrdata['tocity']?>" placeholder="To City" required>
  </div>
  <div class="form-group">
    <label for="arrival">Arrival Time</label>
    <input type="text" name="arrival" class="form-control" id="arrival" value="<?php echo $arrdata['arrival']?>" placeholder="Arrival Time" required>
  </div>
  <div class="form-group">
    <label for="departure">Departure Time</label>
    <input type="text" name="departure" class="form-control" id="departure" value="<?php echo $arrdata['departure']?>" placeholder="Departure Time" required>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" name="price" class="form-control" id="price" value="<?php echo $arrdata['price']?>" placeholder="Price" required>
  </div>
  <div class="form-group">
    <label for="class">Class</label>
    <input type="text" name="class" class="form-control" id="class" value="<?php echo $arrdata['class']?>" placeholder="Class" required>
  </div>
  
  
  <div class="input-group">
  <button type="submit" name="save_data"class="btn btn-primary">UPDATE</button></div>
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
