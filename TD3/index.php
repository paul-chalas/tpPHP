<?php
include 'utils.inc.php';
start_page('TD2');

$test = $_GET['step'];

if ($_GET['step'] == ERROR){
    echo 'DEJA PRIS GROS FDP !!!';
}
if ($_GET['step'] == VIDE){
    echo 'MERCI DE REMPLIR LES CHAMPS !!!';
}


//login.php?step=LOGIN.

?>

<hr/>
<strong>Formulaire</strong><br/>


<form method="post" action="data/data-processing.php">

    <fieldset>
        <legend>Vos coordonnées</legend> <!-- Titre du fieldset -->

        <label for="ident">Identifiant</label>
        <input type="text" name="ident" /><br/>

        <input type="radio" name="sexe" value="Homme" /> <label for="Homme">Homme</label>
        <input type="radio" name="sexe" value="Femme" /> <label for="Femme">Femme</label>
        <input type="radio" name="sexe" value="Autre" /> <label for="Autre">Autre</label><br/>


        <label for="email">Quel est votre e-mail ?</label>
        <input type="email" name="email"  /><br/>

        <label for="pass">Votre mot de passe :</label>
        <input type="password" name="pass" /><br/>

        <label for="pass">Verification :</label>
        <input type="password" name="pass2" /><br/>

        <label for="tel">Téléphone :</label>
        <input type="tel" name="tel" /><br/>

        <label for="pays">Dans quel pays habitez-vous ?</label>
        <select name="pays" >
            <optgroup label="Europe">
                <option value="france">France</option>
                <option value="espagne">Espagne</option>
                <option value="italie">Italie</option>
                <option value="royaume-uni">Royaume-Uni</option>
            </optgroup>
            <optgroup label="Amérique">
                <option value="canada">Canada</option>
                <option value="etats-unis">Etats-Unis</option>
            </optgroup>
            <optgroup label="Asie">
                <option value="chine">Chine</option>
                <option value="japon">Japon</option>
            </optgroup>
        </select><br/>

        <input type="checkbox" name="conditions" REQUIRED/> <label for="frites">Cochez la case pour accepter les conditions générales</label><br />

        <input type="submit" value="mailer" name="action" /><br/>
        <input type="submit" value="rec" name="action" /><br/>



    </fieldset>

</form>





<hr/>




<?php
end_page();
?>




