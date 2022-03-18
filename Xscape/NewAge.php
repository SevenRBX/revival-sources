<?php
error_reporting(0);
require_once 'site.php';
require_once ('content/functions.php');

$s = '';
if($_SERVER["REQUEST_METHOD"] == "POST" && !$logged)
{
   if(!empty($_POST['username']) && !empty($_POST['pass']) && !empty($_POST['email']))
   {
      $cleanu = $ep->remove($_POST['username']);
      $cleanp = $_POST['pass']; //dont mess up passwords
      $cleane = $ep->remove($_POST['email']);

      $query = $db->prepare("SELECT * FROM accounts WHERE username = :userName");
      $query->execute([':userName' => $cleanu]);

      $luser = $query->fetch();
      if(!$luser)
      {
        if (preg_match('/^[a-zA-Z0-9]+$/', $cleanu) == 0 || $ch->hasProfanity($cleanu)) {
        $s = 'This username is not valid.';
        }else{
        if(strlen($cleanu) > 20 || strlen($cleanu) < 3){
         $s = 'Usernames can only be between 3 and 20 characters long.';
        }else{
        $hashpass = password_hash($cleanp, PASSWORD_BCRYPT);
        $jd = date('d-m-y');
        $genid = bin2hex(openssl_random_pseudo_bytes(15));
        $enc_email = $ep->encrypt($cleane, $encryption_key);
        $query = $db->prepare("INSERT INTO accounts (username, password, email, Robux, jdate, identifier, gettc) VALUES (:userName, :password, :email, :robux, :jd, :id, :gettc)");
	$query->execute([':userName' => $cleanu, ':password' => $hashpass, ':email' => $enc_email, ':robux' => '5', ':jd' => $jd, ':id' => $genid, ':gettc' => '0']);

        $s = 'Your account has been created.';
        }
       }
      }else
      {
        $s = 'That account already exists!';
      }
   }else
   {
   $s = 'Please complete the form.';
   }
}

if($logged){
header('Location: /');
}else{
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
<link rel="stylesheet" href="https://static.rbxcdn.com/css/leanbase___9b9fc145916d65f94e610d1f02775894_m.css/fetch"/>
<link rel="stylesheet" href="https://static.rbxcdn.com/css/page___8040cedb7391df397df95b221ce71912_m.css/fetch"/>

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
<form name="SignupForm" method="post" action="" id="SignupForm">
<form name="ResetForm" method="post" action="" id="ResetForm">

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['SignupForm'];
var theForm2 = document.forms['ResetForm'];
if (!theForm) {
    theForm = document.SignupForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.submit();
    }
}

function __doPostBackReset(eventTarget, eventArgument) {
    if (!theForm2.onsubmit || (theForm2.onsubmit() != false)) {
        theForm2.__EVENTTARGET.value = eventTarget;
        theForm2.__EVENTARGUMENT.value = eventArgument;
        theForm2.submit();
    }
}
//]]>
</script>

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

<div class="SystemAlert"><div class="rbx-alert-info" role="alert"><a class="rbx-alert-link" href="https://discord.gg/a9ddC2tRQV">https://discord.gg/a9ddC2tRQV</a></div></div>
<div class="content ">


<div class="security-container secruity-password-container">
    <div class="section-content">
        <div>
    <div class="form-warning">
        <span class="icon-warning-orange"><img src="../content/images/warn.png"></span>
        <p class="small text-warning form-warning-text">JOIN THE DISCORD SERVER BEFORE REGISTERING <a href='https://discord.gg/a9ddC2tRQV'>https://discord.gg/a9ddC2tRQV</a>
        <br/>Passwords are HASHED with BCRYPT and IPs are NOT stored.
        <br/>Information like emails and Discord IDs are encrypted.
        </p>
    </div>

    <div id="form-forgot-password-username" class="form-forgot-password-username">
        <ul>
            <li class="forget-password">
                <img class="image-security" src="https://static.rbxcdn.com/images/Login/security-account.png" alt="key">

                <div class="forgot-password-container">
                    <h5>Register</h5>
                    <div>Create your Xscape account.</div>

                    <?php
                    if(!empty($s)){
                    echo '<p style="color:red;">' .$s . '</p>';
                    }
                    ?>
                    <div class="form-horizontal">
                        <div class="form-group" id="form-username">
                            <input name="username" id="username" class="form-control input-field" placeholder="Username"/>
                            <p class="hidden form-control-label" id="form-username-error"></p>
                        </div>
                        <div class="form-group" id="form-pass">
                            <input name="pass" id="pass" type="password" class="form-control input-field" placeholder=""/>
                            <p class="hidden form-control-label" id="form-username-error"></p>
                        </div>
                        <div class="form-group" id="form-email">
                            <input name="email" id="email" type="email" class="form-control input-field" placeholder="Email"/>
                            <p>Required to recover your account.</p>
                            <p class="hidden form-control-label" id="form-username-error"></p>
                        </div>
                        <button onclick="__doPostBack()" id="forgot-password-btn" type="button" class="btn-fixed-width btn-primary-md">Submit</button>
                    </div>
                </div>
            </li>

            <li class="forgot-username">
                <img class="image-security" src="https://static.rbxcdn.com/images/Login/security-key.png" alt="key">

                <div class="forgot-password-container">
                    <h5>Creating your Account</h5>
                    <div>Rules and Tips on how to create your account.</div>
                        <div class="form-horizontal">
                        <div>- Your username must be between 3 and 20 characters long.</div>
                        <div>- Use a STRONG and easy to remember password</div>
                        <div>- Make sure your email is accessible.</div>
                        <div>- You can not use special characters or profanity in your username.</div>
                 </div>
                </div>
            </li>
        </ul>
    </div>
</div>
    </div>
</div>


        </div>
            </div>
<?php
$get->footer();
}
?>
