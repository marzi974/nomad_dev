<?php


/* ==========================================================================
Menus
========================================================================== */


remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function add_menu_class_fancybox ($ulclass) {
    return preg_replace('/<a rel="fancybox"/', '<a class="fancybox"', $ulclass, -1);
}
add_filter('wp_nav_menu','add_menu_class_fancybox');



function add_menu_class_serv_link ($ulclass) {
    return preg_replace('/<a rel="serv_link"/', '<a class="serv_link"', $ulclass, -1);
}
add_filter('wp_nav_menu','add_menu_class_serv_link');



add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
    register_nav_menu( 'main', 'Navigation Principale' );
    register_nav_menu( 'mobile', 'Navigation mobile' );

}




/* ==========================================================================
Scripts & styles
========================================================================== */


function wpb_adding_scripts()
{
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), null, false );

    if ( is_page_template('page-joindre.php') ) {
        wp_register_script( 'google_maps', 'http://maps.google.com/maps/api/js?v=3&amp;sensor=false' );
        wp_enqueue_script( 'google_maps' );

        wp_register_script('map_script', get_template_directory_uri() . '/js/map.js', array('jquery'), '1.1', true);
        wp_enqueue_script('map_script');
    }

        wp_register_script( 'imagesloaded_js',  get_stylesheet_directory_uri() . '/js/imagesloaded.js', array('jquery'),'1.1', true );
        wp_enqueue_script('imagesloaded_js');

        wp_register_script( 'isotope_js',  get_stylesheet_directory_uri() . '/js/isotope.js', array('jquery'),'1.1', true );
        wp_enqueue_script('isotope_js');

    /*
           wp_register_script('cycle_swipe', get_template_directory_uri() . '/js/cycle2.swipe.min.js', array('jquery'), '1.1', true);
           wp_enqueue_script('cycle_swipe');


           wp_register_script('owl_script', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.1', true);
           wp_enqueue_script('owl_script');

   */
        wp_register_script('flexslider_script', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '1.1', true);
        wp_enqueue_script('flexslider_script');

        wp_register_script('fancybox_script', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.pack.js', array('jquery'), '1.1', true);
        wp_enqueue_script('fancybox_script');

    wp_register_script('script', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.1', true);
    wp_enqueue_script('script');



}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );




function wpb_adding_styles()
{

  /*  wp_register_style('owl_style', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('owl_style');

    wp_register_style('owl_style_transition', get_template_directory_uri() . '/css/owl.transitions.css');
    wp_enqueue_style('owl_style_transition');


    wp_register_style('fancybox_style', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.css');
    wp_enqueue_style('fancybox_style')    ;

    wp_register_style('owl_style_transition', get_template_directory_uri() . '/css/owl.transitions.css');
    wp_enqueue_style('owl_style_transition');*/

    wp_register_style('flexslider_style', get_template_directory_uri() . '/css/flexslider.css',array(),null );
    wp_enqueue_style('flexslider_style');


    wp_register_style('style', get_template_directory_uri() . '/css/app.css',array(),null );
    wp_enqueue_style('style');
}


add_action( 'wp_enqueue_scripts', 'wpb_adding_styles' );


/* ==========================================================================
Excerpt
========================================================================== */



function get_excerpt($count){
    $permalink = get_permalink($post->ID);
    $excerpt = get_the_content();
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = $excerpt.'...';
    $excerpt = $excerpt.'<a href='.$permalink.' >  Lire la suite ></a>';
    return $excerpt;
}


function custom_field_excerpt($name, $nb) {
    global $post;
    $text = get_field($name);
    if ( '' != $text ) {
        $text = strip_shortcodes( $text );
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]&gt;', ']]&gt;', $text);
        $excerpt_length = $nb; // 20 words
        $excerpt_more = apply_filters('excerpt_more', ' ' . '...');
        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    }
    return apply_filters('the_excerpt', $text);
}


/* ==========================================================================
Thumbnails
========================================================================== */

add_theme_support( 'post-thumbnails' );

add_image_size( 'news', 370,245, true );
add_image_size( 'news_big', 615,365, true );
add_image_size( 'carre', 250,250, true );
add_image_size( 'produit', 600,480, true );
add_image_size( 'logo', 150,50 );




/* ==========================================================================
Promotions
========================================================================== */

add_action('init', 'create_promotions');
function create_promotions()
{
    $labels = array(
        'name' => _x('Promotions', 'promotions'),
        'singular_name' => _x('Promotion', 'promotion'),
        'add_new' => 'Ajouter', 'promotion',
        'add_new_item' => 'Ajouter une nouvelle promotion',
        'edit_item' => 'Editer une promotion',
        'new_item' => 'Nouvelle promotion',
        'view_item' => 'Voir une promotion',
        'search_items' => 'Chercher une promotion',
        'not_found' =>  'Aucun promotion trouvée',
        'not_found_in_trash' => 'Aucune promotion dans la poubelle',
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'menu_icon'           => 'dashicons-thumbs-up',
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => 20,
        'supports' => array('title','editor','thumbnail','page-attributes','custom-fields')
    );
    register_post_type('promotion',$args);
}


/* ==========================================================================
Expertise
========================================================================== */

