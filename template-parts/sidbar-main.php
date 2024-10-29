<?php

$add_title = fw_get_db_customizer_option('add_title');
$sidbar_banner_adds = fw_get_db_customizer_option('sidbar_banner_adds');
$trending_sidbar = fw_get_db_customizer_option('trending_sidbar');
$show_category = fw_get_db_customizer_option('show_category');
?>

<div class="col-lg-4">
    <div class="inner-sidbar">
        <!-- Social Follow Start -->
        <!-- <div class="mb-3">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
        </div>
        <div class="bg-white border border-top-0 p-3">
            <a
                href=""
                class="d-block w-100 text-white text-decoration-none mb-3"
                style="background: #39569e">
                <i
                    class="fab fa-facebook-f text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, 0.2)"></i>
                <span class="font-weight-medium">12,345 Fans</span>
            </a>
            <a
                href=""
                class="d-block w-100 text-white text-decoration-none mb-3"
                style="background: #52aaf4">
                <i
                    class="fab fa-twitter text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, 0.2)"></i>
                <span class="font-weight-medium">12,345 Followers</span>
            </a>
            <a
                href=""
                class="d-block w-100 text-white text-decoration-none mb-3"
                style="background: #0185ae">
                <i
                    class="fab fa-linkedin-in text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, 0.2)"></i>
                <span class="font-weight-medium">12,345 Connects</span>
            </a>
            <a
                href=""
                class="d-block w-100 text-white text-decoration-none mb-3"
                style="background: #c8359d">
                <i
                    class="fab fa-instagram text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, 0.2)"></i>
                <span class="font-weight-medium">12,345 Followers</span>
            </a>
            <a
                href=""
                class="d-block w-100 text-white text-decoration-none mb-3"
                style="background: #dc472e">
                <i
                    class="fab fa-youtube text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, 0.2)"></i>
                <span class="font-weight-medium">12,345 Subscribers</span>
            </a>
            <a
                href=""
                class="d-block w-100 text-white text-decoration-none"
                style="background: #055570">
                <i
                    class="fab fa-vimeo-v text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, 0.2)"></i>
                <span class="font-weight-medium">12,345 Followers</span>
            </a>
        </div>
    </div> -->
        <!-- Social Follow End -->

        <!-- Ads Start -->
        <div class="mb-3">
            <div class="section-title mb-0">
                <h4 class="m-0 text-uppercase font-weight-bold"><?php echo $add_title ?></h4>
            </div>
            <div class="bg-white text-center border border-top-0 p-3">
                <a href=""><img
                        class="img-fluid"
                        src="<?php echo $sidbar_banner_adds['url'] ?>"
                        alt="" /></a>
            </div>
        </div>
        <!-- Ads End -->

        <!-- Popular News Start -->
        <div class="mb-3">
            <div class="section-title mb-0">
                <h4 class="m-0 text-uppercase font-weight-bold"><?php echo $trending_sidbar ?></h4>
            </div>
            <div class="bg-white border border-top-0 p-3">

                <!-- trending News  -->
                <?php get_template_part('/template-parts/sidbar', 'singlePost') ?>
                <!-- trending News -->

            </div>
        </div>
        <!-- Popular News End -->

        <!-- Newsletter Start -->
        <div class="mb-3">
            <div class="section-title mb-0">
                <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
            </div>
            <div class="bg-white text-center border border-top-0 p-3">
                <p>
                    Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd
                </p>
                <div class="input-group mb-2" style="width: 100%">
                    <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="Your Email" />
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                    </div>
                </div>
                <small>Lorem ipsum dolor sit amet elit</small>
            </div>
        </div>
        <!-- Newsletter End -->

        <!-- category Start -->
        <div class="mb-3">
            <div class="section-title mb-0">
                <h4 class="m-0 text-uppercase font-weight-bold"><?php echo $show_category ?></h4>
            </div>
            <div class="bg-white border border-top-0 p-3">
                <div class="d-flex flex-wrap m-n1">
                    <?php
                    $categories = get_categories();
                    if (!empty($categories)) {
                        foreach ($categories as $category) {
                    ?>
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="btn btn-sm btn-outline-secondary m-1">
                                <?php echo esc_html($category->name); ?>
                            </a>
                    <?php
                        }
                    } else {
                        echo 'No categories found';
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- category End -->
    </div>
</div>