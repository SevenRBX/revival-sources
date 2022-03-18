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
if ($assetCount > 0) { // Check if user have this item
    $wear = $db->prepare("SELECT count(*) FROM wear WHERE item = ? AND type = ? AND user = ?");
    $wear->execute([$itemid, $itemType, $usr['id']]);
    $wearCount = $wear->fetchColumn();
    if ($wearCount < 1) { // Check if use not wearing this item
    header('Location: /my/avatar?type='.$itemType);
    } else {
        $delete = $db->prepare("DELETE FROM wear WHERE type = ? AND item = ? AND user = ?");
        $delete->execute([$itemType, $itemid, $usr['id']]);
        header('Location: /my/avatar?type='.$itemType);
    }
}else{
header('Location: /my/avatar?type='.$itemType); // Only bozo can get this
}
