<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home page</title>
    <link rel="stylesheet" href="\Assets\Css\home.css">
  </head>
  <body>
    <?= include("../Vues/nav.php"); ?>
    <div class="daily-advice-box">
      <p><?= '"'.getDailyAdvice().'"'; ?></p>
    </div>
  </body>
</html>