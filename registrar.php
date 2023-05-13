<?php
include("conexion.php");
if (isset($_POST['name'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {
        $name = trim($_POST['name']);
        $password = md5($_POST["password"]);
        $clear = trim($_POST['clear']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, contraseña,fecha) 
        VALUES('$name', '$password', '$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            ?>
            <h3 class="corrrecto">Tu registro se ha compeltado</h3>
            <?php
        }
    } else {
        ?>
   
            <h3 class="error">Completar todos los campos</h3>
    
        <?php
    }
}
    ?>