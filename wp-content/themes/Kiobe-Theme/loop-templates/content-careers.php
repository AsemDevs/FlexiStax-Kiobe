<div class="careers-page">
    <section class="kiobe-positions pb-0">
        <div class="container">
            <div class="card bg-transparent shadow-none">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div class="card-body p-0">
                            <h3 class="card-title">Alwayes on your side <span class="primary-point"> .</span></h3>
                            <h1 class="mt-4">Kiobe<br> Open Positions</h1>
                            <p class="card-text"> We'are growing fast. Become a part of the tem and help us on our jorney to change the trading landscape forever.</p>
                            <a href="<?php bloginfo('url')?>/register/" class="general-button-lg">Contact Us</a>
                            <a href="<?php bloginfo('url')?>/register/" class="general-button">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-right pt-4 pb-0 pr-0">
                        <img class="w-25 h-25 position-relative mr-4 my-3 invisible" src="<?php bloginfo('template_url'); ?>/img/position1@2x.png" alt="">
                        <img class="w-25 h-25 position-relative mr-4 my-3" src="<?php bloginfo('template_url'); ?>/img/position1@2x.png" alt="">
                        <img class="w-25 h-25 position-relative mr-4 my-3" src="<?php bloginfo('template_url'); ?>/img/position3.png" alt="" style="bottom: 3rem;">
                        <img class="w-25 h-25 position-relative mr-4 my-3" src="<?php bloginfo('template_url'); ?>/img/position4.png" alt="" style="bottom: 6rem;">
                        <img class="w-25 h-25 position-relative mr-4 my-3" src="<?php bloginfo('template_url'); ?>/img/position5.png" alt="" style="bottom: ;">
                        <img class="w-25 h-25 position-relative mr-4 my-3" src="<?php bloginfo('template_url'); ?>/img/position6.png" alt="" style="bottom: 3rem;">
                        <img class="w-25 h-25 position-relative mr-4 my-3" src="<?php bloginfo('template_url'); ?>/img/position7.png" alt="" style="bottom: 6rem;">
                        <img class="w-25 h-25 position-relative mr-4 my-3" src="<?php bloginfo('template_url'); ?>/img/position8.png" alt="" style="bottom: ;">
                        <img class="w-25 h-25 position-relative mr-4 my-3" src="<?php bloginfo('template_url'); ?>/img/position9.png" alt="" style="bottom: 3rem;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="jobs-tabs pt-3 bg-transparent">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-allJobs-tab" data-toggle="pill" href="#pills-allJobs" role="tab" aria-controls="pills-allJobs" aria-selected="true">All Jobs</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-Sales" role="tab" aria-controls="pills-Sales" aria-selected="false">Sales</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-Marketing" role="tab" aria-controls="pills-Marketing" aria-selected="false">Marketing</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-Operations" role="tab" aria-controls="pills-Operations" aria-selected="false">Operations</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-Engineering" role="tab" aria-controls="pills-Engineering" aria-selected="false">Engineering</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-Product" role="tab" aria-controls="pills-Product" aria-selected="false">Product</a>
                        </li>
                    </ul>
                    <?php 
                        function get_tags_with_icons() {
                            $post_tags = get_the_tags();
                            if($post_tags) {
                                echo '
                                <span class="tag">
                                    <span class="material-icons-outlined">place</span>
                                    '. $post_tags[0]->name .'
                                </span>
                                ';
                                echo '
                                <span class="tag">
                                    <span class="material-icons-outlined">work_outline</span>
                                    '. $post_tags[1]->name .'
                                </span>
                                ';
                                echo '
                                <span class="tag">
                                    <span class="material-icons-outlined">folder_shared</span>
                                    '. $post_tags[2]->name .'
                                </span>
                                ';
                            }
                        }
                    ?>

                    
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-allJobs" role="tabpanel" aria-labelledby="pills-allJobs-tab">
                            <?php get_template_part('loop-sections/section', 'JobInformation') ?>
                        </div>
                        <div class="tab-pane fade" id="pills-Sales" role="tabpanel" aria-labelledby="pills-Sales-tab">
                            <?php get_template_part('loop-sections/section', 'JobInformation') ?>
                        </div>
                        <div class="tab-pane fade" id="pills-Marketing" role="tabpanel" aria-labelledby="pills-Marketing-tab">
                            <?php get_template_part('loop-sections/section', 'JobInformation') ?>
                        </div>
                        <div class="tab-pane fade" id="pills-Operations" role="tabpanel" aria-labelledby="pills-Operations-tab">
                            <?php get_template_part('loop-sections/section', 'JobInformation') ?>
                        </div>
                        <div class="tab-pane fade" id="pills-Engineering" role="tabpanel" aria-labelledby="pills-Engineering-tab">
                            <?php get_template_part('loop-sections/section', 'JobInformation') ?>
                        </div>
                        <div class="tab-pane fade" id="pills-Product" role="tabpanel" aria-labelledby="pills-Product-tab">
                            <?php get_template_part('loop-sections/section', 'JobInformation') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="call-to-action-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 card-img">
                    <h3 class="card-title">Alwayes on your side <span class="primary-point"> .</span></h3>
                    <h2>Join Promotions & Offers now!</h2>
                    <h5>Exclusive Promotions to give you more opportunities as an Kiobe Partner.</h5>
                    <a href="<?php bloginfo('url')?>/register/" class="general-button">Join Now</a>
                    <a href="<?php echo bloginfo('url')?>/register" class="general-button-lg">Join Now</a>
                </div>
            </div>
        </div>
    </section>
</div>
