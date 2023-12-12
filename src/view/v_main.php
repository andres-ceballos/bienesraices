<?php
include_once('templates/header.php');
include_once('templates/about_us.php');
include_once('templates/ad_content.php');
?>

<section class="img-contact">
    <div class="container contact-content">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>
            Nemo at fugiat vitae voluptatibus, cum eius eveniet adipisci assumenda totam ab laudantium consequuntur saepe tenetur, quibusdam in eligendi dicta officiis suscipit!
        </p>
        <a href="contact/" class="btn btn-yellow">Contáctanos</a>
    </div>
</section>

<div class="container section lower-section">

    <?php include_once('templates/blog.php'); ?>

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

<?php include_once('templates/footer.php'); ?>