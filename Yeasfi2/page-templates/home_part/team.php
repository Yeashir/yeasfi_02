<section class="teamsec">
    <div class="container">
        <div class="row">
            <div class="col-12"> <h2 class="tem-titelaa"><?php
                    $words = explode(' ', cs_get_option('teamtitle', '', false));
                    $words[0] = $words[0];
                    $words[2] = '<span>' . $words[2] . '</span>';
                    $title = implode(' ', $words);
                    echo $title;
                    ?> </h2>
            </div>
            <?php
            $args = array(
                'post_type' => 'ourteam',
                'posts_per_page' => 100,
                'orderby' => 'ID',
                'order' => 'ASC',
            );
            $wp_query = new WP_Query($args);
            $count = 0;
            $count2 = 0;
            if (have_posts()) : while (have_posts()) : the_post();
                    $teammeta = get_post_meta(get_the_ID(), 'custom_options_team', true);
                    // var_dump ($teammeta);
                    $subtitle = $teammeta ["subtitle"];
                    $deg = $teammeta ["deg"];
                    $socialmeta = $teammeta ["membermeta_groups"];
                    $memberproicon = $teammeta ["membermeta_groups"];
                    $thamb = wp_get_attachment_url(get_post_thumbnail_id($post->ID), '');
                    ?>

                    <div class="col-lg-3 col-md-3 col-sm-12 teammember">
                        
                        <img src="<?php echo $thamb; ?>" alt="<?php echo cs_get_option('keyword'); ?> Team Member"/> 
                        <div class="name"><h1><?php the_title(); ?></h1>
                            <h2><?php echo $deg; ?></h2></div>
                        <a class="single-post" href="<?php echo get_permalink( $post->ID ); ?>"> </a>
                    </div>

                    <?php
                    $counter++;
                endwhile;
            endif;
            wp_reset_query();
            ?>

        </div>
    </div>
</section>