<?php
use Dompdf\Dompdf;
require 'vendor/autoload.php';

if (isset($_POST['convert'])) {
	$dompfd = new Dompdf();
	$html = $_POST['htmlCode'];
	$dompfd->loadHtml($html);
	$dompfd->setPaper('A4', 'landscape');
	$dompfd->render();
	$dompfd->stream();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<title>PDF Converter</title>
</head>
<body>
    <div style="text-align: center;">
        <form method="POST">
            <div class="form-group">
                <label for="convert">Paste Your HTML Code here ; )
                    <hr>
                    <textarea name="htmlCode" class="form-control" rows="10" cols="40" placeholder="<body>Example..</body>">asd</textarea>
                </label>
            </div>
            <button class="btn btn-primary" type="submit" name="convert" type="submit">Convert To PDF <span class="glyphicon glyphicon-download-alt"></span> </button>
        </form>
    </div>
</body>
</html>
