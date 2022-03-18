<?php
require_once 'site.php';
if(!$logged){
header('Location: ../');
exit;
}
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- MachineID: WEB406 -->
    <title>Natural Disaster Survival - Xscape</title>
	<link rel="canonical" href="http://xsscape.cf" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Xscape"/>
    <meta name="description" content="Xscape is a private server for the game ROBLOX. Xscape utilizes legacy clients and a classic site. We are not affliated with ROBLOX Corporation."/>
    <meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
    <meta name="apple-itunes-app" content="app-id=431946152"/>
    <meta name="google-site-verification" content="KjufnQUaDv5nXJogvDMey4G-Kb7ceUVxTdzcMaP9pCY"/>

    <link href="favicon.ico" rel="icon"/>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,600,700" rel="stylesheet" type="text/css">

     <link rel="stylesheet" href="https://dtjatwg9u87ct.cloudfront.net/content/css/leanbasenew.css">
     <link rel="stylesheet" href="https://static.rbxcdn.com/css/page___b55b616d86a821b4536d00080fd45da2_m.css/fetch"/>

     <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/4.0/1/MicrosoftAjax.js"></script>
<script type="text/javascript">window.Sys || document.write("<script type='text/javascript' src='js/Microsoft/MicrosoftAjax.js'><\/script>")</script>
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

<meta property="al:ios:url" content="robloxmobile://placeID=189707"/>
        <meta property="al:ios:app_store_id" content="431946152"/>
        <meta property="al:ios:app_name" content="Roblox Mobile"/>
        <meta property="al:web:should_fallback" content="false"/>
    <meta property="og:site_name" content="ROBLOX"/>
    <meta property="og:title" content="Natural Disaster Survival"/>
    <meta property="og:type" content="game"/>
    <meta property="og:url" content="https://www.roblox.com/games/189707/Natural-Disaster-Survival"/>
    <meta property="og:description" content="Quickly, run around in circles! Your life depends on it!"/>
    <meta property="og:image" content="https://images.rbxcdn.com/640804af4955fafb8d64c6f7a3514177.jpg"/>
    <meta property="fb:app_id" content="190191627665278">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ROBLOX">
    <meta name="twitter:title" content="Natural Disaster Survival">
    <meta name="twitter:description" content="Quickly, run around in circles! Your life depends on it!">
    <meta name="twitter:creator">
    <meta name="twitter:image1" content="http://t1.rbxcdn.com/640804af4955fafb8d64c6f7a3514177"/>
    <meta name="twitter:app:country" content="US">
    <meta name="twitter:app:name:iphone" content="ROBLOX Mobile">
    <meta name="twitter:app:id:iphone" content="431946152">
    <meta name="twitter:app:url:iphone" content="robloxmobile://placeID=189707">
    <meta name="twitter:app:name:ipad" content="ROBLOX Mobile">
    <meta name="twitter:app:id:ipad" content="431946152">
    <meta name="twitter:app:url:ipad" content="robloxmobile://placeID=189707">
    <meta name="twitter:app:name:googleplay" content="ROBLOX">
    <meta name="twitter:app:id:googleplay" content="com.roblox.client">
    <meta name="twitter:app:url:googleplay" content="robloxmobile://placeID=189707"/>

    <script type="text/javascript">
        var _gaq = _gaq || [];
            window.GoogleAnalyticsDisableRoblox2 = true;
        _gaq.push(['b._setAccount', 'UA-486632-1']);
        _gaq.push(['b._setCampSourceKey', 'rbx_source']);
        _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
        _gaq.push(['b._setCampContentKey', 'rbx_campaign']);
            _gaq.push(['b._setDomainName', 'roblox.com']);
            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
                _gaq.push(['b._setPageGroup', 1, 'GameDetail']);
    _gaq.push(['b._trackPageview']);
        _gaq.push(['c._setAccount', 'UA-26810151-2']);
            _gaq.push(['c._setDomainName', 'roblox.com']);
                    _gaq.push(['c._setPageGroup', 1, 'GameDetail']);
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
                Roblox.EventStream.Init("http://ecsv2.roblox.com/www/e.png",
                    "http://ecsv2.roblox.com/www/e.png",
                    "http://ecsv2.roblox.com/pe?t=studio",
                    "http://ecsv2.roblox.com/pe?t=diagnostic");
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
Roblox.Endpoints.Urls['/api/item.ashx'] = 'http://www.roblox.com/api/item.ashx';
Roblox.Endpoints.Urls['/asset/'] = 'http://assetgame.roblox.com/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'http://www.roblox.com/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'http://www.roblox.com/client-status';
Roblox.Endpoints.Urls['/game/'] = 'http://assetgame.roblox.com/game/';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'http://assetgame.roblox.com/game/edit.ashx';
Roblox.Endpoints.Urls['/game/getauthticket'] = 'http://assetgame.roblox.com/game/getauthticket';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'http://assetgame.roblox.com/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'http://assetgame.roblox.com/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'http://assetgame.roblox.com/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'http://assetgame.roblox.com/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'http://assetgame.roblox.com/game/updateprerollcount';
Roblox.Endpoints.Urls['login/default.html'] = 'https://www.roblox.com/login/default.aspx';
Roblox.Endpoints.Urls['/my/character.aspx'] = 'https://www.roblox.com/my/character.aspx';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.roblox.com/my/money.aspx';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://www.roblox.com/chat/chat';
Roblox.Endpoints.Urls['/presence/users'] = 'http://www.roblox.com/presence/users';
Roblox.Endpoints.Urls['/presence/user'] = 'http://www.roblox.com/presence/user';
Roblox.Endpoints.Urls['/friends/list'] = 'http://www.roblox.com/friends/list';
Roblox.Endpoints.Urls['/navigation/getCount'] = 'http://www.roblox.com/navigation/getCount';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://www.roblox.com/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.roblox.com/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'http://search.roblox.com/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.roblox.com/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.roblox.com/catalog/lists.aspx';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'http://assetgame.roblox.com/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'http://assetgame.roblox.com/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'http://assetgame.roblox.com/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'http://assetgame.roblox.com/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'http://assetgame.roblox.com/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'http://www.roblox.com/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'http://www.roblox.com/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'http://www.roblox.com/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'http://www.roblox.com/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://www.roblox.com/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://www.roblox.com/bust-thumbnail/json';
Roblox.Endpoints.Urls['/group-thumbnails'] = 'https://www.roblox.com/group-thumbnails';
Roblox.Endpoints.Urls['/groups/getprimarygroupinfo.ashx'] = 'https://www.roblox.com/groups/getprimarygroupinfo.ashx';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://www.roblox.com/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://www.roblox.com/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://www.roblox.com/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://www.roblox.com/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://www.roblox.com/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'http://www.roblox.com/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'http://www.roblox.com/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://www.roblox.com/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://www.roblox.com/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'http://www.roblox.com/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://www.roblox.com/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://www.roblox.com/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://www.roblox.com/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'http://www.roblox.com/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'http://www.roblox.com/thumbnail/place-thumbnails-partial';
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
<body id="rbx-body" class="" data-performance-relative-value="0.5" data-internal-page-name="GameDetail" data-send-event-percentage="0.01">
    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm"></div>
<div id="image-retry-data" data-image-retry-max-times="10" data-image-retry-timer="1500">
</div>
<div id="http-retry-data" data-http-retry-max-timeout="8000" data-http-retry-base-timeout="1000">
</div>
<div id="fb-root"></div>

<div id="header" class="navbar-fixed-top rbx-header" role="navigation">
<div class="container-fluid">
<div class="rbx-navbar-header">
<div data-behavior="nav-notification" class="rbx-nav-collapse" onselectstart="return false;">
<span class="icon-nav-menu"></span>
</div>
<div class="navbar-header">
<a class="navbar-brand" href="https://www.xsscape.cf/">
<span class="icon-logo"></span>
<span class="icon-logo-r"></span>
</a>
</div>
</div>
<ul class="nav rbx-navbar hidden-xs hidden-sm col-md-4 col-lg-3">
<li>
<a class="nav-menu-title" href="https://www.xsscape.cf/games">Games</a>
</li>
<li>
<a class="nav-menu-title" href="https://www.xsscape.cf/catalog/">Catalog</a>
</li>
<li>
<a class="nav-menu-title" href="https://www.xsscape.cf/develop">Develop</a>
</li>
<li>
<a class="buy-robux nav-menu-title" href="https://www.xsscape.cf/upgrade">Upgrade</a>
</li>
</ul>
<div id="navbar-universal-search" class="navbar-left rbx-navbar-search col-xs-5 col-sm-6 col-md-3" data-behavior="univeral-search" role="search">
<div class="input-group">
<input id="navbar-search-input" class="form-control input-field" type="text" placeholder="Search" maxlength="120" />
<div class="input-group-btn">
<button id="navbar-search-btn" class="input-addon-btn" type="submit">
<span class="icon-nav-search"></span>
</button>
</div>
</div>
<ul data-toggle="dropdown-menu" class="dropdown-menu" role="menu">
<li class="rbx-navbar-search-option selected" data-searchurl="https://www.xsscape.cf/search/users?keyword=">
<span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in People</span>
</li>
<li class="rbx-navbar-search-option" data-searchurl="https://www.xsscape.cf/search/games/?Keyword=">
<span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Games</span>
</li>
<li class="rbx-navbar-search-option" data-searchurl="https://www.xsscape.cf/search/catalog/browse.aspx?CatalogContext=1&amp;Keyword=">
<span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Catalog</span>
</li>
<li class="rbx-navbar-search-option" data-searchurl="https://www.xsscape.cf/search/groups/search.aspx?val=">
<span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Groups</span>
</li>
<li class="rbx-navbar-search-option" data-searchurl="https://www.xsscape.cf/search/develop/library?CatalogContext=2&amp;Category=6&amp;Keyword=">
<span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Library</span>
</li>
</ul>
</div>
<div class="navbar-right rbx-navbar-right col-xs-4 col-sm-3">
<ul class="nav navbar-right rbx-navbar-icon-group">
<li id="navbar-setting" class="navbar-icon-item">
<a class="rbx-menu-item" data-toggle="popover" data-bind="popover-setting" data-viewport="#header">
<span class="icon-nav-settings" id="nav-settings"></span>
<span class="xsmall nav-setting-highlight hidden">0</span>
</a>
<div class="rbx-popover-content" data-toggle="popover-setting">
<ul class="dropdown-menu" role="menu">
<li>
<a class="rbx-menu-item" href="/account">
Settings
<span class="xsmall nav-setting-highlight hidden">0</span>
</a>
</li>
<li><a class="rbx-menu-item" href="" target="_blank">Help</a></li>
<li><a class="rbx-menu-item" data-behavior="logout" data-bind="../Logout.aspx">Logout</a></li>
</ul>
</div>
</li>
<li id="navbar-robux" class="navbar-icon-item">
<a id="nav-tix-icon" class="rbx-menu-item" data-toggle="popover" data-bind="popover-tix">
<span class="icon-nav-tix" id="nav-tix"></span>
<span class="rbx-text-navbar-right" id="nav-tix-amount">0</span>
</a>
<div class="rbx-popover-content" data-toggle="popover-tix">
<ul class="dropdown-menu" role="menu">
<li><a href="/money" id="nav-robux-balance" class="rbx-menu-item">0 Tickets</a></li>
<li><a href="../upgrade" class="rbx-menu-item">Get Tickets</a></li>
</ul>
</div>
</li>
<li class="rbx-navbar-right-search" data-toggle="toggle-search">
<a class="rbx-menu-icon rbx-menu-item">
<span class="icon-nav-search-white"></span>
</a>
</li>
</ul> </div>
<ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
<li>
<a class="nav-menu-title" href="https://www.xsscape.cf/games">Games</a>
</li>
<li>
<a class="nav-menu-title" href="https://www.xsscape.cf/catalog/">Catalog</a>
</li>
<li>
<a class="nav-menu-title" href="https://www.xsscape.cf/develop">Develop</a>
</li>
<li>
<a class="buy-robux nav-menu-title" href="https://www.xsscape.cf/upgrade">Upgrade</a>
</li>
</ul>
</div>
</div>

