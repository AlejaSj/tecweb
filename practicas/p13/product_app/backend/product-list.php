<?php
    use TECWEB\MYAPI\Read\Read;
    require_once __DIR__.'/../vendor/autoload.php';

    $productos = new Read('marketzone1');
    $productos->list();
    echo $productos->getData();
?>