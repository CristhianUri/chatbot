<?php
include '../Db/conexion.php';
//tu consulta lo adaptas dependiendo del valor de $filtro

$sql = $bd->query("SELECT * FROM noresponse");
$resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
$i =1;
                        foreach ($resultado as $row){
                            echo '<tr>
                            <td>'.$i++.'</td>
                                  <td>'.$row['response2'].'</td>
                                  <td>'.$row['queries2'].'</td>
                                  <td><a href="Actualizar.php?id='.$row['ID_noresponse'].'" class="btn btn-warning">Editar</a></td>
                                  <td><a href="../../infochat/eliminar.php?id='.$row['ID_noresponse'].'" class="btn btn-danger">Eliminar</a></td>
                     
                                 </tr>';
                       }
?>