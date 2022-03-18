<?php
require_once '../site.php';
require_once ('../content/functions.php');
if(!$logged){
die('<META http-equiv=refresh content=0;URL=/>');
exit;
}

$temp = 1;
$gameq = $db->query("SELECT * FROM games WHERE id = $temp");
$gamef = $gameq->fetch();
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <!-- MachineID: WEB188 -->
    <title>Games - Xscape</title>

    <link rel="canonical" href="https://xsscape.cf" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Xscape"/>
<meta name="description" content="Xscape is a private server for the game ROBLOX. Xscape utilizes legacy clients and a classic site. We are not affliated with ROBLOX Corporation."/>
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
<meta name="apple-itunes-app" content="app-id=431946152"/>
<meta name="google-site-verification" content="KjufnQUaDv5nXJogvDMey4G-Kb7ceUVxTdzcMaP9pCY"/>

<meta property="og:site_name" content="Xscape"/>
    <meta property="og:title" content="Xscape Games"/>
    <meta property="og:type" content="game"/>
    <meta property="og:url" content="https://www.xsscape.cf/games"/>
    <meta property="og:description" content="Xscape is a private server for the game ROBLOX. Xscape utilizes legacy clients and a classic site. We are not affliated with ROBLOX Corporation."/>
    <meta property="og:image" content="https://xsscape.cf/content/images/shortlogo.png"/>

    <meta property="fb:app_id" content="190191627665278">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ROBLOX">
    <meta name="twitter:title" content="Xscape Games">
    <meta name="twitter:description" content="Xscape is a private server for the game ROBLOX. Xscape utilizes legacy clients and a classic site. We are not affliated with ROBLOX Corporation.">
    <meta name="twitter:creator">
    <meta name="twitter:image1" content="https://images.rbxcdn.com/1a29ba559cd121807b2a11a4edaf0e88.png"/>
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

    <link href="../favicon.ico" rel="icon"/>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,600,700" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://xsscape.cf/content/css/leanbasenew.css"/>
    <link rel="stylesheet" href="https://static.rbxcdn.com/css/page___2234b2131dd394fe744e2aa02f07992d_m.css/fetch"/>

    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
    <script type="text/javascript" src="https://js.rbxcdn.com/772ab381c3064441d07dc1235c79872c.js"></script>
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
</script>    <script type="text/javascript">
        $(function () {
            RobloxEventManager.triggerEvent('rbx_evt_newuser', {});
        });
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
                _gaq.push(['b._setPageGroup', 1, 'Games']);
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
                    _gaq.push(['c._setPageGroup', 1, 'Games']);
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
Roblox.Endpoints.Urls['/game-auth/getauthticket'] = 'https://www.roblox.com/game-auth/getauthticket';
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

<body id="rbx-body" class="" data-performance-relative-value="0.5" data-internal-page-name="Games" data-send-event-percentage="0.01">
    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm" data-as-http-regex="((blog|wiki|[^.]help|corp|polls|bloxcon|developer|devforum)\.roblox\.com|robloxlabs\.com)"></div>
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

