<div class="column is-one-quarter">

  <div class="ecourse">
    <?php
    $ecourse_img_id = get_field('ecourse_photo');
    $ecourse_img = wp_get_attachment_image_src($ecourse_img_id, 'full');
    $ecourseTitle = get_field('ecourse_title');
    $ecourseDescription = get_field('ecourse_description');
    $ecourseLink = get_field('ecourse_link');
    ?>
    <img
      src="<?php echo $ecourse_img[0]; ?>"
      alt="<?php echo $ecourseTitle; ?>"
      class="ecourse__thumbnail mg-bottom--medium"
    />

    <div class="ecourse__meta mg-bottom--small">
      <h4 class="ecourse__title">
        <?php echo $ecourseTitle; ?>
      </h4>
      <p class="ecourse__description">
        <?php echo $ecourseDescription; ?>
      </p>
    </div>

    <a href="<?php echo $ecourseLink; ?>" class="ecourse__permalink btn btn--small btn--primary">Go to Course</a>

  </div>
</div><!-- resource -->