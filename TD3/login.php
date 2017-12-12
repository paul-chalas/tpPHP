<?php
include 'utils.inc.php';
start_page('TD2');

$test = $_GET['step'];

if ($_GET['step'] == ERROR){
    echo 'ERREUR DE MDP !!';
}

//login.php?step=LOGIN.

?>




<form method="post" action="test-pass.php">
   <p>
       <label for="login">Votre pseudo :</label>
       <input type="text" name="login" />

       <br />
       <label for="pass">Votre mot de passe :</label>
       <input type="password" name="pass" />

   </p>

   <input type="submit" value="ok" name="action" /><br/>
</form>




<?php
end_page();
?>