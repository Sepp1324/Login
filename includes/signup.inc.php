<?php
if (isset($_POST['signup-submit'])) {
  require 'dbh.inc.php';

  $username = $_POST['uid'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $password_repeat = $_POST['pwd-repeat'];

  if (empty($username) || empty($email) || empty($password) || empty($password_repeat)) {
    header("Location: ../signup.php?error=emptyFields&uid=".$username."&mail=".$email);
    exit();
  }
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidMail&uid=".$username);
    exit();
  }
  else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invaliduid&mail=".$email);
    exit();
  }
}
