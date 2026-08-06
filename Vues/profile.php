<?php
session_start();
?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profile - <?= $_SESSION["username"] ?></title>
    <link rel="stylesheet" href="../Assets/Css/profile.css">
  </head>
  <body>
    <?= include("../Vues/nav.php"); ?>
  </body>
</html>