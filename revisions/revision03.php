<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-10-10
 * Time: 11:17
 */

/* Réalisez un site permettant la gestion de plusieurs langues.
 * 1) Concevez un menu proposant le choix entre differents  pays (Argentine, Espagne, Italie, Belgique, Angleterre, Mexique, USA). Pour chaque langue le texte "Bienvenue sur mon site sera traduis".
 * Par defaut la langue proposée est le français.
 * Version 1 : le parametre du lien est la langue.
*/

?>

<a href="?langue=es">Argentine</a>&nbsp;&nbsp;
<a href="?langue=es">Espagne</a>&nbsp;&nbsp;
<a href="?langue=it">Italie</a>&nbsp;&nbsp;
<a href="?langue=fr">Belgique</a>&nbsp;&nbsp;
<a href="?langue=en">Angleterre</a>&nbsp;&nbsp;
<a href="?langue=es">Mexique</a>&nbsp;&nbsp;
<a href="?langue=en">USA</a>&nbsp;&nbsp;

<?php

if(!isset($_GET['langue']))
{
    ($_GET['langue'] = 'fr');
}

echo '<br>';

if($_GET['langue'] == 'es')
{
    echo '<h1>Bienvenido a mi sitio</h1>';
}
elseif($_GET['langue'] == 'it')
{
    echo '<h1>Benvenuto nel mio sito</h1>';
}
elseif($_GET['langue'] == 'en')
{
    echo '<h1>Welcome to my website</h1>';
}
else
{
    echo '<h1>Bienvenue sur mon site</h1>';
}
