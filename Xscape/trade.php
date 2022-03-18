<?php
error_reporting(0);
require_once 'site.php';
require_once ('content/functions.php');
if(!$logged){
header('Location: /');
}else{

if($usr['MembershipType'] == "None"){
      header('Location: /');
      die();
 }

if ($_SERVER["REQUEST_METHOD"] == "POST"){
if ($_POST["amount"] && $_POST['submit']){
$type = $ep->remove($_POST['type']);
if($type !== ""){
$amount = $ep->remove($_POST['amount']);
$username = $ep->remove($_POST['username']);

if($type == "robux"){
//begin math shit

$robuxamount = userRobux;
$tixamount = userTix;
$uid = $usr['id'];

if($robuxamount < $amount || strpos($amount, '-') !== false || strpos($amount, '+') !== false ){
echo('You cant trade this amount.');
footer();
die();
}else{

$query = $db->prepare("SELECT * FROM accounts WHERE username = :us");
$query->execute([':us' => $username]);

$userep = $query->fetch();
if(!$userep){
echo('That user doesnt exist.');
footer();
die();
}else{
$sendid = $userep['id'];

$newrobux = $robuxamount - $amount;
$tradey = $amount + $userep['robux'];

$query = $db->prepare("UPDATE accounts SET robux = :newr WHERE id = :uid");
$query->execute([':newr' => $newrobux, ':uid' => $uid]);

$query = $db->prepare("UPDATE accounts SET robux = :newr WHERE id = :uid");
$query->execute([':newr' => $tradey, ':uid' => $sendid]);

header('Location: /home');
}
}
}else{
if($type == "tix"){
//begin math shit

$robuxamount = userRobux;
$tixamount = userTix;
$uid = $usr['id'];

if($tixamount < $amount || strpos($amount, '-') !== false || strpos($amount, '+') !== false ){
echo('You cant trade this amount.');
footer();
die();
}else{

$query = $db->prepare("SELECT * FROM accounts WHERE username = :us");
$query->execute([':us' => $username]);

$userep = $query->fetch();
if(!$userep){
echo('That user doesnt exist.');
footer();
die();
}else{
$sendid = $userep['id'];

$newrobux = $tixamount - $amount;
$tradey = $amount + $userep['tickets'];

$query = $db->prepare("UPDATE accounts SET tickets = :newr WHERE id = :uid");
$query->execute([':newr' => $newrobux, ':uid' => $uid]);

$query = $db->prepare("UPDATE accounts SET tickets = :newr WHERE id = :uid");
$query->execute([':newr' => $tradey, ':uid' => $sendid]);

header('Location: /home');
}
}
}
}
}else{
echo('Please specify an exchange type.');
footer();
die();
}
}
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
    <title>Xscape - Trade</title>
	<link rel="canonical" href="https://www.xsscape.cf" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico"/>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,500,600,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.roblox.com/CSS/Base/CSS/FetchCSS?path=leanbase___569885b8bf394e24a9586fe2e5e8c085_m.css"/>
<link rel="stylesheet" href="https://www.roblox.com/CSS/Base/CSS/FetchCSS?path=page___22e434f54f93bd4d46f671c0223d3641_m.css"/>
<link rel='stylesheet' href='https://xsscape.cf/content/css/leanbasenew.css' />
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
<?php
$get->nav();
?>
<!-- LEFT NAV MENU -->
    <div class="container-main ">
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>
        <noscript><div class="SystemAlert"><div class="rbx-alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>
<div class="content ">


<div class="security-container secruity-password-container">
    <div class="section-content"><form method="post" action="">
        <div><h1>Trade</h1>
          <div class="form-group rbx-select-group month">
          <select name="type" class="input-field rbx-select ng-pristine ng-invalid ng-invalid-birthday">
          <option value="robux" disabled="" selected="">Type</option>
          <option value="robux">Trade Robux</option>
          <option value="tix">Trade Tickets</option>
          </select>
          </div>
                        <div class="form-group">
                            <input name="username" type="text" class="form-control input-field" placeholder="Username to send to"/>
                        </div>
                        <div class="form-group">
                            <input name="amount" type="text" class="form-control input-field" placeholder="Amount to send"/>
                        </div>
                        <center><input type="submit" name="submit" value="Submit" class="btn-fixed-width btn-primary-md"></center>
    </div>
</div></form>
    </div>
</div>


        </div>
            </div>
<?php
$get->footer();
}
?>