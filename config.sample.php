<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "thoth_todolist";

$connect = mysqli_connect($host,$user,$pass,$dbname);

if(!$connect){
  echo "Connected error ".mysqli_connect_errno();
}

 ?>
