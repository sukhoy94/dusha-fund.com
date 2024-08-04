<?php
get_header();
?>

<div id="primary" class="container color-white pb-9rem">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <h1 class="color-primary page-content-title mt-5"><?php the_title(); ?></h1>
            <div class="page-content">
                <?php the_content(); ?>
            </div>
            <?php
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
