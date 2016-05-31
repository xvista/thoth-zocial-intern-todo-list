<?php

require './config.php';

if(isset($_POST["title"],$_POST["content"]/*,$_POST["important"],$_POST["type"]*/)){
  print_r($_POST);
  $title = $_POST["title"];
  $content = $_POST["content"];
  // $type = $_POST["type"];
  // $impo = $_POST["important"];
  $file_url = "";
    if(isset($_FILES["image"])){
      $errors = array();
      $file_name = $_FILES["image"]["name"];
      $file_size = $_FILES["image"]["size"];
      $file_tmp = $_FILES["image"]["tmp_name"];
      $file_type = $_FILES["image"]["type"];
      $file_ext = strtolower(end(explode('.',$_FILES["image"]["name"])));

      $expention = array("jpg","png");

      if(in_array($file_ext,$expention)===false){
        $errors[] = "File isn't to use jpg or png";
      }
      if(empty($errors)==true){
        $file_url = "img/".$file_name;
        move_uploaded_file($file_tmp,"img/".$file_name);
      }else{
        echo "error to upload";
      }
    }

  $sql = "INSERT INTO note (note_id,title,content,img,created_at,type,important) VALUES (NULL,'$title','$content','$file_url',CURRENT_TIMESTAMP,1,0)";
  echo $sql;
  mysqli_query($connect,$sql);
}

 ?>
