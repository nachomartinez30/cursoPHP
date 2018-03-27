<?php
/**
 * User: desarrollo1
 * Date: 26/03/2018
 * Time: 02:31 PM
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "../connect.php";

$ruta = null;
if (!empty($_GET)) {
    $ruta = $_GET['ruta'];
}

if ($ruta == null) {
    $ruta = '/';
}
switch ($ruta) {
    case '/':
        require "../index.php";
        break;
    case '/admin':
        require "../admin/index.php";
        break;
    case  '/admin/posts':
        require "../admin/posts.php";
        break;
}