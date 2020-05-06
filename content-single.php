<section class="section pd-top--big pd-bottom--big">
  <div class="container">
    <div class="blog__meta">
      <div class="blog__details">
        <span class="blog__date">Published on <?php the_time('d M, Y'); ?></span>
      </div>
      <h2 class="blog__title"><?php the_title(); ?></h2>
      <?php if (get_post_thumbnail_id()) : ?>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Blog Featured Image - <?php the_title(); ?>" class="blog__featured-img">
      <?php endif; ?>
    </div>
    <div class="blog-content">
      <?php the_content(); ?>
    </div>
  </div>