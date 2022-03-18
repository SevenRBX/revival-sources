<?php
require_once 'site.php';
require_once 'content/functions.php';
if(!$logged){
die('<META http-equiv=refresh content=0;URL=/>');
exit;
}
$get->header('Xscape is a private server for the game ROBLOX. Xscape utilizes legacy clients and a classic site. We are not affliated with ROBLOX Corporation.', 'Home', 'https://images.rbxcdn.com/fb70fd2b56107a0d43f2f98658885702.jpg');
?>
    <div class="container-main">
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>
        <noscript>&lt;div&gt;&lt;div class="alert-info" role="alert"&gt;Please enable Javascript to use all the features on this site.&lt;/div&gt;&lt;/div&gt;</noscript>
        <div class="content ">

                            <div id="Skyscraper-Adp-Left" class="abp abp-container left-abp"></div>

        <div id="HomeContainer" class="row home-container" data-update-status-url="/home/updatestatus">

    <div class="col-xs-12 home-header">
        <a href="User.aspx?ID=" class="avatar avatar-headshot-lg">
            <img alt="avatar" src="content/images/head.png" id="home-avatar-thumb" class="avatar-card-image">
        </a>

        <script type="text/javascript">
            $("img#home-avatar-thumb").on('load', function () {
                if (Roblox && Roblox.Performance) {
                    Roblox.Performance.setPerformanceMark("head_avatar");
                }
            });
        </script>
        <div class="home-header-content ">
            <h1>
                <a href="User.aspx?ID=<?php echo $usr['id']; ?>">Hello, <?php echo $usr['username']; ?>!</a>
            </h1>
            <?php
            if($usr['MembershipType'] == "BuildersClub"){
            echo '<span class="icon-bc"></span>';
            }else if($usr['MembershipType'] == "TurboBuildersClub"){
                echo '<span class="icon-tbc"></span>';
            }else if($usr['MembershipType'] == "OutrageousBuildersClub"){
                echo '<span class="icon-obc"></span>';
            }
            ?>
        </div>
    </div>

    <div class="col-xs-12 section home-friends">
            <div class="container-header">
                <h2>Friends (0)</h2>
                <a href="Friends.aspx" class="btn-secondary-xs btn-more btn-fixed-width">See All</a>
            </div>

            <div class="section-content">
                <span>Looks like you have no friends. How sad.</span>
            </div>
        </div>

        <div id="recently-visited-places" class="col-xs-12 container-list home-games">
            <div class="container-header">
                <h2>Recently Played</h2>
<a href="" class="btn-secondary-xs btn-more btn-fixed-width">See All</a>            </div>

<ul class="hlist game-cards ">


<li class="list-item game-card">
    <div class="game-card-container">
        <a href="/view.aspx?id=1" class="game-card-link">
            <div class="game-card-thumb-container">
                <img class="game-card-thumb" src="https://tr.rbxcdn.com/e1e35f53f2547279a765cf04fe61ab7b/150/150/Image/Jpeg" width="150" title="Natural Disaster Survival" alt="Natural Disaster Survival" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t3.rbxcdn.com/1765189db47405c5132e629e8b88ef16&quot;,&quot;RetryUrl&quot;:null}" image-retry="">
            </div>
            <div class="text-overflow game-card-name" title="Natural Disaster Survival" ng-non-bindable="">
                Natural Disaster Survival
            </div>
            <div class="game-card-name-secondary">
                0 Playing
            </div>
            <div class="game-card-vote">
                <div class="vote-bar" data-voting-processed="true">
                    <div class="vote-thumbs-up">
                        <span class="icon-thumbs-up"></span>
                    </div>
                    <div class="vote-container" data-upvotes="0" data-downvotes="0">
                        <div class="vote-background no-votes"></div>
                        <div class="vote-percentage" style="width: 0%;"></div>
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
                    <div class="vote-down-count">0</div>
                    <div class="vote-up-count">0</div>

                </div>
            </div>
        </a>
        <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="User.aspx?ID=">Seven</a>
    </span>
    </div>
</li>

</ul>
        </div>

<div id="my-favorties-games" class="col-xs-12 container-list home-games">
            <div class="container-header">
                <h2>My Favorites</h2>
<a href="" class="btn-secondary-xs btn-more btn-fixed-width">See All</a>            </div>

<div class="section-content">
<span>No Favorite Games.</span>
</div>
</div>

<div class="col-xs-12 col-sm-6 home-right-col">

        <div class="section">
            <div class="section-header">
                <h2>Blog News</h2>
                <a href="https://xsscape.cf/blog/" class="btn-control-xs btn-more btn-fixed-width">See More</a>
            </div>
            <div class="section-content">

