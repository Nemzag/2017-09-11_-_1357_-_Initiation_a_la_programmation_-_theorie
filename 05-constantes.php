<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-10-03
 * Time: 11:27
 */

$titre = 'Les constantes';

require 'includes/header.inc.php';

echo '<h1>' . $titre . '</h1>';
// Déclaration de la constante
// define(..., ...)

define('DB_CLIENT', 'catalogue'); // toute constante par convention doivent etre ecrite en majuscule. catalogue est la valeur. Syntaxe define(nom constante, valeur constante).

// Convention d'écriture : MAJ et underscore pour les noms de constantes.

$nom = 'pat';

if ($nom == "dom") // = assignation ; == operateur de comparaison
{
    echo 'pas bon';
}

echo '<p>La constante est : '.DB_CLIENT.'</p>';

define('DB_CLIENT', 'client');
echo '<p>La constante est : '.DB_CLIENT.'</p>';  // constant already defined
require 'includes/footer.inc.php';