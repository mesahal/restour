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
          <a class="nav-link" aria-current="page" href="adminindex.php">Home</a>
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
      </ul>
    </div>
  
</nav>
<div class="container mt-5">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header text-center">
<h3>Register Here</h3>
</div>
<div class="card-body">
<?php
include 'connection.php';
$ids=$_GET['id'];
$showquery="select * from hotel where id={$ids}";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['save_data']))
{
  $idupdate=$_GET['id'];
 
  $name=$_POST['name'];
  $location=$_POST['location'];
  $address=$_POST['address'];
  $Contact_number=$_POST['Contact_number'];
  $email=$_POST['email'];
  $ratings=$_POST['ratings'];
 
  //$insertquery="insert into donorinfo (name,Date_of_birth,age,bloodgroup,gender,Contact_number,email,address,Covid19_affected) values ('$name','Date_of_birth','$age',$bloodgroup','$gender','+88".$Contact_number."','$email','$address','Covid19_affected')";
  $query="UPDATE `hotel` SET `id`='$idupdate',`Name`='$name',`Location`='$location',`Address`=' $address',`Contact Number`='$Contact_number',`Email`='$email',`Ratings`='$ratings' WHERE id=$idupdate";
  $res=mysqli_query($con,$query);

  if($res)
  {
    ?>
    <script>
    alert("Data updated properly");
    </script>
    
    <?php
    header('Location:dhakahoteladmin.php');
    
  }
  else{
    ?>
    <script>
    alert("Data not updated properly");
    </script>
    <?php

  }
}
?>

<form action="" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" value="<?php echo $arrdata['Name']?>" placeholder="Enter name" required>
  </div>
  <div class="form-group">
    <label for="location">Location</label>
    <input type="text" name="location" class="form-control" id="location" value="<?php echo $arrdata['Location']?>" placeholder="Date of Birth">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" class="form-control" id="address" value="<?php echo $arrdata['Address']?>" placeholder="Age">
  </div>
  
  <div class="form-group">
    <label for="Contact_number">Contact Number</label>
    <input type="text" name="Contact_number"  class="form-control" id="Contact_number" value="<?php echo $arrdata['Contact Number']?>" placeholder="Contact Number">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" value="<?php echo $arrdata['Email']?>" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="address">Ratings</label>
    <input type="text" name="ratings" class="form-control" id="address" value="<?php echo $arrdata['Ratings']?>" placeholder="Address">
  </div>
  <div class="input-group">
  <button type="submit" name="save_data"class="btn btn-primary" value="Update">Update</button></div>
  
  
</form>
</div>
</div>
</div>
</div></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
