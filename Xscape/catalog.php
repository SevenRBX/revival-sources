<?php
require_once 'site.php';
require_once ('content/functions.php');
if(!$logged){
die('<META http-equiv=refresh content=0;URL=/>');
exit;
}

if(!isset($_GET['Keyword'])) {
    $search = "";
}else{
    $search = $_GET['Keyword'];
}

// Search
if($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($_POST["search"] && $_POST["type"] && $_POST["submit"]) {
				$search = $ep->remove($_POST["search"]);
				$type = $ep->remove($_POST['type']);
				header('Location: /catalog?c='.$type.'&Keyword='.$search);
		}
}
?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml"><!-- MachineID: WEB316 --><head id="ctl00_Head1"><script async="" src="https://sb.scorecardresearch.com/beacon.js"></script><script async="" type="text/javascript" src="https://web.archive.org/web/20160729010519/https://www.googletagservices.com/tag/js/gpt.js"></script><script type="text/javascript" src="https://js.rbxcdn.com/c14a216bd7773e7b637b4e6c3c2e619d.js"></script><script type="text/javascript" src="https://js.rbxcdn.com/4acfdab2e6131feb84d783765b82a888.js"></script><script type="text/javascript" src="https://js.rbxcdn.com/8db82e6d725b907e91441b849cc35e47.js"></script><script type="text/javascript" src="https://js.rbxcdn.com/3368571372da9b2e1713bb54ca42a65a.js"></script>
<link rel="stylesheet" type="text/css" href="/_static/css/banner-styles.css?v=omkqRugM">
<link rel="stylesheet" type="text/css" href="/_static/css/iconochive.css?v=qtvMKcIJ">
<!-- End Wayback Rewrite JS Include -->
<title>
	Catalog - Xscape
</title>
<link rel='stylesheet' href='https://xsscape.cf/content/css/CSS10.css' />

<link rel="stylesheet" href="https://static.rbxcdn.com/css/page___c9c0bf9807c51dab7f7d436a5ffc59df_m.css/fetch">

