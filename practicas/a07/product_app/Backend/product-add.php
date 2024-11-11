<?php
namespace Backend;

require_once '../myapi/Products.php';

$product = new Products('localhost', 'root', 'PkU3qJ35jr(4/r-V', 'marketzone');

$newProduct = (object) [
    'name' => $_POST['nombre'],
    'price' => $_POST['precio'],
    'units' => $_POST['unidades'],
    'model' => $_POST['modelo'],
    'brand' => $_POST['marca'],
    'details' => $_POST['detalles']
];

$product->add($newProduct);
echo $product->getData();
?>
