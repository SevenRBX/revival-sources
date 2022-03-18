<?php
session_start();
if(isset($_SESSION['loggedin'])){
    header('Location: home');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/logo.png"/>
        <title>Exoro - Landing</title>
        <meta name="theme-color" content="#FF4500">
        <meta property="og:title" content="Exoro">
        <meta property="og:url" content="https://www.exoro.cf">
        <meta property="og:description" content="Exoro, 2012 & 2014 no bullshit revival">
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
            <div class="jumbotron text-center">
            <h1 class="font-weight-normal">Welcome to Exoro <i class="fas fa-hand-spock"></i></h1>
            <h5 class="font-weight-normal">2012 and 2014</h5>
           </div>
           
           <div class="card rounded-0">
           <div class="card-body">
           <h5 class="card-title">No invites, not skidded</h5>
           <p class="card-text">You only need to be in our community to gain access to Exoro. <a href="https://discord.gg/scZmxPrGaD">Join here!</a></p>
           </div>
           </div>
           
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
            