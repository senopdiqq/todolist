<main id="content" role="main" class="main pointer-event">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Update Password</h1>
                </div>

            </div>
        </div>
        <!-- Step Form -->
        <form method="POST">
            <div class="row justify-content-lg-center">
                <div class="col-lg-8">
                    <!-- End Step -->

                    <!-- Content Step Form -->
                    <div id="addUserStepFormContent">
                        <!-- Card -->
                        <div id="addUserStepProfile" class="card card-lg active" style="">
                            <!-- Body -->
                            <div class="card-body">


                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="editUserModalCurrentPasswordLabel" class="col-sm-3 col-form-label input-label">Password Lama</label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <input type="password" class="js-toggle-password form-control" name="password" id="editUserModalCurrentPasswordLabel" value="<?= set_value('password') ?>" data-hs-toggle-password-options="{
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

                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="editUserModalCurrentPasswordLabel" class="col-sm-3 col-form-label input-label">Password Baru</label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <input type="password" class="js-toggle-password form-control" name="password_baru" id="editUserModalCurrentPasswordLabel" value="<?= set_value('password_baru') ?>" data-hs-toggle-password-options="{
                                   &quot;target&quot;: &quot;#passwordbaru&quot;,
                                   &quot;defaultClass&quot;: &quot;tio-hidden-outlined&quot;,
                                   &quot;showClass&quot;: &quot;tio-visible-outlined&quot;,
                                   &quot;classChangeTarget&quot;: &quot;#editUserModalChangePassModalIcon&quot;
                                 }">
                                            <div id="passwordbaru" class="input-group-append">
                                                <a class="input-group-text" href="javascript:;">
                                                    <i id="editUserModalChangePassModalIcon" class="tio-hidden-outlined"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Group -->
                                <div class="row form-group">
                                    <label for="editUserModalCurrentPasswordLabel" class="col-sm-3 col-form-label input-label">Ulangi Password</label>

                                    <div class="col-sm-9">
                                        <div class="input-group input-group-merge">
                                            <input type="password" class="js-toggle-password form-control" name="ulangi_password" id="editUserModalCurrentPasswordLabel" value="<?= set_value('ulangi_password') ?>" data-hs-toggle-password-options="{
                                   &quot;target&quot;: &quot;#ulangipassword&quot;,
                                   &quot;defaultClass&quot;: &quot;tio-hidden-outlined&quot;,
                                   &quot;showClass&quot;: &quot;tio-visible-outlined&quot;,
                                   &quot;classChangeTarget&quot;: &quot;#editUserModalChangePassModalIcon&quot;
                                 }">
                                            <div id="ulangipassword" class="input-group-append">
                                                <a class="input-group-text" href="javascript:;">
                                                    <i id="editUserModalChangePassModalIcon" class="tio-hidden-outlined"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- End Body -->

                            <!-- Footer -->
                            <div class="card-footer d-flex justify-content-end align-items-center">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="tio-edit"></i> Update Password
                                </button>
                            </div>
                            <!-- End Footer -->
                        </div>
                        <!-- End Card -->


                    </div>


                </div>
            </div>
            <!-- End Row -->
        </form>
        <!-- End Step Form -->
    </div>
    </div>
    <!-- End Content -->

</main>