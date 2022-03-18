<?php
include "global.php";
require_once "patch.php";
$ep = new exploitPatch();
if(!$logged || !is_numeric($_GET['id'])){

die('<META http-equiv=refresh content=0;URL=/>');
exit;
}else{
//get acc info
$getid = $_GET['id'];
$queryuse = $db->query("SELECT * FROM users WHERE id = '$getid'");
$user = $queryuse->fetch();

if(!$user || $user['IsBanned'] == "yes"){
die('<div class="app py-4 container">
                <div class="container">
    <div class="alert alert-danger" role="alert">
    That account does not exist.
    </div></div>');
}

$protectedname = $ep->remove($user['username']);
$protectedblurb = $ep->remove($user['Blurb']);
?>
<div class="text-center">
<div class="app py-4 container">
    <div class="card" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $protectedname; ?></h5>
    <?php
    if($user['IsAdmin'] == "yes"){
    ?>
    <h6 class="card-subtitle mb-2 text-danger">Administrator</h6>
    
    <?php
    }else{
    ?>
    
    <h6 class="card-subtitle mb-2 text-muted">Member</h6>
    
    <?php
    }
    ?>
    <img src="img/1.png" width="200" height="200">
    <p class="card-text"><?php echo $protectedblurb; ?></p>
    <a href="NewFriend?id=<?php echo $user['id']; ?>">Send Friend Request</a>
    <br>
    <a href="Inbox/NewMsg?id=<?php echo $user['id']; ?>">Send Message</a>
  </div>
</div>

<br>
<div class="card" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">Badges</h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $protectedname; ?>'s Badges</h6>
    <img src="img/Invited.png">
    <p>Invited</p>
  </div>
</div>
    </div>
    </div>
<?php
include "footer.php";
}
?>