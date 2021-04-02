<div class="calltoaction" style="clear:both; background: url(<?php echo esc_url( get_field( 'image_cta', 'options' ) ); ?>); padding: 70px 0; background-size: cover; background-position: center center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            <?php if ( $tekst = get_field( 'tekst', 'options', false, false ) ) : ?>
                <?php echo $tekst; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>