<?php
require_once('site.php');
if ($_SERVER['HTTP_HOST'] == "localhost") {
$stmt = $db->prepare("DELETE FROM `servers` WHERE game = ?");
$stmt->execute([$_GET['id']]);
}else{
    die('Invalid host');
}