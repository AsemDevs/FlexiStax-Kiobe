<?php
/**
 * Template Name: Trading Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/home' );
}
?>

<!-- Start Page Container -->
    <div class="page-container">
            <?php 
                get_template_part( 'loop-templates/content', 'trading_tools' );
            ?>
    </div>
<!-- End page-container -->

<?php
get_footer();
