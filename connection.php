<?php
$username="root";
$password="";
$server="localhost";
$db="login_register";
$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
    ?>
    <script>
        alert('Connection Successful');
        </script>
        <?php
}
else{
    die("no connection".mysqli_connect_error());
}
?>