<ul class="blog-news">
            <li class="news">
                <span class="text-overflow news-link"><a href="" ref="news-article" class="text-name text-lead">2016 Sitetest released!</a></span>
            </li>

</ul>
            </div>
        </div>
    </div><!-- .home-right-col -->

   <div class="col-xs-12 col-sm-6 home-left-col">
        <div class="section">
            <div class="section-header">
                <h2>My Feed</h2>
            </div>
            <div class="section-content">
                <div class="form-horizontal" id="statusForm" role="form">
                    <div class="form-group">
                        <input class="form-control input-field" id="txtStatusMessage" maxlength="254" placeholder="What are you doing on Xscape?" value="">
                        <p class="form-control-label">Status update failed.</p>
                    </div>
                    <a type="button" class="btn-primary-md btn-fixed-width" id="shareButton">Share</a>
                    <img id="loadingImage" class="share-login" alt="Sharing..." src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif" height="17" width="48">
                </div>

       <ul class="vlist feeds">
        <li class="list-item">

<a href="" style="width:60px;height:60px;" class="list-header avatar avatar-headshot-lg"><img class="header-thumb" style="border-radius: 50%;" src="content/images/head.png"></a>
            <div class="list-body">
                <p class="list-content"><a href="User.aspx?ID=1"><b>Seven</b></a></p><p class="feedtext linkify">"fard"</p> (posted by an admin)<p></p>
                <span class="xsmall text-date-hint">Dec 17, 2021 | 11:25 PM (GMT)</span>
                    <a href="">
                        <span class="icon-report"></span>
                    </a>
            </div>
        </li>

</ul>


            </div>
        </div>
    </div>







</div>
<div id="Skyscraper-Adp-Right" class="abp abp-container right-abp"></div>

        </div>
            </div>

<?php
$get->footer();
?>

</div>

