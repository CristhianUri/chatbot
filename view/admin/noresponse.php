<?php 
include "../../DB/conexion.php";
$sql = $bd->query("SELECT * FROM noresponse");
$res=$sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary shadow-lg  ">
                <div
                    class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100   ">
                    <a href="dash.php"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <strong><span class="fs-5 d-none d-sm-inline"><i class="bi bi-robot"></i>
                                Chatbot</span></strong>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                            <i class="bi bi-person-fill-gear"></i> <strong><span
                                    class="ms-1 d-none d-sm-inline">Dashboard</span></strong> </a>
                        <ul class="collapse show nav flex-column ms-1 bg-light rounded" id="submenu1"
                            data-bs-parent="#menu">
                            <li class="w-100 ">
                                <a href="noresponse.php" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline text-dark "> Tabla de
                                        contenido</span>
                                </a>
                            </li>
                            <li>
                                <a href="/" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark">Preguntas
                                        no
                                        registradas</span>
                                </a>
                            </li>
                        </ul>



                    </ul>
                    <hr>

                </div>
            </div>
            <div class="col py-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light shadow mb-3">
                    <div class="container-fluid justify-content-center">
                        <strong>
                            <h6>Administrador Chatbot</h6>
                        </strong>
                    </div>
                    <div class="container-fluid justify-content-end">
                        <div class="dropdown  ">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                                            class="rounded-circle">
                                        <span class="d-none d-sm-inline mx-4 text-success">User</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow "
                                        aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#"></S></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="container-fluid col-md-12 ">
                   
                    <table id="example" class="shadow-lg  col-md-8 col-sm-4 display ml-5 table table-bordered border-dark" style="width:70%">
                        <thead class="">

                            <tr>
                                <th>ID</th>
                                <th>Respuesta no registrada</th>
                                <th>Pregunta no registrada</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>


                            </tr>
                        </thead>
                        <tbody id="mitabla">


                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Respuesta no registrada</th>
                                <th>Pregunta no registrada</th>
                                <th>Accion</th>
                                <th>Eliminar</th>

                            </tr>
                        </tfoot>
                    </table>

                </div>
                
            </div>
        </div>
    </div>





    <script>
    function tiemporeal() {
        var tabla = $.ajax({
            url: '../../infochat/noresponse.php',
            dataType: 'text',
            async: false,
        }).responseText;
        document.getElementById('mitabla').innerHTML = tabla;
    }
    setInterval(tiemporeal, 1000);
    </script>
   

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>