<?php


$option = $_POST['bloodtype'];

if ($option == 'Dhaka')
  {
    require('dhakahoteluser.php');
                    
  }

if ($option =='Chittagong')
  {
    require('chittagonghoteluser.php');
    
  }
  if ($option =='Sylhet')
  {
    require('sylhethoteluser.php');
       
  }
  if ($option =='Cox-Bazar')
  {
    require('coxbazarhoteluser.php');
    
  }
  if ($option =='Saint Martin')
  {
    require('saintmartinhoteluser.php');
    echo($word); 
  }
  if ($option =='Khagrachari')
  {
    require('khagracharihoteluser.php');
    echo($word); 
  }
  if ($option =='Bandarban')
  {
    require('bandarbanhoteluser.php');
    echo($word); 
  }
  if ($option =='Cumilla')
  {
    require('cumillahoteluser.php');
    echo($word); 
  }
?>

