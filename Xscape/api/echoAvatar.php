<?php
include_once('../site.php');
$userId = $_GET['userId'];
$gameId = $_GET['gameId'];

$stmt13 = $db->prepare("SELECT * FROM games WHERE id = :id");
$stmt13->execute([':id' => $gameId]);

$get3 = $stmt13->fetch();

if($get3){
echo"http://www.xsscape.cf/Asset/?id=9043093;";
        $stmt = $db->prepare("SELECT * FROM wear WHERE user = :user");
        $stmt->execute([':user' => $userId]);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $gid = $row['item'];
            $stmt1 = $db->prepare("SELECT * FROM catalog WHERE id = :id");
            $stmt1->execute([':id' => $gid]);

            $get = $stmt1->fetch();
        if($get3['gearAllowed'] !== 1){
          if($get['type'] !== "gear")
        $getlink = "http://www.xsscape.cf/Asset/?id=" . $get['asset'];
        echo $getlink . ";";
          }else{
            $getlink = "http://www.xsscape.cf/Asset/?id=" . $get['asset'];
            echo $getlink . ";";
          }
        }
header("Content-Type: text/plain");
echo('http://www.xsscape.cf/Asset/BodyColors.ashx?userId=' . $userId . ';');
}else{
  die('im gonna kidnap u - codex');
}
