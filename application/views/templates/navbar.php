<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Dashboard</title>

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/icon-set/style.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/sweetalert.css') ?>" media="screen" title="no title">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?= base_url('assets/css/theme.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/select2.min.css') ?>">

</head>

<body class="footer-offset">


    <!-- ONLY DEV -->

    <!-- Builder -->
    <div id="styleSwitcherDropdown" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow" style="width: 35rem;">
        <div class="card card-lg border-0 h-100">
            <!-- Footer -->
            <div class="card-footer">
                <div class="row gx-2">
                    <div class="col">
                        <button type="button" id="js-builder-reset" class="btn btn-block btn-lg btn-white">
                            <i class="tio-restore"></i> Reset
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" id="js-builder-preview" class="btn btn-block btn-lg btn-primary">
                            <i class="tio-visible"></i> Preview
                        </button>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Footer -->
        </div>
    </div>
    <!-- End Builder -->



    <!-- JS Preview mode only -->
    <div id="headerMain" class="d-none">
        <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
            <div class="navbar-nav-wrap">

                <div class="navbar-nav-wrap-content-left">
                    <!-- Navbar Vertical Toggle -->
                    <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
                        <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip" data-placement="right" title="Collapse"></i>
                        <i class="tio-last-page navbar-vertical-aside-toggle-full-align" data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-toggle="tooltip" data-placement="right" title="Expand"></i>
                    </button>
                    <!-- End Navbar Vertical Toggle -->


                </div>

                <!-- Secondary Content -->
                <div class="navbar-nav-wrap-content-right">
                    <!-- Navbar -->
                    <ul class="navbar-nav align-items-center flex-row">

                        <li class="nav-item">
                            <!-- Account -->
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options='{
                 "target": "#accountNavbarDropdown",
                 "type": "css-animation"
               }'>
                                    <div class="avatar avatar-sm avatar-circle">
                                        <img class="avatar-img" src="<?= base_url('assets/img/foto_user/default.jpg') ?>">
                                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                    </div>
                                </a>

                                <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                                    <a class="dropdown-item" href="<?= base_url('Dashboard/ProfilUser') ?>">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-sm avatar-circle mr-2">
                                                <img class="avatar-img" src="<?= base_url('assets/img/foto_user/default.jpg') ?>">
                                            </div>
                                            <div class="media-body">
                                                <span class="card-title h5"><?= $this->session->userdata('nama') ?></span>
                                                <span class="card-text"><?= $this->session->userdata('email') ?></span>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('update_password.php') ?>">
                                        <span class="text-truncate pr-2" title="Settings">Update Password</span>
                                    </a>
                                    <a class="dropdown-item sweetalertNya" href="<?= base_url('dashboard/home/logout') ?>">
                                        <span class="text-truncate pr-2" title="Settings">Log Out</span>
                                    </a>
                                </div>
                            </div>
                            <!-- End Account -->
                        </li>
                    </ul>
                    <!-- End Navbar -->
                </div>
                <!-- End Secondary Content -->
            </div>
        </header>
    </div>