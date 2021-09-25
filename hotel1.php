<?php
if(isset($_POST['search']))
{
  $valueToSearch=$_POST['valueToSearch'];
  $query= "select * from hotel where CONCAT(Name,Location,Address,Contact Number,Email)LIKE '%".$valueToSearch."%' UNION SELECT * 
  FROM `hotel` 
  WHERE   
   `Name` = '".$valueToSearch."'
     OR `Location` = '".$valueToSearch."'
     OR `Address` = '".$valueToSearch."'
     OR `Contact Number` = '".$valueToSearch."'
     OR `Email` = '".$valueToSearch."'
     
     
     
";

     
  
  $search_result=filterTable($query);

}
else{
  $query="select * from hotel";
  $search_result=filterTable($query);

}
function filterTable($query)
{
  $connect=mysqli_connect("localhost","root","","login_register");
$filter_Result=mysqli_query($connect,$query)  or die( mysqli_error($connect));

return $filter_Result;
}
?>












<html>
<head>
<title>

</title>
<link rel="stylesheet" type="text/css" href="styles1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
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
          <a class="nav-link" href="receiver.php" >Our Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration.php" >Join Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="overview.php" >Overview</a>
        </li>
      </ul>
    </div>
  
</nav>
</section>

    
    <form action="hotel1.php" method="post" class="search">
    <br>
    <input type="text" name="valueToSearch" placeholder="Value to Search"><br><br>
    <input type="submit" name="search" value="Filter"><br><br>
    </form>

    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th> 
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Email</th>
      <th scope="col">Ratings</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
  while($row=mysqli_fetch_array($search_result)):?>
  <tr>
      <td><?php echo  $row['id'];?></td>
      
      <td><?php echo  $row['Name'];?></td>
      <td><?php echo  $row['Location'];?></td>
      <td><?php echo  $row['Address'];?></td>
      <td><?php echo  $row['Contact Number'];?></td>
      <td><?php echo  $row['Email'];?></td>
      <td><?php echo  $row['Ratings'];?></td>
      
      </tr>
      <?php endwhile;?>
    
  </tbody>
</table>

      
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>