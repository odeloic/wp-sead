<?php get_header();
?>




<div class="container pd-top--big pd-bottom--big">
    <?php if (have_posts()) : ?>
        <h1 class="heading--primary"><?php printf(__('Search Results for: %s', 'sead'), '<span>' . get_search_query() . '</span>'); ?></h1>
    <?php else : ?>
        <h1 class="heading--primary"><?php _e('Nothing Found', 'sead'); ?></h1>
    <?php endif; ?>
    <?php get_template_part('templates/loop', 'search'); ?>
</div>

<?php get_footer(); ?>