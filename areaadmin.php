<?php


$option = $_POST['bloodtype'];

if ($option == 'Dhaka')
  {
    require('next.php');
                    
  }

if ($option =='Chittagong')
  {
    require('chittagonghoteladmin.php');
    
  }
  if ($option =='Sylhet')
  {
    require('sylhethoteladmin.php');
       
  }
  if ($option =='Cox-Bazar')
  {
    require('coxbazarhoteladmin.php');
    
  }
  if ($option =='Saint Martin')
  {
    require('saintmartinhoteladmin.php');
    echo($word); 
  }
  if ($option =='Khagrachari')
  {
    require('khagracharihoteladmin.php');
    echo($word); 
  }
  if ($option =='Bandarban')
  {
    require('bandarbanhoteladmin.php');
    echo($word); 
  }
  if ($option =='Cumilla')
  {
    require('cumillahoteladmin.php');
    echo($word); 
  }
?>

