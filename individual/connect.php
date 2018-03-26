<?php
/**
 * User: desarrollo1
 * Date: 21/03/2018
 * Time: 10:52 AM
 */
$dbHost = 'localhost';
$dbName = 'curso_php';
$dbUser = 'root';
$dbPass = '';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo $e->getMessage();
}