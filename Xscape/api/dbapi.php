<?php
$server_name = "localhost";
$db_name = "xsscape";
$user_sql = "root";
$user_pass = "calvyishot";

$port = 3306;
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
?>