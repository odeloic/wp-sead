<?php
$id_image = get_field('testimonial_image');
$testimonyImg = wp_get_attachment_image_src($id_image, 'full');
?>
<img src="<?php echo $testimonyImg[0]; ?>" alt="<?php the_field('testimonial_author'); ?>" class="testimonials__img swiper-slide">