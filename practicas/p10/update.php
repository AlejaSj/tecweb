<?php
// Obtener los datos del formulario
$id = $_POST['id'];  // El ID del producto que se está editando
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];
$detalles = $_POST['detalles'];
$unidades = $_POST['unidades'];
$imagen = $_POST['imagen'];

// Conectar a la base de datos
$conexion = @mysqli_connect(
    'localhost',
    'root',
    'PkU3qJ35jr(4/r-V',  // Tu contraseña
    'marketzone1'
);

// Verificar la conexión
if (!$conexion) {
    die('Error de conexión a la base de datos: ' . mysqli_connect_error());
}

// Preparar la consulta de actualización
$sql = "UPDATE productos SET 
        nombre = ?, 
        marca = ?, 
        modelo = ?, 
        precio = ?, 
        detalles = ?, 
        unidades = ?, 
        imagen = ? 
        WHERE id = ?";

// Preparar el statement
$stmt = $conexion->prepare($sql);

// Verificar si la preparación fue exitosa
if ($stmt === false) {
    die('Error en la preparación de la consulta: ' . $conexion->error);
}

// Asociar los parámetros a la consulta
$stmt->bind_param(
    "sssdsssi", // Tipos de datos: s para string, d para double (precio), i para integer (id)
    $nombre, 
    $marca, 
    $modelo, 
    $precio, 
    $detalles, 
    $unidades, 
    $imagen, 
    $id
);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "El producto ha sido actualizado correctamente.";
} else {
    echo "Error al actualizar el producto: " . $stmt->error;
}

// Cerrar el statement y la conexión
$stmt->close();
$conexion->close();
?>
