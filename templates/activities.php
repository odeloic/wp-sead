<div class="activity">
  <div class="activity__date">
    <?php if (get_field('acitvity_start_date') && get_field('acitvity_end_date')) : ?>
      <?php
      $startDate = new DateTime(get_field('acitvity_start_date', false, false));
      $endDate = new DateTime(get_field('acitvity_end_date', false, false));
      ?>
      <p><span><?php echo $startDate->format('d') . '/' . $startDate->format('m'); ?></span> <span class="separator">-</span> <?php echo $endDate->format('d') . '/' . $endDate->format('m'); ?></span></p>
    <?php else :
      $date = new DateTime(get_field('activity_time', false, false));
    ?>
      <p><span><?php echo $date->format('d') . '/' . $date->format('m'); ?></span></p>
    <?php endif; ?>
  </div><!-- /date -->
  <div class="activity__meta">
    <h4 class="activity__title"><?php the_field('activity_title'); ?></h4>
    <p><?php the_field('activity_description'); ?></p>
    </p>
  </div><!-- / meta -->

</div><!-- /activity -->