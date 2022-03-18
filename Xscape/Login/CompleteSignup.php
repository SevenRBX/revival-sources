<?php
require_once '../site.php';
if($_SERVER["REQUEST_METHOD"] == "POST" && $logged){
$db->query("UPDATE accounts SET verified = '$y'");
die('<META http-equiv=refresh content=0;URL=/my/Home.aspx>');
}
if(!$logged || $usr['verified'] == "yes" || $usr['DiscordID'] == "notset" || $usr['approved'] == "no"){
header('Location: ../');
}else{
?>
<form name="funnyform" method="post" action="" id="funnyform">
<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['funnyform'];
if (!theForm) {
    theForm = document.funnyform;
}
function dofunnypost() {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.submit();
    }
}
//]]>
</script>

<link rel="stylesheet" href="https://static.rbxcdn.com/css/leanbase___9b9fc145916d65f94e610d1f02775894_m.css/fetch"/>
<link rel="stylesheet" href="https://static.rbxcdn.com/css/page___8040cedb7391df397df95b221ce71912_m.css/fetch"/>
<div class="content ">

                                    
<div class="security-container secruity-password-container">
    <div class="section-content">
        <div>

    <div id="form-forgot-password-username" class="form-forgot-password-username">
        <ul>
            <li class="forget-password">
                <img class="image-security" src="https://static.rbxcdn.com/images/Login/security-account.png" alt="key">

                <div class="forgot-password-container">
                    <h5>Registration Complete!</h5>
                    <div>Click Continue to gain access to your account! Please read the Terms of Service before you do so.</div>
                    <p/>
                    <div class="form-horizontal">
                    <button href="../Terms-Of-Service.aspx" type="button" class="btn-control-md">Terms of Service</button>
                    <a name="fard" href="javascript:dofunnypost()" type="button" class="btn-primary-md">Continue</a>
                </div>
               </div>
            </li>
        </ul>
    </div>
</div>
    </div>
</div>

            
        </div>
            </div>
<?php
include "../footer.php";
}
?>