<main id="content" role="main" class="main pointer-event">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Halo! Selamat Datang <?= $this->session->userdata('nama') ?></h1>
                </div>

            </div>
        </div>
        <!-- End Page Header -->
        <!-- Stats -->
        <div class="row gx-2 gx-lg-3">
            <?php if ($this->session->userdata('idRole') == 1) : ?>
                <div class="col-sm-6 col-lg-3 mb-6 mb-lg-5">
                    <!-- Card -->
                    <a href="<?= base_url("Dashboard/Admin/Petugas") ?>" class="card card-hover-shadow h-100">
                        <div class="card-body">
                            <h6 class="card-subtitle">Petugas</h6>

                            <div class="row align-items-center gx-2 mb-1">
                                <div class="col-12">
                                    <span class="card-title h2"><?= $petugas->num_rows() ?></span>
                                </div>

                            </div>
                            <!-- End Row -->

                            <span class="btn btn-soft-primary">
                                <i class="tio-user"></i>
                            </span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
            <?php endif ?>

            <div class="col-sm-6 col-lg-3 mb-6 mb-lg-5">
                <!-- Card -->
                <a href="<?= $data = ($this->session->userdata('idRole') == 1) ? base_url('Dashboard/Admin/VerifPemohon') : base_url('Dashboard/Petugas/Pemohon') ?>" class=" card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Pemohon Belum Diverifikasi</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <span class="card-title h2"><?= $pemohon_belum_ver->num_rows() ?></span>
                            </div>

                        </div>
                        <!-- End Row -->

                        <span class="btn btn-soft-danger">
                            <i class="tio-group-equal"></i>
                        </span>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-6 mb-lg-5">
                <!-- Card -->
                <a href="<?= $data = ($this->session->userdata('idRole') == 1) ? base_url('Dashboard/Admin/VerifPemohon') : base_url('Dashboard/Petugas/Pemohon') ?>" class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Pemohon Revisi</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <span class="card-title h2"><?= $pemohon_revisi->num_rows() ?></span>
                            </div>

                        </div>
                        <!-- End Row -->

                        <span class="btn btn-soft-warning">
                            <i class="tio-group-equal"></i>
                        </span>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-6 mb-lg-5">
                <!-- Card -->
                <a href="<?= $data = ($this->session->userdata('idRole') == 1) ? base_url('Dashboard/Admin/VerifPemohon') : base_url('Dashboard/Petugas/Pemohon') ?>" class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Pemohon Terverifikasi</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <span class="card-title h2"><?= $pemohon_terver->num_rows() ?></span>
                            </div>

                        </div>
                        <!-- End Row -->

                        <span class="btn btn-soft-success">
                            <i class="tio-group-equal"></i>
                        </span>
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <?php if ($this->session->userdata('idRole') == 2) : ?>
                <div class="col-sm-6 col-lg-3 mb-6 mb-lg-5">
                    <!-- Card -->
                    <a href="<?= base_url("Dashboard/Petugas/Kecamatan") ?>" class="card card-hover-shadow h-100" href="#">
                        <div class="card-body">
                            <h6 class="card-subtitle">Kecamatan</h6>

                            <div class="row align-items-center gx-2 mb-1">
                                <div class="col-6">
                                    <span class="card-title h2"><?= $kecamatan->num_rows() ?></span>
                                </div>

                            </div>
                            <!-- End Row -->

                            <span class="btn btn-soft-dark">
                                <i class="tio-city"></i>
                            </span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>

                <div class="col-sm-6 col-lg-3 mb-6 mb-lg-5">
                    <!-- Card -->
                    <a href="<?= base_url("Dashboard/Petugas/Desa") ?>" class="card card-hover-shadow h-100" href="#">
                        <div class="card-body">
                            <h6 class="card-subtitle">Desa</h6>

                            <div class="row align-items-center gx-2 mb-1">
                                <div class="col-6">
                                    <span class="card-title h2"><?= $desa->num_rows() ?></span>
                                </div>

                            </div>
                            <!-- End Row -->

                            <span class="btn btn-soft-info">
                                <i class="tio-home-vs"></i>
                            </span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>

                <div class="col-sm-6 col-lg-3 mb-6 mb-lg-5">
                    <!-- Card -->
                    <a href="<?= base_url("Dashboard/Petugas/Tanah") ?>" class="card card-hover-shadow h-100" href="#">
                        <div class="card-body">
                            <h6 class="card-subtitle">Tanah</h6>

                            <div class="row align-items-center gx-2 mb-1">
                                <div class="col-6">
                                    <span class="card-title h2"><?= $tanah->num_rows() ?></span>
                                </div>

                            </div>
                            <!-- End Row -->

                            <span class="btn btn-soft-primary">
                                <i class="tio-map"></i>
                            </span>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
            <?php endif ?>

        </div>
        <!-- End Stats -->



    </div>
    <!-- End Content -->

</main>