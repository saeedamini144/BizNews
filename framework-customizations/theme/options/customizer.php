<?php

use function PHPSTORM_META\type;

$options = array(
    'Header_Settings' => array(
        'title' => __('Header Setting', '{domain}'),
        'options' => array(

            'Banner_Header' => array(
                'title' => __('Edit The Header Banner', '{domain}'),
                'options' => array(

                    'Banner_header' => array(
                        'label' => __('Upload The adds Banner', '{domain}'),
                        'type' => 'upload',
                        // 'attr'  => array('class' => 'img-fluid'),
                        'desc' => __('Upload The ads baner', '{domain}'),
                        'help' => __('Banner Size 728x90', '{domain}'),
                        'images_only' => true,
                    ),


                ),
            ),

            'Social_Icon' => array(
                'title' => __("Social Icon", '{domain}'),
                'options' => array(

                    'Social_icon' => array(
                        'label' => __('add the social icon', 'domain'),
                        'type' => 'addable-box',
                        'desc' => __('add the social icon', '{domain}'),
                        'value' => '',
                        'box-options' => array(
                            'icon_Name' => array(

                                'label' => __('Choose icon', '{domain}'),
                                'type' => 'text',
                                // 'preview_size' => 'small',
                                // 'model_size' => 'small',
                                'desc' => __('Use the fontawsome icon name', '{domian}'),
                                // 'set'   => 'font-awesome', // فقط Font Awesome را برای انتخاب کاربر نمایش می‌دهد

                            ),

                            'icon_Link' => array(

                                'label' => __('Icon link', '{domain}'),
                                'type' => 'text',
                                'help' => __('add socila  link', '{domian}'),

                            ),
                        ),

                        'template' => 'add social {{- icon_Name }}', // box title
                        'limit' => 0, // limit the number of boxes that can be added
                        'add-button-text' => __('Add social icon', '{domain}'),
                        'sortable' => true,
                    ),
                ),
            ),
        ),

    ),

    'Home_Settings' => array(
        'title' =>  __('Home Edit', '{domain}'),

        'options' => array(
            'first_section' => array(
                'title' => __('First Section', '{domain}'),
                'options' => array(

                    'Main_slider' => array(
                        'label' => __('Change the Main Slider Content', '{domain}'),
                        'type' => 'multi-select',
                        'desc' => __('Choose the categories', '{domain}'),
                        'population' => 'taxonomy', // type of the content
                        'source' => 'category', //categorie
                        'limit' => 100,
                    ),

                    'Main_slider_GridCard' => array(
                        'label' => __(' Change the Main Slider Grid content ', '{domain}'),
                        'type' => 'multi-select',
                        'desc' => __('Choose the categories', '{domain}'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                    'Breaking_news' => array(

                        'label' => __('Choose the Breaking News', '{domain}'),
                        'type' => 'multi-select',
                        'desc' => __('Choose category for the Breaking News', '{domain}'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                    'Breaking_news_title' => array(
                        'label' => __('Change the Title', '{doamin}'),
                        'type' => 'text',
                        'desc' => __('can change the title', '{domain}'),
                    ),

                ),
            ),

            'Featured_News_Section' => array(
                'title' => __('Featured News Section', '{domain}'),
                'options' => array(

                    'Featured_News' => array(
                        'label' => __('Choose category', '{domain}'),
                        'type' => 'multi-select',
                        'desc' => __('Choose category to show in Featur News Sections', '{domain}'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                    'Featured_News_title' => array(
                        'label' => __('Change the title', '{domain}'),
                        'type' => 'text',
                        'desc' => __('can change the title', '{domain}'),
                    ),
                ),
            ),

            'Latest_News_Section' => array(
                'title' => __('Latest News Section', '{domain}'),
                'options' => array(

                    'Latest_News_title' => array(
                        'label' => __('Change The title', '{domain}'),
                        'type' => 'text',
                        'desc' => __('You can change the title', '{domain}'),
                    ),

                    'Latest_News' => array(
                        'label' => __('Choose the category to show', '{domain}'),
                        'type' => 'multi-select',
                        'desc' => __('Choose the category to show ', '{domain}'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                    'Banner_main_ads_one' => array(
                        'label' => __('Upload The adds Banner', '{domain}'),
                        'type' => 'upload',
                        // 'attr'  => array('class' => 'img-fluid'),
                        'desc' => __('Upload The ads baner', '{domain}'),
                        'help' => __('Banner Size 728x90', '{domain}'),
                        'images_only' => true,
                    ),
                ),
            ),

            'Middle_section' => array(
                'title' => __('Middle Section Edite', '{domain}'),
                'options' => array(

                    'middle_content_title'=>array(

                        'label'=>__('write the title','{domain}'),
                        'desc'=>__('the middle content title','{domain}'),
                        'type'=>'text',
                    ),

                    'middle_content' => array(
                        'label' => __('choose middle section content', '{domian}'),
                        'desc' => __('choose the category', '{domain}'),
                        'type' => 'multi-select',
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),

                    'Banner_main_ads_two' => array(
                        'label' => __('Upload The adds Banner', '{domain}'),
                        'type' => 'upload',
                        // 'attr'  => array('class' => 'img-fluid'),
                        'desc' => __('Upload The ads baner', '{domain}'),
                        'help' => __('Banner Size 728x90', '{domain}'),
                        'images_only' => true,
                    ),
                ),
            ),

            'Last_section' => array(
                'title' => __('Last Section', '{domain}'),
                'options' => array(

                    'Last_content_title'=>array(

                        'label'=>__('write the title','{domain}'),
                        'desc'=>__('the last content title','{domain}'),
                        'type'=>'text',
                    ),

                    'Last_content' => array(
                        'label' => __('choose middle section content', '{domain}'),
                        'desc' => __('choose the category', '{domain}'),
                        'type' => 'multi-select',
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 100,
                    ),
                ),
            ),
        ),
    ),

    'Footer_Settings' => array(
        'title' => __('Footer Settings', '{domain}'),
        'options' => array(

            'Foooter_column_one' => array(
                'title' => __('Column One', '{domain}'),
                'options' => array(

                    'column_one_title' => array(
                        'label' => __('Colimn one title', '{domain}'),
                        'desc' => __('Change column title', '{domain}'),
                        'type' => 'text',
                        'value' => '',
                    ),

                    'contact_list' => array(

                        'label' => __('Contact List', '{domain}'),
                        'type' => 'addable-box',
                        'desc' => __('choose icon and content', '{domain}'),
                        'box-options' => array(

                            'contact_list_icon' => array(
                                'label' => __('Choose the icon', '{domian}'),
                                'type' => 'icon-v2',
                                'preview_size' => 'small',
                                'model_size' => 'small',
                                'desc' => __('Choose the icon', '{domian}'),
                                // 'set'   => 'font-awesome', // فقط Font Awesome را برای انتخاب کاربر نمایش می‌دهد
                            ),

                            'contact_list_content' => array(

                                'label' => __('write the content', '{domain}'),
                                'type' => 'wp-editor',
                                'size' => 'small', // small, large
                                'editor_height' => 150,
                                'wpautop' => true,
                                'editor_type' => true, // tinymce, html
                                'shortcodes' => false // true, array('button', map')
                            ),

                        ),
                        'template' => 'add contact {{- contact_list_icon}}',
                        'add-button-text' => __('add new list', '{domain}'),
                        'sortable' => true,

                    ),

                    'Social_title' => array(

                        'label' => __('social title', '{domain}'),
                        'type' => 'text',
                        'desc' => __('write the social title', '{domain}'),

                    ),

                    'social_icon_footer' => array(

                        'label' => __('add the social icon', '{domian}'),
                        'type' => 'addable-box',
                        'desc' => __('choose the icon and add link', '{domain}'),
                        'box-options' => array(

                            'social_icon' => array(

                                'label' => __('choose the social icon', '{domain}'),
                                'type' => 'icon-v2',
                                'preview_size' => 'small',
                                // 'icon-class-without-root' => false,

                                'model_size' => 'small',
                                'desc' => __('use the font awsome', '{domain}'),

                            ),

                            'social_icon_link' => array(

                                'label' => __('add the social link', '{domain}'),
                                'type' => 'text',
                                'desc' => __('add the social medi link to the icon'),

                            ),

                        ),
                        'template' => 'add contact {{- social_icon}}',
                        'add-button-text' => __('add new social icon', '{domain}'),
                        'sortable' => true,


                    ),
                ),

            ),

            'Footer_column_two' => array(

                'title' => __('Column two', '{domain}'),
                'options' => array(

                    'Footer_column_two_title' => array(

                        'label' => __('add the title', '{domain}'),
                        'type' => 'text',
                        'desc' => __('change the title name of the column two', '{domain}'),

                    ),

                    'choose_category' => array(

                        'label' => __('Choose the category', '{domain}'),
                        'type' => 'multi-select',
                        'desc' => __('Choose the category to show the in footer', '{domain}'),
                        'population' => 'taxonomy',
                        'source' => 'category',
                        'limit' => 3

                    ),
                ),

            ),

            'Footer_column_three' => array(

                'title' => __('Column three'),
                'options' => array(

                    'Footer_column_three_title' => array(

                        'label' => __('add the title', '{domain}'),
                        'type' => 'text',
                        'desc' => __('change the title name of the column two', '{domain}'),
                    ),

                ),

            ),

            'Footer_column_four' => array(

                'title' => __('Column four'),
                'options' => array(

                    'Footer_column_four_title' => array(

                        'label' => __('add the title', '{domain}'),
                        'type' => 'text',
                        'desc' => __('change the title name of the column two', '{domain}'),
                    ),

                    'footer_gallery' => array(
                        'label' => __('choose photos', '{domain}'),
                        'type' => 'multi-upload',
                        'value' => array(),
                        'desc' => __('Choose the gallery images', '{domain}'),
                        'images_only' => true,
                    ),


                ),

            ),

            'Footer_copyright' => array(
                'title' => __('copyright', '{domain}'),
                'options' => array(

                    'change_copyright' => array(

                        'label' => __('add copyright content', '{domain}'),
                        'type' => 'wp-editor',
                        'desc' => __('change the copyright content', 'domain'),

                    ),

                ),
            ),
        ),
    ),

    'sidebar_Settings' => array(
        'title' => __('Sidbar Settings', '{domain}'),
        'options' => array(

            'add_title' => array(
                'label' => __('adds section title', '{domain}'),
                'type' => 'text',
                'desc' => __('change the adds title', '{domain}')
            ),

            'sidbar_banner_adds' => array(
                'label' => __('Ipload the image', '{domain}'),
                'desc' => __('Advertisment image', '{domain}'),
                'help' => __('Upload 410*250 pix image'),
                'type' => 'upload',
                'images_only' => true,
            ),

            'trending_sidbar' => array(
                'label' => __('trending section title', '{domain}'),
                'type' => 'text',
                'desc' => __('change the trending title', '{domain}'),
            ),

            'trending_news_category' => array(
                'label' => __('Choose the category', '{doamin}'),
                'type' => 'multi-select',
                'desc' => __('choose the category to show in trending section', '{domain}'),
                'population' => 'taxonomy',
                'source' => 'category',
                'limit' => 100,
            ),

            'show_category' => array(
                'label' => __('change the title', '{domain}'),
                'type' => 'text',
                'desc' => __('change the title of the all category section', '{domain}'),
            ),

        ),
    ),
);
