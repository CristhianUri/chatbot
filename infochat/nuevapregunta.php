<?php
include '../Db/conexion.php';

$id=$_POST['id'];
$response2=$_POST['response2'];
$queries2=$_POST['queries2'];

$validar = $bd ->query("SELECT ID_noresponse FROM chatbot WHERE ID_noresponse = $id");

$resultado=$validar->fetchAll(PDO::FETCH_ASSOC);
if ($resultado == true) {
    # code...
    echo "igual";
    $actualizar = $bd->prepare("UPDATE chatbot as c , noresponse as n 
    inner join noresponse 
    set c.response=n.response2, c.queries=n.queries2 , n.response2=? n.queries2=?;");
    $resultado = $actualizar->execute([$response2, $queries2]);
    echo $resultado;
} else{
    if (!$response2==""  ) {
        # code...
    $sentencia = $bd->prepare("UPDATE noresponse SET response2=? ,  queries2=? WHERE ID_noresponse=$id;");
    $resultado = $sentencia->execute([$response2, $queries2]);
    
    echo $resultado;
    
        # code...
        $insertar = $bd->prepare("INSERT INTO chatbot(responses,queries,ID_noresponse )
    select  n.response2 , n.queries2 ,n.ID_noresponse
    from noresponse as n
    WHERE ID_noresponse=$id;");
    $res = $insertar->execute();
    header("location:../view/admin/noresponse.php");
    
    }else{
       header("location:../view/admin/noresponse.php");
    }
}




?>