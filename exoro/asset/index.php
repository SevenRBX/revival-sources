<?php
if(!empty($_GET['id']))
{
$id = $_GET['id'];

if (file_exists($id)) {
$file = "http://www.exoro.cf/asset/assets/" . $id . ".rbxm"; 
// Example if file exists in http://www.exoro.cf/asset/assets/ID.rbxm 
// this will load file from http://www.exoro.cf/asset/assets/

// but if file is not exists, this will take model id from https://assetdelivery.roblox.com/v1/asset/

header("Content-Description: File Transfer"); 
header("Content-Type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=\"". basename($id) ."\""); 

readfile($file);
exit(); 
} else {
		header('Location: https://assetdelivery.roblox.com/v1/asset/?id=' . $id);
		exit;
}
}