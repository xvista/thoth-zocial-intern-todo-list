<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test Frontend</title>
    <link rel="stylesheet" href="css/style_test.css">
    <script src="js/jquery-2.2.4.min.js"></script>
  </head>
  <body>
    <section class="top_menu" >
      <h3>Post it</h3>
        <article class="menu_top_button">
        </article>
          <article class="menu_hide">

          </article>
        <script type="text/javascript">
        $(document).ready(function(){
          $(".menu_top_button").click(function(){
              $(".menu_hide").toggle();
            });
        });

        </script>
    </section>

  </body>
</html>
