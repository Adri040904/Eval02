<?php

include('../conexion.php');

// Abrimos la conexión a la base de datos
$conexion = conectar();

// Consulta SQL
$sql  = 'SELECT *  FROM producto';

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
    <title>Productos</title>
</head>
<body>
    <div class="container"><br>
            <h1>Productos</h1>
    <div class="container">
    </div><br>
    <table class="table table-hover">
            <tr>
                <td class="table-dark" >Id</td>
                <td class="table-dark">Nombre</td>
                <td class="table-dark">Desripcion</td>
                <td class="table-dark">Stock</td>
                <td class="table-dark">Precio de venta</td>
                <td class="table-dark">&nbsp;</td>
            </tr>
        <tbody>
            <?php
            // Recorremos el array con los datos de los productos
            while ($productos = mysqli_fetch_array($resultado)) {
                $idProducto = $productos['idProducto'];
                $Nombre = $productos['Nombre'];
                $Descripcion = $productos['Descripcion'];
                $Stock = $productos['Stock'];
                $PrecioVenta = $productos['PrecioVenta'];
                echo '<tr>';
                echo '<td>' . $idProducto . '</td>';
                echo '<td>' . $Nombre . '</td>';
                echo '<td>' . $Descripcion . '</td>';
                echo '<td>' . $Stock . '</td>';
                echo '<td>' . $PrecioVenta . '</td>';
                echo '<td><a href="editar.php?id=' . $idProducto . '" class="btn btn-success">Editar</a> | <a href="eliminar.php?id=' .$idProducto.'" class="btn btn-dark">Eliminar</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div class="d-grid col-4 mx-auto">
        <a  class="btn btn-danger" href="../index.html">Volver</a>
    </div>
        </div>
</body>
</html>