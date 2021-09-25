<?php
$server="localhost";
$user="root";
$pass="";
$database="login_register";
$conn=mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    echo"<script>alert('Connection Failed')</script>";
}

?>