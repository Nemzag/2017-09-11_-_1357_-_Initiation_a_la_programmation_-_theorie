<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-10-03
 * Time: 14:41
 */
 
$titre = 'Structure conditionnelle';

require 'includes/header.inc.php';

echo '<h1>'.$titre.'</h1>';

/* Syntaxe
 * Simple
 * if(condition)
 * {
 *     instruction
 * }
 * Avec un else
 * if(condition)
 * {
 *     instruction
 * }
 * else
 * {
 *     instruction
 * }
 * Avec un elseif
 * if(condition)
 * {
 *     instruction
 * }
 * elseif
 * {
 *     instruction
 * }
 * else
 * {
 *     instruction
 * }
 *
 * Si membre >= 20: juniors
 * si membre >= 14: cadets
 * si membre >= 12: minimes
 * sinon: aucune catégorie
*/

// Version 1
$age = 13;

if($age >= 20) // ne pas oublier d'écrire $ pour la variable
{
    echo '<p>Juniors</p>';
}
elseif($age >= 14)
{
    echo '<p>Cadets</p>';
}
elseif($age >= 12)
{
    echo '<p>Minimes</p>';
}
else
{
    echo '<p>Pas de catégorie</p>';
}

// En plus on soit resident à Namur.
// Version 2
$age = 15;
$localite = 'Namur';

if($localite == 'Namur')
{
    if($age >= 20) // ne pas oublier d'écrire $ pour la variable
    {
        echo '<p>Juniors</p>';
    }
    elseif($age >= 14)
    {
        echo '<p>Cadets</p>';
    }
    elseif($age >= 12)
    {
        echo '<p>Minimes</p>';
    }
    else
    {
        echo '<p>Pas de catégorie</p>';
    }
}
else
{
    echo '<p>Vous devez résider à Namur</p>';
}
require 'includes/footer.inc.php';
