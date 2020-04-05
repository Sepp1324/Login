<?php
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <h1>Registrierung</h1>
          <form class="form-signup" action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-Mail">
            <input type="password" name="pwd" placeholder="Passwort">
            <input type="password" name="pwd-repeat" placeholder="Passwort Wiederholen">
            <button type="submit" name="signup-submit">Regestrieren</button>
          </form>
        </section>
      </div>
    </main>

<?php
  require "footer.php";
?>
