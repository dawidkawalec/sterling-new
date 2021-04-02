<?php
/**
 * Template part for work
 *
 */

?>


<section class="work-section">


<div class="container container-title-fixed">
    <span>Jak to działa</span>
</div>

    <div class="title-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span>Jak to działa</span>
                    <h2>Jak to działa?</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-box">
        <div class="row">

        <?php if ( have_rows( 'boxy' ) ) : ?>
            <?php while ( have_rows( 'boxy' ) ) :
                the_row(); ?>
                
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 single">
                <div class="single-content">

                <?php if ( $numer = get_sub_field( 'numer' ) ) : ?>
                    
                    <div class="number"><?php echo esc_html( $numer ); ?></div>

                <?php endif; ?>

                <?php if ( $opis_3 = get_sub_field( 'opis_3' ) ) : ?>
                   
                    <div class="desc">
                    <?php echo esc_html( $opis_3 ); ?>
                    </div>
                <?php endif; ?>

                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
       

        </div>
    </div>



</section>