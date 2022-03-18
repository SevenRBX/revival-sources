<?php
require_once '../site.php';
$s = '';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
   if(!empty($_POST['username']) && !empty($_POST['password']))
   {
      $cleanu = $ep->remove($_POST['username']);
      $cleanp = $ep->remove($_POST['password']);

      $query = $db->prepare("SELECT * FROM accounts WHERE username = :userName");
      $query->execute([':userName' => $cleanu]);

      $luser = $query->fetch();
      if(!$luser)
      {
        $s = 'That account does not exist.';
      }else
      {
        $accpass = $luser['password'];
        if (password_verify($cleanp, $accpass)){
        session_regenerate_id();
	$_SESSION['primarylogin'] = TRUE;
	$_SESSION['identify'] = $luser['identifier'];

        header('Location: Discord.aspx');
        }else{
         $s = 'That password is not linked with this account.';
        }
      }
   }else
   {
   $s = 'Please complete the form.';
   }
}
if($logged){
header('Location: /My/Home.aspx');
}else{
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head id="ctl00_Head1">
<title>Xscape (not roblos, no sue)</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="canonical" href="https://www.xsscape.cf" />
<link rel="stylesheet" href="https://www.roblox.com/CSS/Base/CSS/FetchCSS?path=main___5cd3ef5a89930d0cdc3a37810681b296_m.css"/>

<link rel="stylesheet" href="https://www.roblox.com/CSS/Base/CSS/FetchCSS?path=page___ea34f913e9ed3022a3b739d13a4cc140_m.css"/>

<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico"/><meta http-equiv="Content-Language" content="en-us"/><meta name="author" content="David Bazooka"/><meta id="ctl00_metadescription" name="description" content="what? you expected a description????"/>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.7.2.min.js'><\/script>")</script>
<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/4.0/1/MicrosoftAjax.js"></script>
<script type="text/javascript">window.Sys || document.write("<script type='text/javascript' src='/js/Microsoft/MicrosoftAjax.js'><\/script>")</script>

<script type="text/javascript" src="https://s3.amazonaws.com/js.roblox.com/b9a6e060f8239a55d7ce9987dba27833.js"></script>
<script type="text/javascript">Roblox.config.externalResources = ['/js/jquery/jquery-1.7.2.min.js','/js/json2.min.js'];Roblox.config.paths['jQuery'] = 'https://s3.amazonaws.com/js.roblox.com/29cf397a226a92ca602cb139e9aae7d7.js';Roblox.config.paths['Pagelets.BestFriends'] = 'https://s3.amazonaws.com/js.roblox.com/c8acaba4214074ed4ad6f8b4a9647038.js';Roblox.config.paths['Pages.Catalog'] = 'https://s3.amazonaws.com/js.roblox.com/7ad0cc4e0732a00fff80b669dcad25ff.js';Roblox.config.paths['Pages.Messages'] = 'https://s3.amazonaws.com/js.roblox.com/c76c622cc9b0c91dff4467a6145bfecc.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://s3.amazonaws.com/js.roblox.com/b7f418a5fefacfd21f2c86b495b4698f.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://s3.amazonaws.com/js.roblox.com/d83d02dd89808934b125fa21c362bcb9.js';Roblox.config.paths['Widgets.GroupImage'] = 'https://s3.amazonaws.com/js.roblox.com/3e692c7b60e1e28ce639184f793fdda9.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://s3.amazonaws.com/js.roblox.com/e8b579b8e31f8e7722a5d10900191fe7.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://s3.amazonaws.com/js.roblox.com/facde7fc56e53e1ef9ee75203bc76bb4.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://s3.amazonaws.com/js.roblox.com/08e1942c5b0ef78773b03f02bffec494.js';</script><script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({'internalEventListenerPixelEnabled': true});
    });
</script>
<script type="text/javascript" src="https://s3.amazonaws.com/js.roblox.com/8b8cdc2c039888aeaaccd755f9bf971c.js"></script>

