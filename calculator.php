<?php
function start_page($title)
{
    echo '<!DOCTYPE html> 
    <html lang="fr">
    <head>
        <title>'. PHP_EOL . $title .'</title>
    </head>
    <body>' . PHP_EOL
    ;
};
?>

<?php
function end_page()
{
    echo '</body> 
    </html> '
    ;
};
?>




<?php
start_page('Calculette de OUF');
$date = date("d/m/Y");
$heure = date("F d, Y, h:i a");
echo($date);
echo '<br>';
echo($heure);
?>

    <hr/>
    <strong>CALCULETTE</strong><br/>


    <form method="post" action="calcul.php">
        <p>
            <label for="op1">Opérateur 1 :</label>
            <input type="number" name="op1" id="op1" required/>

            <br />
            <label for="op2">Opérateur 2 :</label>
            <input type="number" name="op2" id="op2" required/>

        </p>

        <input checked="checked" type="radio" name="op" value="*"/>*<br/>
        <input type="radio" name="op" value="+"/>+<br/>
        <input type="radio" name="op" value="-"/>-<br/>
        <input type="radio" name="op" value="/"/>/<br/>

        <input type="submit" value="Calculer" />
        <input type="reset" value="Effacer" />
    </form>





    <hr/>


<?php
end_page();
?>