<div id="navigation" class="rbx-left-col" data-behavior="left-col">
<ul>
<li class="text-lead">
<a class="text-overflow" href="https://www.xsscape.cf/User.aspx?ID=">Guest</a>
</li>
<li class="rbx-divider"></li>
</ul>
<div class="rbx-scrollbar" data-toggle="scrollbar" onselectstart="return false;">
<ul>
<li><a href="https://www.xsscape.cf/home" id="nav-home"><span class="icon-nav-home"></span><span>Home</span></a></li>
<li><a href="https://www.xsscape.cf/User.aspx?ID=" id="nav-profile"><span class="icon-nav-profile"></span><span>Profile</span></a></li>
<li>
<a href="https://www.xsscape.cf/my/messages/#!/inbox" id="nav-message" data-count="0">
<span class="icon-nav-message"></span><span>Messages</span>
<span class="notification-blue " title="0">0</span>
</a>
</li>
<li>
<a href="https://www.xsscape.cf/Friends.aspx" id="nav-friends" data-count="0">
<span class="icon-nav-friends"></span><span>Friends</span>
<span class="notification-blue " title="0">0</span>
</a>
</li>
<li>
<a href="/avatar" id="nav-character">
<span class="icon-nav-charactercustomizer"></span><span>Avatar</span>
</a>
</li>
<li>
<a href="https://www.xsscape.cf/inventory" id="nav-inventory">
<span class="icon-nav-inventory"></span><span>Inventory</span>
</a>
</li>
<li>
<a href="https://www.xsscape.cf/trade" id="nav-trade">
<span class="icon-nav-trade"></span><span>Trade</span>
</a>
</li>
<li>
<a href="https://www.xsscape.cf/groups" id="nav-group">
<span class="icon-nav-group"></span><span>Groups</span>
</a>
</li>
<li>
<a href="https://xsscape.cf/forum/" id="nav-forum">
<span class="icon-nav-forum"></span><span>Forum</span>
</a>
</li>
<li>
<a href="https://www.xsscape.cf/blog/" id="nav-blog">
<span class="icon-nav-blog"></span><span>Blog</span>
</a>
</li>
<li>
<a id="nav-shop" class="roblox-shop-interstitial">
<span class="icon-nav-shop"></span><span>Shop</span>
</a>
</li>
<li class="rbx-upgrade-now">
<a href="https://www.xsscape.cf/upgrade" class="btn-secondary-md" id="upgrade-now-button">Upgrade Now</a>
</li>
<li class="font-bold small">
Events
</li>
<li class="rbx-nav-sponsor" ng-non-bindable>
<a class="menu-item" href="https://www.roblox.com/sponsored/TrickOrTreatCountdown" title="TrickOrTreatCountdown">
<img src="https://images.rbxcdn.com/afb2cf5cfcf786eaf8af131529fc64f6" />
</a>
</li>
</ul>
</div>
</div>
<script type="text/javascript">
    var Roblox = Roblox || {};
    (function() {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>

<div id="header" class="navbar-fixed-top rbx-header" role="navigation">
<div class="container-fluid">
<div class="rbx-navbar-header">
<div data-behavior="nav-notification" class="rbx-nav-collapse" onselectstart="return false;">
<span class="icon-nav-menu"></span>
</div>
<div class="navbar-header">
<a class="navbar-brand" href="https://www.xsscape.cf/">
<span class="icon-logo"></span>
<span class="icon-logo-r"></span>
</a>
</div>
</div>
<ul class="nav rbx-navbar hidden-xs hidden-sm col-md-4 col-lg-3">
<li>
<a class="nav-menu-title" href="https://www.xsscape.cf/games">Games</a>
</li>
<li>
<a class="nav-menu-title" href="https://www.xsscape.cf/catalog/">Catalog</a>
</li>
<li>
<a class="nav-menu-title" href="https://www.xsscape.cf/develop">Develop</a>
</li>
<li>
<a class="buy-robux nav-menu-title" href="https://www.xsscape.cf/upgrade">Upgrade</a>
</li>
</ul>
<div id="navbar-universal-search" class="navbar-left rbx-navbar-search col-xs-5 col-sm-6 col-md-3" data-behavior="univeral-search" role="search">
<div class="input-group">
<input id="navbar-search-input" class="form-control input-field" type="text" placeholder="Search" maxlength="120" />
<div class="input-group-btn">
<button id="navbar-search-btn" class="input-addon-btn" type="submit">
<span class="icon-nav-search"></span>
</button>
</div>
</div>
<ul data-toggle="dropdown-menu" class="dropdown-menu" role="menu">
<li class="rbx-navbar-search-option selected" data-searchurl="https://www.xsscape.cf/search/users?keyword=">
<span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in People</span>
</li>
<li class="rbx-navbar-search-option" data-searchurl="https://www.xsscape.cf/search/games/?Keyword=">
<span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Games</span>
</li>
<li class="rbx-navbar-search-option" data-searchurl="https://www.xsscape.cf/search/catalog/browse.aspx?CatalogContext=1&amp;Keyword=">
<span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Catalog</span>
</li>
<li class="rbx-navbar-search-option" data-searchurl="https://www.xsscape.cf/search/groups/search.aspx?val=">
<span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Groups</span>
</li>
<li class="rbx-navbar-search-option" data-searchurl="https://www.xsscape.cf/search/develop/library?CatalogContext=2&amp;Category=6&amp;Keyword=">
<span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Library</span>
</li>
</ul>
</div>
<div class="navbar-right rbx-navbar-right col-xs-4 col-sm-3">
<ul class="nav navbar-right rbx-navbar-icon-group">
<li id="navbar-setting" class="navbar-icon-item">
<a class="rbx-menu-item" data-toggle="popover" data-bind="popover-setting" data-viewport="#header">
<span class="icon-nav-settings" id="nav-settings"></span>
<span class="xsmall nav-setting-highlight hidden">0</span>
</a>
<div class="rbx-popover-content" data-toggle="popover-setting">
<ul class="dropdown-menu" role="menu">
<li>
<a class="rbx-menu-item" href="/account">
Settings
<span class="xsmall nav-setting-highlight hidden">0</span>
</a>
</li>
<li><a class="rbx-menu-item" href="" target="_blank">Help</a></li>
<li><a class="rbx-menu-item" data-behavior="logout" data-bind="../Logout.aspx">Logout</a></li>
</ul>
</div>
</li>
<li id="navbar-robux" class="navbar-icon-item">
<a id="nav-tix-icon" class="rbx-menu-item" data-toggle="popover" data-bind="popover-tix">
<span class="icon-nav-tix" id="nav-tix"></span>
<span class="rbx-text-navbar-right" id="nav-tix-amount"><?php echo number_format($usr['Tickets']); ?></span>
</a>
<div class="rbx-popover-content" data-toggle="popover-tix">
<ul class="dropdown-menu" role="menu">
<li><a href="/money" id="nav-robux-balance" class="rbx-menu-item"><?php echo number_format($usr['Tickets']); ?> Tickets</a></li>
<li><a href="../upgrade" class="rbx-menu-item">Get Tickets</a></li>
</ul>
</div>
</li>
<li class="rbx-navbar-right-search" data-toggle="toggle-search">
<a class="rbx-menu-icon rbx-menu-item">
<span class="icon-nav-search-white"></span>
</a>
</li>
</ul> </div>
<ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
<li>
<a class="nav-menu-title" href="https://www.xsscape.cf/games">Games</a>
</li>
<li>
<a class="nav-menu-title" href="https://www.xsscape.cf/catalog/">Catalog</a>
</li>
<li>
<a class="nav-menu-title" href="https://www.xsscape.cf/develop">Develop</a>
</li>
<li>
<a class="buy-robux nav-menu-title" href="https://www.xsscape.cf/upgrade">Upgrade</a>
</li>
</ul>
</div>
</div>

<div id="navigation" class="rbx-left-col" data-behavior="left-col">
<ul>
<li class="text-lead">
<a class="text-overflow" href="https://www.xsscape.cf/User.aspx?ID=<?php echo $usr['id']; ?>"><?php echo $usr['username']; ?></a>
</li>
<li class="rbx-divider"></li>
</ul>
<div class="rbx-scrollbar" data-toggle="scrollbar" onselectstart="return false;">
<ul>
<li><a href="https://www.xsscape.cf/home" id="nav-home"><span class="icon-nav-home"></span><span>Home</span></a></li>
<li><a href="https://www.xsscape.cf/User.aspx?ID=<?php echo $usr['id']; ?>" id="nav-profile"><span class="icon-nav-profile"></span><span>Profile</span></a></li>
<li>
<a href="https://www.xsscape.cf/my/messages/#!/inbox" id="nav-message" data-count="0">
<span class="icon-nav-message"></span><span>Messages</span>
<span class="notification-blue " title="0">0</span>
</a>
</li>
<li>
<a href="https://www.xsscape.cf/Friends.aspx" id="nav-friends" data-count="0">
<span class="icon-nav-friends"></span><span>Friends</span>
<span class="notification-blue " title="0">0</span>
</a>
</li>
<li>
<a href="/avatar" id="nav-character">
<span class="icon-nav-charactercustomizer"></span><span>Avatar</span>
</a>
</li>
<li>
<a href="https://www.xsscape.cf/inventory" id="nav-inventory">
<span class="icon-nav-inventory"></span><span>Inventory</span>
</a>
</li>
<li>
<a href="https://www.xsscape.cf/trade" id="nav-trade">
<span class="icon-nav-trade"></span><span>Trade</span>
</a>
</li>
<li>
<a href="https://www.xsscape.cf/groups" id="nav-group">
<span class="icon-nav-group"></span><span>Groups</span>
</a>
</li>
<li>
<a href="https://xsscape.cf/forum/" id="nav-forum">
<span class="icon-nav-forum"></span><span>Forum</span>
</a>
</li>
<li>
<a href="https://www.xsscape.cf/blog/" id="nav-blog">
<span class="icon-nav-blog"></span><span>Blog</span>
</a>
</li>
<li>
<a id="nav-shop" class="roblox-shop-interstitial">
<span class="icon-nav-shop"></span><span>Shop</span>
</a>
</li>
<li class="rbx-upgrade-now">
<a href="https://www.xsscape.cf/upgrade" class="btn-secondary-md" id="upgrade-now-button">Upgrade Now</a>
</li>
<li class="font-bold small">
Events
</li>
<li class="rbx-nav-sponsor" ng-non-bindable>
<a class="menu-item" href="https://www.roblox.com/sponsored/TrickOrTreatCountdown" title="TrickOrTreatCountdown">
<img src="https://images.rbxcdn.com/afb2cf5cfcf786eaf8af131529fc64f6" />
</a>
</li>
</ul>
</div>
</div>
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
                                        <div id="Leaderboard-Abp" class="abp leaderboard-abp">
<iframe name="Roblox_GameDetail_Top_728x90" allowtransparency="true" frameborder="0" height="110" scrolling="no" src="http://ftp.mmotraffic.com/creatives/Roblox/July_2017_Static/201706_728x90_Creative2_Theme-Park.jpg" width="728" data-js-adtype="iframead"></iframe>
                </div>
<div id="game-detail-page" class="row page-content  ">
    <div class="col-xs-12 section-content game-main-content">
        <div class="game-thumb-container">
            <script>
    var Roblox = Roblox || {};
    Roblox.Carousel = function () {
        var carouselId = "#carousel-game-details";
        var checkedForVideo = false;
        var isMobile = false;
        var initialize = function () {
            // acquire isMobile setting from DOM
            isMobile = $(carouselId).data('is-mobile');
            // set up carousel
            if(!isMobile) {
                $(carouselId).carousel({
                    interval: 6000,
                    pause: "hover"
                });
            } else {
                // do not cycle automatically on mobile because user might be playing video
                $(carouselId).carousel({
                    interval: false,
                    pause: "hover"
                });
            }
            // bindings
            $(carouselId)
                .on("slide.bs.carousel", function () {
                    // pause ALL the videos
                    Roblox.Carousel.pauseAllVideos();
                    // restart the carousel sliding
                    $(carouselId).carousel('cycle');
                })
                .hover(
                    function () {
                        $(this).addClass("hover");
                    },
                    function () {
                        $(this).removeClass("hover");
                    }
                );
            // hide controls when there's only one slide
            if ($(carouselId + " .item").length < 2) {
                $(carouselId).find(".carousel-control").css("display", "none");
            }
            $(document).on("playButton:gamePlayIntent", function () {
                // we pressed the play button - stop playing the video
                Roblox.Carousel.pauseAllVideos();
            });
            Roblox.Carousel.setUpYouTubeAPI();
            // retry thumbnails in carousel
            $(function () {
                $(carouselId + " .item span").loadRobloxThumbnails();
            });
        }
        var setUpYouTubeAPI = function () {
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        }
        var toggleVideo = function (state) {
            var div = $('.flex-video');
            if(div.length > 0){
                var iframe = div.find('iframe')[0].contentWindow;
                var func = state == 'hide' ? 'pauseVideo' : 'playVideo';
                iframe.postMessage('{"event":"command","func":"' + func + '","args":""}', '*');
            }
        }
        var pauseVideoAtIndex = function (idx) {
            if (rbxplayer && rbxplayer.length > 0 && !isMobile) {
                try {
                    rbxplayer[idx].pauseVideo();
                } catch (e) {
                    // tried to pause before player was ready
                }
            } else {
                return false;
            }
        }
        var playVideoAtIndex = function (idx) {
            if(rbxplayer && rbxplayer.length > 0 && rbxplayer[idx] && !isMobile) {
                rbxplayer[idx].playVideo();
                return true;
            } else {
                return false;
            }
        }
        var pauseAllVideos = function () {
            // pause ALL the videos
            if (rbxplayer && rbxplayer.length > 0) {
                var rbxplayerlen = rbxplayer.length;
                for (var i = 0; i < rbxplayerlen; i++) {
                    Roblox.Carousel.pauseVideoAtIndex(i);
                }
            }
        }
        var checkForVideo = function () {
            if(checkedForVideo) {
                return false;
            }
            var carousel = $(carouselId);
            carousel.find('.item').each(function (idx, val) {
                if ($(val).find('.flex-video').length > 0) {
                    carousel.carousel(idx);
                    carousel.carousel("pause");
                    var successfulPlay = Roblox.Carousel.playVideoAtIndex(0);
                    checkedForVideo = successfulPlay;
                    return false; // stop
                } else {
                    return true; // keep going
                }
            });
        }
        var onPlayerReady = function () {
            // This first moment get the video and auto-play it
            var autoplay = $(carouselId).data('is-video-autoplayed-on-ready');
            if (autoplay && !isMobile) {
                Roblox.Carousel.checkForVideo();
            }
        }
        var onPlayerPlaying = function () {
            // We are playing the video. Stop the carousel.
            var carousel = $(carouselId);
            carousel.carousel("pause");
        }
        return {
            initialize: initialize,
            toggleVideo: toggleVideo,
            checkForVideo: checkForVideo,
            setUpYouTubeAPI: setUpYouTubeAPI,
            onPlayerReady: onPlayerReady,
            onPlayerPlaying: onPlayerPlaying,
            pauseVideoAtIndex: pauseVideoAtIndex,
            playVideoAtIndex: playVideoAtIndex,
            pauseAllVideos: pauseAllVideos
        }
    }();
    // For YouTube API. Must be global.
    var rbxplayer = [];
    function onYouTubeIframeAPIReady() {
        var carouselId = "#carousel-game-details";
        $(carouselId).find(".flex-video").each(function (idx, el) {
            youTubeId = $(el).find("iframe").attr("id");
            rbxplayer[rbxplayer.length] = new YT.Player(youTubeId, {});
        });
        // listen for postMessage from YouTube
        $(window).on("message", function (e) {
            var originalData = e.originalEvent.data;
            // data is not JSON
            if (originalData.charAt(0) != "{") {
                return ;
            }
            var data = $.parseJSON(originalData);
            if (data.event == "onReady") {
                Roblox.Carousel.onPlayerReady();
            }
            if(data.event == "infoDelivery" && data.info.playerState && data.info.playerState == 1) {
                Roblox.Carousel.onPlayerPlaying();
            }
        });
    }
    $(document).ready(function () {
        Roblox.Carousel.initialize();
    });
</script>

<div id="carousel-game-details" class="carousel slide" data-ride="carousel" data-is-video-autoplayed-on-ready="true" data-is-mobile="false">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
            <div class="item active">
<span><img class="carousel-thumb" src="https://t7.rbxcdn.com/eec4113a979f62fb1afac95337c225ad"/></span>            </div>
            <div class="item ">
<span><img class="carousel-thumb" src="https://t4.rbxcdn.com/37327aaca517f4cbbe8ed700bb827f76"/></span>            </div>
            <div class="item ">
<span><img class="carousel-thumb" src="https://t7.rbxcdn.com/9d1b41d85684f4f01cd07cfb086fa193"/></span>            </div>
            <div class="item ">
<span><img class="carousel-thumb" src="https://t2.rbxcdn.com/cda0d10bfeb8c4ec9dce469648ee9c40"/></span>            </div>
            <div class="item ">
<span><img class="carousel-thumb" src="https://t7.rbxcdn.com/0b54c3779e472b0d1687492be985eaf6"/></span>            </div>
            <div class="item ">
<span><img class="carousel-thumb" src="https://tr.rbxcdn.com/54186db78590a0762cdbbc1a2eef3cda/768/432/Image/Png"/></span>            </div>
            <div class="item ">
<span><img class="carousel-thumb" src="https://tr.rbxcdn.com/0b31cb66f1759d36a736de969c51f068/768/432/Image/Png"/></span>            </div>
    </div>

<!-- Controls -->
    <a class="left carousel-control" href="#carousel-game-details" role="button" data-slide="prev">
        <span class="icon-carousel-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-game-details" role="button" data-slide="next">
        <span class="icon-carousel-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
        </div>
        <div class="game-calls-to-action">
            <div class="game-title-container">
                <h2 class="game-name" title="Natural Disaster Survival">Natural Disaster Survival</h2>
                <div class="game-creator"><span class="text-label">By</span> <a class="text-name" href="User.aspx?ID=1">Seven</a></div>
            </div>
            <div class="game-play-buttons" data-autoplay="false">
                            <div id="MultiplayerVisitButton" class="VisitButton VisitButtonPlayGLI" placeid="2" data-action="play" data-is-membership-level-ok="true">
                                <a class="btn-primary-lg">Play</a>
                            </div>

       <script type="text/javascript">
    Roblox = Roblox || {};
    Roblox.BCUpsellModal = function () {
        var resources = {
            //<sl:translate>
            title: "Builders Club Only",
            body: "This is a premium feature only available to our Builders Club members.",
            accept: "Upgrade Now"
            //</sl:translate>
        };
        var open = function () {
            var options = {
                titleText: Roblox.BCUpsellModal.Resources.title,
                bodyContent: Roblox.BCUpsellModal.Resources.body,
                footerText: "",
                acceptText: Roblox.BCUpsellModal.Resources.accept,
                declineText: Roblox.Resources.GenericConfirmation.No,
                acceptColor: Roblox.GenericConfirmation.green,
                onAccept: function () { window.location.href = '/premium/membership?ctx=bc-only-game'; },
                imageUrl: '43ac54175f3f3cd403536fedd9170c10.png'
            };
            Roblox.GenericConfirmation.open(
                options
            );
        };
        return {
            open: open,
            Resources:resources
        };
    } ();
</script>
<script type="text/javascript">
    var play_placeId = 189707;
    function fireEventAction(action) {
        RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
    }
    $(function () { $('.VisitButtonPlay').click(function () {play_placeId=$(this).attr('placeid');Roblox.CharacterSelect.placeid = play_placeId;Roblox.CharacterSelect.show();});$('#game-context-menu').on('click touchstart','.VisitButtonBuild', function () {RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Build']);EventTracker.fireEvent('GameLaunchAttempt_Unknown', 'GameLaunchAttempt_Unknown_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  }; play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); Roblox.Client.WaitForRoblox(function() { }); return false;});$('#game-context-menu').on('click touchstart','.VisitButtonEdit', function () {RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Edit']);EventTracker.fireEvent('GameLaunchAttempt_Unknown', 'GameLaunchAttempt_Unknown_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  }; play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); Roblox.Client.WaitForRoblox(function() { RobloxLaunch.StartGame('http://assetgame.roblox.com/Game/edit.ashx?PlaceID='+play_placeId+'&upload=', 'edit.ashx', 'https://www.roblox.com/Login/Negotiate.ashx', 'FETCH', true) }); return false;});$(document).on('CharacterSelectLaunch', function (event, genderTypeID) { if (genderTypeID == 3) { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent("GameLaunchAttempt_Unknown", "GameLaunchAttempt_Unknown_Plugin"); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); } } else { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent("GameLaunchAttempt_Unknown", "GameLaunchAttempt_Unknown_Plugin"); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); } }play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); Roblox.Client.WaitForRoblox(function() { RobloxLaunch.RequestGame('PlaceLauncherStatusPanel', play_placeId, genderTypeID); }); return false;});}());;
