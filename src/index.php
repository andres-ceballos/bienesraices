<?php ob_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compatibility view -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raíces</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="public/img/casa.png">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900">
    <!-- CSS Styles -->
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="public/js/ajax.js"></script>
</body>

</html>