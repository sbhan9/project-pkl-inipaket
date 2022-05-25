<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image mt-1">
                <img src="/img/logo/logo.png" alt="User Image" style="width: 40px;">
            </div>
            <div class="info">
                <a href="#" class="d-block"><img src="/img/logo/ipaket.png" alt=""
                        style="width: 80px; margin-left: 10px;"></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <?php if(in_groups('admin')) : ?>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Orderan Masuk
                        </p>
                    </a>
                </li>
                <!-- Informasi -->
                <li class="nav-item">
                    <a href="/dashboard/informasi" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>
                            Informasi
                        </p>
                    </a>
                </li>
                <?php endif ?>
                <?php if(in_groups('user')) : ?>
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>
                            Informasi Rinci
                        </p>
                    </a>
                </li>
                <?php endif ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>