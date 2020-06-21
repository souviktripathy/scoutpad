<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin-dashboard-page') }}" class="brand-link text-center" ><img width="150" src="{{ URL::asset('public/theme/images/logo.png') }}"></a>
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::asset('public/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin-dashboard-page') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Projects
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin-projects-page') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin-add-project') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Project</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Users
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin-users-page') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin-add-user') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
              
            </ul>
          </li>  


          <li class="nav-item has-treeview">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Tags
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin-tags-page') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Tags</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin-add-tag') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Tag</p>
                </a>
              </li>
              
            </ul>
          </li>  


          <li class="nav-item has-treeview">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Documents
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin-signed-documents') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Signed Documents</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin-unsigned-documents') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unsigned Documents</p>
                </a>
              </li>
              
            </ul>
          </li>  

          
          <li class="nav-item has-treeview">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-quote-left"></i>
              <p>
                Testimonials
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin-testimonials-page') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Testimonials</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin-add-testimonial') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Testimonial</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>
                Faqs
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin-faqs-page') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Faqs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin-add-faq') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Faq</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          
          
          <li class="nav-item">
            <a href="{{ route('admin-update-settings') }}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>Settings</p>
            </a>
          </li>
          
          
          
          
          
          
          <li class="nav-item">
            <a href="{{ route('admin-logout') }}" class="nav-link">
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