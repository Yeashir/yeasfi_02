<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header();
?>



<section class="innerpage" >


    <div class="container">
        <div class="row">
            <div id="content" class="widecolumn col-12">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                        ?>
                        <div class="post single-blog col-12 px-0">
                           
                            <div class="singlepage-cont">
                                <h2 id="page-<?php the_ID(); ?>" class="single-titel"> <?php //echo the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>

            </div>




        </div>
    </div>
</section>
<?php get_footer(); ?>
