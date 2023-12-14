<?php
if (urlCurrent() == '/') :
?>
    <header class="site-header main">
    <?php else : ?>
        <header class="site-header">
        <?php endif; ?>
        <div class="container header-content">
            <div class="bar">
                <!-- <a class="logo-link" href="/">
                    <img class="logo-img" src="public/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a> -->

                <a class="logo-header" href="/">
                    <span class="title-logo-header">Bienes<span class="fw-700">Raices</span></span>
                </a>

                <button class="panel-btn hamburger hamburger--spring" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

                <?php
                include('navigation.php');
                ?>
            </div>

            <?php if (urlCurrent() == '/') : ?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php endif; ?>

        </div>
        </header>

        <div class="page-container">
            <div class="content-wrap">