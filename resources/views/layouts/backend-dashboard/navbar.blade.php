 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
            <i class="fas fa-th-large"> Profile</i></a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
              <span class="dropdown-item dropdown-header">{{auth()->user()->email}}</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <x-dropdown-link :href="route('logout')"
                              onclick="event.preventDefault();this.closest('form').submit();">
                          </x-dropdown-link>
                          <button class="btn btn-large md-12">Logout</button>
                      </form>
              </a>

          </div>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->
  