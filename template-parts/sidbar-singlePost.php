<?php

$trending_news_category = fw_get_db_customizer_option('trending_news_category');

$args = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $trending_news_category,
            ),
        ),
    ),
);

if (!empty($trending_news_category)) {
    if ($args->have_posts()) {
        while ($args->have_posts()) {
            $args->the_post();
?>
            <div
                class="d-flex align-items-center bg-white mb-3"
                style="height: 110px">
                <img
                    class="img-fluid"
                    style="width: 110px; height: 100%;"
                    src="<?php echo the_post_thumbnail_url(); ?> "
                    alt="" />
                <div
                    class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                    <div class="mb-2">
                        <a
                            class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                            href="<?php echo get_category_link(get_the_category()[0]->term_id) ?>"><?php echo get_the_category()[0]->name ?></a>
                        <span class="text-body"><small><?php echo get_the_date('M D , Y') ?></small></span>
                    </div>
                    <a
                        class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                        href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(), 10) ?></a>
                </div>
            </div>
<?php
        }
    }
} else {
    echo 'No categorie Choose';
}
wp_reset_postdata();
?>