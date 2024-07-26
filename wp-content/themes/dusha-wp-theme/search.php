<?php get_header();?>

<div class="container color-white posts-wrapper">
    <h1 class="text-center mt-5">
        Wyniki wyszukiwania: 
    </h1>

    <article class="pt-2 text-center">
        <?php echo category_description(); ?>
    </article>

    <div class="row posts-list mt-5">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-12 post-item">
            <h2>
                <a href="<?php the_permalink();?>">
                    <?php the_title();?>
                </a>
            </h2>

            <article>
                <?php the_excerpt();?>
            </article>

            <a 
                class="btn read-more"
                href="<?php the_permalink();?>"
            >
                Czytaj dalej
            </a>
            </div>
        <?php endwhile;?> 

        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item previous-posts-link">
                    <?php previous_posts_link( 'Nowsze wpisy' ); ?>
                </li>
                
                <li class="page-item next-posts-link">
                    <?php next_posts_link('Starsze wpisy'); ?>
                </li>
            </ul>
        </nav>
        
        <?php else : ?>
            <p><?php esc_html_e( 'Uszanowanko, nic nie znaleziono' ); ?></p>
        <?php endif; ?>     
    </div>
</div>

<?php get_footer();?>