</script>
<script type="text/javascript">
    $(function() {
        Roblox.PlaceItemPurchase = new Roblox.ItemPurchase(function (obj) {
            $(".PurchaseButton[data-item-id="+ obj.AssetID +"]").each(function (index, htmlElem) {
                $("#rbx-place-purchase-required").hide();
                $("#MultiplayerVisitButton").show();
            });
        });
        if("False".toLowerCase() == "true") {
            $(function () {
                $("#rbx-place-purchase-required").on("click", function(e) {
                    Roblox.PlaceItemPurchase.openPurchaseVerificationView(this);
                    return false;
                });
            });
        }
    });
</script>

</div>
            <ul class="share-rate-favorite">
        <li class="favorite-button-container tooltip-container" data-toggle="tooltip" title="" data-original-title="Add to Favorites">
            <a>
                <span class="icon-favorite " data-toggle-url="/favorite/toggle" data-assetid="189707" data-isguest="false" data-signin-url="">
                </span>
                <span title="0" class="text-favorite favoriteCount 0" id="result">0</span>
            </a>
        </li>
        <li class="voting-panel body" data-asset-id="189707" data-total-up-votes="263785" data-total-down-votes="20689" data-vote-modal="" data-user-authenticated="False">
            <div class="loading"></div>
                <div class="vote-summary">
                    <div class="voting-details">
                        <div class="users-vote ">
                            <div class="upvote">
                                <span class="icon-like "></span>
                                <span id="vote-up-text" title="0" class="vote-text">N/A</span>
                            </div>
                            <div class="downvote">
                                <span id="vote-down-text" title="0" class="vote-text">N/A</span>
                                <span class="icon-dislike "></span>
                            </div>
                        </div>
                    </div>
                    <div class="visual-container">
                        <div class="background"></div>
                        <div class="percent"></div>
                    </div>
                </div>
        </li>
