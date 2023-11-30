<?php

/**
 * お問い合わせページ
 */
?>

<?php get_header(); ?>

<main class="main contact-main">

    <div class="sub-mv">
        <div class="sub-mv-inner">
            <div class="sub-mv-text">
                <h2 class="sub-mv-main-text">Contact</h2>
                <p class="sub-mv-sub-text">お問い合わせ</p>
            </div>
            <div class="sub-mv-content">
                <picture class="sub-mv__img">
                    <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-contact-mv-sp.jpg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-contact.jpg" alt="高層ビルへつながる階段をサラリーマンが上っています" width="1920" height="640">
                </picture>

            </div>
        </div>
    </div>

    <div class="contact">
        <div class="main-content-inner contact-main__main-content-inner">

            <p class="contact__lead">株式会社テックコーポレートに関するお問い合わせ、ご不明な点やご相談がございましたら、<br>
                下記フォームからお気軽にお問い合わせください。</p>

            <?php the_content(); ?>

        </div>
    </div>

</main>

<?php get_footer(); ?>