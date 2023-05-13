<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <title>Registro Usuario</title>
</head>

<body>
    <center>
        <h1 id="titulo">Registro usuario</h1>
    </center>
    <form action="registrar.php" method="POST">
        <input name="name" type="text" placeholder="Ingrese Nombre Completo">
        <input name="password" type="password" placeholder="Ingrese Contraseña">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="signature mb-2">
                        <center>
                            <canvas id="ejemplo"></canvas> <br>
                            <button class="btn btn-info" id="canvas">Agregar Usuario</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <center>
        <button type="button" class="btn btn-info" id="clear">Eliminar Firma</button>
        <button type="button" class="btn btn-info" id="save">Descargar Firma</button>
    </center>
    <script src="script.js"></script>


</body>

</html>