<!doctype html>
<html lang="fr_FR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/vendor/bootstrap.min.css?5.1.1" rel="stylesheet">
    <link href="/vendor/bootstrap-icons.css?1.5.0" rel="stylesheet">
    <title>Signature PDF</title>
</head>
<body>
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold"><i class="bi bi-vector-pen"></i> Signer un PDF</h1>
        <div class="col-lg-3 mx-auto">
            <form id="form_pdf_upload" action="/upload" method="POST" class="row g-3" enctype="multipart/form-data">
                <div class="col-12">
                  <label for="formFileLg" class="form-label">Choisir un PDF</label>
                  <input id="input_pdf_upload" class="form-control form-control-lg" name="pdf" type="file">
                </div>
                <div class="col-12">
                    <div class="d-grid gap-2">
                        <button class="btn btn-light" type="submit" id="save"><i class="bi bi-upload"></i> Transmettre le PDF</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('input_pdf_upload').addEventListener('change', function(event) {
            document.getElementById('form_pdf_upload').submit();
        });
    </script>
</body>
</html>