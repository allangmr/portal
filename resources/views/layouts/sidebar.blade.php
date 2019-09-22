    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">HONOMEDIC </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li  @click="menu=0" class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        INFORMACIÓN GENERAL
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesx" aria-expanded="true" aria-controls="collapseUtilitiesx">
          <i class="fas fa-procedures"></i>
          <span>Pacientes</span>
        </a>
        <div id="collapseUtilitiesx" class="collapse" aria-labelledby="headingUtilitiesx" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Acción</h6>
            <a @click="menu=1" class="collapse-item" href="#">Consulta de Pacientes</a>
            <a @click="menu=2" class="collapse-item" href="#">Historial</a>
            <a @click="menu=3" class="collapse-item" href="#">Reportes</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesy" aria-expanded="true" aria-controls="collapseUtilitiesy">
          <i class="fas fa-user-md"></i>
          <span>Doctores</span>
        </a>
        <div id="collapseUtilitiesy" class="collapse" aria-labelledby="headingUtilitiesy" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Acción</h6>
            <a class="collapse-item" href="utilities-color.html">Ver</a>
            <a class="collapse-item" href="utilities-color.html">Crear</a>
            <a class="collapse-item" href="utilities-border.html">Editar</a>
            <a class="collapse-item" href="utilities-animation.html">Eliminar</a>
            <a class="collapse-item" href="utilities-other.html">Historial</a>
            <a class="collapse-item" href="cards.html">Reportes</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoy" aria-expanded="true" aria-controls="collapseTwoy">
          <i class="fas fa-fw fa-file-medical"></i>
          <span>Procedimientos</span>
        </a>
        <div id="collapseTwoy" class="collapse" aria-labelledby="headingTwoy" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
            <a class="collapse-item" href="utilities-color.html">Ver</a>
            <a class="collapse-item" href="buttons.html">Crear procedimientos</a>
            <a class="collapse-item" href="buttons.html">Editar procedimientos</a>
            <a class="collapse-item" href="buttons.html">Eliminar procedimientos</a>
            <a class="collapse-item" href="buttons.html">Cambiar estado</a>
            <a class="collapse-item" href="cards.html">Reportes</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-hourglass-end"></i>
          <span>Estado del Paciente</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Detalles:</h6>
            <a class="collapse-item" href="buttons.html">Pendiente de Ingresar</a>
            <a class="collapse-item" href="cards.html">Pendiente de Cobrar</a>
            <a class="collapse-item" href="cards.html">Cobrado</a>
            <a class="collapse-item" href="cards.html">Archivados</a>
            <a class="collapse-item" href="cards.html">Reportes</a>
          </div>
        </div>
      </li>
           <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwox" aria-expanded="true" aria-controls="collapseTwox">
          <i class="fas fa-fw fa-clinic-medical"></i>
          <span>Aseguradoras</span>
        </a>
        <div id="collapseTwox" class="collapse" aria-labelledby="headingTwox" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opciones:</h6>
            <a class="collapse-item" href="buttons.html">Crear Aseguradoras</a>
            <a class="collapse-item" href="buttons.html">Editar Aseguradoras</a>
            <a class="collapse-item" href="buttons.html">Eliminar Aseguradoras</a>
            <a class="collapse-item" href="cards.html">Reportes de Aseguradoras</a>
          </div>
        </div>
      </li>

           <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-inbox"></i>
          <span>Reportes</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Reportes Personalizados:</h6>
            <a class="collapse-item" href="utilities-color.html">Doctores</a>
            <a class="collapse-item" href="utilities-border.html">Pacientes</a>
            <a class="collapse-item" href="utilities-animation.html">Cobros</a>
            <a class="collapse-item" href="utilities-other.html">Procedimientos</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Configuraciones
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-user-friends"></i>
          <span>Usuarios</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">SISTEMA:</h6>
            <a class="collapse-item" href="login.html">Crear Usuario</a>
            <a class="collapse-item" href="register.html">Editar Usuario</a>
            <a class="collapse-item" href="forgot-password.html">Eliminar Usuario</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">MI USUARIO:</h6>
            <a class="collapse-item" href="404.html">Editar mi Información</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesz" aria-expanded="true" aria-controls="collapseUtilitiesz">
          <i class="fas fa-fw fa-tasks"></i>
          <span>Tareas</span>
        </a>
        <div id="collapseUtilitiesz" class="collapse" aria-labelledby="headingUtilitiesz" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Información de las tareas:</h6>
            <a class="collapse-item" href="utilities-color.html">Ver mis tareas</a>
            <a class="collapse-item" href="utilities-border.html">Asignar tarea</a>
            <a class="collapse-item" href="utilities-animation.html">Tareas Pendientes</a>
            <a class="collapse-item" href="utilities-other.html">Tareas Completadas</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-chart-line"></i>
          <span>Ingresos Proyectados</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
