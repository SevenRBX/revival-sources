<?php
require_once "../services/game/signatures.php";
$sig = new sign();

require_once "../config.php";

$port = 3306;
$connected = false;
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

    function GenerateNewAuth($u)
    {
       global $db;
       $auth = bin2hex(random_bytes(27));
       $db->query("UPDATE accounts SET authticket = '$auth' WHERE id = '$u'");
       return $auth;
    }
?>