<?php 
    function _themename_register_menus() {
        register_nav_menus( array(
            'header-left-menu' => esc_html__('Header left menu items.', '_themename'),
            'header-right-menu' => esc_html__('Header right menu items', '_themename')
        ) );
    }
    add_action( 'init', '_themename_register_menus' )
?>