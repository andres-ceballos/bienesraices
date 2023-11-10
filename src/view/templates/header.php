<?php
if (urlCurrent() == '/') :
?>
    <header class="site-header main">
    <?php else : ?>
        <header class="site-header">
        <?php endif; ?>
        <div class="container header-content">
            <div class="bar">
                <a class="logo" href="/">
                    <img src="public/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>

                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="menu-button-container">
                    <div class="menu-button"></div>
                </label>
                <?php
                include('navigation.php');
                ?>
            </div>

            <?php if (urlCurrent() == '/') : ?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php endif; ?>

        </div>
        </header>