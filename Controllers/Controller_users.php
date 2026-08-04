<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once(__DIR__."/../Modules/Module_users.php");


if (isset($_POST["btn-register"])) {
  $fn = $_POST["fname"];
  $ln = $_POST["lname"];
  $g = $_POST["genre"];
  $e = $_POST["email"];
  $un = $_POST["uname"];
  $p = $_POST["psw"];
  InsertUser($fn, $ln, $g, $e, $un, $p);
  header("Location: ../Vues/log.php#login");
  exit();
}

if (isset($_POST["btn-login"])){
  $lus = $_POST["luname"];
  $lpsw = $_POST["lpsw"];
  $row = checkUser($lus)->fetch(PDO::FETCH_BOTH);
  if($row){
    if ($row["username"] == $lus && $row["password"] == $lpsw){
      $_SESSION["username"] = $row["username"];
      $_SESSION["logged_in"] = true;
      $token = bin2hex(random_bytes(32));
      updateRememberToken($row["username"],$token);
      setcookie("remember_token",$token, time() + (30 * 24 * 3600), "/", "", false, true);
      header("Location: ../Vues/home.php");
      exit();
    }
    else{ 
      $_SESSION["error"]="mots de pass incorrect!";
      header("Location: ../Vues/log.php#login");
      exit();
}
  }
    else {
      $_SESSION["error"] = "user introuvable!";
      header("Location: ../Vues/log.php#login");
      exit();
  }
};

?>
