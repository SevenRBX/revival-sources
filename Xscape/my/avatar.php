<?php
require_once ('../site.php');
require_once ('../content/functions.php');
error_reporting(0);
if(!$logged){
die('<META http-equiv=refresh content=0;URL=/>');
exit;
}
//$get->header('Xscape is a private server for the game ROBLOX. Xscape utilizes legacy clients and a classic site. We are not affliated with ROBLOX Corporation.', 'Avatar', 'https://images.rbxcdn.com/fb70fd2b56107a0d43f2f98658885702.jpg');

    if(!isset($_GET['type'])) {
        $type = "hat";
    }else{
        $type = $_GET['type'];
    }
    if(!isset($_GET['page'])) {
        $page = 1;
    }else{
        $page = $_GET['page'];
    }
    if(!isset($_GET['page2'])) {
        $page2 = 1;
    }else{
        $page2 = $_GET['page2'];
    }
$NUMBER1 = "#F2F3F2";
$NUMBER2 = "#E5E4DE";
$NUMBER3 = "#A3A2A4";
$NUMBER4 = "#635F61";
$NUMBER5 = "#1B2A34";
$NUMBER6 = "#C4281B";
$NUMBER7 = "#F5CD2F";
$NUMBER8 = "#FDEA8C";
$NUMBER9 = "#0D69AB";
$NUMBER10 = "#008F9B";
$NUMBER11 = "#6E99C9";
$NUMBER12 = "#80BBDB";
$NUMBER13 = "#B4D2E3";
$NUMBER14 = "#74869C";
$NUMBER15 = "#DA8540";
$NUMBER16 = "#E29B3F";
$NUMBER17 = "#27462C";
$NUMBER18 = "#287F46";
$NUMBER19 = "#4B974A";
$NUMBER20 = "#A4BD46";
$NUMBER21 = "#A1C48B";
$NUMBER22 = "#A1C48B";
$NUMBER23 = "#A05F34";
$NUMBER24 = "#694027";
$NUMBER25 = "#6B327B";
$NUMBER26 = "#E8BAC7";
$NUMBER27 = "#DA8679";
$NUMBER28 = "#D7C599";
$NUMBER29 = "#957976";
$NUMBER30 = "#7C5C45";
$NUMBER31 = "#CC8E68";
$NUMBER32 = "#EAB891";

