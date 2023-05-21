<?php
include_once 'conexion.php';
$conectar = new ConexionPDO($host,$db,$user,$passwword);
$conectar->conectar();
echo "<br> <br>";
$conectar->desconectar();
?>