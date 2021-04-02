<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site <?php if(is_account_page()) {echo 'account-page';} ?>">
        <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
        <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
        <header id="hamburger" class="site-header navbar-static-top" role="banner">
            <div class="container">
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="/wp-content/themes/sterlink/inc/assets/images/logo.png" alt="">
                    </a>
                </div>
                <nav class="navbar navbar-expand-xl">

                    <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

                    <div class="menu_basket">
                        <a href="/koszyk/">KOSZYK</a>
                        <!-- <?php 
	
	global $woocommerce;
if ( $woocommerce->cart->cart_contents_count != 0 ) {
    ?><a href="/koszyk/">KOSZYK</a><?php
} else {
   ?><?php
}

	
     ?>	 -->

                    </div>


                    <div class="log-in">
                        <ul class="">
                            <?php
                        if ( is_user_logged_in() ) {
                            echo ' <li class="quest"><a href="/moje-pytania/">Moje pytania</a>
							<ul class="dropdown-menu">
									<li><a href="/moje-konto">Moje konto</a></li>
								<li><a href="/wp-login.php?action=logout">Wyloguj się</a></li>
                        </ul>
                        </li>
                        ';
                        } else {
                        echo ' <li><a href="/moje-konto">Zaloguj się</a></li>';
                        }
                        ?>

                        </ul>
                    </div>

                    <ul style="transform: translateY(8px);" id="zapytaj-prawnika-menu">
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-16"
                            class="main-btn main-btn-yellow menu-item menu-item-type-custom menu-item-object-custom menu-item-16 nav-item">
                            <a title="Zapytaj prawnika" href="/produkt/dla-ciebie/" class="nav-link">Zapytaj
                                prawnika</a>
                        </li>
                    </ul>



                </nav>
                <div class="site-hamburger">
                    <div id="nav-icon3">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->


        <?php endif; ?>