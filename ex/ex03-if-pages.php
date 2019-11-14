<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-10-09
 * Time: 09:31
 */
 
/*
 * Réalisez un systeme d'affichage de contenue (page) en fonction de la valeur d'une variable.
 * Exemple : si la variable est égale à about vous affichez un titre About Us.
 * Les pages : Home, About, Products, Contact.
 */

$titre = 'Conditionnelle';

require '../includes/header.inc.php';

$page = 'about';

if($page == 'about')
{
    echo '<h1>About Us, A propos de nous</h1>';
}
elseif($page == 'products')
{
    echo '<h1>Welcome to Products, Notre catalogue</h1>';
}
elseif($page == 'contact')
{
    echo '<h1>Welcome to Contact, Nous contacter </h1>';
}
else
{
    echo '<h1>Home, Page d\'accueil</h1>';
}

require '../includes/footer.inc.php';