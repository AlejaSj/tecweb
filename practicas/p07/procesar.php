<?php
$edad = isset($_POST['edad']) ? (int)$_POST['edad'] : 0;
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';

$mensaje = '';

if ($sexo === 'femenino' && $edad >= 18 && $edad <= 35) {
    $mensaje = 'Bienvenida, usted está en el rango de edad permitido.';
} else {
    $mensaje = 'Error: No cumple con el rango de edad o sexo requerido.';
}

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8"/>
    <title>Resultado del Formulario</title>
</head>
<body>
    <h1>Resultado del Formulario</h1>
    <p><?php echo htmlspecialchars($mensaje, ENT_XML1 | ENT_HTML5, 'UTF-8'); ?></p>
</body>
</html>
