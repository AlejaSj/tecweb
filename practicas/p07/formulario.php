<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Parque Vehicular</title>
    <style>
        /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
}

h1 {
    background-color: #4CAF50;
    color: white;
    text-align: center;
    padding: 20px;
}

form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px 0;
}

label {
    font-weight: bold;
    margin-right: 10px;
}

input[type="text"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    margin-right: 10px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

pre {
    background-color: #e8e8e8;
    padding: 10px;
    border-radius: 4px;
    max-width: 800px;
    margin: 20px auto;
    white-space: pre-wrap;
    word-wrap: break-word;
}

p {
    text-align: center;
    color: red;
}

h2 {
    text-align: center;
    color: #333;
}

    </style>
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
