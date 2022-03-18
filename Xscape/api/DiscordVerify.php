<?php
session_start();
require_once "../config.php";

$port = 3306;
$connected = false;
$logged = false;
try {
    $db = new PDO("mysql:host=$server_name;port=$port;dbname=$db_name", $user_sql, $user_pass, array(
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

    if(!$logged){header('Location: ../');}else{
$code = $_GET['code'];
if(!isset($code)) {die("ERR");}
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://discord.com/api/v8/oauth2/token");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    "client_id=916710302635151370&client_secret=av-WOgFDYq9y6pk17EpJlgYQoZ4-iWgv&grant_type=authorization_code&code=".$code."&redirect_uri=https%3A%2F%2Fwww.xsscape.cf%2Fapi%2FDiscordVerify");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = json_decode(curl_exec($ch));
curl_close($ch);
if(!isset($server_output->access_token) || $server_output->scope != "identify guilds") {die("Looks like something went wrong.");}
$curl = curl_init();
$headers = array(
    "Authorization: Bearer ".$server_output->access_token
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_URL, 'https://discord.com/api/v8/users/@me/guilds');
curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
$out = json_decode(curl_exec($curl));
curl_close($curl);
foreach($out as $guild) {
    if($guild->id == "910275877881917524") {
        $uID = $usr['id'];
        $curl = curl_init();
        $headers = array(
        "Authorization: Bearer ".$server_output->access_token
       );
       curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
       curl_setopt($curl, CURLOPT_URL, 'https://discord.com/api/v8/users/@me');
       curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
       $out2 = json_decode(curl_exec($curl));
       curl_close($curl);
        $db->query("UPDATE accounts SET DiscordID = $out2->id WHERE id = $uID");  
        Header("Location: ../Login/NotVerified.aspx");
    }
}
die('Please join the Xscape discord!');
}
?>