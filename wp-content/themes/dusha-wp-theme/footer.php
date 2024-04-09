<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dusha_WP_theme
 */

?>

            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
                <?php
                    $socialLinksCollection = [
                        [
                            'css-class' => 'fa-instagram',
                            'href' => 'https://www.instagram.com/fundacja_dusha/',
                        ],
                        [
                            'css-class' => 'fa-youtube',
                            'href' => 'https://www.youtube.com/@ArtProject-Dusha',
                        ],
                        [
                            'css-class' => 'fa-pinterest',
                            'href' => 'https://pl.pinterest.com/ArtProjectDUSHA/'
                        ],
                        [
                            'css-class' => 'fa-facebook',
                            'href' => 'https://m.facebook.com/DuszaArtProjekt',
                        ],
                        [
                            'css-class' => 'fa-tiktok',
                            'href' => 'https://www.tiktok.com/@artdushaprojekt',
                        ],

                        [
                            'css-class' => 'fa-telegram',
                            'href' => 'https://t.me/dusha_moja_ukraina',
                        ],

                    ];
                ?>

                <ul class="nav col-sm-12 justify-content-center list-unstyled d-flex">
                    <?php foreach($socialLinksCollection as $socialLink): ?>
                        <li class="ms-3">
                            <a class="social-link" target="_blank" href="<?=$socialLink['href'];?>">
                                <i class="fa-brands <?=$socialLink['css-class']?>"></i>
                            </a>
                        </li>
                    <?php endforeach;?>
                </ul>

                <div class="w-100 text-center mt-3 mb-§">
                    <span class="color-white fw-bold">© 2024 Dusha Foundation</span>
                </div>


            </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
