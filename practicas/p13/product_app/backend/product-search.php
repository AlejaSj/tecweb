<?php
    use TECWEB\MYAPI\Read\Read;
    require_once __DIR__.'/../vendor/autoload.php';

    $productos = new Read('marketzone1');
    $productos->search( $_GET['search'] );
    echo $productos->getData();
?>