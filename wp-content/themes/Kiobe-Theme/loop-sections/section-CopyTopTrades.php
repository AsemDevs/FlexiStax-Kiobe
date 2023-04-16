<?php
// Fetch the post ID from theme options
$copy_top_trades_post_id = get_option('kiobe_copy_top_trades_post_id', '');

// Fetch the post content
$copy_top_trader = !empty($copy_top_trades_post_id) ? get_post($copy_top_trades_post_id) : null;
$copy_top_trader_content = $copy_top_trader ? apply_filters('the_content', $copy_top_trader->post_content) : '';
$template_url = get_bloginfo('template_url');
$register_url = get_bloginfo('url') . '/register/';
?>

<section class="copy-top-trades py-0 bg-transparent">
    <div class="container">
        <div class="card shadow-none bg-transparent">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center order-1 order-md-0">
                    <img class="w-100" src="<?php echo esc_url($template_url); ?>/img/copy-trade.png" alt="Trade Safe With Us">
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center" style="padding-left: 5rem;">
                    <div class="card-body">
                        <h2 class="card-title">Copy <span class="orng-span">Top Trades </span></h2>
                        <?php echo $copy_top_trader_content; ?>
                        <a href="<?php echo esc_url($register_url); ?>" class="general-button d-none d-md-inline">Start Trading</a>
                        <a href="<?php echo esc_url($register_url); ?>" class="general-button-lg d-inline d-md-none">Start Trading</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
