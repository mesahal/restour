<?php
include 'connection.php';
$id=$_GET['idth'];
$deletequery="delete from register_user where id=$id";
$query=mysqli_query($con,$deletequery);
header('location:hotelclient.php');
?>