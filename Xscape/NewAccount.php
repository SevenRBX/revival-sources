<?php
require_once 'site.php';
if($logged){
die('<META http-equiv=refresh content=0;URL=/my/Home.aspx>');
}else{
$queryu = $db->query("SELECT * FROM accounts");
$amount = $queryu->rowCount();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- MachineID: WEB147 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Xscape"/>
    <meta name="description" content="User-generated MMO gaming site for kids, teens, and adults. Players architect their own worlds. Builders create free online games that simulate the real world. Create and play amazing 3D games. An online gaming cloud and distributed physics engine."/>
    <meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
    <title>Xscape</title>
	<link rel="canonical" href="https://www.xsscape.cf" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,600,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.roblox.com/CSS/Base/CSS/FetchCSS?path=leanbase___569885b8bf394e24a9586fe2e5e8c085_m.css"/>
<link rel="stylesheet" href="https://www.roblox.com/CSS/Base/CSS/FetchCSS?path=page___22e434f54f93bd4d46f671c0223d3641_m.css"/>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
<script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script>

<script type="text/javascript">
        var _gaq = _gaq || [];
		    _gaq.push(['_setAccount', 'UA-11419793-1']);
		    _gaq.push(['_setCampSourceKey', 'rbx_source']);
		    _gaq.push(['_setCampMediumKey', 'rbx_medium']);
		    _gaq.push(['_setCampContentKey', 'rbx_campaign']);
		        _gaq.push(['_setDomainName', 'roblox.com']);
		_gaq.push(['b._setAccount', 'UA-486632-1']);
		_gaq.push(['b._setCampSourceKey', 'rbx_source']);
		_gaq.push(['b._setCampMediumKey', 'rbx_medium']);
		_gaq.push(['b._setCampContentKey', 'rbx_campaign']);
		_gaq.push(['b._setDomainName', 'roblox.com']);
            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
            _gaq.push(['b._trackPageview']);    
		_gaq.push(['c._setAccount', 'UA-26810151-2']);
		_gaq.push(['c._setDomainName', 'roblox.com']);
		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
	</script>

</head>
<body>
<div id="fb-root"></div>
<div class="wrap no-gutter-ads">
<div id="header" class="navbar-fixed-top rbx-header" role="navigation">
    <div class="container-fluid">
        <div class="rbx-navbar-header">
            <div data-behavior="nav-notification" class="rbx-nav-collapse" onselectstart="return false;">
                            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="https://www.xsscape.cf"><span class="logo"></span></a>
            </div>
        </div>

<ul class="nav rbx-navbar hidden-xs hidden-sm col-md-4 col-lg-3">
            <li>
                <a href="https://www.xsscape.cf/Games.aspx">Games</a>
            </li>
            <li>
                <a href="https://www.xsscape.cf/Catalog.aspx">Catalog</a>
            </li>
            <li>
                <a href="https://www.xsscape.cf/Develop.aspx">Develop</a>
            </li>
            <li>
                <a class="buy-robux" href="https://www.xsscape.cf/Upgrade.aspx">Upgrade</a>
            </li>
        </ul><!--rbx-navbar-->

        <div id="navbar-universal-search" class="navbar-left rbx-navbar-search col-xs-5 col-sm-6 col-md-3" data-behavior="univeral-search" role="search">
            <div class="input-group rbx-input-group">
                <input id="navbar-search-input" class="form-control rbx-input-field" type="text" placeholder="Search" maxlength="120"/>
                <div class="input-group-btn rbx-input-group-btn">
                    <button id="navbar-search-btn" class="rbx-input-addon-btn" type="submit">
                        <span class="rbx-icon-nav-search"></span>
                    </button>
                </div>
            </div>
            <ul data-toggle="dropdown-menu" class="rbx-dropdown-menu" role="menu">
                <li class="rbx-navbar-search-option selected" data-searchurl="/search/library?keyword=">
                    <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Library</span>
                </li>
                        <li class="rbx-navbar-search-option" data-searchurl="/search/games?keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Games</span>
                        </li>
                        <li class="rbx-navbar-search-option" data-searchurl="/search/users?keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in People</span>
                        </li>
                        <li class="rbx-navbar-search-option" data-searchurl="/search/catalog?keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Catalog</span>
                        </li>
                        <li class="rbx-navbar-search-option" data-searchurl="/search/groups?keyword=">
                            <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Groups</span>
                        </li>
            </ul>

</div><!--rbx-navbar-search-->
        <div class="navbar-right rbx-navbar-right col-xs-4 col-sm-3">
                <ul class="nav navbar-right rbx-navbar-right-nav" data-display-opened="False">
                    <li>
                        <a id="header-login" class="rbx-navbar-login" data-behavior="login" data-toggle="popover" data-bind="popover-login" data-viewport="#header">Log In</a>
                    </li>
                    <div id="iFrameLogin" class="rbx-popover-content" data-toggle="popover-login" role="menu">
                        <iframe class="rbx-navbar-login-iframe" src="Login/LoginFrame.aspx" scrolling="no" frameborder="0" width="320"></iframe>
                    </div>
                    <li>
                        <a class="rbx-navbar-signup" href="https://www.xsscape.cf/NewAge.aspx">Sign Up</a>
                    </li>
                    <li class="rbx-navbar-right-search" data-toggle="toggle-search">
                        <a class="rbx-menu-icon">
                            <span class="rbx-icon-nav-search-white"></span>
                        </a>
                    </li>
                </ul>
        </div><!-- navbar right-->
        <ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
            <li>
                <a href="https://www.xsscape.cf/Games.aspx">Games</a>
            </li>
            <li>
                <a href="https://www.xsscape.cf/Catalog.aspx">Catalog</a>
            </li>
            <li>
                <a href="https://www.xsscape.cf/Develop.aspx">Develop</a>
            </li>
            <li>
                <a class="buy-robux" href="https://www.xsscape.cf/Upgrade.aspx">Upgrade</a>
            </li>
        </ul><!--rbx-navbar-->
    </div>
</div>

<!-- LEFT NAV MENU -->
    <div class="container-main ">
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>
        <noscript><div class="SystemAlert"><div class="rbx-alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>

<div class="SystemAlert"><div class="rbx-alert-info" role="alert"><a class="rbx-alert-link" href="https://discord.gg/k5db8XZC52">https://discord.gg/k5db8XZC52</a></div></div>

<div class="content">
<li id="StudioSplashScreen" data-authentication-url="">
    <div class="header-bg-container">
        <div class="header-bg">
            <div class="header-container">
                <img class="studio-icon" src="https://dtjatwg9u87ct.cloudfront.net/content/images/shortlogo.png"/>
                <h3>PLAY AND CREATE</h3>
                <p>
                    Hangout with your friends, create your own game and find nostalgia.
                    <br/>
                    Users on Xscape: <?=$amount?>
                </p>
                <button type="button" onclick='window.location.href="/NewAge.aspx";' id="studio-launch" class="rbx-btn-primary-md">Register ></button>
                <p>
                    <a class="rbx-small" href="/My/Home.aspx">Continue to Home</a>
                </p>
            </div>
        </div>
    </div>

<div class="content-container">
        <ul class="blurbs-container">
            <li class="section gear">
                <p class="rbx-article-title">Dedicated Servers</p>
                <p>Xscape is ran on Dedicated Servers keeping your game on 24/7.</p>
                <img src="b5a31363778e6d95036d684a71b3eebe.png"/>
            </li>
            <li class="section friends">
                <p class="rbx-article-title">Legacy Clients</p>
                <p>Xscape uses the 2016 and 2014 clients.</p>
                <img src="610d1e9e62b0fe55c2590b410d5ab3c9.png"/>
            </li>
            <li class="section money">
                <p class="rbx-article-title">New Experience</p>
                <p>Xscape is a new experience with features not in normal ROBLOX.</p>
                <img src="41cc0c5852485b140c12bc46a982e319.png"/>
            </li>
            <div style="clear:both;"></div>
        </ul>
        <div class="links-container wide">
            <div class="resources-title">Resources</div>
            <a class="rbx-btn-icon-community-sm" href=""><span class="rbx-icon-community"></span> <span>Dev Community</span></a>
            <a class="rbx-btn-icon-page-sm" href=""><span class="rbx-icon-page"></span> <span>ROBLOX Wiki</span></a>
            <a class="rbx-btn-icon-play-sm" href="http://youtu.be/SkMLcBPXHUA?list=PLuEQ5BB-Z1PLiLI_As4MC3SMS5Gwbwl40"><span class="rbx-icon-play"></span> <span>ROBLOX University</span></a>
            <div style="clear:both;"></div>
        </div>
        <div class="links-container narrow">
            <div class="resources-title">Resources</div>
            <a class="rbx-btn-icon-play-sm" href=""><span class="rbx-icon-play"></span> <span>ROBLOX University</span></a>
            <a class="rbx-btn-icon-page-sm" href=""><span class="rbx-icon-page"></span> <span>ROBLOX Wiki</span></a>
            <a class="rbx-btn-icon-community-sm" href=""><span class="rbx-icon-community"></span> <span>Dev Community</span></a>
            <div style="clear:both;"></div>
        </div>
    </div>
        </div>
            </div>

<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<footer class="container-footer">
    <div class="footer">
        <ul class="row footer-links">
            <li class="col-xs-4 col-sm-2 footer-link"><a href="corp.xsscape.cf" class="roblox-interstitial" target="_blank"><h2>About Us</h2></a></li>
            <li class="col-xs-4 col-sm-2 footer-link"><a href="https://www.youtube.com/watch?v=eR2FFb6Zg9Q" class="roblox-interstitial" target="_blank"><h2>Jobs</h2></a></li>
            <li class="col-xs-4 col-sm-2 footer-link"><a href="xsscape.cf/blog/" class="roblox-interstitial" target="_blank"><h2>Blog</h2></a></li>
            <li class="col-xs-4 col-sm-2 footer-link"><a href="" target="_blank"><h2>Privacy</h2></a></li>
            <li class="col-xs-4 col-sm-2 footer-link"><a href="" class="roblox-interstitial" target="_blank"><h2>Parents</h2></a></li>
            <li class="col-xs-4 col-sm-2 footer-link"><a href="" class="roblox-interstitial" target="_blank"><h2>Help</h2></a></li>
        </ul>
        <p class="footer-note">
            Xscape, "Useless Nostalgia Shit", characters, logos, names, and all related indicia are NOT trademarks of <a target="_blank" href="corp.roblox.com" class="rbx-link roblox-interstitial">ROBLOX Corporation</a>, ©2050. Patents pending. Xscape is not sponsored, authorized or endorsed by ROBLOX or Pornhub or any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex, and no resemblance to the products of these companies is intended. Use of this site signifies your acceptance of the <a href="info/terms-of-service.html" target="_blank" class="rbx-link">Terms and Conditions</a>.
        </p>
    </div>
</footer>

<div id="ChatContainer" style="position:fixed; bottom:0; right:0; z-index:10020;">
</div>

<img  width="1" height="1" style="display:none;"/>
    <script type="text/javascript" src="https://s3.amazonaws.com/js.roblox.com/bda465033b58e3cb827ec91001b46f43.js"></script>
    <script type="text/javascript" src="https://s3.amazonaws.com/js.roblox.com/822491cace41a2d39fd76db6cfd17800.js"></script>
    <script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://s3.amazonaws.com/js.roblox.com/a2ff3787d1fd8d3c2492b5f5c5ec70b6.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://s3.amazonaws.com/js.roblox.com/4eb48eec34ca711d5a7b08a4291ac753.js';Roblox.config.paths['Pages.Messages'] = 'https://s3.amazonaws.com/js.roblox.com/e8cbac58ab4f0d8d4c707700c9f97630.js';Roblox.config.paths['Resources.Messages'] = 'https://s3.amazonaws.com/js.roblox.com/fb9cb43a34372a004b06425a1c69c9c4.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://s3.amazonaws.com/js.roblox.com/bbaeb48f3312bad4626e00c90746ffc0.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://s3.amazonaws.com/js.roblox.com/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = 'https://s3.amazonaws.com/js.roblox.com/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://s3.amazonaws.com/js.roblox.com/fbb86cf0752d23f389f983419d3085b4.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://s3.amazonaws.com/js.roblox.com/838ec9c8067ba6fd6793a8bdbdb48a5c.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://s3.amazonaws.com/js.roblox.com/f2697119678d0851cfaa6c2270a727ed.js';Roblox.config.paths['Widgets.SurveyModal'] = 'https://s3.amazonaws.com/js.roblox.com/d6e979598c460090eafb6d38231159f6.js';</script>

<script>
            $(function () {
                Roblox.DeveloperConsoleWarning.showWarning();
            });
        </script>
    <script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script>
<script type="text/javascript">
$(function(){
    function trackReturns() {
	    function dayDiff(d1, d2) {
		    return Math.floor((d1-d2)/86400000);
	    }
        if (!localStorage) return; 
	    var cookieName = 'RBXReturn';
	    var cookieOptions = {expires:9001};
        var cookie = localStorage.getItem(cookieName) || {};
	    if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
	        localStorage.setItem(cookieName, { ts: new Date().toDateString() });
		    return;
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
	    localStorage.setItem(cookieName, cookie);
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
    <script type="text/javascript" src="https://s3.amazonaws.com/js.roblox.com/003e49692ed655670b5479243e40cffc.js"></script>
</body>
</html>