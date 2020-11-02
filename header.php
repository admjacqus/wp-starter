<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <header role="banner" class="c-header u-margin-bottom-40">
            <div class="c-navigation u-flex u-align-justify u-align-middle">
                    <nav class="nav-header-left" role="navigation" aria-label="<?php esc_html__('Left Navigation', '_themename') ?>">
                        <?php wp_nav_menu( array('theme_location' => 'header-left-menu', 'container' => false) ) ?>
                    </nav>

                    <div class="c-header__logo">
                    <?php if(has_custom_logo()){
                                the_custom_logo();
                            } else { ?> 
                                <a href="<?php echo esc_url(home_url('/')) ?>" class="c-header__blogname">
                                    <?php esc_html(bloginfo('name')) ?>
                                </a>
                    <?php } ?>
                    </div>

                    <nav class="nav-header-right" role="navigation" aria-label="<?php esc_html__('Right Navigation', '_themename') ?>">
                        <?php wp_nav_menu( array('theme_location' => 'header-right-menu', 'container' => false) ) ?>
                    </nav>
            </div>
    </header>
    <div id="content">
    