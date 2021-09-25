<?php

include 'connection.php';
$ids=$_GET['id'];
$showquery="select * from client where id={$ids}";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);
if(isset($_POST['save_data']))
{
    $idupdate=$_GET['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  
  $Contact_number=$_POST['Contact_number'];
  $gender=$_POST['gender'];
 
  //$insertquery="INSERT INTO `client`( `name`, `email`, `Contact_number`, `gender`) VALUES ('$name','$email','$Contact_number','$gender')";
  $query="UPDATE `client` SET `id`='$idupdate',`name`=' $name',`email`='$email',`Contact_number`='$Contact_number',`gender`='$gender' WHERE id=$idupdate ";
  $res=mysqli_query($con,$query);


  if($res)
  {
   
    header('location:packageclient.php');
    
    
  }
  else{
    ?>
    <script>
    alert("Something Went Wrong");
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
          <a class="nav-link" href="services.php" >Our Service</a>
        </li>
      

        <li class="nav-item">
          <a class="nav-link" href="hotelnew.php" >Hotel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.php">Join Us</a>
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
<input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="<?php echo $arrdata['name']?>" placeholder="Enter Your Name">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="location" value="<?php echo $arrdata['email']?>" placeholder="Enter Your Email" required>
  </div>
   
  <div class="form-group">
    <label for="Contact_number">Contact Number</label>
    <input type="text" name="Contact_number" class="form-control" id="Contact_number" value="<?php echo $arrdata['Contact_number']?>" placeholder="Number" required>
  </div>


  <div class="form-group">
    <label for="gender">Gender</label>
    <input type="text" name="gender" class="form-control" id="gender" value="<?php echo $arrdata['gender']?>" placeholder="Gender">
  </div>
  
  <div class="input-group">
  <button type="submit" name="save_data"class="btn btn-primary">Update</button></div>
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
