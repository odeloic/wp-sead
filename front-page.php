<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

    <!-- Home slider -->

    <div class="slider swiper-container">

        <div class="slider__slides swiper-wrapper">

            <!-- slide  #1-->
            <div class="slide swiper-slide">
                <?php
                $id_image = get_field('image_1');
                $image = wp_get_attachment_image_src($id_image, 'slides');
                ?>
                <img src="<?php echo $image[0]; ?>" alt="<?php the_field('title_1'); ?>" class="slide__img">
                <div class="slide__caption">
                    <h3 class="slide__title"><?php the_field('title_1'); ?></h3>
                    <p class="slide__description">
                        <?php the_field('description_1'); ?>
                    </p>
                </div>
            </div>

            <!-- slide  #2-->
            <div class="slide swiper-slide">
                <?php
                $id_image = get_field('image_2');
                $image = wp_get_attachment_image_src($id_image, 'slides');
                ?>
                <img src="<?php echo $image[0]; ?>" alt="<?php the_field('title_2'); ?>" class="slide__img">
                <div class="slide__caption">
                    <h3 class="slide__title"><?php the_field('title_2'); ?></h3>
                    <p class="slide__description">
                        <?php the_field('description_2'); ?>
                    </p>
                </div>
            </div>

            <!-- slide  #3-->
            <div class="slide swiper-slide">
                <?php
                $id_image = get_field('image_3');
                $image = wp_get_attachment_image_src($id_image, 'slides');
                ?>
                <img src="<?php echo $image[0]; ?>" alt="<?php the_field('title_3'); ?>" class="slide__img">
                <div class="slide__caption">
                    <h3 class="slide__title"><?php the_field('title_3'); ?></h3>
                    <p class="slide__description">
                        <?php the_field('description_3'); ?>
                    </p>
                </div>
            </div>


        </div>
        <div class="slider-control-button slider-control-button--prev slider__button-prev">
            <span class="slider-control-button__icon">
                <i class="fas fa-angle-left"></i>
            </span>
        </div>
        <div class="slider-control-button slider-control-button--next slider__button-next">
            <span class="slider-control-button__icon">
                <i class="fas fa-angle-right"></i>
            </span>
        </div>
    </div><!-- /slider -->

    <!-- Home intro -->


    <section class="section section--padded pd-top--big pd-bottom--big">
        <div class="container">
            <div class="columns">
                <div class="column generic-content">
                    <h2 class="heading--primary heading--green mg-bottom--medium"><?php the_field('hero_intro_title'); ?></h2>
                    <p class="mg-bottom--medium"><?php the_field('hero_intro_text'); ?></p>
                    <?php if (get_field('hero_intro_cta')) : ?>
                        <a href="<?php the_field('hero_intro_cta'); ?>" class="btn btn--primary">Read our story</a>
                    <?php endif; ?>
                </div><!-- ./column -->
                <div class="column text--centered">
                    <div class="video">
                        <?php
                        $video_thumbnail_id = get_field('hero_intro_video_thumbnail');
                        $video_thumbnail = wp_get_attachment_image_src($video_thumbnail_id, 'full');
                        ?>
                        <img src="<?php echo $video_thumbnail[0]; ?>" alt="Video Thumbnail - <?php the_field('hero_intro_title'); ?>" class="video__thumbnail">

                        <a href="<?php the_field('hero_intro_video'); ?>" class="iframe-lightbox-link video__play" data-padding-bottom="56.25%" aria-hidden="true" rel="lightbox">
                            <span class="video__play__icon">
                                <i class="fas fa-play-circle"></i>
                            </span>
                        </a>
                        <div class="video__overlay"></div><!-- video overlay -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ./section -->

    <!-- Latest News -->

    <section class="section section--no-padding">
        <div class="columns">
            <div class="column bg-light-blue news-section is-two-thirds">
                <h2 class="heading--primary heading--blue mg-bottom--medium mg-top--big">
                    Latest News
                </h2>
                <div class="columns is-multiline">
                    <?php $args = array(
                        'order' => 'desc',
                        'orderby' => 'publish_date',
                        'posts_per_page' => '6',
                        'cat' => '-8,-9,-10',
                    );
                    $latest = new WP_Query($args);

                    if ($latest->have_posts()) : while ($latest->have_posts()) : $latest->the_post();
                            get_template_part('content-home', get_post_format());
                        endwhile;
                    endif;
                    wp_reset_postdata(); ?>

                </div>
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="link link--goto">Read all articles</a>
            </div>
            <div class="column activities">
                <h3 class="heading--secondary heading--light mg-bottom--medium mg-top--big">Latest activities</h3>
                <?php $args = array(
                    'post_type' => 'activity',
                    'meta_key' => 'activity_time',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                    'posts_per_page' => '5',
                );

                $activities = new WP_Query($args);

                if ($activities->have_posts()) : while ($activities->have_posts()) : $activities->the_post();
                        get_template_part('templates/activities');
                    endwhile;
                endif;
                wp_reset_postdata(); ?>

            </div><!-- /activities -->
        </div>
    </section>

    <!-- Partners -->
    <section class="section section--padded section--padded pd-top--big pd-bottom--big bg-gray">
        <div class="container">
            <h2 class="heading--primary heading--green mg-bottom--medium">Testimonials</h2>
            <div class="testimonials swiper-container">
                <div class="testimonials__slider swiper-wrapper">
                    <?php $args = array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => '5',
                    );

                    $testimonials = new WP_Query($args);

                    if ($testimonials->have_posts()) : while ($testimonials->have_posts()) : $testimonials->the_post();
                            get_template_part('templates/testimonials');
                        endwhile;
                    endif;
                    wp_reset_postdata(); ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <section class="section section--padded section--padded pd-top--big pd-bottom--big">
        <div class="container">
            <div class="columns">
                <div class="column is-one-third">
                    <h2 class="heading--primary heading--gray mg-top--big">Our <br> Partners</h2>
                </div>
                <div class="column">
                    <div class="partners">
                        <?php
                        $args = array(
                            'post_type' => 'partner',
                            'meta_key' => 'partner_order',
                            'orderby' => 'meta_value_num',
                            'order' => 'ASC',
                            'posts_per_page' => -1,
                        );
                        $loop = new WP_Query($args);
                        ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <a class="partner__logo" href="<?php the_field('partner_website'); ?>" title="<?php the_field('partner_title'); ?>">
                                <?php
                                $id_image = get_field('partner_logo');
                                $image = wp_get_attachment_image_src($id_image, 'partner-logo');
                                ?>
                                <img src="<?php echo $image[0]; ?>" alt="<?php the_field('partner_title'); ?>">
                            </a>
                        <?php endwhile; ?>
                        <?php ?>
                    </div><!-- /partners-->
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php get_footer(); ?>