<?php
require "bootstrap.php";
require "connect.php";
$resultadoQuery = $pdo->query("SELECT id,nombre,email FROM curso_php.usuarios ");


?>
<h1 align="center">Usuarios</h1>
<div class="container">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Controles</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            while ($fila = $resultadoQuery->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo '<td>' . $fila['nombre'] . '</td>';
                echo '<td>' . $fila['email'] . '</td>';
                echo "<td><a type='button' class='btn btn-success' href='update_usrs.php?id=".$fila['id']."'>Editar</a>";
                echo "<a type='button' class='btn btn-danger' href='delete_usrs.php?id=".$fila['id']."'>Eliminar</a></td>";

                echo "</tr>";
            }

            ?>
        </tr>
        </tbody>
    </table>
</div>