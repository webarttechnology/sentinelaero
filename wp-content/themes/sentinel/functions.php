<?php

/**

 * Sentinelaero

 *

 * @package Lifestyle

 */





if ( ! function_exists( 'myfirsttheme_setup' ) ) :

/**

 * Sets up theme defaults and registers support for various WordPress features.

 *

 * Note that this function is hooked into the after_setup_theme hook, which runs

 * before the init hook. The init hook is too late for some features, such as indicating

 * support post thumbnails.

 */

function myfirsttheme_setup() {

 

    /**

     * Make theme available for translation.

     * Translations can be placed in the /languages/ directory.

     */

    load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

 

    /**

     * Add default posts and comments RSS feed links to &lt;head>.

     */

    add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

 

    /**

     * Enable support for post thumbnails and featured images.

     */

    add_theme_support( 'post-thumbnails' );

 

    /**

     * Add support for two custom navigation menus.

     */

    register_nav_menus( array(

        'primary'   => __( 'Primary Menu', 'myfirsttheme' ),

        'secondary' => __('Secondary Menu', 'myfirsttheme' )

    ) );

 

    /**

     * Enable support for the following post formats:

     * aside, gallery, quote, image, and video

     */

    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    add_theme_support('woocommerce');

}

endif; // myfirsttheme_setup

add_action( 'after_setup_theme', 'myfirsttheme_setup' );




function register_navwalker(){

    require_once get_template_directory() . '/Walker/functions.php';

}

add_action( 'after_setup_theme', 'register_navwalker' );





function get_id_by_slug($page_slug) {

    $page = get_page_by_path($page_slug);

    if ($page) {

        return $page->ID;

    } else {

        return null;

    }

} 





function my_login_logo_url() {

    return home_url();

}

add_filter( 'login_headerurl', 'my_login_logo_url' );





add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

function remove_wp_logo( $wp_admin_bar ) {

	$wp_admin_bar->remove_node( 'wp-logo' );

}





function wpb_sender_email($original_email_address)

{

    return 'Sales@sentinelaero.com';

}




add_filter('wp_mail_from', 'wpb_sender_email');


function wpb_sender_name( $original_email_from ) {

	return 'Sentinelaero';

}


add_filter( 'wp_mail_from_name', 'wpb_sender_name' );





/* add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {



  show_admin_bar(false);



}*/





add_filter( 'auto_update_plugin', '__return_false' );

add_filter( 'auto_update_theme', '__return_false' );




function prefix_create_testimonials() {
   

    $labels = array(

        'name'          => 'Testimonials', 

        'singular_name' => 'Testimonial'   

    );

  

    $supports = array(

        'title',        

        'editor',       

        'excerpt',      

        'author',       

        'thumbnail',   

        'comments',    

        'trackbacks',   

        'revisions',   

        'custom-fields' 

    );


   

    $args = array(

        'labels'              => $labels,

        'description'         => 'Post type ourtestimonials', 

        'supports'            => $supports,

        'hierarchical'        => false, 

        'public'              => true,  

        'show_ui'             => true,  

        'show_in_menu'        => true,  
        'show_in_nav_menus'   => true,  

        'show_in_admin_bar'   => true,  

        'menu_position'       => 5,     

        'menu_icon'           => true,  

        'can_export'          => true,  

        'has_archive'         => true,  

        'exclude_from_search' => false, 

        'publicly_queryable'  => true,  

        'capability_type'     => 'post',
        'rewrite'            => true

    );



    register_post_type('our-testimonials', $args); 
}

add_action('init', 'prefix_create_testimonials');




function prefix_create_ourservices() {
   

    $labels = array(

        'name'          => 'Ourservices', 

        'singular_name' => 'Ourservice'   

    );

  

    $supports = array(

        'title',        

        'editor',       

        'excerpt',      

        'author',       

        'thumbnail',   

        'comments',    

        'trackbacks',   

        'revisions',   

        'custom-fields' 

    );

   

    $args = array(

        'labels'              => $labels,

        'description'         => 'Post type ourservices', 

        'supports'            => $supports,

        'hierarchical'        => false, 

        'public'              => true,  

        'show_ui'             => true,  

        'show_in_menu'        => true,  
        'show_in_nav_menus'   => true,  

        'show_in_admin_bar'   => true,  

        'menu_position'       => 5,     

        'menu_icon'           => true,  

        'can_export'          => true,  

        'has_archive'         => true,  

        'exclude_from_search' => false, 

        'publicly_queryable'  => true,  

        'capability_type'     => 'post',
        'rewrite'            => true

    );


    register_post_type('our-service', $args); 
}

