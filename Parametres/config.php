<?php 
function Connexion(){
  $server = "192.168.1.7";
  $db = "advice_app";
  $user= "root";
  $psw = "root";
  $cnx = new PDO("mysql:host=$server;dbname=$db", $user, $psw);
  return $cnx;
}
?>