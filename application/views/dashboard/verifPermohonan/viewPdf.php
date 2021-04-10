<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berkas</title>

    <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.6.347/build/pdf.min.js"></script>
</head>

<body>

    <canvas id="pdf-container"></canvas>


    <script>
        pdfjsLib.getDocument("<?= base_url('assets/img/foto_berkas/' . $pdf) ?>").then(doc => {
            console.log(doc._pdfInfo.numPages + " pages")

            doc.getPage(1).then(page => {
                var container = document.getElementById('pdf-container');
                var context = container.getContext('2d');

                var viewport = pafe.getViewport(1);
                container.width = viewport.width
                container.height = viewport.height

                page.render({
                    canvasContext: context,
                    viewport: viewport
                })
            });
        });
    </script>
</body>

</html>