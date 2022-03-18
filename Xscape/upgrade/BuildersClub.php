<?php
require_once ('../site.php');
require_once ('../content/functions.php');
error_reporting(0);
if(!$logged){
die('<META http-equiv=refresh content=0;URL=/>');
exit;
}
?>
<!DOCTYPE html>
<html>
<!-- MachineID: WEB529 -->
<head id="ctl00_ctl00_Head1"><title>
	Builders Club - Xscape
</title>
<link rel='stylesheet' href='https://xsscape.cf/content/css/CSSMain.css' />

<link rel='stylesheet' href='https://static.rbxcdn.com/css/page___5e340a637183a0d3e92f15ad04285831_m.css/fetch' />

<link href="../favicon.ico" rel="icon" />
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



        <noscript><div class="alert-info"><h5>Please enable Javascript to use all the features on this site.</h5></div></noscript>

        <div id="BodyWrapper" class="">
                        <div id="RepositionBody">
                            <div id="Body" class="body-width">
<div id="BCPageContainer">
	<div id="UserDataInfo" data-auth="false" data-active-bc="false"></div>
	<div class="header">
		<span><h1>Upgrade to Xscape Builders Club</h1></span>
	</div>

        <div class="left-column">
		<table cellspacing="0" border="0">
			<thead class="product-title">
				<tr>
					<td class="center-bold">
						<h2 class="product-space">Free</h2>
						<img data-attribute="free" src="https://images.rbxcdn.com/77add140640c3388e6c9603bc5983846.png" alt="free"/>
					</td>
					<td class="center-bold">
						<h2 class="product-space">Classic</h2>
                        <img data-attribute="classic" src="https://images.rbxcdn.com/ba707f47bb20a1f4804da461fb5d3c31.png" alt=" bc"/>
					</td>
					<td class="center-bold">
						<h2 class="product-space">Turbo</h2>
                        <img data-attribute="turbo" src="https://images.rbxcdn.com/d7eb3ed186e351d99ce8c11503675721.png" alt="tbc"/>
					</td>
					<td class="center-bold">
						<h2 class="product-space">Outrageous</h2>
                        <img data-attribute="outrageous" src="https://images.rbxcdn.com/ca1d0aef06c5fc06a2d8b23aea5e20d2.png" alt="obc"/>
					</td>
				</tr>
			</thead>

                        <tbody class="product-summary summary-big">
			<tr>
				<td class="divider-top">
					<span class="product-description">Daily ROBUX</span>
					<span class="nbc-product">R$15</span>
				</td>
				<td class="divider-top bc-product ">
					R$35
				</td>
				<td class="divider-top tbc-product 		emphasis
">
					R$60
				</td>
			    <td class="divider-top obc-product 		emphasis
">
			        R$90
			    </td>
			</tr>

                       <tr>
				<td class="divider-top">
					<span class="product-description">Visit Robux</span>
					<span class="nbc-product">R$15</span>
				</td>
				<td class="divider-top bc-product ">
					R$20
				</td>
				<td class="divider-top tbc-product 		emphasis
">
					R$35
				</td>
			    <td class="divider-top obc-product 		emphasis
">
			        R$50
			    </td>
			</tr>

              <tr>
				<td class="divider-top">
					<span class="product-description">Create Groups</span>
					<span class="nbc-product">No</span>
				</td>
				<td class="divider-top bc-product ">
					10
				</td>
				<td class="divider-top tbc-product ">
					20
				</td>
			    <td class="divider-top obc-product ">
			        100!
			    </td>
			</tr>

             <tr>
				<td class="divider-top">
					<span class="product-description">Username Changes</span>
					<span class="nbc-product">R$100</span>
				</td>
				<td class="divider-top bc-product ">
					1 Free
				</td>
				<td class="divider-top tbc-product ">
					10 Free
				</td>
			    <td class="divider-top obc-product ">
			        Unlimited Free
			    </td>
			</tr>

                <tr>
				<td class="divider-top">
					<span class="product-description">Exclusive Virtual Hat</span>
					<span class="nbc-product">No</span>
				</td>
				<td class="divider-top bc-product ">
					Every Month
				</td>
				<td class="divider-top tbc-product ">
					Every Month
				</td>
			    <td class="divider-top obc-product ">
			        Every Month
			    </td>
			</tr>

            <tr>
				<td class="divider-top">
					<span class="product-description">Catalog Discount</span>
					<span class="nbc-product">No</span>
				</td>
				<td class="divider-top bc-product ">
					10%
				</td>
				<td class="divider-top tbc-product ">
					25%
				</td>
			    <td class="divider-top obc-product ">
			        50%
			    </td>
			</tr>
                    <tr>
                <td colspan="4">There are more benefits if you server boost.</td>
            </tr>
	</tbody>

        <tbody class="product-grid">
        <tr>
            <td class="product-cell divider-left">
                <div class="product-nbc divider-bottom"></div>
            </td>
                <td class="product-cell divider-left">
                    <div class="product-cell">
                        	<div class="product-text">
		<h3>Monthly</h3>
	</div>
                        <a data-pid="1" data-rank="BC" data-duration="Monthly" class="btn-medium btn-primary product-button">R$350</a>
                    </div>
                </td>
                <td class="product-cell divider-left">
                    <div class="product-cell">
                        	<div class="product-text">
		<h3>Lifetime</h3>
	</div>
                        <a data-pid="34" data-rank="TBC" data-duration="Monthly" class="btn-medium btn-primary product-button">R$750</a>
                    </div>
                </td>
                <td class="product-cell divider-left">
                    <div class="product-cell">
                        	<div class="product-text">
		<h3>Lifetime</h3>
	</div>
                        <a data-pid="28" data-rank="OBC" data-duration="Monthly" class="btn-medium btn-primary product-button">R$1500</a>
                    </div>
                </td>
        </tr>
    </tbody>

      <tbody class="product-summary summary-small">
			<tr>
				<td class="divider-top">
					<span class="product-description">Ad Free</span>
					<span class="nbc-product">No</span>
				</td>
				<td class="divider-top bc-product 		emphasis
