<?php
$s = '';
if($_SERVER["REQUEST_METHOD"] == "POST" && !$logged)
{
   require_once '../site.php';
   if(!empty($_POST['UserName']) && !empty($_POST['Password']))
   {
      $cleanu = $ep->remove($_POST['UserName']);
      $cleanp = $ep->remove($_POST['Password']);

      $query = $db->prepare("SELECT * FROM accounts WHERE username = :userName");
      $query->execute([':userName' => $cleanu]);

      $luser = $query->fetch();
      if(!$luser)
      {
        $s = 'That account does not exist.';
      }else
      {
        $accpass = $luser['password'];
        if (password_verify($cleanp, $accpass)){
        session_regenerate_id();
	$_SESSION['primarylogin'] = TRUE;
	$_SESSION['identify'] = $luser['identifier'];

        header('Location: ../my/Home.aspx');
        }else{
         $s = 'That password is not linked with this account.';
        }
      }
   }else
   {
   $s = 'Please complete the form.';
   }
}
?>
<!DOCTYPE html>

<html>
<head>
<title>
	Xscape Login
</title>
<link rel="stylesheet" href="https://www.roblox.com/CSS/Base/CSS/FetchCSS?path=reset___90041b2af2fb6b9b7864ee66001ba812_m.css"/>

<link rel="stylesheet" href="https://www.roblox.com/CSS/Base/CSS/FetchCSS?path=main___b9fc09f13be8536abfa64d128d534134_m.css"/>

<link rel="stylesheet" href="https://www.roblox.com/CSS/Base/CSS/FetchCSS?path=page___7c0e569ae37f3e720522b607a2251927_m.css"/>

<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>

<script type="text/javascript" src="https://s3.amazonaws.com/js.roblox.com/fbf1ee7f87e15b4da11fda4617461836.js"></script>
</head>

<body>

