<?php
get_header();
get_template_part('templates/page-header');
?>

<!-- content -->
<!-- newsletter -->
<section class="section--padded pd-top--big pd-bottom--big">
  <div class="container">
    <h2 class="heading--secondary heading--green mg-bottom--big">
      Training materials
    </h2>
    <div class="columns is-multiline">
      <?php $args = array(
        'post_type'         => 'ecourse',
        'order' => 'desc',
        'orderby' => 'publish_date',
        'posts_per_page' => '-1'
      );
      $resources = new WP_Query($args);

      if ($resources->have_posts()) : while ($resources->have_posts()) : $resources->the_post();
          get_template_part('templates/e-course');
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
<!-- gallery -->
<?php get_footer(); ?>