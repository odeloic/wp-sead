<?php get_header();?>
<div class="page-header--default">
  <div class="container">
      <?php
        $our_title = get_the_title( get_option('page_for_posts', true) );
       ?>
      <h2 class="page-header--default__title">
          <?php echo $our_title; ?>
      </h2>
  </div>
</div>

<section class="section pd-top--big pd-bottom--big">
  <div class="container">
      <div class="columns is-multiline">
        <?php get_template_part('templates/loop');?>
      </div>
  </div>
</section



<?php get_footer();?>
