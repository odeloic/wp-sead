<?php
get_header();
get_template_part('templates/page-header');
?>
<section class="section pd-top--big pd-bottom--medium">
  <div class="container">
    <h2 class="heading--secondary heading--green mg-bottom--medium">Live Tenders</h2>
    <?php $args = array(
      'post_type'         => 'procurements',
      'posts_per_page'    => '-1'
    );
    $procurements = new WP_Query($args);
    if ($procurements->have_posts()) : ?>
      <p class="mg-bottom--small">If you are interested in participating in any of our live procurements please email <a href="mailto:Procurement@SEAD.rw" class="link link--goto">Procurement@SEAD.rw</a> mentioning the Procurment Number in the heading to receive the relevant tender pack</p>
      <table class="table is-bordered is-hoverable is-fullwidth">
        <thead>
          <tr>
            <th>Procurement Number</th>
            <th>Procurement Name</th>
            <th>STIC</th>
            <th>Location</th>
            <th>Description</th>
            <th>Deadline for Submission</th>
          </tr>
        </thead>
        <?php while ($procurements->have_posts()) : $procurements->the_post(); ?>
          <tbody>
            <?php get_template_part('templates/procurement-row'); ?>
          </tbody>
        <?php endwhile; ?>
      </table>
    <?php
    else :
    ?>
      <p>No available tenders at the moment</p>
    <?php
    endif;
    wp_reset_postdata();
    ?>

  </div>
</section>
<section class="section pd-top--big pd-bottom--big">
  <div class="container">
    <h2 class="heading--secondary heading--green mg-bottom--medium">Awarded Procurements</h2>
    <?php $args = array(
      'post_type'         => 'procurement_awards',
      'posts_per_page'    => '-1'
    );
    $awards = new WP_Query($args);
    if ($awards->have_posts()) : ?>
      <table class="table is-bordered is-hoverable is-fullwidth">
        <thead>
          <tr>
            <th>Procurement Number</th>
            <th>Procurement Name</th>
            <th>STIC</th>
            <th>Awarded Supplier</th>
            <th>Description</th>
          </tr>
        </thead>
        <?php while ($awards->have_posts()) : $awards->the_post(); ?>
          <tbody>
            <?php get_template_part('templates/award-row'); ?>
          </tbody>
        <?php endwhile; ?>
      </table>
    <?php
    else :
    ?>
      <p>No available information at the moment.</p>
    <?php
    endif;
    wp_reset_postdata();
    ?>
  </div>
</section>
<?php get_footer(); ?>