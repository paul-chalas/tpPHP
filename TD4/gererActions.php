<?php
require 'Book.php';
require 'Library.php';
session_start();
//LIB
$name = $_POST['name'];
$address = $_POST['address'];
$max = $_POST['max'];
//BOOKS
$title = $_POST['title'];
$author = $_POST['author'];
$editor = $_POST['editor'];
$pages = $_POST['pagesNb'];
$action = $_POST['action'];
if ($action == 'Ajouter le livre')
{
    $livre = new Book($title,$author,$editor,$pages);
    $_SESSION['library']->ajouterLivre($livre);
}
if ($action == 'Ajouter a la deuxieme bibliotheque')
{
    $livre = new Book($title,$author,$editor,$pages);
    $_SESSION['library2']->ajouterLivre($livre);
}
elseif($action == 'Creation')
{
    $library = new Library($name,$address,$max);
    $_SESSION['library'] = $library;
}
elseif ($action == 'Supprimer le livre')
{
    $livre = new Book($title,$author,$editor,$pages) ;
    $book = array_search($livre,$_SESSION['library']->getBooks());
    $_SESSION['library']->enleverLivre($book);
}
elseif ($action == 'Oter les doublons')
{
    $_SESSION['library']->supprimerDoublons();
}
elseif ($action == 'Tri par auteur')
{
    $_SESSION['library']->triParAuteur();
}
elseif ($action == 'Deuxième bibliothèque')
{
    $library = new Library($name,$address,$max);
    $_SESSION['library2'] = $library;

}
else
{
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}

header('Location: gestionBibliotheque.php');