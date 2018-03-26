<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar usuario</title>
    <?php
    require "bootstrap.php";
    require "connect.php";
    ?>
</head>
<body>
<?php
if (!empty($_POST)) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (:nombre,:email,:pass);";

    $query = $pdo->prepare($sql);

    $resultado = $query->execute([
        'nombre' => $nombre,
        'email' => $email,
        'pass' => md5($password)
    ]);

    if ($resultado) {
        echo "<div class=\"alert alert-success\" role=\"alert\"><strong>¡Se insertaron los datos correctamente!</strong></div>";
        header("Location: list_usrs.php");
    } else {
        echo "<div class=\"alert alert-warning\" role=\"alert\"><strong>Error: Ocurrió un problema</strong></div>";
    }
}
?>
<form method="post">
    <fieldset class="form-group">
        <label for="txt">Nombre:</label>
        <input type="text" name="nombre" class="form-control" id="txtNombre" placeholder="Nombre">
    </fieldset>
    <fieldset class="form-group">
        <label for="txtEmail">Email:</label>
        <input type="text" name="email" class="form-control" id="txtEmail" placeholder="Email">
    </fieldset>
    <fieldset class="form-group">
        <label for="txtPass">Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
    </fieldset>
    <input type="submit" value="Enviar">
</form>
</body>
</html>