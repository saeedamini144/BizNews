<?php

$Featured_News = fw_get_db_customizer_option('Featured_News');

$args = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $Featured_News,
            ),
        ),
    ),
);

if (!empty($Featured_News)) {
    if ($args->have_posts()) {
        while ($args->have_posts()) {
            $args->the_post();
?>
            <div class="position-relative overflow-hidden" style="height: 300px">
                <img
                    class="img-fluid h-100"
                    src="<?php echo the_post_thumbnail_url() ?>"
                    style="object-fit: cover" />
                <div class="overlay">
                    <div class="mb-2">
                        <a
                            class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                            href="<?php echo get_category_link(get_the_category()[0]->term_id) ?>"><?php echo get_the_category()[0]->name ?></a>
                        <span class="text-white"><small><?php echo get_the_date('M D , Y') ?></small></span>
                    </div>
                    <a
                        class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                        href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(), 10); ?></a>
                </div>
            </div>
<?php
        }
    }
} else {
    echo ' No category Choose ';
}
wp_reset_postdata();
?>