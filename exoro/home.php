<?php
include "global.php";
if(!$logged){
header('Location: /');
exit;
}else{
?>
		<div class="app py-4 container">
		    <h2 class="font-weight-normal">Hello, <?php echo $usr['username']; ?></h2>
		    <div class="card rounded-0">
           <div class="card-body">
           <h5 class="card-title">Your Friends</h5>
           <p class="card-text">No friends. <a href="/users">Search for a friend</a></p>
           </div>
           </div>
           
           <br>
           <div class="card rounded-0">
           <div class="card-body">
           <h5 class="card-title">Exoro News</h5>
           <p class="card-text"><strong>22/10/21</strong>
           Exoro launched!</p>
           </div>
           </div>
           
           <br>
           <div class="card rounded-0">
           <div class="card-body">
           <h5 class="card-title">Featured Game</h5>
           <h5>Cart Ride into spongebob (insane) (almost died)</h5>
           <img src="img/fuckingnoob.jpg">
           <P>Have you ever wanted to be eaten by spongebob? Well here is the game you have been dreaming of. 
           This is the most immersive and advanced game on the planet right now.</P>
           <a class="btn btn-primary" href="/game?id=1"><i class="fas fa-gamepad"></i> Play!</a>
           </div>
           </div>
		    </div>
		    <p/>
           <p/>
           
           <?php
        include "footer.php";
        }
        ?>
          
           </body>
           </html>