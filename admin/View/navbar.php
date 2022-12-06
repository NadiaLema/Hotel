<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    
    <title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="licencia/css/main.css">
    <!-- icons8 -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
     
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="licencia/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    
    <link rel="stylesheet" type="text/css" href="licencia/datatables//DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    
  
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">Hotel Mendoza</a>
      <!-- Sidebar toggle button--><a class="las la-bars" style="font-size:34px;" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        
        <!-- Menú de usuario-->
        <li class="dropdown"><a class="app-nav__item " href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="lar la-user-circle" style="font-size:20px;"></i><span class="ml-1 mt-1 text-right ">Pepito</span></a>
          
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-login.html"><i class="las la-power-off" style="font-size:20px;"></i> Salir</a></li> 
          </ul>
        </li>
      </ul>
    </header>
    <!-- Menú de la barra lateral-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      
      <ul class="app-menu">
        <li><a class="app-menu__item " href="./index.php"><i class="las la-tachometer-alt" style="font-size:34px;"></i><span class="app-menu__label ml-1">Vista General</span></a></li>
        
        <li><a class="app-menu__item " href="./habitacion.php"><i class="las la-bed" style="font-size:34px" ></i><span class="app-menu__label ml-1">Habitaciones</span></a></li>

        <li><a class="app-menu__item " href="./reserva.php"><i class="las la-paste" style="font-size:34px;" ></i><span class="app-menu__label ml-1">Reservas</span></a></li>
        
        <li><a class="app-menu__item active " href="./cliente.php"><i class="lar la-address-book"style="font-size:34px;" ></i><span class="app-menu__label ml-1">Clientes</span></a></li>
      
      </ul>
    </aside>