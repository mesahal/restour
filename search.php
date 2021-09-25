<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title></title>
  
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
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
error_reporting(0);
$con=mysqli_connect("localhost","root","","login_register");
if(isset($_POST['search_by_place']))
{
    $place=$_POST['get_place'];
    $query="select * from tour where place='$place'";
$query_run=mysqli_query($con,$query);

        echo $row['Place'];

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
      <th scope="col">Place</th>
      <th scope="col">Duration</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Cost</th>
      <th scope="col">Booking Ammount</th>
      <th scope="col">Booking Last Date</th>
      <th scope="col">Transport</th>
      <th scope="col">More Info</th>
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
      
      <td><?php echo $row['Place'] ;?></td>
      <td><?php echo $row['Duration'] ;?></td>
      <td><?php echo $row['Start Date'] ;?></td>
      <td><?php echo $row['End Date'] ;?></td>
      <td><?php echo $row['Cost'] ;?></td>
      <td><?php echo $row['Booking Ammount'] ;?></td>
      <td><?php echo $row['Booking Last Date'] ;?></td>
      <td><?php echo $row['Transport'] ;?></td>
      
      <td><a href="formpackage.php?id=<?php echo $row['id']?>">Click here for more</a> </td>
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
</div>
</div>
      
   

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  
  </body>
</html>