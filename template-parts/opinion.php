<?php
/**
 * Template part for faq
 *
 */

?>


<section class="opinion-section">

    <div class="title-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span>Opinie</span>
                    <h4>Opinie o nas</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container-image container">
        
    </div>

   <div class="carousel-content">
   <div class="container container-box">
        <div class="row">

        <div class="owl-carousel owl-theme">



           <?php  
            $args_query = array(
                'post_type' => 'opinie',
            );

            $query = new WP_Query( $args_query );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();  ?>
                    
                    <div class="item">
                        <div class="item-content">
                            <div class="desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.
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


</section>