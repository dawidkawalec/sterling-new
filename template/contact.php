<?php
/**
* Template Name: Kontakt
 */

get_header(); ?>


<div class="header-page" style="background-size: cover; background-position: center center; background-color: #000; background-image: url(<?php echo esc_url( get_field( 'image_header' ) ); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-uppercase title-page">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>


<div class="content-page py-5 contact-page">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 data-contact">
                <?php if ( $bezposredni_kontakt = get_field( 'bezposredni_kontakt' ) ) : ?>
                    <?php echo $bezposredni_kontakt; ?>
                <?php endif; ?>
                <br>
                <?php if ( $dane_firmy = get_field( 'dane_firmy' ) ) : ?>
                    <?php echo $dane_firmy; ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 form">
                <h3>Wypełnij formularz</h3>
                <?php echo do_shortcode('[contact-form-7 id="31" title="Formularz Kontaktowy"]'); ?>
            </div>
        </div>

    </div>
</div>


<?php get_template_part( 'template-parts/cta');?>



<?php
get_footer(); ?>