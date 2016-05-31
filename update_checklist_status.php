<?php

require './config.php';

$idtest = $_GET["id"];

$sql = "SELECT note.title,checklist.content,checklist.checked FROM note INNER JOIN checklist ON note.note_id = checklist.note_id WHERE note.note_id = $idtest AND note.type = 2";
$sql2 = "SELECT note.title FROM note WHERE note.note_id = $idtest";

$finded = mysqli_query($connect,$sql);
$finded2 = mysqli_query($connect,$sql2);
// foreach ($finded as $finde) {
//   echo $finde["title"]."<br>";
// }
// foreach ($finded as $find) {
//   echo $find["content"]." ";
//   echo $find["checked"]."<br>";
// }
while ($rows = mysqli_fetch_array($finded2)){
  echo "<h3>".$rows["title"]."</h3>";
}
while ($row = mysqli_fetch_array($finded)) {
  // echo "<h3>".$row["title"]."</h3>";
  echo $row["content"]."<br>";
}
 ?>
