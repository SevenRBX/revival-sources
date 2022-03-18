<?php
include "global.php";
if(!$logged){
header('Location: /');
exit;
}else{
?>
<div class="app py-4 container">
		    <h2 class="font-weight-normal">Catalog</h2>
		    <p>The best shop in Exoro</p>
		    <a class="btn btn-success" href="/upgrade"><i class="fas fa-hard-hat"></i> Join Builders Club</a>
		    
		    <br>
		    <br>
		    <h5>Featured</h5>
		    <div class="row">
		        <div class="col col-md-3">
		    <div class="card" style="width: 13rem;">
            <div class="card-body">
            <h5 class="card-title">Epic Face</h5>
            <img src="img/epiculy.png" width="100" height="100">
            <br>
            <br>
            <p><i class="fas fa-fire"></i> 100</p>
            <p><a class="btn btn-primary" href="/item?id=1">View</a> <a class="btn btn-success" onclick="">Buy</a></p>
            </div>
         </div>
         </div>
         
         		        <div class="col col-md-3">
		    <div class="card" style="width: 13rem;">
            <div class="card-body">
            <h5 class="card-title">Valkyrie Helm</h5>
            <img src="img/valk.png" width="100" height="100">
            <br>
            <br>
            <p><i class="fas fa-fire"></i> 300</p>
            <p><a class="btn btn-primary" href="/item?id=2">View</a> <a class="btn btn-success" onclick="">Buy</a></p>
            </div>
         </div>
         </div>
         
         </div>
         
         <br>
         <br>
         <h5>Daily</h5>
         
         <div class="row">
		        <div class="col col-md-3">
		    <div class="card" style="width: 13rem;">
            <div class="card-body">
            <h5 class="card-title">Epic Face</h5>
            <img src="img/epiculy.png" width="100" height="100">
            <br>
            <br>
            <p><i class="fas fa-fire"></i> 100</p>
            <p><a class="btn btn-primary" href="/item?id=1">View</a> <a class="btn btn-success" onclick="">Buy</a></p>
            </div>
         </div>
         </div>
         
         		        <div class="col col-md-3">
		    <div class="card" style="width: 13rem;">
            <div class="card-body">
            <h5 class="card-title">Valkyrie Helm</h5>
            <img src="img/valk.png" width="100" height="100">
            <br>
            <br>
            <p><i class="fas fa-fire"></i> 300</p>
            <p><a class="btn btn-primary" href="/item?id=2">View</a> <a class="btn btn-success" onclick="">Buy</a></p>
            </div>
         </div>
         </div>
         
         </div>
         
         <br>
         <br>
         <h5>Sale</h5>
         
         <div class="row">
		        <div class="col col-md-3">
		    <div class="card" style="width: 13rem;">
            <div class="card-body">
            <h5 class="card-title">Epic Face</h5>
            <img src="img/epiculy.png" width="100" height="100">
            <br>
            <br>
            <p><i class="fas fa-fire"></i> 75</p>
            <p><a class="btn btn-primary" href="/item?id=1">View</a> <a class="btn btn-success" onclick="">Buy</a></p>
            </div>
         </div>
         </div>
         
         		        <div class="col col-md-3">
		    <div class="card" style="width: 13rem;">
            <div class="card-body">
            <h5 class="card-title">Valkyrie Helm</h5>
            <img src="img/valk.png" width="100" height="100">
            <br>
            <br>
            <p><i class="fas fa-fire"></i> 230</p>
            <p><a class="btn btn-primary" href="/item?id=2">View</a> <a class="btn btn-success" onclick="">Buy</a></p>
            </div>
         </div>
         </div>
         
         </div>
         
		</div>
<?php
        include "footer.php";
        }
        ?>
        
        </body>
           </html>