<script type="text/javascript" src="https://s3.amazonaws.com/js.roblox.com/06e476c0dc5c392d44f647abae350a69.js"></script>

<script type="text/javascript" src="https://s3.amazonaws.com/js.roblox.com/79ee4f340b36cf0311b184567c18e335.js"></script>

<script type="text/javascript" src="https://s3.amazonaws.com/js.roblox.com/06e476c0dc5c392d44f647abae350a69.js"></script>
</head>

<body roblox-js-usercheckcontrollerenabled="True">

    <script type="text/javascript">Roblox.XsrfToken.setToken('');</script>
 
    <script type="text/javascript">
        if (top.location != self.location) {
            top.location = self.location.href;
        }
    </script>
  
<style type="text/css">
    
</style>

<script src="https://www.roblox.com/ScriptResource.axd?d=PTQZqyZPt0vHPrmTRA4Wgtjl6Q_jcDXhBT6QZeLir-aRt4FZcIPaq4opfOFMe2x1y7VivQC3TgbNj5RTQ0avrtg4R0KyYE5UAmslTEALtzlX1gBz1gOkYRzcoGcQFCbLKdo8AcevuErbv_TmxDL98iEMq7CQhf6EQwFFL0i113_-rVzim-9Jr8lyrxzpzFQid0rynUnNRA1MEIecj0IsaiQd34D_Sdt_3Fs3A5fAgpUxlcB6onw6rAHW6BubAjfmtPTKiWhRRrKM1yHMco-RXXt2ceMyqdQZtiCSpf9GszsAWgEVHo4SspZtXt2mhs7fiTXpZQ24N1EIHpE3EWfxq2gr9QVFCotoRMFG5v585F4qexLmQlTrhjEulc2OYcL_d8OcHMutQ4yhHSfeeGOJegYa1JoE8RqvrmxfnuktpRzijH71wPsZet7EsndJi3pQqaI4QQ2" type="text/javascript"></script>
<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWlwEC2fHStAoCwbq/fgLeur9+At+6v34C3Lq/fgLdur9+Atq6v34C27q/fgLYur9+Asm6v34Cxrq/fgLeuv99At66830C3rr3fQLU6bvTAgLL6bvTAgLK6bvTAgLJ6bvTAgLI6bvTAgLP6bvTAgLO6bvTAgLN6bvTAgLc6bvTAgLT6bvTAgLL6fvQAgLL6ffQAgLL6fPQAgLL6c/QAgLL6cvQAgLL6cfQAgLL6cPQAgLL6d/QAgLL6ZvTAgLL6ZfTAgLK6fvQAgLK6ffQAgLK6fPQAgLK6c/QAgLK6cvQAgLK6cfQAgLK6cPQAgLK6d/QAgLK6ZvTAgLK6ZfTAgLJ6fvQAgLJ6ffQAgKhxLKaCQLyvNuSDQLyvM+1BALyvPPoDwKZhcHxCAKZhfUUApmF2f0GApmFzZAOApmF8csBApmF5e4IApmFiQICmYW9pQsCmYWh2AICmYXV8wUC3ea8BQLd5qC4CwLd5pSBDgLd5rikAQLd5qzfCALd5tDyAwLd5sSVCwLd5ujIAgLd5pzsBQLd5oCHDQLgz56oDgLgz4LDAQLgz/arBALgz5rPDwLgz47iBgLgz7KFDgLgz6a4AQLgz8rTCALgz/72AwLgz+KpCwLXpd7uAQLXpcKBCQLXpbbqDwLXpdqNBwLXpc6gDgLXpfLbAQLXpeb+CALXpYoSAtelvrULAtelougCAvqOsPEPAvqOpJQHAvqOiP0FAvqOvJANAvqOoMsEAvqO1O4PAvqO+IEHAvqO7KQOAvqOkNgBAvqOhPMIAoGXkoQKAoGXhr8NAoGX6gcCgZeeuwsCgZeC3gICgZe28QUCgZfalA0CgZfOzwQCgZfy4g8CgZfmhQcCpPj0LgKk+JjCCwKk+MyqDgKk+PDNAQKk+OTgCAKk+IgEAqT4vL8LAqT4oNICAqT41PUFAqT4+KgNAsvC1rEOAsvC+tQBAsvCrr0EAsvC0tAPAsvCxosHAsvC6q4OAsvCnsIBAsvCguUIAsvCthgCy8LaswsC7qupxAQC7qvd/w8C7quBwAIC7qu1+wUC7qvZng0C7qvNsQQC7qvx1A8C7qvljwcC7quJow4C7qu9xgEC9byL7wIC9by/ggoC9bzj6ggC9byXDgL1vLuhCwL1vK/EAgL1vNP/BQK7zZfEDwLGiM+hCgLZj9i+AQKjq7COD1lDwjfTssMvR7irRFZpjrOeeW/q"/>
</div>
    <div id="fb-root">
    </div>

