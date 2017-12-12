<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }


        th {
            background-color: #4CAF50;
            color: white;
        }

        table, th, td {
            border: 1px solid black;
        }



    </style>
</head>
<body>


<?php
include 'utils.inc.php';

$dbLink = mysqli_connect('mysql-php.alwaysdata.net', 'php', '123456789')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($dbLink , php_td)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

$queryAllData = 'SELECT ID, IDENTIFIANT, CIVILITE, EMAIL, MDP, TELEPHONE, PAYS, NB_CONNEXION, DATE FROM user';
$querySubDate = 'SELECT DATE, COUNT(*) as nb FROM user GROUP BY DATE';


if(!($dbResult = mysqli_query($dbLink, $queryAllData)))
{
    echo 'Erreur dans requête<br />';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $queryAllData . '<br/>';
    exit();
}

if(!($dbResult2 = mysqli_query($dbLink, $querySubDate)))
{
    echo 'Erreur dans requête<br />';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $querySubDate . '<br/>';
    exit();
}

?>

<h2>Donnée de la BD USER</h2>

<table>

    <tr>
        <th>ID</th>
        <th>Identifiant</th>
        <th>Nb de connexions</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($dbResult))
    {
        echo '<tr bgcolor=' . use_color() . '><td>' . $row['ID'] . '</td>';
        echo '<td>' . $row['IDENTIFIANT'] . '</td>';
        echo '<td><img src="rg.png" height="10" width="' . $row['NB_CONNEXION'] * 50 . '"></td>';

    }
    ?>
</table>



<h2>Nombre d'inscirptions</h2>

<table>

    <tr>
        <td>Nombre d'inscriptions</td>
        <?php
        while ($row = mysqli_fetch_assoc($dbResult2))
        {
            echo '<td><img src="rg.png" width="50" height="' . $row['nb'] * 1 . '"></td>';

        }
        ?>
    </tr>

    <?php $dbResult2 = mysqli_query($dbLink, $querySubDate) ?>

    <tr>
        <td>Date</td>
        <?php
        while ($row = mysqli_fetch_assoc($dbResult2))
        {
            echo '<td>' . $row['DATE'] . '</td>';
        }
        ?>
    </tr>


</table>

</body>
</html>
