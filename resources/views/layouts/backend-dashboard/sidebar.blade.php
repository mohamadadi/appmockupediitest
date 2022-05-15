 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/AdminLTE/dist/img/logo_transparant.png')}}" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Portal Pelamar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-4 pb-4 mb-4 d-flex">
        <div class="image">
          <img src="{{asset('assets/admin/dist/img/user1-128x128.jpg')}}" class="img-circle elevation-2"
              alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->email}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          <li class="nav-item">
            <a id="dashboard"  href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard              
              </p>
            </a>           
          </li>
          
        
         @if(auth()->user()->role == 'Admin')
         <li class="nav-item">
             <a id="posts" href="/biodata" class="nav-link">
                 <i class="nav-icon fas fa-th"></i>
                 <p>
                     Pelamar
                 </p>
             </a>
         </li>
          @else
         <li class="nav-item">
             <a id="posts" href="/biodata" class="nav-link">
                 <i class="nav-icon fas fa-th"></i>
                 <p>
                     Biodata
                 </p>
             </a>
         </li>
         @endif
            
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  