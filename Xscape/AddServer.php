<?php
require_once('site.php');
if ($_SERVER['HTTP_HOST'] == "localhost") {
$stmt = $db->prepare("INSERT INTO `servers`(`game`, `players`, `port`) VALUES (?,?,?)");
$stmt->execute([$_GET['id'],$_GET['players'],$_GET['port']]);
}else{
    die('Invalid host');
}