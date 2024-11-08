<?php
include_once('templates/header.php');
?>

<section class="container container-detail section content-center">

    <div class="btn-return">
        <a href="anuncios/" class="btn btn-green">Regresar</a>
    </div>

    <h2 class="fw-300 text-center"><?php echo $detail_ad['title_ad']; ?></h2>

    <img src="public/img/<?php echo $detail_ad['url_img_ad']; ?>" alt="Anuncio <?php echo $detail_ad['title_ad']; ?>">

    <div class="ad-resume">
        <p class="price">$ <?php echo formatMoneyNumber($detail_ad['price_ad']); ?></p>
        <ul class="characteristics-icon">
            <li>
                <img src="public/img/icono_dormitorio.svg" alt="Icono">
                <p>
                    <?php echo $detail_ad['cant_bedroom_ad']; ?>
                </p>
            </li>
            <li>
                <img src="public/img/icono_wc.svg" alt="Icono">
                <p>
                    <?php echo $detail_ad['cant_bathroom_ad']; ?>
                </p>
            </li>
            <li>
                <img src="public/img/icono_estacionamiento.svg" alt="Icono">
                <p>
                    <?php echo $detail_ad['cant_parking_ad']; ?>
                </p>
            </li>
        </ul>
    </div>

    <p>
        <?php echo $detail_ad['description_ad']; ?>
    </p>
</section>

<?php
include_once('templates/footer.php');