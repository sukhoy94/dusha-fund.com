<?php /* Template Name: events page */ ?>

<?php
get_header();


$query = new WP_Query([
    'category_name' => 'events',
    'posts_per_page' => 10,
]);

$events = $query->posts;
?>

<div class="container">
    <div class="row justify-content-evenly">
        <?php foreach ($events as $event): ?>
            <div class="col-4 event-wrapper color-white">
                <div class="event-header">
                    <h3><a href=""><?php echo $event->post_title; ?></a></h3>
                    <span>pozostało miejsc: 10</span>
                </div>
                <p class="event-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet autem blanditiis, consequuntur dignissimos ex fugit, illo inventore
                    laboriosam magni necessitatibus nihil obcaecati, officiis optio placeat provident sit voluptas voluptatem!
                </p>
                <div class="event-date-and-place">
                    <span class="event-date">When? - 01.04.2024 12:00</span>
                    <span class="event-place">Where? - Restauracja Bona, Lublin</span>
                </div>
                <a href="" class="btn event-link">
                    szczegóły
                </a>
            </div>
        <?php endforeach;?>
    </div>
</div>

<?php
get_sidebar();
get_footer();
