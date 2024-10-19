<?php
    $conexion = @mysqli_connect(
        'localhost',
        'root',
        'PkU3qJ35jr(4/r-V',
        'marketzone1'
    );

    /**
     * NOTA: si la conexión falló $conexion contendrá false
     **/
    if(!$conexion) {
        die('¡Base de datos NO conectada!');
    }
?>