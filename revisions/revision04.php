<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-10-10
 * Time: 11:40
 */

/* Réalisez un site permettant la gestion de plusieurs pays.
 * 1) Concevez un menu proposant le choix entre plusieurs pays (Argentine, Espagne, Italie, Belgique, Angleterre, Mexique, USA). Pour chaque langue le texte "Bienvenue sur mon site sera traduis".
 * Par defaut la langue proposée est le français.
 * Version 2 : le parametre du lien est la country.
*/

?>

<a href="?country=ar">Argentine</a>&nbsp;&nbsp;
<a href="?country=es">Espagne</a>&nbsp;&nbsp;
<a href="?country=it">Italie</a>&nbsp;&nbsp;
<a href="?country=be">Belgique</a>&nbsp;&nbsp;
<a href="?country=gb">Angleterre</a>&nbsp;&nbsp;
<a href="?country=mx">Mexique</a>&nbsp;&nbsp;
<a href="?country=us">USA</a>&nbsp;&nbsp;

<?php

if(!isset($_GET['country'])) // isset() fonction native elle integré au PHP et à des parentheses.
{
    $_GET['country'] = 'fr';
}

// if($_GET['country'] == 'ar' || 'es' || 'mx') // expression complexe erronée.
if($_GET['country'] == 'ar' || $_GET['country'] == 'es' || $_GET['country'] == 'mx') // expression complexe logique complete.
{
    echo '<h1>Bienvenido a mi sitio</h1>';
}
elseif($_GET['country'] == 'it') // expression simple, une seul valeur.
{
    echo '<h1>Benvenuto nel mio sito</h1>';
}
elseif($_GET['country'] == 'be' || $_GET['country'] == 'fr')
{
    echo '<h1>Bienvenue sur mon site</h1>';
}
elseif($_GET['country'] == 'gb' || $_GET['country'] == 'us')
{
    echo '<h1>Welcome to my website</h1>';
}
else
{
    echo '<h1>Bienvenue sur mon site</h1>';
}