<?php
  require "header.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <main>
      <?php
        if (isset($_SESSION['userId'])) {
          echo '<p id="main-txt">You have logged in!</p>';
        } else {
          echo '<p id="main-txt">You are not logged in!</p>';
        }
      ?>
    </main>

  </body>
</html>
