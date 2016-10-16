<?php
function my_theme_enqueue_styles() {
    $parent_style = 'twentyfifteen-style';

    // Surcharge du thème parent
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'twentyfifteen-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    // Font Awesome
// wp-content/themes/twentytwelve-child/assets/font-awesome-4.6.3/css/font-awesome.min.css
// wp-content/themes/twentytwelve-child/assets/font-awesome-4.6.3/css/font-awesome.min.css
    wp_enqueue_style( 'font-awesome',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


// function wpdocs_my_search_form( $form ) {
//     $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
//     <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
//     <input type="text" value="' . get_search_query() . '" name="s" id="s" />
//     <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
//     </div>
//     </form>';
//
//     return $form;
// }
// add_filter( 'get_search_form', 'wpdocs_my_search_form' );

// function remove_posts_from_search($query) {
//     if ($query->is_search) {
//         $query->set('tag__not_in', array(
//             'unsearchable',
//         ));
//         $query->set('category__not_in', array(
//             'unsearchable',
//         ));
//     }
//     return $query;
// }
// add_filter('pre_get_posts','remove_posts_from_search');

function remove_pages_from_search() {
    global $wp_post_types;
    $wp_post_types['page']->exclude_from_search = true;
}
add_action('init', 'remove_pages_from_search');

?>
