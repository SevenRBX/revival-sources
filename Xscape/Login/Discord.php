<?php
require_once '../site.php';
if(!$logged || $usr['verified'] == "yes"){
header('Location: ../');
}else{
?>
<link rel="stylesheet" href="https://dtjatwg9u87ct.cloudfront.net/content/css/leanbasenew.css">
<div style="text-align: center;">
<p/>
<div style="margin: 10px 0;"><h2>Welcome to Xscape!</h2></div>
<div>
        <p>As this is a new account we need to make sure you are allowed to play Xscape.<br/></p>
        <p style="color: red;">If you leave the discord server your account will be terminated.</p>

        <a class="rbx-btn-primary" href="https://discord.com/api/oauth2/authorize?client_id=916710302635151370&redirect_uri=https%3A%2F%2Fwww.xsscape.cf%2Fapi%2FDiscordVerify&response_type=code&scope=identify%20guilds">Authorize</a>
        <p>It could take between 24 - 48 hours for your account to be activated. Invite key verification MAY be required.</p>
        <p>If you are on the automatic verification list just click authorize above and you can use the site!</p>
</div>
</div>
<div style="clear:both"></div>
<?php
include "../footer.php";
}
?>