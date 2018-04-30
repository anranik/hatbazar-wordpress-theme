<?php

require_once get_template_directory() . '/inc/customizer/kirki.php';

    Kirki::add_config( 'hatcustomizer', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );

    Kirki::add_panel( 'hatbazaroptions', array(
        'priority'    => 10,
        'title'       => esc_attr__( 'Theme Options', 'hatbazar' ),
        'description' => esc_attr__( 'Theme option for hatbazar', 'hatbazar' ),
    ) );
    Kirki::add_section( 'home_setting', array(
        'title'          => esc_attr__( 'Home setting', 'hatbazar' ),
        'description'    => esc_attr__( 'Settings for body and logo.', 'hatbazar' ),
        'panel'          => 'hatbazaroptions',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'hatbazarlogo', array(
        'type'        => 'image',
        'settings'    => 'hatbazarlogo_url',
        'label'       => esc_attr__( 'Site logo', 'hatbazar' ),
        'description' => esc_attr__( 'Upload your site logo here.', 'hatbazar' ),
        'section'     => 'home_setting',
        'default'     => '',
    ) );
    Kirki::add_field( 'backgroundcolor', array(
        'type'        => 'color',
        'settings'    => 'home_bg_color',
        'label'       => __( 'Background color', 'hatbazar' ),
        'description' => esc_attr__( 'This color will use to set background color.', 'hatbazar' ),
        'section'     => 'home_setting',
        'default'     => '#0088CC',
    ) );
    Kirki::add_field( 'backgroundimage', array(
        'type'        => 'image',
        'settings'    => 'home_bg_image',
        'label'       => __( 'Background image', 'hatbazar' ),
        'description' => esc_attr__( 'Select background image.', 'hatbazar' ),
        'section'     => 'home_setting',
    ) );
    Kirki::add_field( 'backgroundrepeat', array(
        'type'        => 'radio-buttonset',
        'settings'    => 'home_bg_repeat',
        'label'       => __( 'Background repeat', 'hatbazar' ),
        'section'     => 'home_setting',
        'default'     => 'repeat',
        'priority'    => 10,
        'choices'     => array(
            'repeat'    => esc_attr__( 'Repeat', 'hatbazar' ),
            'no-repeat' => esc_attr__( 'No Repeat', 'hatbazar' ),
        ),
    ) );
    /**
     * section for header setting
     */
    Kirki::add_section( 'header_setting', array(
        'title'          => esc_attr__( 'Header setting', 'hatbazar' ),
        'description'    => esc_attr__( 'Settings for header', 'hatbazar' ),
        'panel'          => 'hatbazaroptions',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'headerbackgroundcolor', array(
        'type'        => 'color',
        'settings'    => 'header_bg_color',
        'label'       => __( 'Header Background color', 'hatbazar' ),
        'description' => esc_attr__( 'Select header bag color.', 'hatbazar' ),
        'section'     => 'header_setting',
    ) );
    Kirki::add_field( 'headertextcolor', array(
        'type'        => 'color',
        'settings'    => 'header_text_color',
        'label'       => __( 'Header Text color', 'hatbazar' ),
        'description' => esc_attr__( 'Select header text color.', 'hatbazar' ),
        'section'     => 'header_setting',
        'default'     => '#fff'
    ) );
    Kirki::add_field( 'headertexthovercolor', array(
        'type'        => 'color',
        'settings'    => 'header_text_hover_color',
        'label'       => __( 'Header Text Hover color', 'hatbazar' ),
        'description' => esc_attr__( 'Select header hover text color.', 'hatbazar' ),
        'section'     => 'header_setting',
        'default'     => '#fff'
    ) );

    Kirki::add_field( 'headersocialitem1', array(
        'type'        => 'link',
        'settings'    => 'header_social_fb_icon',
        'label'       => __( 'Fb link', 'hatbazar' ),
        'section'     => 'header_setting',
        'default'     => '#'
    ) );
    Kirki::add_field( 'headersocialitem2', array(
        'type'        => 'link',
        'settings'    => 'header_social_gplus_icon',
        'label'       => __( 'Google plus link', 'hatbazar' ),
        'section'     => 'header_setting',
        'default'     => '#'
    ) );
    Kirki::add_field( 'headersocialitem3', array(
        'type'        => 'link',
        'settings'    => 'header_social_twitter_icon',
        'label'       => __( 'Twitter link', 'hatbazar' ),
        'section'     => 'header_setting',
        'default'     => '#'
    ) );
    Kirki::add_field( 'headersocialitem4', array(
        'type'        => 'link',
        'settings'    => 'header_social_instagram_icon',
        'label'       => __( 'Instagram link', 'hatbazar' ),
        'section'     => 'header_setting',
        'default'     => '#'
    ) );
    Kirki::add_field( 'headersocialitem5', array(
        'type'        => 'link',
        'settings'    => 'header_social_pin_icon',
        'label'       => __( 'Pinterest link', 'hatbazar' ),
        'section'     => 'header_setting',
        'default'     => '#'
    ) );



    /**
     * section for slider
     */
    Kirki::add_section( 'home_slider_section', array(
        'title'          => esc_attr__( 'Slider setting', 'hatbazar' ),
        'description'    => esc_attr__( 'Settings for slider', 'hatbazar' ),
        'panel'          => 'hatbazaroptions',
        'priority'       => 160,
    ) );
    Kirki::add_field( 'homesliderfield', array(
        'type'        => 'repeater',
        'label'       => esc_attr__( 'Repeater Control', 'hatbazar' ),
        'section'     => 'home_slider_section',
        'priority'    => 10,
        'row_label' => array(
            'type'  => 'field',
            'value' => esc_attr__('Your custom value', 'hatbazar' ),
            'field' => 'link_text',
        ),
        'button_label' => esc_attr__('Add new', 'hatbazar' ),
        'settings'     => 'home_slider_setting',
        'default'      => array(
            array(
                'heading_text'      => esc_attr__( 'Heading title', 'hatbazar' ),
                'subheading_text'   => esc_attr__( 'Subtitle text', 'hatbazar' ),
                'image_url'         => esc_attr__( get_template_directory_uri() . '/img/slider/HOME1.jpg', 'hatbazar' ),
                'button_link'         => esc_attr__( 'http://hatbazar.com', 'hatbazar' ),
            ),
            array(
                'heading_text'      => esc_attr__( 'Heading title', 'hatbazar' ),
                'subheading_text'   => esc_attr__( 'Subtitle text', 'hatbazar' ),
                'image_url'         => esc_attr__(  get_template_directory_uri() . '/img/slider/HOME1.jpg', 'hatbazar' ),
                'button_link'         => esc_attr__( 'http://hatbazar.com', 'hatbazar' ),
            ),
        ),
        'fields' => array(
            'heading_text' => array(
                'type'        => 'text',
                'label'       => esc_attr__( 'Heading Text', 'hatbazar' ),
                'description' => esc_attr__( 'Add heading', 'hatbazar' ),
                'default'     => '',
            ),
            'subheading_text' => array(
                'type'        => 'text',
                'label'       => esc_attr__( 'Subheading Text', 'hatbazar' ),
                'description' => esc_attr__( 'Add Subheading', 'hatbazar' ),
                'default'     => '',
            ),
            'image_url' => array(
                'type'        => 'image',
                'label'       => esc_attr__( 'Add image', 'hatbazar' ),
                'description' => esc_attr__( 'Add slider image', 'hatbazar' ),
                'default'     => get_template_directory_uri() . '/img/slider/HOME1.jpg',
            ),
            'button_link' => array(
                'type'        => 'link',
                'label'       => esc_attr__( 'Button link', 'hatbazar' ),
                'description' => esc_attr__( 'Add url for the button', 'hatbazar' ),
                'default'     => 'http://hatbazar.com',
            ),
        )
    ) );
    Kirki::add_field( 'withofhomeslider', array(
        'type'        => 'dimension',
        'settings'    => 'home_slider_height',
        'label'       => esc_attr__( 'Slider height', 'hatbazar' ),
        'description' => esc_attr__( 'Set the height of slider.', 'hatbazar' ),
        'section'     => 'home_slider_section',
        'default'     => '400px',
    ) );


    /**
     * Home: Special links sedtion
     */
    Kirki::add_section( 'home_special_link_section', array(
        'title'          => esc_attr__( 'Special link setting', 'hatbazar' ),
        'description'    => esc_attr__( 'Add your special text, image, link here', 'hatbazar' ),
        'panel'          => 'hatbazaroptions',
        'priority'       => 160,
    ) );
    Kirki::add_field( 'homespecialtitle', array(
        'type'        => 'text',
        'settings'    => 'home_special_seciton_title',
        'label'       => esc_attr__( 'Add tittle ', 'hatbazar' ),
        'description' => esc_attr__( 'Add the title here.', 'hatbazar' ),
        'section'     => 'home_special_link_section',
        'default'     => 'Special Links',
    ) );
    Kirki::add_field( 'homespeciallinks', array(
        'type'        => 'repeater',
        'label'       => esc_attr__( 'Repeater Control', 'hatbazar' ),
        'section'     => 'home_special_link_section',
        'priority'    => 10,
        'row_label' => array(
            'type'  => 'field',
            'value' => esc_attr__('Your custom value', 'hatbazar' ),
            'field' => 'link_text',
        ),
        'button_label' => esc_attr__('Add new ', 'hatbazar' ),
        'settings'     => 'home_sections_element_setting',
        'default'      => array(
            array(
                'heading_text'      => esc_attr__( 'Heading title', 'hatbazar' ),
                'href_link'         => esc_attr__( 'http://hatbazar.com', 'hatbazar' ),
                'image_url'         => esc_attr__( get_template_directory_uri() . '/img/content/family.png', 'hatbazar' ),

            ),
            array(
                'heading_text'      => esc_attr__( 'Heading title', 'hatbazar' ),
                'href_link'         => esc_attr__( 'http://hatbazar.com', 'hatbazar' ),
                'image_url'         => esc_attr__(  get_template_directory_uri() . '/img/content/image-directorio.jpg', 'hatbazar' ),
            ),
        ),
        'fields' => array(
            'heading_text' => array(
                'type'        => 'text',
                'label'       => esc_attr__( 'Heading Text', 'hatbazar' ),
                'description' => esc_attr__( 'Add heading', 'hatbazar' ),
                'default'     => '',
            ),
            'href_link' => array(
                'type'        => 'link',
                'label'       => esc_attr__( 'Link', 'hatbazar' ),
                'description' => esc_attr__( 'Add url for the section', 'hatbazar' ),
                'default'     => 'http://hatbazar.com',
            ),
            'image_url' => array(
                'type'        => 'image',
                'label'       => esc_attr__( 'Add image', 'hatbazar' ),
                'description' => esc_attr__( 'Add section image', 'hatbazar' ),
                'default'     => get_template_directory_uri() . '/img/content/image-directorio.jpg',
            ),
        )
    ) );




?>