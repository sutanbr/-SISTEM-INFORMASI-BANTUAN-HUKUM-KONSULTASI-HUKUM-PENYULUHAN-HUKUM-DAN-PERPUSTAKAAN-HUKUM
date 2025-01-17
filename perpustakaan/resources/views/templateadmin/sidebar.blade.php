<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark" style="background-color: #4e4e4e;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <lord-icon src="https://cdn.lordicon.com/axacjdbs.json" trigger="hover" stroke="bold" colors="primary:#121331,secondary:#66ee78" style="width:30px;height:30px"></lord-icon>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit"><i class="fas fa-search"></i></button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
  
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #333333;">
          <a href="index3.html" class="brand-link">
              <i class="fas fa-user-circle" style="font-size: 40px; color: white;"></i>
              <span class="brand-text font-weight-light" style="font-family: 'Roboto', sans-serif; font-size: 15px; font-weight: 500;">PERPUSTAKAAN HUKUM</span>
          </a>
          
          
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                      <i class="fas fa-user-circle" style="font-size: 50px; color: white;"></i>
                  </div>                
                    <div class="info">
                        <a href="#" class="d-block" style="color:white">ADMIN</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <li class="nav-item">
                          <a href="{{asset('admin/dashboard')}}" class="nav-link text-white">
                              <i class="fas fa-tachometer-alt mr-2"></i>
                              <p>Dashboard</p>
                          </a>
                      </li>
                      
                      <li class="nav-item">
                          <a href="{{asset('admin/koleksis')}}" class="nav-link text-white">
                              <i class="fas fa-book mr-2"></i>
                              <p>Koleksi Buku</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{asset('admin/peminjamanadmin')}}" class="nav-link text-white">
                              <i class="fas fa-exchange-alt mr-2"></i>
                              <p>Peminjaman</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{asset('admin/pengunjung')}}" class="nav-link text-white">
                              <i class="fas fa-users mr-2"></i>
                              <p>Daftar Pengunjung</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{asset('home')}}" class="nav-link text-white">
                              <i class="fas fa-home mr-2"></i>
                              <p>Home</p>
                          </a>
                      </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
  
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            {{-- <h1 class="m-0"><?= $title ?></h1> --}}
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Menu</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>