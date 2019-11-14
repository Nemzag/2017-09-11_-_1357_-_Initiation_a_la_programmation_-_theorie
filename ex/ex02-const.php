<?php

/**
 * Created by PhpStorm.
 * User: Nemzag aka Gazmen Arifi.
 * Date: 2017-10-03
 * Time: 13:12
 */
 
/*
 * Dans un fichier externes (config.inc.php) déclarez deux constantes (user et level)
 *
 * Dans ce fichier, faites une vérification pour accéder à l'administration. L'accès est possible seulement si l'utilisateur est Pat et le niveau plus grand ou égal 10.
 */

require '../includes/config.inc.php';

if(USER == 'Pat' && LEVEL >= '10')
{
    echo '<h1>'.USER.', vous êtes autorisé à accéder au niveau '.LEVEL.' de l\'administration</h1>';
}
