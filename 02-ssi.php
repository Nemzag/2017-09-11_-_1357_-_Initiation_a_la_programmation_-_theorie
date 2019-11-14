<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-09-19
 * Time: 15:00
 */

// SSI : Server Side Include : require, include, require_once, include_once. (Inserer des fichiers dans un fichier princiale).
// Dans un site j'ai une banniere, une barre de navigation superieur et inferieur : le pied de page (fichier externe : header & footer), je dois tout integrer dans chaque page...

$titre = 'Les S.S.I.'; // Si on la met dans le header, elle s'affiche sur tout les pages "enfants"-->

// Inclure le fichier avec le code HTML du top, dans "header.inc.php".
// include 'includes/header.in.php'; // Path avec slash et pas backslash comme windows ;
// raccourcie controle espace.
require 'includes/header.inc.php';
// Si erreur d'écriture dans le path, include : deux warning, mais continue l'execution du script PHP.
// Si erreur d'écriture dans le path, require : warning et fatal error, arrete l'execution du script PHP.

$name = 'Dominique Servais'; // Convention W3C "variable" en anglais.
echo '<p>'.$name.'</p>'; // Google ne sera pas content pour le referencement avec cette ecriture.

// Je veux mettre une box avec "news", qui doit etre dans chaque page. Je vais donc l'inclure dans un fichier different pour mieux separer les choses.


// inclure le fichier avec le code HTML du bottom, dans "footer.inc.php".
// include 'includes/footer.inc.php';
include_once 'includes/footer.inc.php';
// le mot clé once après include ou require empeche l'insertion du fichier plusieurs fois.

/* IEPSC (title Document partout à cause du <title>Document</title> dans header)
// -----
// Cours     | Eleves
// Formation | ...
// Courrier  | ...
*/
/*
// si il n'y a plus de texte PHP en dessous, depuis 7.1 on ne doit pas fermer avec "?>"
*/