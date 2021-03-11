<main id="content" role="main" class="main pointer-event">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Tambah Tanah</h1>
                </div>

            </div>
        </div>
        <form method="POST" enctype="multipart/form-data" id="myForm">
            <div class="col-lg-12">
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <div class="card-header">
                        <h2 class="card-title h4">Data Tanah</h2>
                    </div>

                    <!-- Body -->

                    <div class="card-body">
                        <!-- Form Group -->
                        <div class="row form-group">
                            <div class="col-sm-9">
                                <button onclick="rndStr(11)" type="button" class="btn btn-success mr-2"><i class="tio-add-circle"></i> Auto Generate NIB</button>
                            </div>
                        </div>



                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="nama_lengkap" class="col-sm-3 col-form-label input-label">NIB</label>

                            <div class="col-sm-9">
                                <input type="text" id="nib" placeholder="10331955059" readonly autocomplete="off" class="form-control" name="nib" value="<?= set_value('nib'); ?>">
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="alamat" class="col-sm-3 col-form-label input-label">Pemohon</label>

                            <div class="col-sm-9">
                                <select id="pemohon" name="idPemohon" class="form-control" style="width: 100%">
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
                            <label for="alamat" class="col-sm-3 col-form-label input-label">Kecamatan</label>

                            <div class="col-sm-9">
                                <select id="kecamatan" onchange="ajax()" name="idKecamatan" class="form-control" style="width: 100%">
                                    <option value="">-- Pilih Kecamatan --</option>
                                    <?php foreach ($kecamatan as $k) :  ?>
                                        <option value="<?= $k->idKecamatan ?>" <?= $data = (isset($_POST['idKecamatan']) && $_POST['idKecamatan'] == $k->idKecamatan ? 'selected' : '') ?>><?= $k->nama_kecamatan ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="alamat" class="col-sm-3 col-form-label input-label">Desa</label>

                            <div class="col-sm-9">
                                <select id="desa" name="idDesa" class="form-control" style="width: 100%">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="alamat" class="col-sm-3 col-form-label input-label">Luas Tanah ( m<sup style="right: 0">2</sup> )</label>

                            <div class="col-sm-9">
                                <input type="text" autocomplete="off" class="form-control" name="luas_tanah" placeholder="3500.50" value="<?= set_value('luas_tanah'); ?>">
                            </div>
                        </div>

                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="telepon" class="col-sm-3 col-form-label input-label">Letak Tanah</label>

                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="letak_tanah" placeholder="Malang" autocomplete="off" value="<?= set_value('letak_tanah'); ?>">
                            </div>
                        </div>
                        <!-- End Form Group -->
                        <!-- Form Group -->
                        <div class="row form-group">
                            <label for="telepon" class="col-sm-3 col-form-label input-label">RT / RW</label>

                            <div class="col-sm-4">
                                <input type="number" min="1" onkeydown="return event.keyCode !== 69" class="form-control" name="rt" placeholder="04" autocomplete="off" value="<?= set_value('rt'); ?>">
                            </div>
                            <div class="col-sm-4">
                                <input type="number" maxlength="2" onkeydown="return event.keyCode !== 69" class="form-control" name="rw" placeholder="02" autocomplete="off" value="<?= set_value('rw'); ?>">
                            </div>
                        </div>


                    </div>
                    <!-- End Body -->
                    <!-- Footer -->

                    <div class="card-footer d-flex justify-content-end align-items-center">
                        <button type="submit" class="btn btn-primary">
                            <i class="tio-add-circle"></i> Tambah Tanah
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

    $('#pemohon').select2();
    $('#desa').select2();
    $('#kecamatan').select2();

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
        $("#nib").val(check.join(""));
    }

    function ajax() {
        let idKecamatan = $("#kecamatan").val();
        if (!idKecamatan) {
            $("#desa").html("");
        }
        $.ajax({
            url: '<?= base_url('Dashboard/Petugas/Tanah/GetDesa/') ?>',
            data: {
                idKecamatan: idKecamatan
            },
            method: 'post',
            success: function(data) {
                let obj = JSON.parse(data)
                for (i = 0; i < obj.length; i++) {
                    obj[i] = `<option value = "` + obj[i].idDesa + `">` + obj[i].nama + `</option>`
                    $("#desa").html(obj);
                }
            }

        });
    }
</script>