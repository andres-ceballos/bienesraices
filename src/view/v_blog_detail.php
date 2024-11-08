<?php
include_once('templates/header.php');
?>

<section class="container container-detail section content-center">

    <div class="btn-return">
        <a href="blog/" class="btn btn-green">Regresar</a>
    </div>

    <h1 class="fw-300 text-center"><?php echo $detail_blog['title_blog']; ?></h1>

    <div class="text-center">
        <img class="text-center" src="public/img/<?php echo $detail_blog['url_img_blog']; ?>" alt="Blog <?php echo $detail_blog['title_blog']; ?>">
    </div>

    <div class="text-post">
        <p>Escrito el: <span><?php echo dateFormat($detail_blog['created_at']); ?></span> por: <span><?php echo $detail_blog['name_user']; ?></span> </p>
        <p>
            <?php echo $detail_blog['description_blog']; ?>
        </p>
    </div>
</section>

<?php
include_once('templates/footer.php');
