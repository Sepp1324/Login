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

  } else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invalidmailuid");
    exit();

  } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&uid=".$username);
    exit();

  } else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invaliduid&mail=".$email);
    exit();

  } else if($password !== $password_repeat) {
    header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
    exit();

  } else {
    $sql = "select uid_users from users where uid_users=?";
    $stmt = mysqli_stmt_init($con);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../signup.php?error=sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);

      $result_check = mysqli_stmt_num_rows($stmt);

      if($result_check > 0) {
        header("Location: ../signup.php?error=usertaken&mail=".$email);
        exit();
      } else {
        $sql = "insert into users (uid_users, email_users, pwd_users) values (?, ?, ?)";
        $stmt = mysql_stmt_init($sql);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../signup.php?error=sqlerror");
          exit();
        } else {
          $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_pwd);
          mysqli_stmt_execute($stmt);

          header("Location: ../signup.php?signup=success");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($con);
} else {
  header("Location: ../signup.php");
  exit();
}
