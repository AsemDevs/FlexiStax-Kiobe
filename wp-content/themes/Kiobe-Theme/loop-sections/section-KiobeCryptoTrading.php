<section class="kiobe-crypto-trading py-0 my-0">
    <div class="kiobe-crypto-trading-desktop container">
        <div class="card bg-transparent">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <div class="card-body">
                        <h2 class="card-title">Kiobe <span class="orng-span">crypto trading</span></h2>
                            <?php
                                $kiobe_crypto_trading = get_post( 209 );
                                echo apply_filters( 'the_content', $kiobe_crypto_trading->post_content );
                            ?>
                        <a href="<?php bloginfo('url')?>/register/" class="general-button">Trade Now</a>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img class="w-75 h-100" src="<?php bloginfo('template_url'); ?>/img/crypto-trading2.png" alt="Kiobe Web Platform">
                </div>
            </div>
        </div>
    </div>
    <div class="kiobe-crypto-trading-mobile mb-3">
        <div class="col-md-12">
            <div class="col-content">
                <h2>Kiobe <span class="orng-span">crypto trading</span></h2>
                <?php
                    echo apply_filters( 'the_content', $kiobe_crypto_trading->post_content );
                ?>
                <div class="col-img">
                    <img src="<?php bloginfo('template_url'); ?>/img/crypto-trading.png" alt="">
                </div>
                <a href="<?php bloginfo('url')?>/register/" class="general-button">Trade Now</a>
            </div>
        </div>
    </div>
</section>