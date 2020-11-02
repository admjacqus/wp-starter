<?php 

function _themename_customize_register( $wp_customize ) {

    $wp_customize->add_section('_themename_footer_options', array(
        'title' => esc_html__( 'Footer Options', '_themename_' ),
        'description' => esc_html__( 'You can chnage the footer options from here.', '_themename' )
    ));

    $wp_customize -> add_setting('_themename_site_info', array(
        'default' => '',
        'sanitize_callback' => '_themename_sanitize_site_info',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('_themename_site_info', array(
        'type' => 'text',
        'label' => esc_html__('Site Info', '_themename'),
        'section' => '_themename_footer_options'
    ));

    $wp_customize->add_setting('_themename_footer_bg', array(
        'default' => 'dark',
        'sanitize_callback' => '_themename_sanitize_footer_bg'
    ));
    $wp_customize->add_control('_themename_footer_bg', array(
        'type' => 'select',
        'label' => esc_html__( 'Footer Background', '_themename' ),
        'choices' => array(
            'light' => esc_html__( 'Light', '_themename' ),
            'dark' => esc_html__( 'Dark', '_themename' )
        ),
        'section' => '_themename_footer_options'

    ));

    $wp_customize->add_setting('_themename_footer_layout', array(
        'default' => '3,3,3,3',
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => '_themename_validate_footer_layout'
    ));
    $wp_customize->add_control('_themename_footer_layout', array(
        'type' => 'text',
        'label' => esc_html__('Footer Layout', '_themename'),
        'section' => '_themename_footer_options'
    ));
};

add_action( 'customize_register', '_themename_customize_register' );

function _themename_validate_footer_layout($validity, $value) {
    if(!preg_match('/^([1-9]|1[012])(,([1-9]|1[012]))*$/', $value)){
        $validity->add('invalid footer layout', esc_html__('Footer layout is invalid', '_themename'));
    }
    return $validity;
}

function _themename_sanitize_footer_bg ( $input ) {
    $valid = array('light', 'dark');
    if( in_array($input, $valid, true) ) {
        return $input;
    }
    return 'dark';
}

function _themename_sanitize_site_info( $input ) {
    $allowed = array('a' => array(
            'href' => array(),
            'title' => array()
    ));
    return wp_kses($input, $allowed);
}

?>