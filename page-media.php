<?php
get_header();
get_template_part('templates/page-header');
?>

<!-- content -->

<section class="section pd-top--big pd-bottom--big bg-light-blue">
  <div class="container">
    <h2 class="heading--secondary heading--green mg-bottom--medium">
      Newsletter
    </h2>
    <div class="columns is-multiline">
      <?php $args = array(
        'order'    => 'desc',
        'orderby'  => 'publish_date',
        'posts_per_page' => '-1',
        'cat' => '10'
      );
      $resources = new WP_Query($args);

      if ($resources->have_posts()) : while ($resources->have_posts()) : $resources->the_post();
          get_template_part('templates/newsletter');
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
<!-- newsletter -->
<section class="section--padded pd-top--big pd-bottom--big">
  <div class="container">
    <h2 class="heading--secondary heading--green mg-bottom--big">Gallery</h2>
    <div class="columns is-multiline">
      <?php $args = array(
        'order'    => 'desc',
        'orderby'  => 'publish_date',
        'posts_per_page' => '-1',
        'cat' => '8'
      );
      $resources = new WP_Query($args);

      if ($resources->have_posts()) : while ($resources->have_posts()) : $resources->the_post();
          get_template_part('templates/resource');
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>
<!-- gallery -->

<section class="section training-materials bg-gray pd-top--big pd-bottom--big">
  <div class="container">
    <div class="columns">
      <div class="column is-one-quarter">
        <h2 class="heading--secondary heading--green mg-bottom--big">
          Training <br>Materials
        </h2>
      </div>
      <div class="column">

        <div class="columns is-multiline">
          <?php $args = array(
            'post_type'         => 'resource',
            'posts_per_page'    => '-1',
          );
          $resources = new WP_Query($args);

          if ($resources->have_posts()) : while ($resources->have_posts()) : $resources->the_post();
              get_template_part('templates/tr-material');
            endwhile;
          endif;
          wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>