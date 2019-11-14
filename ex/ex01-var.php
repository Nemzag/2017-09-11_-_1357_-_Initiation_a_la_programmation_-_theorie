<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-09-26
 * Time: 14:47
 */
 
// rendre le fichier conforme au HT.M.L. Hypertext Markup Language
// indiquez si les variables sont valides ou pas
// En anglais si possible
// Plusieurs mots on utilise le camelcase

$titre = 'Exercice 01';

$nom = 'Doe';

require '../includes/header.inc.php';

echo '<h1>Indiquez si les variables sont valides</h1>';
// $var 1 (invalide, espace)
// $var (valide, pas conseillé)
// variable (invalide, pas de dollar)
// $2taux (invalide, commence par un chiffre en premier)
// $taux_tva_comprise (valide, mais pas conseillé, utilisé le camelCase)
// $a-paye (invalide, operateur mathematique)
// $élément (valide, mais vivement pas conseillé)
// $PAYS (valide, mais pas conseillé, car on écrit ses variables en miniscule et les constantes en majuscule)
// $first*name (invalide, operateur mathematique)

// Syntaxe : $mavar = expression ; de different type selon l'expression.

echo '<p></p>';

echo '<h1>Affichez le resultat des opérations sur les variables</h1>';
echo '<p>';
$a = 10;
$b = -5;
$c = $a;
echo $b - $a; // -15 = -5 - 10.
echo '<br>';
echo $a / $b * $c; // = -20 = 10 / -2 * 10.
echo '</p>';
// Cas particuliers
echo '<p>';
$a = "123"; // normalement il devrait lever une erreur de script, permissivité de PHP, ce ne sont pas les bons types. Mais PHP n'oblige pas de typer.
$b = 77;

echo $a + $b; // 200 ; erreur car $a est un STRING & $b est un INTEGER
echo '<br>';
echo $a.$b; // 12377
echo '<br>';
echo $a - $b; // 46
echo '</p>';
echo '<h1>Incrémentation</h1>';

$a = 8;
$a++; // 8 post-in-crementa-tion
++$a; // 10 pre-in-crementa-tion
echo $a;

echo '<h1>Ecrivez un script permettant d\'échanger les valeurs de deux variables $a & $b</h1>';

$a = 5;
$b = 3;
echo $a.' valeur A';
echo '<br>';
echo $b.' valeur B';

$d = $a; // variable intermediaire, vaut 5.
$a = $b; // a = 3
$b = $d; // b = 5
// Obligation de passer par une variable supplementaire.

echo '<p>Après l\'échange par variable intermediaire supplementaire « $c » :</p>';
echo $a.' valeur A';
echo '<br>';
echo $b.' valeur B';

echo '<h1>Realisez un calcul de montant H.T.V.A. en utilisant deux variables :</h1>';

$montant = 100;
$quantity = 5;

echo '<p>TOTAL HTVA: '.$montant * $quantity.'&euro;</p>';
// dans un contexte professionel les variables doivent etre nominative et explicative.

echo '<h1>Realisez un calcul de T.V.A. en utilisant deux variables :</h1>';

$tva = 21;

echo '<p>TVA: '.($montant*$tva/100).'%</p>';

echo '<p>TVAC: '.(($montant*$tva/100)+($montant)).'&euro;</p>';



require '../includes/footer.inc.php';