<main id="content" role="main" class="main pointer-event">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Tambah Permohonan</h1>
                </div>

            </div>
        </div>
        <form method="POST" enctype="multipart/form-data" id="myForm">
            <div class="col-lg-12">
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h2 class="card-title h4">Data Permohonan</h2>
                    </div>

                    <!-- Body -->

                    <div class="card-body">

                        <!-- Form Group -->
                        <div class="row form-group">
                            <div class="col-sm-9">
                                <button onclick="rndStr(11)" type="button" class="btn btn-success mr-2"><i class="tio-add-circle"></i> Auto Generate Nomor Berkas</button>
                            </div>
                        </div>
                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="nama_pemohon" class="col-sm-3 col-form-label input-label">Nama Pemohon</label>

                            <div class="col-sm-9">
                                <select id="pemohon" name="idPemohon" onchange="return ajax()" class="form-control" style="width: 100%">
                                    <option value="">-- Pilih Pemohon --</option>
                                    <?php foreach ($pemohon as $k) :  ?>
                                        <option value="<?= $k->idPemohon ?>" <?= $data = (isset($_POST['idPemohon']) && $_POST['idPemohon'] == $k->idPemohon ? 'selected' : '') ?>><?= $k->nama . " / " .  $k->nik  ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="nama_desa" class="col-sm-3 col-form-label input-label">Nama Desa</label>

                            <div class="col-sm-9">
                                <select id="tanah" name="nib" class="form-control" style="width: 100%">
                                    <option value="">-- Pilih Tanah --</option>
                                </select>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="nama_lengkap" class="col-sm-3 col-form-label input-label">Nomor Berkas</label>

                            <div class="col-sm-9">
                                <input type="text" id="nomor_berkas" placeholder="10331955059" readonly autocomplete="off" class="form-control" name="nomor_berkas" value="<?= set_value('nomor_berkas'); ?>">
                            </div>
                        </div>

                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="nama_lengkap" class="col-sm-3 col-form-label input-label">Scan Berkas</label>

                            <div class="col-sm-9">
                            <input type="file" multiple id="scan_berkas" class="form-control" name="scan_berkas[]" >
                            </div>
                        </div>




                    </div>
                    <!-- End Body -->
                    <!-- Footer -->

                    <div class="card-footer d-flex justify-content-end align-items-center">
                        <button type="button" class="btn btn-primary tambahPemohon">
                            <i class="tio-add-circle"></i> Tambah Permohonan
                        </button>

                    </div>
                    <!-- End Footer -->
                </div>
                <!-- End Card -->



                <!-- Sticky Block End Point -->
                <div id="stickyBlockEndPoint"></div>
            </div>
        </form>
    </div>
    </div>
    <!-- Upload files Modal -->
    <div class="modal fade" id="uploadFilesModal" tabindex="-1" role="dialog" aria-labelledby="uploadFilesModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- Header -->
                <div class="modal-header">
                    <h4 id="uploadFilesModalTitle" class="modal-title">Add files</h4>

                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                </div>
                <!-- End Header -->

                <!-- Body -->


                <!-- Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="button" class="btn btn-primary">Upload</button>
                </div>
                <!-- End Footer -->
            </div>
        </div>
    </div>
    <!-- End Upload files Modal -->
</main>

<script>
    $('#pemohon').select2();
    $('#tanah').select2();
    $('.tambahPemohon').click(function(e) {

        swal({
                title: "Peringatan!",
                text: "Dengan klik tambah, anda tidak dapat mengubahnya lagi!",
                icon: "warning",
                buttons: {
                    confirm: 'Ya, Tambah Pemohon',
                    cancel: 'Batal'
                },
                dangerMode: true,
            })
            .then((willSubmit) => {

                if (willSubmit) {
                    $('#myForm').submit();
                }
            });


    });

    function rndStr(len) {
        let text = "";
        let chars =
            "01234567890";

        for (let i = 0; i < len; i++) {
            text += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        let check = text.split("");
        if (check[0] == 0) {
            check[0] = Math.floor(Math.random() * 9) + 1;
        }
        $("#nomor_berkas").val(check.join(""));
    }

    function ajax() {
        let pemohon = $("#pemohon").val();
        console.log(pemohon)
        if (!pemohon) {
            $("#tanah").html("");
        }
        $.ajax({
            url: '<?= base_url('Dashboard/Petugas/Permohonan/getNib/') ?>',
            data: {
                pemohon: pemohon
            },
            method: 'post',
            success: function(data) {
                let obj = JSON.parse(data)
                for (i = 0; i < obj.length; i++) {
                    obj[i] = `<option value = "` + obj[i].nib + `">` + obj[i].nama + `</option>`
                    $("#tanah").html(obj);
                }
            }

        });
    }
</script>