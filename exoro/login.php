<?php
include "global.php";
require_once "patch.php";
$ep = new exploitPatch();
$err = "";
if($logged){
die('<META http-equiv=refresh content=0;URL=/home>');
}else{
if($_SERVER["REQUEST_METHOD"] == "POST"){
if($_POST["uname"] && $_POST["password"]){
$username = $ep->remove($_POST["uname"]);
$password = $ep->remove($_POST["password"]);

$checkquery = $db->prepare("SELECT id, password FROM users WHERE username LIKE :userName");
$checkquery->execute([':userName' => $username]);

$result = $checkquery->fetch();
$pass = $result["password"];

if(!$result){
$err = "That username does not exist.";
}else{
if(!password_verify($password, $pass)){
$err = "That password is invalid.";
}else{
session_regenerate_id();
$_SESSION['loggedin'] = TRUE;
$_SESSION['username'] = $username;
$_SESSION['id'] = $result["id"];

header('Location: home');
}
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
        <title>Exoro - Login</title>
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
                        <h2>Login to your account</h2>
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
                            <input type="submit" class="btn btn-primary" value="Sign in">
                        </form>
                        
                        <p/>
           <p/>
           <footer class="footer">
           <div class="container">
           <p class="text-muted">&copy; Exoro 2021</p>
           <div class="col-6 col-md">
            <ul class="list-unstyled text-small">
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