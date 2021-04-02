<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>



<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?> style="margin-top: 35px;">






    <?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	//do_action( 'woocommerce_before_single_product_summary' );
	?>

    <div class="summary entry-summary" <?php
if(is_product() && get_the_id() == 160) {
	?>style="display:none;" <?php
}
;?>>
        <?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
    </div>


    <?php
        if(is_product() && get_the_id() == 160) {
            if( have_rows('roczne') ): 
            while( have_rows('roczne') ): the_row();
                $dkprice1 = get_sub_field('pakiet_rok_standard__id');
                $dkpriceshortcode1 = '[woocommerce_price id="' . $dkprice1 . '"]';                                                                   
            
                $dkprice2 = get_sub_field('pakiet_rok_business_id');
                $dkpriceshortcode2 = '[woocommerce_price id="' . $dkprice2 . '"]';                                                                   
           
                $dkprice3 = get_sub_field('pakiet_rok_vip_id');
                $dkpriceshortcode3 = '[woocommerce_price id="' . $dkprice3 . '"]';                                                                   
            endwhile; 
            endif; 

            if( have_rows('miesieczne') ): 
            while( have_rows('miesieczne') ): the_row();
                $dkprice4 = get_sub_field('pakiet_msc_standard__id');
                $dkpriceshortcode4 = '[woocommerce_price id="' . $dkprice4 . '"]';                                                                   
            
                $dkprice5 = get_sub_field('pakiet_msc_business__id');
                $dkpriceshortcode5 = '[woocommerce_price id="' . $dkprice5 . '"]';                                                                   
           
                $dkprice6 = get_sub_field('pakiet_msc_vip__id');
                $dkpriceshortcode6 = '[woocommerce_price id="' . $dkprice6 . '"]';                                                                   
            endwhile; 
            endif; 
    ?>

    <h1 class="product_title entry-title" style="margin-top: 75px;">
        <?php echo esc_html( get_the_title() ); ?>
    </h1>
    <div class="row">
        <div class="col-lg-6">
            <?php if( have_rows('dla_firm') ): ?>
            <?php while( have_rows('dla_firm') ): the_row();?>
            <a href="<?php the_sub_field('jednorazowe_link'); ?>">
                <div class="product-switcher ">
                    <h3><?php the_sub_field('jednorazowe_tytul'); ?></h3>
                    <p><?php the_sub_field('jednorazowe_opis'); ?></p>
                </div>
            </a>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-lg-6">
            <?php if( have_rows('dla_firm_pakiety_roczne') ): ?>
            <?php while( have_rows('dla_firm_pakiety_roczne') ): the_row();?>
            <a href="<?php the_sub_field('roczne_link'); ?>">
                <div class="product-switcher active">
                    <h3><?php the_sub_field('roczne_tytul'); ?></h3>
                    <p><?php the_sub_field('roczne_opis'); ?></p>
                </div>
            </a>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>


    <div class="produkty-pakiety" style="padding-bottom: 60px;">
        <div class="produkty-pakiety__switcher">
            <a href="#roczna" class="year-tab active">Płatność roczna</a>
            <span>|</span>
            <a href="#miesieczna" class="month-tab">Płatność miesięczna</a>
        </div>
        <div class="row align-items-start row-year">
            <?php if( have_rows('roczne') ): ?>
            <?php while( have_rows('roczne') ): the_row();?>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="single">
                    <div class="produkty-pakiety__item">
                        <div class="produkty-pakiety__item--title">
                            <h4><?php echo get_sub_field('pakiet_rok_standard_tytul'); ?></h4>
                        </div>
                        <div class="produkty-pakiety__item--price">
                            <span><?php echo do_shortcode($dkpriceshortcode1); ?> </span>zł/miesiąc
                        </div>
                        <div class="produkty-pakiety__item--opis">
                            <p>
                                <?php echo get_sub_field('pakiet_rok_standard_opis'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="produkty-pakiety__list">
                        <ul>
                            <?php if ( have_rows('pakiet_rok_standard_lista') ) : ?>

                            <?php while( have_rows('pakiet_rok_standard_lista') ) : the_row(); ?>


                            <li <?php if ( get_sub_field('czy_aktywne') ) : ?>class="active" <?php endif; ?>>
                                <?php the_sub_field('tekst'); ?>
                            </li>

                            <?php endwhile; ?>

                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="produkty-pakiety__link">
                        <a href="/cart/?add-to-cart=<?php echo get_sub_field('pakiet_rok_standard__id'); ?>">
                            WYBIERAM
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="single">
                    <div class="produkty-pakiety__item">
                        <div class="produkty-pakiety__item--title">
                            <h4><?php echo get_sub_field('pakiet_rok_business_tytul'); ?></h4>
                        </div>
                        <div class="produkty-pakiety__item--price">
                            <span><?php echo do_shortcode($dkpriceshortcode2); ?> </span>zł/miesiąc
                        </div>
                        <div class="produkty-pakiety__item--opis">
                            <p>
                                <?php echo get_sub_field('pakiet_rok_business_opis'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="produkty-pakiety__list">
                        <ul>
                            <?php if ( have_rows('pakiet_rok_business_lista') ) : ?>

                            <?php while( have_rows('pakiet_rok_business_lista') ) : the_row(); ?>


                            <li <?php if ( get_sub_field('czy_aktywne') ) : ?>class="active" <?php endif; ?>>
                                <?php the_sub_field('tekst'); ?>
                            </li>

                            <?php endwhile; ?>

                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="produkty-pakiety__link">
                        <a href="/cart/?add-to-cart=<?php echo get_sub_field('pakiet_rok_business_id'); ?>">
                            WYBIERAM
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="single">
                    <div class="produkty-pakiety__item">
                        <div class="produkty-pakiety__item--title">
                            <h4><?php echo get_sub_field('pakiet_rok_vip_tytul'); ?></h4>
                        </div>
                        <div class="produkty-pakiety__item--price">
                            <span><?php echo do_shortcode($dkpriceshortcode3); ?> </span>zł/miesiąc
                        </div>
                        <div class="produkty-pakiety__item--opis">
                            <p>
                                <?php echo get_sub_field('pakiet_rok_vip_opis'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="produkty-pakiety__list">
                        <ul>
                            <?php if ( have_rows('pakiet_rok_vip_lista') ) : ?>

                            <?php while( have_rows('pakiet_rok_vip_lista') ) : the_row(); ?>


                            <li <?php if ( get_sub_field('czy_aktywne') ) : ?>class="active" <?php endif; ?>>
                                <?php the_sub_field('tekst'); ?>
                            </li>

                            <?php endwhile; ?>

                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="produkty-pakiety__link">
                        <a href="/cart/?add-to-cart=<?php echo get_sub_field('pakiet_rok_vip_id'); ?>">
                            WYBIERAM
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <div class="row align-items-start row-month" style="display: none;">
            <?php if( have_rows('miesieczne') ): ?>
            <?php while( have_rows('miesieczne') ): the_row();?>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="single">
                    <div class="produkty-pakiety__item">
                        <div class="produkty-pakiety__item--title">
                            <h4><?php echo get_sub_field('pakiet_msc_standard_tytul'); ?></h4>
                        </div>
                        <div class="produkty-pakiety__item--price">
                            <span><?php echo do_shortcode($dkpriceshortcode4); ?> </span>zł/miesiąc
                        </div>
                        <div class="produkty-pakiety__item--opis">
                            <p>
                                <?php echo get_sub_field('pakiet_msc_standard_opis'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="produkty-pakiety__list">
                        <ul>
                            <?php if ( have_rows('pakiet_msc_standard_lista') ) : ?>

                            <?php while( have_rows('pakiet_msc_standard_lista') ) : the_row(); ?>


                            <li <?php if ( get_sub_field('czy_aktywne') ) : ?>class="active" <?php endif; ?>>
                                <?php the_sub_field('tekst'); ?>
                            </li>

                            <?php endwhile; ?>

                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="produkty-pakiety__link">
                        <a href="/cart/?add-to-cart=<?php echo get_sub_field('pakiet_msc_standard__id'); ?>">
                            WYBIERAM
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="single">
                    <div class="produkty-pakiety__item">
                        <div class="produkty-pakiety__item--title">
                            <h4><?php echo get_sub_field('pakiet_msc_business_tytul'); ?></h4>
                        </div>
                        <div class="produkty-pakiety__item--price">
                            <span><?php echo do_shortcode($dkpriceshortcode5); ?> </span>zł/miesiąc
                        </div>
                        <div class="produkty-pakiety__item--opis">
                            <p>
                                <?php echo get_sub_field('pakiet_msc_business_opis'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="produkty-pakiety__list">
                        <ul>
                            <?php if ( have_rows('pakiet_msc_business_lista') ) : ?>

                            <?php while( have_rows('pakiet_msc_business_lista') ) : the_row(); ?>


                            <li <?php if ( get_sub_field('czy_aktywne') ) : ?>class="active" <?php endif; ?>>
                                <?php the_sub_field('tekst'); ?>
                            </li>

                            <?php endwhile; ?>

                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="produkty-pakiety__link">
                        <a href="/cart/?add-to-cart=<?php echo get_sub_field('pakiet_msc_business__id'); ?>">
                            WYBIERAM
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="single">
                    <div class="produkty-pakiety__item">
                        <div class="produkty-pakiety__item--title">
                            <h4><?php echo get_sub_field('pakiet_msc_vip_tytul'); ?></h4>
                        </div>
                        <div class="produkty-pakiety__item--price">
                            <span><?php echo do_shortcode($dkpriceshortcode6); ?> </span>zł/miesiąc
                        </div>
                        <div class="produkty-pakiety__item--opis">
                            <p>
                                <?php echo get_sub_field('pakiet_msc_vip_opis'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="produkty-pakiety__list">
                        <ul>
                            <?php if ( have_rows('pakiet_msc_vip_lista') ) : ?>

                            <?php while( have_rows('pakiet_msc_vip_lista') ) : the_row(); ?>


                            <li <?php if ( get_sub_field('czy_aktywne') ) : ?>class="active" <?php endif; ?>>
                                <?php the_sub_field('tekst'); ?>
                            </li>

                            <?php endwhile; ?>

                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="produkty-pakiety__link">
                        <a href="/cart/?add-to-cart=<?php echo get_sub_field('pakiet_msc_vip__id'); ?>">
                            WYBIERAM
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>



    <?php
}
;?>

    <?php if ( get_field('dla_ciebie_dziedziny_prawne') ) : ?>

    <div class="productinfobox <?php
        if(is_product() && get_the_id() == 158) {
            ?> dla-firm-fix <?php
        }
        ;?>
        " style="<?php
        if(is_product() && get_the_id() == 160) {
            ?>display:none<?php
        }
        ;?>">




        <div class="productinfobox--title">
            <?php echo get_field('dla_ciebie_dziedziny_prawne'); ?>
        </div>
        <div class="productinfobox--content">
            <ul>

                <?php if ( have_rows('dla_ciebie_lista') ) : ?>

                <?php while( have_rows('dla_ciebie_lista') ) : the_row(); ?>

                <li>
                    <?php the_sub_field('wpisz_dziedzine'); ?>
                </li>
                <?php endwhile; ?>

                <?php endif; ?>
            </ul>
        </div>

    </div>
    <?php endif; ?>


    <?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>