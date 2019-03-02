<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header class="nav-header">
      <nav>
        <ul>
          <li><a class="active" href="#home">Home</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">About</a></li>
        </ul>
      </nav>

      <a href="login.php">
        <p id="sign-txt">Signin/Signout</p>
      </a>
    </header>

    <main>
      <p> Login or create an account! </p>
    </main>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
  </body>
</html>
