<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <?php 
  require("require/head/head_index.php");
  ?>
  <body>
    <header>
    <?php
    require("require/offcanvas.php");
    require("require/googleicon.php");
    require("require/navbar.php");
    ?>
    </header>
    <main>
      <?php
      require("require/carousel.php");
      require("require/fontawesome.php");
      require("require/firstparagraph.php");
      require("require/headshot.php");
      ?>
    </main>
    <?php
    require("require/footer.php");
    require("require/js.php");
    ?>
  </body>
</html>