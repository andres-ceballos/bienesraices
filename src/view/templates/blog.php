<section class="blog">
    <h2 class="fw-300 text-center">Nuestro Blog</h2>

    <?php foreach ($array_blog as $blog) : ?>
        <article class="blog-post">
            <div class="img">
                <img src="public/img/<?php echo $blog['url_img_blog']; ?>" alt="Entrada de Blog">
            </div>
            <div class="text-post">
                <a href="blog/detalle/<?php echo $blog['id_blog']; ?>">
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