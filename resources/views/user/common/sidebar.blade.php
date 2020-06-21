<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin-dashboard-page') }}" class="brand-link text-center" ><img width="150" src="{{ URL::asset('public/theme/images/logo.png') }}"></a>
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          <a class="d-block">Welcome! {{ get_loggedin_user_details()->firstname.' '.get_loggedin_user_details()->lastname }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
           <li class="nav-item">
            <a href="{{ route('user-dashboard-page') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('user-projects-page') }}" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>Projects</p>
            </a>
           
          </li>
          
          <li class="nav-item">
            <a href="{{ route('user-documents-page') }}" class="nav-link ">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>Documents</p>
            </a>
           
          </li>
          
          
          <li class="nav-item">
            <a href="{{ route('user-cases-page') }}" class="nav-link ">
              <i class="nav-icon fas fa-suitcase"></i>
              <p>Case Studies</p>
            </a>
           
          </li>
          
          <li class="nav-item">
            <a href="{{ route('user-taxform-page') }}" class="nav-link ">
              <i class="nav-icon fas fa-calculator"></i>
              <p>Tax Forms</p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="{{ route('resources-page') }}" target="_blank" class="nav-link ">
              <i class="nav-icon fas fa-key"></i>
              <p>Resources</p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="{{ route('help-page') }}" target="_blank" class="nav-link ">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>Faq</p>
            </a>
           
          </li>
        
          <li class="nav-item">
            <a href="{{ route('user-logout') }}" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>Logout</p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>