<!DOCTYPE html>
<html>

<head>

  <title>website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="busticketstyle.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
  <div class="menu-bar">
    <a href="indexnew.php" class="home">Home</a>
  </div>
  


  <section id="second">
    <div class="container">

      <div class="row">
        <div class="col patla">
          <h1 class="kalar">Book Your Trip</h1>
        </div>
        <div class="col"></div>
      </div>

      <div class="row">
        <div class="col">

          <form action="payment.php" method="post">


            <div class="row halka">

              <div class="col">
                <div class="form-group">
                  <select name="from" class="form-control-lg add">
                    <option value="bus.php">From</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Shylet">Shylet</option>
                    <option value="Cox-bazar">Cox-bazar</option>
                    <option value="Saint-Martin">Saint-Martin</option>
                    <option value="Khagrachari">Khagrachari</option>
                    <option value="Bandarban">Bandarban</option>
                    <option value="Cumila">Cumilla</option>
                  </select>
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <select name="to" class="form-control-lg add">
                    <option value="bus.php">To</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Shylet">Shylet</option>
                    <option value="Cox-bazar">Cox-bazar</option>
                    <option value="Saint-Martin">Saint-Martin</option>
                    <option value="Khagrachari">Khagrachari</option>
                    <option value="Bandarban">Bandarban</option>
                    <option value="Cumilla">Cumilla</option>
                  </select>
                </div>
              </div>

            </div>


            <div class="row halka">

              <div class="col">
                <div class="form-group">
                  <label for="leaving">Leaving</label><br>
                  <input type="date" name="leavingDate" class="form-control-lg" id="leaving" required>
                </div>
              </div>

              <div class="col">
                <div class="form-group">
                  <label for="return">Return</label><br>
                  <input type="date" name="returnDate" class="form-control-lg" id="return" required>
                </div>
              </div>

            </div>

            <div class="row halka">

              <div class="col-5">
                <div class="form-group">
                  <input onclick="sub()" type="number" name="count" class="form-control-lg" id="personNumber" min="1" max="6">
                </div>
              </div>

              <div class="col jhapsa">
                <input onclick="add('ac')" type="radio" id="ac" name="fav_coach" value="AC" class="rdo">
                  <label for="ac">AC</label>
                  <input onclick="add('nonac')" type="radio" id="nonac" name="fav_coach" value="NONAC" class="rdo">
                  <label for="nonac">NON AC</label>
              </div>

            </div>

            <div class="row halka">
              <div class="col">
                <div class="form-group">
                  <label for="">Departing Trip</label><br>
                  <select name="departingTime" class="form-control-lg add">
                    <option value="6">06:00</option>
                    <option value="9">09:00</option>
                    <option value="12">12:00</option>
                    <option value="15">15:00</option>
                    <option value="18">18:00</option>
                    <option value="21">21:00</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="">Return Trip</label><br>
                  <select name="returnTime" class="form-control-lg add">
                    <option value="6">06:00</option>
                    <option value="9">09:00</option>
                    <option value="12">12:00</option>
                    <option value="15">15:00</option>
                    <option value="18">18:00</option>
                    <option value="21">21:00</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row halka">
              <div class="col">
                <input  type="submit" value="Submit">
              </div>
              <div class="col jhapsa2">
                <p>Price $<span id="total">0</span></p>
              </div>
            </div>

          </form>


        </div>


        <div class="col">
          <img src="image/bus.png" alt="">
        </div>

      </div>

    </div>
  </section>

  <?php
  include('connection.php');

  if (isset($_POST['from']) && isset($_POST['to']) && isset($_POST['leavingDate']) && isset($_POST['returnDate']) && isset($_POST['count']) && isset($_POST['fav_coach']) && isset($_POST['departingTime']) && isset($_POST['returnTime'])) {

    $from = $_POST['from'];
    $to = $_POST['to'];
    $leavingDate = $_POST['leavingDate'];
    $returnDate = $_POST['returnDate'];
    $count = $_POST['count'];
    $fav_coach = $_POST['fav_coach'];
    $departingTime = $_POST['departingTime'];
    $returnTime = $_POST['returnTime'];


    // Set session variables
    $_SESSION["startplace"] = $from;
    $_SESSION["endplace"] = $to;
    $_SESSION["seatcount"] = $count;
    $_SESSION["starttime"] = $departingTime;
    $_SESSION["endtime"] = $returnTime;
    $_SESSION["startdate"] = $leavingDate;
    $_SESSION["enddate"] = $returnDate;
    $_SESSION["actype"] = $fav_coach;

    $sql = "INSERT INTO busbook (source , destination , departingDate , returnDate , count , fav_coach , departingTime , returnTime) VALUES ('$from' , '$to' , '$leavingDate' , '$returnDate' , '$count' , '$fav_coach' , '$departingTime' , '$returnTime')";

    //if(mysqli_query($con,$sql))
    {
      //echo 'inserted';
    }
    //else
    {
      //echo 'not inserted';
    }
  }


  ?>

  <script>
    let ac = 0;

    function add(id) {
      let xx = document.getElementById("personNumber").value;
      let x = parseInt(xx);
      if (id == "ac") {
        ac = 1;
        document.getElementById("total").innerText = 10 * x;
      } else {
        document.getElementById("total").innerText = 7 * x;
        ac = 0;
      }

    }

    function sub() {
      let yy = document.getElementById("personNumber").value;
      let y = parseInt(yy);
      if (ac) {
        document.getElementById("total").innerText = 10 * y;
      } else {
        document.getElementById("total").innerText = 7 * y;
      }
    }

    document.getElementById("personNumber").placeholder = "No. of Seats";


    function myfun() {
      window.location.href = "http://localhost:8080/restour/payment.php";
    }
  </script>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>