if($usr['HeadColor'] == "1"){
    $head = "#F2F3F2";
    $HeadColor = 1;
    }elseif($usr['HeadColor'] == "2"){
    $head = "#E5E4DE";
    $HeadColor = 208;
    }elseif($usr['HeadColor'] == "3"){
    $head = "#A3A2A4";
    $HeadColor = 194;
    }elseif($usr['HeadColor'] == "4"){
    $head = "#635F61";
    $HeadColor = 199;
    }elseif($usr['HeadColor'] == "5"){
    $head = "#1B2A34";
    $HeadColor = 26;
    }elseif($usr['HeadColor'] == "6"){
    $head = "#C4281B";
    $HeadColor = 21;
    }elseif($usr['HeadColor'] == "7"){
    $head = "#F5CD2F";
    $HeadColor = 24;
    }elseif($usr['HeadColor'] == "8"){
    $head = "#FDEA8C";
    $HeadColor = 226;
    }elseif($usr['HeadColor'] == "9"){
    $head = "#0D69AB";
    $HeadColor = 23;
    }elseif($usr['HeadColor'] == "10"){
    $head = "#008F9B";
    $HeadColor = 107;
    }elseif($usr['HeadColor'] == "11"){
    $head = "#6E99C9";
    $HeadColor = 102;
    }elseif($usr['HeadColor'] == "12"){
    $head = "#80BBDB";
    $HeadColor = 11;
    }elseif($usr['HeadColor'] == "13"){
    $head = "#B4D2E3";
    $HeadColor = 45;
    }elseif($usr['HeadColor'] == "14"){
    $head = "#74869C";
    $HeadColor = 135;
    }elseif($usr['HeadColor'] == "15"){
    $head = "#DA8540";
    $HeadColor = 106;
    }elseif($usr['HeadColor'] == "16"){
    $head = "#E29B3F";
    $HeadColor = 105;
    }elseif($usr['HeadColor'] == "17"){
    $head = "#27462C";
    $HeadColor = 141;
    }elseif($usr['HeadColor'] == "18"){
    $head = "#287F46";
    $HeadColor = 28;
    }elseif($usr['HeadColor'] == "19"){
    $head = "#4B974A";
    $HeadColor = 37;
    }elseif($usr['HeadColor'] == "20"){
    $head = "#A4BD46";
    $HeadColor = 119;
    }elseif($usr['HeadColor'] == "21"){
    $head = "#A1C48B";
    $HeadColor = 29;
    }elseif($usr['HeadColor'] == "22"){
    $head = "#A1C48B";
    $HeadColor = 151;
    }elseif($usr['HeadColor'] == "23"){
    $head = "#A05F34";
    $HeadColor = 38;
    }elseif($usr['HeadColor'] == "24"){
    $head = "#694027";
    $HeadColor = 192;
    }elseif($usr['HeadColor'] == "25"){
    $head = "#6B327B";
    $HeadColor = 104;
    }elseif($usr['HeadColor'] == "26"){
    $head = "#E8BAC7";
    $HeadColor = 9;
    }elseif($usr['HeadColor'] == "27"){
    $head = "#DA8679";
    $HeadColor = 101;
    }elseif($usr['HeadColor'] == "28"){
    $head = "#D7C599";
    $HeadColor = 5;
    }elseif($usr['HeadColor'] == "29"){
    $head = "#957976";
    $HeadColor = 153;
    }elseif($usr['HeadColor'] == "30"){
    $head = "#7C5C45";
    $HeadColor = 217;
    }elseif($usr['HeadColor'] == "31"){
    $head = "#CC8E68";
    $HeadColor = 18;
    }elseif($usr['HeadColor'] == "32"){
    $head = "#EAB891";
    $HeadColor = 125;
    }

    if($usr['TorsoColor'] == "1"){
    $torso = "#F2F3F2";
    $TorsoColor = 1;
    }elseif($usr['TorsoColor'] == "2"){
    $torso = "#E5E4DE";
    $TorsoColor = 208;
    }elseif($usr['TorsoColor'] == "3"){
    $torso = "#A3A2A4";
    $TorsoColor = 194;
    }elseif($usr['TorsoColor'] == "4"){
    $torso = "#635F61";
    $TorsoColor = 199;
    }elseif($usr['TorsoColor'] == "5"){
    $torso = "#1B2A34";
    $TorsoColor = 26;
    }elseif($usr['TorsoColor'] == "6"){
    $torso = "#C4281B";
    $TorsoColor = 21;
    }elseif($usr['TorsoColor'] == "7"){
    $torso = "#F5CD2F";
    $TorsoColor = 24;
    }elseif($usr['TorsoColor'] == "8"){
    $torso = "#FDEA8C";
    $TorsoColor = 226;
    }elseif($usr['TorsoColor'] == "9"){
    $torso = "#0D69AB";
    $TorsoColor = 23;
    }elseif($usr['TorsoColor'] == "10"){
    $torso = "#008F9B";
    $TorsoColor = 107;
    }elseif($usr['TorsoColor'] == "11"){
    $torso = "#6E99C9";
    $TorsoColor = 102;
    }elseif($usr['TorsoColor'] == "12"){
    $torso = "#80BBDB";
    $TorsoColor = 11;
    }elseif($usr['TorsoColor'] == "13"){
    $torso = "#B4D2E3";
    $TorsoColor = 45;
    }elseif($usr['TorsoColor'] == "14"){
    $torso = "#74869C";
    $TorsoColor = 135;
    }elseif($usr['TorsoColor'] == "15"){
    $torso = "#DA8540";
    $TorsoColor = 106;
    }elseif($usr['TorsoColor'] == "16"){
    $torso = "#E29B3F";
    $TorsoColor = 105;
    }elseif($usr['TorsoColor'] == "17"){
    $torso = "#27462C";
    $TorsoColor = 141;
    }elseif($usr['TorsoColor'] == "18"){
    $torso = "#287F46";
    $TorsoColor = 28;
    }elseif($usr['TorsoColor'] == "19"){
    $torso = "#4B974A";
    $TorsoColor = 37;
    }elseif($usr['TorsoColor'] == "20"){
    $torso = "#A4BD46";
    $TorsoColor = 119;
    }elseif($usr['TorsoColor'] == "21"){
    $torso = "#A1C48B";
    $TorsoColor = 29;
    }elseif($usr['TorsoColor'] == "22"){
    $torso = "#A1C48B";
    $TorsoColor = 151;
    }elseif($usr['TorsoColor'] == "23"){
    $torso = "#A05F34";
    $TorsoColor = 38;
    }elseif($usr['TorsoColor'] == "24"){
    $torso = "#694027";
    $TorsoColor = 192;
    }elseif($usr['TorsoColor'] == "25"){
    $torso = "#6B327B";
    $TorsoColor = 104;
    }elseif($usr['TorsoColor'] == "26"){
    $torso = "#E8BAC7";
    $TorsoColor = 9;
    }elseif($usr['TorsoColor'] == "27"){
    $torso = "#DA8679";
    $TorsoColor = 101;
    }elseif($usr['TorsoColor'] == "28"){
    $torso = "#D7C599";
    $TorsoColor = 5;
    }elseif($usr['TorsoColor'] == "29"){
    $torso = "#957976";
    $TorsoColor = 153;
    }elseif($usr['TorsoColor'] == "30"){
    $torso = "#7C5C45";
    $TorsoColor = 217;
    }elseif($usr['TorsoColor'] == "31"){
    $torso = "#CC8E68";
    $TorsoColor = 18;
    }elseif($usr['TorsoColor'] == "32"){
    $torso = "#EAB891";
    $TorsoColor = 125;
    }

    if($usr['LeftArmColor'] == "1"){
    $leftarm = "#F2F3F2";
    $LeftArmColor = 1;
    }elseif($usr['LeftArmColor'] == "2"){
    $leftarm = "#E5E4DE";
    $LeftArmColor = 208;
    }elseif($usr['LeftArmColor'] == "3"){
    $leftarm = "#A3A2A4";
    $LeftArmColor = 194;
    }elseif($usr['LeftArmColor'] == "4"){
    $leftarm = "#635F61";
    $LeftArmColor = 199;
    }elseif($usr['LeftArmColor'] == "5"){
    $leftarm = "#1B2A34";
    $LeftArmColor = 26;
    }elseif($usr['LeftArmColor'] == "6"){
    $leftarm = "#C4281B";
    $LeftArmColor = 21;
    }elseif($usr['LeftArmColor'] == "7"){
    $leftarm = "#F5CD2F";
    $LeftArmColor = 24;
    }elseif($usr['LeftArmColor'] == "8"){
    $leftarm = "#FDEA8C";
    $LeftArmColor = 226;
    }elseif($usr['LeftArmColor'] == "9"){
    $leftarm = "#0D69AB";
    $LeftArmColor = 23;
    }elseif($usr['LeftArmColor'] == "10"){
    $leftarm = "#008F9B";
    $LeftArmColor = 107;
    }elseif($usr['LeftArmColor'] == "11"){
    $leftarm = "#6E99C9";
    $LeftArmColor = 102;
    }elseif($usr['LeftArmColor'] == "12"){
    $leftarm = "#80BBDB";
    $LeftArmColor = 11;
    }elseif($usr['LeftArmColor'] == "13"){
    $leftarm = "#B4D2E3";
    $LeftArmColor = 45;
    }elseif($usr['LeftArmColor'] == "14"){
    $leftarm = "#74869C";
    $LeftArmColor = 135;
    }elseif($usr['LeftArmColor'] == "15"){
    $leftarm = "#DA8540";
    $LeftArmColor = 106;
    }elseif($usr['LeftArmColor'] == "16"){
    $leftarm = "#E29B3F";
    $LeftArmColor = 105;
    }elseif($usr['LeftArmColor'] == "17"){
    $leftarm = "#27462C";
    $LeftArmColor = 141;
    }elseif($usr['LeftArmColor'] == "18"){
    $leftarm = "#287F46";
    $LeftArmColor = 28;
    }elseif($usr['LeftArmColor'] == "19"){
    $leftarm = "#4B974A";
    $LeftArmColor = 37;
    }elseif($usr['LeftArmColor'] == "20"){
    $leftarm = "#A4BD46";
    $LeftArmColor = 119;
    }elseif($usr['LeftArmColor'] == "21"){
    $leftarm = "#A1C48B";
    $LeftArmColor = 29;
    }elseif($usr['LeftArmColor'] == "22"){
    $leftarm = "#A1C48B";
    $LeftArmColor = 151;
    }elseif($usr['LeftArmColor'] == "23"){
    $leftarm = "#A05F34";
    $LeftArmColor = 38;
    }elseif($usr['LeftArmColor'] == "24"){
    $leftarm = "#694027";
    $LeftArmColor = 192;
    }elseif($usr['LeftArmColor'] == "25"){
    $leftarm = "#6B327B";
    $LeftArmColor = 104;
    }elseif($usr['LeftArmColor'] == "26"){
    $leftarm = "#E8BAC7";
    $LeftArmColor = 9;
    }elseif($usr['LeftArmColor'] == "27"){
    $leftarm = "#DA8679";
    $LeftArmColor = 101;
    }elseif($usr['LeftArmColor'] == "28"){
    $leftarm = "#D7C599";
    $LeftArmColor = 5;
    }elseif($usr['LeftArmColor'] == "29"){
    $leftarm = "#957976";
    $LeftArmColor = 153;
    }elseif($usr['LeftArmColor'] == "30"){
    $leftarm = "#7C5C45";
    $LeftArmColor = 217;
    }elseif($usr['LeftArmColor'] == "31"){
    $leftarm = "#CC8E68";
    $LeftArmColor = 18;
    }elseif($usr['LeftArmColor'] == "32"){
    $leftarm = "#EAB891";
    $LeftArmColor = 125;
    }

    if($usr['RightArmColor'] == "1"){
    $rightarm = "#F2F3F2";
    $RightArmColor = 1;
    }elseif($usr['RightArmColor'] == "2"){
    $rightarm = "#E5E4DE";
    $RightArmColor = 208;
    }elseif($usr['RightArmColor'] == "3"){
    $rightarm = "#A3A2A4";
    $RightArmColor = 194;
    }elseif($usr['RightArmColor'] == "4"){
    $rightarm = "#635F61";
    $RightArmColor = 199;
    }elseif($usr['RightArmColor'] == "5"){
    $rightarm = "#1B2A34";
    $RightArmColor = 26;
    }elseif($usr['RightArmColor'] == "6"){
    $rightarm = "#C4281B";
    $RightArmColor = 21;
    }elseif($usr['RightArmColor'] == "7"){
    $rightarm = "#F5CD2F";
    $RightArmColor = 24;
    }elseif($usr['RightArmColor'] == "8"){
    $rightarm = "#FDEA8C";
    $RightArmColor = 226;
    }elseif($usr['RightArmColor'] == "9"){
    $rightarm = "#0D69AB";
    $RightArmColor = 23;
    }elseif($usr['RightArmColor'] == "10"){
    $rightarm = "#008F9B";
    $RightArmColor = 107;
    }elseif($usr['RightArmColor'] == "11"){
    $rightarm = "#6E99C9";
    $RightArmColor = 102;
    }elseif($usr['RightArmColor'] == "12"){
    $rightarm = "#80BBDB";
    $RightArmColor = 11;
    }elseif($usr['RightArmColor'] == "13"){
    $rightarm = "#B4D2E3";
    $RightArmColor = 45;
    }elseif($usr['RightArmColor'] == "14"){
    $rightarm = "#74869C";
    $RightArmColor = 135;
    }elseif($usr['RightArmColor'] == "15"){
    $rightarm = "#DA8540";
    $RightArmColor = 106;
    }elseif($usr['RightArmColor'] == "16"){
    $rightarm = "#E29B3F";
    $RightArmColor = 105;
    }elseif($usr['RightArmColor'] == "17"){
    $rightarm = "#27462C";
    $RightArmColor = 141;
    }elseif($usr['RightArmColor'] == "18"){
    $rightarm = "#287F46";
    $RightArmColor = 28;
    }elseif($usr['RightArmColor'] == "19"){
    $rightarm = "#4B974A";
    $RightArmColor = 37;
    }elseif($usr['RightArmColor'] == "20"){
    $rightarm = "#A4BD46";
    $RightArmColor = 119;
    }elseif($usr['RightArmColor'] == "21"){
    $rightarm = "#A1C48B";
    $RightArmColor = 29;
    }elseif($usr['RightArmColor'] == "22"){
    $rightarm = "#A1C48B";
    $RightArmColor = 151;
    }elseif($usr['RightArmColor'] == "23"){
    $rightarm = "#A05F34";
    $RightArmColor = 38;
    }elseif($usr['RightArmColor'] == "24"){
    $rightarm = "#694027";
    $RightArmColor = 192;
    }elseif($usr['RightArmColor'] == "25"){
    $rightarm = "#6B327B";
    $RightArmColor = 104;
    }elseif($usr['RightArmColor'] == "26"){
    $rightarm = "#E8BAC7";
    $RightArmColor = 9;
    }elseif($usr['RightArmColor'] == "27"){
    $rightarm = "#DA8679";
    $RightArmColor = 101;
    }elseif($usr['RightArmColor'] == "28"){
    $rightarm = "#D7C599";
    $RightArmColor = 5;
    }elseif($usr['RightArmColor'] == "29"){
    $rightarm = "#957976";
    $RightArmColor = 153;
    }elseif($usr['RightArmColor'] == "30"){
    $rightarm = "#7C5C45";
    $RightArmColor = 217;
    }elseif($usr['RightArmColor'] == "31"){
    $rightarm = "#CC8E68";
    $RightArmColor = 18;
    }elseif($usr['RightArmColor'] == "32"){
    $rightarm = "#EAB891";
    $RightArmColor = 125;
    }

    if($usr['LeftLegColor']== "1"){
    $leftleg = "#F2F3F2";
    $LeftLegColor = 1;
    }elseif($usr['LeftLegColor']== "2"){
    $leftleg = "#E5E4DE";
    $LeftLegColor = 208;
    }elseif($usr['LeftLegColor']== "3"){
    $leftleg = "#A3A2A4";
    $LeftLegColor = 194;
    }elseif($usr['LeftLegColor']== "4"){
    $leftleg = "#635F61";
    $LeftLegColor = 199;
    }elseif($usr['LeftLegColor']== "5"){
    $leftleg = "#1B2A34";
    $LeftLegColor = 26;
    }elseif($usr['LeftLegColor']== "6"){
    $leftleg = "#C4281B";
    $LeftLegColor = 21;
    }elseif($usr['LeftLegColor']== "7"){
    $leftleg = "#F5CD2F";
    $LeftLegColor = 24;
    }elseif($usr['LeftLegColor']== "8"){
    $leftleg = "#FDEA8C";
    $LeftLegColor = 226;
    }elseif($usr['LeftLegColor']== "9"){
    $leftleg = "#0D69AB";
    $LeftLegColor = 23;
    }elseif($usr['LeftLegColor']== "10"){
    $leftleg = "#008F9B";
    $LeftLegColor = 107;
    }elseif($usr['LeftLegColor']== "11"){
    $leftleg = "#6E99C9";
    $LeftLegColor = 102;
    }elseif($usr['LeftLegColor']== "12"){
    $leftleg = "#80BBDB";
    $LeftLegColor = 11;
    }elseif($usr['LeftLegColor']== "13"){
    $leftleg = "#B4D2E3";
    $LeftLegColor = 45;
    }elseif($usr['LeftLegColor']== "14"){
    $leftleg = "#74869C";
    $LeftLegColor = 135;
    }elseif($usr['LeftLegColor']== "15"){
    $leftleg = "#DA8540";
    $LeftLegColor = 106;
    }elseif($usr['LeftLegColor']== "16"){
    $leftleg = "#E29B3F";
    $LeftLegColor = 105;
    }elseif($usr['LeftLegColor']== "17"){
    $leftleg = "#27462C";
    $LeftLegColor = 141;
    }elseif($usr['LeftLegColor']== "18"){
    $leftleg = "#287F46";
    $LeftLegColor = 28;
    }elseif($usr['LeftLegColor']== "19"){
    $leftleg = "#4B974A";
    $LeftLegColor = 37;
    }elseif($usr['LeftLegColor']== "20"){
    $leftleg = "#A4BD46";
    $LeftLegColor = 119;
    }elseif($usr['LeftLegColor']== "21"){
    $leftleg = "#A1C48B";
    $LeftLegColor = 29;
    }elseif($usr['LeftLegColor']== "22"){
    $leftleg = "#A1C48B";
    $LeftLegColor = 151;
    }elseif($usr['LeftLegColor']== "23"){
    $leftleg = "#A05F34";
    $LeftLegColor = 38;
    }elseif($usr['LeftLegColor']== "24"){
    $leftleg = "#694027";
    $LeftLegColor = 192;
    }elseif($usr['LeftLegColor']== "25"){
    $leftleg = "#6B327B";
    $LeftLegColor = 104;
    }elseif($usr['LeftLegColor']== "26"){
    $leftleg = "#E8BAC7";
    $LeftLegColor = 9;
    }elseif($usr['LeftLegColor']== "27"){
    $leftleg = "#DA8679";
    $LeftLegColor = 101;
    }elseif($usr['LeftLegColor']== "28"){
    $leftleg = "#D7C599";
    $LeftLegColor = 5;
    }elseif($usr['LeftLegColor']== "29"){
    $leftleg = "#957976";
    $LeftLegColor = 153;
    }elseif($usr['LeftLegColor']== "30"){
    $leftleg = "#7C5C45";
    $LeftLegColor = 217;
    }elseif($usr['LeftLegColor']== "31"){
    $leftleg = "#CC8E68";
    $LeftLegColor = 18;
    }elseif($usr['LeftLegColor']== "32"){
    $leftleg = "#EAB891";
    $LeftLegColor = 125;
    }

    if($usr['RightLegColor'] == "1"){
    $rightleg = "#F2F3F2";
    $RightLegColor = 1;
    }elseif($usr['RightLegColor'] == "2"){
    $rightleg = "#E5E4DE";
    $RightLegColor = 208;
    }elseif($usr['RightLegColor'] == "3"){
    $rightleg = "#A3A2A4";
    $RightLegColor = 194;
    }elseif($usr['RightLegColor'] == "4"){
    $rightleg = "#635F61";
    $RightLegColor = 199;
    }elseif($usr['RightLegColor'] == "5"){
    $rightleg = "#1B2A34";
    $RightLegColor = 26;
    }elseif($usr['RightLegColor'] == "6"){
    $rightleg = "#C4281B";
    $RightLegColor = 21;
    }elseif($usr['RightLegColor'] == "7"){
    $rightleg = "#F5CD2F";
    $RightLegColor = 24;
    }elseif($usr['RightLegColor'] == "8"){
    $rightleg = "#FDEA8C";
    $RightLegColor = 226;
    }elseif($usr['RightLegColor'] == "9"){
    $rightleg = "#0D69AB";
    $RightLegColor = 23;
    }elseif($usr['RightLegColor'] == "10"){
    $rightleg = "#008F9B";
    $RightLegColor = 107;
    }elseif($usr['RightLegColor'] == "11"){
    $rightleg = "#6E99C9";
    $RightLegColor = 102;
    }elseif($usr['RightLegColor'] == "12"){
    $rightleg = "#80BBDB";
    $RightLegColor = 11;
    }elseif($usr['RightLegColor'] == "13"){
    $rightleg = "#B4D2E3";
    $RightLegColor = 45;
    }elseif($usr['RightLegColor'] == "14"){
    $rightleg = "#74869C";
    $RightLegColor = 135;
    }elseif($usr['RightLegColor'] == "15"){
    $rightleg = "#DA8540";
    $RightLegColor = 106;
    }elseif($usr['RightLegColor'] == "16"){
    $rightleg = "#E29B3F";
    $RightLegColor = 105;
    }elseif($usr['RightLegColor'] == "17"){
    $rightleg = "#27462C";
    $RightLegColor = 141;
    }elseif($usr['RightLegColor'] == "18"){
    $rightleg = "#287F46";
    $RightLegColor = 28;
    }elseif($usr['RightLegColor'] == "19"){
    $rightleg = "#4B974A";
    $RightLegColor = 37;
    }elseif($usr['RightLegColor'] == "20"){
    $rightleg = "#A4BD46";
    $RightLegColor = 119;
    }elseif($usr['RightLegColor'] == "21"){
    $rightleg = "#A1C48B";
    $RightLegColor = 29;
    }elseif($usr['RightLegColor'] == "22"){
    $rightleg = "#A1C48B";
    $RightLegColor = 151;
    }elseif($usr['RightLegColor'] == "23"){
    $rightleg = "#A05F34";
    $RightLegColor = 38;
    }elseif($usr['RightLegColor'] == "24"){
    $rightleg = "#694027";
    $RightLegColor = 192;
    }elseif($usr['RightLegColor'] == "25"){
    $rightleg = "#6B327B";
    $RightLegColor = 104;
    }elseif($usr['RightLegColor'] == "26"){
    $rightleg = "#E8BAC7";
    $RightLegColor = 9;
    }elseif($usr['RightLegColor'] == "27"){
    $rightleg = "#DA8679";
    $RightLegColor = 101;
    }elseif($usr['RightLegColor'] == "28"){
    $rightleg = "#D7C599";
    $RightLegColor = 5;
    }elseif($usr['RightLegColor'] == "29"){
    $rightleg = "#957976";
    $RightLegColor = 153;
    }elseif($usr['RightLegColor'] == "30"){
    $rightleg = "#7C5C45";
    $RightLegColor = 217;
    }elseif($usr['RightLegColor'] == "31"){
    $rightleg = "#CC8E68";
    $RightLegColor = 18;
    }elseif($usr['RightLegColor'] == "32"){
    $rightleg = "#EAB891";
    $RightLegColor = 125;
    }
