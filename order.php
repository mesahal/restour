<?php

require 'connection.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="SELECT * from hotelnew WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    $p_name=$row['p_name'];
    $location=$row['location'];
    $price=$row['price'];
    $image=$row['image'];


}
else{
    echo 'No Record Found';
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Booking</title>
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
          <a class="nav-link" href="services.php" >Services</a>
        </li>
      
        
        <li class="nav-item">
          <a class="nav-link" href="form.php">Join Us</a>
        </li>
  
        
        
      </ul>
    </div>
  
</nav>

</section>
<section id="services">
  <div class="container text-center">
  <h2 class="title">Product Details</h2>
  <div class="table-responsive">

            <table class="table table-bordered" width="500px">
                <tr>
                    <th>Name of Hotel :</th>
                    <td>
                        <?= $p_name;?>
                    </td>
                    <td rowspan="5" class="text-center"><img src="<?=$image; ?>" width="300"></td>
                </tr>
                <tr>
                    <th>Location :

                    </th>
                    <td><?= $location;?></td>
                </tr>
                <tr>
                    <th>Price :

                    </th>
                    <td>BDT <?= number_format($price); ?>/-</td>
                </tr>
               
            </table>
                    </div>
                    <h2 class="title">Enter Your Details</h2>
                    <form action="payment.php" method="POST" accept-charset="utf-8">
                      <input type="hidden" name="p_name" value="<= $p_name;?>">
                      <input type="hidden" name="price" value="<= $price;?>">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                        


                      </div>
                      <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                        


                      </div>
                      <div class="form-group">
                        <input type="tel" name="phone" class="form-control" placeholder="Enter Your Contact Number" required>
                        


                      </div>
                      
                      <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" placeholder="Enter Your Email" value="Click to Pay : BDT <?=number_format($price)?>/-" required>
                      
                      </div>
                      




                    </form>



        </div>
    </div>
</div>

    
</body>
</html>