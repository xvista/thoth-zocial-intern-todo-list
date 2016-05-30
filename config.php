<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "thoth_todolist";

$connect = mysqli_connect($host,$user,$pass,$dbname);

if(!$connect){
  echo "Connected error ".mysqli_connect_errno();
}

 ?>
