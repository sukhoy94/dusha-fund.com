<?php
    get_header();
    global $post;
    $event = $post;
    $eventMetadata = get_post_custom($event->ID);
?>

    <div id="primary" class="container color-white pb-9rem">
        <h1 class="color-primary page-content-title mt-5"><?=$event->post_title?></h1>

        <div class="event-metadata">
            <?php if (isset($eventMetadata['places_remaining'])):?>
                <p>pozostało miejsc: <?php echo $eventMetadata['places_remaining'][0];?></p>
            <?php endif;?>
            <?php if (isset($eventMetadata['date'])):?>
                <p class="event-date">Kiedy? - <?php echo $eventMetadata['date'][0];?></p>
            <?php endif;?>
            <?php if (isset($eventMetadata['place'])):?>
                <p class="event-place">Gdzie? - <?php echo $eventMetadata['place'][0];?></p>
            <?php endif;?>

            <?php if (isset($eventMetadata['price'])):?>
                <p class="event-place">Cena - <?php echo $eventMetadata['price'][0];?></p>
            <?php endif;?>
        </div>

        <?=$event->post_content;?>
    </div><!-- #main -->

<?php
get_sidebar();
get_footer();
