<?php
require_once 'site.php';
require_once ('content/functions.php');
if(is_numeric($_GET['ID'])){
$query = $db->prepare("SELECT * FROM accounts WHERE id = :iduser");
$query->execute([':iduser' => $_GET['ID']]);

$user = $query->fetch();
if(!$user){
die('<META http-equiv=refresh content=0;URL=/home>');
exit;
}else{
$cleanuser = $ep->remove($user['username']);
$cleanblurb = $ep->remove($user['blurb']);
}
}else{
die('<META http-equiv=refresh content=0;URL=/home>');
exit;
}
if($logged){
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- MachineID: WEB176 -->
    <title><?=$cleanuser?> - Xscape</title>

<link rel="canonical" href="https://xsscape.cf" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Xscape"/>
    <meta name="description" content="Xscape is a private server for the game ROBLOX. Xscape utilizes legacy clients and a classic site. We are not affliated with ROBLOX Corporation."/>
    <meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
    <meta name="apple-itunes-app" content="app-id=431946152"/>
    <meta name="google-site-verification" content="KjufnQUaDv5nXJogvDMey4G-Kb7ceUVxTdzcMaP9pCY"/>
    <link href="favicon.ico" rel="icon"/>

   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,600,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://xsscape.cf/content/css/leanbasenew.css"/>
<link rel="stylesheet" href="https://static.rbxcdn.com/css/page___15b72d6b9fcc13c7ee29a13cfa4558ab_m.css/fetch"/>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
    <script type="text/javascript" src="https://js.rbxcdn.com/379cff48ae23ba8f6ba4ce43ff9630f7.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

   <script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.AdsHelper = Roblox.AdsHelper || {};
    Roblox.AdsLibrary = Roblox.AdsLibrary || {};
    Roblox.AdsHelper.toggleAdsSlot = function (slotId, GPTRandomSlotIdentifier) {
        var gutterAdsEnabled = false;
        if (gutterAdsEnabled) {
            googletag.display(GPTRandomSlotIdentifier);
            return;
        }
        if (typeof slotId !== 'undefined' && slotId && slotId.length > 0) {
            var slotElm = $("#"+slotId);
            if (slotElm.is(":visible")) {
                googletag.display(GPTRandomSlotIdentifier);
            }else {
                var adParam = Roblox.AdsLibrary.adsParameters[slotId];
                if (adParam) {
                    adParam.template = slotElm.html();
                    slotElm.empty();
                }
            }
        }
    }
</script><script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script>

<script type="text/javascript">
        $(function () {
            RobloxEventManager.triggerEvent('rbx_evt_newuser', {});
        });
    </script>
    <meta property="og:site_name" content="Xscape"/>
    <meta property="og:title" content="<?=$cleanuser?>'s Profile"/>
    <meta property="og:type" content="profile"/>
    <meta property="og:url" content="https://www.xsscape.cf/User.aspx?ID=<?=$user['id']?>"/>
    <meta property="og:description" content="<?=$cleanuser?> is one of millions playing, creating and exploring the endless possibilities of the ROBLOX universe."/>
    <meta property="og:image" content="https://images.rbxcdn.com/1a6b71c092758d96f9c9ad79bbce592e.jpg"/>
    <meta property="fb:app_id" content="190191627665278">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ROBLOX">
    <meta name="twitter:title" content="<?=$cleanuser?>'s Profile">
    <meta name="twitter:description" content="<?=$cleanuser?> is one of millions playing, creating and exploring the endless possibilities of the ROBLOX universe.">
    <meta name="twitter:creator">
    <meta name="twitter:image1" content="https://t7.rbxcdn.com/1a6b71c092758d96f9c9ad79bbce592e"/>
    <meta name="twitter:app:country" content="US">
    <meta name="twitter:app:name:iphone" content="ROBLOX Mobile">
    <meta name="twitter:app:id:iphone" content="431946152">
    <meta name="twitter:app:url:iphone">
    <meta name="twitter:app:name:ipad" content="ROBLOX Mobile">
    <meta name="twitter:app:id:ipad" content="431946152">
    <meta name="twitter:app:url:ipad">
    <meta name="twitter:app:name:googleplay" content="ROBLOX">
    <meta name="twitter:app:id:googleplay" content="com.roblox.client">
    <meta name="twitter:app:url:googleplay"/>
    <script type="text/javascript">
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("html_head");
        }
    </script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
            window.GoogleAnalyticsDisableRoblox2 = true;
        _gaq.push(['b._setAccount', 'UA-486632-1']);
        _gaq.push(['b._setCampSourceKey', 'rbx_source']);
        _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
        _gaq.push(['b._setCampContentKey', 'rbx_campaign']);
            _gaq.push(['b._setDomainName', 'roblox.com']);
            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
                _gaq.push(['b._setPageGroup', 1, 'Profile']);
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
                    _gaq.push(['c._setPageGroup', 1, 'Profile']);
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
</script>        <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/api/item.ashx'] = 'https://www.roblox.com/api/item.ashx';
Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.roblox.com/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'https://www.roblox.com/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'https://www.roblox.com/client-status';
Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.roblox.com/game/';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.roblox.com/game/edit.ashx';
Roblox.Endpoints.Urls['/game/getauthticket'] = 'https://assetgame.roblox.com/game/getauthticket';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.roblox.com/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.roblox.com/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.roblox.com/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.roblox.com/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.roblox.com/game/updateprerollcount';
Roblox.Endpoints.Urls['login/default.html'] = 'https://www.roblox.com/login/default.aspx';
Roblox.Endpoints.Urls['/my/character.aspx'] = 'https://www.roblox.com/my/character.aspx';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.roblox.com/my/money.aspx';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://misc.roblox.com/chat/chat';
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

