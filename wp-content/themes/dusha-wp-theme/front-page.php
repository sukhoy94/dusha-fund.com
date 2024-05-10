<?php get_header();?>

    <?php
        $query = new WP_Query([
            'category_name' => 'front-page-hero-section',
            'posts_per_page' => 1,
        ]);

        $post = $query->posts[0];
    ?>
<section class="front-page-hero d-flex align-items-center" id="home">
    <div class="container hero-text-container">
        <div class="row vh-md-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center color-white">
                <?php if ($post !== null): ?>
                <h1><?=$post->post_title;?></h1>
                <div class="py-2">
                    <?=$post->post_content;?>
                </div>
                <?php else: ?>
                    <?php require ('template-parts/logo-svg.php'); ?>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>