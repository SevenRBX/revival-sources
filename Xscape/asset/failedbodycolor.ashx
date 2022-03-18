<?php
require_once '../api/dbapi.php';
$xd = $_GET['userId'];
$query = $db->prepare("SELECT * FROM accounts WHERE id = :authy");
$query->execute([':authy' => $xd]);

$lol = $query->fetch();
if(!$lol){
exit('fard');
}
?>
<?xml version="1.0" encoding="utf-8" ?>
<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="BodyColors">
		<Properties>
			<int name="HeadColor"><?=$lol['HeadColor']?></int>
			<int name="LeftArmColor"><?=$lol['LeftArmColor']?></int>
			<int name="LeftLegColor"><?=$lol['LeftLegColor']?></int>
			<string name="Name">Body Colors</string>
			<int name="RightArmColor"><?=$lol['RightArmColor']?></int>
			<int name="RightLegColor"><?=$lol['RightLegColor']?></int>
			<int name="TorsoColor"><?=$lol['TorsoColor']?></int>
			<bool name="archivable">true</bool>
		</Properties>
	</Item>
</roblox>
