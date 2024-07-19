<?php /* Template Name: Documents page */ ?>

<?php 
    get_header();
    global $post;
    $page = get_post($post->ID);
    setup_postdata($page);
?>

<div class="container">
    <div>
        <h1 class="color-white documents-page-title">
            <?php the_title(); ?>
        </h1>
    </div>

    <div class="row d-flex mt-5">
        <div class="text-center col-md-4">
            <div class="card document-card">
                <a 
                    href="<?php echo get_template_directory_uri() . '/assets/docs/statut_web.pdf'?>"
                    target="_blank"
                >
                    <img 
                        src="<?php echo get_template_directory_uri() . '/assets/images/documents/status.png'; ?>"
                        class="card-img-top" 
                        alt="Statut fundacji Dusha"
                    >
                </a>
                
                <div class="card-body">
                    <h5 class="card-title">Statut fundacji</h5>
                    <a 
                        href="<?php echo get_template_directory_uri() . '/assets/docs/statut_web.pdf'?>" 
                        class="btn btn-primary bg-primary no-border"
                        target="_blank"
                    >Pobierz dokument</a>
                </div>
            </div>            
        </div>
        <div class="text-center col-md-4">
            <div class="card document-card">
                <a 
                    href="<?php echo get_template_directory_uri() . '/assets/docs/standardy_ochrony_maloletnich.pdf'; ?>"
                    target="_blank"
                >
                    <img 
                        src="<?php echo get_template_directory_uri() . '/assets/images/documents/standardy_ochrony_maloletnich.png'; ?>"
                        class="card-img-top" 
                        alt="Statut fundacji Dusha"
                    >
                </a>
                
                <div class="card-body">
                    <h5 class="card-title">Standardy ochrony małoletnich</h5>
                    <a 
                        href="<?php echo get_template_directory_uri() . '/assets/docs/standardy_ochrony_maloletnich.pdf'?>" 
                        class="btn btn-primary bg-primary no-border"
                        target="_blank"
                    >Pobierz dokument</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    wp_reset_postdata();
    get_footer();
?>