<div class="container-main
                ">
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>
        <noscript><div class="SystemAlert"><div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>

        <div class="content ">
					<div id="ResponsiveWrapper" class="games-responsive-wrapper games-lists-multiple" data-gamessearchonpage="true" data-adsingamesearchresultsenabled="true">

					    <div id="GamesPageRightColumn" class="games-page-right">
					        <div id="GamesPageRightColumnSidebar" class="sidebar-no-ad games-page-right-sidebar">
					                    <div id="GamePageAdDiv1" class="ads-container">


					<iframe name="Roblox_Games_Middle_300x250" allowtransparency="true" frameborder="0" height="270" scrolling="no" src="http://xsscape.cf/content/images/ad.png" width="300" data-js-adtype="iframead"></iframe>

					                    </div>
					                        <div id="GamePageAdDiv2" class="ads-container">


					<iframe name="Roblox_Games_Middle_300x250_1" allowtransparency="true" frameborder="0" height="270" scrolling="no" src="http://xsscape.cf/content/images/ad.png" width="300" data-js-adtype="iframead"></iframe>

					                        </div>

					        </div>
					    </div>

					    <div id="GamesPageLeftColumn" class="games-page-left " data-searchstate="off">

					        <!-- New Filters and sort -->



					<div class="col-xs-12 games-page-filters" id="FiltersAndSort" data-defaulttoppaidtoweekly="true" data-defaultweeklyratings="true">

					        <div class="input-group-btn games-page-filter" id="SortFilter">
					            <button type="button" class="input-dropdown-btn" data-toggle="dropdown" aria-expanded="false">
					                <span class="rbx-selection-label" data-bind="label" data-value="default" data-default="default">Default</span>
					                <span class="icon-down-16x16"></span>
					            </button>
					            <ul data-toggle="dropdown-menu" class="dropdown-menu" role="menu">
					                <li data-hidetimefilter="" data-value="default"><a href="#">Default</a></li>
					                        <li data-hidetimefilter="" data-value="1">
					                            <a href="#">Popular</a>
					                        </li>
					                        <li data-hidetimefilter="" data-value="8">
					                            <a href="#">Top Earning</a>
					                        </li>
					                        <li data-value="11">
					                            <a href="#">Top Rated</a>
					                        </li>
					                        <li data-hidetimefilter="" data-value="16">
					                            <a href="#">Recommended</a>
					                        </li>
					                        <li data-hidetimefilter="" data-hidegenrefilter="" data-value="3">
					                            <a href="#">Featured</a>
					                        </li>
					                        <li data-value="2">
					                            <a href="#">Top Favorite</a>
					                        </li>
					                        <li data-value="9">
					                            <a href="#">Top Paid</a>
					                        </li>
					                        <li data-value="14">
					                            <a href="#">Builders Club</a>
					                        </li>
					                        <li data-hidetimefilter="" data-value="19">
					                            <a href="#">Popular in VR</a>
					                        </li>

					            </ul>
					        </div>

					        <div class="input-group-btn games-page-filter hidden" id="TimeFilter">
					            <button type="button" class="input-dropdown-btn" data-toggle="dropdown">
					                <span class="rbx-selection-label" data-bind="label" data-value="0" data-default="0">Now</span>
					                <span class="icon-down-16x16"></span>
					            </button>
					            <ul data-toggle="dropdown-menu" class="dropdown-menu" role="menu">
					                <li class="dropdown-option hidden" data-value="0"><a href="#">Now</a></li>
					                <li class="dropdown-option" data-value="1"><a href="#">Past Day</a></li>
					                <li class="dropdown-option" data-value="2"><a href="#">Past Week</a></li>
					                <li class="dropdown-option" data-value="4"><a href="#">All Time</a></li>
					            </ul>
					        </div>
					            <div class="input-group-btn games-page-filter" id="GenreFilter">
					            <button type="button" class="input-dropdown-btn" data-toggle="dropdown" aria-expanded="false">
					                <span class="rbx-selection-label" data-bind="label" data-value="1" data-default="1">All</span>
					                <span class="icon-down-16x16"></span>
					            </button>
					            <ul data-toggle="dropdown-menu" class="dropdown-menu" role="menu">
					                    <li class="dropdown-option" data-value="1"><a href="#">All</a></li>
					                    <li class="dropdown-option" data-value="13"><a href="#">Adventure</a></li>
					                    <li class="dropdown-option" data-value="19"><a href="#">Building</a></li>
					                    <li class="dropdown-option" data-value="15"><a href="#">Comedy</a></li>
					                    <li class="dropdown-option" data-value="10"><a href="#">Fighting</a></li>
					                    <li class="dropdown-option" data-value="20"><a href="#">FPS</a></li>
					                    <li class="dropdown-option" data-value="11"><a href="#">Horror</a></li>
					                    <li class="dropdown-option" data-value="8"><a href="#">Medieval</a></li>
					                    <li class="dropdown-option" data-value="17"><a href="#">Military</a></li>
					                    <li class="dropdown-option" data-value="12"><a href="#">Naval</a></li>
					                    <li class="dropdown-option" data-value="21"><a href="#">RPG</a></li>
					                    <li class="dropdown-option" data-value="9"><a href="#">Sci-Fi</a></li>
					                    <li class="dropdown-option" data-value="14"><a href="#">Sports</a></li>
					                    <li class="dropdown-option" data-value="7"><a href="#">Town and City</a></li>
					                    <li class="dropdown-option" data-value="16"><a href="#">Western</a></li>
					            </ul>
					        </div>
					</div>

					        <div id="GamesPageSearch" class="hidden" data-keyword="Search">
					            <a name="CancelSearch" class="cancel-search">Cancel</a>
					            <input data-default="" id="searchbox" class="translate" type="text" name="search">
					            <div class="SearchIconButton" title="Search"></div>
					        </div>

					        <div id="GamesListsContainer" class="games-page-lists-container">



					<div class="games-list-container container-0 overflow-hidden" id="GamesListContainer1" data-sortfilter="1" data-gamefilter="1" data-minbclevel="0" data-numberofrows="1" data-personalized-universe-id="0" style="margin-bottom: -51px; cursor: auto;">
					    <div class="games-list-header games-filter-changer">
					            <h3>Popular</h3>

					    </div>
					        <div class="show-in-multiview-mode-only">
					            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
					                See All
					            </div>
					        </div>
					    <div class="games-list" style="height: 276px;">
					        <div class="show-in-multiview-mode-only">
					            <div class="horizontally-scrollable" style="left: 0px;">
					                <ul class="hlist games game-cards">
							<?php
                            if(!isset($_GET['page1'])) {
                                $page1 = 1;
                            }else{
                                $page1 = $_GET['page1'];
                            }

                            if(!isset($_GET['search'])) {
                                $search = "";
                            }else{
                                $search = $_GET['search'];
                            }

                            $resultsperpage = 6;

                            $result = $db->prepare("SELECT count(*) FROM `games` WHERE name LIKE ?");
                            $result->execute(["%$search%"]);
                            $gamescount = $result->fetchColumn();

                            $numberofpages = ceil($gamescount / $resultsperpage);
                            $thispagefirstresult = ($page1 - 1) * $resultsperpage;
									            $stmt = $db->prepare("SELECT * FROM games WHERE name LIKE ? ORDER by id DESC LIMIT ".$thispagefirstresult.",".$resultsperpage);
									            $stmt->execute(["%$search%"]);
									            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
									            {
									                $gamename = $row['name'];
									                $gameid = $row['id'];

									                $owner = $row['creatorid'];

									                $stmt2 = $db->prepare("SELECT * FROM accounts WHERE id = :id");
									                $stmt2->execute([':id' => $owner]);
									                $creator = $stmt2->fetch();

									                $creatorName = $creator['username'];
									                $creatorId = $creator['id'];
									                $getThumb = $row['thumbnail'];

																	$query2 = $db->prepare("SELECT * FROM servers WHERE game = :id");
																	$query2->execute([':id' => $gameid]);

																	$getPlayers = $query2->fetch();

																	if(!$getPlayers){
																		$players = 0;
																	}else{
																		$players = $getPlayers['players'];
																	}
									                ?>
																	<li class="list-item game-card">
																	    <div class="game-card-container">
																	    <a href="/view.aspx?id=<?=$gameid?>" class="game-card-link">
																	        <div class="game-card-thumb-container">
																	            <img class="game-card-thumb" src="<?=$getThumb?>" alt="Natural Disaster Survival" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;tr.rbxcdn.com/e1e35f53f2547279a765cf04fe61ab7b/150/150/Image/Jpeg&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
																	        </div>
																	        <div class="text-overflow game-card-name" title="Natural Disaster Survival" ng-non-bindable="">
																	            <?=$gamename?>
																	        </div>
																	        <div class="game-card-name-secondary">
																	            <?=$players?> Playing
																	        </div>
																	        <div class="game-card-vote">
																	            <div class="vote-bar">
																	                <div class="vote-thumbs-up">
																	                    <span class="icon-thumbs-up"></span>
																	                </div>
																	                <div class="vote-container" data-upvotes="0" data-downvotes="0" data-voting-processed="true">
																	                    <div class="vote-background "></div>
																	                    <div class="vote-percentage" style="width: 90%;"></div>
																	                    <div class="vote-mask">
																	                        <div class="segment seg-1"></div>
																	                        <div class="segment seg-2"></div>
																	                        <div class="segment seg-3"></div>
																	                        <div class="segment seg-4"></div>
																	                    </div>
																	                </div>
																	                <div class="vote-thumbs-down">
																	                    <span class="icon-thumbs-down"></span>
																	                </div>
																	            </div>
																	            <div class="vote-counts">
																	                <div class="vote-down-count">N/A</div>
																	                <div class="vote-up-count">N/A</div>

																	            </div>
																	        </div>
																	    </a>
																	    <span class="game-card-footer">
																	        <span class="text-label xsmall">By </span>
																	        <a class="text-link xsmall text-overflow" href="/User.aspx?ID=<?=$creatorId?>"><?=$creatorName?></a>
																	    </span>
																	    </div>
																	</li>
									                <?php
									            }
									            ?></ul>
					            </div>
					            <?php
                      if(!isset($_GET['page1'])) {
                          $page1 = 1;
                      }else{
                          $page1 = $_GET['page1'];
                      }
                      $prevpage = $page1 - 1;
                      $nextpage = $page1 + 1;
                      if($page1 > 1){ ?><a href="/games/?page1=<?=$prevpage?><?php if(isset($_GET['page2'])){ echo'&page2=' . $_GET['page2']; } if(isset($_GET['page3'])){ echo'&page3=' . $_GET['page3']; } if(isset($_GET['page4'])){ echo'&page4=' . $_GET['page4']; } if(isset($_GET['page5'])){ echo'&page5=' . $_GET['page5']; } ?>"><?php } ?><div class="scroller prev<?php if($page1 > 1){}else{echo' disabled';} ?>">
					                <div class="arrow">
					                    <span class="icon-games-carousel-left"></span>
					                </div>
					            </div><?php if($page1 > 1){ ?></a><?php }
					            if($page1 !== $numberofpages){ ?><a href="/games/?page1=<?=$nextpage?><?php if(isset($_GET['page2'])){ echo'&page2=' . $_GET['page2']; } if(isset($_GET['page3'])){ echo'&page3=' . $_GET['page3']; } if(isset($_GET['page4'])){ echo'&page4=' . $_GET['page4']; } if(isset($_GET['page5'])){ echo'&page5=' . $_GET['page5']; } ?>"><?php } ?><div class="scroller next<?php if($page1 == $numberofpages){echo' disabled';} ?>">
					                <div class="arrow">
					                    <span class="icon-games-carousel-right"></span>
					                </div>
					            </div>
					        </div>
					        <ul class="hlist games game-cards game-cards-grid">
					            <div class="abp-spacer "></div>
					        </ul>
					    </div>
					</div>



					<div class="games-list-container container-1 overflow-hidden" id="GamesListContainer8" data-sortfilter="8" data-gamefilter="1" data-minbclevel="0" data-numberofrows="1" data-personalized-universe-id="0" style="margin-bottom: -51px; cursor: auto;">
					    <div class="games-list-header games-filter-changer">
					            <h3>Top Earning</h3>

					    </div>
					        <div class="show-in-multiview-mode-only">
					            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
					                See All
					            </div>
					        </div>
					    <div class="games-list" style="height: 276px;">
					        <div class="show-in-multiview-mode-only">
					            <div class="horizontally-scrollable" style="left: 0px;">
					                <ul class="hlist games game-cards">
                            <?php
                            if(!isset($_GET['page2'])) {
                                $page2 = 1;
                            }else{
                                $page2 = $_GET['page2'];
                            }

                            if(!isset($_GET['search'])) {
                                $search = "";
                            }else{
                                $search = $_GET['search'];
                            }

                            $resultsperpage = 6;

                            $result = $db->prepare("SELECT count(*) FROM `games` WHERE name LIKE ?");
                            $result->execute(["%$search%"]);
                            $gamescount = $result->fetchColumn();

                            $numberofpages = ceil($gamescount / $resultsperpage);
                            $thispagefirstresult = ($page2 - 1) * $resultsperpage;
									            $stmt = $db->prepare("SELECT * FROM games WHERE name LIKE ? LIMIT ".$thispagefirstresult.",".$resultsperpage);
									            $stmt->execute(["%$search%"]);
									            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
									            {
									                $gamename = $row['name'];
									                $gameid = $row['id'];

									                $owner = $row['creatorid'];

									                $stmt2 = $db->prepare("SELECT * FROM accounts WHERE id = :id");
									                $stmt2->execute([':id' => $owner]);
									                $creator = $stmt2->fetch();

									                $creatorName = $creator['username'];
									                $creatorId = $creator['id'];
									                $getThumb = $row['thumbnail'];

																	$query2 = $db->prepare("SELECT * FROM servers WHERE game = :id");
																	$query2->execute([':id' => $gameid]);

																	$getPlayers = $query2->fetch();

																	if(!$getPlayers){
																		$players = 0;
																	}else{
																		$players = $getPlayers['players'];
																	}
									                ?>
																	<li class="list-item game-card">
																	    <div class="game-card-container">
																	    <a href="/view.aspx?id=<?=$gameid?>" class="game-card-link">
																	        <div class="game-card-thumb-container">
																	            <img class="game-card-thumb" src="<?=$getThumb?>" alt="Natural Disaster Survival" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;tr.rbxcdn.com/e1e35f53f2547279a765cf04fe61ab7b/150/150/Image/Jpeg&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
																	        </div>
																	        <div class="text-overflow game-card-name" title="Natural Disaster Survival" ng-non-bindable="">
																	            <?=$gamename?>
																	        </div>
																	        <div class="game-card-name-secondary">
																	            <?=$players?> Playing
																	        </div>
																	        <div class="game-card-vote">
																	            <div class="vote-bar">
																	                <div class="vote-thumbs-up">
																	                    <span class="icon-thumbs-up"></span>
																	                </div>
																	                <div class="vote-container" data-upvotes="0" data-downvotes="0" data-voting-processed="true">
																	                    <div class="vote-background "></div>
																	                    <div class="vote-percentage" style="width: 90%;"></div>
																	                    <div class="vote-mask">
																	                        <div class="segment seg-1"></div>
																	                        <div class="segment seg-2"></div>
																	                        <div class="segment seg-3"></div>
																	                        <div class="segment seg-4"></div>
																	                    </div>
																	                </div>
																	                <div class="vote-thumbs-down">
																	                    <span class="icon-thumbs-down"></span>
																	                </div>
																	            </div>
																	            <div class="vote-counts">
																	                <div class="vote-down-count">N/A</div>
																	                <div class="vote-up-count">N/A</div>

																	            </div>
																	        </div>
																	    </a>
																	    <span class="game-card-footer">
																	        <span class="text-label xsmall">By </span>
																	        <a class="text-link xsmall text-overflow" href="/User.aspx?ID=<?=$creatorId?>"><?=$creatorName?></a>
																	    </span>
																	    </div>
																	</li>
									                <?php
									            }
									            ?></ul>
					            </div>
                      <?php
                      if(!isset($_GET['page2'])) {
                          $page2 = 1;
                      }else{
                          $page2 = $_GET['page2'];
                      }
                      $prevpage = $page2 - 1;
                      $nextpage = $page2 + 1;
                      if($page2 > 1){ ?><a href="/games/?page2=<?=$prevpage?><?php if(isset($_GET['page1'])){ echo'&page1=' . $_GET['page1']; } if(isset($_GET['page3'])){ echo'&page3=' . $_GET['page3']; } if(isset($_GET['page4'])){ echo'&page4=' . $_GET['page4']; } if(isset($_GET['page5'])){ echo'&page5=' . $_GET['page5']; } ?>"><?php } ?><div class="scroller prev<?php if($page2 > 1){}else{echo' disabled';} ?>">
					                <div class="arrow">
					                    <span class="icon-games-carousel-left"></span>
					                </div>
					            </div><?php if($page2 > 1){ ?></a><?php }
					            if($page2 !== $numberofpages){ ?><a href="/games/?page2=<?=$nextpage?><?php if(isset($_GET['page1'])){ echo'&page1=' . $_GET['page1']; } if(isset($_GET['page3'])){ echo'&page3=' . $_GET['page3']; } if(isset($_GET['page4'])){ echo'&page4=' . $_GET['page4']; } if(isset($_GET['page5'])){ echo'&page5=' . $_GET['page5']; } ?>"><?php } ?><div class="scroller next<?php if($page2 == $numberofpages){echo' disabled';} ?>">
					                <div class="arrow">
					                    <span class="icon-games-carousel-right"></span>
					                </div>
					            </div>
					        </div>
					        <ul class="hlist games game-cards game-cards-grid">
					            <div class="abp-spacer "></div>
					        </ul>
					    </div>
					</div>



					<div class="games-list-container container-2 overflow-hidden" id="GamesListContainer11" data-sortfilter="11" data-gamefilter="1" data-minbclevel="0" data-numberofrows="1" data-personalized-universe-id="0" style="margin-bottom: -51px; cursor: auto;">
					    <div class="games-list-header games-filter-changer">
					            <h3>Top Rated</h3>

					    </div>
					        <div class="show-in-multiview-mode-only">
					            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
					                See All
					            </div>
					        </div>
					    <div class="games-list" style="height: 276px;">
					        <div class="show-in-multiview-mode-only">
					            <div class="horizontally-scrollable" style="left: 0px;">
					                <ul class="hlist games game-cards">
                            <?php
                            if(!isset($_GET['page3'])) {
                                $page3 = 1;
                            }else{
                                $page3 = $_GET['page3'];
                            }

                            if(!isset($_GET['search'])) {
                                $search = "";
                            }else{
                                $search = $_GET['search'];
                            }

                            $resultsperpage = 6;

                            $result = $db->prepare("SELECT count(*) FROM `games` WHERE name LIKE ?");
                            $result->execute(["%$search%"]);
                            $gamescount = $result->fetchColumn();

                            $numberofpages = ceil($gamescount / $resultsperpage);
                            $thispagefirstresult = ($page3 - 1) * $resultsperpage;
									            $stmt = $db->prepare("SELECT * FROM games WHERE name LIKE ? LIMIT ".$thispagefirstresult.",".$resultsperpage);
									            $stmt->execute(["%$search%"]);
									            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
									            {
									                $gamename = $row['name'];
									                $gameid = $row['id'];

									                $owner = $row['creatorid'];

									                $stmt2 = $db->prepare("SELECT * FROM accounts WHERE id = :id");
									                $stmt2->execute([':id' => $owner]);
									                $creator = $stmt2->fetch();

									                $creatorName = $creator['username'];
									                $creatorId = $creator['id'];
									                $getThumb = $row['thumbnail'];

																	$query2 = $db->prepare("SELECT * FROM servers WHERE game = :id");
																	$query2->execute([':id' => $gameid]);

																	$getPlayers = $query2->fetch();

																	if(!$getPlayers){
																		$players = 0;
																	}else{
																		$players = $getPlayers['players'];
																	}
									                ?>
																	<li class="list-item game-card">
																	    <div class="game-card-container">
																	    <a href="/view.aspx?id=<?=$gameid?>" class="game-card-link">
																	        <div class="game-card-thumb-container">
																	            <img class="game-card-thumb" src="<?=$getThumb?>" alt="Natural Disaster Survival" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;tr.rbxcdn.com/e1e35f53f2547279a765cf04fe61ab7b/150/150/Image/Jpeg&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
																	        </div>
																	        <div class="text-overflow game-card-name" title="Natural Disaster Survival" ng-non-bindable="">
																	            <?=$gamename?>
																	        </div>
																	        <div class="game-card-name-secondary">
																	            <?=$players?> Playing
																	        </div>
																	        <div class="game-card-vote">
																	            <div class="vote-bar">
																	                <div class="vote-thumbs-up">
																	                    <span class="icon-thumbs-up"></span>
																	                </div>
																	                <div class="vote-container" data-upvotes="0" data-downvotes="0" data-voting-processed="true">
																	                    <div class="vote-background "></div>
																	                    <div class="vote-percentage" style="width: 90%;"></div>
																	                    <div class="vote-mask">
																	                        <div class="segment seg-1"></div>
																	                        <div class="segment seg-2"></div>
																	                        <div class="segment seg-3"></div>
																	                        <div class="segment seg-4"></div>
																	                    </div>
																	                </div>
																	                <div class="vote-thumbs-down">
																	                    <span class="icon-thumbs-down"></span>
																	                </div>
																	            </div>
																	            <div class="vote-counts">
																	                <div class="vote-down-count">N/A</div>
																	                <div class="vote-up-count">N/A</div>

																	            </div>
																	        </div>
																	    </a>
																	    <span class="game-card-footer">
																	        <span class="text-label xsmall">By </span>
																	        <a class="text-link xsmall text-overflow" href="/User.aspx?ID=<?=$creatorId?>"><?=$creatorName?></a>
																	    </span>
																	    </div>
																	</li>
									                <?php
									            }
									            ?></ul>
					            </div>
                      <?php
                      if(!isset($_GET['page3'])) {
                          $page3 = 1;
                      }else{
                          $page3 = $_GET['page3'];
                      }
                      $prevpage = $page3 - 1;
                      $nextpage = $page3 + 1;
                      if($page3 > 1){ ?><a href="/games/?page3=<?=$prevpage?><?php if(isset($_GET['page1'])){ echo'&page1=' . $_GET['page1']; } if(isset($_GET['page2'])){ echo'&page2=' . $_GET['page2']; } if(isset($_GET['page4'])){ echo'&page4=' . $_GET['page4']; } if(isset($_GET['page5'])){ echo'&page5=' . $_GET['page5']; } ?>"><?php } ?><div class="scroller prev<?php if($page3 > 1){}else{echo' disabled';} ?>">
					                <div class="arrow">
					                    <span class="icon-games-carousel-left"></span>
					                </div>
					            </div><?php if($page3 > 1){ ?></a><?php }
					            if($page3 !== $numberofpages){ ?><a href="/games/?page3=<?=$nextpage?><?php if(isset($_GET['page1'])){ echo'&page1=' . $_GET['page1']; } if(isset($_GET['page2'])){ echo'&page2=' . $_GET['page2']; } if(isset($_GET['page4'])){ echo'&page4=' . $_GET['page4']; } if(isset($_GET['page5'])){ echo'&page5=' . $_GET['page5']; } ?>"><?php } ?><div class="scroller next<?php if($page3 == $numberofpages){echo' disabled';} ?>">
					                <div class="arrow">
					                    <span class="icon-games-carousel-right"></span>
					                </div>
					            </div>
					        </div>
					        <ul class="hlist games game-cards game-cards-grid">
					            <div class="abp-spacer "></div>
					        </ul>
					    </div>
					</div>

