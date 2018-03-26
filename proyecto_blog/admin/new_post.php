<?php
include "../connect.php";
require "../navbar.php";

$sql = "INSERT INTO blog_post (titulo, contenido) VALUES (:titulo,:contenido);";
if (!empty($_POST)) {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

    $insertar = $pdo->prepare($sql);
    $insertar->execute([
        'titulo' => $titulo,
        'contenido' => $contenido
    ]);
    if ($insertar) {/*si se insertó*/
        echo "<div class=\"alert alert-success\" role=\"alert\"><strong>Nuevo registro!</strong></div>";
    }
}

?>
<!doctype html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
<h1 align="center">Nuevo Post</h1>

<form method="post">
    <div class="form-group">

        <fieldset class="form-group">
            <label for="txtTitulo">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="txtTitulo" placeholder="Titulo">
        </fieldset>
        <fieldset class="form-group">
            <label for="txtContenido">Contenido</label>
            <textarea class="form-control" name="contenido" id="txtContenido" cols="30" rows="10"></textarea>
        </fieldset>
        <button type="submit" class="btn-success">Agregar</button>
    </div>
</form>

</body>
</html>