<body id="rbx-body" class="" data-performance-relative-value="0.5" data-internal-page-name="Profile" data-send-event-percentage="0.01">
    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm"></div>
<div id="image-retry-data" data-image-retry-max-times="10" data-image-retry-timer="1500">
</div>
<div id="http-retry-data" data-http-retry-max-timeout="8000" data-http-retry-base-timeout="1000">
</div>
<div id="fb-root"></div>

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

<div class="container-main    ">
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>
        <noscript><div class="SystemAlert"><div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>
        <div class="content  ">
<script type="text/javascript">
    var Roblox = Roblox || {};
</script>

<div class="profile-container" ng-modules="robloxApp, profile, robloxApp.helpers">
<div class="section profile-header">
    <div class="section-content profile-header-content" ng-controller="profileHeaderController">
<div data-userid="0" data-profileuserid="<?=$user['id']?>" data-profileusername="<?=$cleanuser?>" data-friendscount="1" data-followerscount="0" data-followingscount="0" data-acceptfriendrequesturl="" data-incomingfriendrequestid="0" data-arefriends="false" data-friendurl="https://www.xsscape.cf/Friends.aspx?ID=<?=$user['id']?>" data-incomingfriendrequestpending="false" data-maysendfriendinvitation="false" data-friendrequestpending="false" data-sendfriendrequesturl="" data-removefriendrequesturl="" data-promptforpushregistrationonfriendrequest="false" data-mayfollow="false" data-isfollowing="false" data-followurl="" data-unfollowurl="" data-canmessage="true" data-messageurl="/messages/compose?recipientId=<?=$user['id']?>" data-canbefollowed="false" data-cantrade="false" data-isblockbuttonvisible="false" data-getfollowscript="" data-ismorebtnvisible="false" data-isvieweeblocked="false" data-mayimpersonate="false" data-impersonateurl="" data-mayupdatestatus="false" data-updatestatusurl="" data-statustext="" data-editstatusmaxlength="254" profile-header-data profile-header-layout="profileHeaderLayout" class="hidden"></div>
        <div class="profile-header-top">
            <div class="avatar avatar-headshot-lg card-plain profile-avatar-image" ng-non-bindable>
                <span class="avatar-card-link avatar-image-link">
                    <img alt="<?=$cleanuser?>" class="avatar-card-image profile-avatar-thumb" src="https://web.archive.org/web/20160807153806im_/https://t5.rbxcdn.com/51d5e5772bfef3536140e5a8f3f1476b">
                </span>
                <script type="text/javascript">
                $("img.profile-avatar-thumb").on('load', function() {
                    if (Roblox && Roblox.Performance) {
                        Roblox.Performance.setPerformanceMark("head_avatar");
                    }
                });
                </script>

