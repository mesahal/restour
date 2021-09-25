<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="styles1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title></title>
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
      
        
        <li class="nav-item">
          <a class="nav-link" href="form.php">Join Us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="identity.php" >Login</a>
        </li>
        
      </ul>
    </div>
  
</nav>
</section>
      
<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","login_register");

if(isset($_POST['submit']))
{

    $no_of_persons=$_POST['no_of_persons'];
    $area=$_POST['area'];
    $query="select *
    from hotelroom 
     where no_of_persons='$no_of_persons' AND Location='$area'
    ";
$query_run=mysqli_query($con,$query);

        echo $row['no_of_persons'];

    }




?>
<div class="main-div">
    <h2 class="title text-center">Upcoming Tours</h2>
    <div class="center-div">

          <div class="table-responsive">
          <table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Room Type</th>
      <th scope="col">Number of Persons</th>
      <th scope="col">Price Per Night</th>
      <th scope="col">Reservation</th>
      
    </tr>
  </thead>
  <tbody>

  <?php
  if(mysqli_num_rows($query_run)>0)
  {
      while($row=mysqli_fetch_array($query_run))
      {



  ?>
    <tr>
    <td><?php echo $row['id'] ;?></td>
      
      <td><?php echo $row['Name'] ;?></td>
      <td><?php echo $row['Room Type'] ;?></td>
      <td><?php echo $row['no_of_persons'] ;?></td>
      <td><?php echo $row['Price'] ;?></td>
      <td><a href="booking.php"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></td>
     
    </tr>
    <?php
     }

    }
    else
    {
        ?>
        <tr>
            <td colspan="6">
                No Record Found
            </td>
        </tr>
        <?php
        
    }
    ?>
    </tbody>
</table>

          </div>
          <?php
          
          
          
          
          ?>
      </div>
      
   

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  
  </body>
</html>