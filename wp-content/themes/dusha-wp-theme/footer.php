<?php
    $socialLinksCollection = [
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
    ];
?>

<ul class="social-links-list">
    <?php foreach($socialLinksCollection as $socialLink): ?>
        <li class="ms-3">
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
