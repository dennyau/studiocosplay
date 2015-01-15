<?php
/*
 * Homepage Carousel customizer section
 */

// Main function to feed to Wordpress Customizer registration hooks
function homepage_customizer_customizer_section( $wp_customize ) {

    $section_name = 'homepage_customizer_section';
    $title_suffix = '_title';
    $caption_suffix = '_caption';
    $car1 = 'carousel1';
    $car2 = 'carousel2';
    $car3 = 'carousel3';
    $title1 = $car1 . $title_suffix;
    $title2 = $car2 . $title_suffix;
    $title3 = $car3 . $title_suffix;
    $caption1 = $car1 . $caption_suffix;
    $caption2 = $car2 . $caption_suffix;
    $caption3 = $car3 . $caption_suffix;

    // create the customizer section to put the controls in
    $wp_customize->add_section(
        $section_name,
        array(
            'title' => 'Homepage Layout',
            'description' => 'Toggles which parts of the homepage layout are visible',
            'priority' => 1,
        )
    );

    // Carousel 1 title
    $wp_customize->add_setting( $title1,
        array(
            'sanitize_callback' => 'customizer_sanitize_text', 
            'default' => ''
        ));
    $wp_customize->add_control( $title1,
        array(
            'label' => 'Carousel 1 Title',
            'type' => 'text',
            'section' => $section_name
        ));

    // Carousel 2 title
    $wp_customize->add_setting( $title2,
        array(
            'sanitize_callback' => 'customizer_sanitize_text', 
            'default' => ''
        ));
    $wp_customize->add_control( $title2,
        array(
            'label' => 'Carousel 2 Title',
            'type' => 'text',
            'section' => $section_name
        ));

    // Carousel 3 title
    $wp_customize->add_setting( $title3,
        array(
            'sanitize_callback' => 'customizer_sanitize_text', 
            'default' => ''
        ));
    $wp_customize->add_control( $title3,
        array(
            'label' => 'Carousel 3 Title',
            'type' => 'text',
            'section' => $section_name
        ));

    // Carousel 1 Caption
    $wp_customize->add_setting( $caption1,
        array(
            'sanitize_callback' => 'customizer_sanitize_text', 
            'default' => ''
        ));
    $wp_customize->add_control( $caption1,
        array(
            'label' => 'Carousel 1 Caption',
            'type' => 'text',
            'section' => $section_name
        ));

    // Carousel 2 Caption
    $wp_customize->add_setting( $caption2,
        array(
            'sanitize_callback' => 'customizer_sanitize_text', 
            'default' => ''
        ));
    $wp_customize->add_control( $caption2,
        array(
            'label' => 'Carousel 2 Caption',
            'type' => 'text',
            'section' => $section_name
        ));

    // Carousel 3 Caption
    $wp_customize->add_setting( $caption3,
        array(
            'sanitize_callback' => 'customizer_sanitize_text', 
            'default' => ''
        ));
    $wp_customize->add_control( $caption3,
        array(
            'label' => 'Carousel 3 Caption',
            'type' => 'text',
            'section' => $section_name
        ));
}
add_action( 'customize_register', 'homepage_customizer_customizer_section' );