<link href="favicon.ico" rel="icon"/><meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true">
<meta charset="UTF-8">
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
<script type="text/javascript" src="https://js.rbxcdn.com/379cff48ae23ba8f6ba4ce43ff9630f7.js"></script>

    <script type="text/javascript">

        var _gaq = _gaq || [];

            window.GoogleAnalyticsDisableRoblox2 = true;
        _gaq.push(['b._setAccount', 'UA-486632-1']);
        _gaq.push(['b._setCampSourceKey', 'rbx_source']);
        _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
        _gaq.push(['b._setCampContentKey', 'rbx_campaign']);

            _gaq.push(['b._setDomainName', 'roblox.com']);

            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
                _gaq.push(['b._setPageGroup', 1, 'Catalog']);

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
                    _gaq.push(['c._setPageGroup', 1, 'Catalog']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
<script type="text/javascript" src="https://js.rbxcdn.com/ba66c746b10acb5bbeeabe79d67be25d.js"></script>
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
</script><script type="text/javascript" src="https://js.rbxcdn.com/e67b413c9056ca52e49b129e8d332909.js"></script>
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
<body id="rbx-body" class="" data-performance-relative-value="0.5" data-internal-page-name="Catalog" data-send-event-percentage="0.01"><!-- BEGIN WAYBACK TOOLBAR INSERT -->
<style type="text/css">
body {
  margin-top:0 !important;
  padding-top:0 !important;
  /*min-width:800px !important;*/
}
</style>
    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm"></div>
<div id="image-retry-data" data-image-retry-max-times="10" data-image-retry-timer="1500">
</div>
<div id="http-retry-data" data-http-retry-max-timeout="8000" data-http-retry-base-timeout="1000">
</div>
    <script type="text/javascript">Roblox.XsrfToken.setToken('upXO7djbhpRz');</script>

    <script type="text/javascript">
        if (top.location != self.location) {
            top.location = self.location.href;
        }
    </script>

<style type="text/css">

</style>
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="xj9HtQjXH8ZVepVfpf/jrCEMP+40Wjavq1tbiFkJXhlGb0Vp7mH3CW/R2FQK9TLK/+/QY7iH0K1j4Jm/y+aL7JUviOnJwZaDd4L+lTo5On/MUQY55rgIqNGoATXb2IBal9KxDi4m1Z8XFhL4mH1HFrwv/V71+0RFYk3wI4YDdiHqv9HKyZ/m6ASe4vf9mVY0AXh+NnBF5okzqcIBJTVLdlnxuYrI7rgQH5h525v56+d4VXluSPXC5wqvZAZVCrIaJ/IvQg==">
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
(window.Sys && Sys._Application && Sys.Observer)||document.write('<script type="text/javascript" src="/ScriptResource.axd?d=uHIkleVeDJf4xS50Krz-yA3kt4iEPLwQOcXDJXuiLb543xmSxgoBWyWb-0CTRrqRXPsCyYHFJoMX6TPqspOUhmvwRxW7JGKByJCuSKPDJkedBK4vZ68d-hQEQYwPVMjKP6tsCULlkgnx_6P0HwSsu1ZPvc01&t=72e85ccd"><\/script>');//]]>
</script>

<script src="https://ajax.aspnetcdn.com/ajax/4.5.1/1/MicrosoftAjaxWebForms.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
(window.Sys && Sys.WebForms)||document.write('<script type="text/javascript" src="/ScriptResource.axd?d=Jw6tUGWnA15YEa3ai3FadCEDqusVaOyrhfy39auVd1FmNPcggz_w8ujNbCmSe3d-g1mfv3ai8xe7-2Ze2qr2BxMVxfFYswV1Y4rdnmWJF2uUrOEaDJiBEGKAzXrJcfxb_Yfc2xbZMZu9pLQP2d6b-KwvlK01&t=72e85ccd"><\/script>');//]]>
</script>

<script src="https://www.roblox.com/ScriptResource.axd?d=Bbmef4yOVt1yHOT0buOyik8HIuAx_EPvoX7uAaRIa_L7Hd4Pf-RVFSWmVaV3KKJdHB7ipJFYT1nRNKh4Lbs20DtLDUOlzj8rg929uvk3CT2O5IPU0ma3qr2PozWZ0HzHxj3Lw7B-As2rKB6OnkIwcnmeV60PYcWcMo4gB7jCdXN7k_NZUhIaYOXSpouSqCruQROialVLhCTAy0nOkZiFtEZYl6s1" type="text/javascript"></script>
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="2BFC4FE3">
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


<style type="text/css">
    #Body {
        padding: 5px;
    }
</style>



