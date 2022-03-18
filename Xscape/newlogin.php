<?php
error_reporting(0);
$s = '';
if($_SERVER["REQUEST_METHOD"] == "POST" && !$logged)
{
   require_once 'site.php';
   if(!empty($_POST['username']) && !empty($_POST['password']))
   {
      $cleanu = $ep->remove($_POST['username']);
      $cleanp = $ep->remove($_POST['password']);

      $query = $db->prepare("SELECT * FROM accounts WHERE username = :userName");
      $query->execute([':userName' => $cleanu]);

      $luser = $query->fetch();
      if(!$luser)
      {
        exit('That account does not exist.');
      }else
      {
        $accpass = $luser['password'];
        if (password_verify($cleanp, $accpass)){
        session_regenerate_id();
	$_SESSION['primarylogin'] = TRUE;
	$_SESSION['identify'] = $luser['identifier'];

        die('<META http-equiv=refresh content=0;URL=/home>');
        }else{
         exit('That password is not linked with this account.');
        }
      }
   }else
   {
   exit('Please complete the form.');
   }
}
?>