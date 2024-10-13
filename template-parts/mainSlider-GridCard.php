<?php

$Main_slider_GridCard = fw_get_db_customizer_option('Main_slider_GridCard');

$args = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'term_id',
                'terms'    => $Main_slider_GridCard,
            ),
        ),
    ),
);

if (!empty($Main_slider_GridCard)) {
    if ($args->have_posts()) {
        while ($args->have_posts()) {
            $args->the_post();
?>
            <div class="col-md-6 px-0">
                <div
                    class="position-relative overflow-hidden"
                    style="height: 250px">
                    <img
                        class="img-fluid w-100 h-100"
                        src="<?php echo get_the_post_thumbnail_url() ?>"
                        style="object-fit: cover" />
                    <div class="overlay">
                        <div class="mb-2">
                            <a
                                class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="<?php echo get_category_link(get_the_category()[0]->term_id) ?>"><?php echo get_the_category()[0]->name ?></a>
                            <span class="text-white" href=""><small><?php echo get_the_date('M D , Y') ?></small></span>
                        </div>
                        <a
                            class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                            href="<?php the_permalink() ?>"><?php the_title() ?></a>
                    </div>
                </div>
            </div>
<?php
        }
    }
} else {
    echo 'No category choose';
}
wp_reset_postdata();
?>