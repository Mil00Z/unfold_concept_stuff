<?php
//Add custom StyleSheet


function add_custom_style() {

    wp_enqueue_style( 'style', get_stylesheet_uri()  . 'style.css');
//    wp_register_style( 'style', get_template_directory_uri() . 'styles.css', array(), '1.0');
}
add_action('wp_enqueue_scripts','add_custom_style');

//Activer le support des thumbnails
add_theme_support('post-thumbnails');


//Ajouter des tailles d'images custom
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'medium-350', 350, 350, true ); /* Taille perso  1 */
    add_image_size( 'large-700', 700, 700, true ); /* Taille perso  2 */
    add_image_size( 'custom-600*400', 600, 400, true );  /* Taille perso  3 */
    add_image_size('full-width',1300,500,true);
}

add_filter('image_size_names_choose', 'add_custom_thumb');
function add_custom_thumb($sizes) {
    $addsizes = array(
        "medium-350" => __( "medium-350"),
        "large-700" => __( "large-700"),
        "full-width" => __( "Full Width"),
    );
    $newsizes = array_merge($sizes, $addsizes);
    return $newsizes;
}

//ajouter des menus
function add_my_menus(){
    register_nav_menus(
        array(
            'main-nav'=>__('Main Nav'),
            'social-nav'=>__('Social Nav'),
            'legal-nav'=>__('Legal Nav'),
        )
    );
}
add_action('init','add_my_menus');

