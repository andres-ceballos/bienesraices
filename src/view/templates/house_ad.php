<main class="container section">
    <h2 class="fw-300 text-center">Casas y Depas en Venta</h2>

    <div class="ads-container">
        <?php
        foreach ($array_house as $house) : ?>
            <div class="ad">
                <img src="public/img/<?php echo $house['url_img_house']; ?>" alt="Anuncio">
                <div class="ad-content">
                    <h3>
                        <?php echo $house['title_house']; ?>
                    </h3>
                    <p>
                        <?php echo $house['description_house']; ?>
                    </p>
                    <p class="price">$
                        <?php echo formatMoneyNumber($house['price_house']); ?>
                    </p>
                    <ul class="characteristics-icon">
                        <li>
                            <img src="public/img/icono_dormitorio.svg" alt="Icono">
                            <p>
                                <?php echo $house['cant_bedroom_house']; ?>
                            </p>
                        </li>
                        <li>
                            <img src="public/img/icono_wc.svg" alt="Icono">
                            <p>
                                <?php echo $house['cant_bathroom_house']; ?>
                            </p>
                        </li>
                        <li>
                            <img src="public/img/icono_estacionamiento.svg" alt="Icono">
                            <p>
                                <?php echo $house['cant_parking_house']; ?>
                            </p>
                        </li>
                    </ul>

                    <a href="anuncios/detalle/<?php echo $house['id_house']; ?>" class="btn btn-yellow d-block">Ver Propiedad</a>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

    <?php if (urlCurrent() == '/') : ?>
        <div class="all-ads">
            <a href="anuncios/" class="btn btn-green">Ver Todas</a>
        </div>
    <?php endif; ?>
</main>