<?php
/**
 * Template Name: Testmonial Page Template
 *
 * 
 */
get_header();
global $yeasfe;
?> 
<div class="tetel-inner-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 id="page-<?php the_ID(); ?>" class="innerpage-titel"> <?php echo the_title(); ?></h2>
            </div>
        </div>
    </div>
</div>

<section class="innerpage" >
    <div class="container">
        <div class="row">
            <div class="col-12 inner-content-div">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                        ?>
                        <div class="row">                            
                            <div class="post-content-innerpage  col-md-12 col-lg-12">                          
                                <?php the_content(); ?>                          
                            </div>
                           
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
                <?php //edit_post_link('Edit this entry.', '<p>', '</p>');     ?>
            </div>


            <div id="tm-content-page" class="col-12  testmonial-part"> 
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'Testimonial',
                        'posts_per_page' => 100,
                        'paged' => $paged,
                    );
                    $count2 = 0;
                    $wp_query = new WP_Query($args);
                    $description = get_post_meta(get_the_ID(), 'designation', true);
                    if (have_posts()) : while (have_posts()) : the_post();
                            $thamb = wp_get_attachment_url(get_post_thumbnail_id($post->ID), '');
                            $description = get_post_meta(get_the_ID(), 'tmsdesignation', true);
                            $post_slug = $post->post_name;
                            ?>

                            <div id="tm<?php echo $count2; ?>" class="col-sm-12 col-lg-12 single-tit"> 
                                <div class="tmcont-botom">
        <!--                                              <img alt="<?php echo cs_get_option('keyword'); ?> Testmonial Image" src="<?php echo get_template_directory_uri(); ?>/img/TESTIMONIALS-quote.png"  >-->
                                    <h2 class="tm-itm-titel"><?php the_title(); ?></h2> 
                                </div>
                                <div class="tm-pgcont"><?php echo the_content(); ?></div> 
                            </div>


                            <?php
                            $count2++;
                        endwhile;
                    endif;
                    ?>   
                </div>

            </div>  


        </div>
    </div>
</section>



<?php get_footer(); ?> 