<script src="https://web.archive.org/web/20170918225242js_/https://archive.org/includes/analytics.js?v=cf34f82" type="text/javascript"></script>


					<div class="games-list-container container-3 overflow-hidden" id="GamesListContainer16" data-sortfilter="16" data-gamefilter="1" data-minbclevel="0" data-numberofrows="1" data-personalized-universe-id="0" style="margin-bottom: -51px; cursor: auto;">
					    <div class="games-list-header games-filter-changer">
					            <h3>Recommended</h3>

					    </div>
					        <div class="show-in-multiview-mode-only">
					            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
					                See All
					            </div>
					        </div>
					    <div class="games-list" style="height: 276px;">
					        <div class="show-in-multiview-mode-only">
					            <div class="horizontally-scrollable" style="left: 0px;">
					                <ul class="hlist games game-cards">
                            <?php
                            if(!isset($_GET['page4'])) {
                                $page4 = 1;
                            }else{
                                $page4 = $_GET['page4'];
                            }

                            if(!isset($_GET['search'])) {
                                $search = "";
                            }else{
                                $search = $_GET['search'];
                            }

                            $resultsperpage = 6;

                            $result = $db->prepare("SELECT count(*) FROM `games` WHERE name LIKE ?");
                            $result->execute(["%$search%"]);
                            $gamescount = $result->fetchColumn();

                            $numberofpages = ceil($gamescount / $resultsperpage);
                            $thispagefirstresult = ($page4 - 1) * $resultsperpage;
									            $stmt = $db->prepare("SELECT * FROM games WHERE name LIKE ? LIMIT ".$thispagefirstresult.",".$resultsperpage);
									            $stmt->execute(["%$search%"]);
									            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
									            {
									                $gamename = $row['name'];
									                $gameid = $row['id'];

									                $owner = $row['creatorid'];

									                $stmt2 = $db->prepare("SELECT * FROM accounts WHERE id = :id");
									                $stmt2->execute([':id' => $owner]);
									                $creator = $stmt2->fetch();

									                $creatorName = $creator['username'];
									                $creatorId = $creator['id'];
									                $getThumb = $row['thumbnail'];

																	$query2 = $db->prepare("SELECT * FROM servers WHERE game = :id");
																	$query2->execute([':id' => $gameid]);

																	$getPlayers = $query2->fetch();

																	if(!$getPlayers){
																		$players = 0;
																	}else{
																		$players = $getPlayers['players'];
																	}
									                ?>
																	<li class="list-item game-card">
																	    <div class="game-card-container">
																	    <a href="/view.aspx?id=<?=$gameid?>" class="game-card-link">
																	        <div class="game-card-thumb-container">
																	            <img class="game-card-thumb" src="<?=$getThumb?>" alt="Natural Disaster Survival" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;tr.rbxcdn.com/e1e35f53f2547279a765cf04fe61ab7b/150/150/Image/Jpeg&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
																	        </div>
																	        <div class="text-overflow game-card-name" title="Natural Disaster Survival" ng-non-bindable="">
																	            <?=$gamename?>
																	        </div>
																	        <div class="game-card-name-secondary">
																	            <?=$players?> Playing
																	        </div>
																	        <div class="game-card-vote">
																	            <div class="vote-bar">
																	                <div class="vote-thumbs-up">
																	                    <span class="icon-thumbs-up"></span>
																	                </div>
																	                <div class="vote-container" data-upvotes="0" data-downvotes="0" data-voting-processed="true">
																	                    <div class="vote-background "></div>
																	                    <div class="vote-percentage" style="width: 90%;"></div>
																	                    <div class="vote-mask">
																	                        <div class="segment seg-1"></div>
																	                        <div class="segment seg-2"></div>
																	                        <div class="segment seg-3"></div>
																	                        <div class="segment seg-4"></div>
																	                    </div>
																	                </div>
																	                <div class="vote-thumbs-down">
																	                    <span class="icon-thumbs-down"></span>
																	                </div>
																	            </div>
																	            <div class="vote-counts">
																	                <div class="vote-down-count">N/A</div>
																	                <div class="vote-up-count">N/A</div>

																	            </div>
																	        </div>
																	    </a>
																	    <span class="game-card-footer">
																	        <span class="text-label xsmall">By </span>
																	        <a class="text-link xsmall text-overflow" href="/User.aspx?ID=<?=$creatorId?>"><?=$creatorName?></a>
																	    </span>
																	    </div>
																	</li>
									                <?php
									            }
									            ?>
													</ul>
					            </div>
                      <?php
                      if(!isset($_GET['page4'])) {
                          $page4 = 1;
                      }else{
                          $page4 = $_GET['page4'];
                      }
                      $prevpage = $page4 - 1;
                      $nextpage = $page4 + 1;
                      if($page4 > 1){ ?><a href="/games/?page4=<?=$prevpage?><?php if(isset($_GET['page1'])){ echo'&page1=' . $_GET['page1']; } if(isset($_GET['page2'])){ echo'&page2=' . $_GET['page2']; } if(isset($_GET['page3'])){ echo'&page3=' . $_GET['page3']; } if(isset($_GET['page5'])){ echo'&page5=' . $_GET['page5']; } ?>"><?php } ?><div class="scroller prev<?php if($page4 > 1){}else{echo' disabled';} ?>">
                          <div class="arrow">
                              <span class="icon-games-carousel-left"></span>
                          </div>
                      </div><?php if($page4 > 1){ ?></a><?php }
                      if($page4 !== $numberofpages){ ?><a href="/games/?page4=<?=$nextpage?><?php if(isset($_GET['page1'])){ echo'&page1=' . $_GET['page1']; } if(isset($_GET['page2'])){ echo'&page2=' . $_GET['page2']; } if(isset($_GET['page3'])){ echo'&page3=' . $_GET['page3']; } if(isset($_GET['page5'])){ echo'&page5=' . $_GET['page5']; } ?>"><?php } ?><div class="scroller next<?php if($page4 == $numberofpages){echo' disabled';} ?>">
                          <div class="arrow">
                              <span class="icon-games-carousel-right"></span>
                          </div>
                      </div>
					        </div>
					        <ul class="hlist games game-cards game-cards-grid">
					            <div class="abp-spacer "></div>
					        </ul>
					    </div>
					</div>



					<div class="games-list-container container-4 overflow-hidden" id="GamesListContainer3" data-sortfilter="3" data-gamefilter="1" data-minbclevel="0" data-numberofrows="1" data-personalized-universe-id="0" style="margin-bottom: -51px; cursor: auto;">
					    <div class="games-list-header games-filter-changer">
					            <h3>Featured</h3>

					    </div>
					        <div class="show-in-multiview-mode-only">
					            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
					                See All
					            </div>
					        </div>
					    <div class="games-list" style="height: 276px;">
					        <div class="show-in-multiview-mode-only">
					            <div class="horizontally-scrollable" style="left: 0px;">
					                <ul class="hlist games game-cards">
                            <?php
                            if(!isset($_GET['page5'])) {
                                $page5 = 1;
                            }else{
                                $page5 = $_GET['page5'];
                            }

                            if(!isset($_GET['search'])) {
                                $search = "";
                            }else{
                                $search = $_GET['search'];
                            }

                            $resultsperpage = 6;

                            $result = $db->prepare("SELECT count(*) FROM `games` WHERE name LIKE ?");
                            $result->execute(["%$search%"]);
                            $gamescount = $result->fetchColumn();

                            $numberofpages = ceil($gamescount / $resultsperpage);
                            $thispagefirstresult = ($page5 - 1) * $resultsperpage;
									            $stmt = $db->prepare("SELECT * FROM games WHERE name LIKE ? LIMIT ".$thispagefirstresult.",".$resultsperpage);
									            $stmt->execute(["%$search%"]);
									            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
									            {
									                $gamename = $row['name'];
									                $gameid = $row['id'];

									                $owner = $row['creatorid'];

									                $stmt2 = $db->prepare("SELECT * FROM accounts WHERE id = :id");
									                $stmt2->execute([':id' => $owner]);
									                $creator = $stmt2->fetch();

									                $creatorName = $creator['username'];
									                $creatorId = $creator['id'];
									                $getThumb = $row['thumbnail'];

																	$query2 = $db->prepare("SELECT * FROM servers WHERE game = :id");
																	$query2->execute([':id' => $gameid]);

																	$getPlayers = $query2->fetch();

																	if(!$getPlayers){
																		$players = 0;
																	}else{
																		$players = $getPlayers['players'];
																	}
									                ?>
																	<li class="list-item game-card">
																	    <div class="game-card-container">
																	    <a href="/view.aspx?id=<?=$gameid?>" class="game-card-link">
																	        <div class="game-card-thumb-container">
																	            <img class="game-card-thumb" src="<?=$getThumb?>" alt="Natural Disaster Survival" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;tr.rbxcdn.com/e1e35f53f2547279a765cf04fe61ab7b/150/150/Image/Jpeg&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
																	        </div>
																	        <div class="text-overflow game-card-name" title="Natural Disaster Survival" ng-non-bindable="">
																	            <?=$gamename?>
																	        </div>
																	        <div class="game-card-name-secondary">
																	            <?=$players?> Playing
																	        </div>
																	        <div class="game-card-vote">
																	            <div class="vote-bar">
																	                <div class="vote-thumbs-up">
																	                    <span class="icon-thumbs-up"></span>
																	                </div>
																	                <div class="vote-container" data-upvotes="0" data-downvotes="0" data-voting-processed="true">
																	                    <div class="vote-background "></div>
																	                    <div class="vote-percentage" style="width: 90%;"></div>
																	                    <div class="vote-mask">
																	                        <div class="segment seg-1"></div>
																	                        <div class="segment seg-2"></div>
																	                        <div class="segment seg-3"></div>
																	                        <div class="segment seg-4"></div>
																	                    </div>
																	                </div>
																	                <div class="vote-thumbs-down">
																	                    <span class="icon-thumbs-down"></span>
																	                </div>
																	            </div>
																	            <div class="vote-counts">
																	                <div class="vote-down-count">N/A</div>
																	                <div class="vote-up-count">N/A</div>

																	            </div>
																	        </div>
																	    </a>
																	    <span class="game-card-footer">
																	        <span class="text-label xsmall">By </span>
																	        <a class="text-link xsmall text-overflow" href="/User.aspx?ID=<?=$creatorId?>"><?=$creatorName?></a>
																	    </span>
																	    </div>
																	</li>
									                <?php
									            }
									            ?>
													</ul>
					            </div>
                      <?php
                      if(!isset($_GET['page5'])) {
                          $page5 = 1;
                      }else{
                          $page5 = $_GET['page5'];
                      }
                      $prevpage = $page5 - 1;
                      $nextpage = $page5 + 1;
                      if($page5 > 1){ ?><a href="/games/?page5=<?=$prevpage?><?php if(isset($_GET['page1'])){ echo'&page1=' . $_GET['page1']; } if(isset($_GET['page2'])){ echo'&page2=' . $_GET['page2']; } if(isset($_GET['page3'])){ echo'&page3=' . $_GET['page3']; } if(isset($_GET['page4'])){ echo'&page4=' . $_GET['page4']; } ?>"><?php } ?><div class="scroller prev<?php if($page5 > 1){}else{echo' disabled';} ?>">
                          <div class="arrow">
                              <span class="icon-games-carousel-left"></span>
                          </div>
                      </div><?php if($page5 > 1){ ?></a><?php }
                      if($page5 !== $numberofpages){ ?><a href="/games/?page5=<?=$nextpage?><?php if(isset($_GET['page1'])){ echo'&page1=' . $_GET['page1']; } if(isset($_GET['page2'])){ echo'&page2=' . $_GET['page2']; } if(isset($_GET['page3'])){ echo'&page3=' . $_GET['page3']; } if(isset($_GET['page4'])){ echo'&page4=' . $_GET['page4']; } ?>"><?php } ?><div class="scroller next<?php if($page5 == $numberofpages){echo' disabled';} ?>">
                          <div class="arrow">
                              <span class="icon-games-carousel-right"></span>
                          </div>
                      </div>
					        </div>
					        <ul class="hlist games game-cards game-cards-grid">
					            <div class="abp-spacer "></div>
					        </ul>
					    </div>
					</div>



					<div class="games-list-container hidden container-5 overflow-hidden" id="GamesListContainer2" data-sortfilter="2" data-gamefilter="1" data-minbclevel="0" data-numberofrows="1" data-personalized-universe-id="0">
					    <div class="games-list-header games-filter-changer">
					            <h3>Top Favorite</h3>

					    </div>
					        <div class="show-in-multiview-mode-only">
					            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
					                See All
					            </div>
					        </div>
					    <div class="games-list" style="height: 276px;">
					        <div class="show-in-multiview-mode-only">
					            <div class="horizontally-scrollable">
					                <ul class="hlist games game-cards"></ul>
					            </div>
					            <div class="scroller prev disabled">
					                <div class="arrow">
					                    <span class="icon-games-carousel-left"></span>
					                </div>
					            </div>
					            <div class="scroller next disabled">
					                <div class="arrow">
					                    <span class="icon-games-carousel-right"></span>
					                </div>
					            </div>
					        </div>
					        <ul class="hlist games game-cards game-cards-grid">
					            <div class="abp-spacer "></div>
					        </ul>
					    </div>
					</div>



					<div class="games-list-container hidden container-6 overflow-hidden" id="GamesListContainer9" data-sortfilter="9" data-gamefilter="1" data-minbclevel="0" data-numberofrows="1" data-personalized-universe-id="0">
					    <div class="games-list-header games-filter-changer">
					            <h3>Top Paid</h3>

					    </div>
					        <div class="show-in-multiview-mode-only">
					            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
					                See All
					            </div>
					        </div>
					    <div class="games-list" style="height: 276px;">
					        <div class="show-in-multiview-mode-only">
					            <div class="horizontally-scrollable">
					                <ul class="hlist games game-cards"></ul>
					            </div>
					            <div class="scroller prev disabled">
					                <div class="arrow">
					                    <span class="icon-games-carousel-left"></span>
					                </div>
					            </div>
					            <div class="scroller next disabled">
					                <div class="arrow">
					                    <span class="icon-games-carousel-right"></span>
					                </div>
					            </div>
					        </div>
					        <ul class="hlist games game-cards game-cards-grid">
					            <div class="abp-spacer "></div>
					        </ul>
					    </div>
					</div>



					<div class="games-list-container hidden container-7 overflow-hidden" id="GamesListContainer14" data-sortfilter="14" data-gamefilter="1" data-minbclevel="0" data-numberofrows="1" data-personalized-universe-id="0">
					    <div class="games-list-header games-filter-changer">
					            <h3>Builders Club</h3>

					    </div>
					        <div class="show-in-multiview-mode-only">
					            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
					                See All
					            </div>
					        </div>
					    <div class="games-list" style="height: 276px;">
					        <div class="show-in-multiview-mode-only">
					            <div class="horizontally-scrollable">
					                <ul class="hlist games game-cards"></ul>
					            </div>
					            <div class="scroller prev disabled">
					                <div class="arrow">
					                    <span class="icon-games-carousel-left"></span>
					                </div>
					            </div>
					            <div class="scroller next disabled">
					                <div class="arrow">
					                    <span class="icon-games-carousel-right"></span>
					                </div>
					            </div>
					        </div>
					        <ul class="hlist games game-cards game-cards-grid">
					            <div class="abp-spacer "></div>
					        </ul>
					    </div>
					</div>



					<div class="games-list-container hidden container-8 overflow-hidden" id="GamesListContainer19" data-sortfilter="19" data-gamefilter="1" data-minbclevel="0" data-numberofrows="1" data-personalized-universe-id="0">
					    <div class="games-list-header games-filter-changer">
					            <h3>Popular in VR</h3>

					    </div>
					        <div class="show-in-multiview-mode-only">
					            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
					                See All
					            </div>
					        </div>
					    <div class="games-list" style="height: 276px;">
					        <div class="show-in-multiview-mode-only">
					            <div class="horizontally-scrollable">
					                <ul class="hlist games game-cards"></ul>
					            </div>
					            <div class="scroller prev disabled">
					                <div class="arrow">
					                    <span class="icon-games-carousel-left"></span>
					                </div>
					            </div>
					            <div class="scroller next disabled">
					                <div class="arrow">
					                    <span class="icon-games-carousel-right"></span>
					                </div>
					            </div>
					        </div>
					        <ul class="hlist games game-cards game-cards-grid">
					            <div class="abp-spacer "></div>
					        </ul>
					    </div>
					</div>


					            <!-- on page search results container-->
					            <div class="games-list-container hidden search-results-container overflow-hidden can-search" id="SearchResultsContainer">
					                <div class="games-list-header">
					                    <h3>Results for <span class="search-query-text"></span></h3>
					                </div>
					                <div class="games-list">
					                    <ul class="list-item game-cards"></ul>
					                    <div class="abp-spacer "></div>
					                </div>

					            </div>
					        </div>
					    </div>
					</div>
        </div>
            </div>
						<?php
						require_once '../content/functions.php';
						$get->footer();
						?>
