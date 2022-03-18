<?php
include_once '../../site.php';

if(!$logged){
header('Location: /');
exit;
}
$itemid = $_GET['i'];
$getinfo = $db->prepare("SELECT type FROM catalog WHERE id = ?");
$getinfo->execute([$itemid]);
$info = $getinfo->fetch();
$itemType = $info['type'];

$asset = $db->prepare("SELECT count(*) FROM owneditems WHERE type = ? AND item = ? AND user = ?");
$asset->execute([$itemType, $itemid, $usr['id']]);
$assetCount = $asset->fetchColumn();
if ($assetCount > 0) {
    $wear = $db->prepare("SELECT count(*) FROM wear WHERE type = ? AND user = ?");
    $wear->execute([$itemType, $usr['id']]);
    $wearCount = $wear->fetchColumn();
    if ($wearCount < 3) { // Check if user not wearing this item
    $wear2 = $db->prepare("SELECT count(*) FROM wear WHERE item = ? AND type = ? AND user = ?");
    $wear2->execute([$itemid, $itemType, $usr['id']]);
    $wearCount2 = $wear2->fetchColumn();
    if ($wearCount2 < 1) { // Check if user not wearing this item
        $insert = $db->prepare("INSERT INTO wear (user,type,item) VALUES (?,?,?)");
        $insert->execute([$usr['id'], $itemType, $itemid]);
        header('Location: /my/avatar?type='.$itemType);
    } else {
    header('Location: /my/avatar?type='.$itemType);
    }
  }else{
    header('Location: /my/avatar?type='.$itemType);
  }
}else{
header('Location: /my/avatar?type='.$itemType); // Only bozo can get this
}
