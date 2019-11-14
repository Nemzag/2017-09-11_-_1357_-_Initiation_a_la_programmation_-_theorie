<!--CTRL+MAJ+/ selectionne texte et transforme en commentaire.-->

<!--Permettre de rendre le titre de chaque page different.-->
<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-09-25
 * Time: 13:32
 */
 
/*
<?php
$titre = 'Variables'; // Si on la met dans le header, elle s'affiche sur tout les pages "enfants"
?>
*/
?>
<!doctype html> <!-- inclus dans le header, mode SSI -->
<!-- "! & tab" : tout est ajouté automatiquement (PseudoLangage comme "p*3 & tab", vient d'Emmet) -->
<!-- Commentaire PHP "//" pour cela sa bug, il faut des commentaires HTML "<!--" -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
        echo $titre;
        ?>
    </title> <!-- Variable pour le titre avec un delimiteur "?php echo" ou "?=". -->
</head>
<body>