<?php 
include '../Db/conexion.php';

$id=$_POST['aid'];

$sentencia = $bd ->prepare("DELETE FROM servicio WHERE ID_Servicio= $id;");
$resultado = $sentencia->execute();

echo $resultado;

?>