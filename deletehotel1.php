<?php
include 'connection.php';
$id=$_GET['idth'];
$deletequery="delete from hotel where id=$id";
$query=mysqli_query($con,$deletequery);
header('location:dhakahoteladmin.php');
?>