<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('assets/')}}/index3.html" class="brand-link">
      <img src="{{asset('assets/')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PT. Sefong Industri</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
		

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('br')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master barang
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('kontrak')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kontrak Pembelian
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('dp')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Pembelian
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('pj')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Penjualan
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('dt')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Transaksi
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('lt')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan Transaksi
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
          </li>

        </ul>
      </nav>
		  
	  

	  
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>