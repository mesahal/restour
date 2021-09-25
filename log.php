<?php
session_start();
include("connection.php");
if(isset($_POST['submit']))
{
    $emailid=$_POST['uname'];
    $password=$_POST['password'];
    $sql= "SELECT count(*) as total FROM login WHERE email='".$emailid."' AND password='".$password."'";
    $result=$con->query($sql);
    if($result->num_rows>0)
    {
        $_SESSION['email']=$emailid;
        header("location:index1.php");
        die;
    }
}
?>




<form action="" method="post">
    <input class="logo" type="text" name="uname" placeholder="Username" required>
    <input class="key" type="password" name="password" placeholder="Password" required>
    <input type="submit" name="submit" value="Login" >
    
</form>