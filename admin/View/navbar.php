<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    
    <title>Client - Vali Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="licencia/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="licencia/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    
    <link rel="stylesheet" type="text/css" href="licencia/datatables//DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    
  
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">Hotel Mendoza</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        
        <!-- Menú de usuario-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i> Juan Pérez</a>
          
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Salir</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Menú de la barra lateral-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="./dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Administrador</span></a></li>
        
        <li><a class="app-menu__item active" href="./charts.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Cliente</span></a></li>
        
        <li><a class="app-menu__item" href="./docs.php"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Habitaciones</span></a></li>
      </ul>
    </aside>