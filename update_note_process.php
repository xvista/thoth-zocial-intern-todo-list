<?php
require './config.php';

if(isset($_POST["title"],$_POST["content"],$_POST["ids"])){
  $title = $_POST["title"];
  $content = $_POST["content"];
  $ids  = $_POST["ids"];

  $update_note_sql = "UPDATE note SET note.title = '$title', note.content = '$content' WHERE note_id = $ids";
  $check_up = mysqli_query($connect,$update_note_sql);

  if(!$check_up){
    echo "Error to update";
  }else{
    echo "Update Note Success";
  }
}

 ?>
