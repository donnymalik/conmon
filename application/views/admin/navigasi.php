<header id="navbar">
    <div id="navbar-container" class="boxed">
        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
            <a href="<?= base_url("admin") ?>" class="navbar-brand">
                <i class="fa fa-cube brand-icon"></i>
                <div class="brand-title">
                    <span class="brand-text">CONMON</span>
                </div>
            </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->
        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content clearfix">
            <ul class="nav navbar-top-links pull-left">
                <!--Messages Dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End message dropdown-->
                <!--Notification dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End notifications dropdown-->
            </ul>
            <ul class="nav navbar-top-links pull-right">
                <!--Profile toogle button-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li class="hidden-xs" id="toggleFullscreen">
                    <a class="fa fa-expand" data-toggle="fullscreen" href="#" role="button">
                    <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Profile toogle button-->
                <!--User dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <li id="dropdown-user" class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                        <span class="pull-right"> <img class="img-circle img-user media-object" src="<?= base_url("img/av2.png") ?>" alt="Profile Picture"> </span>
                        <div class="username hidden-xs">Admin</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right with-arrow">
                        <!-- User dropdown menu -->
                        <ul class="head-list">
                            <li>
                                <a href="#"> <i class="fa fa-sign-out fa-fw"></i> Logout </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user dropdown-->
            </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->
        <nav class="navbar navbar-default megamenu">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <!-- end navbar-header -->
            <div id="defaultmenu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <!-- standard drop down -->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Home <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="index.html">Dashboard V1 </a></li>
                            <li><a href="dashboard-v2.html">Dashboard V2 </a></li>
                        </ul>
                        <!-- end dropdown-menu -->
                    </li>
                    <!-- end standard drop down -->
                    <!-- standard drop down -->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Master <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-submenu">
                                <a href="#">Alat Berat</a>
                                <ul class="dropdown-menu">
                                    <!-- end dropdown-submenu -->
                                    <li><a href="<?= base_url('admin/data_alat_berat') ?>">Alat Berat</a></li>
                                    <li><a href="<?= base_url('admin/import_alat_berat') ?>">Import Alat Berat</a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>                                       
                        </ul>
                        <!-- end dropdown-menu -->
                    </li>
                    <!-- end standard drop down -->                                
                    <!-- standard drop down -->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Data <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <!--<li><a href="#">Second Level</a></li>-->
                            <li class="dropdown-submenu">
                                <a href="#">Oil Analysis</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('admin/data_oli') ?>">View</a></li>
                                    <li><a href="<?= base_url('admin/import_data_oli') ?>">Import</a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#">Oil Consumption</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('admin/oil_consumption') ?>">View</a></li>
                                    <li><a href="<?= base_url('admin/import_oil_consumption') ?>">Import</a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#">Fuel Consumption</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('admin/fuel_consumption') ?>">View</a></li>
                                    <li><a href="<?= base_url('admin/import_fuel_consumption') ?>">Import</a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#">Fuel Condition</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('admin/fuel_condition') ?>">View</a></li>
                                    <li><a href="<?= base_url('admin/import_fuel_condition') ?>">Import</a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#">PPU</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('admin/ppu') ?>">View</a></li>
                                    <li><a href="<?= base_url('admin/import_ppu') ?>">Import</a></li>
                                </ul>
                                <!-- end dropdown-menu -->
                            </li>
                        </ul>
                        <!-- end dropdown-menu -->
                    </li>
                    <!-- end standard drop down -->
                </ul>
                <!-- end nav navbar-nav -->
            </div>
            <!-- end #navbar-collapse-1 -->
        </nav>
        <!-- end navbar navbar-default megamenu -->
    </div>
</header>