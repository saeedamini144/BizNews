<div class="col-lg-6">
    <div class="position-relative mb-3">
        <img
            class="img-fluid w-100"
            src="<?php echo the_post_thumbnail_url() ?>"
            style="object-fit: cover" />
        <div class="bg-white border border-top-0 p-4">
            <div class="mb-2">
                <a
                    class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                    href="<?php echo get_category_link(get_the_category()[0]->term_id) ?>"><?php echo get_the_category()[0]->name ?></a>
                <span class="text-body" href=""><small><?php echo get_the_date('M D , Y') ?></small></span>
            </div>
            <a
                class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_title(), 10); ?></a>
            <p class="m-0">
                <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
            </p>
        </div>
        <div
            class="d-flex justify-content-between bg-white border border-top-0 p-4">
            <div class="d-flex align-items-center">
                <img
                    class="rounded-circle mr-2"
                    src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"
                    width="25"
                    height="25"
                    alt=" " />
                <small><?php the_author() ?></small>
            </div>
            <div class="d-flex align-items-center">
                <!-- <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small> -->
                <small class="ml-3"><i class="far fa-comment mr-2"></i><?php comments_number('No Comments', '1 Comment', '% Comment'); ?>
                </small>
            </div>
        </div>
    </div>
</div>