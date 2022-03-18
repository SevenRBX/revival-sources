<?php
error_reporting(0);
require_once 'site.php';
require_once ('content/functions.php');

if(is_numeric($_GET['ID'])){
$query = $db->prepare("SELECT * FROM catalog WHERE id = :id");
$query->execute([':id' => $_GET['ID']]);

$item = $query->fetch();
if(!$item){
die('<META http-equiv=refresh content=0;URL=/home>');
exit;
}else{
$itemName = $ep->remove($item['name']);
$itemDesc = $ep->remove($item['description']);
$itemThumbnail = $item['thumbnail'];
$itemPrice = $item['price'];
$itemCurrency = $item['currency'];
$itemType = $item['type'];
$itemID = $item['id'];

$check = $db->prepare("SELECT count(*) FROM owneditems WHERE user = ? AND item = ? AND type = ?");
$check->execute([$usr['id'],$itemID,$itemType]);
$ownedCount = $check->fetchColumn();

$getSales = $db->prepare("SELECT sales FROM sales WHERE item = ?");
$getSales->execute([$itemID]);
$SalesCount = $getSales->fetch();

if(!$SalesCount){
  $sales = 0;
}else{
  $sales = number_format($SalesCount['sales']);
}

if($item['sale'] == 1){
if($ownedCount < 1){
if($itemPrice !== "-1"){

if($itemCurrency == 2){
if($usr['Tickets'] >= $itemPrice){
if($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["buy"]) {
            $getFinalBux = $usr['Tickets'] - $itemPrice;

            $pay = $db->prepare("UPDATE accounts SET Tickets = ? WHERE id = ?");
            $pay->execute([$getFinalBux, $usr['id']]);

            $addItem = $db->prepare("INSERT INTO owneditems (user,item,type) VALUES (?,?,?)");
            $addItem->execute([$usr['id'], $itemID, $itemType]);

            $check = $db->prepare("SELECT count(*) FROM `sales` WHERE item = ?");
            $check->execute([$itemID]);
            $salescount = $check->fetchColumn();

            if($salescount < 1){
            $stmt = $db->prepare("INSERT INTO `sales`(`item`, `sales`) VALUES (?,?)");
            $stmt->execute([$itemID,'1']);
            }else{
            $stmt = $db->prepare("UPDATE `sales` SET `sales` = sales + 1 WHERE `item` = ?");
            $stmt->execute([$itemID]);
            }
            die('<META http-equiv=refresh content=0;URL=/Item.aspx?ID='.$itemID.'>');
        }
}
}
}else{
if($usr['Robux'] >= $itemPrice){
if($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["buy"]) {
            $getFinalBux = $usr['Robux'] - $itemPrice;

            $pay = $db->prepare("UPDATE accounts SET Robux = ? WHERE id = ?");
            $pay->execute([$getFinalBux, $usr['id']]);

            $addItem = $db->prepare("INSERT INTO owneditems (user,item,type) VALUES (?,?,?)");
            $addItem->execute([$usr['id'], $itemID, $itemType]);

            $check = $db->prepare("SELECT count(*) FROM `sales` WHERE item = ?");
            $check->execute([$itemID]);
            $salescount = $check->fetchColumn();

            if($salescount < 1){
            $stmt = $db->prepare("INSERT INTO `sales`(`item`, `sales`) VALUES (?,?)");
            $stmt->execute([$itemID,'1']);
            }else{
            $stmt = $db->prepare("UPDATE `sales` SET `sales` = sales + 1 WHERE `item` = ?");
            $stmt->execute([$itemID]);
            }
            die('<META http-equiv=refresh content=0;URL=/Item.aspx?ID='.$itemID.'>');
        }
}
}
}

}
}
}
}
}else{
die('<META http-equiv=refresh content=0;URL=/home>');
exit;
}
/*
if(!$logged){
header('Location: ../');
exit;
}
*/
?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml"><!-- MachineID: WEB107 --><head id="ctl00_Head1">
<title>
	<?=$itemName?> - Xscape
</title>

<link rel='stylesheet' href='https://xsscape.cf/content/css/CSS10.css' />

<link rel="stylesheet" href="https://static.rbxcdn.com/css/page___5e30bb819700394de2e8904016a09d8a_m.css/fetch">

<link href="favicon.ico" rel="icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Xscape">
<meta name="description" content="<?=$itemName?> - Xscape: <?=$itemDesc?>">
<meta name="keywords" content="virtual good <?=$itemName?> - Xscape items, Xscape <?=$itemName?> - Xscape">
<meta name="apple-itunes-app" content="app-id=431946152">
<meta name="google-site-verification" content="KjufnQUaDv5nXJogvDMey4G-Kb7ceUVxTdzcMaP9pCY">
    <meta property="og:site_name" content="Xscape">
    <meta property="og:title" content="<?=$itemName?>">
    <meta property="og:type" content="product.item">
    <meta property="og:url" content="http://www.xsscape.cf/Item.aspx?ID=<?=$itemID?>">
    <meta property="og:description" content="<?=$itemDesc?>">
    <meta property="og:image" content="<?=$itemThumbnail?>">
    <meta property="fb:app_id" content="190191627665278">
        <meta property="og:image:width" content="320">
        <meta property="og:image:height" content="320">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Xscape">
    <meta name="twitter:title">
    <meta name="twitter:description" content="<?=$itemDesc?>">
    <meta name="twitter:creator" content="@Xscape">
    <meta name="twitter:image1" content="<?=$itemThumbnail?>">
        <meta name="twitter:label1" content="Item Type">
        <meta name="twitter:data1" content="Xscape Hat">
        <meta name="twitter:label2" content="Creator">
        <meta name="twitter:data2" content="Xscape">
    <meta name="twitter:app:country" content="US">
    <meta name="twitter:app:name:iphone" content="Xscape Mobile">
    <meta name="twitter:app:id:iphone" content="431946152">
    <meta name="twitter:app:url:iphone">
    <meta name="twitter:app:name:ipad" content="Xscape Mobile">
    <meta name="twitter:app:id:ipad" content="431946152">
    <meta name="twitter:app:url:ipad">
    <meta name="twitter:app:name:googleplay" content="Xscape">
    <meta name="twitter:app:id:googleplay" content="com.Xscape.client">
    <meta name="twitter:app:url:googleplay">
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>

