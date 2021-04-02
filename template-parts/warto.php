<?php
/**
 * Template part for warto
 *
 */

?>


<section class="why-section">


<div class="container container-title-fixed">
    <span>Warto</span>
</div>

    <div class="title-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span>Warto</span>
                    <h4>Dlaczego warto</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-box">
        <div class="row">

            <?php if ( have_rows( 'boxy_4' ) ) : ?>
            <?php while ( have_rows( 'boxy_4' ) ) :
                the_row(); ?>

                <div class="col-xl-3 col-md-6 mb-5 mb-xl-0 single">
                    <div class="single-content">
                    
                   <img src=" <?php echo esc_url( get_sub_field( 'ikona' ) ); ?>" alt="icon">

                    <?php if ( $tytul_box = get_sub_field( 'tytul_box' ) ) : ?>
                        <h2><?php echo esc_html( $tytul_box ); ?></h2>
                    <?php endif; ?>

                    <?php if ( $opis_box = get_sub_field( 'opis_box' ) ) : ?>
                        <p><?php echo esc_html( $opis_box ); ?></p>
                    <?php endif; ?>

                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

        </div>
    </div>

</section>