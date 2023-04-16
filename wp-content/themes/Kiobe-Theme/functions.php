<?php

// Include NavWalker Class For Bootstrap Navigation Bar
require_once('wp-bootstrap-navwalker.php');

add_theme_support('post-thumbnails');


/*
        Custom Functions For Styles
        wp_enqueue_style() //Enqueue a CSS stylesheet.

    */

function add_custom_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . "/css/all.css");
    wp_enqueue_style('main-css', get_template_directory_uri() . "/css/main.css", array('bootstrap-css'), $version, 'all');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . "/vendor/twbs/bootstrap/dist/css/bootstrap.css", array(), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp', array(), true, 'all');
}


/*
        Custom Functions For Scripts
        wp_enqueue_script()
        wp_deregister_script() // removes a registered wp script
    */

function add_custom_scripts()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp', array(), true, 'all');
    wp_deregister_script('jquery'); // Remove wp registered Jquery
    wp_register_script('jquery', includes_url("/js/jquery/jquery.js"), false, '', true); // Register new Jquery in footer
    wp_enqueue_script('jquery'); // Enqueue the new jquery from wp includes
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . "/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.js", array('jquery'), false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . "/js/main.js", array(), false, true);
    wp_enqueue_script('html5shiv', get_template_directory_uri() . "/js/html5shiv.js");
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
    wp_enqueue_script('respond', get_template_directory_uri() . "/js/respond.min.js");
    wp_script_add_data('respond', 'conditional', 'lt IE 9');
}

// Register the navbar menu
function kiobe_custom_menu()
{
    register_nav_menus(array(
        'bootstrap-menu' => 'Navigation Bar',
        'footer-menu' => 'Footer Bar',
    ));
}

function kiobe_navbar_primary()
{
    wp_nav_menu(array(
        'theme_location'    => 'bootstrap-menu',
        'menu_class'        => 'navbar-nav',
        'container'         => 'false',
        'depth'             => 3,
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker()
    ));
}
/*
        * Add Actions
        add_action()
    */
add_action('wp_enqueue_scripts', 'add_custom_styles');
add_action('wp_enqueue_scripts', 'add_custom_scripts');
add_action('init', 'kiobe_custom_menu');
/*
        init: Runs after WordPress has finished loading but before any headers are sent.
        Useful for intercepting $_GET or $_POST triggers.
    */
