<?php if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! is_user_logged_in() ) {
	um_reset_user();
} ?>

<section class="register-container login-container h-100 gradient-form" style="background-color: #eee;">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="card-body p-md-5 mx-md-4">
								<div class="brand-container">
									<a class="navbar-brand mb-0" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url">
										<img src="<?php bloginfo('template_url'); ?>/img/logo.svg" width="30" height="30" alt="">
									</a>
								</div>
								<h1 class="font-weight-bold">Sign Up</h1>
								<div class="um <?php echo esc_attr( $this->get_class( $mode ) ); ?> um-<?php echo esc_attr( $form_id ); ?>" style="max-width: 100%; !important">
									<div class="um-form" data-mode="<?php echo esc_attr( $mode ) ?>">

										<form method="post" action="">

											<?php
											/**
											 * UM hook
											 *
											 * @type action
											 * @title um_before_form
											 * @description Some actions before register form
											 * @input_vars
											 * [{"var":"$args","type":"array","desc":"Register form shortcode arguments"}]
											 * @change_log
											 * ["Since: 2.0"]
											 * @usage add_action( 'um_before_form', 'function_name', 10, 1 );
											 * @example
											 * <?php
											 * add_action( 'um_before_form', 'my_before_form', 10, 1 );
											 * function my_before_form( $args ) {
											 *     // your code here
											 * }
											 * ?>
											 */
											do_action( "um_before_form", $args );

											/**
											 * UM hook
											 *
											 * @type action
											 * @title um_before_{$mode}_fields
											 * @description Some actions before register form fields
											 * @input_vars
											 * [{"var":"$args","type":"array","desc":"Register form shortcode arguments"}]
											 * @change_log
											 * ["Since: 2.0"]
											 * @usage add_action( 'um_before_{$mode}_fields', 'function_name', 10, 1 );
											 * @example
											 * <?php
											 * add_action( 'um_before_{$mode}_fields', 'my_before_fields', 10, 1 );
											 * function my_before_form( $args ) {
											 *     // your code here
											 * }
											 * ?>
											 */
											do_action( "um_before_{$mode}_fields", $args );

											/**
											 * UM hook
											 *
											 * @type action
											 * @title um_before_{$mode}_fields
											 * @description Some actions before register form fields
											 * @input_vars
											 * [{"var":"$args","type":"array","desc":"Register form shortcode arguments"}]
											 * @change_log
											 * ["Since: 2.0"]
											 * @usage add_action( 'um_before_{$mode}_fields', 'function_name', 10, 1 );
											 * @example
											 * <?php
											 * add_action( 'um_before_{$mode}_fields', 'my_before_fields', 10, 1 );
											 * function my_before_form( $args ) {
											 *     // your code here
											 * }
											 * ?>
											 */
											do_action( "um_main_{$mode}_fields", $args );

											/**
											 * UM hook
											 *
											 * @type action
											 * @title um_after_form_fields
											 * @description Some actions after register form fields
											 * @input_vars
											 * [{"var":"$args","type":"array","desc":"Register form shortcode arguments"}]
											 * @change_log
											 * ["Since: 2.0"]
											 * @usage add_action( 'um_after_form_fields', 'function_name', 10, 1 );
											 * @example
											 * <?php
											 * add_action( 'um_after_form_fields', 'my_after_form_fields', 10, 1 );
											 * function my_after_form_fields( $args ) {
											 *     // your code here
											 * }
											 * ?>
											 */
											do_action( 'um_after_form_fields', $args );

											/**
											 * UM hook
											 *
											 * @type action
											 * @title um_after_{$mode}_fields
											 * @description Some actions after register form fields
											 * @input_vars
											 * [{"var":"$args","type":"array","desc":"Register form shortcode arguments"}]
											 * @change_log
											 * ["Since: 2.0"]
											 * @usage add_action( 'um_after_{$mode}_fields', 'function_name', 10, 1 );
											 * @example
											 * <?php
											 * add_action( 'um_after_{$mode}_fields', 'my_after_form_fields', 10, 1 );
											 * function my_after_form_fields( $args ) {
											 *     // your code here
											 * }
											 * ?>
											 */
											do_action( "um_after_{$mode}_fields", $args );

											/**
											 * UM hook
											 *
											 * @type action
											 * @title um_after_form
											 * @description Some actions after register form fields
											 * @input_vars
											 * [{"var":"$args","type":"array","desc":"Register form shortcode arguments"}]
											 * @change_log
											 * ["Since: 2.0"]
											 * @usage add_action( 'um_after_form', 'function_name', 10, 1 );
											 * @example
											 * <?php
											 * add_action( 'um_after_form', 'my_after_form', 10, 1 );
											 * function my_after_form( $args ) {
											 *     // your code here
											 * }
											 * ?>
											 */
											do_action( 'um_after_form', $args ); ?>
										
										</form>

									</div>
								</div>
							</div>
							<h3 class="text-center font-weight-bold">Alwayes on your side <span class="primary-point"> .</span></h3>
						</div>
						<div class="col-md-6 d-none d-md-block">
                            <div id="login-carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#login-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#login-carousel" data-slide-to="1"></li>
                                    <li data-target="#login-carousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="login-carousel-bg1 carousel-item active">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Copy Trading: Trade like EverFx top traders</h3>
                                            <p>CopyTrader, EverFx most popular feature, allows you to view what <br>real traders are doing in real time and copy their trading automatically</p>
                                            <h5>Trading involves risk. Invest only capital that you are willing to lose.</h5>
                                        </div>
                                    </div>
                                    <div class="login-carousel-bg1 carousel-item">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Copy Trading: Trade like EverFx top traders</h3>
                                            <p>CopyTrader, EverFx most popular feature, allows you to view what <br>real traders are doing in real time and copy their trading automatically</p>
											<h5>Trading involves risk. Invest only capital that you are willing to lose.</h5>
										</div>
                                    </div>
                                    <div class="login-carousel-bg1 carousel-item">
                                        <div class="carousel-caption">
                                            <h3>Copy Trading: Trade like EverFx top traders</h3>
                                            <p>CopyTrader, EverFx most popular feature, allows you to view what <br>real traders are doing in real time and copy their trading automatically</p>
											<h5>Trading involves risk. Invest only capital that you are willing to lose.</h5>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>