<div id="catalog" data-empty-search-enabled="true">
<div class="header" style="height:60px;">
        <div style="float:left;">
            <h1><a href="/catalog">Catalog</a></h1>
        </div>
    <div class="CatalogSearchBar">
			<form name="" method="post">
        <input id="keywordTextbox" name="search" type="text" class="translate text-box text-box-small">
        <div style="height:23px;border:1px solid #a7a7a7;padding:2px 2px 0px 2px;margin-right:6px;float:left;position:relative">
            <!--[if IE7]>
                <div style="height:19px;width:131px;position:absolute;top:2px;left:2px;border:1px solid white"></div>
                <div style="height:19px;width:15px;position:absolute;top:2px;right:2px;border:1px solid #aaa"></div>
            <![endif]-->
            <select id="categoriesForKeyword" name="type">
                    <option value="all">All Categories</option>
                    <option value="tshirt">T-Shirt</option>
                    <option value="pants">Pants</option>
                    <option value="shirt">Shirt</option>
                    <option value="hat">Hat</option>
                    <option value="gear">Gear</option>
            </select>
        </div>
				<style>
				.button {
				    height: 25px;
				    line-height: 24px;
				    font-size: 13px;
				    padding: 0 7px;
				    background-image: url(https://static.rbxcdn.com/images/StyleGuide/btn-control-large-tile.png);
						border: 1px solid #777;
padding: 0 6px;
color: #000;
text-decoration: none;
background-color: #ccc;
text-align: center;
font-weight: normal;
cursor: pointer;
background-position: top;
display: inline-block;
				}
				</style>
        <input type="submit" name="submit" href="#" class="button" value="Search">
			</form>
    </div>
</div>


    <div class="left-nav-menu divider-right">



    <div class="browseDropdownHeader"></div>

<div id="dropdown" class="splashdropdownsplashdropdown roblox-hierarchicaldropdown">
    <ul id="dropdownUl" class="clearfix">

            <li class="subcategories" data-delay="never">
                <a href="?c=all" data-category="0">Featured</a>
                <ul class="slideOut" style="top: -1px; display: none;" hover="false">
                    <li class="slideHeader" style="width: 134.011px;"><span>Featured Types</span></li>
                        <li style="width: 134.011px;"><a href="?c=all" data-types="0" data-category="0">All Featured Items</a></li>
                        <li style="width: 134.011px;"><a href="?c=hat" data-types="9" data-category="0">Featured Hats</a></li>
                        <li style="width: 134.011px;"><a href="?c=gear" data-types="5" data-category="0">Featured Gear</a></li>
                        <li style="width: 134.011px;"><a href="?c=face" data-types="10" data-category="0">Featured Faces</a></li>
                        <li style="width: 134.011px;"><a href="?c=package" data-types="11" data-category="0">Featured Packages</a></li>
                </ul>
            </li>

            <li class="subcategories"><a href="?c=all" class="assetTypeFilter collectiblesLink" data-category="2">Collectibles</a>
                <ul class="slideOut" style="top: -32px; display: none;">
                    <li class="slideHeader"><span>Collectible Types</span></li>
                        <li><a href="?c=all" data-types="2" data-category="2">All Collectibles</a></li>
                        <li><a href="?c=face" data-types="10" data-category="2">Collectible Faces</a></li>
                        <li><a href="?c=hat" data-types="9" data-category="2">Collectible Hats</a></li>
                        <li><a href="?c=gear" data-types="5" data-category="2">Collectible Gear</a></li>
                </ul>
            </li>

            <li class="slideHeader DropdownDivider divider-bottom" data-delay="ignore"></li>

            <li data-delay="always">
                <a href="?c=all" data-category="1">All Categories</a>
            </li>

            <li class="subcategories">
                <a href="?c=all" data-category="3">Clothing</a>
                <ul class="slideOut" style="top: -97px; display: none;">
                    <li class="slideHeader"><span>Clothing Types</span></li>
                        <li><a href="?c=all" data-types="3" data-category="3">All Clothing</a></li>
                        <li><a href="?c=hat" data-types="9" data-category="3">Hats</a></li>
                        <li><a href="?c=shirt" data-types="12" data-category="3">Shirts</a></li>
                        <li><a href="?c=tshirt" data-types="13" data-category="3">T-Shirts</a></li>
                        <li><a href="?c=pants" data-types="14" data-category="3">Pants</a></li>
                        <li><a href="?c=package" data-types="11" data-category="3">Packages</a></li>
                </ul>
            </li>

                                    </ul>
</div>
<div id="legend" class="">
    <div class="header expanded" id="legendheader">
        <h3>Legend</h3>
    </div>
    <div id="legendcontent" style="overflow: hidden; ">
        <img src="https://images.rbxcdn.com/4fc3a98692c7ea4d17207f1630885f68.png" style="margin-left: -13px">
        <div class="legendText"><b>Builders Club Only</b><br>
        Only purchasable by Builders Club members.</div>

        <img src="https://images.rbxcdn.com/793dc1fd7562307165231ca2b960b19a.png" style="margin-left: -13px">
        <div class="legendText"><b>Limited Items</b><br>
        Owners of these discontinued items can re-sell them to other users at any price.</div>

        <img src="https://images.rbxcdn.com/d649b9c54a08dcfa76131d123e7d8acc.png" style="margin-left: -13px">
        <div class="legendText"><b>Limited Unique Items</b><br>
        A limited supply originally sold by Xscape. Each unit is labeled with a serial number. Once sold out, owners can re-sell them to other users.
        </div>
    </div>
</div>
    </div>
    <div class="right-content divider-left">
        <h2>Featured Items on Xscape</h2>
        <div style="clear:both;"></div>




        <?php
            if(!isset($_GET['c'])) {
                $cat = "hat";
            }else{
                $cat = $_GET['c'];
            }
            if(!isset($_GET['page'])) {
                $page = 1;
            }else{
							if($_GET['page'] < 1){
								$page = 1;
							}else{
								$page = $_GET['page'];
							}
            }

            $resultsperpage = 12;

            if($cat == "all"){
            $result = $db->prepare("SELECT count(*) FROM `catalog` WHERE name LIKE ?");
						$result->execute(["%$search%"]);
					}else{
						$result = $db->prepare("SELECT count(*) FROM `catalog` WHERE name LIKE ? AND type = ?");
						$result->execute(["%$search%",$cat]);
					}
            $itemcount = $result->fetchColumn();

						if(!$itemcount){
							if($cat == "hat") $type5 = "Hats";
							if($cat == "shirt") $type5 = "Shirts";
							if($cat == "tshirt") $type5 = "T-Shirts";
							if($cat == "pants") $type5 = "Pants";
							if($cat == "gear") $type5 = "Gears";
							if($cat == "package") $type5 = "Packages";
							if($cat == "face") $type5 = "Faces";

							echo('<span>No '.$type5.' was found.</span>');
						}

            $numberofpages = ceil($itemcount / $resultsperpage);

            $thispagefirstresult = ($page - 1) * $resultsperpage;
						if($cat == "all"){
            $stmt = $db->prepare("SELECT * FROM catalog WHERE name LIKE ? ORDER by id DESC LIMIT ".$thispagefirstresult.",".$resultsperpage);
            $stmt->execute(["%$search%"]);
					}else{
						$stmt = $db->prepare("SELECT * FROM catalog WHERE name LIKE ? AND type = ? ORDER by id DESC LIMIT ".$thispagefirstresult.",".$resultsperpage);
            $stmt->execute(["%$search%",$cat]);
					}
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              $itemName = $ep->remove($row['name']);
              $itemId = $ep->remove($row['id']);
              $itemName = $ep->remove($row['name']);
              $itemPrice = $row['price'];
              $itemThumbnail = $row['thumbnail'];
              $itemUpdated = $get->updated($row['updated']);
              $itemCurrency = $row['currency'];

							$getSales = $db->prepare("SELECT sales FROM sales WHERE item = ?");
							$getSales->execute([$itemId]);
							$SalesCount = $getSales->fetch();

							if(!$SalesCount){
							  $sales = 0;
							}else{
							  $sales = number_format($SalesCount['sales']);
							}

              $creator = $db->prepare("SELECT username, id FROM `accounts` WHERE id = ?");
              $creator->execute([$row['creator']]);
              $creatorInfo = $creator->fetch();
              $creatorName = $ep->remove($creatorInfo['username']);
              $creatorId = $ep->remove($creatorInfo['id']);

                echo('
                <div class="CatalogItemOuter BigOuter">
                <div class="SmallCatalogItemView BigView">
                <div class="CatalogItemInner BigInner">
                        <div class="roblox-item-image image-large" data-item-id="'.$itemId.'" data-image-size="large">
                            <div class="item-image-wrapper">
                                <a href="/Item.aspx?ID='.$itemId.'">
                                    <img title="'.$itemName.'" alt="'.$itemName.'" class="original-image " src="'.$itemThumbnail.'">');
																		if($row['created'] == date('Y-m-d')){ echo('<img src="https://images.rbxcdn.com/b84cdb8c0e7c6cbe58e91397f91b8be8.png" alt="New">'); }
                                echo('</a>
                            </div>
                        </div>

                    <div id="textDisplay">
                    <div class="CatalogItemName notranslate"><a class="name notranslate" href="/Item.aspx?ID='.$itemId.'" title="'.$itemName.'">'.$itemName.'</a></div>
                        ');
                        if($itemPrice == 0){
                        echo('<div><span class="NotAPrice">Free</span></div>');
                        }
                        if($itemPrice < 0){
                        echo('<div><span class="NotAPrice">Offsale</span></div>');
                        }
                        if($itemPrice > 0){
                          if($itemCurrency == 2){
                             echo('<div class="robux-price"><span class="tickets notranslate">'.number_format($itemPrice).'</span></div>');
                          }else{
                             echo('<div class="tix-price"><span class="robux notranslate">'.number_format($itemPrice).'</span></div>');
                          }
                        }
                    echo('</div>
                        <div class="CatalogHoverContent">
                            <div><span class="CatalogItemInfoLabel">Creator:</span> <span class="HoverInfo notranslate"><a href="/User.aspx?ID='.$creatorId.'">'.$creatorName.'</a></span></div>
                            <div><span class="CatalogItemInfoLabel">Updated:</span> <span class="HoverInfo">'.$itemUpdated.'</span></div>
                            <div><span class="CatalogItemInfoLabel">Sales:</span> <span class="HoverInfo notranslate">'.$sales.'</span></div>
                            <div><span class="CatalogItemInfoLabel">Favorited:</span> <span class="HoverInfo">0 times</span></div>
                        </div>
                </div>
                </div>
                </div>');
                    }
				if($itemcount){
                    ?>
        <div class="PagingContainerDivTop">
						<?php
						if(!isset($_GET['page'])) {
                $page = 1;
            }else{
                $page = $_GET['page'];
            }
						$prevpage = $page - 1;
						$nextpage = $page + 1;
						?>
					<?php if($page == "1"){ }else{ ?><a href="?<?php if(isset($_GET['c'])){ echo('c='.$cat.'&'); } ?>page=<?=$prevpage?>"><?php } ?><span <?php if($page == "1"){ ?>class="pager previous disabled"<?php }else{ echo('class="pager previous"'); } ?>></span><?php if($page !== 1){ ?></a><?php } ?>
					<span class="page text"> <?=$page?> of <?=$numberofpages?>
					<span class="paging_pagenums_container"></span> </span>
					<?php if($page != $numberofpages){ ?><a href="?<?php if(isset($_GET['c'])){ echo('c='.$cat.'&'); } ?>page=<?=$nextpage?>"><?php } ?><span <?php if($page == $numberofpages){ ?>class="pager next disabled"<?php }else{ echo('class="pager next"'); } ?>></span><?php if($page != $numberofpages){ ?></a><?php } ?>
				</div>
			<?php } ?>
    </div>
    <div style="clear:both"></div>
</div>

<script type="text/javascript">
    $(function () {
        Roblox.require(['Pages.Catalog', 'Pages.CatalogShared', 'Widgets.HierarchicalDropdown'], function (catalog) {
            var pagestate = { "Category": 1, "CurrencyType": 0, "SortType": 0, "SortAggregation": 3, "SortCurrency": 0, "AssetTypes": null, "Gears": null, "Genres": null, "Keyword": null, "PageNumber": 1, "Creator": null, "PxMin": 0, "PxMax": 0 };
            catalog.init(pagestate, 1);
            Roblox.Widgets.HierarchicalDropdown.init();
            if(Roblox.CatalogValues.ContainerID)
            {
                $('#' + Roblox.CatalogValues.ContainerID).on(Roblox.CatalogShared.CatalogLoadedViaAjaxEventName, null, null, Roblox.CatalogShared.handleCatalogLoadedViaAjaxEvent);
            }
        });

            Roblox.CatalogValues = Roblox.CatalogValues || {};
                    Roblox.CatalogValues.CatalogContext = 1;
    });

</script>
<!--[if IE]>
    <script type="text/javascript">
        $(function () {
            $('.BigInner').live('mouseenter', function () {
                $(this).parents('.BigView').css('z-index', '6');
                $('.SmallView').css('z-index', '1');
            });
            $('.BigInner').live('mouseleave', function () {
                $(this).parents('.BigView').css('z-index', '1');
                $('.SmallView').css('z-index', '6');
            });
            $('.SmallInner').live('mouseenter', function () {
                $('.SmallView').css('z-index', '1');
                $(this).parents('.SmallCatalogItemView').css('z-index', '6');
            });
            $('.SmallInner').live('mouseleave', function () {
                $('.SmallView').css('z-index', '1');
                $(this).parents('.SmallCatalogItemView').css('z-index', '1');
            });
        });
    </script>
<![endif]-->



    <script type="text/javascript">
        $(function(){
            if(true) {
                Roblox.AdsHelper.AdRefresher.globalCreateNewAdEnabled = true;
                Roblox.AdsHelper.AdRefresher.adRefreshRateInMilliseconds = 3000;

                Roblox.CatalogValues.CatalogContentsUrl = "/catalog/contents";
                Roblox.CatalogValues.ContainerID = "catalog";

                Roblox.require(['Pages.CatalogShared'], function () {
                    History.Adapter.bind(window, "statechange", function () {
                        Roblox.CatalogShared.handleURLChange(History.getState().data);
                    });
                });
                History.replaceState({ clickTargetID: "catalog", url: window.location.href }, document.title, window.location.href);
            }
        });
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




    <style>
        #win_firefox_install_img .activation {
        }

        #win_firefox_install_img .installation {
            width: 869px;
            height: 331px;
        }

        #mac_firefox_install_img .activation {
        }

        #mac_firefox_install_img .installation {
            width: 250px;
        }

        #win_chrome_install_img .activation {
        }

        #win_chrome_install_img .installation {
        }

        #mac_chrome_install_img .activation {
            width: 250px;
        }

        #mac_chrome_install_img .installation {
        }
    </style>
    <div id="InstallationInstructions" class="modalPopup blueAndWhite" style="display:none;overflow:hidden">
        <a id="CancelButton2" onclick="return Roblox.Client._onCancel();" class="ImageButton closeBtnCircle_35h ABCloseCircle"></a>
        <div style="padding-bottom:10px;text-align:center">
            <br><br>
        </div>
    </div>


