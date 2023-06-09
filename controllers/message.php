<?php
// conectando a la base de datos
include '../Db/conexion.php';

// obteniendo el mensaje del usuario a través de ajax
$getMesg =  $_POST['text'];

if (!$getMesg=="") {
  
    
        # code..
    //comprobando la consulta del usuario a la consulta de la base de datos
    $check_data = $bd->query("SELECT responses FROM chatbot WHERE queries LIKE '%$getMesg%'");
    $check_data -> execute();
    //recuperando la reproducción de la base de datos de acuerdo con la consulta del usuario
    $data = $check_data->fetchAll(PDO:: FETCH_ASSOC);

    // si la consulta del usuario coincide con la consulta de la base de datos, mostraremos la respuesta; de lo contrario, irá a otra declaración
    if ($check_data -> rowCount()) {
        foreach ($data as $datos) {
        # code...
        //almacenando la respuesta a una variable que enviaremos a ajax
            $replay = $datos['responses'];
            echo $replay;

           
            }  
    } else {
        echo "¡Lo siento, no tengo una respuesta a esa pregunta por el momento";

  
        $query = $bd-> prepare("INSERT INTO noresponse (queries2) VALUES (?);");
        $execute = $query -> execute([$getMesg]);
    }

} else {
    # code...
    echo "Porfavor ingresa una pregunta";
}

?>