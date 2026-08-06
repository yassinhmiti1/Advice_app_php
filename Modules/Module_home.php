<?php 
require_once(__DIR__."/../Parametres/config.php");

function checkImgProfile(){
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  $user = $_SESSION["username"];
  $req = "select * from users where username=?";
  $rep = Connexion()->prepare($req);
  $rep->execute([$user]);
  $row = $rep->fetch(PDO::FETCH_BOTH);
    if ($row && !empty($row["photo_profile"])){
      return 'data:image/jpeg;base64,' . base64_encode($row["photo_profile"]);
    }
      return "../Assets/images/blank-profile-picture-973460_960_720.png";
}

function getDailyAdvice(){
  $date = date('Y-m-d');
  $req1 = "select advice from daily_advice where created_at =?";
  $rep1 = Connexion()->prepare($req1);
  $rep1->execute([$date]);
  $row1 = $rep1->fetch(PDO::FETCH_BOTH);
  if ($row1){
    return $row1["advice"];
  }
  $apiUrl = "https://api.adviceslip.com/advice";
  $json = @file_get_contents($apiUrl);
  if($json){
    $data = json_decode($json, true);
    $new_advice = $data["slip"]["advice"] ?? "Have a good day!";
    $insert_stmt = "insert into daily_advice values (?,?,?)";
    $insert = Connexion()->prepare($insert_stmt);
    $insert->execute([$data["slip"]["id"], $new_advice, $date]);
    return $new_advice;
  }
  return "Keep moving forward no matter what!";
}