<span class="avatar-status game icon-game profile-avatar-status" title="In Game"></span>
            </div>
            <div class="header-caption">
                <div class="header-title">
                    <h2><?=$cleanuser?></h2>
                        <!--<span class="icon-obc"></span>-->
                </div>

<div class="header-details">
                    <ul class="details-info">
                        <li>
                            <div class="text-label">Friends</div>
                            <a class="text-name" href="Friends.aspx?ID=<?=$user['id']?>" ng-cloak>
                                <h3>
                                    1
                                </h3>
                            </a>
                        </li>

     <li>
                            <div class="text-label">Followers</div>
                            <a class="text-name" href="" ng-cloak>
                                <h3>0</h3>
                            </a>
                        </li>

         <li>
                            <div class="text-label">Following</div>
                            <a class="text-name" href="" ng-cloak>
                                <h3>
                                    0
                                </h3>
                            </a>
                        </li>
                    </ul>

        <ul class="details-actions desktop-action">
                            <li class="btn-friends" ng-if="!profileHeaderLayout.areFriends" ng-cloak>
                                <button ng-if="profileHeaderLayout.incomingFriendRequestPending" ng-cloak class="btn-control-md" data-target-url="/api/friends/acceptfriendrequest" data-friend-request-id="0" data-target-user-id="1848960" data-friends-url="https://www.roblox.com/users/1848960/friends#!/friends" ng-click="acceptFriendRequest()">
                                    Accept
                                </button>
                                <button ng-if="!profileHeaderLayout.incomingFriendRequestPending
                                                &amp;&amp; profileHeaderLayout.maySendFriendInvitation" ng-cloak class="btn-control-md" ng-click="sendFriendRequest()">
                                    Add Friend
                                </button>
                                <button ng-if="!profileHeaderLayout.incomingFriendRequestPending
                                            &amp;&amp; !profileHeaderLayout.maySendFriendInvitation
                                            &amp;&amp; profileHeaderLayout.friendRequestPending" ng-cloak class="btn-control-md disabled">
                                    Pending
                                </button>
                                <button ng-if="!profileHeaderLayout.incomingFriendRequestPending
                                            &amp;&amp; !profileHeaderLayout.maySendFriendInvitation
                                            &amp;&amp; !profileHeaderLayout.friendRequestPending" ng-cloak class="btn-control-md disabled">
                                    Add Friend
                                </button>
                            </li>
                            <li class="btn-friends" ng-if="profileHeaderLayout.areFriends" ng-cloak>
                                <button class="btn-control-md" data-target-url="/api/friends/removefriend" data-target-user-id="1848960" ng-mouseenter="hover = true" ng-mouseleave="hover =false" ng-class="{'btn-unfollow': hover}" ng-click="removeFriend()">
                                    Unfriend
                                </button>
                            </li>
                            <li class="btn-messages">
                                <button class="btn-control-md" ng-disabled="!profileHeaderLayout.canMessage || profileHeaderLayout.userId == 0" ng-click="sendMessage()" ng-cloak>
                                    Message
                                </button>
                            </li>
                            <li class="btn-join-game" ng-if="profileHeaderLayout.canBeFollowed">
                                <button class="profile-join-game btn-primary-md" ng-cloak>
                                    Join Game
                                </button>
                            </li>
                        </ul>
                        <ul class="details-actions mobile-action" ng-class="{'three-item-list': profileHeaderLayout.canBeFollowed}">
                            <li class="btn-friends" ng-if="!profileHeaderLayout.areFriends" ng-cloak>
                                <a ng-if="profileHeaderLayout.incomingFriendRequestPending" ng-cloak data-target-url="/api/friends/acceptfriendrequest" data-friend-request-id="0" data-target-user-id="1848960" data-friends-url="https://www.roblox.com/users/1848960/friends#!/friends" class="action-add-friend" ng-click="acceptFriendRequest()">
                                    <div class="icon-add-friend"></div>
                                    <div class="text-label small">Accept</div>
                                </a>
                                <a ng-if="!profileHeaderLayout.incomingFriendRequestPending
                                &amp;&amp; profileHeaderLayout.maySendFriendInvitation" class="action-add-friend" ng-cloak ng-click="sendFriendRequest()">
                                    <div class="icon-add-friend"></div>
                                    <div class="text-label small">Add Friend</div>
                                </a>
                                <a ng-if="!profileHeaderLayout.incomingFriendRequestPending
                            &amp;&amp; !profileHeaderLayout.maySendFriendInvitation
                            &amp;&amp; profileHeaderLayout.friendRequestPending" ng-cloak class="action-friend-pending">
                                    <div class="icon-friend-pending"></div>
                                    <div class="text-label small">Pending</div>
                                </a>
                                <a ng-if="!profileHeaderLayout.incomingFriendRequestPending
                            &amp;&amp; !profileHeaderLayout.maySendFriendInvitation
                            &amp;&amp; !profileHeaderLayout.friendRequestPending" ng-cloak class="action-friend-pending">
                                    <div class="icon-friend-pending"></div>
                                    <div class="text-label small">Add Friend</div>
                                </a>
                            </li>
                            <li class="btn-friends" ng-if="profileHeaderLayout.areFriends" ng-cloak>
                                <a data-target-url="/api/friends/removefriend" data-target-user-id="1848960" ng-mouseenter="hover = true" ng-mouseleave="hover =false" ng-class="{'btn-unfollow': hover}" ng-click="removeFriend()" class="action-remove-friend">
                                    <div class="icon-remove-friend"></div>
                                    <div class="text-label small">Unfriend</div>
                                </a>
                            </li>
                            <li class="btn-messages center-icon">
                                <div ng-if="!(profileHeaderLayout.canMessage || profileHeaderLayout.userId == 0)" class="action-message-disabled" ng-cloak>
                                    <div class="icon-send-message-disabled"></div>
                                    <div class="text-label small">Message</div>
                                </div>
                                <a ng-if="profileHeaderLayout.canMessage || profileHeaderLayout.userId == 0" ng-click="sendMessage()" class="action-message" ng-cloak>
                                    <div class="icon-send-message"></div>
                                    <div class="text-label small">Message</div>
                                </a>
                            </li>
                            <li class="btn-join-game last-icon" ng-if="profileHeaderLayout.canBeFollowed">
                                <a class="profile-join-game action-join-game" ng-cloak>
                                    <div class="icon-join-game"></div>
                                    <div class="text-label small">Join Game</div>
                                </a>
                            </li>
                        </ul>
                </div><!--header-details-->

             <div class="header-userstatus">
    <div class="header-userstatus-text" ng-hide="profileHeaderLayout.statusFormShown">
        <span id="userStatusText" class="text-overflow" ng-class="{'userstatus-editable' : profileHeaderLayout.mayUpdateStatus}" ng-bind="profileHeaderLayout.statusText | statusfilter" ng-click="revealStatusForm()" ng-cloak>N/A</span>
    </div>
