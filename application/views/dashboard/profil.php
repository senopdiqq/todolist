<main id="content" role="main" class="main pointer-event">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Profil PTSL</h1>
                </div>

            </div>
        </div>
        <!-- End Page Header -->


        <!-- Content Step Form -->
        <form method="POST" enctype="multipart/form-data">
            <div id="addUserStepFormContent">
                <!-- Card -->
                <div id="addUserStepProfile" class="card card-lg active">
                    <!-- Body -->
                    <div class="card-body">

                        <!-- Form Group -->
                        <div class="row form-group" hidden>
                            <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Id Profil PTSL </label>

                            <div class="col-sm-6">
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" readonly class="form-control" name="id_profil_ptsl" value="<?= $profil->id ?>" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <!-- End Form Group -->

                        <div class="row form-group">
                            <label class="col-sm-3 col-form-label input-label">Logo<i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Logo dari PTSL akan ditampilkan pada halaman login"></i></label>

                            <div class="col-sm-9">
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="avatarUploader">
                                        <img id="avatarImg" class="avatar-img" src="<?= base_url("assets/img/foto_user/" . $profil->foto) ?>" alt="Image Description">



                                        <input type="file" name="foto_ptsl" class="js-file-attach avatar-uploader-input" id="avatarUploader" data-hs-file-attach-options='{
                                      "textTarget": "#avatarImg",
                                      "mode": "image",
                                      "targetAttr": "src",
                                      "resetTarget": ".js-file-attach-reset-img",
                                      "resetImg": "<?= base_url("assets/img/foto_user/default.jpg") ?>"
                                   }'>


                                        <span class="avatar-uploader-trigger">
                                            <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                                        </span>
                                    </label>
                                    <!-- End Avatar -->
                                    <button type="button" class="js-file-attach-reset-img btn btn-white">Hapus</button>

                                </div>
                            </div>
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Nama <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Nama dari PTSL akan ditampilkan pada halaman login"></i></label>

                            <div class="col-sm-6">
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control" name="nama_ptsl" value="<?= $profil->nama ?>" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Alamat</label>
                            <div class="col-sm-6">
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control" name="alamat" value="<?= $profil->alamat ?>" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">No Telepon</label>
                            <div class="col-sm-6">
                                <div class="input-group input-group-sm-down-break">
                                    <input type="number" class="form-control" name="no_telp" value="<?= $profil->no_telp ?>" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Email</label>
                            <div class="col-sm-6">
                                <div class="input-group input-group-sm-down-break">
                                    <input type="text" class="form-control" name="email" value="<?= $profil->email ?>" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <!-- End Form Group -->



                    </div>
                    <!-- End Body -->

                    <!-- Footer -->
                    <div class="card-footer d-flex justify-content-end align-items-center">
                        <button type="submit" name="submit" class="btn btn-primary">
                            <i class="tio-edit"></i> Update
                        </button>

                    </div>
                    <!-- End Footer -->
                </div>
                <!-- End Card -->
        </form>

    </div>
    <!-- End Content Step Form -->


    </div>
    <!-- End Content -->

</main>