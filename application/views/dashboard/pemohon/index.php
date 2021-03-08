<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Halaman Pemohon</h1>
                </div>
                <div class="col-sm-auto">
                    <a class="btn btn-primary" href="<?= base_url('Dashboard/Petugas/Pemohon/store') ?>">
                        <i class="tio-add-circle"></i>
                        Tambah Pemohon
                    </a>
                </div>


            </div>
        </div>

        <!-- Card -->
        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <div class="card h-100">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2">Total Pemohon</h6>

                    <div class="row align-items-center gx-2">
                        <div class="col">
                            <span class="js-counter display-4 text-dark"><?= count($pemohon); ?></span>
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
                                <input id="datatableSearch" type="search" autocomplete="off" class="form-control" placeholder="Cari Pemohon">
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
                            <th>Nama Pemohon</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pemohon as $p) :

                        ?>

                            <tr role="row" class="even">
                                <td>
                                    <?= $no; ?> </td>
                                <td><?= $p->nama; ?></td>
                                <td><?= $p->nik; ?></td>
                                <td><?= $p->alamat; ?></td>
                                <td><?= $p->pekerjaan; ?></td>
                                <td><?= $p->umur . " tahun"; ?></td>
                                <td><?= $p->jenis_kelamin; ?></td>
                                <td>
                                    <a href="" class="badge badge-soft-success p-2 btn-edit">
                                        <i class=" tio-edit"></i>
                                        Edit</a>
                                    <a href="<?= base_url('Dashboard/Petugas/Kecamatan/delete/' . $p->idPemohon) ?>" class="badge badge-soft-danger p-2 sweetalert" data-toggle="modal">
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


</main>