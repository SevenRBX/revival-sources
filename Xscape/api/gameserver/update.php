<?php
require_once "../dbapi.php";
$query = $db->prepare("UPDATE games SET players = :new WHERE id = :gameid");
$query->execute([':new' => $_GET['players'], ':gameid' => $_GET['gameid']]);
exit;
?>