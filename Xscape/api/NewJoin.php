<?php
require_once '../Game/GameGlobal.php';
session_start();

$logged = false;

    if($connected)
    {
       //todo: better identifier for login DONE
       //todo: organized errors
       if (isset($_SESSION['primarylogin'])){
       $identify = $_SESSION['identify'];
       //query here as it SHOULD be safe
       $usrq = $db->query("SELECT * FROM accounts WHERE identifier = '$identify'");
       $usr = $usrq->fetch();

       if($usr){
       $logged = true;
       }else{
       echo 'An error occured with setting user variables.';
       }
       }
    }

    if($logged && is_numeric($_GET['Game'])){
      $u = $usr['id'];
      $new = GenerateNewAuth($u);
      header('Location: XscapePlayer:' . $new . '&PlaceId=' . $_GET['Game']);
    }else{
      exit('gay');
    }
?>