<script>
    $(function () {
        Roblox.Voting.Initialize();
        Roblox.Voting.Resources = {
            //<sl:translate>
            emailVerifiedTitle: "Verify Your Email",
            emailVerifiedMessage: "You must verify your email before you can vote. You can verify your email on the <a href='/my/account?confirmemail=1'>Account</a> page.",
            playGameTitle: "Play Game",
            playGameMessage: "You must play the game before you can vote on it.",
            useModelTitle: "Use Model",
            useModelMessage: "You must use this model before you can vote on it.",
            installPluginTitle: "Install Plugin",
            installPluginMessage: "You must install this plugin before you can vote on it.",
            buyGamePassTitle: "Buy Game Pass",
            buyGamePassMessage: "You must own this game pass before you can vote on it.",
            floodCheckThresholdMetTitle: "Slow Down",
            floodCheckThresholdMetMessage: "You're voting too quickly. Come back later and try again.",
            unknownProblemTitle: "Something Broke",
            unknownProblemMessage: "There was an unknown problem voting. Please try again.",
            guestUserTitle: "Login to Vote",
            guestUserMessage: "<div>You must login to vote.</div> <div>Please <a href='/newlogin?returnUrl=%2Fgames%2F189707%2FNatural-Disaster-Survival'>login or register</a> to continue.</div>",
            returnUrl: '/newlogin?returnUrl=%2Fgames%2F189707%2FNatural-Disaster-Survival',
            accountUnderOneDayTitle: "Voter Feedback",
            accountUnderOneDayMessage: "You will be able to vote on Games and Studio Models later, after you've had a chance to experience ROBLOX a bit more. Come back to this page in a couple days.",
            accept: "Verify",
            decline: "Cancel",
            login: "Login"
            //<sl:translate>
        };
    });
</script>
                <li class="social-media-share">
                </li><!-- .social-media-share -->
            </ul><!-- .share-rate-favorite-->
        </div>
    </div>

