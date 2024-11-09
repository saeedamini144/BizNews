<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <!-- <link href="<?php bloginfo('template_url') ?>/img/favicon.ico" rel="icon" /> -->
    <?php
    wp_head(); //call The header

    $Banner_header = fw_get_db_customizer_option('Banner_header');
    $Social_icon = fw_get_db_customizer_option('Social_icon');

    ?>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary">
                            <script>
                                // create a function to update the date and time
                                function updateDateTime() {
                                    // create a new `Date` object
                                    const now = new Date();

                                    // get the current date and time as a string
                                    const currentDateTime = now.toLocaleString();

                                    // update the `textContent` property of the `span` element with the `id` of `datetime`
                                    document.querySelector('#datetime').textContent = currentDateTime;
                                }

                                // call the `updateDateTime` function every second
                                setInterval(updateDateTime, 1000);
                            </script>
                            <span class="nav-link text-body small" id="datetime"></span>
                        </li>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'topBar-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', // قالب برای ul
                            'depth' => 4,
                            'walker' => new Custom_Navwalker(), // استفاده از کلاس سفارشی
                        ));

                        ?>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-right d-none d-md-block">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-auto mr-n2">
                        <?php
                        if (!empty($Social_icon)) {
                            foreach ($Social_icon as $Icon) {
                        ?>
                                <li class="nav-item">
                                    <a class="nav-link text-body" href="<?php echo $Icon['icon_Link'] ?>"><small class="fab <?php echo $Icon['icon_Name'] ?>"></small></a>
                                </li>
                        <?php
                            }
                        } else {
                            echo '';
                        }
                        ?>

                    </ul>

                </nav>
            </div>
        </div>
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <figure>
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_url($custom_logo_id);
                    if (has_custom_logo()) {
                    ?>
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url($logo) ?>" alt="<?php get_bloginfo('name') ?>"></a>
                        <!-- <?php var_dump($logo) ?> -->
                    <?php
                    } else {
                        echo get_bloginfo('name');
                    }

                    ?>
                </figure>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <a href="#">
                    <img class="img-fluid" src="<?php
                                                if (!empty($Banner_header)) {
                                                    echo $Banner_header["url"];
                                                    // var_dump($Banner_header);
                                                } else {
                                                    echo " ";
                                                }
                                                ?>
                " alt="" />
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">

        <figure class="d-lg-none">
            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_url($custom_logo_id);
            if (has_custom_logo()) {
            ?>
                <a href="<?php home_url() ?>"><img src="<?php echo esc_url($logo) ?>" alt="<?php get_bloginfo('name') ?>"></a>
                <!-- <?php var_dump($logo) ?> -->
            <?php
            } else {
                echo get_bloginfo('name');
            }

            ?>
        </figure>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => false,
                'menu_class' => 'navbar-nav mr-auto py-0',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 4,
                'walker' => new WP_Bootstrap_Navwalker(), // نیاز به WP_Bootstrap_Navwalker دارید
            ));
            ?>
            <!-- <div role="search" class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                <input type="text" class="form-control border-0" placeholder="Keyword">
                <div class="input-group-append">
                    <button class="input-group-text bg-primary text-dark border-0 px-3"><i class="fa fa-search"></i></button>
                </div>
            </div> -->
            <!-- Search Input -->
            <?php get_search_form(); ?>
            <!-- Search Input -->
        </div>
    </nav>
    <!-- Navbar End -->