function prefix_nav_description($item_output, $item, $depth, $args)
{
    if (!empty($item->description)) {
        $item_output = str_replace($args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
    }

    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'prefix_nav_description', 10, 4);


//Add Class/ID to Post Content
add_filter('the_content', 'p_card_text');
function p_card_text($content)
{
    //Replace the instance with the Class/ID markup.
    $string = '<p'; //your tag
    $replace = '<p class="card-text"'; //add your class/id and tag
    $content = str_replace($string, $replace, $content);
    return $content;
}

function footer_widget_menus()
{

    register_sidebar(array(
        'name'          => __('Company Menu'),
        'id'            => 'company-menu',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s col-md-2">',
        'after_widget'  => '</div>'
    ));

    register_sidebar(array(
        'name'          => __('Trading Menu'),
        'id'            => 'trading-menu',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s col-md-2">',
        'after_widget'  => '</div>'
    ));

    register_sidebar(array(
        'name'          => __('Investments Menu'),
        'id'            => 'investments-menu',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s col-md-2">',
        'after_widget'  => '</div>'
    ));
    register_sidebar(array(
        'name'          => __('Promotions Menu'),
        'id'            => 'promotions-menu',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s col-md-2">',
        'after_widget'  => '</div>'
    ));
    register_sidebar(array(
        'name'          => __('Tools Menu'),
        'id'            => 'tools-menu',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s col-md-2">',
        'after_widget'  => '</div>'
    ));
}

add_action('widgets_init', 'footer_widget_menus');

function kiobe_theme_options_init()
{
    // Register settings and other existing code here

    // Add a new section for the reusable sections
    add_settings_section('kiobe_reusable_sections', __('Reusable Sections', 'kiobe'), 'kiobe_reusable_sections_text', 'kiobe_theme_options_page');

    // Add a setting for the reusable sections
    register_setting('kiobe_theme_options_group', 'kiobe_theme_options', 'kiobe_theme_options_validate');
}

// This function displays the form for the theme options.
function kiobe_theme_options_page()
{
?>
    <div class="wrap">
        <h1>Kiobe Theme Options</h1>
        <form method="post" action="options.php">
            <?php
    settings_fields('kiobe_theme_options_group');
            $options = get_option('kiobe_theme_options');
            ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Copy Top Trades section post ID</th>
                    <td><input type="number" min="1" step="1" name="kiobe_theme_options[copy_top_trades_post_id]" value="<?php echo isset($options['copy_top_trades_post_id']) ? esc_attr($options['copy_top_trades_post_id']) : ''; ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Kiobe Crypto Trading section post ID</th>
                    <td><input type="number" min="1" step="1" name="kiobe_theme_options[kiobe_crypto_trading_post_id]" value="<?php echo isset($options['kiobe_crypto_trading_post_id']) ? esc_attr($options['kiobe_crypto_trading_post_id']) : ''; ?>" /></td>
                </tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>
<?php
}


function kiobe_theme_options_validate($input)
{
    $output = array();

    // Save the post ID for the Copy Top Trades section
    $output['copy_top_trades_post_id'] = intval($input['copy_top_trades_post_id']);

    // Save the post ID for the Kiobe Crypto Trading section
    $output['kiobe_crypto_trading_post_id'] = intval($input['kiobe_crypto_trading_post_id']);

    return $output;
}


// This function adds the theme options page to the admin menu.
function kiobe_theme_options_menu()
{
    add_theme_page('Kiobe Theme Options', 'Kiobe Theme Options', 'manage_options', 'kiobe_theme_options_page', 'kiobe_theme_options_page');
}



function kiobe_reusable_sections_text()
{
    echo '<p>' . __('Choose reusable sections for different parts of the site.', 'kiobe') . '</p>';
}

add_action('admin_init', 'kiobe_theme_options_init');



function kiobe_reusable_section_select($section_name, $section_label)
{
    $options = get_option('kiobe_theme_options');
    $selected_post_id = isset($options[$section_name]) ? $options[$section_name] : '';

    // Fetch all reusable sections
    $args = array(
        'post_type' => 'reusable_sections',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );
    $query = new WP_Query($args);

    // Display the select field
    echo '<label for="' . $section_name . '_post_type">' . $section_label . ' Post Type</label>';
    echo '<select name="kiobe_theme_options[' . $section_name . '_post_type]" id="' . $section_name . '_post_type">';
    echo '<option value="">Select a reusable section</option>';
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $selected = selected($selected_post_id, get_the_ID(), false);
            echo '<option value="' . get_the_ID() . '" ' . $selected . '>' . get_the_title() . '</option>';
        }
        wp_reset_postdata();
    }
    echo '</select>';

    // Display the input field for the post ID
    echo '<label for="' . $section_name . '_post_id">' . $section_label . ' Post ID</label>';
    echo '<input type="number" name="kiobe_theme_options[' . $section_name . '_post_id]" id="' . $section_name . '_post_id" value="' . $selected_post_id . '">';
}



// Kiobe Reusable Sections

function kiobe_register_reusable_sections_post_type()
{
    $labels = array(
        'name' => _x('Reusable Sections', 'Post Type General Name', 'kiobe'),
        'singular_name' => _x('Reusable Section', 'Post Type Singular Name', 'kiobe'),
        'menu_name' => __('Reusable Sections', 'kiobe'),
        'parent_item_colon' => __('Parent Reusable Section:', 'kiobe'),
        'all_items' => __('All Reusable Sections', 'kiobe'),
        'view_item' => __('View Reusable Section', 'kiobe'),
        'add_new_item' => __('Add New Reusable Section', 'kiobe'),
        'add_new' => __('Add New', 'kiobe'),
        'edit_item' => __('Edit Reusable Section', 'kiobe'),
        'update_item' => __('Update Reusable Section', 'kiobe'),
        'search_items' => __('Search Reusable Section', 'kiobe'),
        'not_found' => __('Not found', 'kiobe'),
        'not_found_in_trash' => __('Not found in Trash', 'kiobe'),
    );

    $args = array(
        'label' => __('reusable_sections', 'kiobe'),
        'description' => __('Reusable sections for various parts of the site', 'kiobe'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'revisions'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );

    register_post_type('reusable_sections', $args);
}
add_action('init', 'kiobe_register_reusable_sections_post_type', 0);

add_action('admin_menu', 'kiobe_theme_options_menu');