<div class="col-xs-12 rbx-tabs-horizontal" data-place-id="189707">
        <ul id="horizontal-tabs" class="nav nav-tabs" role="tablist">
            <li id="tab-about" class="rbx-tab tab-about active">
                <a class="rbx-tab-heading" href="#about">
                    <span class="text-lead">About</span>
                </a>
            </li>
            <li id="tab-store" class="rbx-tab tab-store">
                <a class="rbx-tab-heading" href="#store">
                    <span class="text-lead">Store</span>
                </a>
            </li>
                <li id="tab-leaderboards" class="rbx-tab tab-leaderboards">
                    <a class="rbx-tab-heading" href="#leaderboards">
                        <span class="text-lead">Leaderboards</span>
                    </a>
                </li>
            <li id="tab-game-instances" class="rbx-tab tab-game-instances">
                <a class="rbx-tab-heading" href="#game-instances">
                    <span class="text-lead">Servers</span>
                </a>
            </li>
        </ul>

    <div class="tab-content rbx-tab-content">
            <div class="tab-pane active" id="about">
                <div class="section game-about-container">
                    <h3>Description</h3>
                    <div class="section-content">
                        <p class="game-description linkify">Quickly, run around in circles! Your life depends on it!</p>
                        <ul class="game-stats-container">
                            <li class="game-stat">
                                <p class="text-label">Visits</p>
                                <p class="text-lead" title="0">N/A</p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Created</p>
                                <p class="text-lead">N/A</p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Updated</p>
                                <p class="text-lead">N/A</p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Max Players</p>
                                <p class="text-lead">N/A</p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Genre</p>
                                    <p class="text-lead">
                                        <a class="text-name" href="">All</a>
                                    </p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Allowed Gear types</p>
                                <p class="text-lead stat-gears">
        <span class="icon-nogear" data-toggle="tooltip" data-original-title="No Gear Allowed"></span>
                                </p>
                            </li>
                        </ul>
                        <div class="game-stat-footer">
                                    <span class="text-pastname game-copylocked-footnote">This game is copylocked</span>
                            <span class="game-report-abuse"><a class="text-report" href="">Report Abuse</a></span>
                        </div>
                    </div>
                </div>
    <div id="rbx-vip-servers" class="container-list" data-placeid="189707" data-universeid="65241" data-showshutdown data-slow-game-fps-threshold="15" data-private-server-name-max-length="50" data-private-server-name-error-text="The name of a VIP Server cannot be blank and can be no more than {0} characters." data-configure-base-url="/private-server/configure?privateServerId={0}" data-game-instances-base-url="/private-server/instance-list?universeId=65241" data-game-shutdown-url="/game-instances/shutdown" data-is-user-authenticated="False" data-instance-list-url="/private-server/instance-list-json" data-renew-url="/private-server/renew" data-avatar-headshot-enabled="true">
        <div class="container-header">
            <h3>VIP Servers</h3>
            <span class="tooltip-container" data-toggle="tooltip" data-original-title="VIP servers let you play this game privately with friends, clan members, or people you invite!">
                <span class="icon-moreinfo"></span>
            </span>
        </div>

      <div class="section-content create-server-banner">
                <div id="private-server-purchase-body-content" class="hidden">
                    <div class="private-server-purchase">
                        <div class="modal-list-item private-server-main-text">
                            Create a VIP Server for {0}?
                        </div>
                        <div class="modal-list-item">
                            <span class="text-label private-server-game-name">
                                Game Name
                            </span>
                            <span class="game-name">
                                Natural Disaster Survival
                            </span>
                        </div>
                        <div class="modal-list-item private-server-name-input">
                            <span class="text-label">Server Name</span>
                            <div class="form-group">
                                <input type="text" class="form-control input-field private-server-name" maxlength="50">
                            </div>
                            <div class="form-control-label private-server-name-error-message"></div>
                        </div>
                    </div>
                </div>
                <span class="btn-secondary-md btn-more rbx-vip-server-create" data-is-private-server="true" data-product-id="23083886" data-item-id="189707" data-item-name="Natural Disaster Survival" data-expected-price="0" data-expected-currency="2" data-seller-name="Seven" data-expected-seller-id="80254" data-continueshopping-url="" data-purchase-title-text="Create VIP Server" data-purchase-body-content="" data-purchase-url="/private-server/purchase" data-universe-id="65241" data-modal-field-validation-required="true" data-footer-text="Your balance after this transaction will be <span class='icon-robux-gray-16x16'></span>{0}. This is a subscription-based feature. It will auto-renew once a month until you cancel the subscription." name="CreatePrivateServer">Create VIP Server</span>
            <span class="create-server-banner-text">Play this game with friends and other people you invite.</span>
        </div>
        <div class="section tab-server-only">
        </div>
    </div>

<script>
    var Roblox = Roblox || {};
    Roblox.PrivateServers = Roblox.PrivateServers || {};
    //<sl:translate>
    Roblox.PrivateServers.RenewRecurringTitle = "Renew Private Server";
    Roblox.PrivateServers.RenewRecurringBody = "Are you sure you want to enable future payments for your private VIP version of "
    + "Natural Disaster Survival by Stickmasterluke?<br><br>This VIP Server will start renewing every month at "
    + "<span class=\"icon-robux-16x16\"></span><span class=\"text-robux\">FREE</span> until you cancel.";
    Roblox.PrivateServers.RenewRecurringAcceptText = "Renew";
    Roblox.PrivateServers.RenewRecurringDeclineText = "Cancel";
    Roblox.PrivateServers.UserProfileAbsoluteUrlPattern = "https://www.roblox.com/users/0/profile";
    //<sl:translate>
</script>

<div class="container-list badge-container">
        <div class="container-header">
            <h3>Game Badges</h3>
        </div>
        <ul class="badge-list">
                <li class="section-row badge-row ">
                    <div class="badge-image">
                        <a href="Survived-a-Disaster-item_id_66918518.html"><img src="https://images.rbxcdn.com/883aac4d965398ab718f92675c0bac3c.jpg" alt="Survived a Disaster"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Survived a Disaster</div>
                            <p class="para-overflow">
                                Congratulations. Unfortunately, one is not enough.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">42.3% (Moderate)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">61942</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">12708661</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row ">
                    <div class="badge-image">
                        <a href="Survived-10-Disasters-item_id_66918551.html"><img src="https://images.rbxcdn.com/ab1009b9359385b23d1d42e45b21d10f.jpg" alt="Survived 10 Disasters"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Survived 10 Disasters</div>
                            <p class="para-overflow">
                                Nice job, keep going!
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">18.7% (Hard)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">27328</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">4736334</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row ">
                    <div class="badge-image">
                        <a href="Survived-25-Disasters-item_id_66918611.html"><img src="https://images.rbxcdn.com/a5d134fc81326f4e7d4ca85770210f05.jpg" alt="Survived 25 Disasters"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Survived 25 Disasters</div>
                            <p class="para-overflow">
                                That is a good amount. You live to die another day.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">9.3% (Extreme)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">13676</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">2301455</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Survived-50-Disasters-item_id_66918640.html"><img src="https://images.rbxcdn.com/81aabde18a8bef2b9517296b143838c2.jpg" alt="Survived 50 Disasters"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Survived 50 Disasters</div>
                            <p class="para-overflow">
                                Jeeze. Not many people can say they have done the same.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">4.3% (Insane)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">6328</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">1123705</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Survived-100-Disasters-item_id_66918685.html"><img src="https://images.rbxcdn.com/bdbf049f0048ae7beb2b46c35056b946.jpg" alt="Survived 100 Disasters"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Survived 100 Disasters</div>
                            <p class="para-overflow">
                                This is definitely a feat worth boasting about.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">1.6% (Insane)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">2300</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">442336</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Survived-200-Disasters-item_id_66918716.html"><img src="https://images.rbxcdn.com/536bf22130ebee24852127401691b9ca.jpg" alt="Survived 200 Disasters"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Survived 200 Disasters</div>
                            <p class="para-overflow">
                                This badge is only for the most unstoppable players. Anyone with this badge is far beyond expert. I congratulate the few who actually achieve this badge.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">0.4% (Impossible)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">629</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">129527</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Survived-400-Disasters-item_id_66918795.html"><img src="https://images.rbxcdn.com/dd86ab07879125112ebdb540e336f1e0.jpg" alt="Survived 400 Disasters"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Survived 400 Disasters</div>
                            <p class="para-overflow">
                                Okay. You won. What more do you want from me? Seriously, 400 times? You people are insane. Again... Nice job to the few who venture this far, to endure the torment of disaster after disaster.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">0.1% (Impossible)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">108</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">30245</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Chance-item_id_66918848.html"><img src="https://images.rbxcdn.com/cfd51705a12959112dc716f4b1266540.jpg" alt="Chance"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Chance</div>
                            <p class="para-overflow">
                                Struck by the last bolt of lightning. What are the chances?
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">0.5% (Impossible)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">684</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">171254</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="High-Survive-Five-item_id_66918916.html"><img src="https://images.rbxcdn.com/561470996e878256c67240b02d9d60ae.jpg" alt="High Survive Five!"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">High Survive Five!</div>
                            <p class="para-overflow">
                                Survive five rounds in a row.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">6.9% (Extreme)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">10143</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">2124089</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Surfs-Up-item_id_66918948.html"><img src="https://images.rbxcdn.com/35a5eb0412e1b76933d6284440e48223.jpg" alt="Surf's Up!"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Surf&#39;s Up!</div>
                            <p class="para-overflow">
                                Survive a tsunami on the map Surf Central.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">5.4% (Extreme)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">7842</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">1818684</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Barn-Fire-item_id_66918988.html"><img src="https://images.rbxcdn.com/dd73c5c813ba80db7fcdefee56053800.jpg" alt="Barn Fire"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Barn Fire</div>
                            <p class="para-overflow">
                                What&#39;s that Lassie? The barn is on fire?!?!
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">4.3% (Insane)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">6295</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">1315974</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Close-Call-item_id_66919023.html"><img src="https://images.rbxcdn.com/eab1eaf1735b2fd41b9459f52b7a61a5.jpg" alt="Close Call"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Close Call</div>
                            <p class="para-overflow">
                                Survive a disaster with 10hp or less.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">18.4% (Hard)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">26864</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">3580502</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="House-Flood-item_id_66919105.html"><img src="https://images.rbxcdn.com/d128dc8be33d46048c9e7f59678e65b3.jpg" alt="House Flood"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">House Flood</div>
                            <p class="para-overflow">
                                Survive a flood at your happy home.
