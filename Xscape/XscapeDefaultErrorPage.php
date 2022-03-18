<?php
require_once 'site.php';
require_once ('content/functions.php');
if(!$logged){
die('<META http-equiv=refresh content=0;URL=/>');
exit;
}
?>
<!DOCTYPE html>
<html id="www-roblox-com"><!-- MachineID: WEB185 --><head>
<title>
	Xscape Error
</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true">
    
<link rel="stylesheet" href="http://xsscape.cf/content/css/CSS10.css">

<link rel="stylesheet" href="https://static.rbxcdn.com/CSS/Base/CSS/jquery.mCustomScrollbar.css">

<link href="favicon.ico" rel="icon">
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>

    <script type="text/javascript">

        var _gaq = _gaq || [];

            window.GoogleAnalyticsDisableRoblox2 = true;
        _gaq.push(['b._setAccount', 'UA-486632-1']);
        _gaq.push(['b._setCampSourceKey', 'rbx_source']);
        _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
        _gaq.push(['b._setCampContentKey', 'rbx_campaign']);

            _gaq.push(['b._setDomainName', 'roblox.com']);

            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
    _gaq.push(['b._trackPageview']);


        _gaq.push(['c._setAccount', 'UA-26810151-2']);
            _gaq.push(['c._setDomainName', 'roblox.com']);
        
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
<script type="text/javascript" src="http://js.rbxcdn.com/9427180b71771de0418cf1bb7ccaabc7.js"></script>
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
</script><script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script><script type="text/javascript">
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
Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://www.roblox.com/login/default.aspx';
Roblox.Endpoints.Urls['/my/character.aspx'] = 'https://www.roblox.com/my/character.aspx';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.roblox.com/my/money.aspx';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://misc.roblox.com/chat/chat';
Roblox.Endpoints.Urls['/presence/users'] = 'http://www.roblox.com/presence/users';
Roblox.Endpoints.Urls['/presence/user'] = 'http://www.roblox.com/presence/user';
Roblox.Endpoints.Urls['/friends/list'] = 'http://www.roblox.com/friends/list';
Roblox.Endpoints.Urls['/navigation/getCount'] = 'http://www.roblox.com/navigation/getCount';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://www.roblox.com/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.roblox.com/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.roblox.com/catalog/json';
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

	<script type="text/javascript">
	    $(function () {
	        $('.tooltip').tipsy();
	        $('.tooltip-top').tipsy({ gravity: 's' });
	        $('.tooltip-right').tipsy({ gravity: 'w' });
	        $('.tooltip-left').tipsy({ gravity: 'e' });
	        $('.tooltip-bottom').tipsy({ gravity: 'n' });
	        $('.tooltip-right-html').tipsy({ gravity: 'w', html: true, delayOut: 1000 });
	        $('.tooltip-left-html').tipsy({ gravity: 'e', html: true, delayOut: 1000 });
	    });
    </script>
</head>
<body class=" ">





    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm"></div><form name="aspnetForm" method="post" action="/web/20160430223740/http://www.roblox.com/RobloxDefaultErrorPage.aspx?id=1a5e3a83-71ae-4640-9a89-86107e18e479&amp;mode=&amp;code=404" id="aspnetForm" class="nav-container no-gutter-ads">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="7OxXM+SU2oNYAGUI8YmaUVPMzFnVxI34PWTghCioh2GiXs86PYT9bQZd0CrJwEDFZBSo6vny7vg9VwrBIi90y+F9HwlosBI+6GRIdbKWCx6c0iWEk3d7BD6y2K8wQ0QGkLqi9shoskYXe0g3FY2fTgcXMKHSsB8Ww04dE8IpCxo1jTawRKTeQY1yVh3mQrsO98JKMb1Gi30xv8ww3odQKPzJditmd3btso9iyACa74BQrElcix143Un0ixCtdlqo0A+7Lk5IAoCw5aEPoPDSE7cO+6vtPd3Es/itHuEIJq/sbjmOAstUZ0uGZGw0w6ByF6+vNnsKe2VzZXYKWSoteaR64mGCLw7jXjvxv8msg/BjvcyW6K8GZg16mwN05CIKh3yFGMeXv7O9Ku8Kc0hr3QZW3LlhxMN7+BzhSs+9lqCjdgAdYhjkYDX+sKqc+S0zUFXctj1pDBUyW6acfXpItwa9nyhO4WG5/BBSPaJ+Y0mj4NKauhVqoBLs7wcySoQ8MkaXItmZAtjcKacLbbkq0qWWGk25hq9FyElQIG3kYkWoTNKQAf8erUMjjGVbwD0mifLpPhsRk/oSWRV+uVFptHeyxiphkP4DYC0+qqUlLpfS+tpoJ/W17xFwXiIL+xxRul3+lbHRW1foaeSnMfaY5BM0R8PnWEhMYoMT8wR9B3eNygLWccFT8RWH5zAt9oQh5+9cFudLOay4g2Lus+iNXg/zXYtMtIE2XLCA4eAZgurlWb0cy/SgdAp2J5qn8lV8v58uHyE+jC5QtuZDyfcOAvHHNmtgY5OHVn9nd9t5NFwWwqlM8/6Orl/PDshUo8BsSBmHxbxZy2pluLGqbakWoHFPDQ/WOzlF7V9Yg2KJmOo4YjYP56+5j+eOBXihvlgOY4rS0NqERGH5BCgpE39GbjWOIsavLErLi0sfKI/8ViREAIyLtsQw+WZhqnZPr8Z4YYU4WzA70gRDJmlkpKvSJ6HL4i4v0EiKeZV+he9QeeZeW4AHfa3ibSFN4DX2D9TwEb7YoCR2xm27CrWVf9i1gYmgcV6AC1BTh7HhxzFvLlsTsbtf1UYbmzEjrHH2An0hIwtk9Q==">
