<?php
require "bootstrap.php";
require "connect.php";
$usuario = null;
$query = null;

if (!empty($_POST)) {
    $query = "SELECT nombre,email,password FROM usuarios WHERE email=:email AND password = :password";
    $resultadoQuery = $pdo->prepare($query);

    $resultadoQuery->execute([
        'email' => $_POST['email'],
        'password' => md5($_POST['password'])
    ]);

    $usuario = $resultadoQuery->fetch(PDO::FETCH_ASSOC);
}
?>

<form method="post">
    <div class="form-group">
        <label for="txtEmail">Email</label>
        <input type="text" name="email" id="txtEmail" class="form-control" placeholder="Email">
        <label for="txtEmail">Password</label>
        <input type="password" name="password" id="txtPassword" class="form-control" placeholder="Password">
        <br>
        <button type="submit" class="btn btn-success from-control">Enviar</button>
    </div>

    <h1>Query</h1>
    <div>
        <?php print_r($query) ?>
    </div>
    <h1>Datos de usuario</h1>
    <div>
        <?php print_r($usuario) ?>
    </div>
</form>
