<?php session_start(); ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Log in and Sign up page</title>
    <link rel="stylesheet" href="\Assets\Css\index.css">
    <script src="\Assets\Js\index.js" defer></script>
  </head>
  <body>
    <?php include("../Vues/message.php"); 
    if(isset($_SESSION["error"])):?>
    <script>
      window.addEventListener("DOMContentLoaded", ()=>{
        document.getElementById("message-dialog").showModal();
      document.getElementById("message-text").innerHTML = <?= htmlspecialchars($_SESSION["error"]); ?>;
      });
    </script>
<?php unset($_SESSION["error"]);
    endif; ?>
    <div class="main-container" id="main-container">
      <div class="switch"><a href="#signin" id="tosignin">Sign In</a><a href="#login" id="tologin">Log In</a></div>
      <div class="signin" id="signin">
        <form method="post" action="../Controllers/Controller_users.php">
      <h1>Sign in</h1>
      <label for="fname">First name</label><input type="text" id="fname" name="fname">
      <label for="lname">Last name</label><input type="text" id="lname" name="lname">
      <label for="genre">Genre</label>
      <div class="genre" id="genre">
        <label for="H">H</label><input type="radio" value="H" id="H" name="genre">
        <label for="F">F</label><input type="radio" value="F" id="F" name="genre">
      </div>
      <label for="email">Email</label><input type="email" id="email" name="email">
      <label for="uname">Username</label><input type="text" id="uname" name="uname">
            <label for="pass-box">Password</label>
          <div class="pass-box" id="pass-box">
            <input type="password" id="psw" name="psw">
            <button type="button" class="show-pass" id="show-pass"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M607.5-372.5Q660-425 660-500t-52.5-127.5Q555-680 480-680t-127.5 52.5Q300-575 300-500t52.5 127.5Q405-320 480-320t127.5-52.5Zm-204-51Q372-455 372-500t31.5-76.5Q435-608 480-608t76.5 31.5Q588-545 588-500t-31.5 76.5Q525-392 480-392t-76.5-31.5ZM214-281.5Q94-363 40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200q-146 0-266-81.5ZM480-500Zm207.5 160.5Q782-399 832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280q113 0 207.5-59.5Z"/></svg></button>
          </div>
          <div class="buttons">
            <button type="reset" class="reset-btn">Annuler</button>
            <button type="submit" name="btn-register">Register</button>
          </div>
        </form>
      </div>
      <div class="login hidden" id="login">
        <form method="post" action="../Controllers/Controller_users.php">
          <h1>Log In</h1>
          <label for="luname">Username</label><input type="text" id="luname" name="luname">
          <label for="pass-box">Password</label>
          <div class="pass-box" id="pass-box">
            <input type="password" id="lpsw" name="lpsw">
            <button type="button" class="show-pass" id="show-pass"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M607.5-372.5Q660-425 660-500t-52.5-127.5Q555-680 480-680t-127.5 52.5Q300-575 300-500t52.5 127.5Q405-320 480-320t127.5-52.5Zm-204-51Q372-455 372-500t31.5-76.5Q435-608 480-608t76.5 31.5Q588-545 588-500t-31.5 76.5Q525-392 480-392t-76.5-31.5ZM214-281.5Q94-363 40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200q-146 0-266-81.5ZM480-500Zm207.5 160.5Q782-399 832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280q113 0 207.5-59.5Z"/></svg></button>
          </div>
          <div class="buttons">
            <button type="reset" class="reset-btn">Annuler</button>
            <button type="submit" name="btn-login">Log In</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>