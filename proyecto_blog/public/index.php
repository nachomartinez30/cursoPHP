<?php
/**
 * User: desarrollo1
 * Date: 26/03/2018
 * Time: 02:31 PM
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "../vendor/autoload.php";
require "../connect.php";

$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);/*quita el ultimo elemento .php de la URL*/
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
define('URL_BASE', $baseUrl);
var_dump(URL_BASE);
$rut = null;
if (!empty($_GET)) {
    $rut = $_GET['ruta'];
}

use Phroute\Phroute\RouteCollector;/*exporta RouteCollector*/

$ruta = new RouteCollector();/*crea un objeto*/
$ruta->get("/", function () use ($pdo) { /*añade la ruta '/' t retorna 'Route/' ??????*/
    $query = $pdo->prepare("SELECT titulo,contenido FROM blog_post ORDER BY id ASC");
    $query->execute();

    $blogPost = $query->fetchAll(PDO::FETCH_ASSOC);

    return render('../views/index.php',['blogPost'=>$blogPost]);/*el archivo debe contener el nombre de la misma variable que almacena la consulta*/

});

$dispatcher = new Phroute\Phroute\Dispatcher($ruta->getData());
$respuesta = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $rut);

echo $respuesta;

function render($nombreArchivo, $parametros = [])
{
    ob_start();
    extract($parametros);
    include "../views/index.php";

    return ob_get_clean();
}