</div>

</div>
        </div>

    <p ng-show="profileHeaderLayout.hasError" ng-cloak class="small text-error header-details-error">{{profileHeaderLayout.errorMsg}}</p>
        <div id="profile-header-more" class="profile-header-more" ng-show="profileHeaderLayout.isMoreBtnVisible" ng-cloak>
            <a id="popover-link" class="rbx-menu-item" data-toggle="popover" data-bind="profile-header-popover-content">
                <span class="icon-more"></span>
            </a>
            <div id="popover-content" class="rbx-popover-content" data-toggle="profile-header-popover-content">
                <ul class="dropdown-menu" role="menu">
                    <li ng-show="profileHeaderLayout.mayFollow" ng-cloak>
                        <a ng-bind="profileHeaderLayout.isFollowing ? 'Unfollow' : 'Follow'" ng-click="follow()" id="profile-follow-user" ng-cloak></a>
                    </li>
                        <li ng-show="profileHeaderLayout.canTrade" ng-cloak><a ng-click="tradeItems()" id="profile-trade-items">Trade Items</a></li>
                    <li ng-show="profileHeaderLayout.isBlockButtonVisible" ng-cloak>
                        <a ng-bind="!profileHeaderLayout.isVieweeBlocked ? 'Block User' : 'Unblock User'" ng-click="blockUser()" id="profile-block-user" ng-cloak></a>
                    </li>
                                                                <li>
                            <a href="">Inventory</a>
                        </li>
                                            <li>
                            <a href="">Favorites</a>
                        </li>
                </ul>
            </div>
            <script type="text/javascript">
                $(function() {
                    $(".details-actions, .mobile-details-actions").on("click touchstart", ".profile-join-game", function() {
                        // NOTE: global var set due to legacy game launch code.
                        play_placeId = 0;
                    });
                });
            </script>
