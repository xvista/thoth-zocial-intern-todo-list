<?php

require './config.php';

print_r($_POST["ch"]);

if(isset($_POST["ch"])){
  $checked = $_POST["ch"];
  $title = $_POST["title"];
  $content = $_POST["content"];
  $type = $_POST["type"];
  $impo = $_POST["important"];
  $sql = "INSERT INTO note (note_id,title,content,img,created_at,type,important) VALUES ('','$title','$content','',CURRENT_TIMESTAMP,$type,$impo)";
  mysqli_query($connect,$sql);
  $keep_id = mysqli_insert_id($connect);
foreach ($checked as $check) {
  if($check!=""){

      $sql_checklist = "INSERT INTO checklist(checklist_id,note_id,content,checked) VALUES ('','$keep_id','$check','0')";
      mysqli_query($connect,$sql_checklist);
  echo $check."<br>";
  }
}
}


 ?>