?>
<!DOCTYPE html>
<html>
<!-- MachineID: WEB529 -->
<head id="ctl00_ctl00_Head1"><title>
	Avatar - Xscape
</title>
<link rel='stylesheet' href='https://xsscape.cf/content/css/CSSMain.css' />

<link rel='stylesheet' href='https://static.rbxcdn.com/css/page___dab3f0741ae9603a457e5c443dee0cef_m.css/fetch' />

<link href="../../favicon.ico" rel="icon" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Xscape" />
<meta name="description" content="Xscape is a private server for the game ROBLOX. Xscape utilizes legacy clients and a classic site. We are not affliated with ROBLOX Corporation." />
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine" />
<meta name="apple-itunes-app" content="app-id=431946152" />
<meta name="google-site-verification" content="KjufnQUaDv5nXJogvDMey4G-Kb7ceUVxTdzcMaP9pCY" />
<script type='text/javascript' src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js'></script>
<script type='text/javascript'>window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type='text/javascript' src='https://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js'></script>
<script type='text/javascript'>window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>

<script type="text/javascript">

        var _gaq = _gaq || [];

            window.GoogleAnalyticsDisableRoblox2 = true;
        _gaq.push(['b._setAccount', 'UA-486632-1']);
        _gaq.push(['b._setCampSourceKey', 'rbx_source']);
        _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
        _gaq.push(['b._setCampContentKey', 'rbx_campaign']);

            _gaq.push(['b._setDomainName', 'roblox.com']);

            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Member', 2]);
                _gaq.push(['b._setPageGroup', 1, 'Avatar']);
    _gaq.push(['b._trackPageview']);


        _gaq.push(['c._setAccount', 'UA-26810151-2']);
            _gaq.push(['c._setDomainName', 'roblox.com']);
                    _gaq.push(['c._setPageGroup', 1, 'Avatar']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

<script type="text/javascript">
    var _prum = [['id', ''],
                 ['mark', 'firstbyte', (new Date()).getTime()]];
    (function() {
        var s = document.getElementsByTagName('script')[0]
          , p = document.createElement('script');
        p.async = 'async';
        p.src = '//rum-static.pingdom.net/prum.min.js';
        s.parentNode.insertBefore(p, s);
    })();
</script>
<script type='text/javascript' src='https://js.rbxcdn.com/944ca9dbeed8344149cd70dfa5957806.js.gzip'></script>
        <script type="text/javascript">
            if (Roblox && Roblox.EventStream) {
                Roblox.EventStream.Init("//ecsv2.roblox.com/www/e.png",
                    "//ecsv2.roblox.com/www/e.png",
                    "//ecsv2.roblox.com/pe?t=studio",
                    "//ecsv2.roblox.com/pe?t=diagnostic");
            }
        </script>


<script type="text/javascript">
    if (Roblox && Roblox.PageHeartbeatEvent) {
        Roblox.PageHeartbeatEvent.Init([2,8,20,60]);
    }
</script><script type='text/javascript'>Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/f27ab562314284f6db31a6b309af5085.js.gzip';Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/2c184f0c9c042d5309458c45dddf6d4e.js.gzip';Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/823c7d686e6b3d8321275740fe498f9d.js.gzip';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/5cf0eb71249768c86649bbf0c98591b0.js.gzip';Roblox.config.paths['Widgets.GroupImage'] = 'https://js.rbxcdn.com/556af22c86bce192fb12defcd4d2121c.js.gzip';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/7689b2fd3f7467640cda2d19e5968409.js.gzip';Roblox.config.paths['Widgets.ItemImage'] = 'https://js.rbxcdn.com/c2aa2fcc2b1e8ec82e1bacfdb9dfffea.js.gzip';Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/52ff803e77bb661839e8b2c93bb5ba27.js.gzip';Roblox.config.paths['Widgets.SurveyModal'] = 'https://js.rbxcdn.com/56ad7af86ee4f8bc82af94269ed50148.js.gzip';</script><script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script><script type='text/javascript' src='https://js.rbxcdn.com/9baeaa4711cb9c60d3289b3f9d852647.js.gzip'></script>
<script type='text/javascript' src='https://js.rbxcdn.com/db280f4557c85e6dfeed29fa8b35a9eb.js.gzip'></script>
<script type='text/javascript' src='https://js.rbxcdn.com/0970a6ec2ef6866cfbb54b9a103df3e6.js.gzip'></script>
<script type='text/javascript' src='https://js.rbxcdn.com/67bb5c1d0e076adac8036b9fcca2b160.js.gzip'></script>

    <script type="text/javascript">


    googletag.cmd.push(function() {
        Roblox = Roblox || {};
        Roblox.AdsHelper = Roblox.AdsHelper || {};
        Roblox.AdsHelper.slots = [];
        Roblox.AdsHelper.slots = Roblox.AdsHelper.slots || []; Roblox.AdsHelper.slots.push({slot:googletag.defineSlot("/1015347/Roblox_MyCharacter_Top_728x90", [728, 90], "31393538333930").addService(googletag.pubads()), id: "31393538333930", path: "/1015347/Roblox_MyCharacter_Top_728x90"});

        for (var key in Roblox.AdsHelper.slots) {
            var slot = Roblox.AdsHelper.slots[key].slot;
            var id = Roblox.AdsHelper.slots[key].id;
            var path = Roblox.AdsHelper.slots[key].path;

            if (slot.renderEnded != "undefined") {
                (function(slot, id)
                {
                    slot.renderEndedOld = slot.renderEnded;
                    slot.renderEnded = function() {
                        slot.renderEndedOld();
                        if ($('#' + id + '.gutter').css('display') == "none") {
                            $(document).trigger("GuttersHidden");
                        }
                        if ($('#' + id + '.filmstrip').css('display') == "none") {
                            $(document).trigger("FilmStripHidden");
                        }
                    };
                }(slot, id));
            }
        }

            googletag.pubads().setTargeting("Age", ["98", "18AndOver" ]);
                    googletag.pubads().setTargeting("A", ["98", "18AndOver" ]);
                            googletag.pubads().setTargeting("Env",  "Production");
                                            googletag.pubads().setTargeting("Gender", "Male");
                    googletag.pubads().setTargeting("PLVU", "False");
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
    });
    </script>

        <link rel="canonical" href="https://www.roblox.com/my/avatar.aspx" />
        <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/api/item.ashx'] = 'https://www.roblox.com/api/item.ashx';
Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.roblox.com/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'https://www.roblox.com/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'https://www.roblox.com/client-status';
Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.roblox.com/game/';
Roblox.Endpoints.Urls['/game-auth/getauthticket'] = 'https://www.roblox.com/game-auth/getauthticket';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.roblox.com/game/edit.ashx';
Roblox.Endpoints.Urls['/game/getauthticket'] = 'https://assetgame.roblox.com/game/getauthticket';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.roblox.com/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.roblox.com/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.roblox.com/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.roblox.com/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.roblox.com/game/updateprerollcount';
Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://www.roblox.com/login/default.aspx';
Roblox.Endpoints.Urls['/my/avatar.aspx'] = 'https://www.roblox.com/my/avatar.aspx';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.roblox.com/my/money.aspx';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://www.roblox.com/chat/chat';
Roblox.Endpoints.Urls['/presence/users'] = 'https://www.roblox.com/presence/users';
Roblox.Endpoints.Urls['/presence/user'] = 'https://www.roblox.com/presence/user';
Roblox.Endpoints.Urls['/friends/list'] = 'https://www.roblox.com/friends/list';
Roblox.Endpoints.Urls['/navigation/getCount'] = 'https://www.roblox.com/navigation/getCount';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://www.roblox.com/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.roblox.com/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.roblox.com/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.roblox.com/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.roblox.com/catalog/lists.aspx';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://assetgame.roblox.com/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://assetgame.roblox.com/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://assetgame.roblox.com/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://assetgame.roblox.com/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'https://assetgame.roblox.com/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://www.roblox.com/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://www.roblox.com/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://www.roblox.com/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://www.roblox.com/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://www.roblox.com/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://www.roblox.com/bust-thumbnail/json';
Roblox.Endpoints.Urls['/group-thumbnails'] = 'https://www.roblox.com/group-thumbnails';
Roblox.Endpoints.Urls['/groups/getprimarygroupinfo.ashx'] = 'https://www.roblox.com/groups/getprimarygroupinfo.ashx';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://www.roblox.com/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://www.roblox.com/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://www.roblox.com/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://www.roblox.com/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://www.roblox.com/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://www.roblox.com/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://www.roblox.com/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://www.roblox.com/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://www.roblox.com/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://www.roblox.com/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://www.roblox.com/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://www.roblox.com/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://www.roblox.com/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://www.roblox.com/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'https://www.roblox.com/thumbnail/place-thumbnails-partial';
Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://www.roblox.com/thumbnail_holder/g';
Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://www.roblox.com/users/{id}/profile';
Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'https://www.roblox.com/service-workers/push-notifications';
Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
</script>
<script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/authentication/is-logged-in'] = 'https://www.roblox.com/authentication/is-logged-in';
</script>
</head>
<body id="rbx-body"
    class=""
    data-performance-relative-value="0.005"
    data-internal-page-name="Avatar"
    data-send-event-percentage="0.01">
    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm" data-as-http-regex=""></div>
<div id="image-retry-data"
     data-image-retry-max-times="10"
     data-image-retry-timer="1500">
</div>
<div id="http-retry-data"
     data-http-retry-max-timeout="0"
     data-http-retry-base-timeout="0">
</div>
    <script type="text/javascript">Roblox.XsrfToken.setToken('hpmvamnz4XRc');</script>

    <script type="text/javascript">
        if (top.location != self.location) {
            top.location = self.location.href;
        }
    </script>

<style type="text/css">
    </style>
<form name="aspnetForm" method="post" action="/my/avatar.aspx" id="aspnetForm" class="nav-container no-gutter-ads">

<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>

<script src="https://ajax.aspnetcdn.com/ajax/4.5.1/1/WebForms.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
window.WebForm_PostBackOptions||document.write('<script type="text/javascript" src="/WebResource.axd?d=pynGkmcFUV13He1Qd6_TZH6GgOgBQtqMPCPjRUnhj_pzNesAXKuAdu2pj-Sq-3JDJIgwEw2&amp;t=635792847671809273"><\/script>');//]]>
</script>



<script src="https://ajax.aspnetcdn.com/ajax/4.5.1/1/MicrosoftAjax.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
(window.Sys && Sys._Application && Sys.Observer)||document.write('<script type="text/javascript" src="/ScriptResource.axd?d=NJmAwtEo3Ipnlaxl6CMhvumliVar4i2j2lMD3IoEyWJLzR5nHuzAduQUc0aL2Mlk6x33pKXl4t8wV-HcuHw6oBnS1lwzKesKcNRQDsG9ufrF4--3-_YdpMr_CHZuNtX0ejV8Lq6JG6Taji5KieUXCTacPbQ1&t=72e85ccd"><\/script>');//]]>
</script>

<script src="https://ajax.aspnetcdn.com/ajax/4.5.1/1/MicrosoftAjaxWebForms.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
(window.Sys && Sys.WebForms)||document.write('<script type="text/javascript" src="/ScriptResource.axd?d=dwY9oWetJoJoVpgL6Zq8OC_Qyj6iPZ9-IhfgU1PKd92NqwesSi5IgR2kHUAQCLPPKv5dmGb59sQmqQu3G6_D3NKJrjUgXZeod0TXb9neDij-vtT2tW5WrVuyLXf9BqECFbVGd3-sTKQ_7e03iLz9XRbz2Yc1&t=72e85ccd"><\/script>');//]]>
</script>

<script src="/ScriptResource.axd?d=08_n9lTyeRbmPlKTmMDlqlcJslhc0m9rWDxp_4auRJ6QYo93QLicd31jQvenxBqq3toEZuyhgTV5IDqlr9cStQWKKW8_aMLobPZdTnTJSFJo3Olz9THcncCZTRPN3DIj77BLyxij6gsr9bRf6Rd-ZZBjeVqaYT6wlhDkefCWqyrKudJTRke-Rs5kLqFxy6bp2AwKRFAIG8rr7YDNTlbSyVFd8l41" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=fSWNswqNUC5RkUBTfQmfzk_IzT8z0X1-ZXnjpYVgZuJnS5llRz7w7MOdqnu4lQwpfCCvsBhhqvU-GIMlb0QaZ6ow0tCQULahz6WB6uFsrHkP5c6J0&amp;t=ffffffffd0cd50c1" type="text/javascript"></script>
<script src="../Thumbs/Asset.asmx/js" type="text/javascript"></script>
<script src="../Thumbs/Avatar.asmx/js" type="text/javascript"></script>
<div>

<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="1ECBBB27" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="yNH46ghd5KRa4RJpTWyuhAQnZtMfnMSWOJdfyjpJuF4O89Ba0SOBxHnK5XYFxiR9vR+9ToQhG+UOZ8OqiCDX8hGt00ED3cJQblwulX6MviSNbweQ/t7UfXcHasyPiy36Ec0o9sUfo1v4iVbKWwK25lFfODx8Jou/4rWwsGg56k4Dm1hrh63URFEA0TynAihfwZm8iRgrgG6QhkWrMCGL/UjNJgNg+aTPqOFNjBvUFyidComjeXOjgNG7d4HgQVBJ7ImG63dWL3htFLu/PfNDYjuszxo2UmYCZxNrpowBpgAPRD4K/Dmj/wUEbcDfSmY0MRzuOqMhP0imK3kVVL8q63RYZd4uB+6OMTAr2PPI9DzI/paOvimUiPSVLIMJjSuIh9VMTyftyVEpgoPdFSgfeYUlhIGcdmLJyMp0WIvjm/qtlkJDcL/KR7UMBKQoa2HcWwZyVxu5nWxguSfjI87RLEWYtGfnGFGADskaiLmW/4nr4GdBLOWLuX4S3yhK7NkdXOFR5RCwY8so5eIToAuus0zGv7EqwY28o+hf4/SY1Gqo51EhI/G0jH/vCnnvTJm311G6COOQALJt57braffFIpyQvM3zKQcZDuyrwgjmsFlT60SZfuXZbg46dsVGsScKtreUsvvEHEUt2bR6VWSIX13+jsrVKM14wWjkxMn5k5ZQWij1bZFbjtC3LkfqoZo8l/Z50MTBWHKfaG6NmckD3Qv800TU92PJ9Bj3UMVI/VEwWOs6XVUVozPR2yjTLW5j9U18+uP57DZuzfcYKLuxnzMJpip+eZFWdvHZixe4LDLcHQcm" />
</div>
    <div id="fb-root">
    </div>
    <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ctl00$ScriptManager', 'aspnetForm', ['tctl00$ctl00$cphRoblox$cphMyRobloxContent$CustomizeCharacterUpdatePanelAvatar','','tctl00$ctl00$cphRoblox$cphMyRobloxContent$SetPlayerAvatarType','','tctl00$ctl00$cphRoblox$cphMyRobloxContent$UpdatePanelBodyColors','','tctl00$ctl00$cphRoblox$cphMyRobloxContent$UpdatePanelWardrobe','','tctl00$ctl00$cphRoblox$cphMyRobloxContent$UpdatePanelAccoutrements',''], [], [], 90, 'ctl00$ctl00');
//]]>
</script>
<style>
    .icon-logo-r{background-image:url(../content/images/logo_X.svg);background-repeat:no-repeat;background-size:auto auto;width:30px;height:30px;display:inline-block;vertical-align:middle;background-size:30px 30px}
    .icon-logo{background-image:url(../content/images/xscape_logo.svg);background-repeat:no-repeat;background-size:auto auto;width:118px;height:30px;display:inline-block;vertical-align:middle;background-size:118px 30px}
</style>
<?php
$get->nav();
?>


<script type="text/javascript">
    var Roblox = Roblox || {};
    (function() {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>

<div id="navContent" class="nav-content"><div class="nav-content-inner">
    <div id="MasterContainer" >


<script type="text/javascript">
    $(function(){
        function trackReturns() {
            function dayDiff(d1, d2) {
                return Math.floor((d1-d2)/86400000);
            }
            if (!localStorage) {
                return false;
            }

            var cookieName = 'RBXReturn';
            var cookieOptions = {expires:9001};
            var cookieStr = localStorage.getItem(cookieName) || "";
            var cookie = {};

            try {
                cookie = JSON.parse(cookieStr);
            } catch (ex) {
                // busted cookie string from old previous version of the code
            }

            try {
                if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
                    localStorage.setItem(cookieName, JSON.stringify({ ts: new Date().toDateString() }));
                    return false;
                }
            } catch (ex) {
                return false;
            }

            var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
            if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_odr', {});
                cookie.odr = 1;
            }
            if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
                cookie.sdr = 1;
            }
            try {
                localStorage.setItem(cookieName, JSON.stringify(cookie));
            } catch (ex) {
                return false;
            }
        }

        GoogleListener.init();



        RobloxEventManager.initialize(true);
        RobloxEventManager.triggerEvent('rbx_evt_pageview');
        trackReturns();



        RobloxEventManager._idleInterval = 450000;
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
        RobloxEventManager.startMonitor();


    });

