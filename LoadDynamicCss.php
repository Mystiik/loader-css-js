<?php
// https://css4design.developpez.com/tutoriels/css/feuille-de-style-css-dynamique-avec-php/

use GN\LoaderCssJs\Loader;

// header('HTTP/1.0 304 Not Modified');
// header('Cache-Control: max-age=3600, must-revalidate');
header('content-type: text/css');

$root = $_SERVER['DOCUMENT_ROOT'] . "/assets/css/";

Loader::readfiles($root, [
	"theme.min.css",
]);