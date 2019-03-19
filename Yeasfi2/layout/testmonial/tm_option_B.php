<div class="row">
    <div id="testimonial" class="owl-carousel col-md-12 col-lg-6" > 
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
                $description = get_post_meta(get_the_ID(), 'custom_post_options', true);
                $thamb = wp_get_attachment_url(get_post_thumbnail_id($post->ID), '');
                ?>
                <div class="item<?php echo $tag; ?> col-lg-12 col-md-12 align-self-center" >
                    <div class="tmfull col-12">
                        <div class="tmadminimg">
                            <img class="tmimage" alt="<?php echo cs_get_option('keyword'); ?> Testmonial Image" src="<?php echo get_template_directory_uri(); ?>/img/tesimonials-man.png"  >
                        </div>
                       
                        <div class="tmcont"><?php echo wp_trim_words(get_the_content(), 35, '<a class="tmcont-d-hole " href="/testimonials?#tm<?php echo $count2; ?>"> Read More ... </a>'); ?></div>  
                        <div class="tmtitle"><?php the_title(); ?> <?php if (!empty($description['tmdesig'])) { ?><span class="tmdeg"> <?php echo $description['tmdesig']; ?> </span><?php }; ?></div>
                    </div>
                </div>

                <?php
                $count2 ++;
                $counter++;
            endwhile;
        endif;
        wp_reset_query();
        ?>
    </div>

    <div class="col-md-12 col-lg-6  formsec frm-home">
        <?php echo FrmFormsController::get_form_shortcode(array('id' => 6, 'title' => false, 'description' => false)); ?>
    </div>
</div>



