<?php
$region_img_id = get_field('region_image');
$region_img = wp_get_attachment_image_src($region_img_id, 'full');
?>
<div class="location location--<?php the_field('region_location'); ?>" style="background-image: url(<?php echo $region_img[0]; ?>);">
    <h3 class="location__name">
        <?php the_field('region_name'); ?>
    </h3>
    <div class="location__data">
        <?php
        $region_map_id = get_field('region_map');
        $region_map_img = wp_get_attachment_image_src($region_map_id, 'full');
        ?>
        <img src="<?php echo $region_map_img[0]; ?>" alt="">
    </div>
</div>