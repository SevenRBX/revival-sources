<?php
include "global.php";
require_once "patch.php";
$ep = new exploitPatch();
$err = "";
if($logged){
die('<META http-equiv=refresh content=0;URL=/home>');
}else{
if($_SERVER["REQUEST_METHOD"] == "POST"){
if($_POST["uname"] && $_POST["password"] && $_POST["email"] && !preg_match('/^[a-zA-Z0-9]+$/', $_POST['uname']) == 0 && $_POST['uname'] > 20){
$username = $ep->remove($_POST["uname"]);
$password = $ep->remove($_POST["password"]);
$email = $ep->remove($_POST["email"]);
$ip = $_SERVER['REMOTE_ADDR'];

$checkquery = $db->prepare("SELECT id FROM users WHERE username LIKE :userName");
$checkquery->execute([':userName' => $username]);

$result = $checkquery->fetch();

if(!$result){
$checkquery = $db->prepare("SELECT id FROM users WHERE ip = :ip");
$checkquery->execute([':ip' => $ip]);

$result = $checkquery->fetch();

if(!$result){
$hashpass = password_hash($password, PASSWORD_BCRYPT);
$join = bin2hex(random_bytes(27));

$ttc = '0';
$joindate = date("d-m-y");
$query = $db->prepare("INSERT INTO users (username, password, email, ip, gettc, jkey, jdate) VALUES (:userName, :password, :email, :ip, :get, :joink, :jd)");

$query->execute([':userName' => $username, ':password' => $hashpass, ':email' => $email, ':ip' => $ip, ':get' => $ttc, ':joink' => $join, ':jd' => $joindate]);
$s = "Your account has been created.";
}else{
$err = "You can't make multiple accounts!";
}
}else{
$err = "That username already exists.";
}
}else{
$err = "Please complete the form.";
}
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/logo.png"/>
        <title>Exoro - Register</title>
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
            <a class="nav-link" href="https://www.exoro.cf/login">Login</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link" href="https://www.exoro.cf/register">Register</a>
            </li>
            </ul>
            </div>
            </div>
            </nav>
            
            <div class="app py-4 container">
                <div class="container">
                
                        <div class="alert alert-success" role="alert">
                        Register is enabled!
                        </div>
            
                        <h2>Register on Exoro</h2>
                        <?php
                        if(!empty($err)){
                        ?>

                        <p style="color:red"><?php echo($err) ?></p>

                       <?php
                       }else if(!empty($s)){
                       ?>

                       <p style="color:green"><?php echo($s) ?></p>

                       <?php
                       }
                       ?>

                        <form method="POST" action="">
                            <label for="uname">Username:</label><br>
                            <input type="text" id="uname" name="uname"><br><br>
                            <label for="password">Password:</label><br>
                            <input type="password" id="password" name="password"><br><br>
                            <label for="email">Email:</label><br>
                            <input type="email" id="email" name="email"><br><br>
                            <input type="submit" class="btn btn-primary" value="Sign in">
                        </form>
                        <p/>
                        <p>You are required to be in the Exoro discord server to register. <a href="https://discord.gg/scZmxPrGaD">Join here!</a></p>
                        
                        <p/>
           <p/>
           <footer class="footer">
           <div class="container">
           <ul class="list-unstyled text-small">
           <li class="text-muted">&copy; Exoro 2021</li>
           <li><a class="text-muted" href="#">Terms of Service</a></li>
           <li><a class="text-muted" href="#">Privacy Policy</a></li>
           <li><a class="text-muted" href="#">Discord</a></li>
           </ul>
          </div>
           </div>
          </footer>
          </div>
          
           </body>
           </html>