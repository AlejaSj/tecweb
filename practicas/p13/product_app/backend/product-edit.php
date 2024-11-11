<?php
    use TECWEB\MYAPI\Update\Update;
    require_once __DIR__.'/../vendor/autoload.php';

    $productos = new Update('marketzone1');
    $productos->edit( json_decode( json_encode($_POST) ) );
    echo $productos->getData();
?>