<?php
/**
 * Template part for about
 *
 */

?>


<section class="about-section">


<div class="container container-title-fixed">
    <span>O nas</span>
</div>

    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-lg-5 woman text-lg-right pr-lg-5">
            <img class="pr-lg-4" src="/wp-content/themes/sterlink/inc/assets/images/woman.png" alt="woman">
            </div>
            <div class="col-lg-7 pr-lg-5">
                <span class="text-uppercase">Jak to działa</span>
                <?php if ( $tytul_4 = get_field( 'tytul_4' ) ) : ?>
	                <h2 class="my-3"><?php echo esc_html( $tytul_4 ); ?></h2>
                <?php endif; ?>
                <?php if ( $kim_jestesmy = get_field( 'kim_jestesmy', false, false ) ) : ?>
                    <?php echo $kim_jestesmy; ?>
                <?php endif; ?>
                <div class="who-answer px-lg-5 py-lg-3">
                <?php if ( $kto_odpowiada_na_pytania = get_field( 'kto_odpowiada_na_pytania', false, false ) ) : ?>
                    <?php echo $kto_odpowiada_na_pytania; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</section>