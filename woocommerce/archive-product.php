<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header(  );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header header-page">
    <div class="container p-0">
        <div class="row">
            <div class="col-lg-12">
                <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                <h1 class="woocommerce-products-header__title page-title">SKLEP</h1>
                <?php endif; ?>

                <?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container mb-5">

        <div class="row">
            <div class="col-lg-3">
                <?php
					/**
					 * Hook: woocommerce_sidebar.
					 *
					 * @hooked woocommerce_get_sidebar - 10
					 */
					do_action( 'woocommerce_sidebar' )
							;?>


                <div class="opinie">
                    <div class="opinion-section">
                        <div class="carousel-content">
                            <div class="container container-box">
                                <div class="row">
                                    <div class="owl-carousell">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage">
                                                <div class="owl-item">
                                                    
															<?php  
														$args_query = array(
															'post_type' => 'opinie',
															'posts_per_page' => 1,
															'orderby' => 'rand',
														);

														$query = new WP_Query( $args_query );

														if ( $query->have_posts() ) {
															while ( $query->have_posts() ) {
																$query->the_post();  ?>
																
																<div class="item">
																	<div class="item-content">
																		<div class="desc">
																			<?php the_content() ?>
																		</div>
																		<div class="autor">
																			<span><?php the_title() ?>,</span>
																			<span>
																				<?php if ( $miasto = get_field( 'miasto', false, false ) ) : ?>
																					<?php echo esc_html( $miasto ); ?>
																				<?php endif; ?>
																			</span>
																		</div>
																	</div>
																</div>
														<?php }
														} else {

														}

														wp_reset_postdata();
																?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div class="col-lg-9">

                <div class="cat-name-yello">
				<?php woocommerce_page_title(); ?>
                </div>

                <?php
				if ( woocommerce_product_loop() ) {

					/**
					 * Hook: woocommerce_before_shop_loop.
					 *
					 * @hooked woocommerce_output_all_notices - 10
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action( 'woocommerce_before_shop_loop' );

					woocommerce_product_loop_start();

					if ( wc_get_loop_prop( 'total' ) ) {
						while ( have_posts() ) {
							the_post();

							/**
							 * Hook: woocommerce_shop_loop.
							 */
							do_action( 'woocommerce_shop_loop' );

							wc_get_template_part( 'content', 'product' );
						}
					}

					woocommerce_product_loop_end();

					/**
					 * Hook: woocommerce_after_shop_loop.
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action( 'woocommerce_after_shop_loop' );
				} else {
					/**
					 * Hook: woocommerce_no_products_found.
					 *
					 * @hooked wc_no_products_found - 10
					 */
					do_action( 'woocommerce_no_products_found' );
				}

				/**
				 * Hook: woocommerce_after_main_content.
				 *
				 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
				 */
				do_action( 'woocommerce_after_main_content' );
				;?>
            </div>
        </div>
    </div>
</section>


<?php get_template_part( 'template-parts/cta');?>

<?php


get_footer( 'shop' );