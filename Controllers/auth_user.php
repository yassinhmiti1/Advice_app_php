<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once(__DIR__ . "/../Modules/Module_users.php");

if (!isset($_SESSION["logged_in"]) && isset($_COOKIE["remember_me"])) {
    $token = $_COOKIE["remember_me"];
    
    $user = getUserByToken($token);

    if ($user) {
        $_SESSION["username"]  = $user["username"];
        $_SESSION["logged_in"] = true;
    }
}
?>

