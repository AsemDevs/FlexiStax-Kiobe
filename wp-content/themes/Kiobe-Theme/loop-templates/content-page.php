<?php
/**
 * Partial template for content in page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

        <?php 
        if(is_page('markets')) {
            get_template_part( 'loop-templates/content','markets' );
        }elseif(is_page('education')){
            get_template_part( 'loop-templates/content','education' );
        }elseif(is_page('promotions')){
            get_template_part( 'loop-templates/content','promotions' );
        }elseif(is_page('trading_tools') or is_page('trading')){
            get_template_part( 'loop-templates/content','trading_tools' );
        }elseif(is_page('account-types')){
            get_template_part( 'loop-templates/content','account_types' );
        }elseif(is_page('partners')){
            get_template_part( 'loop-templates/content','partners' );
        }else {
            while ( have_posts() ) {
                the_post();
                the_content();
                // If comments are open or we have at least one comment, load up the comment template.
            }
            }
            ?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->
