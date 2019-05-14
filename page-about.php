<?php
get_header();
get_template_part('templates/page-header');
?>



<section class="section section--padded section-team pd-top--big pd-bottom--big">
  <div class="container--tight">
    <div class="text--centered">
      <h2 class="heading--primary heading--green mg-bottom--medium">Team</h2>
    </div>

    <?php
    $id_image = get_field('about_team_img');
    $image = wp_get_attachment_image_src($id_image, 'full');
    ?>
    <img src="<?php echo $image[0]; ?>" alt="" class="team__img">
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
        <?php
        $id_image = get_field('about_intro_infographic_image');
        $image = wp_get_attachment_image_src($id_image, 'full');
        ?>
        <img src="<?php echo $image[0]; ?>" alt="" class="">
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
          $partner_icon = wp_get_attachment_image_src($partner_id_icon, 'full');
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
          $partner_icon = wp_get_attachment_image_src($partner_id_icon, 'full');
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
          $partner_icon = wp_get_attachment_image_src($partner_id_icon, 'full');
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