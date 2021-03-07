<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Halaman Hak Akses</h1>
                </div>
                <div class="col-sm-auto">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#ModalRole">
                        <i class="tio-add-circle"></i>
                        Tambah Hak Akses
                    </button>
                </div>

                <!-- Modal Tambah -->
                <div class="modal fade" id="ModalRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Hak Akses</h5>
                                <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                                    <i class="tio-clear tio-lg"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url("Dashboard/Admin/hakAkses/store") ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nama_role" class="control-label">Nama Hak Akses</label>
                                        <input type="text" class="form-control" autocomplete="off" name="nama_role">
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
                                <input id="datatableSearch" type="search" autocomplete="off" class="form-control" placeholder="Cari Hak Akses">
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
                            <th>Hak Akses</th>
                            <th>
                                <center>Aksi</center>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($role as $p) :

                        ?>

                            <tr role="row" class="even">
                                <td>
                                    <?= $no; ?> </td>
                                <td><?= $p->nama_role; ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('') ?>" class="badge badge-soft-success p-2 btn-edit" data-nama="<?= $p->nama_role ?>" data-id="<?= $p->idRole ?>" data-toggle="modal" data-target="#ModalEdit">
                                        <i class=" tio-edit"></i>
                                        Edit</a>
                                    <a href="<?= base_url('Dashboard/Admin/hakAkses/delete/'.$p->idRole) ?>" class="badge badge-soft-danger p-2 alertAktivasi sweetalert" data-toggle="modal">
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
                            <form action="<?= base_url("Dashboard/Admin/hakAkses/update") ?>" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id_role" id="editIdRole">
                                    <div class="form-group">
                                        <label for="nama_role" class="control-label">Nama Hak Akses</label>
                                        <input type="text" id="editRole" class="form-control" autocomplete="off" name="nama_role">
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
        $('.btn-edit').click(function() {
            $('#editIdRole').val($(this).data('id'))
            $('#editRole').val($(this).data('nama'))
        })

        $('.btn-hapus').click(function(){
            $('#idRole').val($(this).data('id'))
        })
    </script>

</main>