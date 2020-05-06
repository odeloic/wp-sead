<?php

class Menu_Walker extends Walker_Nav_Menu
{
    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {

        $output .= '<li class="navigation__elt ' . implode(" ", $item->classes) . ' ">';
        $attributes  = '';
        !empty($item->attr_title)
            // Avoid redundant titles
            and $item->attr_title !== $item->title
            and $attributes .= ' title="' . esc_attr($item->attr_title) . '"';
        !empty($item->url)
            and $attributes .= ' href="' . esc_attr($item->url) . '"';
        $attributes  = trim($attributes);
        $title       = apply_filters('the_title', $item->title, $item->ID);
        $item_output = "$args->before<a $attributes>$args->link_before$title</a>"
            . "$args->link_after$args->after";
        // Since $output is called by reference we don't need to return anything.
        $output .= apply_filters(
            'walker_nav_menu_start_el',
            $item_output,
            $item,
            $depth,
            $args
        );
    }
    /**
     * @see Walker::start_lvl()
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @return void
     */
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= '<ul class="navigation__sub-menu">';
    }
    /**
     * @see Walker::end_lvl()
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @return void
     */
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= '</ul>';
    }
    /**
     * @see Walker::end_el()
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @return void
     */
    function end_el(&$output, $item, $depth = 0, $args = array())
    {
        $output .= '</li>';
    }
}

if (!function_exists('sead_setup')) {
    /**
     * Set up theme defaults and registers support for various WordPress feaures.
     */
    function sead_setup()
    {
        load_theme_textdomain('sead', get_theme_file_uri('languages'));

        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ));
        add_theme_support('custom-background', apply_filters('sead_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        register_nav_menus(
            array(
                'header-menu' => esc_html__('Primary Menu', 'sead'),
                'footer-menu' => esc_html__('Footer Menu', 'sead'),
            )
        );

        add_image_size('slide', 1265, 305, true);
        add_image_size('partner-logo', 100, 80, true);
        add_image_size('post-thumbnails', 329, 219, true);
    }
}
add_action('after_setup_theme', 'sead_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sead_content_width()
{
    $GLOBALS['content_width'] = apply_filters('sead_content_width', 960);
}
add_action('after_setup_theme', 'sead_content_width', 0);

/**
 * Register widget area.
 */
function sead_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'sead'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ));
}
add_action('widgets_init', 'sead_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function sead_scripts()
{

    wp_enqueue_style('sead-style', get_theme_file_uri('assets/css/main.css'));

    wp_enqueue_script('sead-script', get_theme_file_uri('assets/js/bundle.js'), array(), '', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'sead_scripts');


function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


function sead_register_query_vars($vars)
{
    $vars[] = 'resource_activity';
    $vars[] = 'resource_category';

    return $vars;
}

add_filter('query_vars', 'sead_register_query_vars');



/**
 * Build a custom query based on several conditions
 * The pre_get_posts action gives developers access to the $query object by reference
 * any changes you make to $query are made directly to the original object - no return value is requested
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/pre_get_posts
 *
 */
function sead_pre_get_posts($query)
{
    // check if the user is requesting an admin page
    // or current query is not the main query
    if (is_admin() || !$query->is_main_query()) {
        return;
    }

    // edit the query only when post type is 'resource'
    // if it isn't, return
    if (!is_post_type_archive('resource')) {
        return;
    }

    $meta_query = array();

    // add meta_query elements
    if (!empty(get_query_var('resource_activity'))) {
        $meta_query[] = array('key' => 'resource_activity', 'value' => get_query_var('resource_activity'), 'compare' => 'LIKE');
    }

    // if( !empty( get_query_var( 'resource_category' ) ) ){
    //     $meta_query[] = array( 'key' => '_sm_accommodation_type', 'value' => get_query_var( 'type' ), 'compare' => 'LIKE' );
    // }

    if (count($meta_query) > 1) {
        $meta_query['relation'] = 'AND';
    }

    if (count($meta_query) > 0) {
        $query->set('meta_query', $meta_query);
    }
}
add_action('pre_get_posts', 'sead_pre_get_posts', 1);


function sead_search_form($args)
{
    // The Query
    // meta_query expects nested arrays even if you only have one query
    $query = new WP_Query(array('post_type' => 'resource', 'posts_per_page' => '-1', 'meta_query' => array(array('key' => 'resource_activity'))));

    // The Loop
    if ($query->have_posts()) {
        $activities = array();
        while ($query->have_posts()) {
            $query->the_post();
            $activity = get_post_meta(get_the_ID(), 'resource_activity', true);
            $activity = get_the_title($activity);
            // populate an array of all occurrences (non duplicated)
            if (!in_array($activity, $activities)) {
                $activities[] = $activity;
            }
        }
    } else {
        echo 'No activity yet!';
        return;
    }

    /* Restore original Post Data */
    wp_reset_postdata();

    if (count($activities) == 0) {
        return;
    }

    asort($activities);

    $select_activity = '<select name="resource_activity" style="width: 100%">';
    $select_activity .= '<option value="" selected="selected">' . __('Select Activity', 'sead') . '</option>';
    foreach ($activities as $activity) {
        $select_activity .= '<option value="' . $activity . '">' . $activity . '</option>';
    }
    $select_activity .= '</select>' . "\n";

    reset($activities);

    $output = '<form action="' . esc_url(get_permalink()) . '" method="GET" role="search">';
    $output .= '<div class="smselectbox">' .  $select_activity  . '</div>';
    $output .= '<input type="hidden" name="post_type" value="resource" />';
    $output .= '<p><input type="submit" value="Go!" class="button" /></p></form>';

    return $output;
}


function exclude_category_posts($query)
{
    if ($query->is_home() && $query->is_main_query()) {
        $query->set('cat', '-8,-9,-10');
    }
}
add_action('pre_get_posts', 'exclude_category_posts');
add_post_type_support('page', 'excerpt');