<div>
    <script type="text/javascript">
        Roblox.uiBootstrap = Roblox.uiBootstrap || {};
        Roblox.uiBootstrap.modalBackdropTemplateLink = "viewapp/common/template/modal/backdrop.html";
        Roblox.uiBootstrap.modalWindowTemplateLink = "/viewapp/common/template/modal/window.html";
    </script>

<script type="text/ng-template" id="profile-block-user-modal.html">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" ng-click="close()">
                    <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span>
                </button>
                <h5>
                    Warning
                </h5>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to unblock this user?</p>
            </div>
            <div class="modal-footer">
                    <button type="submit" id="purchaseConfirm" class="btn-control-md" ng-click="submit()">
                        Unblock
                    </button>
                                    <button type="button" class="btn-fixed-width btn-secondary-md" ng-click="close()">
                        Cancel
                    </button>
            </div>
            </div><!-- /.modal-content -->
    </script>
</div>

<div>
    <script type="text/javascript">
        Roblox.uiBootstrap = Roblox.uiBootstrap || {};
        Roblox.uiBootstrap.modalBackdropTemplateLink = "viewapp/common/template/modal/backdrop.html";
        Roblox.uiBootstrap.modalWindowTemplateLink = "/viewapp/common/template/modal/window.html";
    </script>
    <script type="text/ng-template" id="profile-unblock-user-modal.html">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" ng-click="close()">
                    <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span>
                </button>
                <h5>
                    Warning
                </h5>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to block this user?</p>
            </div>
            <div class="modal-footer">
                    <button type="submit" id="purchaseConfirm" class="btn-control-md" ng-click="submit()">
                        Block
                    </button>
                                    <button type="button" class="btn-fixed-width btn-secondary-md" ng-click="close()">
                        Cancel
                    </button>
            </div>
                <p class="small modal-footer-note">When you&#39;ve blocked a user, neither of you can directly contact the other.</p>
            </div><!-- /.modal-content -->
    </script>
</div>
        </div>
    </div><!--profile-header-content-->

</div><!-- profile-header -->
    <div class="rbx-tabs-horizontal">
        <ul id="horizontal-tabs" class="nav nav-tabs" role="tablist">
            <li class="rbx-tab active">
                <a class="rbx-tab-heading" href="#about" id="tab-about">
                    <span class="text-lead">About</span>
                    <span class="rbx-tab-subtitle"></span>
                </a>
            </li>
            <li class="rbx-tab">
                <a class="rbx-tab-heading" href="#creations" id="tab-creations">
                    <span class="text-lead">Creations</span>
                    <span class="rbx-tab-subtitle"></span>
                </a>
            </li>
        </ul>
        <div class="tab-content rbx-tab-content">
            <div class="tab-pane active" id="about">
                <div class="section profile-about" ng-controller="profileUtilitiesController">
    <div class="container-header">
        <h3>About</h3>
    </div>
    <div class="section-content">
        <div class="profile-about-content">
            <p class="para-overflow-toggle para-height para-overflow-page-loading">
                <span class="profile-about-content-text" ng-non-bindable><?=$cleanblurb?></span>
            </p>
        </div>

     <div class="profile-about-footer">
                <a href="" class="abuse-report-link">
                    <span class="text-error">Report Abuse</span>
                </a>

        <div>
    <script type="text/javascript">
        Roblox.uiBootstrap = Roblox.uiBootstrap || {};
        Roblox.uiBootstrap.modalBackdropTemplateLink = "viewapp/common/template/modal/backdrop.html";
        Roblox.uiBootstrap.modalWindowTemplateLink = "/viewapp/common/template/modal/window.html";
    </script>

   <script type="text/ng-template" id="profile-past-usernames-modal.html">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" ng-click="close()">
                    <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span>
                </button>
                <h5>
                    Past Usernames
                </h5>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">
                            </div>
            </div><!-- /.modal-content -->
    </script>