<div id="MasterContainer">
<script type="text/javascript">Roblox.FixedUI.gutterAdsEnabled=false;</script>
        

        
        <div id="Container">

<style type="text/css">
    div.mySubmenuFixed {
        top: 36px;
        background-color: #191919;
        height: 25px;
        *top: 0px;
    }
</style>

<div id="Banner" class="BannerRedesign">
    <div id="NavigationRedesignBannerContainer" class="BannerCenterContainer">
        <a href="Default/" id="navbar-logo" class="btn-logo" data-se="nav-logo"></a>
        <div id="NavRedesign" class="NavigationRedesign">
            <ul id="ctl00_cphBanner_ctl00_MenuUL">
                <li><a href="/My/Home.aspx" ref="nav-myroblox" data-se="nav-myhome">Home</a></li>
                <li class="gamesLink"><a id="hlGames" data-se="nav-games" href="Games.aspx" title="Games" ref="nav-games">Games</a> </li>
                <li class="catalogLink"><a id="hlCatalog" data-se="nav-catalog" href="Catalog.aspx" title="Catalog" ref="nav-catalog">Catalog</a></li>
                <li><a id="BuildLink" data-se="nav-build" href="Build/My.aspx" title="Build" ref="nav-build">Build</a></li>
                <li class="upgradeLink"><a id="hlBuildersClub" data-se="nav-upgrade" href="Upgrades/BuildersClub.aspx" title="Upgrade" ref="nav-buildersclub">Upgrade</a></li>
                <li><a data-se="nav-forum"  href="/Forum/" style="" title="Forum" ref="nav-forum">Forum</a></li>
                
                <li class="moreLink" drop-down-nav-button="moreLink">
                    <div class="LinkContainer">
                        <a id="hlMore" title="More" data-se="nav-more" ref="nav-more">More<span id="moreMenuToggle"></span></a> 
                    </div>
                    <div class="dropdownnavcontainer" style="display:none;" drop-down-nav-container="moreLink">
                        <div class="dropdownmainnav" style="z-index:1023">
                            <a class="dropdownoption" data-se="nav-more-browse" href="Browse.aspx" title="People" ref="nav-people"><span>People</span></a>
                            <a class="dropdownoption" data-se="nav-more-blog" href="https://discord.gg/aNJCgyUhy3" title="Discord" ref="nav-news"><span>Discord</span></a>
                            
                            <a class="dropdownoption" data-se="nav-more-help" href="Help/Builderman.html" title="Help" ref="nav-help"><span>Help</span></a>
                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


