<?php
// Fetch the post ID from theme options
$kiobe_crypto_trading_post_id = get_option('kiobe_kiobe_crypto_trading_post_id', '');

// Fetch the post content
$kiobe_crypto_trading = !empty($kiobe_crypto_trading_post_id) ? get_post($kiobe_crypto_trading_post_id) : null;
$kiobe_crypto_trading_content = $kiobe_crypto_trading ? apply_filters('the_content', $kiobe_crypto_trading->post_content) : '';

?>

<section class="kiobe-crypto-trading py-0 my-0">
    <div class="container">
        <div class="card bg-transparent">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center order-1 order-md-0">
                    <div class="card-body">
                        <h2 class="card-title">Kiobe <span class="orng-span">crypto trading</span></h2>
                        <?php echo $kiobe_crypto_trading_content; ?>
                        <a href="<?php bloginfo('url')?>/register/" class="general-button d-none d-md-inline">Trade Now</a>
                        <a href="<?php bloginfo('url')?>/register/" class="general-button-lg d-inline d-md-none">Trade Now</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <img class="w-75 h-100" src="<?php bloginfo('template_url'); ?>/img/crypto-trading2.png" alt="Kiobe Web Platform">
                </div>
            </div>
        </div>
    </div>
</section>


    