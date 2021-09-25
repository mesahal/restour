<?php


$option = $_POST['area'];

if ($option == 'Dhaka')
  {
    require('dhaka.php');
                    
  }

if ($option =='Chittagong')
  {
    require('chittagong.php');
    
  }
  if ($option =='Shylet')
  {
    require('shylet.php');
       
  }
  if ($option =='Cox-bazar')
  {
    require('B-.php');
    
  }
  if ($option =='Saint-Martin')
  {
    require('O+.php');
    echo($word); 
  }
  if ($option =='Khagrachari')
  {
    require('O-.php');
    echo($word); 
  }
  if ($option =='Bandarban')
  {
    require('Ab+.php');
    echo($word); 
  }
  if ($option =='Cumilla')
  {
    require('Ab-.php');
    echo($word); 
  }
?>

