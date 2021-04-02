<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
 
?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

<?php get_template_part( 'footer-widget' ); ?>
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 social">
                <?php if ( $social_media = get_field( 'social_media', 'options', false, false ) ) : ?>
                <?php echo $social_media; ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 contact text-lg-right mt-3 mt-lg-0">
                <?php if ( $kontakt = get_field( 'kontakt', 'options', false, false ) ) : ?>
                <?php echo $kontakt; ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 copy mt-3 mt-lg-5">
                <?php if ( $copyright = get_field( 'copyright', 'options', false, false ) ) : ?>
                <?php echo $copyright; ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-6 author text-lg-right mt-3 mt-lg-5">
                <?php if ( $autor = get_field( 'autor', 'options', false, false ) ) : ?>
                <?php echo $autor; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->
<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/39b72a5366.js" crossorigin="anonymous"></script>

<script type="text/javascript"
    src="/wp-content/themes/sterlink/inc/assets/js/owl.carousel.js"></script>

</body>

</html>