

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
    integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 align="center">Bienvenido</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                contenido

                <?php
                foreach ($blogPost as $blog) {
                    $titulo = $blog['titulo'];
                    $contenido = $blog['contenido'];
                    $fecha = new  DateTime('now');
                    $formatoFecha = $fecha->format('F j,Y');
                    echo "<div class=\"blog-post\"><h2>$titulo</h2><p> $formatoFecha <div class=\"blog-post-image\"><img src=\"image/glasses.jfif\" alt=\"\"></div><div class=\"blog-post-content\">$contenido</div></p></div>";
                }

                ?>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
                <footer>
                    este es un pie de página
                </footer>
            </div>
        </div>
    </div>
</body>
</html>