<div id="SiteWideHeaderLogin">
    <div id="HeaderLoginButton" class="iFrameLoginSignUp">
		<a id="HeaderSignUp" href="https://www.xsscape.cf/NewAccount.aspx">Sign Up</a>
		<span id="HeaderOr">or</span>
        <span id="loginSpan">
		    <a id="headerLogin" class="btn-control btn-control-large">Login <span class="grey-arrow">?</span></a>
        </span>
		<div id="iFrameLogin" style="display:none">
		<iframe class="loginFrame" src="Login/LoginFrame.aspx" scrolling="no" frameborder="0"></iframe>
	</div>
	 </div>
  </div>	

    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('.moreLink').bind('showDropDown', function (e) {
            var maxWidth = $('#NavRedesign .dropdownnavcontainer').width();
            $('a.dropdownoption span').each(function (index, elem) {
                elem = $(elem);
                if (elem.outerWidth() > maxWidth) {
                    maxWidth = elem.outerWidth();
                }
            });
            maxWidth = maxWidth + 5;
            $('#NavRedesign .dropdownoption').each(function (index, elem) {
                elem = $(elem);
                if (elem.width() < maxWidth) {
                    elem.width(maxWidth);
                }
            });

        });
    });
</script>

</div>

        
            

        <div class="forceSpace">&nbsp;</div>
            
            <div id="AdvertisingLeaderboard">
                
            <iframe id="ctl00_cphBannerAd_BannerAds_AsyncUserAdIFrame" allowtransparency="true" frameborder="0" scrolling="no" data-js-adtype="iframead" height="90" src="../ads/ad1.aspx" width="648"></iframe>
        

            </div>
        

        <noscript><div class="SystemAlert"><div class="SystemAlertText">Please enable Javascript to use all the features on this site.</div></div></noscript>
        
        <div id="BodyWrapper">
            <div id="RepositionBody"><div id="Body" style="">
            <style>
/* customizable snowflake styling */
.snowflake {
  color: #fff;
  font-size: 1em;
  font-family: Arial, sans-serif;
  text-shadow: 0 0 5px #000;
}

