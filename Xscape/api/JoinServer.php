<?php
require_once '../Game/GameGlobal.php';
header("Content-Type: text/plain");
error_reporting(0);

if(isset($_GET['PlaceId'])){
if(isset($_GET['t'])){

if(is_numeric($_GET['PlaceId'])){
$xd = $_GET['t'];
$query = $db->prepare("SELECT * FROM accounts WHERE authticket = :authy");
$query->execute([':authy' => $xd]);

$lol = $query->fetch();

// Game info
$query12 = $db->prepare("SELECT * FROM games WHERE id = :id");
$query12->execute([':id' => $_GET['PlaceId']]);

$game2 = $query12->fetch();

$query1 = $db->prepare("SELECT * FROM servers WHERE game = :id");
$query1->execute([':id' => $_GET['PlaceId']]);

$game = $query1->fetch();

$gamePort = $game['port'];
$gameId = $game2['id'];
$gameIp = "185.127.19.218";
if(!$game){
  $shit = array(
      "errors" => array(
      "message" => "Invalid Token!"
      )
  );
  echo json_encode($shit);
  exit();
}
if(!$game2){
  $shit = array(
      "errors" => array(
      "message" => "Invalid Place!"
      )
  );
  echo json_encode($shit);
  exit();
}
if(!$lol){
  $shit = array(
      "errors" => array(
      "message" => "Invalid Token!"
      )
  );
  echo json_encode($shit);
  exit();
}
}else{
  $shit = array(
      "errors" => array(
      "message" => "Invalid Place!"
      )
  );
  echo json_encode($shit);
  exit();
}
$usrid = $lol['id'];
$joinscript = [
        "ClientPort" => 0,
        "MachineAddress" => "$gameIp",
        "ServerPort" => $gamePort,
        "PingUrl" => "",
        "PingInterval" => 20,
        "UserName" => $lol['username'],
        "SeleniumTestMode" => false,
        "UserId" => $lol['id'],
        "SuperSafeChat" => false,
        "CharacterAppearance" => "http://www.xsscape.cf/api/echoAvatar?userId=$usrid&gameId=$gameId",
        "ClientTicket" => "",
        "GameId" => $gameId,
        "PlaceId" => $gameId,
        "MeasurementUrl" => "", // No telemetry here :)
        "WaitingForCharacterGuid" => "26eb3e21-aa80-475b-a777-b43c3ea5f7d2",
        "BaseUrl" => "http://www.xsscape.cf",
        "ChatStyle" => "ClassicAndBubble",
        "VendorId" => "0",
        "ScreenShotInfo" => "",
        "VideoInfo" => "",
        "CreatorId" => "1",
        "CreatorTypeEnum" => "User",
        "MembershipType" => $lol['MembershipType'],
        "AccountAge" => "365",
        "CookieStoreFirstTimePlayKey" => "rbx_evt_ftp",
        "CookieStoreFiveMinutePlayKey" => "rbx_evt_fmp",
        "CookieStoreEnabled" => true,
        "IsRobloxPlace" => true,
        "GenerateTeleportJoin" => false,
        "IsUnknownOrUnder13" => false,
        "SessionId" => "39412c34-2f9b-436f-b19d-b8db90c2e186|00000000-0000-0000-0000-000000000000|0|190.23.103.228|8|2021-03-03T17:04:47+01:00|0|null|null",
        "DataCenterId" => 0,
        "UniverseId" => 3,
        "BrowserTrackerId" => 0,
        "UsePortraitMode" => false,
        "FollowUserId" => 0,
        "characterAppearanceId" => 1
    ];

// Encode it!
$data = json_encode($joinscript, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);

// Sign joinscript
$signature = $sig->get_signature("\r\n" . $data);

// exit
exit("--rbxsig%" . $signature . "%\r\n" . $data);
$get = new get();
}else{
  $shit = array(
      "errors" => array(
      "message" => "Invalid Token!"
      )
  );
  echo json_encode($shit); }
  exit();
}else{
  $shit = array(
      "errors" => array(
      "message" => "Invalid Place!"
      )
  );
  echo json_encode($shit); }
  exit();
?>
