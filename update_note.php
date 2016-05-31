
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Update test</title>
    </head>
    <body>
      <form action="update_note_process.php" method="post">

      <?php
      require './config.php';

      $check_ids = $_GET["id_u"];

      $sql = "SELECT * FROM note WHERE note.note_id = $check_ids";
      $finds = mysqli_query($connect,$sql);

      foreach ($finds as $find) {
        $title = $find["title"];
        $content = $find["content"];
        // $find["img"]
        // $find["important"]

        ?>
        <br>
        <input type="text" name="title" value="<?=$title?>">
        <input type="text" name="content" value="<?=$content?>">
        <input type="hidden" name="ids" value="<?=$check_ids?>">
        <?php
      }

       ?>
       <input type="submit">
</form>
    </body>
  </html>
