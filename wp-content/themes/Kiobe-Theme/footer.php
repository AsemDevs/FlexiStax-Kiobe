                <!-- Header Section-->
                <?php if ( !is_page(array(
                    'login', 'register', 'forgot-password', 'reset-password', 'password-reset'
                )) ): ?>
                <?php 
                    get_template_part( 'loop-templates/footer','primary' );
                    ?>
                <?php endif; ?>
        <?php wp_footer(); ?>
    </body>
</html>