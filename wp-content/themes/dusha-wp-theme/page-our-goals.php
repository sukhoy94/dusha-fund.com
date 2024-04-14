<?php

get_header();
global $post;

// TODO: move to translation files
//global $locale;
//switch ($locale) {
//    case 'pl_PL':
//        $downloadButtonLabel = 'Pobierz statut fundacji';
//        break;
//    case 'en_GB':
//        $downloadButtonLabel = 'Download foundation statut';
//        break;
//    case 'uk_UK':
//        $downloadButtonLabel = 'Скачати статут фундації';
//        break;
//}

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