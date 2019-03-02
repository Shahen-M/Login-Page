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
    <div class="hidden-content">
      <header class="login-header">
        <p>Login</p>
      </header>

      <form action="includes/login.inc.php" method="post">
        <input class="user-input" type="text" name="email" placeholder="Username/Email">
        <input class="pass-input" type="password" name="password" placeholder="Password">
        <button class="login-btn btn" type="submit" name="login-submit">Log In</button>

        <a href="signup.php">
          <button class="signup-btn btn" type="button" name="signup-submit">Sign Up</button>
        </a>
      </form>
    </div>

  </body>
</html>
