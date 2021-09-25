<!DOCTYPE html>
<html>
<head>
  
  <title>website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,300&family=Lato&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
          <a class="nav-link" href="hotelnew.php" >Hotel</a>
        </li>
        
      </ul>
    </div>
  
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-6 register-left">
      <img src="image/reg.png">
    </div>
    <div class="col-md-6 mt-4 register-right">
    <h3>Book Your Train Ticket</h3>
      <div class="register-form">
      
      <form action="trainsearch.php" class="login-email" method="post">
      <div class="form-group">
    <label for="">From City</label>

    <select name="fromcity" class="form-control" onchange="this.form.submit()">
    <option value="booktrain.php">Select an option</option>
    <option value="Barisal">Barisal</option>
    <option value="Chittagong">Chittagong</option>
    <option value="Dhaka">Dhaka</option>
    <option value="Khulna">Khulna</option>
    <option value="Mymensingh">Mymensingh</option>
    <option value="Rajshahi">Rajshahi</option>
    <option value="Rangpur">Rangpur</option>
    <option value="Shylet">Shylet</option>
    </select>
  </div>
    <div class="form-group">
    <label for="">To City</label>
    <select name="tocity" class="form-control" onchange="this.form.submit()">
    <option value="booktrain.php">Select an option</option>
    <option value="Barisal">Barisal</option>
    <option value="Chittagong">Chittagong</option>
    <option value="Dhaka">Dhaka</option>
    <option value="Khulna">Khulna</option>
    <option value="Mymensingh">Mymensingh</option>
    <option value="Rajshahi">Rajshahi</option>
    <option value="Rangpur">Rangpur</option>
    <option value="Shylet">Shylet</option>
    </select>
  </div>
    
  

  <div class="form-group">
    <label for="Check-in Date">Date</label>
    <input type="date" name="email" class="form-control" id="email" placeholder="Check-in Date" required>
  </div>
  <div class="form-group">
    <label for="">Number of Persons</label>
    <input type="number" name="no_of_persons" class="form-control" id=""  value="1" min="1" max="6" required>
  </div> 
  <div class="form-group">
    <label for="">Class</label>
    <select name="class" class="form-control" onchange="this.form.submit()">
    <option value="booktrain.php">Select an option</option>
    <option value="Non AC Chair">Non AC Chair</option>
    <option value="AC">AC</option>
    <option value="Sleeper">Sleeper</option>
    </select>
  </div>
  <div class="input-group">
  <button type="submit" name="submit"class="btn btn-primary">Submit</button></div>

 
</form>
<div class="alert alert-info" style="display: none;"></div>


      </div>


    </div>

  </div>

</div>


<section id="footer">
  <img src="image/wave2.png" class="footer-img">
<div class="container">
  <div class="row">
    <div class="col-md-3 footer-box">
      <h4>Address</h4>
      <p>House-21<br>Motijheel<br>Dhaka</p>
    </div>
    <div class="col-md-3 footer-box">
      <h4>Phone</h4>
      <ul>
        <li>
          01767453687
        </li>
        <li>
          01965348790
        </li>
        <li>
          01356795642
        </li>
      </ul>
    </div>
    <div class="col-md-3 footer-box">
      <h4>Email</h4>
      <ul>
        <li>
          eva@gmail.com
        </li>
        <li>
          rabita@gmail.com
        </li>
        <li>
          sahal@gmail.com
        </li>
      </ul>
    </div>
    <div class="col-md-3 footer-box">
      <ul>
        <li>
          Click below to register<br>
          <a href="receiverreg.php"><img src="image/rec1.png"></a>
        </li>
      </ul>
</div>

  </div>

</div>       
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>