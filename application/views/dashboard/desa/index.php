<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Halaman Desa</h1>
                </div>
                <div class="col-sm-auto">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#ModalRole">
                        <i class="tio-add-circle"></i>
                        Tambah Desa
                    </button>
                </div>

                <!-- Modal Tambah -->
                <div class="modal fade" id="ModalRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Desa</h5>
                                <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                                    <i class="tio-clear tio-lg"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url("Dashboard/Petugas/desa/store") ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nama_desa" class="control-label">Nama Desa</label>
                                        <input type="text" class="form-control" autocomplete="off" name="nama_desa">
                                    </div>
                                    <div class="row form-group">
                                        <label for="ttl" class="col-sm-3 col-form-label input-label">Kecamatan</label>

                                        <div class="col-md-12">
                                            <select id="kecamatan" name="kecamatan" class="form-control" style="width: 100%">
                                                <option value=""></option>
                                                <?php foreach ($kecamatan as $k) :  ?>
                                                    <option value="<?= $k->idKecamatan ?>"><?= $k->nama_kecamatan ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_role" class="control-label">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value=""></option>
                                            <option value="desa">Desa</option>
                                            <option value="kelurahan">Kelurahan</option>
                                        </select>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="tambah" class="btn btn-primary">
                                    <i class="tio-add-circle"></i>
                                    Tambah Data</button>
                                <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <!-- End Modal -->

            </div>
        </div>

        <!-- Card -->
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2">Total Desa</h6>

                    <div class="row align-items-center gx-2">
                        <div class="col">
                            <span class="js-counter display-4 text-dark"><?= count($desa); ?></span>
                        </div>

                        <div class="col-auto">
                            <span class="btn btn-soft-success p-1">
                                <i class="tio-group-equal"></i>
                            </span>
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- Card -->
        <div class="card">
            <!-- Header -->
            <div class="card-header">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
                        <form>
                            <!-- Search -->
                            <div class="input-group input-group-merge input-group-flush">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tio-search"></i>
                                    </div>
                                </div>
                                <input id="datatableSearch" type="search" autocomplete="off" class="form-control" placeholder="Cari Desa">
                            </div>
                            <!-- End Search -->
                        </form>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 2],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 15,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Desa / Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>Status</th>
                            <th>
                                <center>Aksi</center>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($desa as $p) :

                        ?>

                            <tr role="row" class="even">
                                <td>
                                    <?= $no; ?> </td>
                                <td><?= $p->nama; ?></td>
                                <td><?= $p->nama_kecamatan; ?></td>
                                <td><?= $p->statusnya; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('') ?>" class="badge badge-soft-success p-2 btn-edit" data-nama="<?= $p->nama ?>" data-kecamatan="<?= $p->idKecamatan ?>" data-status="<?= $p->statusnya ?>" data-id="<?= $p->idDesa ?>" data-toggle="modal" data-target="#ModalEdit">
                                        <i class=" tio-edit"></i>
                                        Edit</a>
                                    <a href="<?= base_url('Dashboard/Petugas/desa/delete/' . $p->idDesa) ?>" class="badge badge-soft-danger p-2 alertAktivasi sweetalert">
                                        <i class="tio-delete"></i> Hapus
                                    </a>

                                </td>

                            </tr>
                        <?php $no++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- End Table -->

            <!-- Modal Edit -->
            <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Hak Akses</h5>
                            <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                                <i class="tio-clear tio-lg"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url("Dashboard/Petugas/desa/update") ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="idDesa" id="editIdDesa">
                                <div class="form-group">
                                    <label for="nama_desa" class="control-label">Nama Desa</label>
                                    <input type="text" id="namaDesa" class="form-control" autocomplete="off" name="nama_desa">
                                </div>
                                <div class="row form-group">
                                    <label for="ttl" class="col-sm-3 col-form-label input-label">Kecamatan</label>

                                    <div class="col-md-12">
                                        <select id="kecamatanEdit" name="kecamatan" class="form-control" style="width: 100%">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_role" class="control-label">Status</label>
                                    <select name="status" id="editStatus" class="form-control">
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="tambah" class="btn btn-success">
                                <i class="tio-delete"></i>
                                Edit Data</button>
                            <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <!-- End Modal -->

            <!-- Footer -->
            <div class="card-footer">
                <!-- Pagination -->
                <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                            <span class="mr-2">Showing:</span>

                            <!-- Select -->
                            <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                                <option value="10">10</option>
                                <option value="15" selected>15</option>
                                <option value="20">20</option>
                            </select>
                            <!-- End Select -->

                            <span class="text-secondary mr-2">of</span>

                            <!-- Pagination Quantity -->
                            <span id="datatableWithPaginationInfoTotalQty"></span>
                        </div>
                    </div>

                    <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                            <!-- Pagination -->
                            <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                        </div>
                    </div>
                </div>
                <!-- End Pagination -->
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Card -->
    </div>
    <!-- End Content -->

    <script>
        var base_url = "<?= base_url() ?>"

        function itemKecamatan(data, kecamatan) {
            return (data.idKecamatan == kecamatan) ? `<option value="${data.idKecamatan}" selected>${data.nama_kecamatan}</option>` : `<option value="${data.idKecamatan}">${data.nama_kecamatan}</option>`
        }

        $('.btn-edit').click(function() {
            $('#editIdDesa').val($(this).data('id'))
            $('#namaDesa').val($(this).data('nama'))
            var kecamatan = $(this).data('kecamatan')
            var status = $(this).data('status')

            var itemStatus = (status == 'desa') ? `<option value="desa" selected>Desa</option><option value="kelurahan">Kelurahan</option>` : `<option value="desa">Desa</option><option value="kelurahan" selected>Kelurahan</option>`

            $('#editStatus').html(itemStatus)

            fetch(base_url + "Dashboard/Petugas/desa/getKecamatan", {
                    method: 'GET'
                })
                .then(res => res.json())
                .then(res => {
                    var item = ''
                    res.forEach(data => {
                        item += itemKecamatan(data, kecamatan)
                    })
                    $('#kecamatanEdit').html(item)
                })
        })
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#kecamatan').select2();
            $('#kecamatanEdit').select2();

        });
    </script>

</main>