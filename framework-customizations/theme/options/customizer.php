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
                'title' => __('test', '{domain}'),
                'options' => array(
                    'first_section_title' => array(
                        'label' => 'Change The main title',
                        'type' => 'text',
                        'value' => 'We Help you to improve your business',
                        'desc' => 'Write your header title here'
                    ),
                ),
            )
        )
    ),
);