</div>

<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
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
                    <div class="modal-image-container roblox-item-image" data-image-size="medium" data-no-overlays data-no-click>
                        <img class="modal-thumb" alt="generic image"/>
                    </div>
                </div>
                <div class="modal-btns">
                    <a href id="confirm-btn"><span></span></a>
                    <a href id="decline-btn"><span></span></a>
                </div>
                <div class="loading modal-processing">
                    <img class="loading-default" src="https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="Processing..."/>
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
    <script type="text/javascript" src="https://js.rbxcdn.com/cdbd7e966aa971b432a3e8411e18dd44.js"></script>
                    <script type="text/javascript" src="https://js.rbxcdn.com/822491cace41a2d39fd76db6cfd17800.js"></script>
    <script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/c14a216bd7773e7b637b4e6c3c2e619d.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/4acfdab2e6131feb84d783765b82a888.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/6bac93e9bb6716f32f09db749cec330b.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = 'https://js.rbxcdn.com/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/3368571372da9b2e1713bb54ca42a65a.js';Roblox.config.paths['Widgets.ItemImage'] = '8db82e6d725b907e91441b849cc35e47.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/f2697119678d0851cfaa6c2270a727ed.js';Roblox.config.paths['Widgets.SurveyModal'] = 'https://js.rbxcdn.com/d6e979598c460090eafb6d38231159f6.js';</script>
    <script>
        Roblox.XsrfToken.setToken('wCBjcPGexmuF');
    </script>
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
    <script type="text/javascript" src="https://js.rbxcdn.com/930cc692f5936d39826ebcf9190c9fc2.js"></script>
</html>
