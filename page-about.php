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


<!-- section -intro -video -->
<section class="section section--padded section--blue pd-top--big pd-bottom--big">
  <div class="container">
    <div class="columns">
        <div class="column">
            <h2 class="heading--primary heading--light mg-top--big"><?php the_field('about_partners_heading'); ?></h2>
        </div>

        <div class="column">
            <div class="icon-box text--light">
                <?php
                  $partner_id_icon = get_field('partner_1_icon');
                  $partner_icon = wp_get_attachment_image_src( $partner_id_icon, 'full' );
                ?>
                <img src="<?php echo $partner_icon[0]; ?>" alt="" class="icon-box__icon">
                <h3 class="icon-box__title"><?php the_field('partner_1_title'); ?></h3>
                <p class="icon-box__description">
                    <?php the_field('partner_1_description'); ?>
                </p>
            </div>
            <!-- icon box-->
        </div>

        <div class="column">
            <div class="icon-box text--light">
                <?php
                  $partner_id_icon = get_field('partner_2_icon');
                  $partner_icon = wp_get_attachment_image_src( $partner_id_icon, 'full' );
                ?>
                <img src="<?php echo $partner_icon[0]; ?>" alt="" class="icon-box__icon">
                <h3 class="icon-box__title"><?php the_field('partner_2_title'); ?></h3>
                <p class="icon-box__description">
                    <?php the_field('partner_2_description'); ?>
                </p>
            </div>
            <!-- icon box-->
        </div>

        <div class="column">
            <div class="icon-box text--light">
                <?php
                  $partner_id_icon = get_field('partner_3_icon');
                  $partner_icon = wp_get_attachment_image_src( $partner_id_icon, 'full' );
                ?>
                <img src="<?php echo $partner_icon[0]; ?>" alt="" class="icon-box__icon">
                <h3 class="icon-box__title"><?php the_field('partner_3_title'); ?></h3>
                <p class="icon-box__description">
                    <?php the_field('partner_3_description'); ?>
                </p>
            </div>
            <!-- icon box-->
        </div>


    </div>
  </div>
</section>

<?php get_footer(); ?>
