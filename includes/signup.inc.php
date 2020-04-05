<?php
if (isset($_POST['signup-submit'])) {
  require 'dbh.inc.php';

  $username = $_POST['uid'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $password_repeat = $_POST['pwd-repeat'];

  if (empty($username) || empty($email) || empty($password) || empty($password_repeat)) {
    header("Location: ../signup.php?error=emptyFields&uid=".$username."&mail=".$email);
  }
}