Any clever comments on a house being flooded?
Caution: floor slippery when wet.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">3.1% (Insane)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">4574</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">596263</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="GET-TO-THE-CHOPPA-item_id_66919155.html"><img src="https://images.rbxcdn.com/c487ec530e28e2203349dc513d190de3.jpg" alt="GET TO THE CHOPPA!"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">GET TO THE CHOPPA!</div>
                            <p class="para-overflow">
                                Get to the choppa.. and survive a thunderstorm.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">3.6% (Insane)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">5214</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">1141136</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Tornado-vs-Trailer-Park-item_id_66956295.html"><img src="https://images.rbxcdn.com/2d6f0bf36ca765371ee0389e5bb2b135.jpg" alt="Tornado vs. Trailer Park"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Tornado vs. Trailer Park</div>
                            <p class="para-overflow">
                                Survive it.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">3.7% (Insane)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">5442</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">1192044</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Survive-Power-2-Multi-Disaster-item_id_454956782.html"><img src="https://images.rbxcdn.com/33e2191ae10827ae52e734f4f137cc97.jpg" alt="Survive Power 2 Multi-Disaster"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Survive Power 2 Multi-Disaster</div>
                            <p class="para-overflow">
                                Survive a power 2 Multi-Disaster.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">4.9% (Insane)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">7138</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">34467</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Survive-Power-3-Multi-Disaster-item_id_454956889.html"><img src="https://images.rbxcdn.com/8f49ba254e24f341def4babcb870c82f.jpg" alt="Survive Power 3 Multi-Disaster"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Survive Power 3 Multi-Disaster</div>
                            <p class="para-overflow">
                                Survive a power 3 Multi-Disaster.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">0.8% (Impossible)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">1115</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">4810</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Survive-Power-4-Multi-Disaster-item_id_454957071.html"><img src="https://images.rbxcdn.com/73dcdef6c45a2a9397197fa8a2a1661b.jpg" alt="Survive Power 4 Multi-Disaster"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Survive Power 4 Multi-Disaster</div>
                            <p class="para-overflow">
                                Survive a power 4 Multi-Disaster.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">0.2% (Impossible)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">245</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">1350</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Survive-Power-5-Multi-Disaster-item_id_454957253.html"><img src="https://images.rbxcdn.com/f7f0e8dce00cc4f578f526d457fc4565.jpg" alt="Survive Power 5 Multi-Disaster"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Survive Power 5 Multi-Disaster</div>
                            <p class="para-overflow">
                                Survive a power 5 Multi-Disaster.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">0.1% (Impossible)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">123</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">542</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href="Survive-Power-6-Multi-Disaster-item_id_454957314.html"><img src="https://images.rbxcdn.com/5673b4d657a6a15a08e91847afe8d8a7.jpg" alt="Survive Power 6 Multi-Disaster"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Survive Power 6 Multi-Disaster</div>
                            <p class="para-overflow">
                                Survive a power 6 Multi-Disaster.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">0.0% (Impossible)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">45</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">204</div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="section-row badge-row badge-see-more-row">
                    <div class="badge-image">
                        <a href=""><img src="https://images.rbxcdn.com/766227d0e47b295b59c22600a9f5427a.jpg" alt="Survive Power 7 Multi-Disaster"></a>
                    </div>
                    <div class="badge-content">
                        <div class="badge-data-container">
                            <div class="badge-name">Survive Power 7 Multi-Disaster</div>
                            <p class="para-overflow">
                                Survive a power 7 Multi-Disaster.
                            </p>
                        </div>
                        <ul class="badge-stats-container">
                            <li>
                                <div class="text-label">Rarity</div>
                                <div class="badge-stats-info">0.0% (Impossible)</div>
                            </li>
                            <li>
                                <div class="text-label">Won Yesterday</div>
                                <div class="badge-stats-info">68</div>
                            </li>
                            <li>
                                <div class="text-label">Won Ever</div>
                                <div class="badge-stats-info">378</div>
                            </li>
                        </ul>
                    </div>
                </li>
            <li>
                <span>These badges are just for show.</span>
            </li>
        </ul>
    </div>

<div>
    <div id="AjaxCommentsContainer" class="comments-container" data-asset-id="189707" data-total-collection-size="" data-is-user-authenticated="False" data-signin-url="https://www.roblox.com/newlogin?returnUrl=%2Fgames%2F189707%2FNatural-Disaster-Survival">
        <div class="container-header">
            <h3>Comments</h3>
        </div>
        <div class="section-content AddAComment">
            <div class="comment-form">
                <form class="form-horizontal ng-pristine ng-valid" role="form">
                    <div class="form-group">
                        <textarea class="form-control input-field rbx-comment-input blur" placeholder="Write a comment!" rows="1"></textarea>
                        <div class="rbx-comment-msgs">
                            <span class="rbx-comment-error text-error"></span>
                            <span class="rbx-comment-count small"></span>
                        </div>
                    </div>
                    <button type="button" class="btn-secondary-md rbx-post-comment">Post Comment</button>
                </form>
            </div>
            <div class="comments vlist">
            </div>
            <div class="comments-item-template">
                <div class="comment-item list-item">
                    <div class="comment-user list-header">
                            <div class="Avatar avatar avatar-headshot-md" data-user-id="comment-author-id" data-image-size="small"></div>
                    </div>
                    <div class="comment-body list-body">
                        <a class="text-name">username</a>
                        <p class="comment-content list-content"> text </p>
                        <span class="xsmall text-date-hint">4 hours ago</span>
                    </div>
                    <div class="comment-controls">
                        <a class="rbx-comment-report-link" href="abusereport/comment_id__CommentID_RedirectUrl__PageURL.html" title="Report Abuse"><span class="icon-flag"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="AjaxCommentsMoreButtonContainer" class="ajax-comments-more-button-container">
        <button type="button" class="btn-control-sm rbx-comments-see-more hidden">See More</button>
    </div>
</div>
<script>
    $(document).ready(function () {
        Roblox.Comments.Resources = {
            //<sl:translate>
            defaultMessage: 'Write a comment!',
            noCommentsFound: 'No comments found.',
            moreComments: 'More comments',
            sorrySomethingWentWrong: 'Sorry, something went wrong.',
            charactersRemaining: ' characters remaining',
            emailVerifiedABTitle: 'Verify Your Email',
            emailVerifiedABMessage: "You must verify your email before you can comment. You can verify your email on the <a class='text-link' href='https://www.roblox.com/my/account?confirmemail=1'>Account</a> page.",
            linksNotAllowedTitle: 'Links Not Allowed',
            linksNotAllowedMessage: 'Comments should be about the item or place on which you are commenting. Links are not permitted.',
            accept: 'Verify',
            decline: 'Cancel',
            tooManyCharacters: 'Too many characters!',
            tooManyNewlines: 'Too many newlines!'
            //</sl:translate>
        };
        Roblox.Comments.Limits =
        [
            {
                limit: '10',
                character: "\n",
                message: Roblox.Comments.Resources.tooManyNewlines
            },
            {
                limit: '200',
                character: undefined,
                message: Roblox.Comments.Resources.tooManyCharacters
            }
        ];
        Roblox.Comments.FilterIsEnabled = true;
        Roblox.Comments.FilterRegex = "(([a-zA-Z0-9-]+\\.[a-zA-Z]{2,4}[:\\#/\?]+)|([a-zA-Z0-9]\\.[a-zA-Z0-9-]+\\.[a-zA-Z]{2,4}))";
        Roblox.Comments.FilterCleanExistingComments = false ;
    Roblox.Comments.initialize();
    });
</script>
            </div>
            <div class="tab-pane store" id="store">
<div id="rbx-game-passes" class="container-list game-dev-store game-passes">
    <div class="container-header">
        <h3>Passes for this game</h3>
    </div>
<ul id="rbx-passes-container" class="hlist store-cards gear-passes-container">
            <span>Not avaliable.</span>
            </ul>
</div>
<script>
    $(function () {
        Roblox.GamePassJSData = { };
        Roblox.GamePassJSData.PlaceID = 189707;
        var purchaseConfirmationCallback = function (obj) {
            var originalContainer = $('.PurchaseButton[data-item-id=' + obj.AssetID + ']').parent('.store-card-caption');
            originalContainer.find('.rbx-purchased').hide();
            originalContainer.find('.rbx-item-buy').show();
        };
        Roblox.GamePassItemPurchase = new Roblox.ItemPurchase(purchaseConfirmationCallback);
        $("#store #rbx-game-passes").on("click", ".PurchaseButton", function (e) {
            Roblox.PlaceProductPromotionItemPurchase.openPurchaseVerificationView($(this), 'game-pass');
        });
        $("#store #rbx-game-passes .btn-more").on("click", function (e) {
            $("#rbx-game-passes #rbx-passes-container").toggleClass("collapsed");
        });
    });
</script>
<input name="__RequestVerificationToken" type="hidden" value="VngcU4XQDyvQTWRMMkk0z1GLA6BX095Xv7bWqV8R5JRdw8_S1At8-6Ctiy2Z0Uyzo3npRWY-KbwZTJnxTfbnElqS1BY1"/>
<script>
    // From DisplayProductPromotions
    $(function() {
        Roblox.PlaceProductPromotion.Resources = {
            //<sl:translate>
            anErrorOccurred: 'An error occurred, please try again.'
            , youhaveAdded: "You have added "
            , toYourGame: " to your game, "
            , youhaveRemoved: "You have removed "
            , fromYourGame: " from your game."
            , ok: "OK"
            , success: "Success!"
            , error: "Error"
            , sorryWeCouldnt: "Sorry, we couldn't remove the item from your game. Please try again."
            , notForSale: "This item is not for sale."
            , rent: "Rent"
            //<sl:translate>
        };
        var purchaseConfirmationCallback = function (obj) {
            var originalContainer = $('.PurchaseButton[data-item-id=' + obj.AssetID + ']').parent('.store-card-caption');
            originalContainer.find('.rbx-purchased').hide();
            originalContainer.find('.rbx-item-buy').show();
        };
        Roblox.PlaceProductPromotionItemPurchase = new Roblox.ItemPurchase(purchaseConfirmationCallback);
        Roblox.PlaceProductPromotion.PlaceID = 189707;
        $("#store").on("click", ".icon-delete", function(e) {
            var promoId = $(this).data('delete-promotion-id');
            Roblox.PlaceProductPromotion.DeleteGear(promoId);
        });
        $("#store #rbx-game-gear").on("click", ".PurchaseButton", function (e) {
            Roblox.PlaceProductPromotionItemPurchase.openPurchaseVerificationView($(this), 'game-gear');
        });
        $("#store #rbx-game-gear .btn-more").on("click", function (e) {
            $("#rbx-game-gear .rbx-gear-container").toggleClass("collapsed");
        });
    });
