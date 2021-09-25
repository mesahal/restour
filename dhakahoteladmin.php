<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title></title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
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
          <a class="nav-link" href="hotellist.php">Hotel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="trainlist.php">Train</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buslist.php" >Bus</a>
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
<div class="main-div">
    <h2 class="title text-center">List of Hotels in Dhaka</h2>
    <div class="center-div">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Ratings</th>
                        
                        <th colspan="2">Operation</th>
                    </tr>
                </thead>
                <tbody>
    
                <?php
include 'connection.php';
$selectquery="select * from hotel where location='Dhaka'";
$query=mysqli_query($con,$selectquery);
$nums=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query))
{
   
    ?>
    <tr>
    <td><?php echo $res['id']?></td>
    <td><?php echo $res['Name']?></td>
    <td><?php echo $res['Location']?></td>
    <td><?php echo $res['Address']?></td>
    <td><?php echo $res['Contact Number']?></td>
    <td><?php echo $res['Email']?></td>
    <td><?php echo $res['Ratings']?></td>
    <td><a href="adminlogin1.php"> <data-toggle="tooltip" data-placement="top" title="UPDATE"> <i class="fa fa-edit" aria-hidden="true"></i></td>
    <td><a href="logindelete.php"> <data-toggle="tooltip" data-placement="top" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>


</tr>


<?php

}
?>

                   
                </tbody>

            </table>
        </div>

</div> 
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>