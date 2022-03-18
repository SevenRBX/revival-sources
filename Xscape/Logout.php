<?php
session_start();
session_destroy();
setcookie('', 'PHPSESSID', time()-1000);
die('<META http-equiv=refresh content=0;URL=/>');
?>
