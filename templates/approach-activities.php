<section class="section pd-top--big pd-bottom--big " style="background-color: <?php the_field('sead_section_background_color'); ?>;">
    <div class="container">
        <div class="columns">
            <div class="column core">
                <?php
                $icon_id = get_field('sead_activity_dark_icon');
                $icon = wp_get_attachment_image_src($icon_id, 'full');
                ?>
                <img src="<?php echo $icon[0]; ?>" alt="<?php the_field('sead_activity_title'); ?>" class="core__icon">
                <h3 class="core__title"><?php the_field('sead_activity_title'); ?></h3>
                <p class="core__details">
                    <?php the_field('sead_activity_description'); ?>
                </p>
            </div>

            <div class="column">
                <div class="overlap-images">
                    <?php
                    // Back Image
                    $back_image_id = get_field('sead_activity_overlap_image_back');
                    $back_image = wp_get_attachment_image_src($back_image_id, 'full');
                    // Front Image
                    $front_image_id = get_field('sead_activity_overlap_image_front');
                    $front_image = wp_get_attachment_image_src($front_image_id, 'full');
                    ?>
                    <img src="<?php echo $back_image[0]; ?>" alt="<?php the_field('sead_activity_title'); ?>">
                    <img src="<?php echo $front_image[0]; ?>" alt="<?php the_field('sead_activity_title'); ?>">
                </div>
            </div>

        </div>
    </div>
</section>