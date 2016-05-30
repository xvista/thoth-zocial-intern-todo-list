<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Note</title>
  </head>
  <body>
    <h3>Create Note</h3>
    <form action="addnote_process.php" method="post">
    title <input type="text" name="title"><br>
    content <input type="text" name="content"><br>
    <input type="hidden" name="type" value="1">
    <input type="submit" name="submit"><input type="reset">

    </form>
  </body>
</html>