</script>
<div id="DeleteProductPromotionModal" class="PurchaseModal">
    <div id="simplemodal-close" class="simplemodal-close">
        <a></a>
    </div>
    <div class="titleBar" style="text-align: center">
    </div>
    <div class="PurchaseModalBody">
        <div class="PurchaseModalMessage">
            <div class="PurchaseModalMessageImage">
                <div class="thumbs-up-green">
                </div>
            </div>
            <div class="PurchaseModalMessageText">
            </div>
        </div>
        <div class="PurchaseModalButtonContainer">
            <div class="ImageButton btn-blue-ok-sharp simplemodal-close"></div>
        </div>
        <div class="PurchaseModalFooter"></div>
    </div>
</div>
            </div>
            <div class="tab-pane" id="leaderboards">
                    <div class="col-md-6">
<div id="rbx-leaderboard-container-player" class="section rbx-leaderboard-container rbx-leaderboard-player" data-associated-leaderboard-more="rbx-leaderboard-btn-player">
    <div class="rbx-leaderboard-data" data-distributor-target-id="65241" data-max="20" data-rank-max="4" data-target-type="0" data-time-filter="1" data-player-id="-1" data-clan-id="-1"></div>
    <div class="rbx-leaderboard-item-template hidden">
        <div class="rbx-leaderboard-item">
            <div class="rank"></div>
            <div class="avatar avatar-headshot-sm"></div>
            <div class="name-and-group"></div>
            <div class="font-fold points"></div>
        </div>
    </div>
    <div class="rbx-popover-content" data-toggle="popover-leaderboard-player">
        <ul class="dropdown-menu" role="menu">
            <li>
                <a data-time-filter="0">Today</a>
            </li>
            <li>
                <a data-time-filter="1">Past Week</a>
            </li>
            <li>
                <a data-time-filter="2">Past Month</a>
            </li>
            <li>
                <a data-time-filter="3">All Time</a>
            </li>
        </ul>
    </div>
    <div class="rbx-leaderboard-header">
        <h3>Players</h3>
        <div class="rbx-leaderboard-controls">
            <div class="rbx-leaderboard-filter">
                <span class="rbx-leaderboard-filtername">Past Week</span>
                <a class="rbx-menu-item" data-toggle="popover" data-bind="popover-leaderboard-player" data-original-title="" title="" data-viewport=".rbx-leaderboard-player" data-placement="left"><span class="icon-sorting" id="rbx-leaderboard-popover-player"></span></a>
            </div>
        </div>
    </div>
    <div class="rbx-leaderboard-my"></div>
    <div class="section-content rbx-leaderboard-items">
        <div class="rbx-leaderboard-more-container rbx-leaderboard-btn-player" data-associated-leaderboard="rbx-leaderboard-player">
            <button type="button" class="btn-control-sm rbx-leaderboard-see-more hidden">
                See More
            </button>
        </div>
        <img class="spinner" src="https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="loading..."/>
    </div>
</div>
    <script>
        var Roblox = Roblox || {};
        Roblox.Leaderboard = Roblox.Leaderboard || {};
        Roblox.Leaderboard.Resources = {};
        //<sl:translate>
        Roblox.Leaderboard.Resources.ErrorLoading = "Error loading rows.";
        Roblox.Leaderboard.Resources.Loading = "Loading...";
        Roblox.Leaderboard.Resources.GoGetPoints = "You are not yet ranked for this time period. Go earn some Points!";
        //</sl:translate>
    </script>
                    </div>
                    <div class="col-md-6">
<div id="rbx-leaderboard-container-clan" class="section rbx-leaderboard-container rbx-leaderboard-clan" data-associated-leaderboard-more="rbx-leaderboard-btn-clan">
    <div class="rbx-leaderboard-data" data-distributor-target-id="65241" data-max="20" data-rank-max="4" data-target-type="1" data-time-filter="1" data-player-id="-1" data-clan-id="-1"></div>
    <div class="rbx-leaderboard-item-template hidden">
        <div class="rbx-leaderboard-item">
            <div class="rank"></div>
            <div class="avatar "></div>
            <div class="name-and-group"></div>
            <div class="font-fold points"></div>
        </div>
    </div>
    <div class="rbx-popover-content" data-toggle="popover-leaderboard-clan">
        <ul class="dropdown-menu" role="menu">
            <li>
                <a data-time-filter="0">Today</a>
            </li>
            <li>
                <a data-time-filter="1">Past Week</a>
            </li>
            <li>
                <a data-time-filter="2">Past Month</a>
            </li>
            <li>
                <a data-time-filter="3">All Time</a>
            </li>
        </ul>
    </div>
    <div class="rbx-leaderboard-header">
        <h3>Clans</h3>
        <div class="rbx-leaderboard-controls">
            <div class="rbx-leaderboard-filter">
                <span class="rbx-leaderboard-filtername">Past Week</span>
                <a class="rbx-menu-item" data-toggle="popover" data-bind="popover-leaderboard-clan" data-original-title="" title="" data-viewport=".rbx-leaderboard-clan" data-placement="left"><span class="icon-sorting" id="rbx-leaderboard-popover-clan"></span></a>
            </div>
        </div>
    </div>
    <div class="rbx-leaderboard-my"></div>
    <div class="section-content rbx-leaderboard-items">
        <div class="rbx-leaderboard-more-container rbx-leaderboard-btn-clan" data-associated-leaderboard="rbx-leaderboard-clan">
            <button type="button" class="btn-control-sm rbx-leaderboard-see-more hidden">
                See More
            </button>
        </div>
        <img class="spinner" src="https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="loading..."/>
    </div>
</div>

<script>
        var Roblox = Roblox || {};
        Roblox.Leaderboard = Roblox.Leaderboard || {};
        Roblox.Leaderboard.Resources = {};
        //<sl:translate>
        Roblox.Leaderboard.Resources.ErrorLoading = "Error loading rows.";
        Roblox.Leaderboard.Resources.Loading = "Loading...";
        Roblox.Leaderboard.Resources.GoGetPoints = "You are not yet ranked for this time period. Go earn some Points!";
        //</sl:translate>
    </script>
                    </div>
                <script>
                    // lazy load
                    $(".rbx-tab a[href='#leaderboards']").on('shown.bs.tab', function(e) {
                        // e.target newly activated tab
                        // e.relatedTarget previous active tab
                        Roblox.Leaderboard.init();
                    });
                </script>
            </div>
            <div class="tab-pane game-instances" id="game-instances">
    <div id="rbx-running-games" class="container-list" data-placeid="189707" data-showshutdown data-avatar-headshot-enabled="true">
        <div class="container-header">
            <h3>Running Games</h3>
            <span class="btn-fixed-width btn-control-xs btn-more rbx-running-games-refresh">Refresh</span>
        </div>
        <ul id="rbx-game-server-item-container" class="section rbx-game-server-item-container">
        </ul>
        <div class="rbx-running-games-footer">
                <button type="button" class="btn-control-md btn-full-width rbx-running-games-load-more hidden">Load More</button>
        </div>
        <div class="rbx-game-server-template">
            <li class="section-content rbx-game-server-item">
                <div class="section-header">
                    <div class="link-menu rbx-game-server-menu"></div>
                </div>
                <div class="section-left rbx-game-server-details">
                    <div class="rbx-game-status rbx-game-server-status">x of y players max</div>
                    <div class="rbx-game-server-alert">
                        <span class="icon-remove"></span>Slow Game
                    </div>
                    <a class="btn-full-width btn-control-xs rbx-game-server-join" href="#" data-placeid>Join</a>
                </div>
                <div class="section-right rbx-game-server-players">
                </div>
            </li>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>
<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer">
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>
        </div>
        <div class="clear"></div>
        <div id="GenericModalButtonContainer" class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK</a>
        </div>
    </div>
</div>
<div id="ItemPurchaseAjaxData" data-has-currency-service-error="False" data-currency-service-error-message="" data-authenticateduser-isnull="True" data-user-balance-robux="0" data-user-balance-tickets="0" data-user-bc="0" data-continueshopping-url="https://www.roblox.com/games/189707/Natural-Disaster-Survival" data-imageurl="http://t7.rbxcdn.com/1691d7aa4546166343b2fcc4ed5061ba" data-alerturl="http://images.rbxcdn.com/b7353602bbf9b927d572d5887f97d452.svg" data-insufficentfundsurl="http://images.rbxcdn.com/b80339ddf867ccfe6ab23a2c263d8000.png" data-builderscluburl="http://images.rbxcdn.com/ae345c0d59b00329758518edc104d573.png">
</div>
<div id="ProcessingView" style="display:none">
    <div class="ProcessingModalBody">
        <p style="margin:0px"><img src="https://images.rbxcdn.com/116db03ed7027c242f773e70a4ed2e68.png" alt="Processing..."/></p>
        <p style="margin:7px 0px">Processing Transaction</p>
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
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="ae345c0d59b00329758518edc104d573.png"/>
            <div id="BCMessageDiv" class="BCMessage Message">
                Builders Club membership is required to play in this place.
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="premium/membership_ctx_bc-only-item.html" class="btn-primary btn-large">Upgrade Now</a>
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
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>
                <div id="Skyscraper-Adp-Right" class="abp abp-container right-abp">
<iframe name="Roblox_GameDetail_Right_160x600" allowtransparency="true" frameborder="0" height="600" scrolling="no" src="http://ftp.mmotraffic.com/creatives/Roblox/July_2017_Static/201706_160x600_Creative1_Snowboard.jpg" width="160" data-js-adtype="iframead"></iframe>
                </div>
        </div>
            </div> 
