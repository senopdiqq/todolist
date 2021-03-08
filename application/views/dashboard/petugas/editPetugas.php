<main id="content" role="main" class="main pointer-event">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Update Petugas</h1>
                </div>

            </div>
        </div>
        <form method="POST" enctype="multipart/form-data">
            <div class="col-lg-12">
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h2 class="card-title h4">Data Petugas</h2>
                    </div>

                    <!-- Body -->

                    <div class="card-body">


                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="nama_lengkap" class="col-sm-3 col-form-label input-label">Nama Lengkap</label>

                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="nama" placeholder="John Doe" value="<?= $getPetugas->nama; ?>">
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="alamat" class="col-sm-3 col-form-label input-label">Alamat</label>

                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="alamat" placeholder="Jl Welirang No 74 Kepanjen" value="<?= $getPetugas->alamat; ?>">
                            </div>
                        </div>
                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="alamat" class="col-sm-3 col-form-label input-label">Email</label>

                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="email" placeholder="clarice@gmail.com" value="<?= $getPetugas->email; ?>">
                            </div>
                        </div>

                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="telepon" class="col-sm-3 col-form-label input-label">Telepon</label>

                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="no_hp" placeholder="0812532323206" autocomplete="off" value="<?= $getPetugas->no_hp; ?>">
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <div class="row form-group">
                            <label class="col-sm-3 col-form-label input-label">Jenis Kelamin</label>

                            <div class="col-sm-9">
                                <div class="input-group input-group-sm-down-break">
                                    <!-- Custom Radio -->
                                    <div class="form-control">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" value="Pria" class="custom-control-input" name="jenis_kelamin" id="userAccountTypeRadio1" <?= ($getPetugas->jenis_kelamin == 'Pria' ? 'checked' : '') ?>>
                                            <label class="custom-control-label" for="userAccountTypeRadio1">Pria</label>
                                        </div>
                                    </div>
                                    <!-- End Custom Radio -->

                                    <!-- Custom Radio -->
                                    <div class="form-control">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" value="Wanita" class="custom-control-input" name="jenis_kelamin" id="userAccountTypeRadio2" <?= ($getPetugas->jenis_kelamin == 'Wanita' ? 'checked' : '') ?>>
                                            <label class="custom-control-label" for="userAccountTypeRadio2">Wanita</label>
                                        </div>
                                    </div>
                                    <!-- End Custom Radio -->
                                </div>
                            </div>
                        </div>



                    </div>
                    <!-- End Body -->
                    <!-- Footer -->
                    <div class="card-footer d-flex justify-content-end align-items-center">
                        <button type="submit" name="submit" class="btn btn-primary">
                            <i class="tio-edit"></i> Update Petugas
                        </button>

                    </div>
                    <!-- End Footer -->
                </div>
                <!-- End Card -->



                <!-- Sticky Block End Point -->
                <div id="stickyBlockEndPoint"></div>
            </div>
            <form>
    </div>
    </div>
</main>