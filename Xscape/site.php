<?php
session_start();
require_once "config.php";
require_once "api/global/secure.php";
$ep = new ExploitPatch();

require_once "api/global/filter.php";
$ch = new Check();

if($_SERVER['HTTP_HOST'] == "www.xsscape.cf"){
  header('Location: http://xsscape.cf' . $_SERVER['REQUEST_URI']);
}

//$x = $ep->encrypt("testy", $encryption_key);
//$y = $ep->decrypt($x, $encryption_key);
$y = 'yes';
$n = 'no';

$connected = false;
$logged = false;

$port = 3306;
try {
    $db = new PDO("mysql:host=$server_name;port=$port;dbname=$db_name", $user_sql, $user_pass, array(
));
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
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

       $flarf = 1;
       $gb = $db->query("SELECT * FROM global WHERE id = $flarf");
       $global = $gb->fetch();


       if (isset($_SESSION['primarylogin'])){
       $identify = $_SESSION['identify'];
       //query here as it SHOULD be safe
       $usrq = $db->query("SELECT * FROM accounts WHERE identifier = '$identify'");
       $usr = $usrq->fetch();

       if($usr){
       $logged = true;

       $time = time();
if ($time > $usr['gettc']) {
	$newgettc = $time + 86400;

  $tix = 35;
  $robux = 15;

  $addtix = $db->prepare("UPDATE `accounts` SET `Tickets` = ? + ? WHERE `id` = ?");
	$addtix->execute([$usr['Tickets'],$tix,$usr['id']]);

  $addrobux = $db->prepare("UPDATE `accounts` SET `Robux` = ? + ? WHERE `id` = ?");
  $addrobux->execute([$usr['Robux'],$robux,$usr['id']]);

	$addGettc = $db->prepare("UPDATE `accounts` SET `gettc` = ? WHERE `id` = ?");
	$addGettc->execute([$newgettc,$usr['id']]);
}

       //todo: setting user info (currency, inbox, etc)
       //todo: invite key check
       }else{
       echo 'An error occured with setting user variables.';
       }
       }
    }
if($logged){
if($usr['verified'] == "no" && !basename(__FILE__, '.php') == "Discord" && !basename(__FILE__, '.php') == "NotVerified")
{
header('Location: https://www.xsscape.cf/Login/Discord.aspx');
}
}
?>
