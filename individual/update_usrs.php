<?php
require "bootstrap.php";
require "connect.php";

if (!empty($_POST)) {
    $nuevoNombre = $_POST['nombre'];
    $nuevoEmail = $_POST['email'];
    $idBuscar = $_POST['id'];

    $sqlUpdate = "UPDATE usuarios SET email = :email, nombre = :nombre WHERE id=:id";
    $query = $pdo->prepare($sqlUpdate);

    $res = $query->execute([
        'nombre' => $nuevoNombre,
        'email' => $nuevoEmail,
        'id' => $idBuscar
    ]);
    if ($res) {
        echo "<div class=\"alert alert-success\" role=\"alert\"><strong>¡Se actualizaron los datos correctamente!</strong></div>";
    } else {
        echo "<div class=\"alert alert-warning\" role=\"alert\"><strong>Error: Ocurrió un problema</strong></div>";
    }

}

if (!empty($_GET)) {
    $idGet = $_GET['id'];
    $sql = "SELECT nombre,email FROM curso_php.usuarios WHERE id=:id";
    $query = $pdo->prepare($sql);

    $query->execute([
        'id' => $idGet
    ]);

    $fila = $query->fetch(PDO::FETCH_ASSOC);

    $nombre = $fila['nombre'];
    $email = $fila['email'];
}
?>
<h1 align="center">Actualizar usuarios</h1>
<form method="post">
    <fieldset class="form-group">
        <label for="txt">Nombre:</label>
        <input type="text" name="nombre" class="form-control" id="txtNombre" placeholder="Nombre"
               value="<?php echo $nombre ?>">
    </fieldset>
    <fieldset class="form-group">
        <label for="txtEmail">Email:</label>
        <input type="text" name="email" class="form-control" id="txtEmail" placeholder="Email"
               value="<?php echo $email; ?>">
    </fieldset>
    <input type="hidden" name="id" value="<?php echo $idGet; ?>"><!--añade el id escondido para enviarlo enel Post-->
    <input type="submit" value="Actualizar">
</form>

