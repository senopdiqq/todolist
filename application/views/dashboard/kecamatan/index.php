<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">TO DO LIST</h1>
                </div>
                <div class="col-sm-auto">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#ModalTambah">
                        <i class="tio-add-circle"></i>
                        Tambah Tugas
                    </button>
                </div>

                <!-- Modal Tambah -->
                <div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Tugas</h5>
                                <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                                    <i class="tio-clear tio-lg"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url("Dashboard/Petugas/kecamatan/store") ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nama_kecamatan" class="control-label">Deskripsi Tugas yang akan dikerjakan</label>
                                        <input type="text" class="form-control" autocomplete="off" name="nama_kecamatan">
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
                    <h6 class="card-subtitle mb-2">Total Tugas</h6>

                    <div class="row align-items-center gx-2">
                        <div class="col">
                            <span class="js-counter display-4 text-dark"><?= count($kecamatan); ?></span>
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
                                <input id="datatableSearch" type="search" autocomplete="off" class="form-control" placeholder="Cari Tugas">
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
                            <th>Deskripsi Tugas</th>
                            <th>Aksi</th>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($kecamatan as $p) :

                        ?>

                            <tr role="row" class="even">
                                <td>
                                    <?= $no; ?> </td>
                                <td><?= $p->nama_kecamatan; ?></td>
                                <td>
                                    <a href="" class="badge badge-soft-success p-2 btn-edit" data-nama="<?= $p->nama_kecamatan ?>" data-id="<?= $p->idKecamatan ?>" data-toggle="modal" data-target="#ModalEdit">
                                        <i class=" tio-edit"></i>
                                        Edit</a>
                                    <a href="<?= base_url('Dashboard/Petugas/Kecamatan/delete/' . $p->idKecamatan) ?>"class="badge badge-soft-danger p-2 sweetalert" data-toggle="modal">
                                        <i class="tio-delete"></i> Tugas Selesai !
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
                            <h5 class="modal-title" id="exampleModalLabel">Edit Tugas</h5>
                            <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                                <i class="tio-clear tio-lg"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url("Dashboard/Petugas/Kecamatan/update") ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="idKecamatan" id="editIdKecamatan">
                                <div class="form-group">
                                    <label for="nama_kecamatan" class="control-label">Deskripsi Tugas yang akan dikerjakan</label>
                                    <input type="text" id="editKecamatan" class="form-control" autocomplete="off" name="nama_kecamatan">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="tambah" class="btn btn-success">
                                <i class="tio-edit"></i>
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
        $('.btn-edit').click(function() {
            $('#editIdKecamatan').val($(this).data('id'))
            $('#editKecamatan').val($(this).data('nama'))
        })
    </script>

</main>