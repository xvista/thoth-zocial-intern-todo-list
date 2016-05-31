<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Checklist</title>
  </head>
  <body>
    <h3>Create Note</h3>
    <form action="checklist_process.php" method="post">
    title <input type="text" name="title"><br>
    content <input type="text" name="content"><br>
    Important<br>
    YES <input type="radio" name="important" value="1">
    NO <input type="radio" name="important" value="0"><br>
    <input type="hidden" name="type" value="2">

    <input type="text" name="ch[]">
    <input type="text" name="ch[]">
    <input type="text" name="ch[]">
    <input type="text" name="ch[]">
    <input type="text" name="ch[]">


    <input type="submit" name="submit"><input type="reset">

    </form>
  </body>
</html>
