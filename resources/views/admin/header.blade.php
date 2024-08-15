<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Right navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>					
  </ul>
  <div class="navbar-nav pl-2">
     <ol class="breadcrumb p-0 m-0 bg-white">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol> 
  </div>
  
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
        <img src="{{ asset('admincss/img/avatar5.png') }}" class='img-circle elevation-2' width="40" height="40" alt="">
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
        <h4 class="h4 mb-0"><strong>Mohit Singh</strong></h4>
        <div class="mb-3">example@example.com</div>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-user-cog mr-2"></i> Settings								
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-lock mr-2"></i> Change Password
        </a>
        <div class="dropdown-divider"></div>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <input class="btn btn-secondary" type="submit" value="Logout">
        </form>
        {{-- <a href="#" class="dropdown-item text-danger">
          <i class="fas fa-sign-out-alt mr-2"></i> Logout							
        </a>	 --}}						
      </div>
    </li>
  </ul>
</nav>


{{-- <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          
            <!-- Log out               -->
            <div class="list-inline-item logout">
            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <input class="btn btn-secondary" type="submit" value="Logout">
                        </form>
          </div>
        </div>
      </nav>
    </header> --}}


  