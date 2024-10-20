 <!-- Footer Start -->

 <?php

    $column_one_title = fw_get_db_customizer_option('column_one_title');
    $contact_list = fw_get_db_customizer_option('contact_list');
    $Social_title = fw_get_db_customizer_option('Social_title');
    $social_icon_footer = fw_get_db_customizer_option('social_icon_footer');
    $Footer_column_two_title = fw_get_db_customizer_option('Footer_column_two_title');
    $Footer_column_three_title = fw_get_db_customizer_option('Footer_column_three_title');
    $Footer_column_four_title = fw_get_db_customizer_option('Footer_column_four_title');
    $footer_gallery = fw_get_db_customizer_option('footer_gallery');
    $change_copyright = fw_get_db_customizer_option('change_copyright');

    ?>
 <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
     <div class="row py-4">
         <div class="col-lg-3 col-md-6 mb-5">
             <h5 class="mb-4 text-white text-uppercase font-weight-bold"><?php echo $column_one_title ?></h5>

             <?php
                if (!empty($contact_list)) {
                    foreach ($contact_list as $data_list) {
                        // var_dump($data_list['contact_list_icon']);
                ?>
                     <div Class="font-weight-medium d-flex">
                         <i class=" <?php if (!empty($data_list['contact_list_icon']['icon-class'])) {
                                        echo htmlspecialchars($data_list['contact_list_icon']['icon-class']);
                                    } else {
                                        echo '';
                                    };

                                    ?> mr-2"></i>
                         <?php echo $data_list['contact_list_content']; ?>
                     </div>
             <?php
                    }
                } else {
                    echo ' ';
                }
                ?>

             <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold"><?php echo $Social_title ?></h6>
             <div class="d-flex justify-content-start">
                 <?php

                    if (!empty($social_icon_footer)) {
                        foreach ($social_icon_footer as $icon_footer) {
                    ?>
                         <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="<?php echo $icon_footer['social_icon_link'] ?>"><i class="fab <?php if (!empty($icon_footer['social_icon']['icon-class'])) {
                                                                                                                                                        echo $icon_footer['social_icon']['icon-class-without-root'];
                                                                                                                                                        // var_dump($icon_footer['social_icon']);
                                                                                                                                                    } else {
                                                                                                                                                        echo '';
                                                                                                                                                    }
                                                                                                                                                    ?>">
                             </i></a>

                 <?php
                        }
                    } else {
                        echo '';
                    }


                    ?>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 mb-5">
             <h5 class="mb-4 text-white text-uppercase font-weight-bold"><?php echo $Footer_column_two_title ?></h5>

             <!-- show the main slider -->
             <?php get_template_part('/template-parts/postWithoutImage', 'card') ?>
             <!-- show the main slider -->

         </div>
         <div class="col-lg-3 col-md-6 mb-5">
             <h5 class="mb-4 text-white text-uppercase font-weight-bold"><?php echo $Footer_column_three_title ?></h5>
             <div class="m-n1">

                 <!-- show all post category -->

                 <?php

                    $categories = get_categories();

                    if (!empty($categories)) {
                        foreach ($categories as $category) {
                    ?>
                         <a href="<?php echo esc_html($category->link) ?>" class="btn btn-sm btn-secondary m-1"><?php echo esc_html($category->name) ?></a>
                 <?php

                        }
                    } else {
                        echo '';
                    }

                    ?>
                 <!-- show all post category -->

             </div>
         </div>
         <div class="col-lg-3 col-md-6 mb-5">
             <h5 class="mb-4 text-white text-uppercase font-weight-bold"><?php echo $Footer_column_four_title ?></h5>
             <div class="row">

                 <!-- show gallery -->
                 <?php

                    if (!empty($footer_gallery)) {
                        foreach ($footer_gallery as $gallery) {

                    ?>

                         <div class="col-4 mb-3">
                             <a href=""><img class="w-100" src="<?php echo esc_url($gallery['url']); ?>" alt=""></a>
                         </div>
                 <?php
                        }
                    } else {
                        echo 'No photo';
                    }

                    ?>
                 <!-- show gallery -->

             </div>
         </div>
     </div>
 </div>
 <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">

     <!-- copyright -->
     <?php echo  $change_copyright ?>
     <!-- copyright -->

 </div>
 <!-- Footer End -->


 <!-- Back to Top -->
 <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>

 <?php
    wp_footer();
    ?>
 </body>