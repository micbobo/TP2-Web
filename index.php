<?php

/*** rapport d'erreur activé ***/
error_reporting(E_ALL);

/*** path du site constant ***/
$site_path = realpath(dirname(__FILE__));
define ('__SITE_PATH', $site_path);

/*** inclure le fichier init.php ***/
include 'includes/init.php';

?>