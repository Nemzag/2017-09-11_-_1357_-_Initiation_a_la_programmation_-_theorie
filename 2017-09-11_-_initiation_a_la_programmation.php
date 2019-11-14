<?php

// Include dependance.
include_once "include/include_variable.php";
include_once "include/include_head.php";
include_once "include/include_header.php";
?>

<main id="main" class="ui container">

	<article id="article">

		<section id="#section-table-of-contents">

			<fieldset>
				<legend><h2 id="title-h2-table-of-contents">
						<a href="?#title-h2-table-of-contents">Table de's matière's :</a></h2></legend>

				<div id="js-toc" class="js-toc"></div>
			</fieldset>

		</section>

		<!-- BEGIN PRINCIPAL CONTENT -->
		<section id="section-principal">

			<!-- Begin Section -->
			<section>
				<fieldset>
					<legend><h2 id="title-h2-outils">
							<a href="?#title-h2-table-of-contents">Outil’s :</a></h2></legend>

					<div class="ui segment">
						<h3 id="title-h3-ide-frameworks">
							<a href="?#title-h2-table-of-contents">I.D.E. & FrameVorg's :</a></h3>

						<ul>
							<li>PhpStorm</li>
							<li>Symfôny</li>
							<li>Larawêl</li>
							<li>Easy PHP</li>
						</ul>
						<p>P.H.P. langage interprété</p>
					</div>

					<div class="ui segment">
						<h4 id="title-h4-programmation-innitiation-parameters-to-set-in-setting">
							<a href="?#title-h2-table-of-contents">Paramètre à régler dans les Setting's selon le professeur Patrick Marthus :</a>
						</h4>
						<ul>
							<li>Use soft wraps in editor : "True"</li>
							<li>Change font size (Zoom) with Ctrl+Mouse Wheel : "True"</li>
							<li></li>
						</ul>

					</div>
				</fieldset>
			</section>
			<!-- End Section -->

			<!-- Begin Section 01-output.php -->
			<section>
				<fieldset>
					<legend><h2 id="title-h2-01-introduction"><a href="?#title-h2-table-of-contents">Introduction :</a></h2></legend>

					<div class="ui segment message">
					<h3 id="title-h3-01-output"><a href="?#title-h2-table-of-contents">Out‑put :</a></h3>
					</div>

					<div class="ui segment">
						<?php
						/**
						 * Created by PhpStorm.
						 * User: Nemzag aka Gazmen Arifi.
						 * Date: 2017-09-18
						 * Time: 14:54
						 */

						$version = 'PHP 7.1'; ?>

						<pre><code class="language-php line-numbers">&lt;?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-09-18
 * Time: 14:54
 */

$version = 'PHP 7.1';</code></pre>

					</div>

					<div class="ui segment">
						<pre><code class="language-php line-numbers">echo 'Cours PHP'; //nécessité de délimitée la chaine avec ' or ".
echo '&lt;br&gt;';</code></pre>

						<?php
						echo 'Cours PHP'; // nécessité de délimitée la chaîne avec ' or ".
						echo '<br>'; ?>

					</div>

					<div class="ui segment">

						<pre><code class="language-php line-numbers">// Ecrire : L'historique d'internet, mais probleme avec les apostrophes.
echo 'L\'historique d\'Internet'; // Backslash permet de faire de multiple apostrophe.
echo '&lt;br&gt;';
echo "&lt;a href=\"http://www.google.be\" title='\"Google\"'&gt;Google&lt;/a&gt;";
echo '&lt;br&gt;';</code></pre>

						<?php
						// Ecrire : L'historique d'internet, mais problème avec les apostrophes.
						echo 'L\'historique d\'Internet'; // Backslash permet de faire de multiple apostrophe.
						echo '<br>';
						echo "<a href=\"http://www.google.be\" title='\"Google\"'>Google</a>";
						echo '<br>'; ?>

					</div>

						<div class="ui segment">

						<pre><code class="language-php line-numbers">//script serveur: PHP 7.1
echo "Script serveur: $version";
//double guillemet affiche la valeur
echo '&lt;br&gt;';

echo 'Script serveur: $version';
//simple apostrophe affiche le nom
echo '&lt;br&gt;';

