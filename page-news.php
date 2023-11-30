<?php
/**
 * Newsページ
 */
?>

<?php get_header(); ?>

<main class="main news-main">

    <div class="sub-mv">
        <div class="sub-mv-inner">
            <div class="sub-mv-text">
                <h2 class="sub-mv-main-text">News</h2>
                <p class="sub-mv-sub-text">お知らせ</p>
            </div>
            <div class="sub-mv-content">
                <picture class="sub-mv__img">
                    <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-news-mv-sp.jpg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/photo-news.jpg" alt="ガラス張りの高層ビルが青い空を反射して映しています" width="1920" height="640">
                </picture>
            </div>
        </div>
    </div>

    <div class="main-content-inner news-article-wrapper news-main__news-article-wrapper">

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'post_type' => 'post', // 投稿記事
            'posts_per_page' => 10, // 10記事を表示
            'paged' => $paged,
        );

        // クエリの定義
        $the_query = new WP_Query($args);

        $array = ['the_query' => $the_query];
        ?>

        <!-- 記事一覧 -->
        <?php get_template_part('template-parts/news-page-articles', '', $array); ?>

        <!-- ページネーション -->
        <?php get_template_part('template-parts/pagination', '', $array); ?>

    </div>

</main>

<?php get_footer(); ?>