</div>
        </div>
    </div>
</div>

<div class="container-list profile-avatar">
    <h3>Currently Wearing</h3>
    <div class="col-sm-6 profile-avatar-left">
<div id="UserAvatar" class="thumbnail-holder" data-reset-enabled-every-page data-3d-thumbs-enabled data-url="https://www.roblox.com/thumbnail/user-avatar?userId=1848960&amp;thumbnailFormatId=124&amp;width=300&amp;height=300" style="width:300px; height:300px;">
    <span class="thumbnail-span" data-3d-url="http://web.archive.org/web/20160807153806im_/https://t5.rbxcdn.com/b082c01b099e8a0e8bd6a50c2b06e135" data-js-files="https://js.rbxcdn.com/95518cef4aea4b89a95e61452d70c3bb.js"><img alt="" class="" src="http://web.archive.org/web/20160807153806im_/https://t5.rbxcdn.com/b082c01b099e8a0e8bd6a50c2b06e135"/></span>
        <img class="user-avatar-overlay-image thumbnail-overlay" src="http://web.archive.org/web/20160807153806im_/https://t5.rbxcdn.com/b082c01b099e8a0e8bd6a50c2b06e135" alt=""/>
    <span class="enable-three-dee btn-control btn-control-small"></span>
</div>
    </div>

<div class="col-sm-6 profile-avatar-right">
            <div class="profile-avatar-mask">
<div class="profile-accoutrements-container" ng-controller="profileAccoutrementsController">
<div data-numberofaccoutrements="4" data-accoutrementsperpage="8" data-intouchscreen="false" profile-accoutrements-data profile-accoutrements-layout="profileAccoutrementsLayout" class="hidden"></div>
    <div id="accoutrements-slider" class="profile-accoutrements-slider" profile-accoutrements-slider profile-accoutrements-layout="profileAccoutrementsLayout">
                    <ul class="accoutrement-items-container">
    </div>

  <!--profile-accoutrement-slider-->
    <div id="accoutrements-page" class="profile-accoutrements-page-container" profile-accoutrements-page profile-accoutrements-layout="profileAccoutrementsLayout">
        <span class="profile-accoutrements-page hidden" ng-class="{'page-active': profileAccoutrementsLayout.currentPageNumber == 0}" ng-click="getAccoutrementsPage(0)"></span>
        <span class="profile-accoutrements-page hidden" ng-class="{'page-active': profileAccoutrementsLayout.currentPageNumber == 1}" ng-click="getAccoutrementsPage(1)"></span>
    </div>
</div>
            </div>
        </div>
</div>

<!--profile-accoutrement-slider-->
    <div id="accoutrements-page" class="profile-accoutrements-page-container" profile-accoutrements-page profile-accoutrements-layout="profileAccoutrementsLayout">
        <span class="profile-accoutrements-page hidden" ng-class="{'page-active': profileAccoutrementsLayout.currentPageNumber == 0}" ng-click="getAccoutrementsPage(0)"></span>
        <span class="profile-accoutrements-page hidden" ng-class="{'page-active': profileAccoutrementsLayout.currentPageNumber == 1}" ng-click="getAccoutrementsPage(1)"></span>
    </div>
</div>
            </div>
        </div>
</div>
<?php
//$get->footer();
       }
       ?>
