<?php
header("Content-Type: text/plain");
$gameid = $_GET['id'];
$port = $_GET['port'];
$url = "http://" . $_SERVER['HTTP_HOST']; // should work lol
?>
------------------- UTILITY FUNCTIONS --------------------------


function waitForChild(parent, childName)
	while true do
		local child = parent:findFirstChild(childName)
		if child then
			return child
		end
		parent.ChildAdded:wait()
	end
end

-----------------------------------END UTILITY FUNCTIONS -------------------------

-----------------------------------"CUSTOM" SHARED CODE----------------------------------

pcall(function() settings().Network.UseInstancePacketCache = true end)
pcall(function() settings().Network.UsePhysicsPacketCache = true end)
--pcall(function() settings()["Task Scheduler"].PriorityMethod = Enum.PriorityMethod.FIFO end)
pcall(function() settings()["Task Scheduler"].PriorityMethod = Enum.PriorityMethod.AccumulatedError end)

--settings().Network.PhysicsSend = 1 -- 1==RoundRobin
--settings().Network.PhysicsSend = Enum.PhysicsSendMethod.ErrorComputation2
settings().Network.PhysicsSend = Enum.PhysicsSendMethod.TopNErrors
settings().Network.ExperimentalPhysicsEnabled = true
settings().Network.WaitingForCharacterLogRate = 100
pcall(function() settings().Diagnostics:LegacyScriptMode() end)

-----------------------------------START GAME SHARED SCRIPT------------------------------

local scriptContext = game:GetService('ScriptContext')
pcall(function() scriptContext:AddStarterScript(37801172) end)
scriptContext.ScriptsDisabled = true

game:SetPlaceID(<?=$gameid?>, false)
game:GetService("ChangeHistoryService"):SetEnabled(false)

-- establish this peer as the Server
local ns = game:GetService("NetworkServer")

	pcall(function() game:GetService("Players"):SetAbuseReportUrl("<?=$url?>/AbuseReport/InGameChatHandler.ashx") end)
	pcall(function() game:GetService("ScriptInformationProvider"):SetAssetUrl("<?=$url?>/Asset/") end)
	pcall(function() game:GetService("ContentProvider"):SetBaseUrl("<?=$url?>/") end)
	pcall(function() game:GetService("Players"):SetChatFilterUrl("<?=$url?>/Game/ChatFilter.php") end)

	game:GetService("BadgeService"):SetPlaceId(<?=$gameid?>)

	game:GetService("BadgeService"):SetIsBadgeLegalUrl("")
	game:GetService("InsertService"):SetBaseSetsUrl("<?=$url?>/Game/Tools/InsertAsset.ashx?nsets=10&type=base")
	game:GetService("InsertService"):SetUserSetsUrl("<?=$url?>/Game/Tools/InsertAsset.ashx?nsets=20&type=user&userid=%d")
	game:GetService("InsertService"):SetCollectionUrl("<?=$url?>/Game/Tools/InsertAsset.ashx?sid=%d")
	game:GetService("InsertService"):SetAssetUrl("<?=$url?>/Asset/?id=%d")
	game:GetService("InsertService"):SetAssetVersionUrl("<?=$url?>/Asset/?assetversionid=%d")
	
	--pcall(function() loadfile("<?=$url?>/Game/LoadPlaceInfo.ashx?PlaceId=<?=$gameid?>")() end)
	
	-- pcall(function() 
	--			if access then
	--				loadfile("<?=$url?>/Game/PlaceSpecificScript.ashx?PlaceId=<?=$gameid?>&")()
	--			end
	--		end)

--pcall(function() game:GetService("NetworkServer"):SetIsPlayerAuthenticationRequired(true) end)
settings().Diagnostics.LuaRamLimit = 0
--settings().Network:SetThroughputSensitivity(0.08, 0.01)
--settings().Network.SendRate = 35
--settings().Network.PhysicsSend = 0  -- 1==RoundRobin


game:GetService("Players").PlayerAdded:connect(function(player)
	print("Player " .. player.userId .. " added")
end)

game:GetService("Players").PlayerRemoving:connect(function(player)
	print("Player " .. player.userId .. " leaving")
end)

-- load the game
game:Load("rbxasset://place<?=$gameid?>.rbxl")
-- Now start the connection
ns:Start(<?=$port?>) 
scriptContext:SetTimeout(10)
scriptContext.ScriptsDisabled = false
-- StartGame -- 
game:GetService("RunService"):Run()