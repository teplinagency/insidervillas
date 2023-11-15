<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('shortcodes');
add_theme_support( 'title-tag' );

register_nav_menus(
	array(
		'main_menu' => 'Main Menu',
		'second_menu' => 'Secondary Menu',
		'footer_menu' => 'Footer Menu',
		'about_menu' => 'About Menu',
		'help_menu' => 'Help Menu'
	)
);

add_filter('wpcf7_autop_or_not', '__return_false');

function jquery_script_method() {
    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-core' ); 
    wp_deregister_script( 'jquery-migrate' );
    wp_register_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', FALSE );
    wp_enqueue_script( 'jquery' );  
} 
add_action('wp_enqueue_scripts', 'jquery_script_method');


function theme_method(){
    wp_enqueue_style( 'fancybox_style', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css' );
    wp_enqueue_style( 'slick_style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
	
    if(is_front_page()) wp_enqueue_style('main_page_css', get_template_directory_uri() . '/assets/css/style.css');
    else {
		wp_enqueue_style('main_page_css', get_template_directory_uri() . '/assets/css/style.css?v='.time());
		wp_enqueue_style('pages_css', get_template_directory_uri() . '/assets/css/page.css');
	}
	
		wp_enqueue_style('air_css', get_template_directory_uri() . '/assets/css/air-datepicker.css');
	
    wp_enqueue_style( 'custom_style', get_stylesheet_uri() ); //base template style
	
	//if(is_page_template('page_templates/villas.php') || is_page_template('page_templates/search.php')) {
		//wp_enqueue_style( 'jquery_ui', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );
		//wp_enqueue_script('jquery_ui', '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array('jquery'), false, false);			
	//}
	
	wp_enqueue_style('select_css', 'https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.min.css');
	wp_enqueue_script('select_js', 'https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.js', array('jquery'), false, true);

    wp_enqueue_script('theme_fancybox', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'), false, true);
    wp_enqueue_script('theme_slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), false, true);
	wp_enqueue_script('theme_gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', array('jquery'), false, true);
	wp_enqueue_script('theme_strigger', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js', array('jquery'), false, true);
    wp_enqueue_script('theme_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, true);
	wp_enqueue_script('cookie_js', '//cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js', array('jquery'), false, true);
	wp_enqueue_script('datepicker_js', get_template_directory_uri() . '/assets/js/air-datepicker.js', array('jquery'), false, true);
	wp_enqueue_script('custom_js', get_template_directory_uri() . '/assets/js/custom.js?v='.time(), array('jquery'), false, true);
	
}
add_action( 'wp_enqueue_scripts', 'theme_method' );


require_once locate_template( 'inc/post_types.php' );
require_once locate_template( 'inc/ajax.php' );
//require_once locate_template( 'inc/user-registration.php' );


add_action( 'admin_enqueue_scripts', function(){
    wp_enqueue_style( 'my-wp-admin', get_template_directory_uri() .'/assets/css/wp-admin.css' );
}, 99 );

function my_revisions_to_keep( $revisions ) {
    return 0;
}
add_filter( 'wp_revisions_to_keep', 'my_revisions_to_keep' );


remove_action('wp_head','feed_links_extra', 3); 
remove_action('wp_head','feed_links', 2); 
remove_action('wp_head','rsd_link');  
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_generator');
remove_action('wp_head','start_post_rel_link',10);
remove_action('wp_head','index_rel_link');
remove_action('wp_head','adjacent_posts_rel_link_wp_head', 10 );
remove_action('wp_head','wp_shortlink_wp_head', 10 );
remove_action( 'wp_head', 'rest_output_link_wp_head');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
remove_action( 'template_redirect', 'rest_output_link_header', 11 );
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
add_filter('the_generator', '__return_empty_string'); 
remove_action( 'wp_head', 'wp_resource_hints', 2); 
remove_action( 'wp_head','locale_stylesheet');
//add_filter('show_admin_bar', '__return_false');

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

// remove version from scripts and styles
function remove_version_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'remove_version_scripts_styles', 9999);


if(function_exists('acf_add_options_page')){
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
	acf_add_options_sub_page([
		'page_title' => 'Modals',
		'icon_url' => '',
		'parent_slug'	=> 'theme-general-settings',
	]);
}

function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyDiAY0QGCd6LPf7usc0kRZeWqwvNokl5aA');
}
add_action('acf/init', 'my_acf_init');

add_filter( 'plugin_action_links', 'disable_plugin_deactivation', 10, 2 );
function disable_plugin_deactivation( $actions, $plugin_file ) {
    unset( $actions['edit'] );

    $important_plugins = array(
        'advanced-custom-fields-pro/acf.php',
        'contact-form-7/wp-contact-form-7.php',
    );
    if ( in_array( $plugin_file, $important_plugins ) ) {
        unset( $actions['deactivate'] );
        $actions[ 'info' ] = '<b class="musthave_js">Must have!</b>';
    }

    return $actions;
}


add_filter( 'admin_print_footer_scripts-plugins.php', 'disable_plugin_deactivation_hide_checkbox' );
function disable_plugin_deactivation_hide_checkbox( $actions ){
    ?>
    <script>
        jQuery(function($){
            $('.musthave_js').closest('tr').find('input[type="checkbox"]').remove();
        });
    </script>
    <?php
}



function filter_plugin_updates( $update ) {
    global $DISABLE_UPDATE; // см. wp-config.php
    if( !is_array($DISABLE_UPDATE) || count($DISABLE_UPDATE) == 0 ){  return $update;  }
    foreach( $update->response as $name => $val ){
        foreach( $DISABLE_UPDATE as $plugin ){
            if( stripos($name,$plugin) !== false ){
                unset( $update->response[ $name ] );
            }
        }
    }
    return $update;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );

$DISABLE_UPDATE = array('acf');






//Добавление класса к отдельным элементам меню
//add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 4 );
function add_my_class_to_nav_menu( $classes, $item, $args, $depth ){
    //$classes = []; //clean all classes
   if( $args->theme_location === 'mobile_menu' ) {
        if($depth === 1) $classes[] = 'headerServiceMobile__link';
        else $classes[] = 'linksMobile__list--item';
    }
    elseif( $args->theme_location === 'footer_menu' ) {
        if($depth === 1) $classes[] = 'footerService__link';
        else $classes[] = 'footer__link';

    }
    elseif( $args->theme_location === 'head_menu' ) {
        if($depth === 1) $classes[] = 'headerService__link';
        $classes[] = 'links__list--item';
    }

    return $classes;
}
//добавление класса подменю
function my_nav_menu_submenu_css_class( $classes ) {
    $classes[] = 'dropdown-menu';
    return $classes;
}
//add_filter( 'nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class' );

// Добавляем классы ссылкам меню
//add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
    switch( $args->theme_location ) {
        case 'main_menu':
            if(is_front_page()) $class = 'menu__link';
            else $class = 'nav__link';
            break;
        case 'footer_menu_1':
            $class = 'footer__link';
            break;
        case 'footer_menu_2':
            $class = 'footer__link footer__link_bold';
            break;
        case 'mobile_menu':
            $class = 'nav-mobile__link';
            break;
    }

    $atts['class'] = isset( $atts['class'] ) ? "{$atts['class']} $class" : $class;
    return $atts;
}

function get_full_area( $tag, $parents, $view, $html = array()) {
	if(!$parents) $parents = [];
	
	if($view == 'text') $html[] = $tag->name;
	elseif($view == 'links') $html[] = '<a href="'. get_term_link( $tag->term_id, 'post_tag' ) .'">'. $tag->name .'</a>';

	$parent_term = get_term_by( 'id', $tag->parent, 'areas' );
	if($parent_term) $parents[] = $parent_term->term_id;		
	if($parent_term->parent) return get_full_area($parent_term, $parents);
	elseif($parent_term) {
		if($view == 'text') $html[] = $parent_term->name;
		elseif($view == 'links') $html[] = '<a href="'. get_term_link( $parent_term->term_id, 'post_tag' ) .'">'. $parent_term->name .'</a>';
	}
	
	if(count($html) > 1 ) $html = implode(', ', $html);
	else $html = implode('', $html);
	
	return $html;
}
?>