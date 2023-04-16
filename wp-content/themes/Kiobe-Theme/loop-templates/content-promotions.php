<div class="custom-header-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-container">
                    <div class="header-banner">
                        <h2 class="primary-header">Join <span class="orng-span"> Promotions & Offers </span>now!</h2>
                        <p class="subheading">Exclusive Promotions to give you more opportunities as an Kiobe Partner.</p>
                        <a href="<?php echo bloginfo('url')?>/register" class="general-button">Get Started For Free</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="promotions-container">
<!-- Refer a friend -->
    <section class="refer-friend">
        <div class="container">
            <div class="row promotions-desktop">
                <div class="col-md-6">
                    <div class="card-img">
                        <h2><span class="orng-span">Invite a friend</span>
                            <span class="subtext">And get <span class="orng-span"> 50</span> tokens</h3>
                        </h2>
                        <a href="<?php echo esc_url( get_post_permalink( 86 ) ); ?>"class="general-button-2">Get more info</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <h2><span class="orng-span">Refer</span> a friend</h2>
                    <?php
                        $refer_friend = get_post(86);
                        echo apply_filters('the_content', $refer_friend->post_content);
                    ?>
                </div>
            </div>
            <div class="row promotions-mobile">
                <div class="col-md-6">
                    <div class="card-img">
                        <h2><span class="orng-span">Invite a friend</span>
                        <span class="subtext">And get <span class="orng-span"> 50</span> tokens</h3>
                        </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php
                    echo apply_filters('the_content', $refer_friend->post_content);
                    ?>
                    <a href="<?php echo esc_url( get_post_permalink( 86 ) );?>" class="general-button-2">Get more info</a>
                </div>
            </div>
        </div>
    </section>
<!-- Rebate Bonus -->
    <section class="rebate-bonus">
        <div class="container">
            <div class="row promotions-desktop">
                <div class="col-md-5">
                    <h2>Up to 100% <span class="orng-span">Rebate Bonus</span></h2>
                    <?php
                        $rebate_bonus = get_post(216);
                        echo apply_filters('the_content', $rebate_bonus->post_content);
                    ?>
                </div>
                <div class="col-md-6">
                    <div class="card-img">
                        <h2>Up to 100% <span class="orng-span">Rebate Bonus</span></h2>
                        <a href="<?php echo esc_url( get_post_permalink( 216 ) ); ?>"class="general-button-2">Get more info</a>
                    </div>
                </div>
            </div>
            <div class="row promotions-mobile">
                <div class="col-md-6">
                    <div class="card-img">
                        <h2>Up to 100% <span class="orng-span">Rebate Bonus</span></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php
                        echo apply_filters('the_content', $rebate_bonus->post_content);
                    ?>
                    <a href="<?php echo esc_url( get_post_permalink( 216 ) ); ?>"class="general-button-2">Get more info</a>
                </div>
            </div>
        </div>
    </section>
<!-- Interest Rate -->
    <section class="interest-rate">
        <div class="container">
            <div class="row promotions-desktop">
                <div class="col-md-6">
                    <div class="card-img">
                        <h2>10%  <span class="orng-span">Interest Rate</span></h2>
                        <a href="<?php echo esc_url( get_post_permalink( 218 ) ); ?>"class="general-button-2">Get more info</a>
                    </div>
                </div>
                <div class="col-md-5 d-flex justify-content-center flex-column">
                        <h2>10%  <span class="orng-span">Interest Rate</span></h2>
                        <?php
                            $interest_rate = get_post(218);
                            echo apply_filters('the_content', $interest_rate->post_content);
                        ?>
                </div>
            </div>
            <div class="row promotions-mobile">
                <div class="col-md-6">
                    <div class="card-img">
                        <h2>10%  <span class="orng-span">Interest Rate</span></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>10%  <span class="orng-span">Interest Rate</span></h2>
                        <?php
                            echo apply_filters('the_content', $interest_rate->post_content);
                        ?>
                        <a href="<?php echo esc_url( get_post_permalink( 218 ) ); ?>"class="general-button-2">Get more info</a>
                </div>
            </div>
        </div>
            <div class="interest-rate-line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="horz-line">
                                <div class="diamond"></div>
                            </div>
                            <div class="interest-rate-col">
                                <p>The client should proceed to a deposit into his/her trading account which he/she maintains with the Company within the Promotional period as per Clause 12.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="horz-line">
                                <div class="diamond"></div>
                            </div>
                            <div class="interest-rate-col">
                                <p>After the deposit the client should get his interest rate on a daily basis.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="horz-line">
                                <div class="diamond"></div>
                            </div>
                            <div class="interest-rate-col">
                                <p>Interest is paid only at the first Deposited Amount done by the client within the Promotional Period. Any following deposit(s) will not be calculated for Interest's purposes and not be subject to this Offer.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="horz-line">
                                <div class="diamond"></div>
                            </div>
                            <div class="interest-rate-col">
                                <p>The Company will assess the client's eligibility to the Offer and only then to provide the 10% Interest on the first deposited amount within the Promotional Period. The interest rate is available up to a maximum Deposit amount of USD 50,000 or 50,000 of any other currency amount.</p>
                            </div>
                            <a href="<?php echo bloginfo('url')?>/register" class="general-button register-now">Register Now <span class="material-icons-outlined">chevron_right</span></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<!-- Account types -->
<?php get_template_part( 'loop-sections/section','ThreeAccountTypes' );?>
</div>
