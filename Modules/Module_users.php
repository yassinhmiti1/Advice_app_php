<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once(__DIR__."/../Parametres/config.php");

function InsertUser($fn,$ln,$g,$e,$un,$psw){
  $requete = "INSERT INTO users(`firstname`, `lastname`, `genre`, `email`, `username`, `password`) VALUES (?,?,?,?,?,?)";
    $rep = Connexion()->prepare($requete);
  return $rep->execute([$fn, $ln, $g, $e, $un, $psw]);
};

function checkUser($us){
  $req1 = "select * from users where username=?";
    $rep1 = Connexion()->prepare($req1);
    $rep1->execute([$us]);
  return $rep1;
}

function updateRememberToken($username,$token){
  $req2= "Update users Set remember_token=? where username=?";
  $rep2 = Connexion()->prepare($req2);
  $rep2->execute([$token, $username]);
};

function getUserByToken($token){
  $req3= "Select * from users where remember_token=?";
  $rep3 = Connexion()->prepare($req3);
  $rep3->execute($token);
  return $rep3->fetch(PDO::FETCH_BOTH);
}
?>