<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<script type="text/javascript" src="https://js.rbxcdn.com/c55982be90aee588f799ba26ede12190.js"></script>

<script type="text/javascript">
    Roblox.Client._skip = '/install/unsupported.aspx';
    Roblox.Client._CLSID = '';
    Roblox.Client._installHost = '';
    Roblox.Client.ImplementsProxy = false;
    Roblox.Client._silentModeEnabled = false;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';
    Roblox.Client._eventStreamLoggingEnabled = false;


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
            RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent('GameLaunchAttempt_iOS', 'GameLaunchAttempt_iOS_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  };
            Roblox.Client.ResumeTimer(eval(continuation));
        }

</script>


<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-game-launch-interface-enabled="False" data-is-protocol-handler-launch-enabled="False" data-is-user-logged-in="False" data-os-name="iOS" data-protocol-name-for-client="roblox-player" data-protocol-name-for-studio="roblox-studio" data-protocol-url-includes-launchtime="true" data-protocol-detection-enabled="true">
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
                Roblox.VideoPreRoll.videoLogNote = "NotWindows";
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
                <a href="https://www.roblox.com/?returnUrl=https%3A%2F%2Fwww.roblox.com%2Fcatalog%2FDefault.aspx"><div class="RevisedCharacterSelectSignup"></div></a>
                <a class="HaveAccount" href="https://www.roblox.com/newlogin?returnUrl=https%3A%2F%2Fwww.roblox.com%2Fcatalog%2FDefault.aspx">I have an account</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkRobloxInstall() {
                 window.location = 'https://www.roblox.com/install/unsupported.aspx'; return false;
    }

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
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer">
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
    </noscript>
</body></html>
