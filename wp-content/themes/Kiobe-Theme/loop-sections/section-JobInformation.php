<div class="accordion" id="accordionExample">
    <?php
        $args = array(
            'post_type'         => 'post',
            'post_status'       => 'publish',
            'order'             => 'ASC' ,
            'cat'               => '28',
            );
        $posts = new WP_Query($args);
        if ( $posts->have_posts() ) :
            $i = 1;
            while ($posts->have_posts()) : $posts->the_post();
                ?>
                <div class="card">
                    <div class="card-header" id="heading<?php echo $i?>">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i?>" aria-expanded="true" aria-controls="collapse<?php echo $i?>">
                                <?php the_title(); ?>
                            </button>
                        </h2>
                        <h6>
                            <?php
                                get_tags_with_icons();
                            ?>
                        </h6>
                    </div>
                    <div id="collapse<?php echo $i?>" class="collapse <?php echo ($i == 1) ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $i?>" data-parent="#accordionExample">
                        <div class="card-body">
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            <?php
            $i++;
            endwhile;
        endif;
    ?>
</div>