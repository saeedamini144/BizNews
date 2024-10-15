<?php
$options = array(
    'Header Settings' => array(
        'title' => __('Header Setting', '{domain}'),
        'options' => array(

            'Banner Header' => array(
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

            'Social Icon' => array(
                'title' => __("Social Icon", '{domain}'),
                'options' => array(

                    'Social_icon' => array(
                        'label' => __('add the social icon', 'domain'),
                        'type' => 'addable-box',
                        'desc' => __('add the social icon', '{domain}'),
                        'value' => '',
                        'box-options' => array(
                            'icon_Name' => array(

                                'label' => __('Icon name', '{domain}'),
                                'type' => 'text',
                                'help' => __('Use fontawsome', '{domian}'),

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
    'Home Edite' => array(
        'title' =>  __('Home Edit', '{domain}'),

        'options' => array(
            'first_section' => array(
                'title' => __('First Section', '{domain}'),
                'options' => array(

                    'Main_slider' => array(
                        'label' => __('Change the Main Slider Content', '{domain}'),
                        'type' => 'multi-select',
                        'desc' => 'Choose the categories',
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

                    'middle_content' => array(
                        'label' => __('choose middle section content', '{domian}'),
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
);
