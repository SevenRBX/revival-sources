<?php
session_start();

$host = "localhost";
$dbname = "exoro_database";
$dbuser = "exoro_owner";
$dbpass = "codexisfat";

try {
    $db = new PDO("mysql:host=$host;port=3306;dbname=$dbname", $dbuser, $dbpass, array(
    PDO::ATTR_PERSISTENT => true
));
// set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Internal Error: " . $e->getMessage();
    }
    
    $logged = false;
    
    if(isset($_SESSION['loggedin'])){
    $logged = true;
    
    $lid = $_SESSION['id'];
    $usrquery = $db->query("SELECT * FROM users WHERE id = '$lid'");
    $usr = $usrquery->fetch();
    
    if(!$usr){
    echo "An unexpected error occured.";
    }
    
    $uID = $usr['id'];
    
    $now = time();
    $gettc = $usr['gettc'];
    $Bucks = $usr['Aura'];
    $Tix = $usr['Tix'];
    if ($now > $gettc) {
    $newgettc = $now + 86400;

    if($usr['HasMembership'] == "yes"){
    $AddBits = 25;
    $AddTix = 50;
    }else{
    $AddBits = 10;
    $AddTix = 15;
    }
    
    $db->query("UPDATE users SET Aura = $Bucks + $AddBits WHERE id = $uID");
    $db->query("UPDATE users SET Tix = $Tix + $AddTix WHERE id = $uID");
    $db->query("UPDATE users SET gettc = $newgettc WHERE id = $uID");
    }
    }
?>
<?php
if($logged){
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/logo.png"/>
        <title>Exoro</title>
        <meta name="theme-color" content="#FF4500">
        <meta property="og:title" content="Exoro">
        <meta property="og:url" content="https://www.exoro.cf">
        <meta property="og:description" content="Exoro, 2012-2013 no bullshit revival">
        <meta property="og:type" content="Website">
        <meta property="og:image" content="img/logo.png">
        
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
            <a class="navbar-brand" href="https://www.exoro.cf"><img src="img/logo.png" width="73" height="56"> Exoro</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="https://www.exoro.cf/home"><i class="fas fa-home"></i> Home</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link" href="https://www.exoro.cf/play"><i class="fas fa-gamepad"></i> Play</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link" href="https://www.exoro.cf/catalog"><i class="fas fa-shopping-cart"></i> Catalog</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link" href="https://www.exoro.cf/upgrade"><i class="fas fa-hard-hat"></i> Builders Club</a>
            </li>
            </ul>
            <div class="navbar-nav">
                
            <div class="navbar-button-container">
				    		<a class="btn btn-sm btn-outline-dark my-1 mr-2" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Exero discord" href="https://discord.gg/scZmxPrGaD"><i class="fab fa-discord"></i></a>
				</div>
            <div class="navbar-button-container">
				    		<a class="btn btn-sm btn-outline-dark my-1 mr-2" data-toggle="tooltip" data-html="true" data-placement="bottom" title="Exero subreddit" href="https://www.reddit.com/r/ExoroRevival/"><i class="fab fa-reddit"></i></a>
				</div>
				
            <div class="navbar-button-container">
				    		<a class="btn btn-sm btn-outline-dark my-1 mr-2" data-toggle="tooltip" data-html="true" data-placement="bottom" title="<?=number_format($usr['Aura'])?> Aura" href="/my/currency"><i class="fas fa-fire"></i> <?=number_format($usr['Aura'])?></a>
				</div>
				
				<div class="navbar-button-container">
				    		<a class="btn btn-sm btn-outline-dark my-1 mr-2" data-toggle="tooltip" data-html="true" data-placement="bottom" title="<?=number_format($usr['Aura'])?> Tickets" href="/my/currency"><i class="fas fa-ticket-alt"></i> <?=number_format($usr['Tix'])?></a>
				</div>
				
				<div class="navbar-button-container">
				        	<a class="btn btn-sm btn-dark my-1 mr-2 px-3" href="/logout">Logout</a>
				        </div>
				</div>
            </div>
            </div>
            </nav>
            
            <nav class="navbar navbar-expand-lg navbar-primary navbar-top bg-primary py-0">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#secondaryNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="secondaryNavbar">
				    <ul class="navbar-nav mr-auto">
				      	<li class="nav-item">
				        	<a class="nav-link py-1" style="color: white;" href="/user?id=<?php echo $usr['id']; ?>">View Profile</a>
				     	</li>
				     	<li class="nav-item">
				        	<a class="nav-link py-1" style="color: white;" href="/my/avatar">Customize</a>
				     	</li>
				     	<li class="nav-item">
				        	<a class="nav-link py-1" style="color: white;" href="/my/friends">Friends</a>
				     	</li>
				     	<li class="nav-item">
				        	<a class="nav-link py-1" style="color: white;" href="/build">Develop</a>
				     	</li>
				     	<li class="nav-item">
				        	<a class="nav-link py-1" style="color: white;" href="/my/stuff">My Stuff</a>
				     	</li>
				     	<li class="nav-item">
				        	<a class="nav-link py-1" style="color: white;" href="/settings">Settings</a>
				     	</li>
										    </ul>
				</div>
			</div>
		</nav>

    <?php
    $n = "no";
    if($usr['approved'] == "no"){
    die('<div class="app py-4 container">
                <div class="container">
    <div class="alert alert-danger" role="alert">
    Your membership has not been approved. Make sure to join the server before pressing <a href="https://discord.com/api/oauth2/authorize?client_id=901530916973871206&redirect_uri=https%3A%2F%2Fwww.exoro.cf%2Fauth%2Fdiscord.php&response_type=code&scope=identify%20guilds">Verify here</a>
    </div></div>');
    }else{
    if($usr['IsBanned'] == "yes" && $usr['UnbanDay'] == date("d")){
    $db->query("UPDATE users SET IsBanned = '$n' WHERE id = '$uID'");
    }else{
    if($usr['IsBanned'] == "yes"){
    die("<center>
<div id=\"Body\">
<div id=\"UserContainer\">
    <div>
      <div id=\"ProfilePane\">
        <table width=\"100%\" bgcolor=\"lightsteelblue\" cellpadding=\"6\" cellspacing=\"0\">
          <tbody><tr>
            <td>
              <font face=\"Verdana\"><span class=\"Title\">" . $usr['BanLength'] . "</span><br></font>
                          </td>
          </tr>

<tr>
            <td>
            <font face=\"Verdana\">
              <span>Moderator: " . $usr['Moderator'] . "</span><br>
              <br>
              <br>
                                                        <span>" . $usr['BanReason'] . "</span>
</tr>
        </tbody></table>
              </div>");
    }
    }
    }
    ?>
        
        <?php
        }
        ?>