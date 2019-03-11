<?php
get_header();
get_template_part( 'templates/page-header' );
?>

<section class="section">
  <div class="container">
      <div class="slider-wrappa">
          <div class="activities-slider swiper-container">
              <div class="swiper-wrapper">

                  <div class="swiper-slide activities-slider__activity">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.jpg" alt="" class="activities-slider__activity__img">
                      <div class="activities-slider__activity__details">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vectors/icon--light-institutions.svg" alt="" class="activities-slider__activity__icon">
                          <h3 class="activities-slider__activity__title">Research and innovation</h3>
                      </div>
                  </div>
                  <!-- slide -->

                  <div class="swiper-slide activities-slider__activity">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.jpg" alt="" class="activities-slider__activity__img">
                      <div class="activities-slider__activity__details">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vectors/icon--light-institutions.svg" alt="" class="activities-slider__activity__icon">
                          <h3 class="activities-slider__activity__title">Research and innovation</h3>
                      </div>
                  </div>
                  <!-- slide -->

                  <div class="swiper-slide activities-slider__activity">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.jpg" alt="" class="activities-slider__activity__img">
                      <div class="activities-slider__activity__details">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vectors/icon--light-institutions.svg" alt="" class="activities-slider__activity__icon">
                          <h3 class="activities-slider__activity__title">Research and innovation</h3>
                      </div>
                  </div>
                  <!-- slide -->
                  <div class="swiper-slide activities-slider__activity">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.jpg" alt="" class="activities-slider__activity__img">
                      <div class="activities-slider__activity__details">
                          <img src="./images/vectors/icon--light-institutions.svg" alt="" class="activities-slider__activity__icon">
                          <h3 class="activities-slider__activity__title">Research and innovation</h3>
                      </div>
                  </div>

                  <!-- slide -->
              </div>
          </div><!-- activities slider -->
          <div class="slider-control-button slider-control-button--prev">
              <span class="slider-control-button__icon">
                  <i class="fas fa-angle-left"></i>
              </span>
          </div>
          <div class="slider-control-button slider-control-button--next">
              <span class="slider-control-button__icon">
                  <i class="fas fa-angle-right"></i>
              </span>
          </div>
      </div>
  </div>
</section>

<?php get_footer(); ?>
