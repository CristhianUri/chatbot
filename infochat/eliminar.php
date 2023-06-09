<?php 
include '../Db/conexion.php';

$id=$_REQUEST['id'];
$validar = $bd ->query("SELECT ID_noresponse FROM chatbot WHERE ID_noresponse = $id");

$resultado=$validar->fetchAll(PDO::FETCH_ASSOC);

if ($resultado == true) {
    # code...
    header("location: ../view/admin/dash.php?fallo=true");
}

$sentencia = $bd ->query("DELETE FROM noresponse WHERE ID_noresponse= $id;");
$resultado = $sentencia->execute();
if ($resultado == true) {
    # code...
    header("location: ../view/admin/noresponse.php");
} else{
    header("location: ../view/admin/noresponse.php?message=fallo");
}
echo $resultado;

?>