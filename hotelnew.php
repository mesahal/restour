<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Lists</title>
    <link rel="stylesheet" type="text/css" href="styles1.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
      
        
        
      </ul>
    </div>
  
</nav>
</section>
<?php 
require 'connection.php';
$sql="SELECT * FROM hotelnew";
$result=mysqli_query($con,$sql);
?>

<div class="container">
    <div class="row">
        <?php
        while($row=mysqli_fetch_array($result))
        {
         ?>
         <div class="col-lg-4 mt-4 mb-3">
             <div class="card-deck">
                 <div class="card border-info p-2">
                     <img src="<?=$row['image'];?>" class="card-img-top" height="220">
                     <h5 class="card-title"> <?=$row['p_name']; ?></h5>
                     <h6>Location : <?=$row['location']; ?></h6>
                     <h6>Cost Per Night : <?=number_format($row['price']); ?>/-</h6>
                     <a href="order.php?id=<?=$row['id']; ?>" class="btn btn-primary btn-block btn-lg">Book Now!</a>
                 </div>
             </div>
         </div>
         <?php } ?>

    </div>
</div>
        
    
</body>
</html>