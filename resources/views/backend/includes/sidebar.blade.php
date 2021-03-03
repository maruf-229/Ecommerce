<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/maruf.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Maruf Hossain</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Category Controll
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.backend.category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.backend.category.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Categories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Products Controll
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.product.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                                <a href="{{ route('admin.product.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Product</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Banners Controll
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.backend.banner') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Banner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.backend.banner.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Banner</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.backend.logo') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Logo
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.backend.contact_info') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                             Contact Info
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('frontend.home') }}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            View Website
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
