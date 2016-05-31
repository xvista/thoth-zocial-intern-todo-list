 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Update Checklist</title>
   </head>
   <body>
     <form action="update_checklist_process.php" method="post">

     <?php
       require './config.php';

       $find_id = $_GET["ids"];
       $find_id_ch = $_GET["ch_id"];

       $checklist_sql = "SELECT * FROM checklist WHERE checklist.note_id = $find_id AND checklist.checklist_id = $find_id_ch ";
       $finds = mysqli_query($connect,$checklist_sql);

       foreach ($finds as $find) {
         $content = $find["content"];
         ?>
         <input type="text" name="contented" value="<?=$content?>">
         <?php
       }

      ?>
      <input type="hidden" name="ch_id" value="<?=$find_id_ch?>">
      <input type="hidden" name="ids" value="<?=$find_id?>">
      <input type="submit">
</form>
   </body>
 </html>
