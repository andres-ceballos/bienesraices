<?php
require_once('functions/functions.php');
include_once('templates/header.php');
?>

<h1 class="fw-300 text-center"><?php echo $detail_house['title_house']; ?></h1>

<div class="ad-img-background">
    <div class="container content-center">
        <img class="ad-img" src="public/img/<?php echo $detail_house['url_img_house']; ?>" alt="Anuncio">
    </div>
</div>

<main class="container section content-center">
    <div class="ad-resume">
        <p class="price"><?php echo $detail_house['price_house']; ?></p>
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
</main>

<?php
include_once('templates/footer.php');
