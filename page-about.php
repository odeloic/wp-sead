<?php
get_header();
get_template_part( 'templates/page-header' );
?>

<section class="section">
  <div class="container">
      <div class="slider-wrappa">
          <div class="activities-slider swiper-container">
              <div class="swiper-wrapper">
                <?php $args = array(
                  'post_type' => 'sead_activity',
                  'posts_per_page' => '-1',
                );

                $sead_core_activities = new WP_Query($args);

                if ( $sead_core_activities->have_posts() ) : while ( $sead_core_activities->have_posts() ) : $sead_core_activities->the_post();
                  get_template_part( 'templates/activities-slider');
                endwhile; endif; wp_reset_postdata(); ?>

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


<section class="section section-intro-video pd-top--big pd-bottom--big">
  <div class="container">
      <div class="columns">
          <div class="column text">
              <h2 class="heading--primary heading--green mg-bottom--medium"><?php the_field('about_intro_heading'); ?></h2>
              <?php the_field('about_intro_text'); ?>

          </div><!-- ./column -->
          <div class="column text--centered">
              <div class="video">
                  <img src="./images/img6.jpg" alt="Video Thumbnail" class="video__thumbnail">

                  <a href="<?php the_field('intro_video_url'); ?>" class="iframe-lightbox-link video__play"
                      data-padding-bottom="56.25%" aria-hidden="true" rel="lightbox">
                      <span class="video__play__icon">
                          <i class="fas fa-play-circle"></i>
                      </span>
                  </a>
                  <div class="video__overlay"></div><!-- video overlay -->
              </div>
          </div>
      </div>
  </div>
        </section>

<?php get_footer(); ?>
