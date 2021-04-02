<?php
/**
* Template Name: Moje konto
 */

get_header(); ?>


<div class="container">
    <div class="row">

<section id="primary" class="content-area col-sm-12 col-md-12 <?php if ( is_cart() && WC()->cart->get_cart_contents_count() == 0 ) { echo 'empty-cart-page'; }?>">            
<main id="main" class="site-main" role="main">

                <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

			endwhile; // End of the loop.
			?>

            </main><!-- #main -->
        </section><!-- #primary -->
		    </div>
</div>



<?php
get_footer(); ?>