echo 'Script serveur:' . $version;
//donc on ajoute un point (concatener) et sa fonctionne
echo '&lt;br&gt;';

echo ('Hello World');
// Pas de parenthèses car ECHO n'est pas une FONCTION, c'est une structure du langage,
// PHP est composé de structure de langage (IF, FOR) & de fonctions et de mots clés.
// Les parenthèses ont les indique pour les fonctions. PHP est permissif,
// il vous donne la possibilité d'écrire de plusieurs façon différentes.</code></pre>

						<?php
						//script serveur: PHP 7.1
						echo "Script serveur: $version";  //double guillemet affiche la valeur
						echo '<br>';
						echo 'Script serveur: $version';  //simple apostrophe affiche le nom
						echo '<br>';
						echo 'Script serveur:' . $version; //donc on ajoute un point (concaténer) et sa fonctionne
						echo '<br>';
						echo('Hello World'); // Pas de parenthèses car ECHO n'est pas une FONCTION, c'est une structure du langage,
						// PHP est composé de structure de langage (IF, FOR) & de fonctions et de mots clés.
						// Les parenthèses ont les indique pour les fonctions. PHP est permissif,
						// il vous donne la possibilité d'écrire de plusieurs façon différentes.?>
						</div>

						<div class="ui segment">
						<pre><code class="language-php line-numbers">gettype($version);
// gettype est une fonction.

//////////////////////////// PRINT ////////////////////////////
print '&lt;h3&gt;Script\'s Serveur\'s&lt;/h3&gt;'; // apostrophe
print "&lt;h3&gt;Script's Serveur's&lt;/h3&gt;"; // guillemet
print ("&lt;h3&gt;Script's Serveur's&lt;/h3&gt;"); // print est une structure du langage, utilisé des parentheses est incorrect.
?&gt;</code></pre>

						<?php
						gettype($version); // gettype est une fonction.

						//////////////////////////// PRINT ////////////////////////////
						print '<h3 id="title-h2-01-output-servers-scripts"><a href="?#title-h2-table-of-contents">Script\'s Serveur\'s</a></h3>';   // apostrophe
						print "<h3 id='title-h2-01-output-servers-scripts'><a href='?#title-h2-table-of-contents'>Script's Serveur's</a></h3>";     // guillemet
						print ("<h3 id='title-h2-01-output-servers-scripts'><a href='?#title-h2-table-of-contents'>Script's Serveur's</a></h3>");    // print est une structure du langage, utilisé des parenthèses est incorrect.
						?>
						</div>

						<script>
                            test
						</script>

					<div class="ui segment">
												<pre><code class="language-php line-numbers">&lt;script&gt;
  test
&lt;/script&gt;
&lt;h3&gt;Hello&lt;/h3&gt;</code></pre>

						<h3 id="title-h3-01-output-hello"><a href="?#title-h2-table-of-contents">Hello</h3>

					</div>

				</fieldset>

			</section>
			<!-- End Section 01-output.php -->

			<!-- Begin Section 02-ssi.php -->
			<section>
				<fieldset>
					<legend><h2 id="title-h2-02-ssi">
							<a href="?#title-h2-table-of-contents">S.S.I. (Server Side Include) :</a>
						</h2></legend>
					<?php
					/**
					 * Created by PhpStorm.
					 * User: Nemzag aka Gazmen Arifi.
					 * Date: 2017-09-19
					 * Time: 15:00
					 */

					// SSI : Server Side Include : require, include, require_once, include_once.
					// (Insérer des fichiers dans un fichier principale).
					// Dans un site j'ai une bannière, une barre de navigation supérieur et inférieur :
					// le pied de page (fichier externe : header & footer), je dois tout intégrer dans chaque page...

					$titre = 'Les S.S.I.';
					// Si on la met dans le header, elle s'affiche sur toute les pages "enfants"-->

					// Inclure le fichier avec le code HTML du top, dans "header.inc.php".
					// include 'includes/header.in.php'; // Path avec slash et pas backslash comme windows ;
					// raccourcie controle espace.
					require 'includes/header.inc.php';
					// Si erreur d'écriture dans le path, include : deux « warning », mais continue l'exécution du script PHP.
					// Si erreur d'écriture dans le path, require : warning et fatal error, arrête l'exécution du script PHP.?>

					<pre><code class="language-php line-numbers">&lt;?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-09-19
 * Time: 15:00
 */

