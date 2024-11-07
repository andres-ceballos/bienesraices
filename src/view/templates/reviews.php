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