<?php
include '../utils.inc.php';
start_page('DataReader');

$file = 'data.txt';
if(!($file = fopen($file, 'r')))
{
    echo 'Erreur de lecture';
    exit();
}

?>

    <hr/><br/><strong>Données :</strong><br/><hr/>


<?php
echo 'Liste des utilisateurs : <br/>';
$cpt = 1;
while($line = fgets($file, 255))
{
    echo 'Utilisateur n ' . $cpt . ' : ' . $line . '<br/>';
    ++$cpt;
}

fclose($file);



end_page();
?>