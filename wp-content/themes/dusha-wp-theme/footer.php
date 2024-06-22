<?php
    $socialLinksCollection = [
        [
            'css-class' => 'fa-tiktok',
            'href' => 'https://www.tiktok.com/@artdushaprojekt',
        ],
        [
            'css-class' => 'fa-instagram',
            'href' => 'https://www.instagram.com/fundacja_dusha/',
        ],
        [
            'css-class' => 'fa-facebook',
            'href' => 'https://m.facebook.com/DuszaArtProjekt',
        ],
        [
            'css-class' => 'fa-youtube',
            'href' => 'https://www.youtube.com/@ArtProject-Dusha',
        ],
        [
            'css-class' => 'fa-telegram',
            'href' => 'https://t.me/dusha_moja_ukraina',
        ],
        [
            'css-class' => 'fa-pinterest',
            'href' => 'https://pl.pinterest.com/ArtProjectDUSHA/'
        ],
    ];
?>

<ul class="social-links-list">
    <?php foreach($socialLinksCollection as $socialLink): ?>
        <li class="ms-3"> e
            <a class="social-link" target="_blank" href="<?=$socialLink['href'];?>">
                <i class="fa-brands <?=$socialLink['css-class']?>"></i>
            </a>
        </li>
    <?php endforeach;?>
</ul>
<footer>
    <ul class="social-links-list w-100 justify-content-center list-unstyled mb-0">
        <?php foreach($socialLinksCollection as $socialLink): ?>
            <li class="ms-3">
                <a class="social-link" target="_blank" href="<?=$socialLink['href'];?>">
                    <i class="fa-brands <?=$socialLink['css-class']?>"></i>
                </a>
            </li>
        <?php endforeach;?>
    </ul>
    <div class="w-100 text-center">
        <span class="color-white fw-bold copyright">
            © 2024 Dusha Foundation. All rights are reserved.
        </span>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
