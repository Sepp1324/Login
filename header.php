<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <!-- Here is the header where I decided to include the login form for this tutorial. -->
    <header>
      <nav class="nav-header-main">
        <a class="header-logo" href="index.php">
          <img src="img/logo.png" alt="mmtuts logo">
        </a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">About me</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="header-login">
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="mailuid" placeholder="E-Mail/Benutzername">
          <input type="password" name="pwd" placeholder="Passwort...">
          <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php" class="header-signup">Signup</a>
        <form action="includes/logout.inc.php">
          <button type="submit" name="logout-submit">Logout</button>
        </form>
      </div>
    </header>
