<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Sign In</title>


    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?= base_url('assets/css/vendor.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/icon-set/style.css') ?>">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?= base_url('assets/css/sweetalert.css') ?>" media="screen" title="no title">
    <link rel="stylesheet" href="<?= base_url('assets/css/theme.min.css?v=1.0') ?>">
</head>


<body class="d-flex align-items-center min-h-100">

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main pt-0">
        <!-- Content -->
        <div class="container-fluid px-3">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-items-center min-vh-lg-100">
                    <div class="w-100 pt-10 pt-lg-7 pb-7" style="max-width: 25rem;">
                        <div class="text-center">
                            <img src="<?= base_url('assets/img/profil_klinik/') ?>" alt="Logo" width="50%">
                        </div>

                        <!-- Form -->
                        <?= form_open('auth/login') ?>
                        <div class="text-center mb-5 mt-5">
                            <h1 class="display-4">Silahkan Login</h1>

                        </div>



                        <!-- Form Group -->
                        <div class="js-form-message form-group">
                            <label class="input-label"> Username</label>

                            <input type="text" class="form-control form-control-lg" autocomplete="off" name="username" placeholder="admin" value="">
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class="js-form-message form-group">
                            <label class="input-label" for="signupSrPassword" tabindex="0">
                                <span class="d-flex justify-content-between align-items-center">
                                    Password

                                </span>
                            </label>

                            <div class="input-group input-group-merge">
                                <input type="password" autocomplete="off" class="js-toggle-password form-control form-control-lg" name="password" data-hs-toggle-password-options='{
                            "target": "#changePassTarget",
                            "defaultClass": "tio-hidden-outlined",
                            "showClass": "tio-visible-outlined",
                            "classChangeTarget": "#changePassIcon"
                        }'>
                                <div id="changePassTarget" class="input-group-append">
                                    <a class="input-group-text" href="javascript:;">
                                        <i id="changePassIcon" class="tio-visible-outlined"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-lg btn-block btn-primary btnLogin">Login</button>
                        <?= form_close(); ?>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->


    <!-- JS Implementing Plugins -->
    <script src="<?= base_url('assets/js/vendor.min.js') ?>"></script>

    <!-- JS Front -->
    <script src="<?= base_url('assets/js/theme.min.js') ?>"></script>


    <script type="text/javascript" src="<?= base_url('assets/js/sweetalert.min.js') ?>"></script>


    <?php if ($this->session->tempdata('flash')) :
        $temp = $this->session->tempdata('flash');

    ?>

        <script>
            swal("<?= $temp['title'] ?>", "<?= $temp['text'] ?>", "<?= $temp['type'] ?>")
        </script>
    <?php endif;
    ?>


    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {

            // initialization of Show Password
            $('.js-toggle-password').each(function() {
                new HSTogglePassword(this).init()
            });
        });
    </script>

</body>

</html>