<!-- Start copy-top-trades Section -->
<section class="copy-top-trades">
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="call-to-action-banner">
                    <div class="card-img">
                        <h3><span>Always on your side</h3>
                        <h2>Open a trading account</h2>
                        <h5><i class="far fa-clock"></i> in less then 3min.</h5>
                        <a href="<?php echo bloginfo('url')?>/register" class="general-button">Open Now</a>
                        <a href="<?php echo bloginfo('url')?>/register" class="general-button-lg">Open Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row boxes">
            <div class="col-sm-4">
                <div class="icon-base">
                    <span class="material-icons-outlined">shutter_speed</span>
                </div>
                <h4>Average execution time <span class="orng-span">11.06 ms</span></h4>
            </div>
            <div class="col-sm-4">
                <div class="icon-base">
                    <span class="material-icons-outlined">change_circle</span>
                </div>
                <h4>Up to <span class="orng-span">7.000 orders</span> executed per second</h4>
            </div>
            <div class="col-sm-4">
                <div class="icon-base">
                    <span class="material-icons-outlined">dns</span>
                </div>
                <h4>Ultra-low latency <span class="orng-span">datacentre co-location</span></h4>
            </div>
        </div>
        <div class="copy-top-trades-desktop">
            <div class="card shadow-none bg-transparent py-4">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center align-items-center card-horozintal">
                        <img class="w-100" src="<?php bloginfo('template_url'); ?>/img/copy-trade.png" alt="Trade Safe With Us">
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center" style="padding-left: 5rem;">
                        <div class="card-body">
                            <h2 class="card-title">Copy <span class="orng-span">Top Trades </span></h2>
                                <?php
                                    $copy_top_trader = get_post(199);
                                    echo apply_filters('the_content', $copy_top_trader->post_content);
                                ?>
                            <a href="<?php echo bloginfo('url')?>/register" class="general-button">Start Trading</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row copy-top-trades-mobile">
            <div class="col-sm-12">
                <div class="col-content">
                    <h2 class="text-center">Copy <span class="orng-span">Top Trades </span></h2>
                        <?php
                            echo apply_filters('the_content', $copy_top_trader->post_content);
                        ?>
                    <div class="col-img">
                        <img src="<?php bloginfo('template_url'); ?>/img/copy-trade-img.png" alt="">
                    </div>
                    <a href="<?php echo bloginfo('url')?>/register" class="general-button-lg">Start Trading</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End copy-top-trades Section -->
