<main id="content" role="main" class="main pointer-event">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Detail Permohonan</h1>
                </div>

            </div>
        </div>
        <div class="col-lg-12">
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
                <div class="card-header">
                    <h2 class="card-title h4">Detail Tanah</h2>
                </div>

                <!-- Body -->

                <div class="card-body">

                    <div class="row form-group">
                        <label for="nama_pemohon" class="col-sm-3 col-form-label input-label">NIB</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" readonly value="<?= $permohonan->nib ?>">
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="nama_desa" class="col-sm-3 col-form-label input-label">Nama Desa</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" readonly value="<?= $permohonan->nama_desa ?>">
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="nama_lengkap" class="col-sm-3 col-form-label input-label">Luas Tanah (m<sup style="right: 0;">2</sup>)</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" readonly value="<?= $permohonan->luas_tanah ?>">
                        </div>
                    </div>

                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="nama_lengkap" class="col-sm-3 col-form-label input-label">Letak Tanah (Dusun)</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" readonly value="<?= $permohonan->letak_tanah ?>">
                        </div>
                    </div>

                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="nama_lengkap" class="col-sm-3 col-form-label input-label">Rt / Rw</label>

                        <div class="col-sm-4">
                            <input type="text" class="form-control" readonly value="<?= $permohonan->rt ?>">
                        </div>

                        <div class="col-sm-4">
                            <input type="text" class="form-control" readonly value="<?= $permohonan->rw ?>">
                        </div>
                    </div>


                </div>
                <!-- End Body -->
            </div>
            <!-- End Card -->



            <!-- Sticky Block End Point -->
            <div id="stickyBlockEndPoint"></div>
        </div>

        <div class="col-lg-12">
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
                <div class="card-header">
                    <h2 class="card-title h4">Detail Permohonan</h2>
                </div>

                <!-- Body -->

                <div class="card-body">

                    <div class="row form-group">
                        <label for="nama_pemohon" class="col-sm-3 col-form-label input-label">Nama Pemohon</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" readonly value="<?= $permohonan->nama ?>">
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="nama_desa" class="col-sm-3 col-form-label input-label">Nama Desa</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" readonly value="<?= $permohonan->nama_desa ?>">
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="nama_lengkap" class="col-sm-3 col-form-label input-label">Nomor Berkas</label>

                        <div class="col-sm-9">
                            <input type="text" id="nomor_berkas" placeholder="10331955059" readonly autocomplete="off" class="form-control" name="nomor_berkas" value="<?= $permohonan->nomor_berkas ?>">
                        </div>
                    </div>

                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="nama_lengkap" class="col-sm-3 col-form-label input-label">Scan Berkas <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Klik untuk melihat berkas"></i></label>

                        <div class="col-sm-9">
                            <a href="<?= base_url('assets/img/foto_berkas/' . $permohonan->scan_berkas) ?>" target="_blank" class="badge badge-success p-2"><?= $permohonan->scan_berkas ?></a>
                        </div>
                    </div>

                    <!-- Form Group -->
                    <div class="row form-group">
                        <label for="nama_desa" class="col-sm-3 col-form-label input-label">Keterangan</label>

                        <div class="col-sm-9">
                            <textarea name="keterangan" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <!-- End Form Group -->


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
    </div>
    </div>


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
                    confirm: 'Ya, Tambah Permohonan',
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

    $(document).ready(function() {
        ajax()
    })
</script>