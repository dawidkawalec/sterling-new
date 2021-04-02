<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

add_action( 'init', 'woo_remove_wc_breadcrumbs' );
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

 
   if ( is_product() ) {
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
   }

   add_action( 'get_header', 'bbloomer_remove_storefront_sidebar' );
 
function bbloomer_remove_storefront_sidebar() {
   if ( is_product() ) {
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
   }
}


if( !function_exists('redirect_404_to_homepage') ){

    add_action( 'template_redirect', 'redirect_404_to_homepage' );

    function redirect_404_to_homepage(){
       if(is_404()):
            wp_safe_redirect( home_url('/') );
            exit;
        endif;
    }
}

add_action( 'woocommerce_after_checkout_billing_form', 'add_privacy_checkbox', 9 );
function add_privacy_checkbox() {
woocommerce_form_field( 'privacy_policy', array(
    'type' => 'checkbox',
    'class' => array('form-row privacy'),
    'label_class' => array('woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'),
    'input_class' => array('woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'),
    'required' => true,
    'label' => 'Akceptuję regulamin oraz politykę prywatności serwisu lexnonstop.com.',
    ));
}

add_action( 'woocommerce_checkout_process', 'privacy_checkbox_error_message' );
function privacy_checkbox_error_message() {
    if ( ! (int) isset( $_POST['privacy_policy'] ) ) {
        wc_add_notice( __( 'Aby dokonać zakupu, musisz zaakceptować regulamin.' ), 'error' );
    }
}




add_action( 'woocommerce_after_checkout_billing_form', 'add_privacy_checkbox2', 9 );
function add_privacy_checkbox2() {
woocommerce_form_field( 'privacy_policy2', array(
    'type' => 'checkbox',
    'class' => array('form-row privacy'),
    'label_class' => array('woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'),
    'input_class' => array('woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'),
    'required' => true,
    'label' => 'Akceptuję przetwarzanie moich danych osobowych przez Administratora: S7LEX Sp. z o.o. z siedzibą we
    Wrocławiu (53-605), Plac Orląt Lwowskich 20D, wpisaną do Krajowego Rejestru Sądowego przez Sąd Rejonowy dla
    Wrocław-Fabrycznej we Wrocławiu pod numerem KRS: 0000687761 w zakresie niezbędnym do obsługi zgłoszenia.',
    ));
}

add_action( 'woocommerce_checkout_process', 'privacy_checkbox_error_message2' );
function privacy_checkbox_error_message2() {
    if ( ! (int) isset( $_POST['privacy_policy2'] ) ) {
        wc_add_notice( __( 'Aby dokować zakupu, musisz wyrazić zgodę na przetwarzanie danych osobowych.' ), 'error' );
    }
}



add_action( 'woocommerce_after_checkout_billing_form', 'add_privacy_checkbox3', 9 );
function add_privacy_checkbox3() {
woocommerce_form_field( 'privacy_policy3', array(
    'type' => 'checkbox',
    'class' => array('form-row privacy'),
    'label_class' => array('woocommerce-form__label woocommerce-form__label-for-checkbox checkbox'),
    'input_class' => array('woocommerce-form__input woocommerce-form__input-checkbox input-checkbox'),
    'required' => false,
    'label' => 'Wyrażam zgodę na otrzymanie od prawnika oferty usługi dodatkowej powiązanej z moim zgłoszeniem.',
    ));
}

// add_action( 'woocommerce_checkout_process', 'privacy_checkbox_error_message3' );
// function privacy_checkbox_error_message3() {
//     if ( ! (int) isset( $_POST['privacy_policy3'] ) ) {
//         wc_add_notice( __( 'You have to agree to our privacy policy in order to proceed' ), 'error' );
//     }
// }



