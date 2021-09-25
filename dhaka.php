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
 
    <a class="navbar-brand" href="#"><img src="image/log.png" width="80px"></a>
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
          <a class="nav-link" href="login.php" >Log in</a>
        </li>
      </ul>
    </div>
  
</nav>
</section>
<div class="filter">
</div>
<div class="main-div">
<h2 class="title text-center">List of Hotels in Dhaka City</h2>
    <div class="center-div">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Ratings</th>
                        <th>For Booking & More</th>
                    </tr>
                </thead>
                <tbody>
    
                <?php
include 'connection.php';
$sql="select count(*) as total from hotel where Location='Dhaka'";
$result= mysqli_query($con,$sql);
while($res=mysqli_fetch_array($result))
{
  $output=$res['total'];

}
$selectquery="select * from hotel where Location='Dhaka'";

$query=mysqli_query($con,$selectquery);
$nums=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query))
{
   
    ?>
    <tr>
    <td><?php echo $res['id']?></td>
    <td><?php echo $res['Name']?></td>
    <td><?php echo $res['Address']?></td>
    
    <td><?php echo $res['Contact Number']?></td>
    <td><?php echo $res['Email']?></td>
    <td><?php echo $res['Ratings']?></td>
    <td><a href="71.php">Click Here</a></td>


</tr>


<?php






}
?>

                   
                </tbody>

            </table>
        </div>
        <div class="container">
        <br><br>
        <table>
        <thead>
                    <tr>
                        <th>Total Number Of Hotels in Dhaka</th>  
                    </tr>
                </thead>
                <tr>
                <td><?php echo $output?></td>
                </tr>
                
        </table>

        </div>
</div> 


</div>
<div>
<h1>
</h1>
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