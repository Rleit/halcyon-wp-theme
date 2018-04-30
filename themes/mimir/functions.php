<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: halcyon.com | @halcyon
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
    External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
    Theme Support
\*------------------------------------*/

if (!isset($content_width)) {
    $content_width = 900;
}

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    add_theme_support('feature');
    
    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
    'default-color' => 'FFF',
    'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
    'default-image'            => get_template_directory_uri() . '/img/headers/default.jpg',
    'header-text'            => false,
    'default-text-color'        => '000',
    'width'                => 1000,
    'height'            => 198,
    'random-default'        => false,
    'wp-head-callback'        => $wphead_cb,
    'admin-head-callback'        => $adminhead_cb,
    'admin-preview-callback'    => $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('halcyon', get_template_directory() . '/languages');
}

/*------------------------------------*\
    Functions
\*------------------------------------*/

// HTML5 Blank navigation



function homebg()
{

    the_post_thumbnail('full', ['class' => 'img-fluid', 'title' => 'Feature image']);
}

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function halcyon_nav()
{
    wp_nav_menu(
        array(
        'theme_location'    => 'header-menu',
        'depth'                => 0, // 1 = with dropdowns, 0 = no dropdowns.
        'container'            => 'nav',
        'container_class'    => 'collapse navbar-collapse',
        'container_id'        => 'NavContent',
        'menu_class'        => 'navbar-nav mr-auto text-center',
        'fallback_cb'        => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker()
        ) 
    );
}

// Load HTML5 Blank scripts (header.php)
function halcyon_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('jquery3',  'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1'); // Jquery
        wp_enqueue_script('jquery3'); // Enqueue it!

        wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('bstool',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js', array(), '1.13.0', 'True'); // <!-- Bootstrap tooltips -->
        wp_enqueue_script('bstool'); // <!-- Bootstrap tooltips -->
        
        wp_register_script('bootstrap_js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js', array(), '4.1.0', 'True'); // Bootstrap
        wp_enqueue_script('bootstrap_js'); // <!-- Bootstrap core JavaScript -->

        wp_register_script('mdb_js',  'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js', array(), '4.5.0', 'True'); // MDB
        wp_enqueue_script('mdb_js'); // <!-- MDB core JavaScript -->

        wp_register_script('oscripts', get_template_directory_uri() . '/js/scripts.js', array(), '0.0.1'); // Quickedits
        wp_enqueue_script('oscripts'); // Enqueue it!

        wp_register_script('wow2',  'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '1.1.2', 'True'); // wow such doge
        wp_enqueue_script('wow2'); // Enqueue it!
    }
}



// Load HTML5 Blank conditional scripts
function halcyon_conditional_scripts()
{
    // if (is_page('pagenamehere')) {
    //     wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
    //     wp_enqueue_script('scriptname'); // Enqueue it!

        
    // }
}

// Load HTML5 Blank styles
function halcyon_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('fontawesome',  'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7', 'all');
    wp_enqueue_style('fontawesome'); // Enqueue it!

    wp_register_style('boostrap_css',  'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_enqueue_style('boostrap_css'); // Enqueue it!

    wp_register_style('mdb_css',  'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css', array(), '4.5', 'all');
    wp_enqueue_style('mdb_css'); // Enqueue it!

    wp_register_style('halcyon', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('halcyon'); // Enqueue it!

    
}




// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(
        array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'halcyon'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'halcyon'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'halcyon') // Extra Navigation if needed (duplicate as many as you need!)
        )
    );
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {
    // Define Sidebar Widget Area 1
    register_sidebar(
        array(
        'name' => __('Widget Area 1', 'halcyon'),
        'description' => __('Description for this widget-area...', 'halcyon'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        )
    );

    // Define Sidebar Widget Area 2
    register_sidebar(
        array(
        'name' => __('Widget Area 2', 'halcyon'),
        'description' => __('Description for this widget-area...', 'halcyon'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        )
    );
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action(
        'wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
        )
    );
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(
        array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
        )
    );
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'halcyon') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function halcyongravatar($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}


