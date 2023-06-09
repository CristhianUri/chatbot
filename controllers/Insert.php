<?php 
    include '../Db/conexion.php';
    $usuario=$_POST['usuario'];
    $departamento=$_POST['departamento'];
    $descripcion=$_POST['descripcion'];
    $observacion=$_POST['observacion']; 
    $estatus=$_POST['estatus']; 
    $servicio=$_POST['servicio'];
    $fecha = $_POST['fecha'];
   /*  $tpm_name = $_FILES['file']['tmp_name'];
    $ext_img = pathinfo($tpm_name, PATHINFO_EXTENSION);
    $data = file_get_contents($tpm_name);
    $img_base64 = base64_encode($data);
    $img = 'data:image/'.$ext_img.';base64,'.$img_base64; */
    $img =$_POST['imagen'];

    /* $query = $bd-> prepare("INSERT INTO servicio (Fecha,Usuario, Departamento, Descripcion, Observacion,Servicio,Estatus,Firma) VALUES (?,?,?,?,?,?,?,?);");
    $execute = $query -> execute([$fecha,$usuario, $departamento,$descripcion,$observacion,$servicio,$estatus,$img]);
    echo $execute; */
   if( !$fecha=="" && !$usuario=="" && !$departamento=="" && !$descripcion=="" && !$observacion=="" && !$servicio=="" && !$estatus==""){
    $query = $bd-> prepare("INSERT INTO servicio (Fecha,Usuario, Departamento, Descripcion, Observacion,Servicio,Estatus,Firma) VALUES (?,?,?,?,?,?,?,?);");
    $execute = $query -> execute([$fecha,$usuario, $departamento,$descripcion,$observacion,$servicio,$estatus,$img]);
    echo $execute;
    }
    

?>