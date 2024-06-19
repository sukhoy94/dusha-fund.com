<?php if (wp_is_mobile()): ?>
            <section class="splide participants-slider">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php  foreach (DushaMojaUkraina::getParticipants() as $participant) :?>
                        <li class="splide__slide">
                            <img src="<?php echo esc_url($participant['imageSrc']); ?>" class="card-img-top person-image participant-image" alt="">
                            <div class="card-body">
                                <h5 class="card-title person-name text-center"><?php echo esc_html($participant['name']); ?></h5>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </section>
        <?php else: ?>
            <div class="row">
            <?php foreach (DushaMojaUkraina::getParticipants() as $participant) :?>
                <div class="col-md-3">
                    <img src="<?php echo esc_url($participant['imageSrc']); ?>" class="card-img-top person-image participant-image" alt="">
                    <div class="card-body">
                        <h5 class="card-title person-name text-center"><?php echo esc_html($participant['name']); ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>