<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/icon-set/style.css') ?>">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?= base_url('assets/css/theme.min.css') ?>">
    <title>Bukti Verifikasi Berkas Tanah</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <table class="mt-5 mr-auto ml-auto" border="0">
                <tr>
                    <td><img style="min-width: 2.5rem;max-width: 5.5rem;" src="<?= base_url('assets/img/foto_user/' . $profil->foto) ?>"></td>
                    <td class="text-center">
                        <h1><?= $profil->nama ?></h1>
                        <h2><?= $profil->alamat ?></h2>
                        <h4>
                            <i class="tio-call"></i> <?= $profil->no_telp ?>
                            <i class="tio-email"></i> <?= $profil->email ?>

                        </h4>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
            </table>

        </div>
        <div class="row">
            <table class="mt-5 mr-auto ml-auto" border="0">
                <tr>
                    <td class="text-center">
                        <h1><u>SURAT KETERANGAN PENDAFTARAN TANAH</u></h1>
                        <h4>
                            No Berkas : <?= $cetak->nomor_berkas ?>

                        </h4>
                    </td>
                </tr>
            </table>
        </div>

        <div class="row mt-5">
            <table class="mt-5 ml-10 mr-auto" border="0" align="left">
                <tr>
                    <td>
                        <h4><?= $profil->nama . " menerangkan bahwa : " ?></h4>
                    </td>
                </tr>
            </table>
        </div>
        <div class="row mt-3 ml-5">
            <table class="ml-10 mr-auto" border="0" align="left">
                <thead>
                    <tr>
                        <td class="text-left">
                            <p class="text-dark">1. Sebidang tanah terletak di : </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-dark ml-5">Alamat</p>
                        </td>
                        <td>
                            <p class="text-dark ml-5">: <?= $cetak->letak_tanah ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-dark ml-5">Desa</p>
                        </td>
                        <td>
                            <p class="text-dark ml-5">: <?= $cetak->nama_desa ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-dark ml-5">RT / RW</p>
                        </td>
                        <td>
                            <p class="text-dark ml-5">: <?= $cetak->rt ?> / <?= $cetak->rw ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-dark ml-5">NIB</p>
                        </td>
                        <td>
                            <p class="text-dark ml-5">: <?= $cetak->nib ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-dark ml-5">Luas Tanah</p>
                        </td>
                        <td>
                            <p class="text-dark ml-5">: <?= $cetak->luas_tanah ?> m<sup style="right: 0;">2</sup></p>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="row mt-3 ml-5">
            <table class="ml-10 mr-auto" border="0" align="left">
                <thead>
                    <tr>
                        <td class="text-left">
                            <p class="text-dark">2. Diterbitkan atas permohonan : </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-dark ml-5">NIK</p>
                        </td>
                        <td>
                            <p class="text-dark ml-3">: <?= $cetak->nik ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-dark ml-5">Nama Pemohon</p>
                        </td>
                        <td>
                            <p class="text-dark ml-3">: <?= $cetak->nama ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-dark ml-5">Pekerjaan</p>
                        </td>
                        <td>
                            <p class="text-dark ml-3">: <?= $cetak->pekerjaan ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="text-dark ml-5">Alamat</p>
                        </td>
                        <td>
                            <p class="text-dark ml-3">: <?= $cetak->alamat ?></p>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p class="text-dark ml-5">Jenis Kelamin</p>
                        </td>
                        <td>
                            <p class="text-dark ml-3">: <?= $cetak->jenis_kelamin ?></p>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="row mt-3 ml-5">
            <table class="ml-10 mr-auto" border="0" align="left">
                <thead>
                    <tr>
                        <td class="text-left">
                            <p class="text-dark">3. Untuk Keperluan : <b>PERIZINAN</b> </p>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="row mt-3 ml-5">
            <table class="ml-10 mr-auto" border="0" align="left">
                <thead>
                    <tr>
                        <td class="text-left">
                            <p class="text-dark">4. Surat Keterangan Pendaftaran Tanah ini bukan merupakan Tanda Bukti Hak Atas Tanah</p>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="row mt-8 ml-8">
            <table class="ml-10 mr-auto" border="0" align="left">
                <thead>
                    <tr>
                        <td class="text-left font-italic">
                            <p class="text-dark">Informasi ini valid selama 7 hari kalender sejak diterbitkan</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left font-italic">
                            <p class="text-dark">Diterbitkan pada tanggal <?= date('d M Y') ?> pukul <?= date('H:i:s') ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left font-italic">
                            <p class="text-dark">Lokasi bidang tanah dapat dicek melalui aplikasi 'Sentuh Tanahku'</p>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="row mt-3 ml-5">
            <table class="ml-auto" border="0" align="right">
                <thead>
                    <tr>
                        <td class="text-center">
                            <p class="text-dark">Malang,<?= date('d M Y') ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <p class="text-dark mt-6">_________________</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <p class="text-dark mt-6"><?= $this->session->userdata('nama') ?></p>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

</body>

</html>

<script>
    window.print();
</script>