<?php
require_once 'GameGlobal.php';
header("Content-Type: text/plain");

$data = 'local RunService = game:GetService("RunService")
local Players = game:GetService("Players")

local LocalPlayer = Players:CreateLocalPlayer(1)

LocalPlayer.CharacterAppearance = ""

LocalPlayer.CharacterAdded:connect(function(character)
    repeat wait() until character:FindFirstChild("Humanoid")
    local humanoid = character:FindFirstChild("Humanoid")

    humanoid.Died:connect(function()
        wait(5)
        LocalPlayer:LoadCharacter()
    end)
end)

RunService:Run()
LocalPlayer:LoadCharacter()';

// Sign script
$signature = $sig->get_signature("\r\n" . $data);

// exit
exit("%" . $signature . "%\r\n" . $data);
?>