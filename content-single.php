<section class="section pd-top--big pd-bottom--big">
  <div class="container">
    <div class="blog__meta">
      <div class="blog__details">
          <span class="blog__author"><?php the_author(); ?></span>
          <time class="blog__date" datetime="<?php the_time('y-m-d'); ?>"><?php the_time('d.m.y') ?></time>
      </div>
      <h2 class="blog__title"><?php the_title(); ?></h2>
      <?php if( get_post_thumbnail_id() ) : ?>
        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Blog Featured Image" class="blog__featured-img">
      <?php endif; ?>
    </div>
    <div class="blog-content">
      <?php the_content(); ?>
    </div>
  </div>
