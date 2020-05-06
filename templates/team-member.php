<div class="team-box__member">
  <?php
  $photo_id = get_field('team_member_photo');
  $photo_url = wp_get_attachment_image_src($photo_id, 'full');
  ?>
  <img src="<?php echo $photo_url[0]; ?>" alt="SEAD Stafd - <?php the_field('team_member_name'); ?>" class="team-box__member__img">
  <div class="team-box__member__details">
    <h4><?php the_field('team_member_name'); ?></h4>
    <span><?php the_field('team_member_position'); ?></span>
  </div>
</div>