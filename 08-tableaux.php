<code>
<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-10-16
 * Time: 09:53
 */
 
$titre = 'Les tableaux (array)';

require 'includes/header.inc.php';

echo '<h1>'.$titre.'</h1>';

// variable classique aussi nommé scalaire.
// $nom1='John';
// $nom2='';
// $nom3='';
// Si on veut trier c'est une prise de tete...
// Solution à proscrire.

// $nom1='John, Dominique, Ragnar, ...';
// chaine de caractere entre delimiteur, impossible à trier.

// Déclaration d'un tableau

echo '<h2>Déclaration et manipulation d\'un tableau indexé<br>{$variable = [\'key1\', \'key2\', \'...\'];}</h2>';

// Ancienne syntaxe :
$profs = array('John Doe', 'Dominique Servais', 'Ragnar Lothbrok', 12, true); // array mot clé pas fonction, tout ce qui est ajouté est un element individuel structuré.

// Nouvelle syntaxe :
$profs = ['John Doe', 'Dominique Servais', 'Ragnar Lothbrok'];

// Manipuler une donnée du tableau (tableau indexé)
echo '<h3>Manipuler une donnée du tableau (tableau indexé)<br>{$variable[n°];}</h3>';

// var_dump($profs);exit();
// echo $profs; = erreur...
echo $profs[2];
echo '<br>';
echo '<br>';

// Manipuler toute les données d'un tableau avec une boucle
echo '<h3>Manipuler toute les données d\'un tableau avec une boucle</h3>';

// Afficher toutes les données d'un tableau

// Boucle for() non adapté
echo '<h4>Boucle for($initialisation, $condition, $incrementation) non adapté</h4>';

for($i = 0; $i < 3; $i++) // PHP a créé une boucle uniquement pour les tableaux : foreach()...
{
    echo $profs[$i].'<br>';
}

// Boucle foreach() est spécifique.
echo '<h4>Boucle foreach($variable as $key) est spécifique</h4>';

foreach($profs as $prof) // convention d'écriture variable principale pluriel, au singulier.
{
    echo $prof.'<br>';
}

echo '<h2>Déclaration et manipulation d\'un tableau associatif<br>{$variable = [\'key1\' => value1, \'key2\' => value2, \'... => ...\'];}</h2>';

// Déclaration
$classe = ['Laure' => 18, 'Michael' => 19, 'Ragnar' => 7, 'Dominique' => 10]; // clé => valeur

// Affichage
$points = null;

foreach($classe as $key => $value) // convention d'écriture $key => $value.
{
    echo '<p>'.$key.' : '.$value.'</p>';

// Comment connaitre le total des points ?
// echo $value; // 10 derniere valeur...
    $points += $value; // creations d'une nouvelle variable additionnel.
}
echo '<h3>Total des points<br>{$variable += $value}</h3>';

echo 'Points de toute la classe : '.$points;

// Nombre d'élèves
echo '<h3>Nombre d\'élèves<br>{count($variable)}</h3>';

echo '<p>Nombre d\'élèves : '.count($classe).'</p>';

// Moyenne classe
echo '<h3>Moyenne classe<br>{$variable2 / count($variable1)}</h3>';

echo '<p>Moyenne de la classe : '.$points / count($classe).'</p>';

echo '<h3>Moyenne classe<br>{array_sum($variable) / count($variable)}</h3>';

echo '<p>Moyenne de la classe : '.array_sum($classe) / count($classe).'</p>';

// Traitement des données d'un tableau
echo '<h2>Tri des données d\'un tableau indexé décroissant<br>{rsort($variable);}</h2>';
// Les tris tableau indexés
/*
 * Croissant : sort($variable);
 * Décroissant : rsort($variable);
 * Key Croissant : ksort($variable);
 * Key Décroissant : krsort($variable);
 * Value Croissant : asort($variable);
 * Value Décroissant : arsort($variable);
 * http://php.net/manual/fr/array.sorting.php
 */
rsort($profs); // décroissant
foreach($profs as $prof)
{
    echo '<p>'.$prof.'</p>';
}

echo '<h2>Tri des données d\'un tableau associatif décroissant par note (value)<br>{arsort($variable);}</h2>';

// Afficher par point obtenue, note ($value) la plus élevé au sommet.

arsort($classe); // décroissant par value et souligné la moyenne 10.
foreach($classe as $key => $value)
{
    if($value == 10)
        {
            echo '<p><u>'.$key.' : '.$value.'</u></p>';
        }
        else
        {
            echo '<p>'.$key.' : '.$value.'</p>';
        }
}

// Verifier la presence d'un élément dans le tableau (profs): tableau indexé
echo '<h2>Verifier la presence d\'un élément dans le tableau (profs): tableau indexé<br>{in_array(\'value\', $variable);}</h2>';

// Ex: vérifier la présence de Dominique Servais dans les profs (oui ou non).

// in_array('value', array)

// var_dump(in_array('Dominique Servais', $profs));

if(in_array('Dominique Servais', $profs))
{
    echo '<p>Oui, est là.</p>';
}
else
{
    echo '<p>Non, n\'est pas là.\'</p>';
}

// Ex: Si Dominique Servais n'est pas dans les profs (Pas encore engagé ou déjà engagé).

if(!in_array('Dominique Servais', $profs))
{
    echo '<p>N\'est pas encore engagé.';
}
else
{
    echo '<p>Est déjà engagé.</p>';
}

// Compter les éléments d'un tableau
echo '<h2>Compter les éléments d\'un tableau</h2>';
echo 'count($classe) : '.count($classe);
echo '<br>';
echo 'sizeof($classe) : '.sizeof($classe); // Alias de count($variable);.

echo '<br>';
echo '<br>';

$j = count($profs);
// var_dump($j);

for($i = 0; $i < $j; $i++)
{
    echo $profs[$i].'<br>';
}

echo '<h1>Tableaux multidimensionnels</h1>';

$profs = [
    'Ragnar'    => ['HTML', 'CSS', 'Pillage'],
    'Dominique' => ['Javascript', 'Réseaux'],
    'John'      => ['PHP', 'Design', 'Veille']
];

foreach($profs as $key => $value) // suivant les dimensions on fait un nombre equivalent de foreach();
{
    echo '<h4>'.$key.'</h4>';
    foreach($value as $cours)
    {
        echo '&nbsp;&nbsp;'.$cours.'<br>'; // le deuxieme tableau est bien value
    }
}
require 'includes/footer.inc.php';
?>
</code>