add_action('init', 'create_expertise');
function create_expertise()
{
    $labels = array(
        'name' => _x('Expertise', 'expertise'),
        'singular_name' => _x('Expertise', 'expertise'),
        'add_new' => 'Ajouter', 'expertise',
        'add_new_item' => 'Ajouter une nouvelle expertise',
        'edit_item' => 'Editer l\'expertise',
        'new_item' => 'Nouvelle expertise',
        'view_item' => 'Voir l\'expertise',
        'search_items' => 'Chercher une expertise',
        'not_found' =>  'Aucune expertise trouvé',
        'not_found_in_trash' => 'Aucune expertise dans la poubelle',
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 20,
        'supports' => array('title','editor','thumbnail')
    );
    register_post_type('expertise',$args);
}



register_taxonomy( "expertise-type",
    array( 	"expertise" ),
    array( 	"hierarchical" => true,
        "labels" => array('name'=>"Type",'add_new_item'=>"Ajouter un type"),
        "singular_label" => __( "type" )
    )
);

register_taxonomy( "expertise-cat",
    array( 	"expertise" ),
    array( 	"hierarchical" => true,
        "labels" => array('name'=>"Catégorie",'add_new_item'=>"Ajouter un catégorie"),
        "singular_label" => __( "Catégorie" )
    )
);


/* ==========================================================================
Réalisation
========================================================================== */

add_action('init', 'create_realisation');
function create_realisation()
{
    $labels = array(
        'name' => _x('Réalisation', 'réalisation'),
        'singular_name' => _x('Réalisation', 'réalisation'),
        'add_new' => 'Ajouter', 'réalisation',
        'add_new_item' => 'Ajouter une nouvelle réalisation',
        'edit_item' => 'Editer la réalisation',
        'new_item' => 'Nouvelle réalisation',
        'view_item' => 'Voir la réalisation',
        'search_items' => 'Chercher une réalisation',
        'not_found' =>  'Aucune réalisation trouvé',
        'not_found_in_trash' => 'Aucune réalisation dans la poubelle',
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 20,
        'supports' => array('title','editor','thumbnail')
    );
    register_post_type('realisation',$args);
}



register_taxonomy( "realisation-categorie",
    array( 	"realisation" ),
    array( 	"hierarchical" => true,
        "labels" => array('name'=>"Catégories",'add_new_item'=>"Ajouter une catégorie"),
        "singular_label" => __( "Categorie" )
    )
);

/* ==========================================================================
Inspiration
========================================================================== */

add_action('init', 'create_inspiration');
function create_inspiration()
{
    $labels = array(
        'name' => _x('Inspiration', 'inspiration'),
        'singular_name' => _x('Inspiration', 'inspiration'),
        'add_new' => 'Ajouter', 'forfinspirationait',
        'add_new_item' => 'Ajouter une nouvelle inspiration',
        'edit_item' => 'Editer l\'inspiration',
        'new_item' => 'Nouvelle inspiration',
        'view_item' => 'Voir l\'inspiration',
        'search_items' => 'Chercher une inspiration',
        'not_found' =>  'Aucun inspiration trouvée',
        'not_found_in_trash' => 'Aucune inspiration dans la poubelle',
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 20,
        'supports' => array('title','editor','thumbnail')
    );
    register_post_type('inspiration',$args);
}



register_taxonomy( "inspiration-type",
    array( 	"inspiration" ),
    array( 	"hierarchical" => true,
        "labels" => array('name'=>"Type",'add_new_item'=>"Ajouter un type"),
        "singular_label" => __( "type" )
    )
);


/* ==========================================================================
Services
========================================================================== */

add_action('init', 'create_services');
function create_services()
{
    $labels = array(
        'name' => _x('Services', 'services'),
        'singular_name' => _x('Service', 'Service'),
        'add_new' => 'Ajouter', 'service',
        'add_new_item' => 'Ajouter un nouveau service',
        'edit_item' => 'Editer un service',
        'new_item' => 'Nouveau service',
        'view_item' => 'Voir un service',
        'search_items' => 'Chercher un service',
        'not_found' =>  'Aucun service trouvé',
        'not_found_in_trash' => 'Aucun service dans la poubelle',
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'menu_icon'           => 'dashicons-thumbs-up',
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => 20,
        'supports' => array('title','editor','thumbnail','page-attributes','custom-fields')
    );
    register_post_type('service',$args);
}



/* ==========================================================================
Ajax
========================================================================== */


function add_js_scripts() {
    wp_enqueue_script( 'script', get_template_directory_uri().'/js/script.js', array('jquery'), '1.0', true );

    // pass Ajax Url to script.js
    wp_localize_script('script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}
add_action('wp_enqueue_scripts', 'add_js_scripts');



add_action( 'wp_ajax_count_share', 'count_share' );
add_action( 'wp_ajax_nopriv_count_share', 'count_share' );

add_action( 'wp_ajax_count_like', 'count_like' );
add_action( 'wp_ajax_nopriv_count_like', 'count_like' );


function count_share(){

    global $post;

    $postID = $_POST['id'];

    $count_key = 'post_link_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }

    echo getadd_share_link($postID);
    die();
}

function count_like(){

    global $post;

    $postID = $_POST['id'];

    $count_key = 'post_like_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
    echo getadd_like_link($postID);
    die();
}

/* ==========================================================================
Support SVG
========================================================================== */


function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



/* ==========================================================================
Count post
========================================================================== */

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}



function posts_link_next_class($format){
    $format = str_replace('href=', 'class="navigation_news next" href=', $format);
    $format = str_replace('</a>', '<img src="http://produpatio.option-design.ca/wp-content/themes/produpatio/img/chevron_right.svg" alt=""></a>', $format);
    return $format;
}
add_filter('next_post_link', 'posts_link_next_class');





function getadd_share_link($postID){
    $count_key = 'post_link_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

function getadd_like_link($postID){
    $count_key = 'post_like_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}