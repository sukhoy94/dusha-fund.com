<?php /* Template Name: Dusha moja - Ukraina project */ ?>
<?php get_header(); ?>
<?php require_once("backend/DushaMojaUkraina.php"); ?>
<!-- hero start -->
<section class="bg-hero d-flex align-items-center" id="home">
    <div class="container hero-text-container">
        <div class="row vh-md-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                <h1 class="heading-black text-capitalize">
                    Душа моя - Україна
                </h1>
                <p class="lead py-3">Розвиток культури, інтеграція в європейське суспільство через мистецтво та
                    обʼєднання</p>
            </div>
        </div>
    </div>
</section>
<!-- hero end -->

<!-- mission start -->
<section class="section-angle top-left bottom-left pb-5 pt-5 mission-wrapper" id="charity">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto text-center">
                <h2 class="heading-black color-pink">
                    Місія
                </h2>
                <p class="mission-description">

                    Проєкт "Душа моя - Україна" має на меті об'єднати молодь яка прагне підтримати Україну в складний
                    період її історії. Ми віримо, що мистецтво має силу з'єднати серця та душі людей, тому
                    використовуємо
                    його як інструмент, щоб нагадати світові про війну в Україні та підтримку її майбутнього.

                </p>
            </div>
        </div>

        <div class="row">
            <div class="mx-auto mb-3">
                <ul class="mission-tags">
                    <li>#dusha</li>
                    <li>#duszamojaUkraina</li>
                    <li>#dushaoncanvas</li>
                    <li>#dushaonplener</li>
                    <li>#dushateams</li>
                    <li>#dushainproсes</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mission-type mb-3">
                <div class="row">
                    <div class="mission-slogan col-lg-3 col-md-4 d-flex align-self-center">
                        <h4 class="color-pink mb-0">
                            Об’єднуємо
                        </h4>
                    </div>
                    <div class="mission-slogan-content col-md-8 col-lg-9 d-flex">
                        <p class="mb-0">
                            ініціативну молодь задля спільної мети, даючи кожному простір на розвиток своїх здібностей
                            та талантів.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mission-type mb-3">
                <div class="row">
                    <div class="mission-slogan col-lg-3 col-md-4 d-flex align-self-center">
                        <h4 class="color-pink mb-0">
                            Підтримуємо
                        </h4>
                    </div>
                    <div class="mission-slogan-content col-md-8 col-lg-9 d-flex">
                        <p class="mb-0">
                            культуру, плекаючи всім відоме, додаючи до нього своє та відкриваючи нове.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mission-type mb-3">
                <div class="row">
                    <div class="mission-slogan col-lg-3 col-md-4 d-flex align-self-center">
                        <h4 class="color-pink mb-0">
                            Допомагаємо
                        </h4>
                    </div>
                    <div class="mission-slogan-content col-md-8 col-lg-9 d-flex">
                        <p class="mb-0">
                            постраждалим від війни в Україні. Нагадуємо світові про війну, що триває до сьогодні, і
                            людей, що досі потребують нашої допомоги.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- mission stop -->

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

        <?php if (wp_is_mobile()): ?>
            <section class="splide participants-slider">
                <div class="splide__track">
                    <ul class="splide__list">
                         <!-- inna -->
                        <li class="splide__slide">
                            <img src="https://dusha-project.com/img/participants/new/inna_berezka-min.jpg"
                                class="card-img-top person-image participant-image" alt="">
                            <div class="card-body">
                                <h5 class="card-title person-name text-center">Інна Березка</h5>
                            </div>
                        </li>

                        <!-- oksana kostiuk -->
                        <li class="splide__slide">
                            <img src="https://dusha-project.com/img/participants/new/Oksana Kostiuk-min.jpeg"
                                class="card-img-top person-image participant-image" alt="">
                            <div class="card-body">
                                <h5 class="card-title person-name text-center">Оксана Костюк</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        <?php else: ?>
            <div class="row">
            <?php foreach ($participants as $participant) :?>
                <div class="col-md-3">
                    <img src="<?php echo esc_url($participant['imageSrc']); ?>" class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center"><?php echo esc_html($participant['name']); ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>
<!-- participants end -->
<?php get_footer(); ?>