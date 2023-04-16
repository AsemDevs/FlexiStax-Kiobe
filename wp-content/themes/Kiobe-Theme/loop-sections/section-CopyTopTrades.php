<section class="copy-top-trades py-0 bg-transparent">
    <div class="container">
        <div class="copy-top-trades-desktop">
            <div class="card shadow-none bg-transparent">
                <div class="row">
                    <div class="col-6 d-flex justify-content-center align-items-center card-horozintal">
                        <img class="w-100" src="<?php bloginfo('template_url'); ?>/img/copy-trade.png" alt="Trade Safe With Us">
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center" style="padding-left: 5rem;">
                        <div class="card-body">
                            <h2 class="card-title">Copy <span class="orng-span">Top Trades </span></h2>
                                <?php
                                    $copy_top_trader = get_post(199);
                                    echo apply_filters('the_content', $copy_top_trader->post_content);
                                ?>
                            <a href="<?php echo bloginfo('url')?>/register/" class="general-button">Start Trading</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-top-trades-mobile">
        <div class="col-sm-12">
            <div class="col-content">
                <h2>Copy <span class="orng-span">Top Trades </span></h2>
                    <?php
                        echo apply_filters('the_content', $copy_top_trader->post_content);
                    ?>
                <div class="col-img">
                    <img src="<?php bloginfo('template_url'); ?>/img/copy-trade.png" alt="">
                </div>
                <a href="<?php echo bloginfo('url')?>/register" class="general-button-lg">Start Trading</a>
            </div>
        </div>
    </div>
</section>
