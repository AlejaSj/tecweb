<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Productos - Electrónicos</title>
    <link rel="stylesheet" href="style.css">
    <script>





        function validarFormulario() {
            
            const e1 = document.getElementById('e1') 
            const e2 = document.getElementById('e2') 
            const e3 = document.getElementById('e3') 
            const e4 = document.getElementById('e4') 
            const e5 = document.getElementById('e5') 
            const e6 = document.getElementById('e6') 
            const e7 = document.getElementById('e7') 
            const nombre = document.getElementById('nombre').value;
            if (nombre.trim() === "" || nombre.length > 100) {
              e1.innerHTML = "El nombre del producto es obligatorio y debe tener 100 caracteres o menos."

                return false;
            }

            const marca = document.getElementById('marca').value;
            if (marca === "") {
                e2.innerHTML = "Debe seleccionar una marca.";
                return false;
            }

            // Validación del modelo del producto
            const modelo = document.getElementById('modelo').value;
            const modeloRegex = /^[a-zA-Z0-9\s]+$/;
            if (modelo.trim() === "" || !modeloRegex.test(modelo) || modelo.length > 25) {
                e3.innerHTML="El modelo es obligatorio, debe ser alfanumérico y tener 25 caracteres o menos.";
                return false;
            }

            // Validación del precio del producto
            const precio = parseFloat(document.getElementById('precio').value);
            if (isNaN(precio) || precio <= 99.99) {
                e4.innerHTML = "El precio es obligatorio y debe ser mayor a 99.99.";
                return false;
            }

            // Validación de los detalles del producto
            const detalles = document.getElementById('detalles').value;
            if (detalles.length > 250) {
                e5.innerHTML = "Los detalles deben tener 250 caracteres o menos.";
                return false;
            }

            // Validación de las unidades disponibles
            const unidades = parseInt(document.getElementById('unidades').value, 10);
            if (isNaN(unidades) || unidades < 0) {
                e6.innerHTML = "Las unidades son obligatorias y deben ser un número mayor o igual a 0.";
                return false;
            }

            // Validación de la ruta de la imagen
            const imagen = document.getElementById('imagen').value;
            if (imagen.trim() === "") {
                document.getElementById('imagen').value = 'ruta/a/imagen/por/defecto.jpg';
            }

            // Si todas las validaciones son correctas
            return true;
        }
    </script>
</head>
<body>
<?php
// Conexión a la base de datos
$id = $_GET['id'];

$conexion = @mysqli_connect(
    'localhost',
    'root',
    'PkU3qJ35jr(4/r-V',
    'marketzone1'
);

// Verificar la conexión
if (!$conexion) {
    die('¡Base de datos NO conectada!');
}

// Consultar el producto por su ID
if ($result = $conexion->query("SELECT * FROM productos WHERE id = '{$id}'")) {
    // Extraer los datos del producto
    $row = $result->fetch_assoc(); // Solo necesitamos una fila (fetch_assoc)
    
    // Asignar los valores a variables
    $nombre = $row['nombre'];
    $marca = $row['marca'];
    $modelo = $row['modelo'];
    $precio = $row['precio'];
    $detalles = $row['detalles'];
    $unidades = $row['unidades'];
    $imagen = $row['imagen'];

    $result->free();
}

$conexion->close();
?>

<h2>Formulario de Registro de Productos - Electrónicos</h2>
<form onsubmit="return validarFormulario()" action="http://localhost/tecweb/practicas/p10/update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div id="e1"></div>
    <label for="nombre">Nombre del producto:</label><br>
    <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'); ?>"><br><br>

    <div id="e2"></div>
    <label for="marca">Marca:</label><br>
    <input type="text" id="marca" name="marca" value="<?php echo htmlspecialchars($marca, ENT_QUOTES, 'UTF-8'); ?>"><br><br>

    <div id="e3"></div>
    <label for="modelo">Modelo:</label><br>
    <input type="text" id="modelo" name="modelo" value="<?php echo htmlspecialchars($modelo, ENT_QUOTES, 'UTF-8'); ?>"><br><br>

    <div id="e4"></div>
    <label for="precio">Precio:</label><br>
    <input type="number" id="precio" name="precio" step="0.01" value="<?php echo htmlspecialchars($precio, ENT_QUOTES, 'UTF-8'); ?>"><br><br>

    <div id="e5"></div>
    <label for="detalles">Detalles (opcional):</label><br>
    <textarea id="detalles" name="detalles" rows="4" cols="50"><?php echo htmlspecialchars($detalles, ENT_QUOTES, 'UTF-8'); ?></textarea><br><br>

    <div id="e6"></div>
    <label for="unidades">Unidades disponibles:</label><br>
    <input type="number" id="unidades" name="unidades" value="<?php echo htmlspecialchars($unidades, ENT_QUOTES, 'UTF-8'); ?>"><br><br>

    <div id="e7"></div>
    <label for="imagen">Ruta de la imagen (opcional):</label><br>
    <input type="text" id="imagen" name="imagen" value="<?php echo htmlspecialchars($imagen, ENT_QUOTES, 'UTF-8'); ?>"><br><br>

    <input type="submit" value="Actualizar Producto">
</form>

</body>
</html>
