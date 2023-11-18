<?php get_header(); ?>

<main class="main">

    <div class="sub-mv">
        <div class="sub-mv-inner">
            <div class="sub-mv-text">
                <h2 class="sub-mv-main-text">News</h2>
                <p class="sub-mv-sub-text">お知らせ</p>
            </div>
            <div class="sub-mv-content">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-news-mv-sp.jpg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-news.jpg" alt="ガラス張りの高層ビルが青い空を反射して映しています" class="sub-mv__img" width="1920" height="640">
                </picture>

            </div>
        </div>
    </div>

    <div class="main-content-inner main-content-inner--news-page">

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'post_type' => 'post', //投稿ページ
            'posts_per_page' => 10, //表示する記事数
            'paged' => $paged,
        );

        // クエリの定義
        $the_query = new WP_Query($args);
        ?>
        <div>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <article class="news-article">
                        <time class="news-article__time" datetime=""><?php the_time('Y/m/d'); ?></time>

                        <h3 class="news-article__title">
                            <a href="<?php the_permalink(); ?>" class="article-link">
                                <?php the_title(); ?>
                            </a>
                            <picture class="news-article__img">
                                <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon-news-arrow-sp.svg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-news-arrow.svg" alt="" class="news-article__icon" width="26" height="20">
                            </picture>
                        </h3>


                    </article>
                <?php endwhile ?>
            <?php endif ?>
            <?php wp_reset_postdata(); ?>
        </div>

        <div class="main-content-inner__news-pagination news-pagination">
            <?php

            $big = 999999999;

            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $the_query->max_num_pages,
            ));
            ?>
        </div>

    </div>

</main>

<?php get_footer(); ?>