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

$rut = null;
if (!empty($_GET)) {
    $rut = $_GET['ruta'];
}

use Phroute\Phroute\RouteCollector;/*exporta RouteCollector*/

$ruta = new RouteCollector();/*crea un objeto*/
$ruta->get("/",function () use($pdo){ /*añade la ruta '/' t retorna 'Route/' ??????*/
    $query = $pdo->prepare("SELECT titulo,contenido FROM blog_post ORDER BY id ASC");
    $query->execute();

    $blogPost = $query->fetchAll(PDO::FETCH_ASSOC);
});

$dispatcher = new Phroute\Phroute\Dispatcher($ruta->getData());
$respuesta = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'],$rut);

echo $respuesta;
