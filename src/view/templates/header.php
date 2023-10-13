<?php
if (urlCurrent() == '/') :
?>
    <header class="site-header main">
    <?php else : ?>
        <header class="site-header">
        <?php endif; ?>
        <div class="container header-content">
            <div class="bar">
                <a href="/">
                    <img src="public/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <a href="#navigation">
                        <img src="public/img/barras.svg" alt="Icono menu">
                    </a>
                </div>

                <?php
                include('navigation.php');
                ?>
            </div>

            <?php if (urlCurrent() == '/') : ?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php endif; ?>

        </div>
        </header>