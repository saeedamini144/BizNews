<?php
get_header();

$Breaking_news_title = fw_get_db_customizer_option('Breaking_news_title');
$Featured_News_title = fw_get_db_customizer_option('Featured_News_title');
$Latest_News_title = fw_get_db_customizer_option('Latest_News_title');
$Banner_main_ads_one = fw_get_db_customizer_option('Banner_main_ads_one');
$Banner_main_ads_two = fw_get_db_customizer_option('Banner_main_ads_two');
$Last_content_title = fw_get_db_customizer_option('Last_content_title');
$middle_content_title = fw_get_db_customizer_option('middle_content_title');

?>
<!-- Main News Slider Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7 px-0">
            <div class="owl-carousel main-carousel position-relative">

                <!-- show the main slider -->

                <?php get_template_part('template-parts/mainSlider', 'card'); ?>

                <!-- show the main slider -->

            </div>
        </div>
        <div class="col-lg-5 px-0">
            <div class="row mx-0">

                <!-- show the main slider grid card -->
                <?php get_template_part('/template-parts/mainSlider', 'GridCard'); ?>
                <!-- show the main slider grid card -->

            </div>
        </div>
    </div>
    <!-- Main News Slider End -->

    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div
                            class="bg-primary text-dark text-center font-weight-medium py-2"
                            style="width: 170px">
                            <?php echo $Breaking_news_title ?>
                        </div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">

                            <!-- Breaking News Content -->
                            <?php get_template_part('/template-parts/BreakingNews', 'card'); ?>
                            <!-- Breaking News Content -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->

    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold"><?php echo $Featured_News_title ?></h4>
            </div>
            <div
                class="owl-carousel news-carousel carousel-item-4 position-relative">

                <!-- Featured News Content -->
                <?php get_template_part('/template-parts/featuredNews', 'card'); ?>
                <!-- Featured News Content -->
            </div>
        </div>
    </div>
    <!-- Featured News Slider End -->

    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">
                                    <?php echo $Latest_News_title ?>
                                </h4>
                            </div>
                        </div>

                        <!-- Post excerpt card -->
                        <?php get_template_part('/template-parts/twoDesign', 'card') ?>
                        <!-- Post excerpt card -->

                        <!-- Banner_main_ads_one -->
                        <div class="col-lg-12 mb-3">
                            <a href=""><img class="img-fluid w-100" src="<?php if (!empty($Banner_main_ads_one)) {
                                                                                echo $Banner_main_ads_one['url'];
                                                                            } else
                                                                                echo '';
                                                                            ?>" alt="" />
                            </a>
                        </div>
                        <!-- Banner_main_ads_one -->

                        <!-- Middle section content -->
                        <div class="container-fluid">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold"><?php echo$middle_content_title ?></h4>
                            </div>
                        </div>
                        <?php get_template_part('/template-parts/horizontalPost', 'card') ?>
                        <!-- Middle section content -->

                        <!-- Banner_main_ads_two -->
                        <div class="col-lg-12 mb-3">
                            <a href=""><img class="img-fluid w-100" src="<?php if (!empty($Banner_main_ads_two)) {
                                                                                echo $Banner_main_ads_two['url'];
                                                                            } else {
                                                                                echo 'No banner ads';
                                                                            }
                                                                            ?>" alt="" />
                            </a>
                        </div>
                        <!-- Banner_main_ads_two -->

                        <!-- Last section content-->
                        <div class="container-fluid">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold"><?php echo $Last_content_title ?></h4>
                            </div>
                        </div>
                        <?php get_template_part('/template-parts/hTwoDesign', 'card'); ?>
                        <!-- Last section content -->

                    </div>
                </div>

                <!-- News Sidebar -->
                <?php get_template_part('/template-parts/sidbar', 'main') ?>
                <!-- News Sidebar -->

            </div>
        </div>
    </div>
</div>
</body>
<?php
get_footer();
?>

</html>