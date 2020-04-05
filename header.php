<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Example MetaDescription">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="indexp.php">Home</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">About me</a></li>
        <li><a href="">Contact</a></li>
      </ul>

      <div>
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="mailuid" placeholder="Username/E-Mail...">
          <input type="password" name="pwd" placeholder="Passwort...">
          <button type="submit" name="login-submit">Login</button>
        </form>

        <a href="signup.php">Registrieren</a>
        <form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Ausloggen</button>
        </form>
      </div>
    </nav>
  </header>
</body>
</html>
