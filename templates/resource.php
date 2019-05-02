<div class="column is-one-quarter">

    <div class="sd-resource">
        <?php
        $resource_featured_img_id = get_post_thumbnail_id();
        $resource_thumbnail = wp_get_attachment_image_src($resource_featured_img_id, 'full');
        ?>
        <img src="<?php echo $resource_thumbnail[0]; ?>" alt="Resource Thumbnail Title" class="sd-resource__thumbnail">

        <div class="sd-resource__meta">

            <h4 class="sd-resource__title">
                <?php the_title(); ?>
            </h4>

            <span class="sd-resource__date"><?php the_time('F Y'); ?></span>

        </div>

        <a href="<?php the_permalink(); ?>" class="sd-resource__permalink">View</a>

    </div>
</div><!-- resource -->