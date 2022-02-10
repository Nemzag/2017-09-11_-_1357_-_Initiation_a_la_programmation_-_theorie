<?php

/**
Créez un tableau contenat différentes catégories de voitures et leur prix:

- Polo 13000
- Tiguan 29000
- Golf 17000
- Touran 26000
- Beetle 21000

1) Affichez toutes les voitures par ordre de prix croissant
2) Affichez le nombre de voiture
3) Affichez le prix total des voitures
4) Mettez en gras (b) toutes les voitures dont le prix est compris entre 20000 et 27000
5) Affichez uniquement les voitures dont le prix est supérieur à la moyenne.
 */

$arrays = ['Polo' => 13000, 'Tiguan' => 29000, 'Golf' => 17000, 'Touran' => 26000, 'Beetle' => 21000];

// Commentaires du profs lors de la correction.

echo'<br>';
print_r($arrays);//exit; Die et Exit arrête l'exécution du script.
echo'<br>';
var_dump($arrays);//die;

echo '<h3>1) Affichez toutes les voitures par ordre de prix croissant</h3>';

asort($arrays);
foreach($arrays as $key => $value)
{
    echo $key.' : '.$value.'&euro;<br>';
}

echo '<h3>2) Affichez le nombre de voiture</h3>';

echo count($arrays);

echo '<h3>3) Affichez le prix total des voitures</h3>';

echo array_sum($arrays);

echo '<h3>4) Mettez en gras (b) toutes les voitures dont le prix est compris entre 20000 et 27000</h3>';

foreach($arrays as $key => $value)
{
    if ($value >= 20000 && $value <= 27000)
    {
       echo '<b>'.$key.' : '.$value.'</b><br>'; // Correction : j'avais pas mis le $key pour afficher la voiture.
    }
    else
    echo $key.' : '.$value.'<br>';
}

echo '<h3>5) Affichez uniquement les voitures dont le prix est supérieur à la moyenne.</h3>';

foreach($arrays as $key => $value)
{
    if ($value > array_sum($arrays) / count($arrays)) // Correction  : if($value > $moyenne)
    {
        echo $key.' : '.$value.'<br>';
    }
}

echo '<h4>5.1) La Moyenne est :</h4>';

echo (array_sum($arrays) / count($arrays)); // Correction $moyenne = array_sum($arrays) / count($arrays);
