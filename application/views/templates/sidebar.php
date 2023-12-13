<head>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

    <script>
    $(document).ready(function() {
        $(".loading").fadeOut(1000);
    })
    </script>

<body>
    <div id="rounded">
        <div class="loading">
            <div class="loading">
                <div class="loading">
                    <div class="loading">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
body {
    background-color: #efefef !important
}

#rounded {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 120px;
    height: 120px;
}

.loading {
    padding: 5px;
    width: calc(100% - 0px);
    height: calc(100% - 0px);
    border: 3px solid #eaeaea;
    border-radius: 50%;
    border-top: 3px solid #09a804;
    border-bottom: 3px solid #e80606;
    animation: rotate 5s linear infinite;
}

@keyframes rotate {
    100% {
        transform: rotate(360deg)
    }
}
</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <!-- <div class="sidebar-brand-text mx-3"><img src="assets/img/logo.png" alt="" width="100%"></div> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('welcome') ?>">
                    <i class="fas fa-home"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kategori Barang
                <br>All In Women Store</br>
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/bajuRok') ?>">
                    <i class="fas fa-tshirt"></i>
                    <span>Baju & Rok</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/sepatuSendal') ?>">
                    <i class="fas fa-shoe-prints" aria-hidden="true"></i>
                    <span>Sepatu & Sendal</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/tasAksesoris') ?>">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Tas & Aksesoris </span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/topiHijab') ?>">
                    <i class="fas fa-hat-cowboy" aria-hidden="true"></i>
                    <span>Topi & Hijab </span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="<?php echo base_url() ?>assets/img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href=https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <?php $attributes = array('class' => 'row'); ?>
                    <?php echo form_open('SearchController/search', $attributes); ?>
                    <div class="input-group form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <input type="text" name="keyword" class="form-control bg-light border-0 small"
                            placeholder="Cari Produk...">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                            <?php echo form_close() ?>
                        </div>
                    </div>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">

                                        <input type="text" name="keyword" class="form-control bg-light border-0 small"
                                            placeholder="Cari produk...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Icon untuk keranjang user -->
                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <i class="fa fa-shopping-cart"></i>
                                    <?php
                                    $keranjang  = 'Keranjang Belanja : ' . $this->cart->total_items() . ' items'
                                    ?>

                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                                </li>
                            </ul>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <ul class="na navbar-nav navbar-right">
                                <?php
                                if ($this->session->userdata('username')) { ?>
                                <li>
                                    <div>Selamat Datang <?php echo $this->session->userdata('username') ?></div>
                                </li>
                                <li class="ml-2"><?php echo anchor('auth/logout', 'Logout')  ?></li>
                                <?php } else { ?>
                                <li>
                                <i class="fas fa-sign-in-alt login-icon"></i>
                                <?php echo anchor('auth/login', 'Login'); ?></li>

                                <?php } ?>

                            </ul>
                        </div>



                    </ul>

                </nav>
                <!-- End of Topbar -->