<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <title>Ejercicios PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1, h2 {
            color: #333;
        }
        h1 {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        h2 {
            color: #555;
            margin-top: 20px;
        }
        b {
            color: #000;
        }
        .exercise {
            background-color: #fff;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .code-output {
            background-color: #eee;
            padding: 10px;
            border-left: 3px solid #333;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h1>Ejercicios PHP</h1>

<div class="exercise">
    <h2>Ejercicio 1</h2>
    <div class="code-output">
        <?php
        echo "<b>\$_7var: Valida - </b>Las variables pueden empezar con guion bajo.<br>";
        echo "<b>\$_myvar: Valida - </b>Las variables pueden empezar con guion bajo.<br>";
        echo "<b>myvar: invalida - </b>Las variables en PHP deben comenzar con un signo de pesos.<br>";
        echo "<b>\$myvar: Valida - </b>Las variables en PHP deben comenzar con un signo de pesos.<br>";
        echo "<b>\$var7: Valida - </b>Las variables pueden comenzar con signo de pesos y está seguida de letras y un número.<br>";
        echo "<b>\$_element1: Valida - </b>Las variables pueden empezar con guion bajo.<br>";
        echo "<b>\$house*5: Invalida - </b>Aunque comienza correctamente con $, contiene un carácter especial (*), que no está permitido en los nombres de variables.<br>";
        ?>
    </div>
</div>

<div class="exercise">
    <h2>Ejercicio 2</h2>
    <div class="code-output">
        <?php
        $a = "ManejadorSQL";
        echo "$a<br>";
        $b = 'MySQL';
        echo "$b<br>";
        $c = &$a;
        echo "$c<br>";

        $a = "PHP server";
        echo "$a<br>";
        $b = &$a;
        echo "$b<br>";
        echo "Lo que ocurrió es que reasignamos el valor en la variable a, y como b está apuntando a la dirección de a, entonces esto cambió también el contenido de b ya que ahora apunta a PHP server<br>";
        unset($a, $b, $c);
        ?>
    </div>
</div>

<div class="exercise">
    <h2>Ejercicio 3</h2>
    <div class="code-output">
        <?php
        $a = "PHP5";
        var_dump($a);
        echo "<br>";

        $z[] = &$a;
        var_dump($z); 
        echo "<br>";

        $b = "5a version de PHP";
        var_dump($b);
        echo "<br>";

        $c = $b * 10;
        var_dump($c);
        echo "<br>";

        $a .= $b;
        var_dump($a); 
        echo "<br>";

        $b *= $c;
        var_dump($b); 
        echo "<br>";

        $z[0] = "MySQL";
        var_dump($z); 
        echo "<br>";
        ?>
    </div>
</div>

<div class="exercise">
    <h2>Ejercicio 4</h2>
    <div class="code-output">
        <?php
        foreach ($GLOBALS as $key => $value) {
            echo "\$$key = ";
            var_dump($value);
            echo "<br>";
        }
        unset($a, $b, $c, $z);
        ?>
    </div>
</div>

<div class="exercise">
    <h2>Ejercicio 5</h2>
    <div class="code-output">
        <?php
        $a = "7 personas";
        $b = (integer) $a;
        $a = "9E3";
        $c = (double) $a;
        echo "$a<br>";
        echo "$b<br>";
        echo "$c<br>";
        unset($a, $b, $c);
        ?>
    </div>
</div>

<div class="exercise">
    <h2>Ejercicio 6</h2>
    <div class="code-output">
        <?php
        $a = "0";
        $b = "TRUE";
        $c = FALSE;
        $d = ($a OR $b);
        $e = ($a AND $c);
        $f = ($a XOR $b);

        echo "Valor de \$a: " . var_export($a, true) . "<br>";
        echo "Valor de \$b: " . var_export($b, true) . "<br>";
        echo "Valor de \$c: " . var_export($c, true) . "<br>";
        echo "Valor de \$d: " . var_export($d, true) . "<br>";
        echo "Valor de \$e: " . var_export($e, true) . "<br>";
        echo "Valor de \$f: " . var_export($f, true) . "<br>";
        ?>
    </div>
</div>

<div class="exercise">
    <h2>Ejercicio 7</h2>
    <div class="code-output">
        <?php
        echo "Versión de PHP: " . phpversion() . "<br>";
        if (isset($_SERVER['SERVER_SOFTWARE'])) {
            $apacheVersion = $_SERVER['SERVER_SOFTWARE'];
            preg_match('/Apache\/([^\s]+)/', $apacheVersion, $matches);
            $apacheVersion = $matches[1] ?? 'No disponible';
            echo "Versión de Apache: " . $apacheVersion . "<br>";
        } else {
            echo "Versión de Apache: No disponible<br>";
        }

        if (isset($_SERVER['SERVER_OS'])) {
            echo "Sistema operativo del servidor: " . $_SERVER['SERVER_OS'] . "<br>";
        } else {
            echo "Sistema operativo del servidor: No disponible<br>";
        }

        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            echo "Idioma del navegador: " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>";
        } else {
            echo "Idioma del navegador: No disponible<br>";
        }
        ?>
    </div>
</div>

</body>
</html>
