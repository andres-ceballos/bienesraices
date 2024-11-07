<main class="container section">
    <h2 class="fw-300 text-center">Casas y Depas en Venta</h2>

    <div class="ads-container">
        <?php
        foreach ($array_ad as $ad) : ?>
            <div class="ad">
                <img src="public/img/<?php echo $ad['url_img_ad']; ?>" alt="Anuncio <?php echo $ad['title_ad']; ?>">
                <div class="ad-content">
                    <h3 class="ellipsis-1">
                        <?php echo $ad['title_ad']; ?>
                    </h3>
                    <p class="ellipsis-3">
                        <?php echo $ad['description_ad']; ?>
                    </p>
                    <p class="price">$
                        <?php echo formatMoneyNumber($ad['price_ad']); ?>
                    </p>
                    <ul class="characteristics-icon">
                        <li>
                            <img src="public/img/icono_dormitorio.svg" alt="Icono">
                            <p>
                                <?php echo $ad['cant_bedroom_ad']; ?>
                            </p>
                        </li>
                        <li>
                            <img src="public/img/icono_wc.svg" alt="Icono">
                            <p>
                                <?php echo $ad['cant_bathroom_ad']; ?>
                            </p>
                        </li>
                        <li>
                            <img src="public/img/icono_estacionamiento.svg" alt="Icono">
                            <p>
                                <?php echo $ad['cant_parking_ad']; ?>
                            </p>
                        </li>
                    </ul>

                    <a href="anuncios/detalle/<?php echo $ad['id_ad']; ?>" class="btn btn-yellow d-block">Ver Propiedad</a>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

        <div class="all-ads">
            <a href="anuncios/" class="btn btn-green">Ver Todas</a>
        </div>
</main>