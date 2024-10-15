<?php

$Breaking_news = fw_get_db_customizer_option('Breaking_news');

$args = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 10,
        'order' => 'date',
        'orderby' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $Breaking_news,
            ),
        ),
    ),
);

if (!empty($Breaking_news)) {
    if ($args->have_posts()) {
        while ($args->have_posts()) {
            $args->the_post();
?>
            <div class="text-truncate">
                <a
                    class="text-white text-uppercase font-weight-semi-bold"
                    href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 15); ?></a>
            </div>

<?php
        }
    }
} else {
    echo 'No Category Choose ';
}
wp_reset_postdata();
?>