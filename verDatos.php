<?php
require_once('cuerpo.php');


$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$cuenta = $_GET['valor'];

$datos = new Datos($numero1, $numero2);
$resultado = $datos->elegirCuenta($cuenta);

echo "<h2> Su resultado es $resultado </h2>";