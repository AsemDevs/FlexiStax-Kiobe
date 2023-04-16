<!DOCTYPE html>
<html <?php language_attributes()?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta name="HandheldFriendly" content="true">
        <meta name="description" content="Kiobe One app to trade, invest and grow wealth">
        <title><?php bloginfo('name');?></title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head();?>
    </head>
    <body>

        <!-- Header Section-->
            <?php if ( is_front_page() ): ?>
                <?php 
                    get_template_part( 'loop-templates/header','home' );
                    ?>
                <?php elseif ( is_single() ): ?>
                    <div class="trading-tools custom-header-bg" style="padding: 0rem 1rem 6rem 0;">

                    <?php 
                        get_template_part( 'loop-templates/header','custom' );
                    ?>
                </div>
                <?php 
                elseif ( !is_page(array(
                    'trading', 'education', 'markets', 'partners',
                 'promotions', 'account-types', 'trading-tools', 'login', 'register')
                 )): ?>
                <div class="trading-tools custom-header-bg" style="padding: 0rem 1rem 6rem 0;">

                    <?php 
                        get_template_part( 'loop-templates/header','custom' );
                    ?>
                </div>
                <?php 
                elseif ( is_page(array(
                    'login', 'register', 'forgot-password', 'reset-password', 'password-reset')
                 )): ?>

                    <?php 
                        echo null;
                    ?>
                <?php else: 
                    get_template_part( 'loop-templates/header','custom' );
                ?>
            <?php endif; ?>
        <!-- End Header Section -->