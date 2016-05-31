<?php

require './config.php';

$checklistid = $_GET["id"];
echo $checklistid;
$delsql = "DELETE FROM checklist WHERE checklist_id = $checklistid";
$checkdel = mysqli_query($connect,$delsql);

if(!$checkdel){
  echo "delete unscuess";
}else{
  echo "success";
}

 ?>
