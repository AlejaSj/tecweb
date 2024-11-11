<?php
namespace Backend;

require_once '../myapi/Products.php';

$product = new Products('localhost', 'root', 'PkU3qJ35jr(4/r-V', 'marketzone');
$product->search($_GET['search']);
echo $product->getData();
?>
