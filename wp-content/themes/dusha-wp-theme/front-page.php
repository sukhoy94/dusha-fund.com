<?php get_header();?>

    <?php
        $query = new WP_Query([
            'category_name' => 'strona-w-budowie-informacja',
        ]);
    ?>




<section class="front-page-hero height-100 bg-black d-flex align-items-center" id="home">
    <div class="container hero-text-container">
        <div class="row vh-md-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center color-white">
                <?php require ('template-parts/logo-svg.php'); ?>

                <?php
                $query = new WP_Query([
                    'category_name' => 'strona-w-budowie-informacja',
                ]);
                if ( $query->have_posts() ) :
                    ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <h2 class="mt-3"><?php the_title(); ?></h2>
                <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>