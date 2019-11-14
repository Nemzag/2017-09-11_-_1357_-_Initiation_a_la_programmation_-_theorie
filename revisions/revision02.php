<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-10-10
 * Time: 09:55
 */

?>

<!-- En revision les documents ne doit pas etre conforme au HTML 5. -->

<!--CTRL+MAJ+/ selectionne texte et transforme en commentaire.-->

<!-- On va faire une NAVBAR -->

<a href="revision02.php?page=home">Accueil</a>&nbsp;&nbsp;
<a href="revision02.php?page=articles">Articles</a>&nbsp;&nbsp;
<a href="revision02.php?page=contact">Contact</a>&nbsp;&nbsp;

<?php
// Verification c'est une condition donc on va utiliser des IF.
// Variable globale ($name = '')
// variable superglobale {environnement} ($_GET['param'])
// Autre : $_POST, $_FILE, $_SESSION variable permanente, $_SERVER.

if(!isset($_GET['page'])) // test d'existence, « !isset » opposé, verifie si l'index est definie sinon agir avec le IF.
{
    $_GET['page'] = 'home';
}
//  if($_GET['page'] == 'home')
//  {
//      echo '<h1>Accueil</h1>';
//  }
//  elseif($_GET['page'] == 'articles')
//  {
//      echo '<h1>Articles</h1>';
//  }
    if($_GET['page'] == 'articles')
    {
        echo '<h1>Articles</h1>';
    }
    elseif($_GET['page'] == 'contact')
    {
        echo '<h1>Contact</h1>';
    }
    else
    {
        echo '<h1>Accueil</h1>';
    }
/*
else
{
    echo '<h1>Accueil</h1>';
}
*/

// Ce qui ennuie le prof : D.R.Y Don't Repeat Yourself. Deux fois la meme instruction : echo '<h1>Home</h1>';
// Le soucie que le site peut planter.