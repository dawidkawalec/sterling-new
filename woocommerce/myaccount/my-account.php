<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
;?>
<div class="row">
    <div class="col-lg-5 mb-5 mb-lg-0">
        <div class="logincontent logincontentloginin">
            <h2 style=" margin-bottom: 60px;">Moje konto</h2>

            <div style="margin-left: 4.3rem;">
                <?php
do_action( 'woocommerce_account_navigation' ); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-7 mb-5 mb-lg-0">

        <div class="woocommerce-MyAccount-content" style="width: 100%;float:left">
            <?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
        </div>

    </div>