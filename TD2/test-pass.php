<?php
$login = $_POST['login'];
$pass = $_POST['pass'];

if ($login == "bob" && $pass == "eponge"){
    echo '<hr/><br/><strong>Connecté !</strong><br/><hr/>';
}
else{
    header('Location:pageErreur.php');
}


