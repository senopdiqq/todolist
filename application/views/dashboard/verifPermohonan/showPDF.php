<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berkas</title>

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #viewpdf {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            /* height: 50rem; */
        }
    </style>
</head>

<body>
    <div id="viewpdf">

    </div>

    <script src="<?= base_url('assets/js/jquery-3.4.1.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/pdfobject.js') ?>"></script>

    <script>
        var viewer = $('#viewpdf');
        PDFObject.embed("<?= base_url('assets/img/foto_berkas/' . $pdf) ?>", viewer);
    </script>
</body>

</html>