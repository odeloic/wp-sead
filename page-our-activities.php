<?php
get_header();
get_template_part('templates/page-header');
?>


<?php $args = array(
  'post_type' => 'sead_activity',
  'posts_per_page' => '-1',
  'meta_key'          => 'sead_activity_order',
  'orderby' => 'meta_value_num',
  'order'           => 'asc',
);


$activities = new WP_Query($args);

if ($activities->have_posts()) : while ($activities->have_posts()) : $activities->the_post();
    get_template_part('templates/approach-activities');

  endwhile;
endif;
wp_reset_postdata();
?>

<section class="section--padded pd-top--big pd-bottom--big" id="sead-locations">
  <div class="container">
    <h2 class="heading--primary heading--green mg-bottom--big">Where we work</h2>
    <div class="columns">
      <div class="column locations-container">

        <div class="locations">
          <?php $args = array(
            'post_type'         => 'region',
            'meta_key'          => 'region_order',
            'orderby' => 'meta_value_num',
            'order'           => 'asc',
            'posts_per_page'    => '4',
          );

          $activities = new WP_Query($args);

          if ($activities->have_posts()) : while ($activities->have_posts()) : $activities->the_post();
              get_template_part('templates/regions');
            endwhile;
          endif;
          wp_reset_postdata(); ?>

        </div>

      </div>
      <div class="column">
        <div class="details-placeholder mg-top--big">
          <p>Hover Over Province for more information</p>
        </div>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>