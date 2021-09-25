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
 
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="indexnew.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="members.php">Our Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php" >Services</a>
        </li>
      

        <li class="nav-item">
          <a class="nav-link" href="hotellist.php" >Hotel</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="form.php" >Join Us</a>
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
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="check_in_date">Check-in date</label>
    <input type="date" name="check_in_date" class="form-control" id="check_in_date" placeholder="Enter your Date of Birth">
  </div>
  <div class="form-group">
    <label for="check_out_date">Check-out date</label>
    <input type="date" name="check_out_date" class="form-control" id="check_out_date" placeholder="Enter your Date of Birth">
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
    <input type="number" name="no_of_rooms" class="form-control" id="no_of_rooms" value="1" min="1" max="1" placeholder="Affected or Not">
  </div>
  <button type="submit" name="save_data"class="btn btn-primary">Submit</button>
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
<?php

$username="root";
$password="";
$server="localhost";
$db="login_register";
$con=mysqli_connect($server,$username,$password,$db);
if(isset($_POST['save_data']))
{
  $name=$_POST['name'];
  $check_in_date=$_POST['check_in_date'];
  $check_out_date=$_POST['check_out_date'];
  $bloodgroup=$_POST['bloodgroup'];
  $Contact_number=$_POST['Contact_number'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $no_of_rooms=$_POST['no_of_rooms'];
  $insertquery="insert into register_user (name,check_in_date,check_out_date,bloodgroup,Contact_number,email,address,no_of_rooms) values ('$name','$check_in_date','$check_out_date','$bloodgroup','+88".$Contact_number."','$email','$address','$no_of_rooms')";
  $res=mysqli_query($con,$insertquery);


  if($res)
  {
    
    
    header('location:payment.php');
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
