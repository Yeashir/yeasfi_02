<section class="dvsectwo">
    <div class="container">
        <div class="row justify-content-center"> 
            <div class="col-12 text-center">
                <?php
                $page_items = cs_get_option('devidertwopage');
                if (!empty($page_items)) {
                    $args = array('page_id' => $page_items);
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        ?>
                        <h2 class="title-div col-12"><?php the_title(); ?></h2> 
                        <div class="devidcont col-12"> 
                            <?php echo wp_trim_words(get_the_content(), 40, "..."); ?>

                        </div>
                        <a class="ancoredev" href="<?php echo get_permalink(); ?>">Read More</a>
                        <?php
                    endwhile;
                }
                ?>
            </div>
        </div>
    </div>
</section>
