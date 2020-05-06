<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <div class="column is-one-third">
            <div class="news-card">
                <a href="<?php the_permalink(); ?>" class="news-card__thumbnail-link">
                    <img src="<?php the_post_thumbnail_url('post-thumbnails'); ?>" alt="<?php the_title(); ?>" class="news-card__thumbnail">
                </a>
                <a href="<?php the_permalink(); ?>" class="news-card__title-link">
                    <h4 class="news-card__title"><?php the_title(); ?></h4>
                </a>
                <span class="news-card__date"><?php the_time('d.m.y'); ?></span>
            </div>
        </div><!-- news article card -->

    <?php endwhile ?>


<?php endif; ?>