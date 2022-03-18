<?php
header('Content-Type: text/html; charset=utf-8');
//admins
$admins = [
    1,
    3,
    130,
    121,
    152,
    126,
    234,
    137
    // GUYS DONT ADD SOME ONE ELSE! LMAOO -Codex
];

if ($_GET["method"] == "IsBestFriendsWith") {
    echo '<Value Type="boolean">false</Value>';
}
if ($_GET["method"] == "IsFriendsWith") {
    echo '<Value Type="boolean">true</Value>';
}
if ($_GET["method"] == "IsInGroup") {
    if ($_GET['groupid'] == "1200769") {
        if (in_array((int)$_GET['playerid'], $admins)) {
            $value = 'true';
        } else {
            $value = 'false';
        }
    } else {
        $value = 'false';
    }
    echo '<Value Type="boolean">'.$value.'</Value>';
}
if ($_GET["method"] == "GetGroupRank") {
    if ($_GET['groupid'] == "1") {
        if (in_array((int)$_GET['playerid'], $admins)) {
            $value = 'true';
        } else {
            $value = 'false';
        }
    } else {
        $value = 'false';
    }
    echo '<Value Type="boolean">'.$value.'</Value>';
}
?>