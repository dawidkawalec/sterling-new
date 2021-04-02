<?php
/**
* Template Name: Oferta Dla Ciebie
 */

get_header(); ?>


<div class="header-page" style="background-size: cover; background-position: center center; background-color: #000;">
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>

<div class="content-page py-5 dla-ciebie-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 title">
                <?php
                $params = array('posts_per_page' => 5, 'post_type' => 'product');
                $wc_query = new WP_Query($params);
                ?>
                <?php if ($wc_query->have_posts()) : ?>
                <?php while ($wc_query->have_posts()) :
                $wc_query->the_post(); ?>
                <?php wc_get_template_part( 'content', 'single-product' ); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else:  ?>
                <p>
                    <?php _e( 'No Products'); ?>
                </p>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>




<?php
get_footer(); ?>