<?php

require './config.php';

if(isset($_POST["contented"],$_POST["ids"],$_POST["ch_id"])){
  $cont = $_POST["contented"];
  $ids = $_POST["ids"];
  $find_id_ch = $_POST["ch_id"];

  $up_checklist = "UPDATE checklist SET checklist.content = '$cont' WHERE checklist.note_id = $ids AND checklist.checklist_id = $find_id_ch";
  $checked = mysqli_query($connect,$up_checklist);



  if(!$checked){
    echo "Error Update";
  }else{
    echo "Checklist Update Success";
  }
}

 ?>