">
					Yes
				</td>
				<td class="divider-top tbc-product 		emphasis
">
					Yes
				</td>
			    <td class="divider-top obc-product 		emphasis
">
			        Yes
			    </td>
			</tr>
			<tr>
				<td class="divider-top">
					<span class="product-description">Sell Stuff</span>
					<span class="nbc-product">No</span>
				</td>
				<td class="divider-top bc-product 		emphasis
">
					Yes
				</td>
				<td class="divider-top tbc-product 		emphasis
">
					Yes
				</td>
			    <td class="divider-top obc-product 		emphasis
">
			        Yes
			    </td>
			</tr>
			<tr>
				<td class="divider-top">
					<span class="product-description">Virtual Hat</span>
					<span class="nbc-product">No</span>
				</td>
				<td class="divider-top bc-product 		emphasis
">
					Yes
				</td>
				<td class="divider-top tbc-product 		emphasis
">
					Yes
				</td>
			    <td class="divider-top obc-product 		emphasis
">
			        Yes
			    </td>
			</tr>
			<tr>
				<td class="divider-top">
					<span class="product-description">Bonus Gear</span>
					<span class="nbc-product">No</span>
				</td>
				<td class="divider-top bc-product 		emphasis
">
					Yes
				</td>
				<td class="divider-top tbc-product 		emphasis
">
					Yes
				</td>
			    <td class="divider-top obc-product 		emphasis
">
			        Yes
			    </td>
			</tr>
			<tr>
				<td class="divider-top">
					<span class="product-description">BC Beta Features</span>
					<span class="nbc-product">No</span>
				</td>
				<td class="divider-top bc-product 		emphasis
">
					Yes
				</td>
				<td class="divider-top tbc-product 		emphasis
">
					Yes
				</td>
			    <td class="divider-top obc-product 		emphasis
">
			        Yes
			    </td>
			</tr>
			<tr>
				<td class="divider-top">
					<span class="product-description">Trade System</span>
					<span class="nbc-product">No</span>
				</td>
				<td class="divider-top bc-product 		emphasis
">
					Yes
				</td>
				<td class="divider-top tbc-product 		emphasis
">
					Yes
				</td>
			    <td class="divider-top obc-product 		emphasis
">
			        Yes
			    </td>
			</tr>
        	</tbody>
		</table>
	</div>

        <div class="right-column">
<div id="RightColumnWrapper">
    <div class="cell cellDivider">
        You can also server boost and get more BC benefits! <a href='https://discord.gg/a9ddC2tRQV'>Join here</a></a></span>
    </div>
     <div class="cell cellDivider">
        <h3>Get ROBUX</h3>
        <p>ROBUX is the main currency on Xscape. You can use it to customize your avatar, buy gamepasses and buy builders club. You do not have to pay for ROBUX and you can earn it through playing games, winning competitions and selling items.</p>
        <p>
            <a href="/Upgrade/Robux.aspx" class="btn-medium btn-primary">Get ROBUX</a>
        </p>
    </div>

    <div class="cell cellDivider">
        <h3>Game Codes</h3>
        <a href=""><img alt="ROBLOX Gamecards" src="https://images.rbxcdn.com/863c65342816d665de28411cf47cde42.png"/></a>
        <div class="gameCardControls">
            <div class="gameCardButton">
                <a href="" class="btn-small btn-primary">Where to Find</a>
            </div>
            <div><a href="gamecard.html" class="redeemLink">Redeem Code</a></div>
            <div style="clear: both"></div>
        </div>
    </div>
    <div class="cell">
        <h3>Parents</h3>
        <p>Learn more about Builders Club and how we help <a href="corp_subdomain/parents.html" class="roblox-interstitial">keep kids safe.</a></p>
        <h3>Cancellation</h3>
        <p>You can turn off membership auto renewal at any time before the renewal date and you will continue to receive Builders Club privileges for the remainder of the currently paid period. To turn off membership auto renewal, please click the 'Cancel Membership Renewal button' on the <a href="my/account_tab_billing.html" class="roblox-interstitial">Billing</a> tab of the Settings page and confirm the cancellation.</p>
    </div>
</div>

</div>
<div style="clear:both"></div>
                            </div>
                        </div>
                    </div>

        <?php
        require_once '../content/functions.php';
        $get->footer();
        ?>
</body>
</html>
