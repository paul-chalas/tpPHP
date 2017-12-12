<?php
include 'utils.inc.php';
start_page('Bienvenue');

session_start();
if($_SESSION['connected'] != 'ok')
{
    echo '<a href="login.php">Connectez-vous ici</a></br>';
    die('Erreur d\'authentification');
}


?>

    <hr/><br/><strong>Super Bogoss ! Te voila maintenant connecté!!!!!!! Quel est ton niveau de satisfaction actuel ?</strong><br/><hr/>


<?php
end_page();
?>