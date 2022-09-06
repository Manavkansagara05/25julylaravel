<?php

if (isset($_POST["C:\Users\ASUS\Downloads\manav.zip"])) {
    $filename="C:\Users\ASUS\Downloads\manav.zip";
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.$file_name.'"');
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_name)); //Absolute URL
    ob_clean();
    flush();
    readfile($file_name); //Absolute URL
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js "></script>

</head>

<body>
    <form method="post">
        <div class="download mt-4">
            <input type="submit" name="download" id="download" class="btn btn-success" value="download">
        </div>

    </form>

</body>

</html>