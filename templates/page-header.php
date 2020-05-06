<div class="page-header">

  <?php if (get_post_thumbnail_id()) : ?>
    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="page-header__cover">
  <?php endif; ?>

  <h1 class="page-header__title"><?php the_title(); ?></h1>

</div>