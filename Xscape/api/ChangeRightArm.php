<?php
session_start();
require_once "../config.php";

$port = 3306;
$connected = false;
$logged = false;
try {
    $db = new PDO("mysql:host=$server_name;port=$port;dbname=$db_name", $user_sql, $user_pass, array(
    PDO::ATTR_PERSISTENT => true
));
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connected = true;
    }
catch(PDOException $e)
    {
    echo "An error occured. For Developers: " . $e->getMessage();
    }

    if($connected)
    {
       //todo: better identifier for login DONE
       //todo: organized errors
       if (isset($_SESSION['primarylogin'])){
       $identify = $_SESSION['identify'];
       //query here as it SHOULD be safe || I hope - Codex
       $usrq = $db->query("SELECT * FROM accounts WHERE identifier = '$identify'");
       $usr = $usrq->fetch();

       if($usr){
       $logged = true;
       $color = $_GET['color'];
if($color > 0){
    if($color < 33){
        $userId = $usr['id'];
        $query = $db->query("UPDATE `accounts` SET `RightArmColor` = '$color' WHERE `id` = '$userId'");
        header('Location: /my/avatar');
    }
}
       }else{
           header('Location: /my/avatar');
       }
       }
    }