<footer class="container-footer">
    <div class="footer">
        <ul class="row footer-links">
                <li class="col-4 col-xs-2 footer-link">
                    <a href="" class="text-footer-nav roblox-interstitial" target="_blank">
                        About Us
                    </a>
                </li>
                <li class="col-4 col-xs-2 footer-link">
                    <a href="" class="text-footer-nav roblox-interstitial" target="_blank">
                        Jobs
                    </a>
                </li>
            <li class="col-4 col-xs-2 footer-link">
                <a href="" class="text-footer-nav" target="_blank">
                    Blog
                </a>
            </li>
            <li class="col-4 col-xs-2 footer-link">
                <a href="" class="text-footer-nav roblox-interstitial" target="_blank">
                    Parents
                </a>
            </li>
            <li class="col-4 col-xs-2 footer-link">
                <a href="" class="text-footer-nav roblox-interstitial" target="_blank">
                    Help
                </a>
            </li>
            <li class="col-4 col-xs-2 footer-link">
                <a href="" class="text-footer-nav privacy" target="_blank">
                    Privacy
                </a>
            </li>
        </ul>
        <p class="text-footer footer-note">
            Xscape, "Play and Create", characters, logos, names, and all related indicia are trademarks of <a target="_blank" href="corp.roblox.com" class="text-link roblox-interstitial">Xscape</a>, ©2021.
            Patents pending. Xscape is not sponsored, authorized or endorsed by ROBLOX or any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex, and no resemblance to the products of these companies is intended.
            Use of this site signifies your acceptance of the <a href="info/terms-of-service.html" target="_blank" class="text-link">Terms and Conditions</a>.
        </p>
    </div>
</footer>

</div> 
    <script type="text/javascript">function urchinTracker() {}</script>

<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-game-launch-interface-enabled="True" data-is-protocol-handler-launch-enabled="True" data-is-user-logged-in="True" data-os-name="Windows" data-protocol-name-for-client="XscapePlayer" data-protocol-name-for-studio="roblox-studio" data-protocol-url-includes-launchtime="true" data-protocol-detection-enabled="true">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="padding:20px 0;">
            <img data-delaysrc="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress" src="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" class="src-replaced">
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
            <img data-delaysrc="https://dtjatwg9u87ct.cloudfront.net/content/images/shortlogo.png" width="90" height="90" alt="R" src="https://dtjatwg9u87ct.cloudfront.net/content/images/shortlogo.png" class="src-replaced">
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                Xscape is now loading. Get ready to play!
            </p>
            <div class="ph-startingdialog-spinner-row">
                <img data-delaysrc="https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" width="82" height="24" src="https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" class="src-replaced">
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
            <img data-delaysrc="https://dtjatwg9u87ct.cloudfront.net/content/images/shortlogo.png" width="90" height="90" alt="R" src="https://dtjatwg9u87ct.cloudfront.net/content/images/shortlogo.png" class="src-replaced">
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                You're moments away from getting into the game!
            </p>
            <div>
                <button type="button" class="btn btn-primary-md" id="ProtocolHandlerInstallButton">
                    Download and Install Xscape
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
            <img data-delaysrc="https://images.rbxcdn.com/7c8d7a39b4335931221857cca2b5430b.png" alt="Launch Application" src="https://images.rbxcdn.com/7c8d7a39b4335931221857cca2b5430b.png" class="src-replaced">
        in the dialog box above to join games faster in the future!
    </p>
</div>

<div id="videoPrerollPanel" style="display:none">
        <div id="videoPrerollTitleDiv">
            Gameplay sponsored by:
        </div>
        <div id="content">
            <video id="contentElement" style="width:0; height:0;">
        </video></div>
        <div id="videoPrerollMainDiv"></div>
        <div id="videoPrerollCompanionAd">
            
        </div>
        <div id="videoPrerollLoadingDiv">
            Loading <span id="videoPrerollLoadingPercent">0%</span> - <span id="videoPrerollMadStatus" class="MadStatusField">Starting game...</span><span id="videoPrerollMadStatusBackBuffer" class="MadStatusBackBuffer"></span>
            <div id="videoPrerollLoadingBar">
                <div id="videoPrerollLoadingBarCompleted">
                </div>
            </div>
        </div>
        <div id="videoPrerollJoinBC">
            <span>Get more with Builders Club!</span>
            <a href="/upgrade" target="_blank" class="btn-medium btn-primary" id="videoPrerollJoinBCButton">Join Builders Club</a>
        </div>
    </div>   
    <script type="text/javascript">
        $(function () {
            var videoPreRollDFP = Roblox.VideoPreRollDFP;
            if (videoPreRollDFP) {
                var customTargeting = Roblox.VideoPreRollDFP.customTargeting;
                videoPreRollDFP.showVideoPreRoll = false;
                videoPreRollDFP.loadingBarMaxTime = 33000;
                videoPreRollDFP.videoLoadingTimeout = 11000;
                videoPreRollDFP.videoPlayingTimeout = 41000;
                videoPreRollDFP.videoLogNote = "BuildersClub";
                videoPreRollDFP.logsEnabled = true;
                videoPreRollDFP.excludedPlaceIds = "32373412";
                videoPreRollDFP.adUnit = "/1015347/VideoPreroll";
                videoPreRollDFP.adTime = 15;
                videoPreRollDFP.isSwfPreloaderEnabled = false;
                videoPreRollDFP.isPrerollShownEveryXMinutesEnabled = true;
                videoPreRollDFP.isAgeTargetingEnabled = true;
                videoPreRollDFP.isAgeOrSegmentTargetingEnabled = true;
                customTargeting.userAge = "36";
                customTargeting.userAgeOrSegment = "36";
                customTargeting.userGender = "Male";
                customTargeting.gameGenres = "";
                customTargeting.environment = "Production";
                customTargeting.adTime = "15";
                customTargeting.PLVU = false;
                $(videoPreRollDFP.checkEligibility);
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
                <a href=""><div class="RevisedCharacterSelectSignup"></div></a>
                <a class="HaveAccount" href="">I have an account</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkRobloxInstall() {
             return RobloxLaunch.CheckRobloxInstall('https://www.xsscape.cf/install/download.aspx');
    }
</script>
    <div id="InstallationInstructions" class="" style="display:none;">
        <div class="ph-installinstructions">
            <div class="ph-modal-header">
                    <span class="icon-close simplemodal-close"></span>
                    <h3 class="title">Thanks for playing Xscape</h3>
            </div>
            <div class="modal-content-container"> 
                <div class="ph-installinstructions-body ">


        <div class="ph-install-step ph-installinstructions-step1-of4">
            <h1>1</h1>
            <p class="larger-font-size">Click <strong>XscapePlayerLauncher.exe</strong> to run the Xscape installer, which just downloaded via your web browser.</p>
            <img width="230" height="180" data-delaysrc="https://images.rbxcdn.com/8b0052e4ff81d8e14f19faff2a22fcf7.png" src="https://images.rbxcdn.com/8b0052e4ff81d8e14f19faff2a22fcf7.png" class="src-replaced">
        </div>
        <div class="ph-install-step ph-installinstructions-step2-of4">
            <h1>2</h1>
            <p class="larger-font-size">Click <strong>Run</strong> when prompted by your computer to begin the installation process.</p>
            <img width="230" height="180" data-delaysrc="https://images.rbxcdn.com/4a3f96d30df0f7879abde4ed837446c6.png" src="https://images.rbxcdn.com/4a3f96d30df0f7879abde4ed837446c6.png" class="src-replaced">
        </div>
        <div class="ph-install-step ph-installinstructions-step3-of4">
            <h1>3</h1>
            <p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed Xscape.</p>
            <img width="230" height="180" data-delaysrc="https://images.rbxcdn.com/6e23e4971ee146e719fb1abcb1d67d59.png" src="https://images.rbxcdn.com/6e23e4971ee146e719fb1abcb1d67d59.png" class="src-replaced">
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
                The Xscape installer should download shortly. If it doesn’t, start the <a href="#" class="text-link" onclick="Roblox.ProtocolHandlerClientInterface.startDownload(); return false;">download now.</a>
            </div>
        </div>
    </div>
<div class="InstallInstructionsImage" data-modalwidth="970" style="display:none;"></div>

<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" name="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<script type="text/javascript" src="https://js.rbxcdn.com/e2cb6070c58f829226a04307a3f3e28a.js.gzip"></script>

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

<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" name="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<script type="text/javascript" src="https://js.rbxcdn.com/e2cb6070c58f829226a04307a3f3e28a.js.gzip"></script>

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


<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
            <a href="" id="roblox-confirm-btn"><span></span></a>
            <a href="" id="roblox-decline-btn"><span></span></a>
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

<div id="modal-confirmation" class="modal-confirmation" data-modal-type="confirmation">
    <div id="modal-dialog" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span>
                </button>
                <h5 class="modal-title"></h5>
            </div>

            <div class="modal-body">
                <div class="modal-top-body">
                    <div class="modal-message"></div>
                    <div class="modal-image-container roblox-item-image" data-image-size="medium" data-no-overlays="" data-no-click="">
                        <img class="modal-thumb" alt="generic image">
                    </div>
                </div>
                <div class="modal-btns">
                    <a href="" id="confirm-btn"><span></span></a>
                    <a href="" id="decline-btn"><span></span></a>
                </div>
                <div class="loading modal-processing">
                    <img class="loading-default" src="https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="Processing...">
                </div>
            </div>
            <div class="modal-footer text-footer">

            </div>
        </div>
    </div>
    <script type="text/javascript">
        Roblox = Roblox || {};
        Roblox.Resources = Roblox.Resources || {};

        //<sl:translate>
        Roblox.Resources.Dialog = {
            yes: "Yes",
            No: "No",
            Confirm: "Confirm",
            Cancel: "Cancel"
        };
        //</sl:translate>
    </script>
</div>





<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.jsConsoleEnabled = false;
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


    
    <script type="text/javascript" src="https://js.rbxcdn.com/d849afd828ec9246ad457b640dbb54b3.js.gzip"></script>
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
    <script type="text/javascript" src="https://js.rbxcdn.com/d4404c91bcb1526085efb283d4ac1e64.js"></script>

</body>
</html>