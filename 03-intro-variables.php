<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-09-25
 * Time: 14:05
 */
 
$titre = 'Les variables'; // Si on la met dans le header, elle s'affiche sur tout les pages "enfants"-->

require 'includes/header.inc.php'; // CTRL+D, reproduit la ligne du dessus.
/*
Tout les pages doivent avoir un title different, la pour le moment c'est Document dans 02-ssi.php & 03-intro-variables.php, dans header aussi : <title>Document</title>
*/

echo '<h3>Les variables - introduction</h3>';
// Déclaration et affectation d'une variable

$name = 'John Doe'; // type caractere : STRING ; apostrophe chaine de caractere
$age = 45; // type numerique : INTEGER, donc pas de delimiteur type apostrophe (nom) ou guillemet (valeur)
$dead = true; // type OUI ou NON ! booléenne : BOOLEAN 1 / 0, VRAI / FAUX.
$money = 55.60; // type Reel : FLOAT
// Les TABLEAUX sont des VARIABLE STRUCTURÉ permettant l'utilisation de traitements et d'affichages particuliers.
$blessures = ['Cou', 'Abdomen', 'Tête']; // ARRAY (tableau) nouvelle syntaxe ; Crochet & delimiteur séparé par des virgules. VARIABLE STRUCTURÉ dont les données sont manipulable par FONCTION.
$blessures = array('Cou', 'Abdomen', 'Tête'); // ARRAY (tableau) ancienne syntaxe ; Parenthese & delimiteur séparé par des virgules.
$bless = 'Cou, Abdomen, Tête';

/*
La variable peut venir d'un cookie, formulaire, base de donnée, d'un lien, d'un fichier.
PHP est un langage de typage dynamique et pas de typage fort comme C++. Les nouvelles version oblige de typé la variable.
En PHP, on ne type pas les variables le processus est automatique. Il est malgré tout possible de typer.
On déclare les variables au sommet.
Syntaxe : on précède l'identifiant du symbole $ suivi par un operateur d'affectation (=) et d'une valeur.
*/

/*
Ex Ecrire le corps de John Doe agé de 45 ans était accompagné d'une envelope contenant 55.60 Euros.
*/
echo "Le corps de $name agé de $age ans était accompagné d'une envelope contenant $money Euros."; // méthode guillemet
echo '<br>';
echo '<p>Le corps de '.$name.' agé de '.$age.' ans était accompagné d\'une enveloppe contenant '.$money.' &euro;.</p>';
/*
Méthode apostrophe : utile pour les OBJECTS.
Comme c'est ECHO il faut baliser, dans ce cas un simple <p> est suffisant. Pour la conformité HTML.
< ne peut etre utilisé dans des cas mathématiques par exemple, il faut la remplacé par une entitée nommé ou numérique
*/

// var_dump($blessures); // fonction PHP de deboguage

// Nommage et conventions des variables
// Toujours précédé d'un dollar, doit evoqué ce quelle doit contenir.

// Il y a des languages qui necessite var, d'autre string name.

// Peut on utiliser n'importe quel nom ?
// On ne peut pas mettre d'espace, exemple : nom prénom.
// On ne peut pas utiliser les INSTRUCTIONS d'un langage de programmation,
// Les ACCENTS sont refusé et interdit.
// L'UNDERSCORE est autorisé.
// Le point est interdit,
// Les chiffres peuvent etre utilisé sauf pour le premier caractere d'une variable.
// Espace de nom : [A-Z][a-z][0-9] (expression reguliere ou rationnel) -> case sensitive, sujette à la casse.
// Pas de caractere speciaux +-*/%^ et operateur arhythmetique.
// Pas de chiffre en premiere position.

$NOM = 'Doe';
$nom = ' Servais';
echo '<p>'.$NOM,$nom.'</p>';
// Convention d'écriture: variable en anglais, en haut, nom evocateur, si plusieurs mots: camel case ($tauxTvaComprise) ;  Opercamelcase TauxTvaComprise reservé au classe underscore au constante.
require 'includes/footer.inc.php';
?>