// SSI : Server Side Include : require, include, require_once, include_once.
// (Insérer des fichiers dans un fichier principale).
// Dans un site j'ai une bannière, une barre de navigation supérieur et inférieur :
// le pied de page (fichier externe : header & footer), je dois tout intégrer dans chaque page...

$titre = 'Les S.S.I.';
// Si on la met dans le header, elle s'affiche sur toute les pages "enfants"--&gt;

// Inclure le fichier avec le code HTML du top, dans "header.inc.php".
// include 'includes/header.in.php'; // Path avec slash et pas backslash comme windows ;
// raccourcie controle espace.
require 'includes/header.inc.php';
// Si erreur d'écriture dans le path, include : deux « warning », mais continue l'exécution du script PHP.
			  // Si erreur d'écriture dans le path, require : warning et fatal error, arrête l'exécution du script PHP.</code></pre><?php
					$name = 'Dominique Servais'; // Convention W3C "variable" en anglais.
					echo '<p>' . $name . '</p>'; // Google ne sera pas content pour le référencement avec cette écriture.?>

					<pre><code class="language-php line-numbers">$name = 'Dominique Servais'; // Convention W3C "variable" en anglais.
echo '&lt;p&gt;'.$name.'&lt;/p&gt;'; // Google ne sera pas content pour le référencement avec cette écriture.</code></pre><?php
					// Je veux mettre une box avec "news", qui doit etre dans chaque page.
					// Je vais donc l'inclure dans un fichier diffèrent pour mieux séparer les choses.


					// inclure le fichier avec le code HTML du bottom, dans "footer.inc.php".
					// include 'includes/footer.inc.php';
					include_once 'includes/footer.inc.php';
					// le mot clé once après include ou require empêche l'insertion du fichier plusieurs fois.

					/* IEPSC (title Document partout à cause du <title>Document</title> dans header)
					// -----
					// Cours     | Eleves
					// Formation | ...
					// Courrier  | ...
					*/
					/*
					// si il n'y a plus de texte PHP en dessous, depuis 7.1 on ne doit pas fermer avec "?>"
					*/ ?>
					<pre><code class="language-php line-numbers">// Je veux mettre une box avec "news", qui doit etre dans chaque page.
// Je vais donc l'inclure dans un fichier diffèrent pour mieux séparer les choses.


// inclure le fichier avec le code HTML du bottom, dans "footer.inc.php".
// include 'includes/footer.inc.php';
include_once 'includes/footer.inc.php';
// le mot clé once après include ou require empêche l'insertion du fichier plusieurs fois.

/* IEPSC (title Document partout à cause du &lt;title&gt;Document&lt;/title&gt; dans header)
// -----
// Cours     | Elèves
// Formation | ...
// Courrier  | ...
*/
/*
// si il n'y a plus de texte PHP en dessous, depuis 7.1 on ne doit pas fermer avec "?&gt;"
*/?&gt;</code></pre>
				</fieldset>
			</section>
			<!-- End section 02-SSI -->

			<!-- Begin section 03-variables.php -->
			<section>
				<fieldset>
					<legend><h3 id="title-h3-03-intro-variables">
							<a href="?#title-h2-table-of-contents">Intro‑variable's :</a>
						</h3></legend>
					<pre><code class="language-php line-numbers">&lt;?php
/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-09-25
 * Time: 14:05
 */

$titre = 'Les variables';
// Si on la met dans le header, elle s'affiche sur tout les pages "enfants"--&gt;

require 'includes/header.inc.php'; // CTRL+D, reproduit la ligne du dessus.
/*
Tout les pages doivent avoir un title diffèrent, la pour le moment c'est Document dans 02-ssi.php & 03-intro-variables.php,
// dans header aussi : &lt;title&gt;Document&lt;/title&gt;
*/

