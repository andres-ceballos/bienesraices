<?php require_once('functions/functions.php'); ?>

<header class="site-header main">
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
            include('templates/navigation.php');
            ?>
        </div>

        <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
    </div>
</header>

<section class="container section">
    <h2 class="fw-300 text-center">Más Sobre Nosotros</h2>

    <div class="us-icon">
        <div class="icon">
            <img src="public/img/icono1.svg" alt="Icono Seguridad">
            <h3>Seguridad</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Dolorum aperiam sint quisquam, provident repudiandae facilis dolore fuga quam alias autem?
                Nihil et corporis delectus non, doloremque tenetur totam minus alias?
            </p>
        </div>

        <div class="icon">
            <img src="public/img/icono2.svg" alt="Icono Mejor Precio">
            <h3>El Mejor Precio</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Dolorum aperiam sint quisquam, provident repudiandae facilis dolore fuga quam alias autem?
                Nihil et corporis delectus non, doloremque tenetur totam minus alias?
            </p>
        </div>

        <div class="icon">
            <img src="public/img/icono3.svg" alt="Icono a Tiempo">
            <h3>A Tiempo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Dolorum aperiam sint quisquam, provident repudiandae facilis dolore fuga quam alias autem?
                Nihil et corporis delectus non, doloremque tenetur totam minus alias?
            </p>
        </div>
    </div>
</section>

<main class="container section">
    <h2 class="fw-300 text-center">Casas y Depas en Venta</h2>

    <div class="ads-container">
        <?php
        foreach ($array_house as $house) : ?>
            <div class="ad">
                <img src="public/img/<?php echo $house['url_img_house']; ?>" alt="Anuncio">
                <div class="ad-content">
                    <h3><?php echo $house['title_house']; ?></h3>
                    <p>
                        <?php echo $house['description_house']; ?>
                    </p>
                    <p class="price">$<?php echo $house['price_house']; ?></p>
                    <ul class="characteristics-icon">
                        <li>
                            <img src="public/img/icono_dormitorio.svg" alt="Icono">
                            <p><?php echo $house['cant_bedroom_house']; ?></p>
                        </li>
                        <li>
                            <img src="public/img/icono_wc.svg" alt="Icono">
                            <p><?php echo $house['cant_bathroom_house']; ?></p>
                        </li>
                        <li>
                            <img src="public/img/icono_estacionamiento.svg" alt="Icono">
                            <p><?php echo $house['cant_parking_house']; ?></p>
                        </li>
                    </ul>

                    <a href="#" class="btn btn-yellow d-block">Ver Propiedad</a>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

    <div class="all-ads">
        <a href="#" class="btn btn-green">Ver Todas</a>
    </div>
</main>

<section class="img-contact">
    <div class="container contact-content">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>
            Nemo at fugiat vitae voluptatibus, cum eius eveniet adipisci assumenda totam ab laudantium consequuntur saepe tenetur, quibusdam in eligendi dicta officiis suscipit!
        </p>
        <a href="#" class="btn btn-yellow">Contáctanos</a>
    </div>
</section>

<div class="container section lower-section">
    <section class="blog">
        <h3 class="fw-300 text-center">Nuestro Blog</h3>

        <?php foreach ($array_blog as $blog) : ?>
            <article class="blog-post">
                <div class="img">
                    <img src="public/img/<?php echo $blog['url_img_blog']; ?>" alt="Entrada de Blog">
                </div>
                <div class="text-post">
                    <a href="#">
                        <h4><?php echo $blog['title_blog']; ?></h4>
                    </a>
                    <p>Escrito el: <span><?php echo dateFormat($blog['created_at']); ?></span> por: <span><?php echo $blog['name_user']; ?></span> </p>
                    <p>
                        <?php echo $blog['description_blog']; ?>
                    </p>
                </div>
            </article>
        <?php endforeach ?>
    </section>

    <section class="reviews">
        <h3 class="fw-300 text-center">Reseñas</h3>

        <?php foreach ($array_review as $review) : ?>
            <div class="review">
                <blockquote>
                    <?php echo $review['description_review']; ?>
                </blockquote>

                <p>- <?php echo $blog['name_user']; ?></p>
            </div>

        <?php endforeach ?>
    </section>
</div>

<footer class="footer-site section">
    <div class="container footer-container">
        <?php
        include('templates/navigation.php');
        ?>
        <p>Todos los Derechos Reservados &copy;</p>
    </div>
</footer>