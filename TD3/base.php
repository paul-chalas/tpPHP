<?php
$dbLink = mysqli_connect('mysql-php.alwaysdata.net', 'php', '123456789')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($dbLink , php_td)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

$query = 'SELECT id, email, date FROM user';

if(!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}

while($dbRow = mysqli_fetch_assoc($dbResult))
{
    echo $dbRow['id'] . '<br/>';
    echo $dbRow['email'] . '<br/>';
    echo date('d/m/Y', strtotime($dbRow['date']));
    echo '<br/><br/>';
}


?>