echo '&lt;h3&gt;Les variables - introduction :&lt;/h3&gt;';
// Déclaration et affectation d'une variable</code></pre>

					<?php
					/**
					 * Created by PhpStorm.
					 * User: Nemzag aka Gazmen Arifi.
					 * Date: 2017-09-25
					 * Time: 14:05
					 */

					$titre = 'Les variables';
					// Si on la met dans le header, elle s'affiche sur toute les pages « enfants »-->

					require 'includes/header.inc.php'; // CTRL+D, reproduit la ligne du dessus.
					/*
					Tout les pages doivent avoir un title diffèrent, la pour le moment c'est Document dans 02-ssi.php & 03-intro-variables.php,
					dans header aussi : <title>Document</title>
					*/

					echo '<h3 id="title-h3-03-intro-variables-introduction">Les variables - introduction</h3>'; ?>
					<pre><code class="language-php line-numbers">$name = 'John Doe'; // type caractère : STRING ; apostrophe chaine de caractère
$age = 45; // type numérique : INTEGER, donc pas de délimiteur type apostrophe (nom) ou guillemet (valeur)
$dead = true; // type OUI ou NON ! booléenne : BOOLEAN 1 / 0, VRAI / FAUX.
$money = 55.60; // type Reel : FLOAT
// Les TABLEAUX sont des VARIABLE STRUCTURÉ permettant l'utilisation de traitements et d'affichages particuliers.
$blessures = ['Cou', 'Abdomen', 'Tête']; // ARRAY (tableau) nouvelle syntaxe ; Crochet & délimiteur séparé par des virgules. VARIABLE STRUCTURÉ dont les données sont manipulable par FONCTION.
$blessures = array('Cou', 'Abdomen', 'Tête'); // ARRAY (tableau) ancienne syntaxe ; Parenthèse & délimiteur séparé par des virgules.
$bless = 'Cou, Abdomen, Tête';

/*
La variable peut venir d'un cookie, formulaire, base de données, d'un lien, d'un fichier.
PHP est un langage de typage dynamique et pas de typage fort comme C++. Les nouvelles versions oblige de typer la variable.
En PHP, on ne type pas les variables le processus est automatique. Il est malgré tout possible de typer.
On déclare les variables au sommet.
Syntaxe : on précède l'identifiant du symbole $ suivi par un operateur d'affectation (=) et d'une valeur.
*/

