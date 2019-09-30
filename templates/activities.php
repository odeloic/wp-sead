<div class="activity">
  <div class="activity__date">
    <?php
    $activityTime = get_field('activity_time', false, false);
    $date = new DateTime($activityTime);
    $month = $date->format('F');
    $day = $date->format('d');
    ?>
    <span class="month"><?php echo $month ?></span>
    <span class="day"><?php echo $day ?></span>
  </div><!-- /date -->
  <div class="activity__meta">
    <h4 class="activity__title"><?php the_field('activity_title'); ?></h4>
    <p><?php the_field('activity_description'); ?></p>
    <p class="activity__period">
      <?php if (get_field('activity_start_date')): ?>
        <span><?php the_field('activity_start_date'); ?></span>
      <?php endif ?>
      <?php
        if (get_field('activity_end_date')): ?>
        <span><?php the_field('activity_end_date'); ?></span>
      <?php endif ?>
    </p>
  </div><!-- / meta -->

</div><!-- /activity -->
