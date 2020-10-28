<?php get_header(); ?>

<h1>Hey, I'm the index</h1>

<?php if(have_posts()) { ?>
    <?php while(have_posts()) { ?>
        <?php the_post(); ?>
        <h2> 
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"> <?php the_title() ?>  </a> 
        </h2>
        <?php _themename_post_meta() ?>
        <div>
            <?php the_excerpt() ?>
        </div>
        <?php _themename_readmore_link() ?>
    <?php } ?>
    <?php the_posts_pagination(  ) ?>
<?php } else { ?>
<p> <?php esc_html_e('No posts found.', '_themename'); ?></p>
<?php } ?>

<?php
$city = 'Manchester';

printf(
    /* translators; %s is the city name */
    esc_html__('Your city is %s', '_themename'),
    $city
);
?>

<?php get_footer(); ?>