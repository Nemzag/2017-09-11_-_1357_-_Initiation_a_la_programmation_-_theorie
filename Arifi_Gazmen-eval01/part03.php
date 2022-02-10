<?php

/**
Créez un système de navigation de 4 liens: Accueil - Evénements - Nos services - Contact

Le paramètre  et le texte du lien seront enregistrés dans un tableau (array) et une boucle permettra d'afficher le menu.

Lors d'un clic sur un lien, affichez simplement un titre différent par page.
 */

?>

<?php
$menus = ['accueil' => 'Accueil', 'evenements' => 'Evénements', 'services' => 'Nos services', 'contact' => 'Contact'];

// Correction : Déclaration du tableau pour le menu (en Anglais : convention).
/* $menus = [
                'home' => 'Accueil',
                'events' => 'Evénements',
                'services' => 'Nos services',
                'contact' => 'Contact'
            ];
*/

// Correction : Déclaration du tableau pour le menu.

foreach($menus as $key => $value)
{
    echo '<a href="?page='.$key.'">'.$value.'</a>&nbsp;&nbsp;';
}

if(!isset($_GET['page']))
{
    $_GET['page'] = 'accueil'; // Correction : home
}

if($_GET['page'] == 'contact')
{
    echo '<h1>Contacts</h1>'; // Correction : Nous contacter
}
elseif($_GET['page'] == 'evenements') // Correction : events
{
    echo '<h1>Evénements</h1>'; // Correction : Les événements
}
elseif($_GET['page'] == 'services')
{
    echo '<h1>Nos services</h1>';
}
else
{
    echo '<h1>Accueil</h1>';
}
?>

