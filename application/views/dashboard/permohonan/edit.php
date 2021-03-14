<main id="content" role="main" class="main pointer-event">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Edit Data</h1>
                </div>

            </div>
        </div>
        <form method="POST" enctype="multipart/form-data" id="myForm">
            <div class="col-lg-12">
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h2 class="card-title h4">Data Pemohon</h2>
                    </div>

                    <!-- Body -->

                    <div class="card-body">

                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="nama_lengkap" class="col-sm-3 col-form-label input-label">Nomor Berkas</label>

                            <div class="col-sm-9">
                                <input type="text" id="nomor_berkas" placeholder="10331955059" value="<?= $data->nomor_berkas ?>" readonly autocomplete="off" class="form-control" name="nomor_berkas" value="<?= set_value('nomor_berkas'); ?>">
                            </div>
                        </div>


                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="nama_pemohon" class="col-sm-3 col-form-label input-label">Nama Pemohon</label>

                            <div class="col-sm-9">
                                <select id="pemohon" name="idPemohon" onchange="return ajax()" class="form-control" style="width: 100%">
                                    <option value="">-- Pilih Pemohon --</option>
                                    <?php foreach ($pemohon as $k) :  ?>
                                        <option value="<?= $k->idPemohon ?>" <?= $option = (isset($_POST['idPemohon']) && $_POST['idPemohon'] == $k->idPemohon || $data->idPemohon == $k->idPemohon ? 'selected' : '') ?>><?= $k->nama . " / " .  $k->nik  ?></option>
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
                            <label for="nama_lengkap" class="col-sm-3 col-form-label input-label">Scan Berkas <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fornat file PDF"></i></label>

                            <div class="col-sm-9">
                                <input type="file" id="scan_berkas" class="form-control" name="scan_berkas">
                            </div>
                        </div>

                    </div>
                    <!-- End Body -->
                    <!-- Footer -->

                    <div class="card-footer d-flex justify-content-end align-items-center">
                        <button type="button" class="btn btn-primary revisiPemohon">
                            <i class="tio-edit"></i> Edit Data
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
</main>
<script>
    $('#pemohon').select2();
    $('#tanah').select2();
    $('.revisiPemohon').click(function(e) {

        swal({
                title: "Peringatan!",
                text: "Dengan klik edit, anda tidak dapat mengubahnya lagi!",
                icon: "warning",
                buttons: {
                    confirm: 'Ya, Edit Pemohon',
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

    function getSelectedDesa() {
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
                var option = ""
                obj.forEach(val => {
                    if (val.idDesa == <?= $data->idDesa ?>) {
                        option += `<option value = "${val.nib}" selected>${val.nama}</option>`
                    } else {
                        option += `<option value = "${val.nib}">${val.nama}</option>`
                    }
                })
                $("#tanah").html(option);
            }

        });
    }

    $(document).ready(function() {
        getSelectedDesa()
    })
</script>