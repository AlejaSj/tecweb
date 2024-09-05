<?php
if (isset($_POST['valor1'])) {
    echo "POST valor1: " . ($_POST['valor1']);
} elseif (isset($_GET['valor1'])) {
    echo "POST valor1: " . ($_GET['valor1']);
}else {
    echo "No se ha recibido valor1.";
}
?>