/*
Ex Ecrire le corps de John Doe âgé de 45 ans était accompagné d'une enveloppe contenant 55.60 Euros.
*/
echo "Le corps de $name agé de $age ans était accompagné d'une enveloppe contenant $money Euros."; // méthode guillemet
echo '&lt;br&gt;';
echo '&lt;p&gt;Le corps de '.$name.' agé de '.$age.' ans était accompagné d\'une enveloppe contenant '.$money.' €.&lt;/p&gt;';</code></pre><?php // Déclaration et affectation d'une variable

					$name = 'John Doe'; // type caractère : STRING ; apostrophe chaîne de caractère
					$age = 45; // type numérique : INTEGER, donc pas de délimiteur type apostrophe (nom) ou guillemet (valeur)
					$dead = true; // type OUI ou NON ! booléenne : BOOLEAN 1 / 0, VRAI / FAUX.
					$money = 55.60; // type Reel : FLOAT
					// Les TABLEAUX sont des VARIABLE STRUCTURÉ permettant l'utilisation de traitements et d'affichages particuliers.
					$blessures = ['Cou', 'Abdomen', 'Tête']; // ARRAY (tableau) nouvelle syntaxe ; Crochet & délimiteur séparé par des virgules. VARIABLE STRUCTURÉ dont les données sont manipulables par FONCTION.
					$blessures = array('Cou', 'Abdomen', 'Tête'); // ARRAY (tableau) ancienne syntaxe ; Parenthèse & délimiteur séparé par des virgules.
					$bless = 'Cou, Abdomen, Tête';

					/*
					La variable peut venir d'un cookie, formulaire, base de données, d'un lien, d'un fichier.
					PHP est un langage de typage dynamique et pas de typage fort comme C++. Les nouvelles versions oblige de typer la variable.
					En PHP, on ne type pas les variables le processus est automatique. Il est malgré tout possible de typer.
					On déclare les variables au sommet.
					Syntaxe : on précède l'identifiant du symbole $ suivi par un operateur d'affectation (=) et d'une valeur.
					*/

					/*
					Ex Ecrire le corps de John Doe âgé de 45 ans était accompagné d'une enveloppe contenant 55.60 Euros.
					*/
					echo "Le corps de $name âgé de $age ans était accompagné d'une enveloppe contenant $money Euros."; // méthode guillemet
					echo '<br>';
					echo '<p>Le corps de ' . $name . ' âgé de ' . $age . ' ans était accompagné d\'une enveloppe contenant ' . $money . ' &euro;.</p>';
					/*
					Méthode apostrophe : utile pour les OBJECTS.
					Comme c'est ECHO il faut baliser, dans ce cas un simple <p> est suffisant. Pour la conformité HTML.
					< ne peut etre utilisé dans des cas mathématiques par exemple, il faut la remplacé par une entitée nommé ou numérique
					*/

					// var_dump($blessures); // fonction PHP de débogage

					// Nommage et conventions d'écriture de's variable's
					// Toujours précédé d'un dollar, doit évoquer ce qu’elle doit contenir.

					// Il y a des languages qui nécessitent "var", d'autre string name.

					// Peut on utiliser n'importe quel nom ?
					// ══════════════════════════════════════════════
					// On ne peut pas mettre d'espace, exemple : nom prénom.
					// On ne peut pas utiliser les INSTRUCTIONS d'un langage de programmation,
					// Les ACCENTS sont refusés et interdits.
					// L'UNDERSCORE est autorisé.
					// Le point est interdit,
					// Les chiffres peuvent être utilisé sauf pour le premier caractère d'une variable.
					// Espace de nom : [A-Z][a-z][0-9] (expression régulière ou rationnel) -> case sensitive, sujette à la casse.
					// Pas de caractères spéciaux +-*/%^ et operateur arithmétique.
					// Pas de chiffre en première position.?>
					<pre><code class="language-php line-numbers">/*
Méthode apostrophe : utile pour les OBJECTS.
Comme c'est ECHO il faut baliser, dans ce cas un simple &lt;p&gt; est suffisant. Pour la conformité HTML.
&lt; ne peut etre utilisé dans des cas mathématiques par exemple, il faut la remplacé par une entité nommé ou numérique
*/

// var_dump($blessures); // fonction PHP de débogage

// Nommage et convention's d'écriture des variable's
// Toujours précédé d'un dollar, doit évoquer ce qu’elle doit contenir.

// Il y a des langages qui nécessite "var", d'autre string name.

// Peut‑on utiliser n'importe quel nom ?
// ══════════════════════════════════════════════
// On ne peut pas mettre d'espace, exemple : nom prénom.
// On ne peut pas utiliser les INSTRUCTIONS d'un langage de programmation,
// Les ACCENTS sont refusés et interdits.
// L'UNDERSCORE est autorisé.
// Le point est interdit,
// Les chiffres peuvent être utilisé sauf pour le premier caractère d'une variable.
// Espace de nom : [A-Z][a-z][0-9] (expression régulière ou rationnel) -&gt; case sensitive, sujette à la casse.
// Pas de caractères spéciaux +-*/%^ et operateur arithmétique.
// Pas de chiffre en première position.

$NOM = 'Doe';
$nom = ' Servais';
echo '&lt;p&gt;'.$NOM,$nom.'&lt;/p&gt;';</code></pre>
					<?php
					$NOM = 'Doe';
					$nom = ' Servais';
					echo '<p>' . $NOM, $nom . '</p>';

					// Convention d'écriture: variable en anglais, en haut, nom évocateur, si plusieurs mots: camel case ($tauxTvaComprise) ;  Opercamelcase TauxTvaComprise réservé au classe underscore au constante.
					require 'includes/footer.inc.php'; ?>

					<pre><code class="language-php line-numbers">// Convention d'écriture: variable en anglais, en haut, nom évocateur, si plusieurs mots: camel case ($tauxTvaComprise) ;  Opercamelcase TauxTvaComprise reservé au classe underscore au constante.
