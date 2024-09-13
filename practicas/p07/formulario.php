<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Parque Vehicular</title>
</head>
<body>
    <h1>Consulta de Parque Vehicular</h1>
    
    <form method="GET" action="">
        <label for="matricula">Consultar por matrícula:</label>
        <input type="text" name="matricula" id="matricula" placeholder="Ingrese matrícula">
        <button type="submit">Consultar</button>
    </form>

    <form method="GET" action="">
        <button type="submit" name="mostrar_todos" value="1">Mostrar todos los autos</button>
    </form>

    <?php
    include ("parque_vehicular.php");
    if (isset($_GET['matricula']) && !empty($_GET['matricula'])) {
        $matricula = $_GET['matricula'];
        
        if (isset($parque_vehicular[$matricula])) {
            echo "<h2>Detalles del vehículo con matrícula $matricula:</h2>";
            echo "<pre>";
            print_r($parque_vehicular[$matricula]);
            echo "</pre>";
        } else {
            echo "<p>No se encontró el vehículo con la matrícula $matricula.</p>";
        }
    }

    if (isset($_GET['mostrar_todos']) && $_GET['mostrar_todos'] == 1) {
        echo "<h2>Todos los autos registrados:</h2>";
        echo "<pre>";
        print_r($parque_vehicular);
        echo "</pre>";
    }
    ?>
</body>
</html>
