<!-- Navbar -->
    <div class="container navbar-primary">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark" id="b4-nav">
                    <!-- Your site title as branding in the menu -->
                        <div class="brand-container d-lg-block">
                            <a class="navbar-brand mb-0" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
                                <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" width="30" height="30" alt="">
                            </a>
                        </div>
                    <!-- end custom logo -->
                    <button class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="brand-container d-md-none">
                            <a class="navbar-brand mb-0" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
                                <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" width="30" height="30" alt="">
                            </a>
                        </div>
                        <a href="javascript:void(0)" class="closebtn" onclick="closePrimary_Nav()">&times;</a>
                        <?php kiobe_navbar_primary()?>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?php bloginfo('url')?>/login/" class="btn btn-secondary"><i class="fas fa-user-check d-md-none d-lg-block"></i>Login</a>
                            <a href="<?php bloginfo('url')?>/register/" class="btn btn-secondary">Register</a>
                        </div>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
    </div>
<!-- End Navbar -->