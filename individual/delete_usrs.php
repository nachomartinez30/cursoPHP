<?php
require "bootstrap.php";
require "connect.php";

$sqlDelete = "DELETE FROM usuarios WHERE id=:id";
$query = $pdo->prepare($sqlDelete);


$query->execute([
    'id' => $_GET['id'],
]);

header("Location: list_usrs.php");