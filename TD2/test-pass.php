<?php
session_start();

if ($_POST['login'] != '' && $_POST['pass'] != '') {
    $login = $_POST['login'];
    $pass = $_POST['pass'];


    $dbLink = mysqli_connect('mysql-php.alwaysdata.net', 'php', '123456789')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink, php_td)
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $query = 'SELECT MDP FROM user WHERE IDENTIFIANT = \'' . $login . '\'';

    $result = mysqli_query($dbLink, $query);
    if (!$result) {
        echo 'Impossible d\'exécuter la requête ', $query, ' : ', mysqli_error($link);
    } else {

        $row = mysqli_fetch_assoc($result);

        if ($pass == $row['MDP'] && (mysqli_num_rows($result) != 0)) {
            $_SESSION['connected'] = 'ok';
            $_SESSION['login'] = $login;
            $_SESSION['mdp'] = $pass;
            header('Location:pageWelcome.php');
        } else {
            $_SESSION['connected'] = '';
            header('Location:login.php?step=ERROR');
        }

    }

}
else {
    $_SESSION['connected'] = '';
    header('Location:login.php?step=ERROR');
}


/*
if ($login == "bob" && $pass == "eponge"){
    header('Location:pageWelcome.php');
}
else{
    header('Location:pageErreur.php');
}
*/


