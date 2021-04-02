<?php
/**1
 * Template part for faq
 *
 */

?>


<section class="faq-section">


<div class="container container-title-fixed">
    <span>NAJCZĘSTRZE PYTANIA</span>
</div>

  <div class="title-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span>NAjczęstsze pytania</span>
          <h4>FAQ</h4>
        </div>
      </div>
    </div>
  </div>

  <div class="container container-box">
    <div class="row">

      <div class="col-lg-8 pr-lg-5 faq">
        <div id="accordion3">
          
        <?php $indexFaq = 1?>
                            <?php if ( have_rows( 'najczestsze_pytania', 17 ) ) : ?>
                            <?php while ( have_rows( 'najczestsze_pytania', 17 ) ) :
                                    the_row(); ?>

                            <div class="card">


                                <?php if ( $pytanie = get_sub_field( 'pytanie' ) ) : ?>
                                <div class="card-header" id="headingFaq<?php echo $indexFaq;?>">
                                    <h5 class="m-0">
                                        <button class="btn btn-link <?php if($indexFaq != 1) { echo 'collapsed'; } ?>"
                                            data-toggle="collapse" data-target="#faqpage<?php echo $indexFaq;?>"
                                            aria-expanded="true" aria-controls="faqpage<?php echo $indexFaq;?>">
                                            <?php echo esc_html( $pytanie ); ?>
                                        </button>
                                    </h5>
                                </div>

                                <?php endif; ?>

                                <?php if ( $odpowiedz = get_sub_field( 'odpowiedz' ) ) : ?>

                                <div id="faqpage<?php echo $indexFaq;?>"
                                    class="collapse <?php if($indexFaq == 1) { echo 'show'; } ?>"
                                    aria-labelledby="headingFaq<?php echo $indexFaq;?>" data-parent="#accordion3">
                                    <div class="card-body">
                                        <?php echo $odpowiedz; ?>
                                    </div>
                                </div>
                                <?php endif; ?>

                            </div>

                            <?php $indexFaq = $indexFaq + 1;?>
                            <?php endwhile; ?>
                            <?php endif; ?>
        </div>
      </div>

      <div class="col-lg-4 image text-lg-right">
        <div class="image-content">
          <img src="/wp-content/themes/sterlink/inc/assets/images/faq.jpg" alt="faq">
        </div>
      </div>

    </div>
  </div>



</section>