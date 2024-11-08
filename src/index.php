<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compatibility view -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raices</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="public/img/casa.png">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fraunces:wght@300;700&display=swap">
    <!-- CSS Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css" integrity="sha512-+mlclc5Q/eHs49oIOCxnnENudJWuNqX5AogCiqRBgKnpoplPzETg2fkgBFVC6WYUVxYYljuxPNG8RE7yBy1K+g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>
    <?php
    require_once('controller/c_main.php');

    // echo "<pre>";
    // var_dump();
    // echo "<pre>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="public/js/app.js"></script>
    <script src="public/js/ajax.js"></script>
</body>

</html>