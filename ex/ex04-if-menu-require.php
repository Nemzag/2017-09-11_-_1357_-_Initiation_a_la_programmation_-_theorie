<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-10-09
 * Time: 10:52
 */
 
/*
 * Creation d'un menu de navigation permettant via les instructions conditionnelles d'inclure les fichiers correspondants aux pages.
 */

$titre = 'Menu';

require '../includes/header.inc.php';

// Parametre : information qui vont etre traité dans le script. Transmise d'une page web vers un script PHP pour etre manipulé.
// Soite dans l'URL soit en arriere plan.

// $page = la variable n'est plus utile, on la remplace par un parametre / query dans les liens.

// NAVBAR
// &nbsp; entité de l'espacement.
?>
    <a href="?page=home">Accueil</a>&nbsp;&nbsp; <!-- « ? » indique que l'on reste dans la page en question, plutot que d'écrire le path du fichier en question -->
    <a href="?page=about">A propos de nous</a>&nbsp;&nbsp;
    <a href="?page=products">Notre catalogue</a>&nbsp;&nbsp;
    <a href="?page=contact">Nous contacter</a>&nbsp;&nbsp;

<?php

// Pour recuperer le parametre et l'utilisé il nous faut une variable super globale externe : $_GET['parametre'];

// La page indique des erreurs en dessous des liens et nous allons y remedier. Car le parametre ?page n'est pas definie.
// On écrie isset — Determine si une variable est « SET » et n'est pas « NULL ».

if(!isset($_GET['page'])) // ! = opposé=  n'existe pas. On va donc lui donner une valeur à la variable avec « = ».
{
    $_GET['page'] = 'home';
}

if($_GET['page'] == 'about') // variable super globale externe, qui s'écrit $_GET['parametre1', "parametre2'] pour les liens $_POST['parametre'] dans les formulaires, $_FILE['parametre']. Super global car c'est un tableau.
{
    require '../includes/about.inc.php';
}
elseif($_GET['page'] == 'products')
{
    require '../includes/products.inc.php';
}
elseif($_GET['page'] == 'contact')
{
    require '../includes/contact.inc.php';
}
else // pas de parenthese parce que pas de test...
{
    require '../includes/home.inc.php';
}

require '../includes/footer.inc.php';