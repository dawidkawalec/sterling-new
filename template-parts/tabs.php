<?php
/**
 * Template part for nasze porady
 *
 */

?>


<section class="oursugest-section">


    <div class="container container-title-fixed">
        <span>Nasze porady</span>
    </div>


    <div class="title-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span>Nasze porady</span>
                    <h4>Masz problem i chcesz szybko<br>uzyskać poradę prawnika?</h4>
                </div>
            </div>
        </div>
    </div>


    <div class="container container-tabs">
        <div class="row row justify-content-between">
            <div class="accordion" id="accordion">

                <?php $faqPrawa= 1?>

                <?php if ( have_rows( 'porady_lewa' ) ) : ?>
                <?php while ( have_rows( 'porady_lewa' ) ) :
                    the_row(); ?>


                <div class="card">

                    <div class="card-header" id="headingfaqPrawa<?php echo $faqPrawa;?>">
                        <h5 class="m-0">
                            <button class="btn btn-link collapsed"
                                data-toggle="collapse" data-target="#collapseFaqPrawa<?php echo $faqPrawa; ?>"
                                aria-expanded="true" aria-controls="collapseFaqPrawa<?php echo $faqPrawa; ?>">
                                <strong>
                                    <?php if ( $tytul = get_sub_field( 'tytul' ) ) : ?>
                                    <?php echo esc_html( $tytul ); ?>
                                    <?php endif; ?>
                                </strong>
                                <span>

                                    <?php if ( $opis = get_sub_field( 'opis' ) ) : ?>
                                    <img src="<?php echo esc_html( $opis ); ?>" alt="<?php echo esc_html( $tytul ); ?>">
                                    <?php endif; ?>
                                </span>
                            </button>


                        </h5>
                    </div>

                    <div id="collapseFaqPrawa<?php echo $faqPrawa; ?>"
                        class="collapse"
                        aria-labelledby="headingfaqPrawa<?php echo $faqPrawa;?>" data-parent="#accordion">
                        <div class="card-body">
                            <?php if ( $odpowiedz = get_sub_field( 'odpowiedz' ) ) : ?>
                            <?php echo $odpowiedz; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
                <?php $faqPrawa = $faqPrawa + 1;?>

                <?php endwhile; ?>
                <?php endif; ?>

            </div>


            <div class="man">
                <img src="/wp-content/themes/sterlink/inc/assets/images/man.png" alt="">
            </div>


            <div class="accordion2" id="accordion2">

                <?php $faqLewa = 1?>
                <?php if ( have_rows( 'porady_prawa' ) ) : ?>
                <?php while ( have_rows( 'porady_prawa' ) ) :
		the_row(); ?>



                <div class="card">

                    <div class="card-header" id="headingfaqLewa<?php echo $faqLewa;?>">
                        <h5 class="m-0">
                            <button class="btn btn-link collapsed"
                                data-toggle="collapse" data-target="#collapseFaqLewa<?php echo $faqLewa; ?>"
                                aria-expanded="true" aria-controls="collapseFaqLewa<?php echo $faqLewa; ?>">
                                <strong>
                                    <?php if ( $tytul = get_sub_field( 'tytul' ) ) : ?>
                                    <?php echo esc_html( $tytul ); ?>
                                    <?php endif; ?>
                                </strong>
                                <span>
                                    <?php if ( $opis = get_sub_field( 'opis' ) ) : ?>
                                    <img src="<?php echo esc_html( $opis ); ?>" alt="<?php echo esc_html( $tytul ); ?>">
                                    <?php endif; ?>
                                </span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseFaqLewa<?php echo $faqLewa; ?>"
                        class="collapse"
                        aria-labelledby="headingfaqLewa<?php echo $faqLewa;?>" data-parent="#accordion2">
                        <div class="card-body">
                            <?php if ( $odpowiedz = get_sub_field( 'odpowiedz' ) ) : ?>
                            <?php echo $odpowiedz; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

                <?php $faqLewa = $faqLewa + 1;?>
                <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>

</section>