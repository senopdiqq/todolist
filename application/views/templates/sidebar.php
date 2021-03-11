<div id="headerFluid" class="d-none">

</div>
<div id="headerDouble" class="d-none">

</div>
<div id="sidebarMain" class="d-none">
    <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset">
                <div class="navbar-brand-wrapper justify-content-between">
                    <!-- Logo -->


                    <a class="navbar-brand" href="<?= base_url('') ?>" aria-label="Front">
                        <img class="navbar-brand-logo" src="<?= base_url('assets/img/profil_klinik/') ?>" alt="Logo">
                        <img class="navbar-brand-logo-mini" src="<?= base_url('assets/img/profil_klinik/') ?>" alt="Logo">
                    </a>

                    <!-- End Logo -->

                    <!-- Navbar Vertical Toggle -->
                    <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                    <!-- End Navbar Vertical Toggle -->
                </div>

                <!-- Content -->
                <div class="navbar-vertical-content">
                    <ul class="navbar-nav navbar-nav-lg nav-tabs">
                        <!-- Dashboards -->
                        <li class="navbar-vertical-aside-has-menu nav-item">
                            <a class="js-navbar-vertical-aside-menu-link nav-link " href="<?= base_url('Dashboard/home') ?>" title="Dashboards">
                                <i class="tio-home-vs-1-outlined nav-icon"></i>
                                <span class="nav-compact-title text-truncate">Dashboard</span>
                            </a>
                        </li>
                        <!-- End Dashboards -->
                        <!-- BUAT ADMINISTRATOR -->
                        <li class="nav-item">
                            <small class="nav-subtitle" title="Menu Utama">Menu Utama</small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <li class="navbar-vertical-aside-has-menu ">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Master">
                                <i class="tio-apps nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Master</span>
                            </a>
                            <!-- Menu Admin -->
                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                                <?php if ($this->session->userdata('idRole') == '1') : ?>
                                    <li class="nav-item">
                                        <a class="nav-link " href="<?= base_url('Dashboard/Admin/Petugas') ?>" title="Data Petugas">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Data Petugas</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="<?= base_url('Dashboard/Admin/VerifPemohon') ?>" title="Data Petugas">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Data Pemohon</span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($this->session->userdata('idRole') == '2') : ?>
                                    <li class="nav-item">
                                        <a class="nav-link " href="<?= base_url('Dashboard/Petugas/Kecamatan') ?>" title="Daftar Kecamatan">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Daftar Kecamatan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="<?= base_url('Dashboard/Petugas/Pemohon') ?>" title="Daftar Pemohon">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Daftar Pemohon</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link " href="<?= base_url('Dashboard/Petugas/Desa/index') ?>" title="Daftar Desa">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Daftar Desa</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="<?= base_url('Dashboard/Petugas/Tanah/index') ?>" title="Daftar Desa">
                                            <span class="tio-circle nav-indicator-icon"></span>
                                            <span class="text-truncate">Daftar Tanah</span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>

                        <?php if ($this->session->userdata('idRole') == '1') : ?>
                            <li class="nav-item">
                                <small class="nav-subtitle" title="Pengaturan">Pengaturan</small>
                                <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                            </li>

                            <li class="nav-item">
                                <a class="js-nav-tooltip-link nav-link" href="<?= base_url('Dashboard/Profil') ?>" title="profil" data-placement="left" data-original-title="Profil">
                                    <i class="tio-settings nav-icon"></i>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Profil</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="<?= base_url('Dashboard/Admin/HakAkses/') ?>" title="Hak Akses">
                                    <i class="tio-settings nav-icon"></i>
                                    <span class="text-truncate">Hak Akses</span>
                                </a>
                            </li>
                        <?php endif; ?>


                    </ul>
                </div>
                <!-- End Content -->


            </div>
        </div>
    </aside>
</div>
<div id="sidebarCompact" class="d-none">

</div>


<script src="<?= base_url('assets/js/demo.js') ?>"></script>



<!-- End Footer -->
</main>

<!-- JS Implementing Plugins -->
<script src="<?= base_url('assets/js/vendor.min.js') ?>"></script>

<script src="<?= base_url('assets/js/select2.min.js') ?>"></script>




<!-- JS Front -->
<script src="<?= base_url('assets/js/theme.min.js') ?>"></script>

<!-- JS Plugins Init. -->

<script type="text/javascript" src="<?= base_url('assets/js/sweetalert.min.js') ?>"></script>

<!-- END ONLY DEV -->