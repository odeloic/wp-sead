<div class="column is-one-third">
    <div class="news-card news-card--press">
        <a href="<?php the_permalink(); ?>">
            <h4 class="news-card__title"><?php the_title(); ?></h4>
        </a>
        <p class="excerpt">
            <?php the_excerpt(); ?>
        </p>
        <span class="news-card__date"><?php the_time('F Y'); ?></span>
    </div><!-- news-card -->
</div><!-- column -->