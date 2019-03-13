<?php
get_header();
get_template_part( 'templates/page-header' );
?>


<?php $args = array(
    'post_type' => 'sead_activity',
    'posts_per_page' => '-1'
);


$activities = new WP_Query($args);

if ($activities->have_posts()) : while ($activities->have_posts()) : $activities->the_post();
get_template_part( 'templates/approach-activities');

endwhile; endif; wp_reset_postdata();
?>



<?php get_footer(); ?>
