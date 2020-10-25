<?php

  $permisos=session_get("permisos");

  if ($permisos[][]==1) {
      $registrarChofer=true;
  }else{
      $registrarChofer=false;
  }

?>

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>L</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Acercar</b>Logistica</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <span class="hidden-xs">
                
                <?php

                if ((session_get("usuario"))!=null) {
                  echo session_get("usuario");
                } else {
                  echo "string";
                }
                
                
 

                ?>

              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

              
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="pages/Login.php" class="btn btn-default btn-flat">Cerrar sesion</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li class="active treeview">
          
          <li class="active"><a href="index.php?menu=tablero"><i class="fa fa-home"></i> Inicio</a></li>

        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-thumbs-up text-blue"></i>
            <span>Servicios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?menu=ListadoServicios"><i class="fa fa-list"></i> Listado</a></li>
            <li><a href="index.php?menu=NuevoServicio"><i class="fa fa-plus"></i> Nuevo</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd text-green"></i>
            <span>Precios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?menu=ListaPrecios"><i class="fa fa-list"></i> Lista de precio</a></li>
            <li><a href="index.php?menu=Precio"><i class="fa fa-dollar"></i> Precios</a></li>
            <li><a href="index.php?menu=AumentoPrecio"><i class="fa fa-line-chart"></i> Aumento</a></li>
            <li><a href="index.php?menu=Backup"><i class="fa fa-rotate-left"></i> Backup</a></li>
            <li><a href="index.php?menu=Adicional"><i class="fa  fa-plus-square-o"></i> Adicionales</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-car text-maroon"></i>
            <span>Vehiculo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?menu=ListadoVehiculos"><i class="fa fa-list"></i> Listado</a></li>
            <li><a href="index.php?menu=NuevoVehiculo"><i class="fa fa-plus"></i> Nuevo</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-male text-teal"></i>
            <span>Chofer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="index.php?menu=ListadoChoferes"><i class="fa fa-list"></i> Listado</a></li>

            <?php

                if ($registrarChofer==true) {
                  echo "<li><a href='index.php?menu=NuevoChofer'><i class='fa fa-plus'></i> Nuevo</a></li>";
                }
                
            ?>

            <li><a href="index.php?menu=Vencimientos"><i class="fa fa-file"></i> Vencimientos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users text-red"></i>
            <span>Cliente</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?menu=ListadoClientes"><i class="fa fa-list"></i> Listado clientes</a></li>
            <li><a href="index.php?menu=NuevoCliente"><i class="fa fa-user-plus"></i> Nuevo</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-line-chart text-white"></i>
            <span>Ganancias</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?menu=Ganancias"><i class="fa fa-file"></i> Calcular ganancias</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money text-lime"></i>
            <span>Comisiones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?menu=Comisiones"><i class="fa fa-file"></i> Calcular comisiones</a></li>
            <li><a href="index.php?menu=ReporteComisiones"><i class="fa fa-file"></i> Reporte de comisiones</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-suitcase text-purple"></i>
            <span>Solicitudes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?menu=AsignarSolicitud"><i class="fa fa-hand-o-right"></i> Asignar solicitudes</a></li>
            <li><a href="index.php?menu=Mapa"><i class="fa fa-map"></i> Mapa</a></li>
            <li><a href="index.php?menu=ListadoSolicitudes"><i class="fa fa-list"></i> Listado de solicitudes</a></li>
            <li><a href="index.php?menu=NuevaSolicitud"><i class="fa fa-plus"></i> Nuevo</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user text-yellow"></i>
            <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?menu=ListadoUsuarios"><i class="fa fa-list"></i> Lista de usuarios</a></li>
            <li><a href="index.php?menu=NuevoUsuario"><i class="fa fa-user-plus"></i> Nuevo</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user text-blue"></i>
            <span>Perfil</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?menu=Perfil"><i class="fa fa-list"></i>Perfiles</a></li>
          </ul>
        </li>
   
   <!--------------------------->
        
      </ul>
    </section>
    <!-- /.sidebar ------------------------------------------->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 
  <!-- /.content-wrapper -->
  









  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="">
       
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>