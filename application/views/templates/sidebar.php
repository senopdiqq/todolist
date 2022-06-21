<div id="headerFluid" class="d-none">

</div>
<div id="headerDouble" class="d-none">

</div>
<div id="sidebarMain" class="d-none">
    <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset">
                <div class="navbar-brand-wrapper justify-content-center" style="height: auto;">
                    <!-- Logo -->




                    <!-- End Logo -->

                    <!-- Navbar Vertical Toggle -->
                    
                    <!-- End Navbar Vertical Toggle -->
                </div>

                <!-- Content -->
                <div class="navbar-vertical-content">
                    <ul class="navbar-nav navbar-nav-lg nav-tabs">
                        <!-- Dashboards -->
                        
                        <!-- End Dashboards -->
                        <!-- BUAT ADMINISTRATOR -->

                 



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
<script src="<?= base_url('assets/js/pdf.js') ?>"></script>
<script src="<?= base_url('assets/js/pdf.worker.js') ?>"></script>
<script src="<?= base_url('assets/js/pdf.js.map') ?>"></script>
<script src="<?= base_url('assets/js/pdf.worker.js.map') ?>"></script>