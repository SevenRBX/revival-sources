<?php
error_reporting(0);
require_once 'site.php';
require_once ('content/functions.php');
if(!$logged){
header('Location: /');
}else{

  if($usr['Administrator'] == "no"){
    if($usr['id'] == "137"){

    }else{
      header('Location: /');
      die();
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if ($_POST["id"] && $_POST['submit']) { // don't enter price here, bc it wont work if price will be 0
                $currency = $ep->remove($_POST['currency']);
                  if($type !== ""){
                  $id = $ep->remove($_POST['id']);

                  $stmt2 = $db->prepare("SELECT count(*) FROM catalog WHERE asset = ?");
                  $stmt2->execute([$id]);
                  $get2 = $stmt2->fetchColumn();
                  if($get2 > 0){
                      echo('This item is already exists!');
                      footer();
                      die();
                  }

                  $price = $ep->remove($_POST['price']);

                  $url2 = 'https://api.roblox.com/Marketplace/ProductInfo?assetId=' . $id;
                  $get2 = file_get_contents($url2);

                  $decodeget2 = json_decode($get2);

                  $name = $decodeget2->Name;
                  $AssetTypeId = $decodeget2->AssetTypeId;

                  if($AssetTypeId == 8){
                    $type = "hat";
                  }
                  if($AssetTypeId == 42){
                    $type = "hat";
                  }
                  if($AssetTypeId == 44){
                    $type = "hat";
                  }
                  if($AssetTypeId == 11){
                    $type = "shirt";
                  }
                  if($AssetTypeId == 12){
                    $type = "pants";
                  }
                  if($AssetTypeId == 43){
                    $type = "hat";
                  }
                  if($AssetTypeId == 45){
                    $type = "hat";
                  }
                  if($AssetTypeId == 46){
                    $type = "hat";
                  }
                  if($AssetTypeId == 47){
                    $type = "hat";
                  }
                  if($AssetTypeId == 19){
                    if($usr['Administrator'] == "yes"){
                    $type = "gear";
                  }else{
                    die('You have no permission to add gears!');
                  }
                  }
                  if($AssetTypeId == 2){
                    $type = "tshirt";
                  }
                  if($AssetTypeId == 18){
                    $type = "face";
                  }
                  if($AssetTypeId == 41){
                    $type = "hat";
                  }
                  if($AssetTypeId == 61){
                    $type = "emote";
                  }

                  if($name == "[ Content Deleted ]"){
                      echo('This asset is not found!');
                      footer();
                      die();
                  }else{
                  $description = $decodeget2->Description;

                  $url = 'https://thumbnails.roblox.com/v1/assets?assetIds=' . $id . '&size=420x420&format=Png&isCircular=false';
                  $get = file_get_contents($url);

                  $decodeget = json_decode($get, true);

                  $data1 = $decodeget['data'];

                  foreach($data1 as $data) {
                      $thumbnail = $data['imageUrl'];
                  }

                  try{
                  $stmt = $db->prepare("INSERT INTO catalog (name,description,price,creator,thumbnail,type,currency,updated,created,asset) VALUES (:name, :description, :price, :creator, :thumbnail, :type, :currency, :updated, :created, :asset)");

                  $params = [
                                                          ':name' => $name,
                                                          ':description' => $description,
                                                          ':price' => $price,
                                                          ':creator' => $usr['id'],
                                                          ':thumbnail' => $thumbnail,
                                                          ':type' => $type,
                                                          ':currency' => $currency,
                                                          ':updated' => date('Y-m-d H:i:s'),
                                                          ':created' => date('Y-m-d'),
                                                          ':asset' => $id
                                                      ];

                  $stmt->execute($params);
                  }catch(Exception $e){
                  die('Looks like asset is too now or item price is too big');
                  }

                  $stmt1 = $db->prepare("SELECT * FROM catalog WHERE name = ?");
                  $stmt1->execute([$name]);
                  $get = $stmt1->fetch();
                  $getID = $get['id'];
                  header('Location: /Item.aspx?ID='.$getID);
                  }
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
    <title>Xscape</title>
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
        <div><h1>Create Catalog Item</h1>
          <div class="form-group rbx-select-group month">
          <select name="currency" class="input-field rbx-select ng-pristine ng-invalid ng-invalid-birthday">
          <option value="1" selected="">Robux</option>
          <option value="2">Tickets</option>
          </select>
          </div>
                        <div class="form-group">
                            <input name="price" type="text" class="form-control input-field" placeholder="Price"/>
                        </div>
                        <div class="form-group">
                            <input name="id" type="text" class="form-control input-field" placeholder="Asset ID"/>
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
