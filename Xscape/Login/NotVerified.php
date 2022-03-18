<?php
require_once '../site.php';
if(!$logged || $usr['verified'] == "yes" || $usr['DiscordID'] == "notset"){
header('Location: ../');
}else{
if($global['VerifyAll'] == "yes"){
$db->query("UPDATE accounts SET approved = '$y'");
die('<META http-equiv=refresh content=0;URL=CompleteSignup.aspx>');
}else{
if($usr['verified'] == "no" && $usr['requiresExtraVerification'] == "yes" || $global['InviteKeyOnly'] == "yes"){
?>
<link rel="stylesheet" href="https://static.rbxcdn.com/css/leanbase___9b9fc145916d65f94e610d1f02775894_m.css/fetch"/>
<link rel="stylesheet" href="https://static.rbxcdn.com/css/page___8040cedb7391df397df95b221ce71912_m.css/fetch"/>
<div class="content ">

                                    
<div class="security-container secruity-password-container">
    <div class="section-content">
        <div>
    <div class="form-warning">
        <span class="icon-warning-orange"><img src="../content/images/warn.png"></span>
        <p class="small text-warning form-warning-text">Looks like you need to verify using an INVITE KEY. Find a friend
        who is an Xscape member and is eligible to invite people.
        </p>
    </div>

    <div id="form-forgot-password-username" class="form-forgot-password-username">
        <ul>
            <li class="forget-password">
                <img class="image-security" src="https://static.rbxcdn.com/images/Login/security-key.png" alt="key">

                <div class="forgot-password-container">
                    <h5>Invite Key</h5>
                    <div>Enter your Invitation Code to access Xscape.</div>
                    <div class="form-horizontal">
                        <div class="form-group" id="form-username">
                            <input id="inv" class="form-control input-field" placeholder="0000-0000-000-000"/>
                            <p class="hidden form-control-label" id="form-username-error"></p>
                        </div>
                        <button id="forgot-password-btn" type="button" class="btn-fixed-width btn-primary-md">Submit</button>
                    </div>
                </div>
            </li>

            <li class="forgot-username">
                <img class="image-security" src="https://static.rbxcdn.com/images/Login/security-account.png" alt="key">

                <div class="forgot-password-container">
                    <h5>Account Key</h5>
                    <div>Lost your discord account? Use your existing account key to verify your account.</div>
                    <div class="form-horizontal">
                        <div class="form-group" id="form-email">
                            <input id="key" class="form-control input-field" placeholder="AAABC-EFGH-IJK-LMNOP"/>
                            <p class="hidden form-control-label" id="form-email-error"></p>
                        </div>
                        <button id="forgot-username-btn" type="button" class="btn-fixed-width btn-primary-md">Submit</button>
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
}else{
?>

<div style="text-align: center;">
<p/>
<div style="margin: 10px 0;"><h2>Thank you!</h2></div>
<div>
        <p>Your account has been sent for approval.<br/></p>
        <p>If extra verification is needed, this page will allow you to submit an invite key.</p>

        <a class="rbx-btn-primary" href="../Logout.aspx">Logout</a>
</div>
</div>
<div style="clear:both"></div>
<?php
include "../footer.php";
}
}
}
?>