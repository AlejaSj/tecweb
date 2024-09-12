<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body> 
<?php
    include ("src/funciones.php");
    ?>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <form action="#" method="get">
        Ingrese el numero: <input type="number" name="numero"><br>
        <input type="submit">
    </form>
    
    <?php
    numero();
    ?>
    <h2>Ejercicio 2</h2>
    <p> Presiona enviar para genera el ejercicio 2 </p>
    <form action="#" method="post">
        <input name="evalua" type="submit">
    </form>
    <br>
    <?php
    repite();
    ?>
    <br>


    <h2>Ejercicio 3</h2>
    <p> Ingresa un valor y te devolvera un multiplo de el: </p>
    <form action="#" method="get">
        <p>Ingrese el numero:</p><input type="number"name="valor">
        <input type="submit">
    </form>
    <br>
    <?php
    multiplo();
    ?>
    <br>

    <h2>Ejercicio 4</h2>
    <p> Presiona enviar para genera el ejercicio 4 </p>
    <form action="#" method="get">
        <input name="abecedario" type="submit">
    </form>
    <?php
    abecedario();
    ?>
</body>
</html>