if ( ! function_exists( 'wp_bootstrap_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_bootstrap_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wp-bootstrap-starter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wp-bootstrap-starter' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_starter_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    function wp_boostrap_starter_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wp_boostrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_starter_setup' );


/**
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder(){
        $theme_page_url = 'https://afterimagedesigns.com/wp-bootstrap-starter/?dashboard=1';

            if(!get_option( 'triggered_welcomet')){
                $message = sprintf(__( 'Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'wp-bootstrap-starter' ),
                    esc_url( $theme_page_url )
                );

                printf(
                    '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
                    $message
                );
                add_option( 'triggered_welcomet', '1', '', 'yes' );
            }

}
add_action( 'admin_notices', 'wp_bootstrap_starter_reminder' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_starter_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-starter' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'wp-bootstrap-starter' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'wp-bootstrap-starter' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'wp-bootstrap-starter' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wp_bootstrap_starter_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts() {
	// load bootstrap css
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css' );
       // wp_enqueue_style( 'wp-bootstrap-starter-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.10.2/css/all.css' );
    } else {
        wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
       // wp_enqueue_style( 'wp-bootstrap-starter-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/fontawesome.min.css' );
    }
	// load bootstrap css
	// load AItheme styles
	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'wp-bootstrap-starter-style', get_stylesheet_uri() );
    if(get_theme_mod( 'theme_option_setting' ) && get_theme_mod( 'theme_option_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'theme_option_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/'.get_theme_mod( 'theme_option_setting' ).'.css', false, '' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-lora') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-merriweather') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-merriweather-font', 'https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700,900|Montserrat:300,400,400i,500,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-poppins') {
        wp_enqueue_style( 'wp-bootstrap-starter-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'roboto-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'arbutusslab-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-arbutusslab-opensans-font', 'https://fonts.googleapis.com/css?family=Arbutus+Slab|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'oswald-muli') {
        wp_enqueue_style( 'wp-bootstrap-starter-oswald-muli-font', 'https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800|Oswald:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'montserrat-opensans') {
        wp_enqueue_style( 'wp-bootstrap-starter-montserrat-opensans-font', 'https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,400,400i,600,600i,700,800' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'robotoslab-roboto') {
        wp_enqueue_style( 'wp-bootstrap-starter-robotoslab-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Roboto:300,300i,400,400i,500,700,700i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) && get_theme_mod( 'preset_style_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_style_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/typography/'.get_theme_mod( 'preset_style_setting' ).'.css', false, '' );
    }
    //custom style (from scss)
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/inc/assets/scss/style.css' );
    wp_enqueue_style( 'owl-carousel1', get_stylesheet_directory_uri() . '/inc/assets/css/owl.carousel.css' );
    wp_enqueue_style( 'owl-carousel2', get_stylesheet_directory_uri() . '/inc/assets/css/owl.theme.default.css' );
    wp_enqueue_style( 'owl-carousel3', get_stylesheet_directory_uri() . '/inc/assets/css/owl.theme.green.css' );

    //Color Scheme
    /*if(get_theme_mod( 'preset_color_scheme_setting' ) && get_theme_mod( 'preset_color_scheme_setting' ) !== 'default') {
        wp_enqueue_style( 'wp-bootstrap-starter-'.get_theme_mod( 'preset_color_scheme_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/'.get_theme_mod( 'preset_color_scheme_setting' ).'.css', false, '' );
    }else {
        wp_enqueue_style( 'wp-bootstrap-starter-default', get_template_directory_uri() . '/inc/assets/css/presets/color-scheme/blue.css', false, '' );
    }*/

	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_script('wp-bootstrap-starter-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.15.0/dist/umd/popper.min.js', array(), '', true );
    	wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array(), '', true );
    } else {
        wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
        wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    }
    wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
	wp_enqueue_script( 'wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
    }
    //custom style (from scss)
    wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/inc/assets/js/script.js' , array( 'jquery' ) );
    wp_enqueue_script( 'owl-carousel4', get_stylesheet_directory_uri() . '/inc/assets/js/owl.carousel.js' , array( 'owl' ) );


}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_scripts' );



