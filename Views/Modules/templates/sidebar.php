  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
  
    <a href="inicio" class="brand-link">
      <img src="Assets/img/default/KUSU_LOGO_BLANCO.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light japan">KUSUNOKI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php if ($_SESSION["foto"]=="") {
            echo '<img src="Assets/img/default/avatar.png" class="img-circle elevation-2" alt="User Image">';
          } 

          else{
            echo '<img src='.$_SESSION["foto"].' class="img-circle elevation-2" alt="User Image">';
          }
          
          ?>
          
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["nombre"]; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item active">
            <a href="inicio" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Inicio</p>
            </a>
          </li>
<!-- 
          <li class="nav-item">
            <a href="caja" class="nav-link">
              <i class="nav-icon fa fa-money"></i>
              <p>
                Caja
              </p>
            </a>
          </li>
 -->
          <li class="nav-item">
            <a href="ventas" class="nav-link">
              <i class="nav-icon fa fa-money"></i>
              <p>
                Ventas
              </p>
            </a>
          </li>

          <li class="nav-item active">
            <a href="reportes" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>Reportes</p>
            </a>
          </li>
          
    </div>
</aside>