@-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@-webkit-keyframes snowflakes-shake{0%,100%{-webkit-transform:translateX(0);transform:translateX(0)}50%{-webkit-transform:translateX(80px);transform:translateX(80px)}}@keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@keyframes snowflakes-shake{0%,100%{transform:translateX(0)}50%{transform:translateX(80px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;-webkit-animation-name:snowflakes-fall,snowflakes-shake;-webkit-animation-duration:10s,3s;-webkit-animation-timing-function:linear,ease-in-out;-webkit-animation-iteration-count:infinite,infinite;-webkit-animation-play-state:running,running;animation-name:snowflakes-fall,snowflakes-shake;animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;animation-iteration-count:infinite,infinite;animation-play-state:running,running}.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}.snowflake:nth-of-type(1){left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s}.snowflake:nth-of-type(2){left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s}.snowflake:nth-of-type(3){left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s}.snowflake:nth-of-type(4){left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s}.snowflake:nth-of-type(5){left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s}.snowflake:nth-of-type(6){left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s}.snowflake:nth-of-type(7){left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s}.snowflake:nth-of-type(8){left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s}.snowflake:nth-of-type(9){left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s}.snowflake:nth-of-type(10){left:25%;-webkit-animation-delay:2s,0s;animation-delay:2s,0s}.snowflake:nth-of-type(11){left:65%;-webkit-animation-delay:4s,2.5s;animation-delay:4s,2.5s}
</style>
<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
    ❅
  </div>
  <div class="snowflake">
    ❆
  </div>
  <div class="snowflake">
    ❅
  </div>
  <div class="snowflake">
    ❆
  </div>
  <div class="snowflake">
    ❅
  </div>
  <div class="snowflake">
    ❆
  </div>
</div>

<div class="LoginNewStyle">
    <div class="MyRobloxContainer">
        <script type="text/javascript">
            $(function() {
                var $username = $("#ctl00_cphRoblox_lRobloxLogin_UserName");
                var $password = $("#ctl00_cphRoblox_lRobloxLogin_Password");

                $username.focus(function() {
                    $(this).css("border-color", "#A5D0FF");
                });
                $username.blur(function() {
                    $(this).css("border-color", "#CCCCCC");
                });
                $password.focus(function() {
                    $(this).css("border-color", "#A5D0FF");
                });
                $password.blur(function() {
                    $(this).css("border-color", "#CCCCCC");
				});
            });
        </script>

        
        <div style="clear: both;"></div>
        <div class="Column1a">
            <p style="font-size: 15px; color:red;"><?=$s?></p>
            <div class="StandardBoxHeader" id="newLoginHeader" style="width:300px;">
               
               <span id="ctl00_cphRoblox_LoginHeader2">Login</span>
            </div>
            <div class="StandardBox" id="newLogin" style="height: 170px;width:300px;">
                <div id="ctl00_cphRoblox_LOLOLOLOL">
	
         <form name="aspnetForm" method="post" action="" id="aspnetForm">           
	<div class="AspNet-Login">
                            <table style="margin: 0px auto;">
                                <tr>
                                    <td colspan="2" style="color: #FF0000">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;">
                                        Username:
                                    </td>
                                    <td>
                                        <div><input name="username" type="text" id="username" class="TextBox" name="username" style="border: 2px solid #CCCCCC;width:130px;"/></div>
                                        <div></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: right;">
                                        Password:
                                    </td>
                                    <td style="position:relative;display:block;">
                                        <div style="float:left;width:215px;">
                                            <div><input name="password" type="password" id="password" class="TextBox" style="border: 2px solid #CCCCCC; width:130px;"/></div>
                                            <div></div>
                                        </div>
                                        <div style="position:absolute;top:2px;*top:1px;left:150px;">
                                            <input type="submit" name="DoLoginLOLOLOL" value="Login" onclick="javascript:document.getElementById('aspnetForm').submit();" id="ctl00_cphRoblox_lRobloxLogin_Login" class="MediumButton tranlsate"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center" style="padding-bottom:10px;">
                                            <div style="font-size: 11px;">
                                                <a href="ResetPasswordRequest.aspx">Forgot your password?</a>
                                            </div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="FacebookConnectTD" style="text-align: center;border-top: 1px solid #CCC;padding:0;margin:0;">
										<div id="ctl00_cphRoblox_lRobloxLogin_fbMVCLogin" class="fbSplashPageConnect">
                                            <a class="facebook-login" href="https://www.youtube.com/watch?v=_oaIpAvsEaQ&t=16s" ref="form-facebook">
  	                                            <span class="left"></span>
                                                <span class="middle">Login with Facebook<span>Login with Facebook</span></span>
                                                <span class="right"></span>
	                                        </a>     
										</div>
                                    </td>
                                </tr>
                            </table>
                        
	</div>
                
</div>
            </div>
        </div>
</form>

<form name="regForm" method="get" action="../NewAccount.aspx" id="regForm">
<div class="Column2a">
            <div id="ctl00_cphRoblox_NewUserPanel2">
                <div class="StandardBoxHeader" style="width: 558px;float:right;">
                    <span>Create a Free Xscape Account</span>
                </div>
                <div class="StandardBox" id="newSignupBox" style="width: 558px;float:right;min-height:170px;">
                    <div id="ChooseBirthdate" style="height:111px">
                    <p>
                        Creating an account on Xscape allows you to customize your character, make friends,
                        build places, earn money, and more!
                    </p>
                    <center>
                        <span>Your Date of Birth: </span>
                        <select name="ctl00$cphRoblox$lstMonths" id="lstMonths">
	<option value="0">Select Month</option>
	<option value="1">January</option>
	<option value="2">February</option>
	<option value="3">March</option>
	<option value="4">April</option>
	<option value="5">May</option>
	<option value="6">June</option>
	<option value="7">July</option>
	<option value="8">August</option>
	<option value="9">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>

</select>
		                <select name="ctl00$cphRoblox$lstDays" id="lstDays">
	<option value="0">Select Day</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>

</select>
                        <select name="ctl00$cphRoblox$lstYears" id="lstYears">
	<option value="0">Select Year</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
	<option value="1939">1939</option>
	<option value="1938">1938</option>
	<option value="1937">1937</option>
	<option value="1936">1936</option>
	<option value="1935">1935</option>
	<option value="1934">1934</option>
	<option value="1933">1933</option>
	<option value="1932">1932</option>
	<option value="1931">1931</option>
	<option value="1930">1930</option>
	<option value="1929">1929</option>
	<option value="1928">1928</option>
	<option value="1927">1927</option>
	<option value="1926">1926</option>
	<option value="1925">1925</option>
	<option value="1924">1924</option>
	<option value="1923">1923</option>
	<option value="1922">1922</option>
	<option value="1921">1921</option>
	<option value="1920">1920</option>
	<option value="1919">1919</option>
	<option value="1918">1918</option>
	<option value="1917">1917</option>
	<option value="1916">1916</option>
	<option value="1915">1915</option>
	<option value="1914">1914</option>
	<option value="1913">1913</option>

</select>
                        &nbsp;&nbsp;
                        <input id="btnContinue" type="button" class="MediumButton translate" onclick="CheckDate()" value="Continue"/>
                        <div id="lblError" style="display: none">
                            <b>Please choose a valid date</b></div>
                        <div style="font-style:italic;margin-top:15px">Your birthday will not be given out to any third party!</div>
                    </center>
                    </div>
                        <div id="ChooseGender" style="text-align:center;display:none">
                            

<div style="text-align:left">Are you a boy or a girl?</div>
<div style="text-align:center;position:relative;height:250px">
    <div style="position:absolute;left:50%;margin-left:-175px">
        <label for="MaleBtn"><img src="https://s3.amazonaws.com:443/t3.roblox.com/ef1ff929b9373a85f2b873f17a5305e9" id="ctl00_cphRoblox_SelectGenderPane_BoyThumbnail" style="cursor:pointer"/><br/></label>
        <input id="MaleBtn" type="radio" name="ctl00$cphRoblox$SelectGenderPane$Gender" value="MaleBtn"/><label for="MaleBtn">Boy</label>
    </div>
    <div style="position:absolute;left:50%;margin-left:25px">
        <label for="FemaleBtn"><img src="https://s3.amazonaws.com:443/t3.roblox.com/9458fba608ad69e5d88ccb58b74c7dc4" id="ctl00_cphRoblox_SelectGenderPane_GirlThumbnail" style="cursor:pointer"/><br/></label>
        <input id="FemaleBtn" type="radio" name="ctl00$cphRoblox$SelectGenderPane$Gender" value="FemaleBtn"/><label for="FemaleBtn">Girl</label>
    </div>
</div>
                            <div id="genderError" style="color:Red;font-weight:bold;margin-bottom:10px;display:none">Please select a gender</div>
                            <input type="submit" name="ctl00$cphRoblox$btnSignup2" value="Continue" onclick="return CheckGender();" id="ctl00_cphRoblox_btnSignup2" class="MediumButton translate"/>
                        </div>
                    <br/>
                </div>
            </div>
        </div>
</form>
        <div style="clear: both;"></div>

<div id="ExpandBorder" style="float:right; width:568px;height:40px;border:1px solid #AAAAAA;border-top:none;margin-top:-49px">&nbsp;</div>

        <div class="StandardBoxHeader" style="width: 878px;">
            <span>You need a Discord account to play Xscape</span>
        </div>
        <div class="StandardBox" style="width: 878px">
            <div id="ctl00_cphRoblox_GuestMode" style="text-align: center;">
	
                <p>
                    To stop LGBTQ supporters and monkeys joining our revival you need to verify in our discord server.</p>
                <a id="ctl00_cphRoblox_PlayNow" tabindex="2" class="MediumButton" href="https://discord.gg/zUtGwurC" style="text-decoration: none; color: #222222;
                    width: 20%;">Join Now!</a>
                </p>
            
</div>
        </div>
    </div>
    <div style="clear: both"></div>

<script type="text/javascript">

        function CheckDate() {
            $('#lblError').attr('style', 'display: none');
            var year = parseInt($('#lstYears option:selected').val());
            var month = parseInt($('#lstMonths option:selected').val());
            var day = parseInt($('#lstDays option:selected').val());

            if (year <= 0 || month <= 0 || day <= 0 || day > new Date(year, month, 0).getDate()) {
                $('#lblError').attr('style', 'color: Red;');
            }
            else {
                $('#ChooseBirthdate').slideToggle();
                $('#ChooseGender').slideToggle();
                $('#ExpandBorder').hide();
                $('#newSignupBox').css("border","1px solid #AAAAAA");
            }
        }
        function CheckGender() {
                if ($('#MaleBtn:checked').length == 0 && $('#FemaleBtn:checked').length == 0) {
                    $('#genderError').show();
                    return false;
                }
                else {
                    $('#genderError').hide();
                }
        }
    </script>
</div>

<div style="clear:both"></div>
            </div>
        </div></div> 
        </div>

<div id="Footer" class="">
<div class="FooterNav">
<a href="PrivacyPolicy.aspx"><b>Privacy Policy</b></a>
&nbsp;|&nbsp;
<a href="">Advertise with Us</a>
&nbsp;|&nbsp;
<a href="">Press</a>
&nbsp;|&nbsp;
<a href="">Contact Us</a>
&nbsp;|&nbsp;
<a href="AboutUs.aspx">About Us</a>
&nbsp;|&nbsp;
<a href="">Blog</a>
&nbsp;|&nbsp;
<a href="">Jobs</a>
&nbsp;|&nbsp;
<a href="">Parents</a>
</div>
<div class="FooterNav">
<div id="SEOGenreLinks" class="SEOGenreLinks">
<a href="all-games.html">All Games</a>
<span>|</span>
<a href="building-games.html">Building</a>
<span>|</span>
<a href="horror-games.html">Horror</a>
<span>|</span>
<a href="town-and-city-games.html">Town and City</a>
<span>|</span>
<a href="military-games.html">Military</a>
<span>|</span>
<a href="comedy-games.html">Comedy</a>
<span>|</span>
<a href="medieval-games.html">Medieval</a>
<span>|</span>
<a href="adventure-games.html">Adventure</a>
<span>|</span>
<a href="sci-fi-games.html">Sci-Fi</a>
<span>|</span>
<a href="naval-games.html">Naval</a>
<span>|</span>
<a href="fps-games.html">FPS</a>
<span>|</span>
<a href="rpg-games.html">RPG</a>
<span>|</span>
<a href="sports-games.html">Sports</a>
<span>|</span>
<a href="fighting-games.html">Fighting</a>
<span>|</span>
<a href="western-games.html">Western</a>
</div>
</div>
<div class="legal">
<div class="left">
<a href="http://www.truste.org/ivalidate.php?url=www.roblox.com&amp;sealid=105" id="TrusteeSeal"><img height="60" width="44" src="https://s3.amazonaws.com/images.roblox.com/c54428d4c073c3afa9348e76007733b6.png" border="0" id="TrusteLogo" alt="Truste" /></a>
</div>
<div class="right">
<p class="Legalese">
Xscape, "Online Building Party", characters, logos, names, and all related indicia are trademarks of <a href="https://corp.roblox.com" ref="footer-smallabout">ROBLOX Corporation</a>, ©2013. Patents pending.
Xscape is not sponsored, authorized or endorsed by <a href="https://corp.roblox.com" ref="footer-smallabout">ROBLOX Corporation</a> or any producer of plastic building bricks, including The LEGO Group, MEGA Brands, and K'Nex, and no resemblance to the products of these companies is intended. Use of this site signifies your acceptance of the <a href="TermsOfService.aspx" ref="footer-terms">Terms and Conditions</a>.
</p>
</div>
<div class="clear"></div>
</div>
</div>
</div>
<div id="ChatContainer" style="width:100%;position:fixed;bottom:0;z-index:1000">
</div>

<img src="https://secure.adnxs.com/seg?add=550800&amp;t=2" width="1" height="1" />

</body>
</html>
<?php
}
?>