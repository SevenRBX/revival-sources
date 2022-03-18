<?php
require_once "../../services/game/signatures.php";
$sig = new sign();
header("Content-Type: text/plain");

$data = '%1366%
local ScriptContext = game:GetService("ScriptContext")
local Tries = 0
 
while not ScriptContext and Tries < 3 do
	Tries = Tries + 1
	ScriptContext = game:GetService("ScriptContext")
	wait(0.2)
end
 
if ScriptContext then
	ScriptContext:RegisterLibrary("Libraries/RbxGui", "1359")
	ScriptContext:RegisterLibrary("Libraries/RbxGear", "1360")
	ScriptContext:RegisterLibrary("Libraries/RbxUtility", "1361")
	ScriptContext:RegisterLibrary("Libraries/RbxStamper", "1365")
	ScriptContext:LibraryRegistrationComplete()
end';

// Sign corescript
$signature = $sig->get_signature("\r\n" . $data);

// exit
exit("%" . $signature . "%\r\n" . $data);
?>