<?php
if(!$logged){
  die('Login first!');
}
 ?>
    <script type="text/javascript">

        var _gaq = _gaq || [];

            window.GoogleAnalyticsDisableRoblox2 = true;
        _gaq.push(['b._setAccount', 'UA-486632-1']);
        _gaq.push(['b._setCampSourceKey', 'rbx_source']);
        _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
        _gaq.push(['b._setCampContentKey', 'rbx_campaign']);

            _gaq.push(['b._setDomainName', 'roblox.com']);

            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
                _gaq.push(['b._setPageGroup', 1, 'ItemDetail']);

                    var eventsArr = ['b._setCustomVar', 2, 'FirstTimeVisitor', 'true', 3];
                    _gaq.push(eventsArr);
                    $(function() {
                        if(GoogleAnalyticsEvents) {
                            GoogleAnalyticsEvents.Log(eventsArr);
                        }
                    });

    _gaq.push(['b._trackPageview']);


        _gaq.push(['c._setAccount', 'UA-26810151-2']);
            _gaq.push(['c._setDomainName', 'roblox.com']);
                    _gaq.push(['c._setPageGroup', 1, 'ItemDetail']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
<script type="text/javascript" src="https://js.rbxcdn.com/c0235dea71f3649ae8ded711913b8fbe.js"></script>
        <script type="text/javascript">
            if (Roblox && Roblox.EventStream) {
                Roblox.EventStream.Init("https://ecsv2.roblox.com/www/e.png",
                    "https://ecsv2.roblox.com/www/e.png",
                    "https://ecsv2.roblox.com/pe?t=studio",
                    "https://ecsv2.roblox.com/pe?t=diagnostic");
            }
        </script>


<script type="text/javascript">
    if (Roblox && Roblox.PageHeartbeatEvent) {
        Roblox.PageHeartbeatEvent.Init([2,8,20,60]);
    }
</script><script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/c14a216bd7773e7b637b4e6c3c2e619d.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/4acfdab2e6131feb84d783765b82a888.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/6bac93e9bb6716f32f09db749cec330b.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = 'https://js.rbxcdn.com/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/3368571372da9b2e1713bb54ca42a65a.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://js.rbxcdn.com/8db82e6d725b907e91441b849cc35e47.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/f2697119678d0851cfaa6c2270a727ed.js';Roblox.config.paths['Widgets.SurveyModal'] = 'https://js.rbxcdn.com/d6e979598c460090eafb6d38231159f6.js';</script><script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script><script type="text/javascript" src="https://js.rbxcdn.com/94ba538cfcb5d70f02cd135cc6109c84.js"></script>


        <link rel="canonical" href="http://www.xsscape.cf/Item.aspx?ID=<?=$itemID?>">
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
Roblox.Endpoints.Urls['/my/character.aspx'] = 'https://www.roblox.com/my/character.aspx';
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
</script>
</head>
<body id="rbx-body" class="" data-performance-relative-value="0.5" data-internal-page-name="ItemDetail" data-send-event-percentage="0.01">





    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm" data-as-http-regex=""></div>







<form name="aspnetForm" method="post" action="/http://www.xsscape.cf/Item.aspx?ID=<?=$itemID?>" id="aspnetForm" class="nav-container no-gutter-ads">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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">
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
window.WebForm_PostBackOptions||document.write('<script type="text/javascript" src="/WebResource.axd?d=pynGkmcFUV13He1Qd6_TZH6GgOgBQtqMPCPjRUnhj_pzNesAXKuAdu2pj-Sq-3JDJIgwEw2&amp;t=635589219571259667"><\/script>');//]]>
</script>



<script src="https://ajax.aspnetcdn.com/ajax/4.5.1/1/MicrosoftAjax.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
(window.Sys && Sys._Application && Sys.Observer)||document.write('<script type="text/javascript" src="/ScriptResource.axd?d=uHIkleVeDJf4xS50Krz-yA3kt4iEPLwQOcXDJXuiLb543xmSxgoBWyWb-0CTRrqRXPsCyYHFJoMX6TPqspOUhmvwRxW7JGKByJCuSKPDJkedBK4vZ68d-hQEQYwPVMjKP6tsCULlkgnx_6P0HwSsu1ZPvc01&t=ffffffff805766b3"><\/script>');//]]>
</script>

<script src="https://ajax.aspnetcdn.com/ajax/4.5.1/1/MicrosoftAjaxWebForms.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
(window.Sys && Sys.WebForms)||document.write('<script type="text/javascript" src="/ScriptResource.axd?d=Jw6tUGWnA15YEa3ai3FadCEDqusVaOyrhfy39auVd1FmNPcggz_w8ujNbCmSe3d-g1mfv3ai8xe7-2Ze2qr2BxMVxfFYswV1Y4rdnmWJF2uUrOEaDJiBEGKAzXrJcfxb_Yfc2xbZMZu9pLQP2d6b-KwvlK01&t=ffffffff805766b3"><\/script>');//]]>
</script>

<script src="js_/https://www.roblox.com/ScriptResource.axd?d=ckN9yNqP35jmkzZn-uddrmUsbg--ThiqBFFmebCbfN92qL_WRBLk-1PScIvMf5n76tFaIJnBGLW2ap1Uy06ACGT_IESBjfvt2IFEZVHiKAlZkgpJ-V77M4AdwQobhJ_NXx2cilH7J0oaNqwi2D8ZPGQbgFRRpqnVHUPqHis6Z4D6uG15ZtLfaMhzUw3MmpEvUzLUembWKs3-SMqVTlhUC9MqLtGK5pVz65XBNSxMzQP3oKhz0" type="text/javascript"></script>
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="6AB857A9">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="olTq9h8Debg4HKeS1ax4QXYpL0i/kNAxAbEybmOgpoSdkUOp5aPMXOA4qXADwIlyTQLT6m77LEYAXHp1FiBIEQK81wHagPZjSLAKTZhY6rqWZ0RC">
</div>
    <div id="fb-root">
    </div>
    <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager', 'aspnetForm', [], [], [], 90, 'ctl00');
//]]>
</script>
<?php
$get->nav();
?>
<script type="text/javascript">
    (function() {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>


        <div id="navContent" class="nav-content"><div class="nav-content-inner">
    <div id="MasterContainer">


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

    <div id="ItemContainer" class="text ">
        <div>
            <div id="ctl00_cphRoblox_GearDropDown" class="SetList ItemOptions invisible" data-isdropdownhidden="True" data-isitemlimited="False" data-isitemresellable="False">
                <a href="#" class="btn-dropdown">
                    <img src="https://images.rbxcdn.com/ea51d75440715fc531fc3ad281c722f3.png">
                </a>
                <div class="clear"></div>
                <div class="SetListDropDown">
                    <div class="SetListDropDownList invisible">
                        <div class="menu invisible">





                            <div id="ctl00_cphRoblox_ItemOwnershipPanel">

                                <a id="ctl00_cphRoblox_btnDelete" class="invisible" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$btnDelete&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Delete from My Stuff</a>

</div>

                            <div id="ctl00_cphRoblox_CollectionShowcasePanel">




</div>


                        </div>
                    </div>
                </div>
            </div>
            <h1 class="notranslate" data-se="item-name">
                <?=$itemName?>
            </h1>
						<?php
						if($item['type'] == "hat") $type5 = "Hat";
						if($item['type'] == "shirt") $type5 = "Shirt";
						if($item['type'] == "pants") $type5 = "Pants";
						if($item['type'] == "gear") $type5 = "Gear";
            if($item['type'] == "tshirt") $type5 = "T-Shirt";
            if($item['type'] == "face") $type5 = "Face";
            if($item['type'] == "package") $type5 = "Package";
						?>
            <h3>
                XSCAPE <?=$type5?>

            </h3>
        </div>
        <div id="Item">
            <div id="Details">

                        <div id="assetContainer">
                            <div id="Thumbnail">
<script type="text/javascript">
    $(".thumbnail-span img").on('load', function () {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("thumbnail");
        }
    });
</script>
<?php if($item['created'] == date('Y-m-d')){ ?><img src="https://images.rbxcdn.com/8a25ded7fa07d098dac7f234e7b34cfd.png" id="ctl00_cphRoblox_ItemNewOverlay" class="thumbnail-overlay" alt="New" style="z-index:4;position: absolute; top: 0px; right: 0px;"><?php } ?>
                                <img src="<?=$itemThumbnail?>" id="ctl00_cphRoblox_ItemNewOverlay" width="320" class="thumbnail-overlay" alt="New" style="position: absolute; top: 0px; right: 0px;">



                            </div>
                            <span id="ThumbnailText"></span>
                        </div>

                <div id="Summary">
									<?php
									$creator = $db->prepare("SELECT username, id FROM `accounts` WHERE id = ?");
									$creator->execute([$item['creator']]);
									$creatorInfo = $creator->fetch();
									$creatorName = $ep->remove($creatorInfo['username']);
									$creatorId = $ep->remove($creatorInfo['id']);
									?>
                    <div class="SummaryDetails">
                        <div id="Creator" class="Creator">
                            <div style="padding: 0 0 8px;">

                                <a title="<?=$creatorName?>" href="/User.aspx?ID=<?=$creatorId?>"><img src="https://xsscape.cf/content/images/character.png" height="70" width="70" border="0" alt="<?=$creatorName?>"></a>
                            </div>
                        </div>
                        <div class="item-detail">
                            <span class="stat-label notranslate">Creator:</span>
                            <a id="ctl00_cphRoblox_CreatorHyperLink" class="stat notranslate" href="/User.aspx?ID=<?=$creatorId?>"><?=$creatorName?></a>

                            <div>
                                <span class="stat-label">Created:</span>
                                <span class="stat">
                                    <?=$item['created']?>
                                </span>
                            </div>
                            <div id="LastUpdate">
                                <span class="stat-label">Updated:</span>
                                <span class="stat">
                                    <?=$get->updated($item['updated'])?>
                                </span>
                                </div>


                        </div>
                        <div id="ctl00_cphRoblox_DescriptionPanel" class="DescriptionPanel notranslate">

                            <pre class="Description Full text"> <?=$itemDesc?> </pre>
                            <pre class="Description body text"><span class="description-content"><?=$itemDesc?></span><span class="description-more-container"></span></pre>

</div>
                        <div class="ReportAbuse">
                            <div id="ctl00_cphRoblox_AbuseReportButton1_AbuseReportPanel" class="ReportAbuse">

    <span class="AbuseIcon"><a id="ctl00_cphRoblox_AbuseReportButton1_ReportAbuseIconHyperLink" href="https://www.roblox.com/abusereport/asset?id=<?=$itemID?>&amp;RedirectUrl=https%3a%2f%2fwww.roblox.com%2fitem.aspx%3fseoname%3dFlintstones-Car%26id%3d<?=$itemID?>"><img src="https://static.rbxcdn.com/images/abuse.png" alt="Report Abuse" style="border-width:0px;"></a></span>
    <span class="AbuseButton"><a id="ctl00_cphRoblox_AbuseReportButton1_ReportAbuseTextHyperLink" href="https://www.roblox.com/abusereport/asset?id=<?=$itemID?>&amp;RedirectUrl=https%3a%2f%2fwww.roblox.com%2fitem.aspx%3fseoname%3dFlintstones-Car%26id%3d<?=$itemID?>">Report Abuse</a></span>

</div>
                        </div>





                        <div class="GearGenreContainer divider-top">
                            <div id="GenresDiv">
                                <div id="ctl00_cphRoblox_Genres">

                                    <div class="stat-label">
                                        Genres:</div>
                                    <div class="GenreInfo stat">


<div>







            <div id="ctl00_cphRoblox_GenresDisplayTest_AssetGenreRepeater_ctl03_AssetGenreRepeaterPanel" class="AssetGenreRepeater_Container">

                <div class="GamesInfoIcon Town and City"></div>
                <div><a href="https://www.roblox.com/town-and-city-catalog">Town and City</a></div>

	</div>



            <div id="ctl00_cphRoblox_GenresDisplayTest_AssetGenreRepeater_ctl05_AssetGenreRepeaterPanel" class="AssetGenreRepeater_Container">

                <div class="GamesInfoIcon Funny"></div>
                <div><a href="https://www.roblox.com/comedy-catalog">Comedy</a></div>

	</div>



            <div id="ctl00_cphRoblox_GenresDisplayTest_AssetGenreRepeater_ctl07_AssetGenreRepeaterPanel" class="AssetGenreRepeater_Container">

                <div class="GamesInfoIcon Adventure"></div>
                <div><a href="https://www.roblox.com/adventure-catalog">Adventure</a></div>

	</div>















    <div style="clear:both;"></div>
</div>
                                    </div>

</div>
                            </div>

                            <div class="clear"></div>
                        </div>
                        <div class="PluginMessageContainer" style="display: none;">
                            <p>
                                <span class="status-confirm">A newer version is available.</span>
                            </p>
                        </div>
                    </div>
                    <div class="BuyPriceBoxContainer">
                        <div class="BuyPriceBox">
														 <?php
                             if($item['sale'] == 1){
														 if($itemPrice > 0){
                                if($itemCurrency == 1){
														 ?>
                             <div id="ctl00_cphRoblox_RobuxPurchasePanel">
                                <div id="RobuxPurchase">
                                    <div class="calloutParent">
                                        Price: <span class="robux " data-se="item-priceinrobux">
                                            <?=number_format($itemPrice)?>
                                        </span>

                                    </div>
                                    <div id="BuyWithRobux">
                                        <div data-expected-currency="1" data-asset-type="<?=$type5?>" class="btn-primary btn-medium PurchaseButton " data-se="item-buyforrobux" data-item-name="<?=$itemName?>" data-item-id="<?=$itemID?>" data-expected-price="<?=$itemPrice?>" data-product-id="<?=$itemID?>" data-expected-seller-id="<?=$creatorId?>" data-bc-requirement="0" data-seller-name="<?=$creatorName?>">
                                             Buy with R$
                                        </div>

                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
														<?php
													}else{
														?>
														<div id="ctl00_cphRoblox_TicketsPurchasePanel">
														 <div id="TicketsPurchase">
																 <div class="calloutParent">
																		 Price:
																		 <span class="tickets" data-se="item-priceintickets">
																				 <?=$itemPrice?>
																		 </span>

																 </div>
																 <div id="BuyWithTickets">
																		 <div data-expected-currency="2" data-asset-type="<?=$type5?>" class="btn-primary btn-medium PurchaseButton " data-se="item-buyfortickets" data-item-name="<?=$itemName?>" data-item-id="<?=$itemID?>" data-expected-price="<?=$itemPrice?>" data-product-id="<?=$itemID?>" data-expected-seller-id="<?=$creatorId?>" data-bc-requirement="0" data-seller-name="<?=$creatorName?>">
																					Buy with Tx
																		 </div>

																 </div>
														 </div>
												 </div>
														<?php
                          } }else{
														if($itemPrice == 0){
														?>
                            <div id="ctl00_cphRoblox_PublicDomainPurchasePanel">
                                <div class="PublicDomainPrice">
                                    Price: <span class="robux-text " data-se="item-price-free">FREE</span>
                                </div>
                                <div id="BuyForFree">


                                    <div data-expected-currency="1" data-asset-type="<?=$type5?>" class="btn-primary btn-medium PurchaseButton " data-se="item-rentforfree" data-item-name="<?=$itemName?>" data-item-id="<?=$itemID?>" data-expected-price="0" data-product-id="<?=$itemID?>" data-expected-seller-id="<?=$creatorId?>" data-bc-requirement="0" data-seller-name="<?=$creatorName?>">
                                        Borrow
                                    </div>
                                </div>
                            </div><?php } } }else{ ?>
															<div id="ctl00_cphRoblox_PublicDomainPurchasePanel">
                                  <div class="PublicDomainPrice">
                                      Price: <span class="robux-text " data-se="item-price-offsale">Offsale</span>
                                  </div>
                                  <div id="BuyForFree">


                                      <div data-expected-currency="1" data-asset-type="<?=$type5?>" class="btn-primary btn-medium PurchaseButton " data-se="item-rentforfree" data-item-name="<?=$itemName?>" data-item-id="<?=$itemID?>" data-expected-price="0" data-product-id="<?=$itemID?>" data-expected-seller-id="<?=$creatorId?>" data-bc-requirement="0" data-seller-name="<?=$creatorName?>">
                                          Offsale
                                      </div>
                                  </div>
                              </div>
														<?php } ?>





                            <div class="clear">
                            </div>
                            <div class="footnote">


                                <div id="ctl00_cphRoblox_Sold">
                                    (<span data-se="item-numbersold"><?=$sales?></span>
                                    Sold)
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <span>
                                <span class="FavoriteStar" data-se="item-numberfavorited">
                                    0
                                </span>

                        </span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        //<sl:translate>
        Roblox.ItemPurchase.strings = {
            insufficientFundsTitle : "Insufficient Funds",
            insufficientFundsText : "You need {0} more to purchase this item.",
            cancelText : "Cancel",
            okText : "OK",
            buyText : "Buy",
            buyTextLower : "buy",
            tradeCurrencyText : "Trade Currency",
            priceChangeTitle : "Item Price Has Changed",
            priceChangeText : "While you were shopping, the price of this item changed from {0} to {1}.",
            buyNowText : "<?php if($itemCurrency == 1){ if($itemPrice > $usr['Robux']){ echo('Buy Robux'); }else{ echo('Buy Now'); } }else{ if($itemPrice > $usr['Tickets']){ echo('Buy Tickets'); }else{ echo('Buy Now'); } } ?>",
            buyAccessText: "Buy Access",
            buildersClubOnlyTitle : "{0} Only",
            buildersClubOnlyText : "You need {0} to buy this item!",
            buyItemTitle : "<?php if($itemCurrency == 1){ if($itemPrice > $usr['Robux']){ echo('Insufficient Funds'); }else{ echo('Buy Item'); } }else{ if($itemPrice > $usr['Tickets']){ echo('Insufficient Funds'); }else{ echo('Buy Item'); } } ?>",
            buyItemText : "<?php if($itemCurrency == 1){ if($itemPrice > $usr['Robux']){ echo('You need R$ more to purchase this item.'); }else{ echo('Would you like to {0} {5}the {1} {2} from {3} for {4}?'); } }else{ if($itemPrice > $usr['Tickets']){ echo('You need Tx more to purchase this item.'); }else{ echo('Would you like to {0} {5}the {1} {2} from {3} for {4}?'); } } ?>",
						<?php
                if($itemCurrency == 1){
									$userBux = $usr['Robux'];
									$lol = $userBux - $itemPrice;
									$willBe = 'R$' . $lol;
								}else{
									$userBux = $usr['Tickets'];
									$lol = $userBux - $itemPrice;
									$willBe = 'R$' . $lol;
								}
						?>
            balanceText : "Your balance after this transaction will be <?=$willBe?>",
            freeText : "Free",
            purchaseCompleteTitle : "Purchase Complete!",
            purchaseCompleteText : "You have successfully {0} {5}the {1} {2} from {3} for {4}.",
            continueShoppingText : "Continue Shopping",
            customizeCharacterText : "Customize Avatar",
            orText : "or",
            rentText : "rent",
            accessText: "access to "
        }
        //</sl:translate>
    </script>






    <div id="ctl00_cphRoblox_CreateSetPanelDiv" class="createSetPanelPopup">



</div>



<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK</a>
        </div>
    </div>
</div>



<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
 	<div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://images.rbxcdn.com/ae345c0d59b00329758518edc104d573.png">
            <div id="BCMessageDiv" class="BCMessage Message">
                You need  to buy this item!
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="https://www.roblox.com/premium/membership?ctx=bc-only-item" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#NULL').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>


<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>
            <div style="clear:both"></div>
        </div>
        <div class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK</a>
        </div>
    </div>
</div>


    <div id="InstallingPluginView" class="processing-view" style="display:none">
        <div class="ProcessingModalBody">
            <p style="margin:0px"><img src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif" alt="Installing Plugin..."></p>
            <p class="processing-text" style="margin:7px 0px">Installing Plugin...</p>
        </div>
    </div>
    <div id="UpdatingPluginView" class="processing-view" style="display:none">
        <div class="ProcessingModalBody">
            <p style="margin:0px"><img src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif" alt="Updating Plugin..."></p>
            <p class="processing-text" style="margin:7px 0px">Updating Plugin...</p>
        </div>
    </div>

    <script type="text/javascript">
    Roblox.Item = Roblox.Item || {};

    Roblox.Item.Resources = {
        //<sl:translate>
        DisableBadgeTitle: 'Disable Badge'
        , DisableBadgeMessage: 'Are you sure you want to disable this Badge?'
        , EnableBadgeTitle: "Enable Badge"
        , EnableBadgeMessage: "Are you sure you want to enable this Badge?"
        , assetGrantedModalTitle: "This item is now yours"
        , assetGrantedModalMessage: "You just got this item courtesy of our sponsor."
        //</sl:translate>
    };
</script><script type="text/javascript">
    Roblox.Plugins = Roblox.Plugins || {};

    Roblox.Plugins.Resources = {
        //<sl:translate>
        errorTitle: "Error Installing Plugin",
        errorBody: "There was a problem installing this plugin. Please try again later.",
        successTitle: "Plugin Installed",
        successBody: " has been successfully installed! Please open a new window to begin using this plugin.",
        ok: "OK",
        reinstall: "Reinstall",
        updateErrorTitle: "Error Updating Plugin",
        updateErrorBody: "There was a problem updating this plugin. Please try again later.",
        updateSuccessTitle: "Plugin Update",
        updateSuccessBody: " has been successfully updated! Please open a new window for the changes to take effect.",
        updateText: "Update",
        //</sl:translate>
        alertImageUrl: '/images/Icons/img-alert.png'
    };
</script>

    <script type="text/javascript">
        Roblox.Item = Roblox.Item || {};

        Roblox.Item.ShowAssetGrantedModal = false;
        Roblox.Item.ForwardToUrl = "";


        $(function() {
            var commentsLoaded = false;

            //Tabs
            function SwitchTabs(nextTabElem) {
                $('.WhiteSquareTabsContainer .selected,  .TabContent.selected').removeClass('selected');
                nextTabElem.addClass('selected');
                $('#' + nextTabElem.attr('contentid')).addClass('selected');

                var label = $.trim(nextTabElem.attr('contentid'));
                if(label == "CommentaryTab" && !commentsLoaded) {
                    Roblox.CommentsPane.getComments(0);
                    commentsLoaded = true;
                    if(Roblox.SuperSafePrivacyMode != undefined) {
                        Roblox.SuperSafePrivacyMode.initModals();
                    }
                    return false;
                }
            }

            $('.WhiteSquareTabsContainer li').bind('click', function (event) {
                event.preventDefault();
                SwitchTabs($(this));
            });


            function confirmDelete() {
                Roblox.GenericConfirmation.open({
                    //<sl:translate>
                    titleText: "Delete Item",
                    bodyContent: "Are you sure you want to permanently DELETE this item from your inventory?",
                    //</sl:translate>
                    onAccept: function () {
                        javascript: __doPostBack('ctl00$cphRoblox$btnDelete', '');
                    },
                    acceptColor: Roblox.GenericConfirmation.blue,
                    //<sl:translate>
                    acceptText: "OK"
                    //</sl:translate>
                });
            }

            function confirmSubmit() {
                Roblox.GenericConfirmation.open({
                    //<sl:translate>
                    titleText: "Create New Badge Giver",
                    bodyContent: "This will add a new badge giver model to your inventory. Are you sure you want to do this?",
                    //</sl:translate>
                    onAccept: function () {
                        window.location.href = $('#ctl00_cphRoblox_btnSubmit').attr('href');
                    },
                    acceptColor: Roblox.GenericConfirmation.blue,
                    //<sl:translate>
                    acceptText: "OK"
                    //</sl:translate>
                });
            }

            $('#ctl00_cphRoblox_btnDelete').click(function() {
                confirmDelete();
                return false;
            });

            $('div.Ownership input').click(function() {
                confirmSubmit();
                return false;
            });

            modalProperties = { escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000"} };

            // Code for Modal Popups and Plugin initialization


            $(".btn-disabled-primary").removeClass("Button").tipsy({ gravity: 's' }).attr("href", "javascript: return false;");
        });
        function ModalClose(popup) {
            $.modal.close('.' + popup);
        }
    </script>

                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
        </div>


        <?php
        $get->footer();
        ?>



        </div></div>


        <script type="text/javascript">
            function urchinTracker() { };
            GoogleAnalyticsReplaceUrchinWithGAJS = true;
        </script>




<script type="text/javascript">
//<![CDATA[
$(function() { RobloxEventManager.triggerEvent('rbx_evt_newuser', {}); });//]]>
</script>
</form>




    <div id="InstallationInstructions" class="" style="display:none;">
        <div class="ph-installinstructions">
            <div class="ph-modal-header">
                    <span class="icon-close simplemodal-close"></span>
                    <h3 class="title">Thanks for playing ROBLOX</h3>
            </div>
            <div class="modal-content-container">
                <div class="ph-installinstructions-body ">


        <div class="ph-install-step ph-installinstructions-step1-of4">
            <h1>1</h1>
            <p class="larger-font-size">Click <strong>RobloxPlayer.exe</strong> to run the ROBLOX installer, which just downloaded via your web browser.</p>
            <img width="230" height="180" src="https://images.rbxcdn.com/8b0052e4ff81d8e14f19faff2a22fcf7.png">
        </div>
        <div class="ph-install-step ph-installinstructions-step2-of4">
            <h1>2</h1>
            <p class="larger-font-size">Click <strong>Run</strong> when prompted by your computer to begin the installation process.</p>
            <img width="230" height="180" src="https://images.rbxcdn.com/4a3f96d30df0f7879abde4ed837446c6.png">
        </div>
        <div class="ph-install-step ph-installinstructions-step3-of4">
            <h1>3</h1>
            <p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed ROBLOX.</p>
            <img width="230" height="180" src="https://images.rbxcdn.com/6e23e4971ee146e719fb1abcb1d67d59.png">
        </div>
        <div class="ph-install-step ph-installinstructions-step4-of4">
            <h1>4</h1>
            <p class="larger-font-size">After installation, click <strong>Play</strong> below to join the action!</p>
            <div class="VisitButton VisitButtonContinueGLI">
                <a class="btn btn-primary-lg disabled">Play</a>
            </div>
        </div>

                </div>
            </div>
            <div class="xsmall">
                The ROBLOX installer should download shortly. If it doesn’t, start the <a href="#" class="text-link" onclick="Roblox.ProtocolHandlerClientInterface.startDownload(); return false;">download now.</a>
            </div>
        </div>
    </div>
    <div class="InstallInstructionsImage" data-modalwidth="970" style="display:none;"></div>


<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<script type="text/javascript" src="https://js.rbxcdn.com/c55982be90aee588f799ba26ede12190.js"></script>

<script type="text/javascript">
    Roblox.Client._skip = null;
    Roblox.Client._CLSID = '76D50904-6780-4c8b-8986-1A7EE0B1716D';
    Roblox.Client._installHost = 'setup.roblox.com';
    Roblox.Client.ImplementsProxy = true;
    Roblox.Client._silentModeEnabled = true;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';
    Roblox.Client._eventStreamLoggingEnabled = true;


        Roblox.Client._installSuccess = function() {
            if(GoogleAnalyticsEvents){
                GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
                GoogleAnalyticsEvents.FireEvent(['Plugin','Install Success']);
                if (Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
                    Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
                }
            }
        }


        if ((window.chrome || window.safari) && window.location.hash == '#chromeInstall') {
            window.location.hash = '';
            var continuation = '(' + $.cookie('chromeInstall') + ')';
            play_placeId = $.cookie('chromeInstallPlaceId');
            Roblox.GamePlayEvents.lastContext = $.cookie('chromeInstallLaunchMode');
            $.cookie('chromeInstallPlaceId', null);
            $.cookie('chromeInstallLaunchMode', null);
            $.cookie('chromeInstall', null);
            RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent('GameLaunchAttempt_Win32', 'GameLaunchAttempt_Win32_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  };
            Roblox.Client.ResumeTimer(eval(continuation));
        }

</script>


<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-game-launch-interface-enabled="True" data-is-protocol-handler-launch-enabled="True" data-is-user-logged-in="False" data-os-name="Windows" data-protocol-name-for-client="roblox-player" data-protocol-name-for-studio="roblox-studio" data-protocol-url-includes-launchtime="true" data-protocol-detection-enabled="true">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="padding:20px 0;">
            <img src="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress">
        </div>
        <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
            </div>
            <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to Players...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
        <div style="text-align:center;margin-top:1em">
            <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel">
        </div>
    </div>
</div>
<div id="ProtocolHandlerStartingDialog" style="display:none;">
    <div class="modalPopup ph-modal-popup">
        <div class="ph-modal-header">

        </div>
        <div class="ph-logo-row">
            <img src="https://images.rbxcdn.com/e060b59b57fdcc7874c820d13fdcee71.svg" width="90" height="90" alt="R">
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                ROBLOX is now loading. Get ready to play!
            </p>
            <div class="ph-startingdialog-spinner-row">
                <img src="https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" width="82" height="24">
            </div>
        </div>
    </div>
</div>
<div id="ProtocolHandlerAreYouInstalled" style="display:none;">
    <div class="modalPopup ph-modal-popup">
        <div class="ph-modal-header">
            <span class="icon-close simplemodal-close"></span>
        </div>
        <div class="ph-logo-row">
            <img src="https://images.rbxcdn.com/e060b59b57fdcc7874c820d13fdcee71.svg" width="90" height="90" alt="R">
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                You're moments away from getting into the game!
            </p>
            <div>
                <button type="button" class="btn btn-primary-md" id="ProtocolHandlerInstallButton">
                    Download and Install ROBLOX
                </button>
            </div>
            <div class="small">
                <a href="https://en.help.roblox.com/hc/en-us/articles/204473560" class="text-name" target="_blank">Click here for help</a>
            </div>
        </div>
    </div>
</div>
<div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;">
    <p class="larger-font-size">
        <span class="icon-moreinfo"></span>
        Check <b>Remember my choice</b> and click
            <img src="https://images.rbxcdn.com/7c8d7a39b4335931221857cca2b5430b.png" alt="Launch Application">
        in the dialog box above to join games faster in the future!
    </p>
</div>


    <div id="videoPrerollPanel" style="display:none">
        <div id="videoPrerollTitleDiv">
            Gameplay sponsored by:
        </div>
        <div id="videoPrerollMainDiv"></div>
        <div id="videoPrerollCompanionAd"></div>
        <div id="videoPrerollLoadingDiv">
            Loading <span id="videoPrerollLoadingPercent">0%</span> - <span id="videoPrerollMadStatus" class="MadStatusField">Starting game...</span><span id="videoPrerollMadStatusBackBuffer" class="MadStatusBackBuffer"></span>
            <div id="videoPrerollLoadingBar">
                <div id="videoPrerollLoadingBarCompleted">
                </div>
            </div>
        </div>
        <div id="videoPrerollJoinBC">
            <span>Get more with Builders Club!</span>
            <a href="https://www.roblox.com/premium/membership?ctx=preroll" target="_blank" class="btn-medium btn-primary" id="videoPrerollJoinBCButton">Join Builders Club</a>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            if (Roblox.VideoPreRoll) {
                Roblox.VideoPreRoll.showVideoPreRoll = false;
                Roblox.VideoPreRoll.isPrerollShownEveryXMinutesEnabled = true;
                Roblox.VideoPreRoll.loadingBarMaxTime = 33000;
                Roblox.VideoPreRoll.videoOptions.key = "robloxcorporation";
                    Roblox.VideoPreRoll.videoOptions.categories = "AgeUnknown,GenderUnknown";
                                     Roblox.VideoPreRoll.videoOptions.id = "games";
                Roblox.VideoPreRoll.videoLoadingTimeout = 11000;
                Roblox.VideoPreRoll.videoPlayingTimeout = 41000;
                Roblox.VideoPreRoll.videoLogNote = "Guest";
                Roblox.VideoPreRoll.logsEnabled = true;
                Roblox.VideoPreRoll.excludedPlaceIds = "32373412";
                Roblox.VideoPreRoll.adTime = 15;

                Roblox.VideoPreRoll.specificAdOnPlacePageEnabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePageId = 192800;
                Roblox.VideoPreRoll.specificAdOnPlacePageCategory = "stooges";


                Roblox.VideoPreRoll.specificAdOnPlacePage2Enabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Id = 2370766;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Category = "lego";

                $(Roblox.VideoPreRoll.checkEligibility);
            }
        });
    </script>


<div id="GuestModePrompt_BoyGirl" class="Revised GuestModePromptModal" style="display:none;">
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="cursor: pointer; margin-left:455px;top:7px; position:absolute;"></a>
    </div>
    <div class="Title">
        Choose Your Avatar
    </div>
    <div style="min-height: 275px; background-color: white;">
        <div style="clear:both; height:25px;"></div>

        <div style="text-align: center;">
            <div class="VisitButtonsGuestCharacter VisitButtonBoyGuest" style="float:left; margin-left:45px;"></div>
            <div class="VisitButtonsGuestCharacter VisitButtonGirlGuest" style="float:right; margin-right:45px;"></div>
        </div>
        <div style="clear:both; height:25px;"></div>
        <div class="RevisedFooter">
            <div style="width:200px;margin:10px auto 0 auto;">
                <a href="https://www.roblox.com/?returnUrl=https%3A%2F%2Fwww.roblox.com%2Fitem.aspx%3Fseoname%3DFlintstones-Car%26id%3D<?=$itemID?>"><div class="RevisedCharacterSelectSignup"></div></a>
                <a class="HaveAccount" href="https://www.roblox.com/newlogin?returnUrl=https%3A%2F%2Fwww.roblox.com%2Fitem.aspx%3Fseoname%3DFlintstones-Car%26id%3D<?=$itemID?>">I have an account</a>
            </div>
        </div>
    </div>
</div>
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
<?php
if($item['sale'] == 1){
?>
<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <?php if($ownedCount < 1){ ?><div class="Title"></div><?php }else{ ?><div style="font-weight: 700;font-size: 27px;color: #343434;margin: 5px;letter-spacing: -1px;">You already bought this item</div><?php } ?>
    <div class="GenericModalBody">
        <div class="TopBody">
            <?php if($ownedCount < 1){ ?><div class="Message"></div><?php }else{ ?><center><div style="margin-top: 0;width: 270px;vertical-align: middle;font-weight: 700;font-size: 15px;letter-spacing: 0;font-size-adjust: none;font-stretch: normal;">Thanks for purchasing this.</div></center><?php } ?><br>
						<img src="<?php if($ownedCount < 1){ if($itemCurrency == 1){ if($itemPrice > $usr['Robux']){ echo('http://images.rbxcdn.com/cbb24e0c0f1fb97381a065bd1e056fcb.png'); }else{ echo($itemThumbnail); } }else{ if($itemPrice > $usr['Tickets']){ echo('http://images.rbxcdn.com/cbb24e0c0f1fb97381a065bd1e056fcb.png'); }else{ echo($itemThumbnail); } } }else{ echo($itemThumbnail); } ?>" width="150">
        </div>
        <div class="ConfirmationModalButtonContainer">
					<?php if($ownedCount < 1){ ?><form method="post" action=""><?php if($itemCurrency == 1){ if($itemPrice > $usr['Robux']){ echo('<a href="" id="roblox-confirm-btn"><span></span></a>'); }else{ echo('
						<input type="submit" class="btn-large btn-primary" value="Buy Now!" name="buy">
						'); } }else{ if($itemPrice > $usr['Tickets']){ echo('<a href="" id="roblox-confirm-btn"><span></span></a>'); }else{ echo('
						<input type="submit" class="btn-large btn-primary" value="Buy Now!" name="buy">'); } } ?>

            <a href="" id="roblox-decline-btn"><span></span></a></form><?php }else{ echo('<a href="/catalog" class="btn-large btn-primary"><span>Continue Shopping</span></a>'); } ?>
        </div>
				<?php if($ownedCount < 1){ if($itemCurrency == 1){
					if($itemPrice > $usr['Robux']){ }else{ echo('<div style="letter-spacing: normal;color: #666;font: normal 12px Arial,Helvetica,Sans-Serif;text-align: center;padding: 0 10px 7px;">
	               Your balance after this transaction will be '.$willBe.'
	        </div>'); } }else{ if($itemPrice > $usr['Tickets']){}else{ echo('<div style="letter-spacing: normal;color: #666;font: normal 12px Arial,Helvetica,Sans-Serif;text-align: center;padding: 0 10px 7px;">
	               Your balance after this transaction will be '.$willBe.'
	        </div>'); } } } ?>

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
<?php
}
?>


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
        _comscore.push({ c1: "2", c2: "6035605", c3: "", c4: "", c15: "" });

        (function() {
            var s = document.createElement("script"), el = document.getElementsByTagName("script")[0];
            s.async = true;
            s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
            el.parentNode.insertBefore(s, el);
        })();
    </script>
    <noscript>
        <img src="http://b.scorecardresearch.com/p?c1=2&amp;c2=&amp;c3=&amp;c4=&amp;c5=&amp;c6=&amp;c15=&amp;cv=2.0&amp;cj=1"/>
    </noscript><span style="display: inline-block; visibility: hidden; height: 0px; padding: 0px;">Xscape</span></body></html>