/**
 * Add Preload for CDN scripts and stylesheet
 */
function wp_bootstrap_starter_preload( $hints, $relation_type ){
    if ( 'preconnect' === $relation_type && get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        $hints[] = [
            'href'        => 'https://cdn.jsdelivr.net/',
            'crossorigin' => 'anonymous',
        ];
        $hints[] = [
            'href'        => 'https://use.fontawesome.com/',
            'crossorigin' => 'anonymous',
        ];
    }
    return $hints;
} 

add_filter( 'wp_resource_hints', 'wp_bootstrap_starter_preload', 10, 2 );



function wp_bootstrap_starter_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "wp-bootstrap-starter" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "wp-bootstrap-starter" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "wp-bootstrap-starter" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'wp_bootstrap_starter_password_form' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}



//
// Stylowanie admin menu
//
add_action('admin_head', 'custom_admin_style');

function custom_admin_style() {
  echo '<style>
    #wpadminbar
    {
        background: #222344;
    }
    #adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu
    {
        background-color: #222344;
    }
    #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap
    {
        background-color: #070829;
    }
    #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu
    {
        background: #3eb9ff;
    }
    #adminmenu li.menu-top:hover, #adminmenu li.opensub>a.menu-top, #adminmenu li>a.menu-top:focus 
    {
    background-color: #222344;
    color: #fff;
    }
    #adminmenu .wp-submenu a:focus, #adminmenu .wp-submenu a:hover, #adminmenu a:hover, #adminmenu li.menu-top>a:focus 
    {
    color: #e0d5d2;
    }
    #adminmenu li a:focus div.wp-menu-image:before, #adminmenu li.opensub div.wp-menu-image:before, #adminmenu li:hover div.wp-menu-image:before
    {
    color: #e0d5d2;
    }
    #collapse-button:hover {
    color: #e0d5d2;
    font-weight: bold;
    }
    #adminmenu li.wp-has-submenu.wp-not-current-submenu.opensub:hover:after 
    {
    border-right-color: #3eb9ff;
    }
    #wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input {
    margin: 0;
    padding: 0;
    box-shadow: 0 3px 5px rgba(0,0,0,.2);
    background: #222344;
    display: none;
    position: absolute;
    float: none;
    }
    #wpadminbar .ab-top-menu>li.hover>.ab-item, #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus, #wpadminbar:not(.mobile) .ab-top-menu>li:hover>.ab-item, #wpadminbar:not(.mobile) .ab-top-menu>li>.ab-item:focus {
    background: #222344;
    color: #3eb9ff; 
}
#wpadminbar{

    background: #222344;
}

#wpwrap {
      background: url(https://two-colours.com/wp-content/uploads/2020/09/two_colours.svg) no-repeat bottom right;
      background-size: 320px;
}
 
  </style>';
}
 
//
// Dodanie informacji o autorze
//

function dawidkawalec_add_dashboard_widget() {
 wp_add_dashboard_widget( 'webinsider_add_dashboard_widget', 'Osoba odpowiedzialna za wdrożenie:', 'dawidkawalec_dashboard_widget_info' );
}
add_action( 'wp_dashboard_setup', 'dawidkawalec_add_dashboard_widget' );

function dawidkawalec_dashboard_widget_info() {
 echo "<ul>
 <li><strong>Wdrożenie projektu: </strong>Dawid Kawalec, Two Colours</li>
 <li><strong>Kontakt: </strong><a href='mailto:kontakt@dwa-kolory.pl'>kontakt@dwa-kolory.pl</a></li>
<li><strong>Strona www: </strong><a href='https://two-colours.com/'>two-colours.com</a></li>
<li><strong>Bezpośredni kontakt do osoby wdrażającej: </strong><a href='mailto:dkawalec@dwa-kolory.pl'>dkawalec@dwa-kolory.pl</a></li>

 </ul>"; 
}

