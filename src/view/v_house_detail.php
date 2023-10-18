<?php
require_once('functions/functions.php');
include_once('templates/header.php');
?>
<section class="ad-img-background">

    <div class="container section content-center">

        <div class="btn-return">
            <a href="anuncios/" class="btn btn-green">Regresar</a>
        </div>

        <h1 class="fw-300 text-center"><?php echo $detail_house['title_house']; ?></h1>

        <img class="ad-img" src="public/img/<?php echo $detail_house['url_img_house']; ?>" alt="Anuncio <?php echo $detail_house['title_house']; ?>">

        <div class="ad-resume">
            <p class="price">$ <?php echo formatMoneyNumber($detail_house['price_house']); ?></p>
            <ul class="characteristics-icon">
                <li>
                    <img src="public/img/icono_dormitorio.svg" alt="Icono">
                    <p>
                        <?php echo $detail_house['cant_bedroom_house']; ?>
                    </p>
                </li>
                <li>
                    <img src="public/img/icono_wc.svg" alt="Icono">
                    <p>
                        <?php echo $detail_house['cant_bathroom_house']; ?>
                    </p>
                </li>
                <li>
                    <img src="public/img/icono_estacionamiento.svg" alt="Icono">
                    <p>
                        <?php echo $detail_house['cant_parking_house']; ?>
                    </p>
                </li>
            </ul>
        </div>

        <p>
            <?php echo $detail_house['description_house']; ?>
        </p>
    </div>
</section>

<?php
include_once('templates/footer.php');
