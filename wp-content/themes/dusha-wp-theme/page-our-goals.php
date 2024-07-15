<?php /* Template Name: Our goals page */ ?>

<?php

get_header();
global $post;

?>

    <div id="primary" class="container color-white pb-9rem">
        <h1 class="color-primary page-content-title mt-5"><?=$post->post_title?></h1>
        <?=$post->post_content;?>

    </div><!-- #main -->

<?php
wp_reset_postdata();
get_sidebar();
get_footer();