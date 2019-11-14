<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-10-10
 * Time: 13:50
 */

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Exercices</title>
</head>

<body>
    <?php
   
    // 1) A l'aide des variables proposées écrivez le texte suivant:
    
    // Le Framework Bootstrap 4 est disponible à l'adresse suivante (lien).

    echo '<h3>1) A l\'aide des variables proposées écrivez le texte suivant: Le Framework Bootstrap 4 est disponible à l\'adresse suivante (lien).</h3>';

    $cat = 'Framework';
    $name = 'Bootstrap';
    $link = 'getbootstrap';
    $ext = 'com';
    $version = 4;

    echo '<p>Le '.$cat.' '.$name.' '.$version.' est disponible à l\'adresse suivante (<a href="http://'.$link.'.'.$ext.'">'.$link.'</a>)</p>';

    // 2) Affichez le type de la variable et ensuite changez la en tableau

    echo '<h3>2) Affichez le type de la variable et ensuite changez la en tableau</h3>';

    $val = 'PHP'; // définie au départ par le prof.

//  var_dump($val); // déboguage ne pas utiliser dans ce cas.
//  echo '<br>';
    echo '<p>'.gettype($val).'</p>';
    settype($val, 'array');
    echo '<p>'.gettype($val).'</p>';
       
    // 3) Affichez si un nombre est un entier ou ne l'est pas (le nombre est stocké dans une variable)

    echo '<h3>3) Affichez si un nombre est un entier ou ne l\'est pas (le nombre est stocké dans une variable)</h3>';

    $nombre = 4;

    if(is_int($nombre))
    {
        echo '<p>Ce nombre est un entier</p>';
    }
    else
    {
        echo '<p>Ce nombre n\'est pas un entier</p>';
    }
    
    // 4) Affichez si un nombre est divisible par 2 (le nombre est stocké dans une variable)

    echo '<h3>4) Affichez si un nombre est divisible par 2 (le nombre est stocké dans une variable)</h3>';

    $nombre = 8;

    if($nombre % 2)
    {
        echo '<p>Le nombre n\'est pas divisible par deux</p>';
    }
    else
    {
        echo '<p>Le nombre est divisible par deux</p>';
    }

    if(is_float($nombre / 2))
    {
        echo '<p>Le nombre n\'est pas divisible par deux</p>';
    }
    elseif(is_integer($nombre / 2))
    {
        echo '<p>Le nombre est divisible par deux</p>';
    }
    else
    {
        echo '<p>Inserer une valeur à la variable</p>';
    }

    // 5) Affichez l'état de l'eau en fonction de sa température: glace (-0), liquide (entre 0 et 100) ou vapeur (plus de 100)

    echo '<h3>5) Affichez l\'état de l\'eau en fonction de sa température: glace (-0), liquide (entre 0 et 100) ou vapeur (plus de 100)</h3>';

    $temperature = "125";

    if($temperature < 0)
    {
        echo '<p>Glace</p>';
    }
    elseif($temperature >= 0 && $temperature <= 100)
    {
        echo '<p>Liquide</p>';
    }
    elseif($temperature > 100)
    {
        echo '<p>Vapeur</p>';
    }
    else
    {
        echo '<p>Inserer une valeur à la variable</p>';
    }

    ?>
</body>

</html>