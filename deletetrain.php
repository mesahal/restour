<?php
include 'connection.php';
$id=$_GET['idth'];
$deletequery="delete from trainbook where id=$id";
$query=mysqli_query($con,$deletequery);
header('location:trainlist.php');
?>