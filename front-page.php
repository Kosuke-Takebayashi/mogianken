<?php 
/**
 * トップページ
 */
?>

<?php get_header(); ?>

<main class="main">

    <!-- メインビジュアル -->
    <div class="mv">
        <div class="mv-inner">

            <picture class="mv__img">
                <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-main-visual-sp.jpg">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-main-visual.jpg" alt="地上から青い空をバックに高層ビルを見上げています" width="1920" height="1080">
            </picture>

            <div class="mv-text">
                <strong class="mv-main-text">We'll always be <br>By your side.</strong>
                <p class="mv-sub-text">あなたのそばで支える企業</p>
            </div>

        </div>
    </div>

    <div class="main-content-inner container">

        <!-- About us -->
        <section class="about section">

            <div class="section-title">
                <h2 class="section-title__text">About us</h2>
                <span class="section-title__sub-text">私たちについて</span>
            </div>

            <div class="section-content">
                <div class="section-content-inner">

                    <div class="section-content-description">
                        <h3 class="section-content-description__title">テキストテキスト</h3>
                        <p class="section-content-description__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキストテキストテキストテキストテキスト</p>
                        <p class="section-content-description__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        <div class="button-wrapper">
                            <a href="<?php echo esc_url(home_url()); ?>/about" class="button section-content-description__button">詳しく見る
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon-arrow-dropright-circle.svg" alt="" width="27" height="27">
                            </a>
                        </div>
                    </div>

                    <figure class="section-content-figure">
                        <picture class="section-content-figure__img">
                            <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-aboutus-sp.jpg">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-aboutus.jpg" alt="社長がジェスチャーを交えながら話をしています" width="444" height="585">
                        </picture>
                    </figure>
                </div>
            </div>
        </section>

        <!-- Service -->
        <section class="service section">
            <div class="section-title">
                <h2 class="section-title__text">Service</h2>
                <span class="section-title__sub-text">事業内容</span>
            </div>

            <div class="section-content service__section-content">
                <div class="section-content-inner">

                    <div class="section-content-description">
                        <h3 class="section-content-description__title">テキストテキスト</h3>
                        <p class="section-content-description__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキストテキストテキストテキストテキスト</p>
                        <p class="section-content-description__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        <div class="button-wrapper">
                            <a href="<?php echo esc_url(home_url()); ?>/service" class="button section-content-description__button">詳しく見る
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon-arrow-dropright-circle.svg" alt="" width="27" height="27">
                            </a>
                        </div>
                    </div>

                    <figure class="section-content-figure section-content-figure--reverse">
                        <picture class="section-content-figure__img">
                            <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-service-1-sp.jpg">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-service-1.jpg" alt="地上から見た高層ビルと青い空" width="444" height="585">
                        </picture>
                    </figure>
                </div>
            </div>

            <div class="section-content">
                <div class="section-content-inner">

                    <div class="section-content-description">
                        <h3 class="section-content-description__title">テキストテキスト</h3>
                        <p class="section-content-description__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキストテキストテキストテキストテキスト</p>
                        <p class="section-content-description__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        <div class="button-wrapper">
                            <a href="<?php echo esc_url(home_url()); ?>/service" class="button section-content-description__button">詳しく見る
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon-arrow-dropright-circle.svg" alt="" width="27" height="27">
                            </a>
                        </div>
                    </div>

                    <figure class="section-content-figure">
                        <picture class="section-content-figure__img">
                            <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-service-2-sp.jpg">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-service-2.jpg" alt="4人がお互いに手を組んでいます" width="444" height="585">
                        </picture>
                    </figure>
                </div>
            </div>
        </section>

        <!-- Company -->
        <section class="company section">
            <div class="section-title">
                <h2 class="section-title__text">Company</h2>
                <span class="section-title__sub-text">会社概要</span>
            </div>

            <div class="section-content">
                <div class="section-content-inner">

                    <div class="section-content-description">
                        <h3 class="section-content-description__title">テキストテキスト</h3>
                        <p class="section-content-description__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキストテキストテキストテキストテキスト</p>
                        <p class="section-content-description__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        <div class="button-wrapper">
                            <a href="<?php echo esc_url(home_url()); ?>/company" class="button section-content-description__button">詳しく見る
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon-arrow-dropright-circle.svg" alt="" width="27" height="27">
                            </a>
                        </div>
                    </div>

                    <figure class="section-content-figure section-content-figure--reverse">
                        <picture class="section-content-figure__img">
                            <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-company-sp.jpg">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-company.jpg" alt="腕組みをしている社長がこちらを向いて笑っています" width="444" height="585">
                        </picture>
                    </figure>
                </div>
            </div>
        </section>

        <!-- News -->
        <section class="news section">
            <div class="section-title">
                <h2 class="section-title__text">News</h2>
                <span class="section-title__sub-text">お知らせ</span>
            </div>

            <div class="section-content">
                <div class="news-article-wrapper">

                    <!-- 記事一覧を表示 -->
                    <?php get_template_part('template-parts/front-page-articles'); ?>

                    <div class="read-more-link-wrapper news__read-more-link-wrapper">
                        <a href="<?php echo esc_url(home_url()); ?>/news" class="read-more-link news__read-more-link">もっと見る
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-read-more-arrow.svg" alt="" class="read-more-link__arrow" width="10" height="17">
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>