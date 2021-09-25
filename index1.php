<?php
session_start();
if($_SESSION["email"]){
echo "Welcome user" . $_SESSION["email"];
}
else{
    header("location:adminlogin.php");
}
?>
<a href="logout.php">Logout</a>