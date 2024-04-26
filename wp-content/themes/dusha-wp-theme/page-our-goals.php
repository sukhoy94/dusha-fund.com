<?php /* Template Name: Our goals page */ ?>

<?php

get_header();
global $post;

?>

    <div id="primary" class="container color-white">
        <h1 class="color-primary page-content-title mt-5"><?=$post->post_title?></h1>
        <?=$post->post_content;?>

        <div class="text-center">
            <a target="_blank" class="btn btn-animated-1" href="https://dusha-project.com/docs/statut_web.pdf">
                <span>Pobierz statut fundacji</span>
            </a>
        </div>
    </div><!-- #main -->

<?php
get_sidebar();
get_footer();