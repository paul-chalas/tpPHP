<?php
include 'utils.inc.php';
start_page('Home');

$pageSub = 'Inscription';
$pageSubAdrr = 'index.php';
$pageLog = 'Login';
$pageLogAdrr = 'login.php';
?>

    <hr/><br/><strong>Accueil</strong><br/><hr/>
    <a href="<?php echo $pageSubAdrr; ?>"><?php echo $pageSub; ?></a>
    <a href="<?php echo $pageLogAdrr; ?>"><?php echo $pageLog; ?></a>


<?php
end_page();
?>