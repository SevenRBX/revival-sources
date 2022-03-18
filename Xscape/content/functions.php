<?php
//require_once 'site.php';

define('userId', $usr['id']);
define('userName', $usr['username']);
define('userTix', $usr['Tickets']);
define('userRobux', $usr['Robux']);

$get = new get();
class get{
  function updated($time) {
        $diff = time() - strtotime($time);
        $sec = $diff;
        $min = round($diff / 60 );
        $hrs = round($diff / 3600);
        $days = round($diff / 86400 );
        $weeks = round($diff / 604800);
        $mnths = round($diff / 2600640 );
        $yrs = round($diff / 31207680 );
        if($sec <= 60) {
            return "$sec seconds ago";
        }
        else if($min <= 60) {
            if($min==1) {
                return "1 minute ago";
            }
            else {
                return "$min minutes ago";
            }
        }
        else if($hrs <= 24) {
            if($hrs == 1) {
                return "1 hour ago";
            }
            else {
                return "$hrs hours ago";
            }
        }
        else if($days <= 7) {
            if($days == 1) {
                return "Yesterday";
            }
            else {
                return "$days days ago";
            }
        }
        else if($weeks <= 4.3) {
            if($weeks == 1) {
                return "1 week ago";
            }
            else {
                return "$weeks weeks ago";
            }
        }
        else if($mnths <= 12) {
            if($mnths == 1) {
                return "1 month ago";
            }
            else {
                return "$mnths months ago";
            }
        }
        else {
            if($yrs == 1) {
                return "1 year ago";
            }
            else {
                return "$yrs years ago";
            }
        }
    }
  function nav(){
      echo('<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css"><div id="header"
           class="navbar-fixed-top rbx-header"
           role="navigation">
          <div class="container-fluid">
              <div class="rbx-navbar-header">
                  <div data-behavior="nav-notification" class="rbx-nav-collapse" onselectstart="return false;">
                          <span class="icon-nav-menu"></span>

                  </div>
                  <div class="navbar-header">
                      <a class="navbar-brand" href="/">
                          <span class="icon-logo"></span>
                          <span class="icon-logo-r"></span>
                      </a>
                  </div>
              </div>

            <ul class="nav rbx-navbar hidden-xs hidden-sm col-md-4 col-lg-3">
                  <li>
                      <a class="nav-menu-title" href="/games">Games</a>
                  </li>
                  <li>
                      <a class="nav-menu-title" href="/catalog">Catalog</a>
                  </li>
                  <li>
                      <a class="nav-menu-title" href="/develop">Develop</a>
                  </li>
                  <li>
                      <a class="buy-robux nav-menu-title" href="/upgrade/BuildersClub.aspx">Upgrade</a>
                  </li>

              </ul><!--rbx-navbar-->
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
                      <li class="rbx-navbar-search-option selected" data-searchurl="/search/users?keyword=">
                          <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in People</span>
                      </li>
                              <li class="rbx-navbar-search-option" data-searchurl="/search/games/?Keyword=">
                                  <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Games</span>
                              </li>
                              <li class="rbx-navbar-search-option" data-searchurl="/catalog?Keyword=">
                                  <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Catalog</span>
                              </li>
                              <li class="rbx-navbar-search-option" data-searchurl="/search/groups/search.aspx?val=">
                                  <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Groups</span>
                              </li>
                              <li class="rbx-navbar-search-option" data-searchurl="/search/develop/library?CatalogContext=2&amp;Category=6&amp;Keyword=">
                                  <span class="rbx-navbar-search-text">Search <span class="rbx-navbar-search-string"></span> in Library</span>
                              </li>
                  </ul>
              </div><!--rbx-navbar-search-->
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
                          <a class="rbx-menu-item" href="account">
                              Settings
                              <span class="xsmall nav-setting-highlight hidden">0</span>
                          </a>
                      </li>
                      <li><a class="rbx-menu-item" href="" target="_blank">Help</a></li>
                      <li><a class="rbx-menu-item" data-behavior="logout" data-bind="/Logout.ashx">Logout</a></li>
                  </ul>
              </div>
          </li>

          <li id="navbar-tix" class="navbar-icon-item">
               <a id="nav-tix-icon" class="rbx-menu-item" data-toggle="popover" data-bind="popover-tix">
                   <span class="icon-nav-tix" id="nav-tix"></span>
                   <span class="rbx-text-navbar-right" id="nav-tix-amount">'.number_format(userTix).'</span>
               </a>
               <div class="rbx-popover-content" data-toggle="popover-tix">
                   <ul class="dropdown-menu" role="menu">
                       <li><a href="/money" id="nav-tix-balance" class="rbx-menu-item">'.number_format(userTix).' Tickets</a></li>
                       <li><a href="../upgrade" class="rbx-menu-item">Get Tickets</a></li>
                   </ul>
               </div>
           </li>
           <li id="navbar-robux" class="navbar-icon-item">
                <a id="nav-robux-icon" class="rbx-menu-item" data-toggle="popover" data-bind="popover-robux">
                    <span class="icon-nav-robux" id="nav-robux"></span>
                    <span class="rbx-text-navbar-right" id="nav-robux-amount">'.number_format(userRobux).'</span>
                </a>
                <div class="rbx-popover-content" data-toggle="popover-robux">
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/money" id="nav-robux-balance" class="rbx-menu-item">'.number_format(userRobux).' Robux</a></li>
                        <li><a href="../upgrade" class="rbx-menu-item">Get Robux</a></li>
                    </ul>
                </div>
            </li>

           <li id="navbar-notifications" class="navbar-icon-item">
               <a id="nav-notifications-icon" class="rbx-menu-item" data-toggle="popover" data-bind="popover-notifications">
                   <span class="icon-notifications" id="nav-notifications"></span>
               </a>
               <div class="rbx-popover-content" data-toggle="popover-notifications">
                   <ul class="dropdown-menu" role="menu">
                       <li><a href="/notifications" class="rbx-menu-item">No Notifications</a></li>
                   </ul>
               </div>
           </li>

          <li class="rbx-navbar-right-search" data-toggle="toggle-search">
              <a class="rbx-menu-icon rbx-menu-item">
                  <span class="icon-nav-search-white"></span>
              </a>
          </li>
      </ul>        </div><!-- navbar right-->
              <ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
                  <li>
                      <a class="nav-menu-title" href="/games">Games</a>
                  </li>
                  <li>
                      <a class="nav-menu-title" href="/catalog">Catalog</a>
                  </li>
                  <li>
                      <a class="nav-menu-title" href="/develop">Develop</a>
                  </li>
                  <li>
                      <a class="buy-robux nav-menu-title" href="/upgrade">Upgrade</a>
                  </li>
              </ul><!--rbx-navbar-->
          </div>
      </div>

      <!-- LEFT NAV MENU -->
          <div id="navigation" class="rbx-left-col" data-behavior="left-col">
              <ul>
                  <li class="text-lead">
                      <a class="text-overflow" href="/User.aspx?ID='.userId.'">'.userName.'</a>
                  </li>
                  <li class="rbx-divider"></li>
              </ul>

              <div class="rbx-scrollbar" data-toggle="scrollbar" onselectstart="return false;">
                  <ul>
                      <li><a href="/home" id="nav-home"><span class="icon-nav-home"></span><span>Home</span></a></li>
                      <li><a href="/User.aspx?ID='.userId.'" id="nav-profile"><span class="icon-nav-profile"></span><span>Profile</span></a></li>
                      <li>
                          <a href="/my/messages/#!/inbox" id="nav-message" data-count="0">
                              <span class="icon-nav-message"></span><span>Messages</span>
                              <span class="notification-blue " title="0">0</span>
                          </a>
                      </li>
                      <li>
                          <a href="/Friends.aspx" id="nav-friends" data-count="0">
                              <span class="icon-nav-friends"></span><span>Friends</span>
                              <span class="notification-blue " title="0">0</span>
                          </a>
                      </li>
                      <li>
                          <a href="/my/avatar" id="nav-character">
                              <span class="icon-nav-charactercustomizer"></span><span>Avatar</span>
                          </a>
                      </li>
                      <li>
                          <a href="/inventory" id="nav-inventory">
                              <span class="icon-nav-inventory"></span><span>Inventory</span>
                          </a>
                      </li>
                      <li>
                          <a href="/trade" id="nav-trade">
                              <span class="icon-nav-trade"></span><span>Trade</span>
                          </a>
                      </li>
                      <li>
                          <a href="/groups" id="nav-group">
                              <span class="icon-nav-group"></span><span>Groups</span>
                          </a>
                      </li>
                      <li>
                          <a href="/forum/" id="nav-forum">
                              <span class="icon-nav-forum"></span><span>Forum</span>
                          </a>
                      </li>
                      <li>
                          <a href="/blog/" id="nav-blog">
                              <span class="icon-nav-blog"></span><span>Blog</span>
                          </a>
                      </li>
                          <li>
                              <a id="nav-shop" class="roblox-shop-interstitial">
                                  <span class="icon-nav-shop"></span><span>Shop</span>
                              </a>
                          </li>
                      <li class="rbx-upgrade-now">
                          <a href="/upgrade" class="btn-secondary-md" id="upgrade-now-button">Upgrade Now</a>
                      </li>
                          <li class="font-bold small">
                              Events
                          </li>
                          <li class="rbx-nav-sponsor" ng-non-bindable>
                                  <span class="menu-item">No events.</span>
                          </li>');
                              //<li class="rbx-nav-sponsor" ng-non-bindable>
                              //    <a class="menu-item" href="https://www.roblox.com/sponsored/TrickOrTreatCountdown" title="TrickOrTreatCountdown">
                              //            <img src="https://images.rbxcdn.com/afb2cf5cfcf786eaf8af131529fc64f6" />
                              //      </a>
                              //  </li>
                  echo('</ul>
              </div>
          </div>');
  }
function footer(){
echo('<footer class="container-footer">
    <div class="footer">
        <ul class="row footer-links">
                <li class="col-4 col-xs-1 footer-link">
                    <a href="" class="text-footer-nav roblox-interstitial" target="_blank">
                        About Us
                    </a>
                </li>
                <li class="col-4 col-xs-1 footer-link">
                    <a href="https://discord.gg/hSeUXnJwvV" class="text-footer-nav roblox-interstitial" target="_blank">
                        Discord
                    </a>
                </li>
            <li class="col-4 col-xs-1 footer-link">
                <a href="" class="text-footer-nav" target="_blank">
                    Blog
                </a>
            </li>
            <li class="col-4 col-xs-1 footer-link">
                <a href="" class="text-footer-nav roblox-interstitial" target="_blank">
                    Parents
                </a>
            </li>
            <li class="col-4 col-xs-1 footer-link">
                <a href="" class="text-footer-nav roblox-interstitial" target="_blank">
                    Help
                </a>
            </li>
            <li class="col-4 col-xs-1 footer-link">
                <a href="" class="text-footer-nav roblox-interstitial" target="_blank">
                    Terms
                </a>
            </li>
            <li class="col-4 col-xs-1 footer-link">
                <a href="" class="text-footer-nav privacy" target="_blank">
                    Privacy
                </a>
            </li>
        </ul>
        <p class="text-footer footer-note">
            2021 Xscapse
                <br>
<span class="footer-kid-safe-logo">
    <a href="/" target="_blank"><img border="0" alt="Xscape!" width="200" src="/content/images/header.png"></a>
</span>        </p>
    </div>
</footer>');
}
function header($desc, $title, $image){
echo('<!DOCTYPE html>
<html>
<head>
<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,ix-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}</style>
<title>'.$title.' - Xscape</title>
<meta property="og:site_name" content="'.$title.' - Xscape">
<meta property="og:title" content="'.$title.' - Xscape">
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:image" content="'.$image.'">
<meta property="og:description" content="'.$desc.'">
<meta property="fb:app_id" content="190191627665278"><meta name="twitter:card" content="summary_large_image"><meta name="twitter:site" content="@ROBLOX"><meta name="twitter:title" content="ROBLOX"><meta name="twitter:description" content="'.$desc.'"><meta name="twitter:creator"><meta name="twitter:image1" content="'.$image.'"/><meta name="twitter:app:country" content="US"><meta name="twitter:app:name:iphone" content="'.$title.' Mobile"><meta name="twitter:app:id:iphone" content="431946152"><meta name="twitter:app:url:iphone"><meta name="twitter:app:name:ipad" content="'.$title.' Mobile">
<meta name="twitter:app:id:ipad" content="431946152">
<meta name="twitter:app:url:ipad">
<meta name="twitter:app:name:googleplay" content="'.$title.'">
<meta name="twitter:app:id:googleplay" content="com.roblox.client">
<meta name="twitter:app:url:googleplay"/>');
$this->nav2();
}
function nav2(){
?>
<link href="../favicon.ico" rel="icon">
        <link rel="manifest" href="https://www.roblox.com/push-notifications/chrome-manifest" crossorigin="use-credentials">
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">
<script type='text/javascript' src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js'></script>
<script type='text/javascript'>window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type='text/javascript' src='https://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js'></script>
<script type='text/javascript'>window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
<link rel="canonical" href="/home">

<link rel='stylesheet' href='https://dtjatwg9u87ct.cloudfront.net/content/css/CSSmain.css' />
<link rel='stylesheet' href='https://xsscape.cf/content/css/leanbasenew.css' />

<link rel="stylesheet" href="https://static.rbxcdn.com/css/page___532f8fc30ac54e7ea2b94313bac1040e_m.css/fetch">
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

<body id="rbx-body" class="obc-theme" data-performance-relative-value="0.005" data-internal-page-name="Home" data-send-event-percentage="0.01">
    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm" data-as-http-regex="((blog|wiki|[^.]help|corp|polls|bloxcon|developer|devforum)\.roblox\.com|robloxlabs\.com)"></div>

<div id="image-retry-data" data-image-retry-max-times="10" data-image-retry-timer="1500">
</div>
<div id="http-retry-data" data-http-retry-max-timeout="0" data-http-retry-base-timeout="0">
</div>

<div id="fb-root"></div>

<div id="wrap" class="wrap no-gutter-ads logged-in" data-gutter-ads-enabled="false">
<?php
$this->nav();
?>
   <script type="text/javascript">
    var Roblox = Roblox || {};
    (function() {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>
<?php
}
}
