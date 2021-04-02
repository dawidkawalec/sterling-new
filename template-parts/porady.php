<?php
/**
 * Template part for porady
 *
 */

?>


<section class="porady-section">



    <div class="container">
        <div class="row align-items-lg-end">
            <div class="col-lg-6 left pr-lg-5 text-center text-lg-left">
                <span class="text-uppercase"><?php if ( $title_2 = get_field( 'title_2' ) ) : ?> <?php echo esc_html( $title_2 ); ?> <?php endif; ?></span>
                <h2 class="my-3"><?php if ( $subtitle_2 = get_field( 'subtitle_2' ) ) : ?> <?php echo esc_html( $subtitle_2 ); ?> <?php endif; ?></h2>
                <p><?php if ( $subtitle_2 = get_field( 'subtitle_2' ) ) : ?> <?php echo esc_html( $subtitle_2 ); ?> <?php endif; ?></p>
                <!-- buttons -->
                <?php if ( $buttons_3 = get_field( 'buttons_3', false, false ) ) : ?>
                    <?php echo $buttons_3; ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">
                <div class="yellow-box">
                <?php if ( $poradyo_text2 = get_field( 'poradyo_text2', false, false ) ) : ?>
                    <?php echo $poradyo_text2; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="col-lg-6 porady-image p-0">
               <img src="<?php echo esc_url( get_field( 'image_2' ) ); ?>" alt="banner">
    </div>

</section>