<?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-09-18
 * Time: 14:54
 */

$version = 'PHP 7.1';

echo 'Cours PHP'; //necessité de delimitée la chaine avec ' or ".
echo '<br>';

// Ecrire : L'historique d'internet, mais probleme avec les apostrophes.
echo 'L\'historique d\'Internet'; // Backslash permet de faire de multiple apostrophe.
echo '<br>';
echo "<a href=\"http://www.google.be\" title='\"Google\"'>Google</a>";
echo '<br>';

//script serveur: PHP 7.1
echo "Script serveur: $version"; //double guillemet affiche la valeur
echo '<br>';
echo 'Script serveur: $version'; //simple apostrophe affiche le nom
echo '<br>';
echo 'Script serveur:' .$version; //donc on ajoute un point (concatener) et sa fonctionne
echo '<br>';
echo ('Hello World'); // Pas de parentheses car ECHO n'est pas une FONCTION, c'est une structure du langage, PHP est composé de structure de langage (IF, FOR) & de fonctions et de mots clés. Les parentheses ont les indique pour les fonctions. PHP est permissif, il vous donne la possibilité d'écrire de plusieurs façon differentes.

gettype($version); // gettype est une fonction.

//////////////////////////// PRINT ////////////////////////////
print '<h1>Scripts Serveurs</h1>'; // apostrophe
print "<h1>Scripts Serveurs</h1>"; // guillemet
print ("<h1>Scripts Serveurs</h1>"); // print est une structure du langage, utilisé des parentheses est incorrect.
?>
<script>
    test
</script>
<h1>Hello</h1>
