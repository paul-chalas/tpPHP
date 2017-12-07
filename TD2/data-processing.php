<?php
$ident = $_POST['ident'];
$sexe = $_POST['sexe'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$tel = $_POST['tel'];
$pays = $_POST['pays'];
$conditions = $_POST['conditions'];
$action = $_POST['action'];


if($action == 'mailer')
{
    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL . '</br>';
    $message .= 'Identifiant : ' . $ident . PHP_EOL . '</br>';
    $message .= 'Sexe : ' . $sexe . PHP_EOL . '</br>';
    $message .= 'Email : ' . $email . PHP_EOL . '</br>';
    $message .= 'Mot de passe : ' . PHP_EOL . $pass . '</br>';
    $message .= 'Téléphone : ' . PHP_EOL . $tel . '</br>';
    $message .= 'Pays : ' . PHP_EOL . $pays . '</br>';


    echo $message;
    mail('paul-romain.chalas@etu.univ-amu.fr', 'Nouvel utilisateur', $message);
    echo '</br>' . 'Votre mail a bien été envoyé';



    $dbLink = mysqli_connect('mysql-php.alwaysdata.net', 'php', '123456789')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink , php_td)
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

    $today = date('Y-m-d');
    $query = 'INSERT INTO user (IDENTIFIANT, CIVILITE, EMAIL, MDP, TELEPHONE, PAYS, DATE) VALUES 
        (\'' . $ident . '\', \'' . $sexe . '\', \'' . $email . '\', \'' . $pass . '\', \'' . $tel . '\', \'' . $pays . '\', NOW())';

    if(!($dbResult = mysqli_query($dbLink, $query)))
    {
        echo 'Erreur dans requête<br />';
// Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }
    else{
        echo '</br>' . 'Bonjour, ' . $ident;
        echo '</br>' . 'Incsription enregistré ! MERCI A TOI !!';
    }


    echo '</br><a href="index.php">Retourner à l\'accueil </a>';

}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}

?>