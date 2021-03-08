<main id="content" role="main" class="main pointer-event">
    <div class="content container-fluid">
        <!-- Step Form -->
        <form method="POST" action="<?= base_url('dashboard/admin/petugas/addPetugas') ?>" class="js-step-form py-md-5" data-hs-step-form-options="{
                &quot;progressSelector&quot;: &quot;#addUserStepFormProgress&quot;,
                &quot;stepsSelector&quot;: &quot;#addUserStepFormContent&quot;,
                &quot;endSelector&quot;: &quot;#addUserFinishBtn&quot;,
                &quot;isValidate&quot;: false
              }">
            <div class="row justify-content-lg-center">
                <div class="col-lg-8">
                    <!-- Step -->
                    <ul id="addUserStepFormProgress" class="js-step-progress step step-sm step-icon-sm step step-inline step-item-between mb-3 mb-md-5">
                        <li class="step-item active">
                            <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options="{
                      &quot;targetSelector&quot;: &quot;#biodata&quot;
                    }">
                                <span class="step-icon step-icon-soft-dark">1</span>
                                <div class="step-content">
                                    <span class="step-title">Data Diri</span>
                                </div>
                            </a>
                        </li>

                        <li class="step-item">
                            <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options="{
                      &quot;targetSelector&quot;: &quot;#tambahAkun&quot;
                    }">
                                <span class="step-icon step-icon-soft-dark">2</span>
                                <div class="step-content">
                                    <span class="step-title">Buat Akun</span>
                                </div>
                            </a>
                        </li>


                    </ul>
                    <!-- End Step -->

                    <!-- Content Step Form -->
                    <div id="addUserStepFormContent">
                        <!-- Card -->
                        <div id="biodata" class="card card-lg active">
                            <!-- Body -->
                            <div class="card-body">

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="nama_lengkap" class="col-sm-3 col-form-label input-label">Nama Lengkap</label>

                                    <div class="col-sm-9">
                                        <input type="text" autocomplete="off" class="form-control" name="nama" placeholder="John Doe" value="<?= set_value('nama') ?>">
                                    </div>
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="alamat" class="col-sm-3 col-form-label input-label">Alamat</label>

                                    <div class="col-sm-9">
                                        <input type="text" autocomplete="off" class="form-control" name="alamat" placeholder="Jl Welirang No 74 Kepanjen" value="<?= set_value('alamat'); ?>">
                                    </div>
                                </div>
                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="alamat" class="col-sm-3 col-form-label input-label">Email</label>

                                    <div class="col-sm-9">
                                        <input type="text" autocomplete="off" class="form-control" name="email" placeholder="clarice@gmail.com" value="<?= set_value('email'); ?>">
                                    </div>
                                </div>

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="telepon" class="col-sm-3 col-form-label input-label">No Hp</label>

                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="no_hp" placeholder="0812532323206" autocomplete="off" value="<?= set_value('no_hp'); ?>">
                                    </div>
                                </div>
                                <!-- End Form Group -->
                                <div class="row">
                                    <label class="col-sm-3 col-form-label input-label">Jenis Kelamin</label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm-down-break">
                                            <!-- Custom Radio -->
                                            <div class="form-control">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" value="Pria" class="custom-control-input" name="jenis_kelamin" id="userAccountTypeRadio1" <?= $data = (!empty($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'Pria' ? 'checked' : '')  ?>>
                                                    <label class="custom-control-label" for="userAccountTypeRadio1">Pria</label>
                                                </div>
                                            </div>
                                            <!-- End Custom Radio -->

                                            <!-- Custom Radio -->
                                            <div class="form-control">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" value="Wanita" class="custom-control-input" name="jenis_kelamin" id="userAccountTypeRadio2" <?= $data = (!empty($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'Wanita' ? 'checked' : '')  ?>>
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
                                <button type="button" class="btn btn-primary" data-hs-step-form-next-options="{
                              &quot;targetSelector&quot;: &quot;#tambahAkun&quot;
                            }">
                                    Next <i class="tio-chevron-right"></i>
                                </button>
                            </div>
                            <!-- End Footer -->
                        </div>
                        <!-- End Card -->

                        <div id="tambahAkun" class="card card-lg" style="display: none;">
                            <!-- Body -->
                            <div class="card-body">


                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label class="col-sm-3 col-form-label input-label">Username <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Username bersifat One time sehingga tidak dapat diganti setelah didaftarkan"></i></label>

                                    <div class="col-sm-9">
                                        <input type="text" autocomplete="off" class="form-control" name="username" placeholder="JohnDoe1337" value="<?= set_value('username'); ?>">
                                    </div>
                                </div>
                                <!-- End Form Group -->
                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="editUserModalCurrentPasswordLabel" class="col-sm-3 col-form-label input-label">Password <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Password minimal 6 karakter"></i></label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <input type="password" class="js-toggle-password form-control" name="password" id="editUserModalCurrentPasswordLabel" value="" data-hs-toggle-password-options="{
                                   &quot;target&quot;: &quot;#passwordlama&quot;,
                                   &quot;defaultClass&quot;: &quot;tio-hidden-outlined&quot;,
                                   &quot;showClass&quot;: &quot;tio-visible-outlined&quot;,
                                   &quot;classChangeTarget&quot;: &quot;#editUserModalChangePassModalIcon&quot;
                                 }">
                                            <div id="passwordlama" class="input-group-append">
                                                <a class="input-group-text" href="javascript:;">
                                                    <i id="editUserModalChangePassModalIcon" class="tio-hidden-outlined"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <label for="password_repeat" class="col-sm-3 col-form-label input-label">Ulangi Password</label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <input type="password" class="js-toggle-password form-control" name="password_repeat" id="editUserModalCurrentPasswordLabel" value="" data-hs-toggle-password-options="{
                                   &quot;target&quot;: &quot;#password_repeat&quot;,
                                   &quot;defaultClass&quot;: &quot;tio-hidden-outlined&quot;,
                                   &quot;showClass&quot;: &quot;tio-visible-outlined&quot;,
                                   &quot;classChangeTarget&quot;: &quot;#password_repeatnya&quot;
                                 }">
                                            <div id="password_repeat" class="input-group-append">
                                                <a class="input-group-text" href="javascript:;">
                                                    <i id="password_repeatnya" class="tio-hidden-outlined"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Body -->

                            <!-- Footer -->
                            <div class="card-footer d-flex align-items-center">
                                <button type="button" class="btn btn-ghost-secondary" data-hs-step-form-prev-options="{
                         &quot;targetSelector&quot;: &quot;#biodata&quot;
                       }">
                                    <i class="tio-chevron-left"></i> Kembali
                                </button>
                                <div class="ml-auto">
                                    <button id="submitbutton2" type="submit" name="submit" class="btn btn-primary">
                                        <i class="tio-add-circle"></i> Tambah Data
                                    </button>
                                </div>

                            </div>
                            <!-- End Footer -->
                        </div>




                    </div>
                </div>
                <!-- End Row -->
        </form>
        <!-- End Step Form -->
    </div>
    </div>
</main>