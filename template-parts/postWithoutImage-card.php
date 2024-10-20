<?php

$choose_category = fw_get_db_customizer_option('choose_category');

$args = new WP_Query(
    array(

        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => array(
            array(

                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $choose_category,

            ),
        ),

    ),
);

if (!empty($choose_category)) {
    if ($args->have_posts()) {
        while ($args->have_posts()) {
            $args->the_post();
?>

            <div class="mb-3">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="<?php echo get_category_link(get_the_category()[0]->term_id) ?>"><?php echo get_the_category()[0]->name ?></a>
                    <span class="text-body"><small><?php echo get_the_date('M D , Y') ?></small></span>
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(), 10) ?></a>
            </div>

<?php
        }
    }
} else {
    echo 'No category choose';
}
wp_reset_postdata();

?>