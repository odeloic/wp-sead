<div class="page-header">

  <?php if ( get_post_thumbnail_id()) : ?>
    <img src="<?php the_post_thumbnail_url('full'); ?>" class="page-header__cover">
  <?php endif; ?>

  <h3 class="page-header__title"><?php the_title(); ?></h3>

</div>
