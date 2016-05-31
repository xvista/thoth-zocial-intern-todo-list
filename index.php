<?php
  require './config.php';
  
  $sql = "SELECT * FROM note ORDER BY note_id ASC";
  $result = mysqli_query($connect, $sql);
  
  $notes = [];
  while ($notes[] = mysqli_fetch_array($result));
  array_pop($notes);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Post it</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="container-fluid nav">
  <div class="container cf">
    <div class="brand">
      <a href="#splash">Post it</a>
    </div>
    <i class="fa fa-bars nav-toggle"></i>
    <ul>
      <a href="#0" class="cd-popup-trigger">+</a>

<div class="cd-popup" role="alert">
  <div class="cd-popup-container">
    <p>Add Note/Check list</p>

<div class="floating-placeholder">

  <form action="addnote_process.php" method="post" enctype="multipart/form-data">
    title <input type="text" name="title"><br>
    content <input type="text" name="content"><br>
    Image <input type="file" name="image"><br>
    Important<br>
    YES <input type="radio" name="important" value="1">
    NO <input type="radio" name="important" value="0"><br>
    <input type="hidden" name="type" value="1">
    <input type="submit" name="submit"><input type="reset">
<input type="submit">
</form>

</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index_input.js"></script>







    <a href="#0" class="cd-popup-close img-replace">Close</a>
  </div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index_popup.js"></script>
    </ul>
  </div>
</nav>


<div class="container-fluid portfolio" id="portfolio">
  <div class="container cf">
    <div class="gallery">
      <?php
        foreach ($notes as $note) {
          echo '<div class="post-it-note">';
          echo '<h2>' . $note['title'] . '</h2>';
          echo '<p class="note-timestamp">' . $note['created_at'] . '</p>';
          echo '<p>' . nl2br($note['content']) . '</p>';
          if ($note['type'] == 2) {
            $sql = "SELECT * FROM checklist WHERE note_id = {$note['note_id']} ORDER BY checklist_id ASC";
            $result = mysqli_query($connect, $sql);
            echo '<ul>';
            foreach ($result as $checklist) {
              echo '<li>' . $checklist['content'] . '</li>';
            }
            echo '</ul>';
          }
          echo '</div>';
        }
      ?>
    </div>
  </div>
</div>


    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

  </body>
</html>
