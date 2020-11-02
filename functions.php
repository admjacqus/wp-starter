<?php 
require_once('lib/customize.php');
require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');
require_once('lib/sidebars.php');
require_once('lib/theme-support.php');
require_once('lib/navigation.php');



// action
// function after_pagination() {
//     echo 'After pagination...';
// }
// add_action( '_themename_after_pagination', 'after_pagination' );

// add_action( 'pre_get_posts', 'function_to_add');

// function function_to_add($query){
//     if($query->is_main_query()){
//         $query->set('posts_per_page', 2);
//     }
// }

// function no_posts_text($text){
//     return esc_html__('Zilch posts found.', 'something-child');
// }
// add_filter('_themename_no_posts_text', 'no_posts_text');

function add_description_to_menu($item_output, $item, $depth, $args) {
    if (strlen($item->description) > 0 ) {
        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= '<span class="description">' . esc_html($item->description) . '</span>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
    }   
    return $item_output;

 }
 add_filter('walker_nav_menu_start_el', 'add_description_to_menu', 10, 4);

?>