<?php
require_once "../../services/game/signatures.php";
$sig = new sign();
header("Content-Type: text/plain");

$data = '%1368%
print("Starter")

local ScriptContext = game:GetService("ScriptContext")
local CoreGui = game:GetService("CoreGui")
local RobloxGui = nil

local function WaitForChild(instance, name)
	while not instance:FindFirstChild(name) do
		instance.ChildAdded:wait()
	end
end

local function WaitForProperty(instance, property)
	while not instance[property] do
		instance.Changed:wait()
	end
end

ScriptContext:AddCoreScript(1366, ScriptContext, "/Libraries/LibraryRegistration/LibraryRegistration")

WaitForChild(CoreGui, "RobloxGui")
RobloxGui = CoreGui:FindFirstChild("RobloxGui")

ScriptContext:AddCoreScript(1354, RobloxGui, "CoreScripts/ToolTip")
ScriptContext:AddCoreScript(1355, RobloxGui, "CoreScripts/Settings")
ScriptContext:AddCoreScript(1364, RobloxGui, "CoreScripts/MainBotChatScript")
ScriptContext:AddCoreScript(1357, RobloxGui, "CoreScripts/PlayerListScript")
ScriptContext:AddCoreScript(1356, RobloxGui, "CoreScripts/PopupScript")
ScriptContext:AddCoreScript(1366, RobloxGui, "CoreScripts/NotificationScript")

local Backpack = nil
ScriptContext:AddCoreScript(1362, RobloxGui, "CoreScripts/BackpackScripts/BackpackBuilder")

WaitForChild(RobloxGui, "CurrentLoadout")
WaitForChild(RobloxGui, "Backpack")

Backpack = RobloxGui:FindFirstChild("Backpack")

ScriptContext:AddCoreScript(1363, Backpack, "CoreScripts/BackpackScripts/BackpackGear")
ScriptContext:AddCoreScript(1358, RobloxGui:FindFirstChild("CurrentLoadout"), "CoreScripts/BackpackScripts/LoadoutScript")';

// Sign corescript
$signature = $sig->get_signature("\r\n" . $data);

// exit
exit("%" . $signature . "%\r\n" . $data);
?>