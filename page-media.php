<?php
get_header();
get_template_part('templates/page-header');
?>

<!-- content -->

<!-- training materials -->
<section class="section training-materials bg-gray pd-top--big pd-bottom--big" id="training-materials">
  <div class="container">
    <div class="columns">
      <div class="column is-one-quarter">
        <h2 class="heading--secondary heading--green mg-bottom--big">
          Training <br>Materials
        </h2>
      </div>
      <div class="column">
        <div class="columns">

          <div class="column">
            <h2 class="heading--tertiary mg-bottom--medium">Poultry</h2>
            <?php $args = array(
              'post_type'         => 'training_material',
              'posts_per_page'    => '-1',
              'tax_query'         => array(
                array(
                  'taxonomy'      => 'training_material_category',
                  'field'         => 'slug',
                  'terms'         => 'poultry'
                )
              )
            );
            $resources = new WP_Query($args);

            if ($resources->have_posts()) : while ($resources->have_posts()) : $resources->the_post();
                get_template_part('templates/tr-material');
              endwhile;
            endif;
            wp_reset_postdata(); ?>
          </div><!-- tr material category -->

          <div class="column">
            <h2 class="heading--tertiary mg-bottom--medium">Dairy</h2>
            <?php $args = array(
              'post_type'         => 'training_material',
              'posts_per_page'    => '-1',
              'tax_query'         => array(
                array(
                  'taxonomy'      => 'training_material_category',
                  'field'         => 'slug',
                  'terms'         => 'diary'
                )
              )
            );
            $resources = new WP_Query($args);

            if ($resources->have_posts()) : while ($resources->have_posts()) : $resources->the_post();
                get_template_part('templates/tr-material');
              endwhile;
            endif;
            wp_reset_postdata(); ?>
          </div><!-- tr material category -->

          <div class="column">
            <h2 class="heading--tertiary mg-bottom--medium">Potato</h2>
            <?php $args = array(
              'post_type'         => 'training_material',
              'posts_per_page'    => '-1',
              'tax_query'         => array(
                array(
                  'taxonomy'      => 'training_material_category',
                  'field'         => 'slug',
                  'terms'         => 'potato'
                )
              )
            );
            $resources = new WP_Query($args);

            if ($resources->have_posts()) : while ($resources->have_posts()) : $resources->the_post();
                get_template_part('templates/tr-material');
              endwhile;
            endif;
            wp_reset_postdata(); ?>
          </div><!-- tr material category -->

          <div class="column">
            <h2 class="heading--tertiary mg-bottom--medium">Horticulture</h2>
            <?php $args = array(
              'post_type'         => 'training_material',
              'posts_per_page'    => '-1',
              'tax_query'         => array(
                array(
                  'taxonomy'      => 'training_material_category',
                  'field'         => 'term_id',
                  'terms'         => '15'
                )
              )
            );
            $resources = new WP_Query($args);

            if ($resources->have_posts()) : while ($resources->have_posts()) : $resources->the_post();
                get_template_part('templates/tr-material');
              endwhile;
            endif;
            wp_reset_postdata(); ?>
          </div><!-- tr material category -->

          <div class="column">
            <h2 class="heading--tertiary mg-bottom--medium">Crosscutting</h2>
            <?php $args = array(
              'post_type'         => 'training_material',
              'posts_per_page'    => '-1',
              'tax_query'         => array(
                array(
                  'taxonomy'      => 'training_material_category',
                  'field'         => 'term_id',
                  'terms'         => '18'
                )
              )
            );
            $resources = new WP_Query($args);
            if ($resources->have_posts()) : while ($resources->have_posts()) : $resources->the_post();
                get_template_part('templates/tr-material');
              endwhile;
            endif;
            wp_reset_postdata(); ?>
          </div><!-- tr material category -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- E-course -->
<section class="section--padded pd-top--big pd-bottom--big" id="e-courses">
  <div class="container">
    <h2 class="heading--secondary heading--green mg-bottom--big">E-Courses</h2>
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
<!-- NewsLetter -->
<section class="section pd-top--big pd-bottom--big bg-light-blue" id="newsletter">
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
<!-- Gallery -->
<section class="section--padded pd-top--big pd-bottom--big" id="gallery">
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
<?php get_footer(); ?>