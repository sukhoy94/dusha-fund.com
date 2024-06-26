<?php /* Template Name: Dusha moja - Ukraina project */ ?>
<?php get_header(); ?>
<?php require_once("backend/DushaMojaUkraina.php"); ?>
<?php require_once(get_template_directory(  ) . "/inc/dusha-moja-ukraina/hero.php"); ?>
<?php require_once(get_template_directory(  ) . "/inc/dusha-moja-ukraina/mission.php"); ?>

<!-- participants start -->
<section class="pt-5 pb-5 participants-wrapper" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h2 class="heading-black" style="color: #fff">
                    Учасники
                </h2>
            </div>
        </div>
        
        <?php require_once(get_template_directory(  ) . "/inc/dusha-moja-ukraina/participants.php"); ?>
    </div>
</section>
<!-- participants end -->

<?php get_footer(); ?>