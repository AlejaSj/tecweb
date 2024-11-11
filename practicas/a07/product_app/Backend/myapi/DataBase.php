<?php
// Clase abstracta DataBase

abstract class DataBase {
    protected $conexion;

    // Constructor para inicializar la conexión a la BD
    public function __construct($config) {
        $this->conexion = $this->connect($config);
    }

    // Método privado para conectar a la base de datos
    private function connect($config) {
        $conexion = new mysqli($config['host'], $config['user'], $config['password'], $config['dbName']);

        if ($conexion->connect_error) {
            die("Error de conexión a la base de datos: " . $conexion->connect_error);
        }
        return $conexion;
    }

    // Método abstracto para que las subclases implementen sus propias consultas
    abstract protected function executeQuery($sql, $params = []);
}
?>
