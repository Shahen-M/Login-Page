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
        <p>Create Account</p>
      </header>

      <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password-repeat" placeholder="Repeat password">

        <button class="signup-btn btn" type="submit" name="signup-submit">Sign Up</button>

      </form>
    </div>
  </body>
</html>
