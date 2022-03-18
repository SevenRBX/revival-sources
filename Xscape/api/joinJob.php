<?php
header("Content-Type: text/plain");
require_once '../Game/GameGlobal.php';
$d = '{"jobId":"Test","status":2,"joinScriptUrl":"http://www.xsscape.cf/api/JoinServer.php?port=53640","authenticationUrl":"http://www.xsscape.cf/","authenticationTicket":"","message":null}';

// Sign joinscript
$signature = $sig->get_signature("\r\n" . $d);

// exit
exit("--rbxsig%". $signature . "%\r\n" . $d);
?>