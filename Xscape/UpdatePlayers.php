<?php
require_once('site.php');
if ($_SERVER['HTTP_HOST'] == "localhost") {
$stmt = $db->prepare("UPDATE `servers` SET `players` = ? WHERE `game` = ?");
$stmt->execute([$_GET['players'],$_GET['id']]);
}else{
    die('Invalid host');
}