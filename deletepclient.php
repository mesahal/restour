<?php
include 'connection.php';
$id=$_GET['idth'];
$deletequery="delete from client where id=$id";
$query=mysqli_query($con,$deletequery);
header('location:packageclient.php');
?>