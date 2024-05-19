<?php
get_header();
$events = (new WP_Query([
    'category_name' => 'events-pl',
    'posts_per_page' => 10,
]))->posts;
?>

<div class="container">
    <div class="row justify-content-evenly">
        <?php foreach ($events as $event): ?>
            <?php
                $eventMetadata = get_post_custom($event->ID);
            ?>
            <div class="col-4 event-wrapper color-white">
                <div class="event-header">
                    <h3><a href=""><?php echo $event->post_title; ?></a></h3>
                    <?php if (isset($eventMetadata['places_remaining'])):?>
                    <span>pozostało miejsc: <?php echo $eventMetadata['places_remaining'][0];?></span>
                    <?php endif;?>

                    <?php if (isset($eventMetadata['price'])):?>
                        <p>Cena - <?php echo $eventMetadata['price'][0];?></p>
                    <?php endif;?>
                </div>
                <?php if (!empty($event->post_excerpt)): ?>
                <p class="event-description">
                    <?php echo $event->post_excerpt;?>
                </p>
                <?php endif;?>
                <div class="event-date-and-place">
                    <?php if (isset($eventMetadata['date'])):?>
                        <span class="event-date">Kiedy? - <?php echo $eventMetadata['date'][0];?></span>
                    <?php endif;?>
                    <?php if (isset($eventMetadata['place'])):?>
                        <span class="event-place">Gdzie? - <?php echo $eventMetadata['place'][0];?></span>
                    <?php endif;?>
                </div>
                <a href="<?php echo get_permalink($event); ?>" class="btn event-link">
                    szczegóły
                </a>
            </div>
        <?php endforeach;?>
    </div>
</div>

<?php
get_sidebar();
get_footer();
