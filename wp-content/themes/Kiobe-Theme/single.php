<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="container" id="single-wrapper">
		<div class="row">
            <div class="col-md-12">
			    <main class="site-main" id="main">
                    <?php
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'loop-templates/content', 'single' );
                        // If comments are open or we have at least one comment, load up the comment template.
                    }
                    ?>
                </main><!-- #main -->
            </div>
		</div><!-- .row -->
	</div><!-- #content -->
</div><!-- #single-wrapper -->

<?php
get_footer();