require 'includes/footer.inc.php';</code></pre>

				</fieldset>

			</section>
			<!-- End section 03-variables.php -->

			<!-- Begin section 04-variables-fonctions -->
			<section>
				<fieldset>
					<legend><h2 id="title-h2-04-variables-fonctions">
							<a href="?#title-h2-table-of-contents">Variable's & Fonction's :</a></h2></legend>

					<?php

					/**
					 * Created by PhpStorm.
					 * User: Nemzag aka Gazmen Arifi.
					 * Date: 2017-10-02
					 * Time: 15:15
					 */

					$titre = 'Le\'s fonction\'s et le\'s variable\'s';

					require 'includes/header.inc.php';

					echo '<h3 id="title-h3-04-variables-fonctions-' . $titre . '"><a href="?#title-h2-table-of-contents">' . $titre . ' :</a></h3>'; ?>

					<pre><code class="language-php line-numbers">&lt;?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-10-02
 * Time: 15:15
 */

$titre = 'Le's fonction's et le's variable's';

require 'includes/header.inc.php';

echo '&lt;h1&gt;' . $titre . '&lt;/h1&gt;';</code></pre>

					<?php
					$name = 'John Doe';
					$connect = true;
					$val = '';
					$number = 123;
					$profs = [];

					var_dump($name, $connect); // ne permet pas de traiter, ne fait qu'afficher. Instruction de déboggage (mode dev).?>

					<pre><code class="language-php line-numbers">$name = 'John Doe';
$connect = true;
$val = '';
$number = 123;
$profs = [];

var_dump($name, $connect);
// ne permet pas de traiter, ne fait qu'afficher.
// Instruction de débogage (mode dev).</code></pre>

					<?php
					// typage, le type de la variable string, integer, float, boolean, array, object, null.
					// PHP fait du typage dynamique
					// instruction de traitement (prod & dev)
					// Afficher le type de données
					echo '<h3 id="title-h3-04-variables-fonctions-variables-type"><a href="?#title-h2-table-of-contents">Affiche le type des variable\'s</a></h3>';
					echo gettype($name) . '<br>';
					echo gettype($connect) . '<br>';
					echo gettype($val) . '<br>';
					echo gettype($number) . '<br>';
					echo gettype($profs) . '<br>'; ?>

					<pre><code class="language-php line-numbers">// typage, le type de la variable string, integer, float, boolean, array, object, null.
// PHP fait du typage dynamique
echo '&lt;br&gt;';
// instruction de traitement (production & développemênt)
// Afficher le type de données
echo '&lt;h2&gt;Affiche le type de's variable's&lt;/h2&gt;';
echo gettype($name) . '&lt;br&gt;';
echo gettype($connect) . '&lt;br&gt;';
echo gettype($val) . '&lt;br&gt;';
echo gettype($number) . '&lt;br&gt;';
echo gettype($profs) . '&lt;br&gt;';</code></pre>

					<section>
						<?php
						echo '<h3>Modifier le type de\'s variable\'s</h3>';
						// Modifier le type de données = transtypage : définir le type
						settype($number, 'string');
						echo gettype($number) . '<br>';
						// Fonction native : fourni par le langage PHP. Plus facile.
						// Fonction utilisateur : celle que l'on crée soit même. FUNCTION TVA () {...}

						// Si $name n'est pas une chaine de caractères, écrire : vous devez entrer votre nom correctement. Si c'est bien une chaine écrire : nom correctement écrit.
						// var
						if (gettype($name) != 'string') {
							echo '<p>vous devez entrer votre nom correctement</p>';
						} /* Syntaxe if ()

					  if(condition remplie)
					  {
						  Instruction
					  }
					*/
						else {
							echo '<p>nom correctement ecrit</p>';
						} ?>

						<pre><code class="language-php line-numbers">echo '&lt;h2&gt;Modifier le type des variables&lt;/h2&gt;';
// Modifier le type de données = transtypage : définir le type
settype($number, 'string');
echo gettype($number) . '&lt;br&gt;';
// Fonction native : fourni par le langage PHP. Plus facile.
// Fonction utilisateur : celle que l'on crée soit même. FUNCTION TVA () {...}

