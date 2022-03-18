<?php
require_once('site.php');
if ($_SERVER['HTTP_HOST'] == "localhost") {
$stmt = $db->prepare("UPDATE `servers` SET `players` = ? WHERE `game` = ?");
$stmt->execute([$_GET['players'],$_GET['id']]);

$result = $db->prepare("SELECT count(*) FROM `visits` WHERE game = ?");
$result->execute([$_GET['id']]);
$visitscount = $result->fetchColumn();

if($visitscount < 1){
$stmt = $db->prepare("INSERT INTO `visits`(`game`, `visits`) VALUES (?,?)");
$stmt->execute([$_GET['id'],'1']);
}else{
$stmt = $db->prepare("UPDATE `visits` SET `visits` = visits + 1 WHERE `game` = ?");
$stmt->execute([$_GET['id']]);
}
}else{
    die('Invalid host');
}