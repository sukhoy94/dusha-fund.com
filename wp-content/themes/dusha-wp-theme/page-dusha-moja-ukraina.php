<?php /* Template Name: Dusha moja - Ukraina project */ ?>
<?php get_header(); ?>

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
                        <li class="splide__slide">
                            <img src="https://dusha-project.com/img/participants/new/inna_berezka-min.jpg"
                                class="card-img-top person-image participant-image" alt="">
                            <div class="card-body">
                                <h5 class="card-title person-name text-center">Інна Березка</h5>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <img src="https://dusha-project.com/img/participants/new/inna_berezka-min.jpg"
                                class="card-img-top person-image participant-image" alt="">
                            <div class="card-body">
                                <h5 class="card-title person-name text-center">Інна Березка</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        <?php else: ?>
            <div class="row">
                <!-- inna -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/inna_berezka-min.jpg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Інна Березка</h5>
                    </div>
                </div>

                <!-- oksana kostiuk -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/Oksana Kostiuk-min.jpeg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Оксана Костюк</h5>
                    </div>
                </div>

                <!-- masha -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/Mariia Protsenko-min.jpeg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Марія Проценко</h5>
                    </div>
                </div>

                <!-- daria panasiuk -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/Dariia Panasiuk-min.jpeg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Дарія Панасюк</h5>
                    </div>
                </div>

                <!-- arina -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/Arina Martyniuk-min.jpeg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Аріна Мартинюк</h5>
                    </div>
                </div>

                <!-- alia -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/alia.WEBP"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Аля Михалатюк</h5>
                    </div>
                </div>

                <!-- v nakoneczna -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/vika_nakoneczna.jpeg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Вікторія Наконечна</h5>
                    </div>
                </div>

                <!-- a denysiuk -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/Alina_Denysiuk-min.jpg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Аліна Денисюк</h5>
                    </div>
                </div>

                <!-- v aitbaeva -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/vika-min.jpeg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Вікторія Айтбаєва</h5>
                    </div>
                </div>
                <!-- k konovalova-->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/katia.jpeg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Катерина Коновалова</h5>
                    </div>
                </div>

                <!-- b petryk -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/bogdana_petryk.jpeg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Богдана Петрик</h5>
                    </div>
                </div>
                <!-- k drozdiuk -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/kate_drozdiuk-min.jpeg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Катерина Дроздюк</h5>
                    </div>
                </div>
                <!-- v zdamarova -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/veronika_zdaramova-min.jpeg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Вероніка Ждамарова</h5>
                    </div>
                </div>

                <!-- yuliia romaniuk -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/juliar.jpeg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Юлія Романюк</h5>
                    </div>
                </div>

                <!-- a shymanska -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/anna_szymanska-min.jpeg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Анна Шиманська</h5>
                    </div>
                </div>

                <!-- l bielik -->
                <div class="col-md-3">
                    <img src="https://dusha-project.com/img/participants/new/lana.jpeg"
                        class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center">Лана Бєлік</h5>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>
<!-- participants end -->
<?php get_footer(); ?>