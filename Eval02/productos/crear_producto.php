<?php

include('../conexion.php');

// Abrimos la conexión a la base de datos
$conexion = conectar();

// Obtenemos los valores del formulario
$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Stock = $_POST['Stock'];
$PrecioVenta = $_POST['PrecioVenta'];

//Abrimos la conexion a la base de datos

$conexion = conectar();

// Formamos la consulta SQL
$sql = "INSERT INTO producto (Nombre, Descripcion, Stock, PrecioVenta) VALUES ('$Nombre', '$Descripcion', '$Stock', '$PrecioVenta')";
// Ejecutamos la consulta
$resultado = mysqli_query($conexion, $sql);

// Cerramos la conexión
desconectar($conexion);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Nuevo Producto</title>

</head>
<body>
    <div class="container">
    <h3>
        <?php

        if (!$resultado) {
            echo 'El producto no fue registrado';
        }
        else {
            echo 'El producto ha sido registrado';
        }
        ?>
    </h3>
        <a class="btn btn-success" href="productos.php">Regresar</a>
    </div>
</body>
</html>