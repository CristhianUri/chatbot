<?php
include '../Db/conexion.php';
//tu consulta lo adaptas dependiendo del valor de $filtro

$sql = $bd->query("SELECT * FROM chatbot");
$resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
$i =1;
                        foreach ($resultado as $row){
                         
                            echo '<form id="norespose">
                            <tr>
                            <td>'.$i++.'</td>
                                  <td>'.$row['responses'].'</td>
                                  <td>'.$row['queries'].'</td>           
                                 </tr>
                            </form>';
                       }
?>