</script>



        <script type="text/javascript">Roblox.FixedUI.gutterAdsEnabled=false;</script>



        <div id="Container">


        </div>



        <noscript><div class="alert-info"><h5>Please enable Javascript to use all the features on this site.</h5></div></noscript>
        <div id="BodyWrapper">

            <div id="RepositionBody">
                <div id="Body" class="body-width">




    <script type="text/javascript">
        Roblox.Thumbs.Image.prototype._doShowSpinner = Roblox.Thumbs.Image.prototype._showSpinner;
        Roblox.Thumbs.Image.prototype._showSpinner = function () {
            if (typeof (this._userID) !== "undefined") {
                this._spinnerUrl = "/images/Spinners/ajax_loader_blue_300.gif";
            }

            this._doShowSpinner();

            if (typeof (this._userID) !== "undefined") {
                this._spinner.style.height = "300px";
                this._spinner.style.width = "300px";
                this._spinner.style.padding = "26px";
                this._spinner.style.backgroundColor = "#fff";
            }
        };
        function changedAvatarType() {
            $(".playerAvatarType").removeClass("selected");
            $(".playerAvatarType input:checked").parent().addClass('selected');
        }
        $(document).on('click', '.playerAvatarType', changedAvatarType);
    </script>
    <script type="text/javascript">

        function pageLoad() {
            $(".tooltip-right").tipsy({ 'gravity': 'w' });
        }
    </script>
    <style type="text/css">
        #Body /*Needs to be on the Page to override MasterPage #Body */ {
            padding: 10px;
        }

        .SetPlayerAvatarTypeRadioButtons {
            display: inline-block;
            cursor: pointer;
            margin: 5px 0 0 0;
        }

        .playerAvatarType {
            font-size: 22px;
            cursor: pointer;
            -moz-user-select: none; /* Firefox */
            -webkit-user-select: none; /* Chrome, Safari, and Opera */
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
            display: inline-block;
        }

            .playerAvatarType label {
                cursor: pointer;
                padding: 0 6px 0 0;
            }

            .playerAvatarType input {
                cursor: pointer;
                margin-right: 2px;
                margin-left: 4px;
            }

            .playerAvatarType:hover {
                background-color: #efefef;
            }

            .playerAvatarType.selected {
                background-color: #dedede;
                -webkit-transition: background-color 2s ease-out;
                -moz-transition: background-color 2s ease-out;
                -o-transition: background-color 2s ease-out;
                transition: background-color 2s ease-out;
            }

        .AvatarPickerRadioButtons {
            margin-left: 70px;
            margin-top: 26px;
        }
    </style>
    <div class="MyRobloxContainer">



        <h1>Avatar Customizer</h1>
        <div class="Column1f left-nav-menu">
            <div style="height: 533px; margin-top: 25px;">
                <div>

          <div id="UserAvatar" class="thumbnail-holder" data-reset-enabled-every-page data-3d-thumbs-enabled
     data-url="/thumbnail/user-avatar?userId=155003624&amp;thumbnailFormatId=124&amp;width=352&amp;height=352" style="width:352px; height:352px;">
    <span class="thumbnail-span" data-3d-url="/avatar-thumbnail-3d/json?userId=155003624"  data-js-files='https://js.rbxcdn.com/10f04d94300b958c884090bd8776e087.js.gzip' ><img alt='<?=$usr['username']?>' class='' src='../content/images/character.png' /></span>
    <span class="enable-three-dee btn-control btn-control-small"></span>
