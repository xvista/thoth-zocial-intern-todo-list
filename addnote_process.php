<?php

require './config.php';

if(isset($_POST["title"],$_POST["content"],$_POST["important"],$_POST["type"])){
  print_r($_POST);
  $title = $_POST["title"];
  $content = $_POST["content"];
  $type = $_POST["type"];
  $impo = $_POST["important"];
  $sql = "INSERT INTO note (note_id,title,content,img,created_at,type,important) VALUES (NULL,'$title','$content','',CURRENT_TIMESTAMP,$type,$impo)";
  echo $sql;
  mysqli_query($connect,$sql);
}

 ?>
