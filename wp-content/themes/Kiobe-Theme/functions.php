<?php

    // Include NavWalker Class For Bootstrap Navigation Bar
    require_once('wp-bootstrap-navwalker.php');

    add_theme_support( 'post-thumbnails' );


    /*
        Custom Functions For Styles
        wp_enqueue_style() //Enqueue a CSS stylesheet.

    */

    function add_custom_styles() {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . "/css/all.css");
        wp_enqueue_style( 'main-css', get_template_directory_uri() . "/css/main.css", array('bootstrap-css'), $version, 'all');
        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . "/vendor/twbs/bootstrap/dist/css/bootstrap.css", array(), 'all');
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp', array(), true, 'all');

    }


    /*
        Custom Functions For Scripts
        wp_enqueue_script()
        wp_deregister_script() // removes a registered wp script
    */

    function add_custom_scripts() {
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp', array(), true, 'all');
        wp_deregister_script('jquery'); // Remove wp registered Jquery
        wp_register_script('jquery', includes_url("/js/jquery/jquery.js"), false,'', true); // Register new Jquery in footer
        wp_enqueue_script('jquery'); // Enqueue the new jquery from wp includes
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . "/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.js", array('jquery'), false, true);
        wp_enqueue_script( 'main-js', get_template_directory_uri() . "/js/main.js", array(), false, true);
        wp_enqueue_script( 'html5shiv', get_template_directory_uri() . "/js/html5shiv.js");
        wp_script_add_data('html5shiv', 'conditional' , 'lt IE 9');
        wp_enqueue_script( 'respond', get_template_directory_uri() . "/js/respond.min.js");
        wp_script_add_data('respond', 'conditional' , 'lt IE 9');
    }

    // Register the navbar menu
    function kiobe_custom_menu() {
        register_nav_menus(array(
            'bootstrap-menu' => 'Navigation Bar',
            'footer-menu' => 'Footer Bar',
            ));
    }

    function kiobe_navbar_primary() {
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
    function prefix_nav_description( $item_output, $item, $depth, $args ) {
        if ( !empty( $item->description ) ) {
            $item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
        }
     
        return $item_output;
    }
    add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );


    //Add Class/ID to Post Content
    add_filter('the_content', 'p_card_text');
    function p_card_text( $content ) {
        //Replace the instance with the Class/ID markup.
        $string = '<p'; //your tag
        $replace = '<p class="card-text"'; //add your class/id and tag
        $content = str_replace( $string, $replace, $content );
        return $content;
    }

    function footer_widget_menus() {

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
?>