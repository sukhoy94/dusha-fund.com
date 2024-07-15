<?php /* Template Name: Documents page */ ?>

<?php get_header();?>

<div class="container">
    <div class="card" style="width: 18rem;">
    <img 
        src="<?php echo get_template_directory_uri() . '/assets/images/documents/status.png'; ?>"
            class="card-img-top" alt="Statut fundacji Dusha">
        <div class="card-body">
            <h5 class="card-title">Statut fundacji</h5>
            <p class="card-text">Statut fundacji DUSHA w jęz. polskim</p>
            <a 
                href="<?php echo get_template_directory_uri() . '/assets/docs/statut_web.pdf'?>" 
                class="btn btn-primary"
                target="_blank"
            >Pobierz dokument</a>
        </div>
    </div>
</div>

<?php get_footer();?>