</div>

</div>
                <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_CustomizeCharacterUpdatePanelAvatar">

                        <div class="ReDrawAvatar">
                            <span id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_lblInvalidateThumbnails">Something wrong with your avatar?</span><br />
                            <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_cmdInvalidateThumbnails" href="javascript:__doPostBack(&#39;ctl00$ctl00$cphRoblox$cphMyRobloxContent$cmdInvalidateThumbnails&#39;,&#39;&#39;)">Click here to re-draw it!</a>
                            <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_cmdRefreshAllUpdatePanels2" href="javascript:__doPostBack(&#39;ctl00$ctl00$cphRoblox$cphMyRobloxContent$cmdRefreshAllUpdatePanels2&#39;,&#39;&#39;)"></a>
                            <script type="text/javascript">
                                var refreshAllUpdatePanels = function () {
                                    __doPostBack("ctl00$ctl00$cphRoblox$cphMyRobloxContent$cmdRefreshAllUpdatePanels2", "");
                                }
                            </script>
                        </div>

            </div>
                <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_SetPlayerAvatarType">

                        <div class="AvatarPickerRadioButtons">
                            <h2>Avatar Type (BETA)</h2>
                            <div style="cursor: auto; display: inline-block; margin-left: 3px; position: relative; top: -2px; opacity: 1;" class="TipsyImg tooltip-right" title="Choose between the classic avatar movement or R15 - which has elbows and knees!">
                                <img height="13" width="12" style="cursor: auto;"
                                    src="https://images.rbxcdn.com/65cb6e4009a00247ca02800047aafb87.png"
                                    alt="Choose between the classic avatar movement or R15 - which has elbows and knees!" />
                            </div>
                            <div class="SetPlayerAvatarTypeRadioButtons">
                                <span class="playerAvatarType selected"><input id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_PlayerAvatarTypeR6" type="radio" name="ctl00$ctl00$cphRoblox$cphMyRobloxContent$SetPlayerAvatarType" value="PlayerAvatarTypeR6" checked="checked" /><label for="ctl00_ctl00_cphRoblox_cphMyRobloxContent_PlayerAvatarTypeR6">R6</label></span>
                                <span class="playerAvatarType"><input id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_PlayerAvatarTypeR15" type="radio" name="ctl00$ctl00$cphRoblox$cphMyRobloxContent$SetPlayerAvatarType" value="PlayerAvatarTypeR15" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ctl00$cphRoblox$cphMyRobloxContent$PlayerAvatarTypeR15\&#39;,\&#39;\&#39;)&#39;, 0)" /><label for="ctl00_ctl00_cphRoblox_cphMyRobloxContent_PlayerAvatarTypeR15">R15</label></span>
                            </div>
                        </div>
                        <div class="R15warning" style="color:red;margin-left: 70px; margin-top: 9px; width: 225px;">R15 is not enabled in Xscape and is just for show.</div>

             </div>


            </div>
            <h2 style="margin-top: 20px; margin-left: 70px;">
                <span>Colors</span>
            </h2>
            <div>
                <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooser" class="Mannequin">
                    <p>
                        Click a body part to change its color:
                    </p>
                    <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_UpdatePanelBodyColors">

                            <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserFrame" class="ColorChooserFrame" style="height:240px;width:194px;text-align:center;">

                                <div style="position: relative; margin: 11px 4px; height: 1%;">
                                    <div style="position: absolute; left: 72px; top: 0px; cursor: pointer" onclick="HeadOpen()">
                                        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_HeadSelector" class="ColorChooserRegion" style="background-color:<?=$head?>;height:44px;width:44px;">


		</div>
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 52px; cursor: pointer" onclick="RightArmOpen()">
                                        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_RightArmSelector" class="ColorChooserRegion" style="background-color:<?=$rightarm?>;height:88px;width:40px;">


		</div>
                                    </div>
                                    <div style="position: absolute; left: 48px; top: 52px; cursor: pointer" onclick="TorsoOpen()">
                                        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_TorsoSelector" class="ColorChooserRegion" style="background-color:<?=$torso?>;height:88px;width:88px;">


		</div>
                                    </div>
                                    <div style="position: absolute; left: 144px; top: 52px; cursor: pointer" onclick="LeftArmOpen()">
                                        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_LeftArmSelector" class="ColorChooserRegion" style="background-color:<?=$leftarm?>;height:88px;width:40px;">


		</div>
                                    </div>
                                    <div style="position: absolute; left: 48px; top: 146px; cursor: pointer" onclick="RightLegOpen()">
                                        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_RightLegSelector" class="ColorChooserRegion" style="background-color:<?=$rightleg?>;height:88px;width:40px;">


		</div>
                                    </div>
                                    <div style="position: absolute; left: 96px; top: 146px; cursor: pointer" onclick="LeftLegOpen()">
                                        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_LeftLegSelector" class="ColorChooserRegion" style="background-color:<?=$leftleg?>;height:88px;width:40px;">


		</div>
                                    </div>
                                </div>

	</div>

                            <div id="PopupRightLeg" class="modalPopup unifiedModal ColorPickerModal simplemodal-data" style="height:15.5rem;">
                                <div style="padding-top: 2px;">Choose a Right Leg Color</div>
                                <div class="simplemodal-close"><a class="ImageButton closeBtnCircle_20h"></a></div>
                                <div class="ColorPickerContainer" style="height:13rem;text-align: left;background-color: White;font-weight: bold;font-size: 15px;margin: 0 5px 5px 5px;letter-spacing: normal;">
                                    <table id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors" cellspacing="0" border="0" style="border-width:0px;border-collapse:collapse;">
		<tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl00_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=1'" style="display:inline-block;background-color:<?=$NUMBER1?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl01_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=2'" style="display:inline-block;background-color:<?=$NUMBER2?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl02_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=3'" style="display:inline-block;background-color:<?=$NUMBER3?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl03_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=4'" style="display:inline-block;background-color:<?=$NUMBER4?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl04_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=5'" style="display:inline-block;background-color:<?=$NUMBER5?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl05_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=6'" style="display:inline-block;background-color:<?=$NUMBER6?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl06_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=7'" style="display:inline-block;background-color:<?=$NUMBER7?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl07_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=8'" style="display:inline-block;background-color:<?=$NUMBER8?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl008_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=9'" style="display:inline-block;background-color:<?=$NUMBER9?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl08_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=10'" style="display:inline-block;background-color:<?=$NUMBER10?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl09_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=11'" style="display:inline-block;background-color:<?=$NUMBER11?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl10_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=12'" style="display:inline-block;background-color:<?=$NUMBER12?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl11_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=13'" style="display:inline-block;background-color:<?=$NUMBER13?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl12_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=14'" style="display:inline-block;background-color:<?=$NUMBER14?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl13_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=15'" style="display:inline-block;background-color:<?=$NUMBER15?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl14_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=16'" style="display:inline-block;background-color:<?=$NUMBER16?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl15_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=17'" style="display:inline-block;background-color:<?=$NUMBER17?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl16_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=18'" style="display:inline-block;background-color:<?=$NUMBER18?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl17_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=19'" style="display:inline-block;background-color:<?=$NUMBER19?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl18_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=20'" style="display:inline-block;background-color:<?=$NUMBER20?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl19_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=21'" style="display:inline-block;background-color:<?=$NUMBER21?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl20_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=22'" style="display:inline-block;background-color:<?=$NUMBER22?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl21_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=23'" style="display:inline-block;background-color:<?=$NUMBER23?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl22_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=24'" style="display:inline-block;background-color:<?=$NUMBER24?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl23_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=25'" style="display:inline-block;background-color:<?=$NUMBER25?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl24_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=26'" style="display:inline-block;background-color:<?=$NUMBER26?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl25_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=27'" style="display:inline-block;background-color:<?=$NUMBER27?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl26_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=28'" style="display:inline-block;background-color:<?=$NUMBER28?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl27_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=29'" style="display:inline-block;background-color:<?=$NUMBER29?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl28_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=30'" style="display:inline-block;background-color:<?=$NUMBER30?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl29_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=31'" style="display:inline-block;background-color:<?=$NUMBER31?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightLeg_DataListColors_ctl30_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightLeg?color=32'" style="display:inline-block;background-color:<?=$NUMBER32?>;height:40px;width:40px;">

			</div>
                            </td>
		</tr>
	</table>
                                </div>
                            </div>
                            <div id="PopupLeftLeg" class="modalPopup unifiedModal ColorPickerModal simplemodal-data" style="height:15.5rem;">
                                <div style="padding-top: 2px;">Choose a Left Leg Color</div>
                                <div class="simplemodal-close"><a class="ImageButton closeBtnCircle_20h"></a></div>
                                <div class="ColorPickerContainer" style="height:13rem;text-align: left;background-color: White;font-weight: bold;font-size: 15px;margin: 0 5px 5px 5px;letter-spacing: normal;">
                                    <table id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors" cellspacing="0" border="0" style="border-width:0px;border-collapse:collapse;">
                                    <tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl00_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=1'" style="display:inline-block;background-color:<?=$NUMBER1?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl01_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=2'" style="display:inline-block;background-color:<?=$NUMBER2?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl02_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=3'" style="display:inline-block;background-color:<?=$NUMBER3?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl03_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=4'" style="display:inline-block;background-color:<?=$NUMBER4?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl02_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=5'" style="display:inline-block;background-color:<?=$NUMBER5?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl04_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=6'" style="display:inline-block;background-color:<?=$NUMBER6?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl05_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=7'" style="display:inline-block;background-color:<?=$NUMBER7?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl06_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=8'" style="display:inline-block;background-color:<?=$NUMBER8?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl07_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=9'" style="display:inline-block;background-color:<?=$NUMBER9?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl08_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=10'" style="display:inline-block;background-color:<?=$NUMBER10?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl09_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=11'" style="display:inline-block;background-color:<?=$NUMBER11?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl10_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=12'" style="display:inline-block;background-color:<?=$NUMBER12?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl11_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=13'" style="display:inline-block;background-color:<?=$NUMBER13?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl12_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=14'" style="display:inline-block;background-color:<?=$NUMBER14?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl13_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=15'" style="display:inline-block;background-color:<?=$NUMBER15?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl14_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=16'" style="display:inline-block;background-color:<?=$NUMBER16?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl15_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=17'" style="display:inline-block;background-color:<?=$NUMBER17?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl16_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=18'" style="display:inline-block;background-color:<?=$NUMBER18?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl17_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=19'" style="display:inline-block;background-color:<?=$NUMBER19?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl18_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=20'" style="display:inline-block;background-color:<?=$NUMBER20?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl19_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=21'" style="display:inline-block;background-color:<?=$NUMBER21?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl20_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=22'" style="display:inline-block;background-color:<?=$NUMBER22?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl21_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=23'" style="display:inline-block;background-color:<?=$NUMBER23?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl22_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=24'" style="display:inline-block;background-color:<?=$NUMBER24?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl23_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=25'" style="display:inline-block;background-color:<?=$NUMBER25?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl24_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=26'" style="display:inline-block;background-color:<?=$NUMBER26?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl25_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=27'" style="display:inline-block;background-color:<?=$NUMBER27?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl26_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=28'" style="display:inline-block;background-color:<?=$NUMBER28?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl27_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=29'" style="display:inline-block;background-color:<?=$NUMBER29?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl28_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=30'" style="display:inline-block;background-color:<?=$NUMBER30?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl29_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=31'" style="display:inline-block;background-color:<?=$NUMBER31?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftLeg_DataListColors_ctl30_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftLeg?color=32'" style="display:inline-block;background-color:<?=$NUMBER32?>;height:40px;width:40px;">

			</div>
                            </td>
		</tr>
	</table>
                                </div>
                            </div>
                            <div id="PopupRightArm" class="modalPopup unifiedModal ColorPickerModal simplemodal-data" style="height:15.5rem;">
                                <div style="padding-top: 2px;">Choose a Right Arm Color</div>
                                <div class="simplemodal-close"><a class="ImageButton closeBtnCircle_20h"></a></div>
                                <div class="ColorPickerContainer" style="height:13rem;text-align: left;background-color: White;font-weight: bold;font-size: 15px;margin: 0 5px 5px 5px;letter-spacing: normal;">
                                    <table id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors" cellspacing="0" border="0" style="border-width:0px;border-collapse:collapse;">
                                    <tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl00_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=1'" style="display:inline-block;background-color:<?=$NUMBER1?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl01_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=2'" style="display:inline-block;background-color:<?=$NUMBER2?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl02_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=3'" style="display:inline-block;background-color:<?=$NUMBER3?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl03_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=4'" style="display:inline-block;background-color:<?=$NUMBER4?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl03_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=5'" style="display:inline-block;background-color:<?=$NUMBER5?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl04_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=6'" style="display:inline-block;background-color:<?=$NUMBER6?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl05_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=7'" style="display:inline-block;background-color:<?=$NUMBER7?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl06_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=8'" style="display:inline-block;background-color:<?=$NUMBER8?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl07_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=9'" style="display:inline-block;background-color:<?=$NUMBER9?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl08_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=10'" style="display:inline-block;background-color:<?=$NUMBER10?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl09_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=11'" style="display:inline-block;background-color:<?=$NUMBER11?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl10_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=12'" style="display:inline-block;background-color:<?=$NUMBER12?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl11_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=13'" style="display:inline-block;background-color:<?=$NUMBER13?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl12_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=14'" style="display:inline-block;background-color:<?=$NUMBER14?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl13_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=15'" style="display:inline-block;background-color:<?=$NUMBER15?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl14_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=16'" style="display:inline-block;background-color:<?=$NUMBER16?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl15_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=17'" style="display:inline-block;background-color:<?=$NUMBER17?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl16_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=18'" style="display:inline-block;background-color:<?=$NUMBER18?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl17_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=19'" style="display:inline-block;background-color:<?=$NUMBER19?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl18_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=20'" style="display:inline-block;background-color:<?=$NUMBER20?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl19_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=21'" style="display:inline-block;background-color:<?=$NUMBER21?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl20_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=22'" style="display:inline-block;background-color:<?=$NUMBER22?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl21_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=23'" style="display:inline-block;background-color:<?=$NUMBER23?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl22_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=24'" style="display:inline-block;background-color:<?=$NUMBER24?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl23_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=25'" style="display:inline-block;background-color:<?=$NUMBER25?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl24_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=26'" style="display:inline-block;background-color:<?=$NUMBER26?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl25_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=27'" style="display:inline-block;background-color:<?=$NUMBER27?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl26_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=28'" style="display:inline-block;background-color:<?=$NUMBER28?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl27_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=29'" style="display:inline-block;background-color:<?=$NUMBER29?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl28_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=30'" style="display:inline-block;background-color:<?=$NUMBER30?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl29_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=31'" style="display:inline-block;background-color:<?=$NUMBER31?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserRightArm_DataListColors_ctl30_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeRightArm?color=32'" style="display:inline-block;background-color:<?=$NUMBER32?>;height:40px;width:40px;">

			</div>
                            </td>
		</tr>
	</table>
                                </div>
                            </div>
                            <div id="PopupLeftArm" class="modalPopup unifiedModal ColorPickerModal simplemodal-data" style="height:15.5rem;">
                                <div style="padding-top: 2px;">Choose a Left Arm Color</div>
                                <div class="simplemodal-close"><a class="ImageButton closeBtnCircle_20h"></a></div>
                                <div class="ColorPickerContainer" style="height:13rem;text-align: left;background-color: White;font-weight: bold;font-size: 15px;margin: 0 5px 5px 5px;letter-spacing: normal;">
                                    <table id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors" cellspacing="0" border="0" style="border-width:0px;border-collapse:collapse;">
                                    <tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl00_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=1'" style="display:inline-block;background-color:<?=$NUMBER1?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl01_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=2'" style="display:inline-block;background-color:<?=$NUMBER2?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl02_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=3'" style="display:inline-block;background-color:<?=$NUMBER3?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl03_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=4'" style="display:inline-block;background-color:<?=$NUMBER4?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl03_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=5'" style="display:inline-block;background-color:<?=$NUMBER5?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl04_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=6'" style="display:inline-block;background-color:<?=$NUMBER6?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl05_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=7'" style="display:inline-block;background-color:<?=$NUMBER7?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl06_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=8'" style="display:inline-block;background-color:<?=$NUMBER8?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl07_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=9'" style="display:inline-block;background-color:<?=$NUMBER9?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl08_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=10'" style="display:inline-block;background-color:<?=$NUMBER10?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl09_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=11'" style="display:inline-block;background-color:<?=$NUMBER11?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl10_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=12'" style="display:inline-block;background-color:<?=$NUMBER12?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl11_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=13'" style="display:inline-block;background-color:<?=$NUMBER13?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl12_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=14'" style="display:inline-block;background-color:<?=$NUMBER14?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl13_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=15'" style="display:inline-block;background-color:<?=$NUMBER15?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl14_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=16'" style="display:inline-block;background-color:<?=$NUMBER16?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl15_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=17'" style="display:inline-block;background-color:<?=$NUMBER17?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl16_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=18'" style="display:inline-block;background-color:<?=$NUMBER18?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl17_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=19'" style="display:inline-block;background-color:<?=$NUMBER19?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl18_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=20'" style="display:inline-block;background-color:<?=$NUMBER20?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl19_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=21'" style="display:inline-block;background-color:<?=$NUMBER21?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl20_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=22'" style="display:inline-block;background-color:<?=$NUMBER22?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl21_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=23'" style="display:inline-block;background-color:<?=$NUMBER23?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl22_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=24'" style="display:inline-block;background-color:<?=$NUMBER24?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl23_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=25'" style="display:inline-block;background-color:<?=$NUMBER25?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl24_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=26'" style="display:inline-block;background-color:<?=$NUMBER26?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl25_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=27'" style="display:inline-block;background-color:<?=$NUMBER27?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl26_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=28'" style="display:inline-block;background-color:<?=$NUMBER28?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl27_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=29'" style="display:inline-block;background-color:<?=$NUMBER29?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl28_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=30'" style="display:inline-block;background-color:<?=$NUMBER30?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl29_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=31'" style="display:inline-block;background-color:<?=$NUMBER31?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserLeftArm_DataListColors_ctl30_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeLeftArm?color=32'" style="display:inline-block;background-color:<?=$NUMBER32?>;height:40px;width:40px;">

			</div>
                            </td>
		</tr>
	</table>
                                </div>
                            </div>
                            <div id="PopupHead" class="modalPopup unifiedModal ColorPickerModal simplemodal-data" style="height:15.5rem;">
                                <div style="padding-top: 2px;">Choose a Head Color</div>
                                <div class="simplemodal-close"><a class="ImageButton closeBtnCircle_20h"></a></div>
                                <div class="ColorPickerContainer" style="height:13rem;text-align: left;background-color: White;font-weight: bold;font-size: 15px;margin: 0 5px 5px 5px;letter-spacing: normal;">
                                    <table id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors" cellspacing="0" border="0" style="border-width:0px;border-collapse:collapse;">
                                    <tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl00_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=1'" style="display:inline-block;background-color:<?=$NUMBER1?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl01_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=2'" style="display:inline-block;background-color:<?=$NUMBER2?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl02_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=3'" style="display:inline-block;background-color:<?=$NUMBER3?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl03_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=4'" style="display:inline-block;background-color:<?=$NUMBER4?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl03_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=5'" style="display:inline-block;background-color:<?=$NUMBER5?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl04_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=6'" style="display:inline-block;background-color:<?=$NUMBER6?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl05_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=7'" style="display:inline-block;background-color:<?=$NUMBER7?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl06_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=8'" style="display:inline-block;background-color:<?=$NUMBER8?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl07_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=9'" style="display:inline-block;background-color:<?=$NUMBER9?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl08_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=10'" style="display:inline-block;background-color:<?=$NUMBER10?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl09_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=11'" style="display:inline-block;background-color:<?=$NUMBER11?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl10_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=12'" style="display:inline-block;background-color:<?=$NUMBER12?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl11_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=13'" style="display:inline-block;background-color:<?=$NUMBER13?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl12_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=14'" style="display:inline-block;background-color:<?=$NUMBER14?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl13_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=15'" style="display:inline-block;background-color:<?=$NUMBER15?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl14_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=16'" style="display:inline-block;background-color:<?=$NUMBER16?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl15_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=17'" style="display:inline-block;background-color:<?=$NUMBER17?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl16_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=18'" style="display:inline-block;background-color:<?=$NUMBER18?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl17_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=19'" style="display:inline-block;background-color:<?=$NUMBER19?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl18_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=20'" style="display:inline-block;background-color:<?=$NUMBER20?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl19_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=21'" style="display:inline-block;background-color:<?=$NUMBER21?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl20_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=22'" style="display:inline-block;background-color:<?=$NUMBER22?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl21_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=23'" style="display:inline-block;background-color:<?=$NUMBER23?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl22_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=24'" style="display:inline-block;background-color:<?=$NUMBER24?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl23_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=25'" style="display:inline-block;background-color:<?=$NUMBER25?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl24_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=26'" style="display:inline-block;background-color:<?=$NUMBER26?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl25_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=27'" style="display:inline-block;background-color:<?=$NUMBER27?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl26_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=28'" style="display:inline-block;background-color:<?=$NUMBER28?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl27_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=29'" style="display:inline-block;background-color:<?=$NUMBER29?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl28_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=30'" style="display:inline-block;background-color:<?=$NUMBER30?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl29_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=31'" style="display:inline-block;background-color:<?=$NUMBER31?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserHead_DataListColors_ctl30_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeHead?color=32'" style="display:inline-block;background-color:<?=$NUMBER32?>;height:40px;width:40px;">

			</div>
                            </td>
		</tr>
	</table>
                                </div>
                            </div>
                            <div id="PopupTorso" class="modalPopup unifiedModal ColorPickerModal simplemodal-data" style="height:15.5rem;">
                                <div style="padding-top: 2px;">Choose a Torso Color</div>
                                <div class="simplemodal-close"><a class="ImageButton closeBtnCircle_20h"></a></div>
                                <div class="ColorPickerContainer" style="height:13rem;text-align: left;background-color: White;font-weight: bold;font-size: 15px;margin: 0 5px 5px 5px;letter-spacing: normal;">
                                    <table id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors" cellspacing="0" border="0" style="border-width:0px;border-collapse:collapse;">
                                    <tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl00_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=1'" style="display:inline-block;background-color:<?=$NUMBER1?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl01_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=2'" style="display:inline-block;background-color:<?=$NUMBER2?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl02_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=3'" style="display:inline-block;background-color:<?=$NUMBER3?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl03_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=4'" style="display:inline-block;background-color:<?=$NUMBER4?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl03_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=5'" style="display:inline-block;background-color:<?=$NUMBER5?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl04_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=6'" style="display:inline-block;background-color:<?=$NUMBER6?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl05_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=7'" style="display:inline-block;background-color:<?=$NUMBER7?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl06_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=8'" style="display:inline-block;background-color:<?=$NUMBER8?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl07_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=9'" style="display:inline-block;background-color:<?=$NUMBER9?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl08_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=10'" style="display:inline-block;background-color:<?=$NUMBER10?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl09_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=11'" style="display:inline-block;background-color:<?=$NUMBER11?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl10_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=12'" style="display:inline-block;background-color:<?=$NUMBER12?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl11_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=13'" style="display:inline-block;background-color:<?=$NUMBER13?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl12_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=14'" style="display:inline-block;background-color:<?=$NUMBER14?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl13_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=15'" style="display:inline-block;background-color:<?=$NUMBER15?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl14_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=16'" style="display:inline-block;background-color:<?=$NUMBER16?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl15_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=17'" style="display:inline-block;background-color:<?=$NUMBER17?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl16_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=18'" style="display:inline-block;background-color:<?=$NUMBER18?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl17_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=19'" style="display:inline-block;background-color:<?=$NUMBER19?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl18_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=20'" style="display:inline-block;background-color:<?=$NUMBER20?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl19_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=21'" style="display:inline-block;background-color:<?=$NUMBER21?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl20_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=22'" style="display:inline-block;background-color:<?=$NUMBER22?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl21_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=23'" style="display:inline-block;background-color:<?=$NUMBER23?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl22_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=24'" style="display:inline-block;background-color:<?=$NUMBER24?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl23_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=25'" style="display:inline-block;background-color:<?=$NUMBER25?>;height:40px;width:40px;">

			</div>
    </td>
		</tr><tr>
			<td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl24_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=26'" style="display:inline-block;background-color:<?=$NUMBER26?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl25_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=27'" style="display:inline-block;background-color:<?=$NUMBER27?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl26_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=28'" style="display:inline-block;background-color:<?=$NUMBER28?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl27_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=29'" style="display:inline-block;background-color:<?=$NUMBER29?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl28_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=30'" style="display:inline-block;background-color:<?=$NUMBER30?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl29_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=31'" style="display:inline-block;background-color:<?=$NUMBER31?>;height:40px;width:40px;">

			</div>
    </td><td>
        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_ColorChooserTorso_DataListColors_ctl30_LinkButton1" class="ColorPickerItem" onclick="window.location.href='/api/ChangeTorso?color=32'" style="display:inline-block;background-color:<?=$NUMBER32?>;height:40px;width:40px;">

			</div>
                            </td>
		</tr>
	</table>
                                </div>
                            </div>
                            <script type="text/javascript">
                                var colorPickerModalProperties = { overlayClose: true, escClose: true, opacity: 0, overlayCss: { backgroundColor: "#000" } };

                                RightLegOpen = function () {
                                    $("#PopupRightLeg").modal(colorPickerModalProperties);
                                };

                                LeftLegOpen = function () {
                                    $("#PopupLeftLeg").modal(colorPickerModalProperties);
                                };

                                RightArmOpen = function () {
                                    $("#PopupRightArm").modal(colorPickerModalProperties);
                                };

                                LeftArmOpen = function () {
                                    $("#PopupLeftArm").modal(colorPickerModalProperties);
                                };

                                HeadOpen = function () {
                                    $("#PopupHead").modal(colorPickerModalProperties);
                                };

                                TorsoOpen = function () {
                                    $("#PopupTorso").modal(colorPickerModalProperties);
                                };
                            </script>

</div>
                </div>
            </div>
        </div>

        <div class="Column2f">
            <div>
                <a href="https://www.xsscape.cf/catalog" class="btn btn-more btn-primary-sm">Get More</a>
                <div class="small get-more-text">Explore the catalog to find more clothes!</div>
            </div>

           <div class="tab-container">
                <div class="tab-active" data-id="tab-wardrobe">Wardrobe</div>

                <div data-id="tab-outfits">Outfits</div>

            </div>

           <div>
                <div id="tab-wardrobe" class="tab-active">
                    <div>
                        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_UpdatePanelWardrobe">

                                <div class="CustomizeCharacterContainer">

                                    <div class="AttireCategory" style="text-align: center">
                                                <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AttireCategoryRepeater_ctl01_AttireCategorySelector" class="AttireCategorySelector<?php if($type == "face"){ echo('_Selected'); } ?>" href="?type=face">Faces</a>

                                                <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AttireCategoryRepeater_ctl02_AttireCategorySelector" class="AttireCategorySelector<?php if($type == "hat"){ echo('_Selected'); } ?>" href="?type=hat">Hats</a>

                                                <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AttireCategoryRepeater_ctl03_AttireCategorySelector" class="AttireCategorySelector<?php if($type == "tshirt"){ echo('_Selected'); } ?>" href="?type=tshirt">T-Shirts</a>

                                                <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AttireCategoryRepeater_ctl04_AttireCategorySelector" class="AttireCategorySelector<?php if($type == "shirt"){ echo('_Selected'); } ?>" href="?type=shirt">Shirts</a>

                                                <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AttireCategoryRepeater_ctl05_AttireCategorySelector" class="AttireCategorySelector<?php if($type == "pants"){ echo('_Selected'); } ?>" href="?type=pants">Pants</a>

                                                <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AttireCategoryRepeater_ctl06_AttireCategorySelector" class="AttireCategorySelector<?php if($type == "gear"){ echo('_Selected'); } ?>" href="?type=gear">Gears</a>

                                                <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AttireCategoryRepeater_ctl07_AttireCategorySelector" class="AttireCategorySelector<?php if($type == "package"){ echo('_Selected'); } ?>" href="?type=package">Packages</a>

                                        <br />



                                    </div>

                                  <div class="AttireContent">

                                            <div class="TileGroup">
<?php
    $resultsperpage = 8;

    $result = $db->prepare("SELECT count(*) FROM `owneditems` WHERE user = ? AND type = ?");
    $result->execute([$usr['id'],$type]);
    $itemcount = $result->fetchColumn();

    $numberofpages = ceil($itemcount/$resultsperpage);

    if($page < 1) $page = 1;
    $thispagefirstresult = ($page-1)*$resultsperpage;

    if($type == "hat") $type5 = "Hats";
    if($type == "shirt") $type5 = "Shirts";
    if($type == "tshirts") $type5 = "T-Shirts";
    if($type == "pants") $type5 = "Pants";
    if($type == "gear") $type5 = "Gears";
    if($type == "package") $type5 = "Packages";
    if($type == "face") $type5 = "Faces";

    if($itemcount < 1) {
        echo '<span>No '.$type5.' have been found.</span>';
    }
    $stmt = $db->prepare("SELECT * FROM `owneditems` WHERE user = ? AND type = ? LIMIT ".$thispagefirstresult.",".$resultsperpage);
    $stmt->execute([$usr['id'],$type]);
    while ($row2 = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        $stmt3 = $db->prepare("SELECT * FROM catalog WHERE id = :id");
        $stmt3->execute([':id' => $row2['item']]);
        $item = $stmt3->fetch();

        $itemname = $ep->remove($item['name']);
        $itemid = $ep->remove($item['id']);
        $thumbnail = $item['thumbnail'];

        $itemType = $item['type'];
                    $wear = $db->prepare("SELECT count(*) FROM wear WHERE item = ? AND type = ? AND user = ?");
                    $wear->execute([$itemid, $itemType, $usr['id']]);
                    $wearCount = $wear->fetchColumn();
        ?>
        <div class="Asset">
                                                <div class="AssetThumbnail">
                                                    <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AttireListView_ctrl0_ctl00_AssetThumbnailHyperLink" title="click to wear" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="<?=$thumbnail?>" height="110" width="110" border="0" alt="click to wear" /></a>
                                                    <div style="position: absolute; right: -4px; text-align: center; top: 0;">
                                                        <?php
                                                        if($wearCount < 1){
                                                        ?>
                                                        <input type="submit" onclick="window.location.href='/api/avatar/wear?i=<?=$itemid?>'" value="Wear" name="wear<?=$itemid?>" class="btn-small btn-neutral">
                                                        <?php }else{ ?>
                                                        <input type="submit" onclick="window.location.href='/api/avatar/remove?i=<?=$itemid?>'" value="Remove" name="remove<?=$itemid?>" class="btn-small btn-neutral">
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="AssetDetails">
                                                    <div class="AssetName">
                                                        <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AttireListView_ctrl0_ctl00_AssetNameHyperLink" title="click to view" class="notransalate" href="/Item.aspx?ID=<?=$itemid?>"><?=$itemname?></a>
                                                    </div>
                                                </div>
                                            </div>
                <?php
            }
            ?>
                         </div>

                                            </div>

                                    <?php if($itemcount > 0){ ?>
                                  <div class="FooterPager">
                                      <?php
                                      $prevpage = $page - 1;
                                      $nextpage = $page + 1;
                                      ?>
                                    <span id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AccoutrementsDataPager_Footer">
                                        <a href="?page=1">First</a>
                                        <a <?php if($page == 1){ ?>disabled="disabled"<?php }else{ echo('href="?page='.$prevpage.'&type="'); } ?>>Previous</a>
                                        <span><?=$page?></span>
                                        <a <?php if($page == $numberofpages){ ?>disabled="disabled"<?php }else{ echo('href="?page='.$nextpage.'&type="'); } ?>>Next</a>
                                        <a href="?page=<?=$numberofpages?>">Last</a>
                                    </span>
                                  </div>
                                  <?php } ?>
                                </div>

</div>
                    </div>
                </div>

                <div id="tab-outfits">
                    <div class="validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div><input name="__RequestVerificationToken" type="hidden" value="36b9p_lPN1NgT7VzP2nzMS56sqh7qrsRaR577mG6rnmSGVlAFAkOhtQb17r6AGS6EMa2Jqpt-4a2bZ-fsKzW6TYTrRg1" />
<div id="OutfitsTab" data-isiosapp="false" class="outfits-tab">


    <div class="outfits-banner">
        <div class="outfits-banner-left">
                <h2>Make some outfits!</h2>
                                    <div id="outfits-error" class="outfits-error status-error"></div>
        </div>
        <div class="outfits-banner-right">
            <div id="CreateNewOutfitContainer">
                <a id="CreateNewOutfit" class="text-link ">
                    <span class="btn-control btn-control-large">Create New Outfit</span>
                </a>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    //<sl:translate>
        if (typeof Roblox === "undefined") {
            Roblox = {};
        }
        if (typeof Roblox.Outfits === "undefined") {
            Roblox.Outfits = {};
        }
        Roblox.Outfits.Resources = {
            createTitle: "Create New Outfit",
            createText: "An outfit will be created from your avatar's current appearance.",
            createConfirm: "Create",
            createCancel: "Cancel",
            outfitNameTextBoxLabel: "Name: ",
            deleteTitle: "Delete Outfit",
            deleteText: "Are you sure you want to delete this outfit?",
	        deleteConfirm: "Delete",
            deleteCancel: "Cancel",
	        updateTitle: "Update Outfit",
	        updateText: "Do you want to update this outfit? This will overwrite the outfit with your avatar's current appearance.",
	        updateConfirm: "Update Outfit",
	        updateCancel: "Cancel",
	        renameTitle: "Rename Outfit",
	        renameText: "Choose a new name for your outfit.",
	        renameConfirm: "Rename",
            renameCancel: "Cancel"
            }
    //</sl:translate>
    </script>
    <div class="outfits-container">
    </div>
    <div class="outfits-pager">
    </div>
    <div id="ProcessingView" style="display:none">
	    <div class="ProcessingModalBody">
		    <p class="processing-indicator"><img src='https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif' alt="Processing..." /></p>
		    <p class="processing-text">Processing...</p>
	    </div>
    </div>


</div>
                </div>

            </div>
            <script type="text/javascript">
                function switchTabs(nextTabElem) {
                    var currentTab = $('.tab-container div.tab.active');
                    currentTab.removeClass('active');
                    $('#' + currentTab.data('id')).hide();
                    nextTabElem.addClass('active');
                    $('#' + nextTabElem.data('id')).show();
                }
                $('div.tab').bind('click', function () {
                    switchTabs($(this));
                });
            </script>

            <div class="divider-top" style="margin-top: 10px; padding-left: 20px; position: relative;"></div>
            <h2 style="margin-top: 20px;">
                <span>Currently Wearing</span>

              </h2>
            <div class="CurrentAttireContent">
                <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_UpdatePanelAccoutrements">

                        <div id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AccoutrementsPane" class="CustomizeCharacterContainer">

                                    <div class="AccoutrementContent">

                                    <div class="TileGroup">
<?php
    $resultsperpage = 12;

    $result = $db->prepare("SELECT count(*) FROM `wear` WHERE user = ?");
    $result->execute([$usr['id']]);
    $itemcount = $result->fetchColumn();

    $numberofpages = ceil($itemcount/$resultsperpage);

    if($page2 < 1) $page2 = 1;
    $thispagefirstresult = ($page2-1)*$resultsperpage;

    if($itemcount < 1) {
        echo '<span>You are not wearing anything.</span>';
    }
    $stmt = $db->prepare("SELECT * FROM `wear` WHERE user = ? LIMIT ".$thispagefirstresult.",".$resultsperpage);
    $stmt->execute([$usr['id']]);
    while ($row2 = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        $stmt3 = $db->prepare("SELECT * FROM catalog WHERE id = :id");
        $stmt3->execute([':id' => $row2['item']]);
        $item = $stmt3->fetch();

        $itemname = $ep->remove($item['name']);
        $itemid = $ep->remove($item['id']);
        $thumbnail = $item['thumbnail'];
        $itemType = $item['type'];

                    if($_SERVER["REQUEST_METHOD"] == "POST") {
                        if ($_POST["remove$itemid"]) {
                            $asset = $db->prepare("SELECT count(*) FROM owneditems WHERE type = ? AND item = ? AND user = ?");
                            $asset->execute([$itemType, $itemid, $usr['id']]);
                            $assetCount = $asset->fetchColumn();
                            if ($assetCount > 0) { // Check if user have this item
                                $wear = $db->prepare("SELECT count(*) FROM wear WHERE item = ? AND type = ? AND user = ?");
                                $wear->execute([$itemid, $itemType, $usr['id']]);
                                $wearCount = $wear->fetchColumn();
                                if ($wearCount < 1) { // Check if use not wearing this item
                                    die("<META http-equiv=refresh content=0;URL=/my/avatar?page=$page2&type=$type>");
                                } else {
                                    $delete = $db->prepare("DELETE FROM wear WHERE type = ? AND item = ? AND user = ?");
                                    $delete->execute([$itemType, $itemid, $usr['id']]);
                                    die("<META http-equiv=refresh content=0;URL=/my/avatar?page=$page2&type=$type>");
                                }
                            }else{
                                die("<META http-equiv=refresh content=0;URL=/my/avatar?page=$page2&type=$type>"); // Only bozo can get this
                            }
                        }
                    }
        ?>
        <div class="Asset">
                                                <div class="AssetThumbnail">
                                                    <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AttireListView_ctrl0_ctl00_AssetThumbnailHyperLink" title="click to wear" style="display:inline-block;height:110px;width:110px;cursor:pointer;"><img src="<?=$thumbnail?>" height="110" width="110" border="0" alt="click to wear" /></a>
                                                    <div style="position: absolute; right: -4px; text-align: center; top: 0;">
                                                        <input type="submit" onclick="window.location.href='/api/avatar/remove?i=<?=$itemid?>'" value="Remove" name="remove<?=$itemid?>" class="btn-small btn-neutral">
                                                    </div>
                                                </div>
                                                <div class="AssetDetails">
                                                    <div class="AssetName">
                                                        <a id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AttireListView_ctrl0_ctl00_AssetNameHyperLink" title="click to view" class="notransalate" href="/Item.aspx?ID=<?=$itemid?>"><?=$itemname?></a>
                                                    </div>
                                                </div>
                                            </div>
                <?php
            }
            ?>
                                    </div>
                                    </div>

                                  <?php if($itemcount > 0){ ?>
                                  <div class="FooterPager">
                                      <?php
                                      $prevpage = $page2 - 1;
                                      $nextpage = $page2 + 1;
                                      ?>
                                    <span id="ctl00_ctl00_cphRoblox_cphMyRobloxContent_AccoutrementsDataPager_Footer">
                                        <a href="?page=1">First</a>
                                        <a <?php if($page2 == 1){ ?>disabled="disabled"<?php }else{ echo('href="?page='.$prevpage.'"'); } ?>>Previous</a>
                                        <span><?=$page2?></span>
                                        <a <?php if($page2 = $numberofpages){ ?>disabled="disabled"<?php }else{ echo('href="?page='.$nextpage.'"'); } ?>>Next</a>
                                        <a href="?page=<?=$numberofpages?>">Last</a>
                                    </span>
                                  </div>
                                  <?php } ?>
                        </div>

</div>
            </div>
        </div>

        <br clear="all" />
    </div>




                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
        </div>

        <?php
        require_once '../content/functions.php';
        $get->footer();
        ?>

</div></div>
    </div>


<div id="usernotifications-data-model"
     class="hidden"
     data-notificationsdomain="https://realtime.roblox.com/"
     data-notificationstestinterval="5000"
     data-notificationsmaxconnectiontime="43200000"
     data-userid="155003624">
</div>
        <script type="text/javascript">
            function urchinTracker() { };
            GoogleAnalyticsReplaceUrchinWithGAJS = true;
        </script>


<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

    Roblox.UpsellAdModal.Resources = {
        //<sl:translate>
        title: "Remove Ads Like This",
        body: "Builders Club members do not see external ads like these.",
        accept: "Upgrade Now",
        decline: "No, thanks"
        //</sl:translate>
    };
</script>

<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image"  data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image" />
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer">
            <a href id="roblox-confirm-btn"><span></span></a>
            <a href id="roblox-decline-btn"><span></span></a>
        </div>
        <div class="ConfirmationModalFooter">

        </div>
    </div>
    <script type="text/javascript">
        Roblox = Roblox || {};
        Roblox.Resources = Roblox.Resources || {};

        //<sl:translate>
        Roblox.Resources.GenericConfirmation = {
            yes: "Yes",
            No: "No",
            Confirm: "Confirm",
            Cancel: "Cancel"
        };
        //</sl:translate>
    </script>
</div>



        <script>
            $(function () {
                Roblox.DeveloperConsoleWarning.showWarning();
            });
        </script>


    <script type="text/javascript">
        $(function () {
            Roblox.CookieUpgrader.domain = 'roblox.com';
            Roblox.CookieUpgrader.upgrade("GuestData", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
            Roblox.CookieUpgrader.upgrade("RBXSource", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("rbx_acquisition_time", cookie); } });
            Roblox.CookieUpgrader.upgrade("RBXViralAcquisition", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("time", cookie); } });

                Roblox.CookieUpgrader.upgrade("RBXMarketing", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });


                Roblox.CookieUpgrader.upgrade("RBXSessionTracker", { expires: Roblox.CookieUpgrader.fourHoursFromNow });


                Roblox.CookieUpgrader.upgrade("RBXEventTrackerV2", {expires: Roblox.CookieUpgrader.thirtyYearsFromNow});

        });
    </script>
    <script>
        var _comscore = _comscore || [];
        _comscore.push({ c1: "2", c2: "6035605", c3: "", c4: "", c15: "Over13" });

        (function() {
            var s = document.createElement("script"), el = document.getElementsByTagName("script")[0];
            s.async = true;
            s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
            el.parentNode.insertBefore(s, el);
        })();
    </script>
    <noscript>
        <img src="http://b.scorecardresearch.com/p?c1=2&c2=&c3=&c4=&c5=&c6=&c15=&cv=2.0&cj=1"/>
    </noscript>

    <div ng-modules="templateApp">
        <!-- Template bundle: base -->
<script type="text/javascript">
"use strict"; angular.module("templateApp", []).run(['$templateCache', function($templateCache) {

 }]);
</script>

        <script type="text/javascript" src="https://js.rbxcdn.com/d4ff9c6786b08f67a23da5d1c8a08119.js.gzip"></script>
    </div>

</body>
</html>
