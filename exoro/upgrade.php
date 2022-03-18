<?php
include "global.php";
if(!$logged){
header('Location: /');
exit;
}else{
?>

<div class="app py-4 container">
		    <h2 class="font-weight-normal">Builders Club</h2>
		    <p>The best package on Exoro</p>
		    
		    <br>
		    <br>
		    <h2>Rewards</h2>
		    <div class="row">
		        <div class="col col-md-3">
		    <div class="card" style="width: 20rem;">
            <div class="card-body">
            <h5 class="card-title">Dominus Empyreus</h5>
            <img src="img/bcDominus.png" width="100" height="100">
            </div>
            </div>
            </div>
            
            <div class="col col-md-3">
            <div class="card" style="width: 20rem;">
            <div class="card-body">
            <h5 class="card-title">Glowing Red Eyes</h5>
            <img src="img/bcEyes.png" width="100" height="100">
            </div>
            </div>
            </div>
            
            <div class="col col-md-3">
            <div class="card" style="width: 20rem;">
            <div class="card-body">
            <h5 class="card-title">Violet Equinox</h5>
            <img src="img/bcHair.png" width="100" height="100">
            </div>
            </div>
            </div>
            
            </div>
            
            <p>Earn builders club only items by completing quests.</p>
            <br>
            
            <p>Earn more daily Aura and Tickets with a Builders Club membership.</p>
            <p>Also Includes:</p>
            <ul>
                <li>5% Catalog discount</li>
                <li>Badge in-game and on-site</li>
                <li>2 Free username changes</li>
                <li>10% XP Boost</li>
            </ul>
            
            <p>Builders Club costs 1000 <i class="fas fa-fire"></i></p>
            <a class="btn btn-success" disabled href="/purchaseconfirmupgrade">Purchase Builders Club</a>
         </div>
<?php
        include "footer.php";
        }
        ?>