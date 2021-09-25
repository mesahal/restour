<html>
    <head>
    
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles.css">
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
          <a class="nav-link" href="hotellist.php">Hotel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="trainlist.php">Train</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="buslist.php" >Bus</a>
        </li>
      

        
      </ul>
    </div>
  
</nav>
</section>
<div class="container">
<div class="row">
<div class="col md-6 register-left">
<img src="image/sel.png" alt="">

</div>
<div class="col md-6 register-right">
<div id="area" style="text-align:center">
  <form method="post" action="areaadmin.php" >
  <h2 class="title text-center">Select Area</h2>
    <select name="bloodtype" onchange="this.form.submit()">
    <option value="hotellist.php">Select an option</option>
    <option value="Dhaka">Dhaka</option>
    <option value="Chittagong">Chittagong</option>
    <option value="Sylhet">Sylhet</option>
    <option value="Cox-Bazar">Cox-Bazar</option>
    <option value="Saint Martin">Saint Martin</option>
    <option value="Khagrachari">Khagrachari</option>
    <option value="Bandarban">Bandarban</option>
    <option value="Cumilla">Cumilla</option>
    </select>
  </form>
</div>

</div>
</div>
</div>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
    </html>