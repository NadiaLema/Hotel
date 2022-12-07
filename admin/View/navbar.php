<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="licencia/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="./licencia/css/index.css">
    <!-- icons8 -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!--datables estilo bootstrap 4 CSS-->  
    
    <link rel="stylesheet" type="text/css" href="licencia/datatables//DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">
                <h4 class="text-light">Hotel Mendoza</h4>
            </div>
            <div class="col-4 text-right barra">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="#"><i class="fas fa-sign-out-alt m-1"></i>Salir
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <ul class="app-menu ">
                        <li><a class="app-menu__item " href="./index.php"><i class="las la-tachometer-alt" style="font-size:34px;"></i><span class="app-menu__label ml-1">Vista General</span></a></li>
                        
                        <li><a class="app-menu__item " href="./habitacion.php"><i class="las la-bed" style="font-size:34px" ></i><span class="app-menu__label ml-1">Habitaciones</span></a></li>
                
                        <li><a class="app-menu__item " href="./reserva.php"><i class="las la-paste" style="font-size:34px;" ></i><span class="app-menu__label ml-1">Reservas</span></a></li>
                        
                        <li><a class="app-menu__item active " href="./cliente.php"><i class="lar la-address-book"style="font-size:34px;" ></i><span class="app-menu__label ml-1">Clientes</span></a></li>
                      
                    </ul>
                </nav>
            </div>
            <main class="main col">