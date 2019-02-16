<?php

if (isset($_POST['login-submit'])) {

  require 'dbh.inc.php';

  $mailusn = $_POST['mail'];
  $password = $_POST['pwd'];

  if (empty($mailusn) || empty($password)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  } else {
    $sql = "SELECT * FROM users WHERE usnUsers=? OR emailUsers=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $mailusn, $mailusn); //Pass in user parameters
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        // Take result from database and pwd match:
        if ($row = mysqli_fetch_assoc($result)) {
          $pwdCheck = password_verify($password, $row['pwdUsers']);
          if ($pwdCheck == false) {
            header("Location: ../index.php?error=wrongpwd");
            exit();
          }
          else if ($pwdCheck == true) {
            session_start();
            $_SESSION['userId'] = $row['idUsers'];
            $_SESSION['userUsn'] = $row['usnUsers'];
            
            header("Location: ../index.php?login=success");
            exit();
          } else {
            header("Location: ../index.php?error=wrongpwd");
            exit();
          }
        } else {
            header("Location: ../index.php?error=nouser");
            exit();
        }
    }
  }

} else {
    header("Location: ../index.php");
    exit();
}