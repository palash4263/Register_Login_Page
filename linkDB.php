<?php
$host= 'localhost';
$user  = 'root';
$pass = '';
$dbName = 'registration';
$linkDB = mysqli_connect($host,$user ,$pass ,$dbName);  
  if (mysqli_connect_error()){  
  die ('There was an error while connecting to database');
  }else{
    echo "Successfully Conected to database";
  }
    ?>