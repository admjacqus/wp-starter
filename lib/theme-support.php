<?php 

function _themename_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html', array('search-form', 'comment-list', 'comment-form', 'gallery', 'caption') );
    add_theme_support( 'custom-logo', array(
        'height' => 175,
        'width' => 390,
        'flex-height' => true,
        'flex-width' => true
    ) );
}

add_action( 'after_setup_theme', '_themename_theme_support');
?>