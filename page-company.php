<?php get_header(); ?>

<!-- メインビジュアル -->
<main class="main">

    <div class="sub-mv">
        <div class="sub-mv-inner">
            <div class="sub-mv-text">
                <h2 class="sub-mv-main-text">Company</h2>
                <p class="sub-mv-sub-text">会社概要</p>
            </div>
            <div class="sub-mv-content">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-company-mv-sp.jpg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-company-mv.jpg" alt="青い空をバックにした高層ビル" class="sub-mv__img" width="1920" height="640">
                </picture>

            </div>
        </div>
    </div>

    <div class="main-content-inner">

        <?php get_template_part('template-parts/company-profile'); ?>

        <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10199.835577215172!2d139.76186966503437!3d35.681081895140956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1699783859604!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Message -->
        <section class="message section">

            <div class="section-title">
                <h2 class="section-title__text">Message</h2>
                <span class="section-title__sub-text">社長挨拶</span>
            </div>

            <div class="section-content message__section-content">
                <div class="section-content-inner">

                    <div class="section-content-description">
                        <h3 class="section-content-description__title">テキストテキスト</h3>
                        <p class="section-content-description__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキストテキストテキストテキストテキスト</p>
                        <p class="section-content-description__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        <p class="section-content-description__text">
                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                        </p>

                    </div>

                    <figure class="section-content-figure">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-message-sp.jpg">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-message.jpg" alt="" class="section-content-figure__img" width="444" height="444">
                        </picture>

                    </figure>
                </div>
            </div>

        </section>


    </div>

</main>

<?php get_footer(); ?>