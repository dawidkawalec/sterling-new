<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<h1 class="product_title entry-title">
    <?php echo esc_html( get_the_title() ); ?>
</h1>

<?php
if(is_product() && get_the_id() == 158) {
	?>
<div class="row">
    <div class="col-lg-6">
        <?php if( have_rows('dla_firm') ): ?>
        <?php while( have_rows('dla_firm') ): the_row();?>
        <a href="<?php the_sub_field('jednorazowe_link'); ?>">
            <div class="product-switcher active">
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
            <div class="product-switcher">
                <h3><?php the_sub_field('roczne_tytul'); ?></h3>
                <p><?php the_sub_field('roczne_opis'); ?></p>
            </div>
        </a>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php
}
;?>