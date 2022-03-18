<?php
include "global.php";
if(!$logged){
header('Location: /');
exit;
}else{
?>

<style>
    #overlay {
  position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
</style>

<div onclick="off()" id="overlay">
    <center>
    <div class="card" style="width: 20rem;">
            <div class="card-body">
            <h5 class="card-title">Client Launched?</h5>
            <p><a class="btn btn-success" href="#">Download Client</a></p>
            <h6 class="card-subtitle mb-2 text-muted">Ignore this text if the launcher opened</h6>
            </div>
         </div>
         </center>
</div>

<script>
    function joinGame(){
        window.location.href="bitbloxgame:testy";
        document.getElementById("overlay").style.display = "block";
    }
    function off() {
    document.getElementById("overlay").style.display = "none";
    }
</script>

<div class="app py-4 container">
		    <h2 class="font-weight-normal">Games</h2>
		    <p>we gamin</p>
		    <a class="btn btn-success" href="/develop?page=newgame"><i class="fas fa-plus"></i> New Game</a>
		    
		    <br>
		    <br>
		    <div class="card" style="width: 25rem;">
            <div class="card-body">
            <h5 class="card-title">Cart Ride into spongebob (insane) (almost died)</h5>
            <img src="img/fuckingnoob.jpg">
            <br>
            <br>
            <h6 class="card-subtitle mb-2 text-muted">Playing: 0<br>Creator: <a href="/user?id=1">Seven</a><br>Client: 2014</h6>
            <p><a class="btn btn-primary" href="/game?id=1">View</a> <a class="btn btn-success" onclick="joinGame()"><i class="fas fa-gamepad"></i> Play!</a></p>
            </div>
         </div>
		    </div>
		    
		    <?php
        include "footer.php";
        }
        ?>
        
        </body>
           </html>