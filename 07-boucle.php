<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-10-09
 * Time: 13:40
 */
 
// structure de controle : boucle ou iteration. Tout les sites seront connecté à une base de donnée, à gerer, qui fournis les informations au site web, je veux afficher les produits si je ne fais pas du PHP je devrais tout ecrire en <p> manuellement. On ira donc les cherchers à l'aide d'une boucle, grace à une requete SQL. On pourra trier et interagir.

$titre = 'La boucle « for »';

require 'includes/header.inc.php';

echo '<h1>'.$titre.'</h1>';

/*
 * for(exp1; exp2; exp3)
 * {
 *  instruction 1
 *  instruction 2
 * }
 *
 * for(initialisation; condition d'arrêt; incrementation) ; initialisation : donner à une variable une valeur de base ; condition d'arret : la base de donnée est vide ; l'incrementation ; variable $i = 1, condition d'arret $i <= 10, incremenation $i++.
 * {
 *  instruction 1
 *  instruction 2
 * }
 */

// Creez un compteur qui affiche les valeurs de 1 à 20.

for($i = 1; $i <= 20; $i++)
{
    echo $i.'<br>';
}

// Creez automatiquement les titres HT.M.L de un à six.

for($i = 1; $i <= 6; $i++)
{
    echo '<h'.$i.'>Titre de niveau '.$i.'</h'.$i.'>';
}

// Creez une liste déroulante alimentée par une boucle proposant les années de 1980 à 2017.
?>
<h1>Liste déroulante en pur H.T.M.L</h1>

<select> <!-- select creer une liste deroulante -->
    <option value="">1980</option>
    <option value="">1981</option>
    <option value="">1982</option>
    <option value="">1983</option>
    <option value="">1984</option>
</select>

<h1>Liste déroulante en P.H.P.</h1>
    <select>
        <?php
        for($i = 1980; $i <= 2017; $i++)
        {
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select>

    <h1>Liste déroulante en P.H.P. décroissante</h1>
    <select>
        <option value="0">Sélectionnez</option>
        <?php
        for($i = 2017; $i >= 1940; $i--)
        {
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select>

    <h1>Boucle et test</h1>

<?php
// Affichez les nombres entre 0 et 20 en faisant apparaitre le zero non significatif.
// Exemple: 01, 02...

for($i = 1; $i <= 20; $i++)
{
    if($i < 10)
    {
        echo '0';
    }
    echo $i.'<br>';
}

echo '<br>';

// Affichez les valeurs de 0 à 20 mais uniquement une sur deux.

for($i = 0; $i <= 20; $i += 2)
{
    echo $i.'<br>';
}

require 'includes/footer.inc.php';