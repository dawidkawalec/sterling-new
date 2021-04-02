<?php
/**
 * Template part for banner
 *
 */

?>

<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 banner-content pb-5">
            <?php if ( $heading = get_field( 'heading' ) ) : ?>
                <?php echo $heading; ?>
            <?php endif; ?>
            <?php if ( $btn_hero = get_field( 'btn_hero', false, false ) ) : ?>
	<?php echo $btn_hero; ?>
<?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-lg-6 banner-image p-0">
               <img src="<?php echo esc_url( get_field( 'image_hero' ) ); ?>" alt="banner">
    </div>
</section> 