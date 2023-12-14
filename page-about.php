<?php
/**
 * About usページ
 */
?>

<?php get_header(); ?>

<main class="main">

    <div class="sub-mv">
        <div class="sub-mv-inner">
            <div class="sub-mv-text">
                <h2 class="sub-mv-main-text">About us</h2>
                <p class="sub-mv-sub-text">私たちについて</p>
            </div>
            <div class="sub-mv-content">
                <picture class="sub-mv__img">
                    <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-aboutus-mv-sp.jpg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-aboutus-mv.jpg" alt="握手をしている男性2人の手" width="1920" height="640">
                </picture>
            </div>
        </div>
    </div>

    <div class="main-content-inner container">

        <!-- Mission -->
        <section class="mission section">

            <div class="section-title">
                <h2 class="section-title__text">Mission</h2>
                <span class="section-title__sub-text">ミッション</span>
            </div>

            <div class="section-content mission__section-content">
                <div class="section-content-inner">

                    <div class="section-content-description">
                        <h3 class="section-content-description__title">テキストテキスト</h3>
                        <p class="section-content-description__text">
                            タイトルタイトルタイトル<br>
                            タイトルタイトルタイトルテキストテキストテキスト</p>
                        <p class="section-content-description__text">
                            タイトルタイトルタイトルテキストテキスト<br>
                            タイトルタイトルタイトルテキストテキストテキスト</p>
                        <p class="section-content-description__text">
                            タイトルタイトルタイトルテキストテキストテキスト
                        </p>

                    </div>

                    <figure class="section-content-figure">
                        <picture class="section-content-figure__img">
                            <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-mission-1-sp.jpg">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-mission-1.jpg" alt="社長がジェスチャーを交えながら話をしています" width="444" height="444">
                        </picture>
                    </figure>
                </div>
            </div>

            <div class="section-content">
                <div class="section-content-inner">

                    <div class="section-content-description">
                        <h3 class="section-content-description__title">テキストテキスト</h3>
                        <p class="section-content-description__text">
                            タイトルタイトルタイトル<br>
                            タイトルタイトルタイトルテキストテキストテキスト</p>
                        <p class="section-content-description__text">
                            タイトルタイトルタイトルテキストテキスト<br>
                            タイトルタイトルタイトルテキストテキストテキスト</p>

                    </div>

                    <figure class="section-content-figure section-content-figure--reverse">
                        <picture class="section-content-figure__img">
                            <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-mission-2-sp.jpg">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-mission-2.jpg" alt="会社の直線に伸びる長い廊下" width="444" height="444">
                        </picture>
                    </figure>
                </div>
            </div>

        </section>

        <!-- Vision -->
        <section class="vision section">

            <div class="section-title">
                <h2 class="section-title__text">Vision</h2>
                <span class="section-title__sub-text">ビジョン</span>
            </div>

            <div class="section-content vision__section-content">
                <div class="section-content-inner">

                    <div class="section-content-description">
                        <h3 class="section-content-description__title">テキストテキスト</h3>
                        <p class="section-content-description__text">
                            タイトルタイトルタイトル<br>
                            タイトルタイトルタイトルテキストテキストテキスト</p>
                        <p class="section-content-description__text">
                            タイトルタイトルタイトルテキストテキスト<br>
                            タイトルタイトルタイトルテキストテキストテキスト</p>
                        <p class="section-content-description__text">
                            タイトルタイトルタイトルテキストテキストテキスト
                        </p>

                    </div>

                    <figure class="section-content-figure">
                        <picture class="section-content-figure__img">
                            <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-vision-1-sp.jpg">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-vision-1.jpg" alt="若い男女の社員が少し斜めの角度で肩を並べてこちらを見ています" width="444" height="444">
                        </picture>
                    </figure>
                </div>
            </div>

            <div class="section-content">
                <div class="section-content-inner">

                    <div class="section-content-description">
                        <h3 class="section-content-description__title">テキストテキスト</h3>
                        <p class="section-content-description__text">
                            タイトルタイトルタイトル<br>
                            タイトルタイトルタイトルテキストテキストテキスト</p>
                        <p class="section-content-description__text">
                            タイトルタイトルタイトルテキストテキスト<br>
                            タイトルタイトルタイトルテキストテキストテキスト</p>

                    </div>

                    <figure class="section-content-figure section-content-figure--reverse">
                        <picture class="section-content-figure__img">
                            <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-vision-2-sp.jpg">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-vision-2.jpg" alt="夕焼けに染まる都市を遠くから見た風景" width="444" height="444">
                        </picture>
                    </figure>
                </div>
            </div>

        </section>

        <?php get_template_part('template-parts/story'); ?>

    </div>

</main>

<?php get_footer(); ?>