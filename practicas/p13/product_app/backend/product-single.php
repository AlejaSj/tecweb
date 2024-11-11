<?php
    use TECWEB\MYAPI\Read\Read;
    require_once __DIR__.'/../vendor/autoload.php';

    $productos = new Read('marketzone1');
    $productos->single( $_POST['id'] );
    echo $productos->getData();
?>