<div id="NotLoggedInPanel" class="rbx-login-form">
	<form name="FacebookLoginForm" method="post" action="" id="FacebookLoginForm" class="rbx-form-horizontal" role="form">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value=""/>
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value=""/>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="HmHKMTPiXE9ihbMdIZoefsMLNkdRpVH/fAqK6PSTATIR2LRgo4bpC8nphVPl4pfkGrcXSAxcF/tpjVnJGtjJgKG5vuDEU7Eu4g8WdIPtvpBOcC5wI+XyuvaAkAYXL9up2YuH3VbKogqdALRYnRxEla6CXpqsytgVIRacEjBH7vrhbZ320Vp5rSGBSV1T5dJtM+6kto0GpPtcUGOvtmHaUNwnUYkQTQ9gMR5GTtRI98wGagO/N0uyr67cUNz04ZwYfbTqrzBiAxKj0OlpmnRj4eM4aPVLYrWa6DgVI98wGewWido1u+b7qbalkq5J4ivLoU2F5w=="/>
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['FacebookLoginForm'];
if (!theForm) {
    theForm = document.FacebookLoginForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>

<script src="https://www.roblox.com/ScriptResource.axd?d=_93_rgQ5E6-wjuz8R2_fwh8uTqa3-RhXY1Phqp0LA0Y1geO99XLeod1wEPn4kc-s9PZLGYDPr7J4CCoI5YBGNXJ3Zc8XGhkBgJ6dQbjCoQksswaoBe81T8tYqvfUUzNS9TjilXkcAeHQVW0XAlE7JoksTgg50KdI2Qf2imFIhhKT2nopOGrnYbQMl_raTHlLINNksacp-SNmGAMiWDmEsAQYx9cVYmRMLvgQ8ukEMaF_Z9THHSMySVpDTqvkAETr4H2AXyDyii3uoYpuZTILklblp3U1" type="text/javascript"></script>
<script src="https://www.roblox.com/Services/Secure/LoginService.asmx/js" type="text/javascript"></script>
<div>

<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="2DF76423"/>
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="q2xlcOctuaQsp/yGTOOY3UCfMme6aOvtrttCCSdM6fR3Jz7uY/zi1/xy91rb0cI0sNT0E0TNX69vqM860POQ04qJFzeJ2q5d0tH2d0ZwraTRJqS1VMA/9/gEjaCWNYjlKzvk3HA55KM3JwBZyDj1zq6ZzCs="/>
</div>
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ScriptManager', 'FacebookLoginForm', [], [], [], 90, '');
//]]>
</script>

<div id="LoginForm" class="rbx-newLogin">
            <div id="credentials-section" class="log-in-form">
                <div class="rbx-form-group">
                    <input name="UserName" type="text" id="UserName" class="form-control rbx-input-field LoginFormInput hidden" name="UserName" placeholder="Username"/>
                </div>
                <div class="rbx-form-group">
                    <input name="Password" type="password" id="Password" class="form-control rbx-input-field LoginFormInput" placeholder="Password"/>
                </div>
                <div id="iFrameCaptchaControl">
                    
                </div>
                <div class="rbx-login-btns">
                    <a class="rbx-btn-secondary-sm" onclick="__doPostBack()" id="LoginButton" tabindex="4">Log In</a>
					<a class="rbx-btn-control-sm" href="https://www.xsscape.cf/NewAccount.aspx" target="_top">Sign up</a>
                </div>
				<span id="LoggingInStatus" class="rbx-login-status">
					<img src="https://s3.amazonaws.com/images.roblox.com/6ec6fa292c1dcdb130dcf316ac050719.gif" alt=""/>
					<span>Logging in...</span>
				</span>
            </div>

          <div id="two-step-verification-section" class="log-in-form" style="display: none">
                <div class="rbx-form-group">
                    <div id="TwoStepVerificationMessage" class="two-step-verification-message">Enter your two step verification code.</div>
                </div>
                <div class="rbx-form-group">
                    <input name="TwoStepVerificationCodeInput" type="text" id="TwoStepVerificationCodeInput" class="form-control rbx-input-field LoginFormInput" placeholder="Code"/>
                </div>
                <div class="rbx-login-btns">
                    <a id="TwoStepVerificationNewCodeButton" class="rbx-btn-secondary-sm" style="display:none">New Code</a>
                    <a id="TwoStepVerificationSubmitButton" class="rbx-btn-secondary-sm">Submit</a>
                    <a id="TwoStepVerificationCancelButton" class="rbx-btn-control-sm">Cancel</a>
                </div>
            </div>
                <div class="rbx-login-msg">
                    <span id="ForgotPasswordLink">
					    <a href="ResetPasswordRequest.aspx" target="_top" class="rbx-link rbx-font-sm">Forgot Password?</a>
					</span>
				    <span id="ErrorMessage" class="rbx-text-danger rbx-font-sm"></span>
                </div>
				<div id="SocialNetworkSignIn" class="rbx-social-signin">
					<div id="fb-root"></div>
					 
					<div class="rbx-facebook-login">
						<a class="rbx-btn-icon-sm " href="https://www.youtube.com/watch?v=92nYmrxHTpc" target="_top" ref="form-facebook">
  	                        <span class="rbx-icon-facebook"></span>
                            Connect with Facebook
	                    </a>
					</div>
					
				</div>
            </div>
    </form>
  </div>
	<script type="text/javascript">
	    $(function () {
	        Roblox.iFrameLogin.Resources = {
	            //<sl:translate>
	            invalidCaptchaEntry: 'Invalid Captcha entry',
	            //</sl:translate>
	            useSignOnApi: 'False' === 'True',
	            signOnApiPath: '',
	            requestCodeUnauthenticatedPath: '',
                verifyCodeUnauthenticatedPath: '',
	            enterTwoStepCodeMessage: 'Enter your two step verification code.',
	            invalidCodeMessage: 'Sorry, but the code you entered was invalid or has expired.',
	            floodedTwoStepMessage: 'Too many unsuccessful attempts. Please try again later.',
	            verifyEmailMessage: 'You do not have a verified email address. Please contact customer support.',
                unknownTwoStepErrorMessage: 'Sorry, an unknown error has occurred.'
	        };
	        Roblox.iFrameLogin.init();
	    });
	</script>
</body>
</html>