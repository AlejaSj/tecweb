<?php
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio = (double)$_POST['precio'];
$detalles = $_POST['detalle'];
$unidades = (int)$_POST['unidad'];
$imagen = $_POST['imagen'];

@$link = new mysqli('localhost', 'root', 'PkU3qJ35jr(4/r-V', 'marketzone');	

/** comprobar la conexión */
if ($link->connect_errno) 
{
    die('Falló la conexión: '.$link->connect_error.'<br/>');
}

/** Verificar si ya existe el producto con el mismo nombre, marca y modelo */
$sql_verificar = "SELECT COUNT(*) AS total FROM productos WHERE nombre = '{$nombre}' AND marca = '{$marca}' AND modelo = '{$modelo}'";
$resultado_verificar = $link->query($sql_verificar);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la inserción del producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f9;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2, h3 {
            text-align: center;
            color: #333;
        }
        .success {
            color: #28a745;
        }
        .error {
            color: #dc3545;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 8px 0;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($resultado_verificar) {
            $fila = $resultado_verificar->fetch_assoc();
            
            if ($fila['total'] > 0) {
                // Si ya existe un producto con esos datos
                echo "<h2 class='error'>Error</h2>";
                echo "<h3>El producto con nombre <strong>'{$nombre}'</strong>, marca <strong>'{$marca}'</strong> y modelo <strong>'{$modelo}'</strong> ya existe.</h3>";
            } else {
                // Insertar el nuevo producto
                c;
                if ($link->query($sql_insertar)) {
                    // Mostrar resumen de los datos insertados
                    echo "<h2 class='success'>Producto insertado con éxito</h2>";
                    echo "<ul>
                            <li><strong>Nombre:</strong> {$nombre}</li>
                            <li><strong>Marca:</strong> {$marca}</li>
                            <li><strong>Modelo:</strong> {$modelo}</li>
                            <li><strong>Precio:</strong> $ {$precio}</li>
                            <li><strong>Detalles:</strong> {$detalles}</li>
                            <li><strong>Unidades:</strong> {$unidades}</li>
                            <li><strong>Imagen:</strong><br> <img src='{$imagen}' alt='Imagen del producto'></li>
                          </ul>";
                } else {
                    echo "<h2 class='error'>Error</h2>";
                    echo "<h3>El producto no pudo ser insertado. Error: ".$link->error."</h3>";
                }
            }
        } else {
            echo "<h2 class='error'>Error</h2>";
            echo "<h3>Error al verificar el producto en la base de datos: ".$link->error."</h3>";
        }

        $link->close();
        ?>
    </div>
</body>
</html>