// Custom Comments Callback
function halcyoncomments($comment, $args, $depth)
{



    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ('div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'div';
        $add_below = 'div-comment';
    }
?>

   
    <<?php echo $tag ?> <?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <div class="media d-block d-md-flex mt-3">
    <?php if ('div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    
        
                    <img class="d-flex mb-3 mx-auto " src="<?php echo get_avatar_url($comment, $size);  ?>" alt="Generic placeholder image">
                    
                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="mt-0 font-weight-bold"><?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
                            <a href="" class="pull-right">
                                <i class="fa fa-reply"></i>
                            </a>
                        </h5>
                        <?php comment_text() ?>

                        <?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
    <br />
                        <?php endif; ?>
                    </div>
                </div>


    


    </div>




    

    <div class="reply">
    <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
    <?php if ('div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
    
<?php 

}

/*------------------------------------*\
    Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'halcyon_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'halcyon_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'halcyon_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('init', 'create_post_type_html5'); // Add our Gallery Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'halcyongravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
    Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called halcyon-b
// function create_post_type_html5()
// {
//     register_taxonomy_for_object_type('category', 'gallery'); // Register Taxonomies for Category
//     register_taxonomy_for_object_type('post_tag', 'mosaicpost');
//     register_post_type('gallery', // Register Custom Post Type
//         array(
//         'labels' => array(
//             'name' => __('Gallery Post', 'halcyon'), // Rename these to suit
//             'singular_name' => __('Gallery Post', 'halcyon'),
//             'add_new' => __('Add New', 'halcyon'),
//             'add_new_item' => __('Add New Gallery Entry', 'halcyon'),
//             'edit' => __('Edit', 'halcyon'),
//             'edit_item' => __('Edit Gallery Post', 'halcyon'),
//             'new_item' => __('New Gallery Post', 'halcyon'),
//             'view' => __('View Gallery Post', 'halcyon'),
//             'view_item' => __('View Gallery Post', 'halcyon'),
//             'search_items' => __('Search Gallery Post', 'halcyon'),
//             'not_found' => __('No Gallery Posts found', 'halcyon'),
//             'not_found_in_trash' => __('No Gallery Posts found in Trash', 'halcyon')
//         ),
//         'public' => true,
//         'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
//         'has_archive' => true,
//         'supports' => array(
//             'title',
//             'editor',
//             'excerpt',
//             'thumbnail'
//         ), // Go to Dashboard Custom HTML5 Blank post for supports
//         'can_export' => true, // Allows export in Tools > Export
//         'taxonomies' => array(
//             'post_tag',
//             'category'
//         ) // Add Category and Post Tags support
//     ));
// }

/*------------------------------------*\
    ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

?>




<?php
 
 /*Find the image id from a URL*/
 
function url_get_image_id($image_url) 
{
    global $wpdb;
    $attachment = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $image_url));
    return $attachment[0];
}
 
/* determine whether post has a featured image, if not, find the first image inside the post content, $size passes the thumbnail size, $url determines whether to return a URL or a full image tag*/
 
function checkImageType($size, $type) 
{
 
    global $post;
    $content = $post->post_content;                
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);
    $first_img = $matches[1][0];
 
    /*If there's a featured image, show it*/
 
    if (get_the_post_thumbnail($post_id) != '' ) {
        if($type=='url') {
            the_post_thumbnail_url($size);
        } else {
            the_post_thumbnail($size);
        }
    } else {
 
        /*No featured image, so we get the first image inside the post content*/
 
        if ($first_img) {
 
            //let's get the correct image dimensions
 
            $image_id = url_get_image_id($first_img);
            $image_thumb = wp_get_attachment_image_src($image_id, $size);
 
            // if we've found an image ID, correctly display it
 
            if($image_thumb) {
                if($type=='url') {
                    echo $image_thumb[0];
                } else {
 
                    echo '<img src="'.$image_thumb[0].'" alt="'.get_the_title().'"/>';
                }
            } else {
 
                //if no image (i.e. from an external source), echo the original URL
 
                if($type=='url') {
                    echo $first_img;
                } else {
 
                    echo '<img src="'.$first_img.'" alt="'.get_the_title().'"/>';
                }
 
            }
        }
    }
}
 
?>