</div>


<script src="http://ajax.aspnetcdn.com/ajax/4.5.1/1/MicrosoftAjax.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
(window.Sys && Sys._Application && Sys.Observer)||document.write('<script type="text/javascript" src="/ScriptResource.axd?d=uHIkleVeDJf4xS50Krz-yA3kt4iEPLwQOcXDJXuiLb543xmSxgoBWyWb-0CTRrqRXPsCyYHFJoMX6TPqspOUhmvwRxW7JGKByJCuSKPDJkedBK4vZ68d-hQEQYwPVMjKP6tsCULlkgnx_6P0HwSsu1ZPvc01&t=ffffffff805766b3"><\/script>');//]]>
</script>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="BCF8FE20">
</div>
        
    
    

<div class="modalPopup unifiedModal smallModal shop-modal shop-modal-item" data-modal-handle="shop-confirmation" style="display: none;">
    <div class="shop-modal-item-right">

    </div>
    <div class="shop-modal-item-left">
        <h2>
            You are about to visit<br>our shopping site
        </h2>
        <div class="body-text">
            You will be redirected to the shopping<br>site. Please note that you must be 18<br> or over to buy online.
        </div>
        <div class="controls">
            <a id="rbx-shopping-close-btn" class="text-link btn-shopping-close">Close</a>
            <div id="rbx-continue-shopping-btn" class="btn btn-medium btn-neutral btn-secondary-xs btn-more btn-continue-shopping">Continue to Shop</div>
        </div>
        <div class="text-date-hint fine-print">
            The shop is not part of xscape.cf and is governed by a separate <a class="text-link" href="http://www.myplay.com/direct/cookie-policy?origin=desktop&amp;permalink=shoproblox" target="_blank">privacy policy</a>.
        </div>
    </div>
</div>

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


        <div id="navContent" class="nav-content nav-no-left" style="margin-left: 0px; width: 100%;">
        <div class="nav-content-inner">

    <div id="Container">
        <div style="clear: both"></div>
        
        <div id="Body" class="simple-body">
            

<div id="ErrorPage">    
    <img src="https://web.archive.org/web/20160430223740im_/http://images.rbxcdn.com/4bd2ab534d227b98097ab7730f61f49a.png" id="ctl00_cphRoblox_ErrorImage" alt="Alert" class="ErrorAlert">
    
    <h1><span id="ctl00_cphRoblox_ErrorTitle">Requested page not found</span></h1>
    <h3><span id="ctl00_cphRoblox_ErrorMessage">You may have clicked an expired link or mistyped the address.</span></h3>
    <p><span id="ctl00_cphRoblox_CustomerServiceMessage"></span></p>
    <pre style="text-align:left;margin-left:10px;"><span id="ctl00_cphRoblox_errorMsgLbl"></span></pre>

    <div class="divideTitleAndBackButtons">&nbsp;</div>

    <div class="CenterNavigationButtonsForFloat">
        <a class="btn-small btn-neutral" title="Go to Previous Page Button" onclick="history.back();return false;" href="#">Go to Previous Page</a>
        <a class="btn-neutral btn-small" title="Return Home" href="/home">Return Home</a>
        <div style="clear:both"></div>
    </div>
</div>

        </div>
        
<?php
$get->footer();
?>



    </div>
        </div></div>
      



    

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
        <script type="text/javascript">
            function urchinTracker() { };
            GoogleAnalyticsReplaceUrchinWithGAJS = true;
        </script>
    

    

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

</form>
    <script type="text/javascript" src="http://js.rbxcdn.com/26913b613d22e4a367bde7e8716261c3.js"></script>

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
        <img src="https://web.archive.org/web/20160430223740im_/http://b.scorecardresearch.com/p?c1=2&amp;c2=&amp;c3=&amp;c4=&amp;c5=&amp;c6=&amp;c15=&amp;cv=2.0&amp;cj=1"/>
    </noscript>
</body></html>