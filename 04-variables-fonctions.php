<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-10-02
 * Time: 15:15
 */
 
$titre = 'Les fonctions et les variables';

require 'includes/header.inc.php';

echo '<h1>'.$titre.'</h1>';

$name = 'John Doe';
$connect = true;
$val = '';
$number = 123;
$profs = [];

var_dump($name, $connect); // ne permet pas de traiter, ne fait qu'afficher. Instruction de déboggage (mode dev).

// typage, le type de la variable string, integer, float, boolean, array, object, null.
// PHP fait du typage dynamique

echo '<br>';
// instruction de traitement (prod & dev)
// Afficher le type de données
echo '<h2>Affiche le type des variables</h2>';
echo gettype($name).'<br>';
echo gettype($connect).'<br>';
echo gettype($val).'<br>';
echo gettype($number).'<br>';
echo gettype($profs).'<br>';

echo '<h2>Modifier le type des variables</h2>';
// Modifier le type de données = transtypage : definir le type
settype($number, 'string');
echo gettype($number).'<br>';
// Fonction native : fourni par le langage PHP. Plus facile.
// Fonction utilisateur : celle que l'on crée soit meme. FUNCTION TVA () {...}

// Si $name n'est pas une chaine de caracteres, ecrire : vous devez entrer votre nom correctement. Si c'est bien une chaine ecrire : nom correctement ecrit.
// var
if (gettype($name) != 'string')
{
    echo '<p>vous devez entrer votre nom correctement</p>';
}
/* Syntaxe if ()

if(condition remplie)
{
    Instruction
}
*/
else
{
    echo '<p>nom correctement ecrit</p>';
}

echo '<h2>Vérifie automatiquement le type d\'une variable</h2>';
// Testeur de variable automatique & native.
// is_string(var)
// is_float()
// is_int() / is_integer() : fonction alias font la meme chose mais s'écrive differement.
// is_bool() / is_boolean()
// is_object()
// is_array()
// is_null()

// Verifier si $number est bien un chiffre.

// SI dollar number est un chiffre : c'est bien un chiffre;

// Mais comme plus tot nous avions changer le type avec settype on doit le changer encore...
// Modifier le type de données = transtypage : definir le type.

settype($number, 'integer');
echo gettype($number).'<br>';

if (is_integer($number))
{
    echo '<p>c\'est bien un chiffre entier</p>';
}
else
{
    echo '<p>ce n\'est pas un chiffre entier</p>';
}

// unset(var) : détruire une variable.

unset($number);
// echo '<p>'.$number.'</p>'; // sert à liberer la memoire. A la fin du script toute les variables sont detruites automatiquement. Mais si la variable est tres lourde il vaut mieux la detruire avant la fin, sa nous permettrais par exemple de detruire une variable d'identification.

// empty(var) : vérifie si une variable est vide.

if (empty($val))  // point d'exclamation devant une fonction égal sont contraire : !empty($...).
{
    echo '<p>La variable est vide {empty(...)}</p>';
}

// isset(var) : verifie si la variable existe.

// Tester si la variable admin n'existe pas.

if(!isset($admin))
{
    echo '<p>La variable n\'existe pas {!isset(...)}</p>';
}

require 'includes/footer.inc.php';