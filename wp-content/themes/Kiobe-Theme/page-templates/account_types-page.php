<?php
/**
 * Template Name: Account Types Page
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
        <!-- Start Multi-platform Section -->
            <?php if (is_page( 'account-types' )){
                get_template_part( 'loop-templates/content', 'account_types' );
            }
            ?>
        <!-- End Multi-platform Section -->
    </div>
<!-- End page-container -->

<?php
get_footer();
