<?php

// Clase abstracta DataBase
abstract class DataBase {
    protected $conexion;

    // Constructor para inicializar la conexión a la BD
    public function __construct($host, $user, $password, $dbName) {
        $this->conexion = new mysqli($host, $user, $password, $dbName);

        // Comprobar conexión
        if ($this->conexion->connect_error) {
            die("Error de conexión a la base de datos: " . $this->conexion->connect_error);
        }
    }

    // Método abstracto para asegurarnos de que las clases que hereden implementen sus propios métodos de búsqueda
    abstract protected function query($sql);
}

// Clase Products que hereda de DataBase
class Products extends DataBase {
    private $response = [];

    // Constructor de la clase Products
    public function __construct($host, $user, $password, $dbName = "defaultDB") {
        parent::__construct($host, $user, $password, $dbName);
    }

    // Método para buscar un producto por su nombre
    public function singleByName($name) {
        $sql = "SELECT * FROM products WHERE name = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();

        $this->response = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
    }

    // Método para convertir los datos en JSON
    public function getData() {
        return json_encode($this->response);
    }

    // Método para ejecutar una query genérica
    protected function query($sql) {
        $result = $this->conexion->query($sql);
        if ($result) {
            $this->response = $result->fetch_all(MYSQLI_ASSOC);
        } else {
            $this->response = [];
        }
    }
}

// Ejemplo de uso
$products = new Products("localhost", "user", "password", "mi_base_datos");
$products->singleByName("nombre_producto");
echo $products->getData();
?>
