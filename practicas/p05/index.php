
<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <title>Ejercicios PHP</title>
</head>
<body>

<h1>Ejercicios PHP</h1>

<?php


    echo "<h2> Ejercicio 1</h2>";
    echo "<b>".'$_myvar: Valida - '."</b>"."Las variables pu    eden empezar con guion bajo.<br>";
    echo "\n<b>".'$_7var: Valida - '."</b>"."Las variables pueden empezar con guion bajo.<br>";
    echo "<b>".'myvar: invalida - '."</b>"."Las variables en PHP deben comenzar con un signo de pesos.<br>";
    echo "<b>".'$myvar: Valida - '."</b>"."Las variables en PHP deben comenzar con un signo de pesos.<br>";
    echo "<b>".'$var7: Valida - '."</b>"."Las variable pueden comenzar con signo de pesos y está seguida de letras y un número.<br>";
    echo "<b>".'$_element1: Valida - '."</b>"."Las variables pueden empezar con guion bajo.<br>";
    echo "<b>".'$house*5: Invalida - '."</b>".'Aunque comienza correctamente con $, contiene un carácter especial (*), que no está permitido en los nombres de variables.'."<br>";
   
   
?>

</body>
</html>
