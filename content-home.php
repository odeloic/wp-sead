<div class="column">
  <div class="news-card" id="post-<?php the_id(); ?>">
      <?php if( get_post_thumbnail_id() ) : ?>
        <a href="<?php the_permalink(); ?>" class="news-card__thumbnail-link">
          <img src="<?php  the_post_thumbnail_url('post-thumbnails'); ?>" alt="<?php the_title(); ?>" class="news-card__thumbnail">
        </a>
      <?php endif; ?>
      <a href="<?php the_permalink(); ?>" class="news-card__title-link">
          <h4 class="news-card__title"><?php the_title(); ?></h4>
      </a>
      <span class="news-card__date">
        <time><?php the_time( 'd.m.y' ); ?></time>
      </span>
  </div>
</div><!-- news article card -->
