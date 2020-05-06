<div class="swiper-slide activities-slider__activity">
  <?php
  $id_image = get_field('sead_activity_background_image');
  $activity_background_image = wp_get_attachment_image_src($id_image, 'full');
  ?>
  <img src="<?php echo $activity_background_image[0]; ?>" alt="SEAD Activity Image - <?php the_field('sead_activity_title'); ?>" class="activities-slider__activity__img">
  <div class="activities-slider__activity__details">
    <?php
    $id_icon = get_field('sead_activity_light_icon');
    $activity_icon = wp_get_attachment_image_src($id_icon, 'full');
    ?>
    <img src="<?php echo $activity_icon[0]; ?>" alt="<?php the_field('sead_activity_title'); ?>" class="activities-slider__activity__icon">
    <h3 class="activities-slider__activity__title"><?php the_field('sead_activity_title'); ?></h3>
  </div>
</div>