add_action('init', 'prefix_create_ourservices');



function prefix_create_ourgallery() {
   

    $labels = array(

        'name'          => 'Ourgallery', 

        'singular_name' => 'Ourgallery'   

    );

  

    $supports = array(

        'title',        

        'editor',       

        'excerpt',      

        'author',       

        'thumbnail',   

        'comments',    

        'trackbacks',   

        'revisions',   

        'custom-fields' 

    );

   

    $args = array(

        'labels'              => $labels,

        'description'         => 'Post type ourgallery', 

        'supports'            => $supports,

        'hierarchical'        => false, 

        'public'              => true,  

        'show_ui'             => true,  

        'show_in_menu'        => true,  
        'show_in_nav_menus'   => true,  

        'show_in_admin_bar'   => true,  

        'menu_position'       => 5,     

        'menu_icon'           => true,  

        'can_export'          => true,  

        'has_archive'         => true,  

        'exclude_from_search' => false, 

        'publicly_queryable'  => true,  

        'capability_type'     => 'post',
        'rewrite'            => true

    );


    register_post_type('ourgallery', $args); 
}

add_action('init', 'prefix_create_ourgallery');





 function slugify($text, string $divider = '-')

{

  // replace non letter or digits by divider

  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

  // transliterate

  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters

  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim

  $text = trim($text, $divider);

  // remove duplicate divider

  $text = preg_replace('~-+~', $divider, $text);

  // lowercase

  $text = strtolower($text);

  if (empty($text)) {

    return 'n-a';

  }

  return $text;

}



    /*  add active class in the anchor */


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'current ';
  }
  return $classes;
}





function k99_relative_time() { 
    $post_date = get_the_time('U');
    $delta = time() - $post_date;
    if ( $delta < 60 ) {
        echo 'Less than a minute ago';
    }
    elseif ($delta > 60 && $delta < 120){
        echo 'About a minute ago';
    }
    elseif ($delta > 120 && $delta < (60*60)){
        echo strval(round(($delta/60),0)), ' minutes ago';
    }
    elseif ($delta > (60*60) && $delta < (120*60)){
        echo 'About an hour ago';
    }
    elseif ($delta > (120*60) && $delta < (24*60*60)){
        echo strval(round(($delta/3600),0)), ' hours ago';
    }
    else {
        echo the_time('j\<\s\u\p\>S\<\/\s\u\p\> M y g:i a');
    }
}






function start_session() {
if(!session_id()) {
session_start();
}
}
add_action('init', 'start_session', 1);








add_filter( 'get_search_form', 'my_search_form1' );

function my_search_form1( $form ) {

    $form = '<form role="search" class="text-end"  action="'. get_site_url().'/shop">
                        
                           <div class="form-inner">
                             <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search" required />
                            <button type="submit"><i class="bx bx-search"></i></button>
                            </div>
                        
                    </form> 

                    ';

    return $form;
}



/* Only restricting woocommerce default search to search by title    */

function wpse_11826_search_by_title_only( $search, $wp_query ) {
    if ( ! empty( $search ) && ! empty( $wp_query->query_vars['search_terms'] ) ) {
        global $wpdb;

        $q = $wp_query->query_vars;
        $n = ! empty( $q['exact'] ) ? '' : '%';

        $search = array();

        foreach ( ( array ) $q['search_terms'] as $term )
            $search[] = $wpdb->prepare( "$wpdb->posts.post_title LIKE %s", $n . $wpdb->esc_like( $term ) . $n );

       /* 
       Removing user logged in restrictions
       if ( ! is_user_logged_in() )
            $search[] = "$wpdb->posts.post_password = ''"; */

        $search = ' AND ' . implode( ' AND ', $search );
    }

    return $search;
}

add_filter( 'posts_search', 'wpse_11826_search_by_title_only', 10, 2 );
/* Only restricting woocommerce default search to search by title    */