<div id="usernotifications-data-model" class="hidden" data-notificationsdomain="https://realtime.roblox.com/" data-notificationstestinterval="5000" data-notificationsmaxconnectiontime="43200000" data-userid="168914479">
</div>    <script type="text/javascript">
        var Roblox = Roblox || {};
        Roblox.ChatTemplates = {
            ChatBarTemplate: "chat-bar",
            AbuseReportTemplate: "chat-abuse-report",
            DialogTemplate: "chat-dialog",
            FriendsSelectionTemplate: "chat-friends-selection",
            GroupDialogTemplate: "chat-group-dialog",
            NewGroupTemplate: "chat-new-group",
            DialogMinimizeTemplate: "chat-dialog-minimize",
            ChatPlaceholderTemplate: "chat-placeholder"
        };
        Roblox.Chat = {
            SoundFile: "https://static.rbxcdn.com/Chat/sound/chatsound.mp3"
        };
        Roblox.Party = {};
        Roblox.Party.SetGoogleAnalyticsCallback = function () {
            RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent('GameLaunchAttempt_Win32', 'GameLaunchAttempt_Win32_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  };
        };

    </script>

</div>
<script type="text/javascript" src="https://js.rbxcdn.com/e2cb6070c58f829226a04307a3f3e28a.js.gzip"></script>

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



<script type="text/javascript" src="https://js.rbxcdn.com/d03710605a8eb25ee026670046b51a9a.js.gzip"></script>
        <div ng-modules="templateApp" class="ng-scope">
            <!-- Template bundle: base -->
<script type="text/javascript">
"use strict"; angular.module("templateApp", []).run(['$templateCache', function($templateCache) {

 }]);
</script>

            <!-- Template bundle: page -->
<script type="text/javascript">
"use strict"; angular.module("templateApp", []).run(['$templateCache', function($templateCache) {

 }]);
</script>

        </div>
    <script type="text/javascript" src="https://js.rbxcdn.com/8ac2a4e48584e739bed7e94652afbf52.js.gzip"></script>
        <script type="text/javascript" src="https://js.rbxcdn.com/3da61c013993a1c4a66392c7e2b11b22.js.gzip"></script>



    <script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/f27ab562314284f6db31a6b309af5085.js.gzip';Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/3c98e9fd0b1301c457d4dab1df00b796.js.gzip';Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/823c7d686e6b3d8321275740fe498f9d.js.gzip';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/5cf0eb71249768c86649bbf0c98591b0.js.gzip';Roblox.config.paths['Widgets.GroupImage'] = 'https://js.rbxcdn.com/556af22c86bce192fb12defcd4d2121c.js.gzip';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/7689b2fd3f7467640cda2d19e5968409.js.gzip';Roblox.config.paths['Widgets.ItemImage'] = 'https://js.rbxcdn.com/c2aa2fcc2b1e8ec82e1bacfdb9dfffea.js.gzip';Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/52ff803e77bb661839e8b2c93bb5ba27.js.gzip';Roblox.config.paths['Widgets.SurveyModal'] = 'https://js.rbxcdn.com/56ad7af86ee4f8bc82af94269ed50148.js.gzip';</script>


    <script>
        Roblox.XsrfToken.setToken('q/ZM1ETKuCQ4');
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


    <script type="text/javascript" src="https://js.rbxcdn.com/083bdeec0fffe305fb4684b7ecb55299.js.gzip"></script>


<script type="text/javascript" src="https://js.rbxcdn.com/5926309ff55b06c732ffe910f2100b1e.js.gzip"></script>

<script type="text/javascript" src="https://js.rbxcdn.com/b1a389c995e5a832c76249e69701d023.js.gzip"></script>

<div id="push-notification-registrar-settings" data-notificationshost="https://notifications.roblox.com" data-reregistrationinterval="0" data-registrationpath="register-chrome" data-shoulddeliveryendpointbesentduringregistration="False" data-platformtype="ChromeOnDesktop">
</div>
<div id="push-notification-registration-ui-settings" data-noncontextualpromptallowed="true" data-promptonfriendrequestsentenabled="true" data-promptonprivatemessagesentenabled="false" data-promptintervals="[604800000,1209600000,2419200000]" data-notificationsdomain="https://notifications.roblox.com" data-userid="168914479">
</div>

<script type="text/template" id="push-notifications-initial-global-prompt-template">
    <div class="push-notifications-global-prompt">
        <div class="alert-info push-notifications-global-prompt-site-wide-body">
            <div class="push-notifications-prompt-content">
                <h5>
                    <span class="push-notifications-prompt-text">
                        Can we send you notifications on this computer?
                    </span>
                </h5>
            </div>
            <div class="push-notifications-prompt-actions">
                <button type="button" class="btn-fixed-width btn-control-xs push-notifications-prompt-accept">Notify Me</button>
                <span class="icon-close-white push-notifications-dismiss-prompt"></span>
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="push-notifications-permissions-prompt-template">
    <div class="modal fade" id="push-notifications-permissions-prompt-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog rbx-modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">
                            <span class="icon-close"></span>
                        </span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h5>Enable Desktop Push Notifications</h5>
                </div>
                <div class="modal-body">
                        <div>
                            Now just click <strong>Allow</strong> in your browser, and we'll start sending you push notifications!
                        </div>
                        <div class="push-notifications-permissions-prompt-instructional-image">
                                <img width="380" height="250" src="https://static.rbxcdn.com/images/Notifications/push-permission-prompt-chrome-windows-20160701.png" />
                        </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="push-notifications-permissions-disabled-instruction-template">
    <div class="modal fade" id="push-notifications-permissions-disabled-instruction-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog rbx-modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">
                            <span class="icon-close"></span>
                        </span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h5>Turn Push Notifications Back On</h5>
                </div>
                <div class="instructions-body">
                    <div class="reenable-step reenable-step1-of3">
                        <h1>1</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Click the green lock next to the URL bar to open up your site permissions.</p>
                            <img width="270" height="139" src="https://static.rbxcdn.com/images/Notifications/push-permission-unblock-step1-chrome-20160701.png">
                    </div>
                    <div class="reenable-step reenable-step2-of3">
                        <h1>2</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Click the drop-down arrow next to Notifications in the <strong>Permissions</strong> tab.</p>
                            <img width="270" height="229" src="https://static.rbxcdn.com/images/Notifications/push-permission-unblock-step2-chrome-20160701.png">
                    </div>
                    <div class="reenable-step reenable-step3-of3">
                        <h1>3</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Select <strong>Always allow on this site</strong> to turn notifications back on.</p>
                            <img width="270" height="229" src="https://static.rbxcdn.com/images/Notifications/push-permission-unblock-step3-chrome-20160701.png">
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="push-notifications-successfully-enabled-template">
    <div class="push-notifications-global-prompt">
        <div class="alert-system-feedback">
            <div class="alert alert-success">
                Push notifications have been enabled!
            </div>
        </div>
    </div>
</script>
<script type="text/template" id="push-notifications-successfully-disabled-template">
    <div class="push-notifications-global-prompt">
        <div class="alert-system-feedback">
            <div class="alert alert-success">
                Push notifications have been disabled.
            </div>
        </div>
    </div>
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
        &lt;img src="http://b.scorecardresearch.com/p?c1=2&amp;c2=&amp;c3=&amp;c4=&amp;c5=&amp;c6=&amp;c15=&amp;cv=2.0&amp;cj=1"/&gt;
    </noscript>

</body></html>
