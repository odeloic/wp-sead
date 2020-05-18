<div class="activity">
  <?php if (get_field('acitvity_start_date') && get_field('acitvity_end_date')) : ?>
    <?php
    $startDate = new DateTime(get_field('acitvity_start_date', false, false));
    $endDate = new DateTime(get_field('acitvity_end_date', false, false));
    ?>
    <p class="activity__date"><?php echo $startDate->format('d') . '/' . $startDate->format('m') . '/' . $startDate->format('y'); ?> <span class="separator">-</span> <?php echo $endDate->format('d') . '/' . $endDate->format('m') . '/' . $endDate->format('y'); ?></p>
  <?php else :
    $date = new DateTime(get_field('activity_time', false, false));
  ?>
    <p class="activity__date"><?php echo $date->format('d') . '/' . $date->format('m') . '/' . $date->format('y'); ?></p>
  <?php endif; ?>
  <a href="#" class="activity__title">
    <h4><?php the_field('activity_title'); ?></h4>
    <span>More details</span>
  </a>
  <div class="activity__meta">
    <p><?php the_field('activity_description'); ?></p>
  </div><!-- / meta -->
</div><!-- /activity -->