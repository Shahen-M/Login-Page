<?php


if (isset($_POST['login-submit'])) {
  require 'db.php';

  $mailuid = $_POST['email'];
  $password = $_POST['password'];

  if(empty($mailuid) || empty($password)) {
    header("Location: sign_in.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE firstName=? OR email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: sign_in.php?error=sqlerror");
      exit();
    }
    else {

      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['password']);
        if ($pwdCheck == false) {
          header("Location: sign_in.php?=wr00ngpassword");
          exit();
        }
        else if ($pwdCheck == true) {
          session_start();
          $_SESSION['userId'] = $row['firstName'];
          $_SESSION['userUid'] = $row['password'];

          header("Location: sign_in.php?=login=success");
          exit();
        }
        else {
          header("Location: sign_in.php?=wrongpassssssword");
          exit();
        }
      }
      else {
        header("Location: sign_in.php?=nouser");
        exit();
      }

    }
  }

}
else {
  header("Location /sign_in.php");
  exit();
}
