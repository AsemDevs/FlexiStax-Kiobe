<?php
/**
 * Template Name: Legal Documents
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<!-- Start Page Container -->
    <div class="page-container">
            <?php get_template_part( 'loop-templates/content', 'Legal_Documents' );?>
    </div>
<!-- End page-container -->

<?php
get_footer();