// Si $name n'est pas une chaine de caractères, écrire : vous devez entrer votre nom correctement. Si c'est bien une chaine ecrire : nom correctement ecrit.
// var
if (gettype($name) != 'string') {
	echo '&lt;p&gt;vous devez entrer votre nom correctement&lt;/p&gt;';
} /* Syntaxe if ()

if(condition remplie)
{
Instruction
}
*/
else {
  echo '&lt;p&gt;nom correctement écrit&lt;/p&gt;';</code></pre>
					</section>

					<?php
					echo '<h3>Vérifie automatiquement le type d\'une variable</h3>';
					// Testeur de variable automatique & native.
					// is_string(var)
					// is_float()
					// is_int() / is_integer() : fonction alias font la même chose mais s'écrive différemment.
					// is_bool() / is_boolean()
					// is_object()
					// is_array()
					// is_null()

					// Verifier si $number est bien un chiffre.

					// SI dollar number est un chiffre : c'est bien un chiffre;

					// Mais comme plus tôt nous avions changé le type avec settype on doit le changer encore...
					//// Modifier le type de données = transtypage : définir le type.

					settype($number, 'integer');
					echo gettype($number) . '<br>';

					if (is_integer($number)) {
						echo '<p>c\'est bien un chiffre entier</p>';
					} else {
						echo '<p>ce n\'est pas un chiffre entier</p>';
					} ?>

					<pre><code class="language-php line-numbers">echo '&lt;h2&gt;Vérifie automatiquement le type d\'une variable&lt;/h2&gt;';
			  // Testeur de variable automatique & native.
			  // is_string(var)
			  // is_float()
			  // is_int() / is_integer() : fonction alias font la même chose mais s'écrive différemment.
			  // is_bool() / is_boolean()
			  // is_object()
			  // is_array()
			  // is_null()

		  // Vérifier si $number est bien un chiffre.

		  // SI dollar number est un chiffre : c'est bien un chiffre;

		  // Mais comme plus tôt nous avions changé le type avec settype on doit le changer encore...
		  // Modifier le type de données = transtypage : définir le type.

		  settype($number, 'integer'); echo gettype($number) . '&lt;br&gt;';

			  if (is_integer($number)) {

			  	echo '&lt;p&gt;c\'est bien un chiffre entier&lt;/p&gt;';

			  } else {

			  	echo '&lt;p&gt;ce n\'est pas un chiffre entier&lt;/p&gt;';
			  }</code></pre>

					<?php
					// unset(var) : détruire une variable.

					unset($number);
					// echo '<p>'.$number.'</p>';
					// sert à libérer la mémoire.
					// A la fin du script toutes les variables sont détruites automatiquement.
					// Mais si la variable est très lourde il vaut mieux la détruire avant la fin,
					// sa nous permettrais par exemple de détruire une variable d'identification.

					// empty(var) : vérifie si une variable est vide.

					if (empty($val)) { // point d'exclamation devant une fonction égal sont contraire : !empty($...).
						echo '<p>La variable est vide {empty(...)}</p>';
					}

					// isset(var) : vérifie si la variable existe.

					// Tester si la variable admin n'existe pas.

					if (!isset($admin)) {
						echo '<p>La variable n\'existe pas {!isset(...)}</p>';
					}

					require 'includes/footer.inc.php'; ?>

					<pre><code class="language-php line-numbers">// unset(var) : détruire une variable.

		  unset($number); // echo '&lt;p&gt;'.$number.'&lt;/p&gt;';
		  // sert à libérer la mémoire. A la fin du script toutes les variables sont détruites automatiquement.
		  // Mais si la variable est très lourde il vaut mieux la détruire avant la fin,
		  // sa nous permettrais par exemple de détruire une variable d'identification.

		  // empty(var) : vérifie si une variable est vide.

		  if (empty($val)) // point d'exclamation devant une fonction égal sont contraire : !empty($...). { echo '&lt;p&gt;La variable est vide {empty(...)}&lt;/p&gt;'; }

		  // isset(var) : vérifie si la variable existe.

		  // Tester si la variable admin n'existe pas.

		  if (!isset($admin)) {
			  echo '&lt;p&gt;La variable n\'existe pas {!isset(...)}&lt;/p&gt;';
		  }

		  require 'includes/footer.inc.php'; ?&gt;</code></pre>
				</fieldset>
			</section>
			<!-- End section 04 -->

<?php
include_once "include/include_footer.php";
?>