//
// Usuwanie stopki standardowej
//
function remove_footer_admin () {
 
echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> || Wdrożenie: <a href="mailto:dkawalec@dwa-kolory.pl" target="_blank">Dawid Kawalec, Two Colours</a></p>';
 
}
 
add_filter('admin_footer_text', 'remove_footer_admin');  






// Opinie 

// Register Custom Post Type Opinie
function create_opinie_cpt() {

	$labels = array(
		'name' => _x( 'Opinie', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Opinie', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Opinie', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Opinie', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Opinie Archives', 'textdomain' ),
		'attributes' => __( 'Opinie Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Opinie:', 'textdomain' ),
		'all_items' => __( 'All Opinie', 'textdomain' ),
		'add_new_item' => __( 'Add New Opinie', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Opinie', 'textdomain' ),
		'edit_item' => __( 'Edit Opinie', 'textdomain' ),
		'update_item' => __( 'Update Opinie', 'textdomain' ),
		'view_item' => __( 'View Opinie', 'textdomain' ),
		'view_items' => __( 'View Opinie', 'textdomain' ),
		'search_items' => __( 'Search Opinie', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Opinie', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Opinie', 'textdomain' ),
		'items_list' => __( 'Opinie list', 'textdomain' ),
		'items_list_navigation' => __( 'Opinie list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Opinie list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Opinie', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
        'menu_icon' => 'dashicons-admin-comments',
		'supports' => array('title', 'editor'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'opinie', $args );

}
add_action( 'init', 'create_opinie_cpt', 0 );




//
//  Advanced Custom Fields Settings
// 
//
acf_add_options_page(array(
    'page_title' 	=> 'Theme General Settings',
    'menu_title'	=> 'Theme Settings',
    'menu_slug' 	=> 'theme-general-settings',
    'capability'	=> 'edit_posts',
    'redirect'		=> false
));

acf_add_options_sub_page(array(
    'page_title' 	=> 'Head Options',
    'menu_title'	=> 'Head Options',
    'parent_slug'	=> 'theme-general-settings',
));

acf_add_options_sub_page(array(
    'page_title' 	=> 'Theme Header Settings',
    'menu_title'	=> 'Header',
    'parent_slug'	=> 'theme-general-settings',
));

acf_add_options_sub_page(array(
    'page_title' 	=> 'Theme Footer Settings',
    'menu_title'	=> 'Footer',
    'parent_slug'	=> 'theme-general-settings',
));





// prosto do realizacji z pominięciem koszyka

add_filter ('add_to_cart_redirect', 'redirect_to_checkout');

function redirect_to_checkout() {
    global $woocommerce;
    $checkout_url = $woocommerce->cart->get_checkout_url();
    return $checkout_url;
}




// usuwanie galerii
remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 ); 

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Przejdź dalej', 'woocommerce' ); 
}


//usuwanie kategorii

/* Remove Categories from Single Products */
remove_action( 'woocommerce_single_product_summary',
'woocommerce_template_single_meta', 40 );

// usuwanie liczby sztuk 

function custom_remove_all_quantity_fields( $return, $product ) {return true;}
add_filter( 'woocommerce_is_sold_individually','custom_remove_all_quantity_fields', 10, 2 );

/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );



// remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_login_form', 10 );
// add_action( 'woocommerce_after_checkout_billing_form', 'woocommerce_checkout_login_form' );

// tworzenie shortcodu z ceną
function so_30165014_price_shortcode_callback( $atts ) {
    $atts = shortcode_atts( array(
        'id' => null,
    ), $atts, 'bartag' );

    $html = '';

    if( intval( $atts['id'] ) > 0 && function_exists( 'wc_get_product' ) ){
         $_product = wc_get_product( $atts['id'] );
         $html = $_product->get_price();
    }
    return $html;
}
add_shortcode( 'woocommerce_price', 'so_30165014_price_shortcode_callback' );



//3columns

add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}