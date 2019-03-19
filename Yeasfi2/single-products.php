<?php
/**
 * The Template for displaying all member posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header();
?>

<!--
<div class="tetel-inner-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 id="page-<?php the_ID(); ?>" class="innerpage-titel"> <?php echo the_title(); ?></h2>
            </div>
        </div>
    </div>
</div>-->


<section class="innerpage" >


    <div class="container">
        <div class="row">
            <div id="content" class="widecolumn col-12">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                        $prodictspice = get_post_meta(get_the_ID(), 'product_options', true);
                        ?>
                        <div class="row">  
                           
                            <div class="productitem col-lg-7 col-md-12" id="">
                                <div class="row justify-content-end">
                                    <div class="col-6 product-title align-self-center">
                                        <?php the_title(); ?>
                                    </div>
                                    <div class="col-6"> 
                                        <div class="row">
                                            <div class="col-6 ttlleft"> Lot No.</div>
                                            <div class="col-6 ttlleft"><?php echo $prodictspice['lotno']; ?></div>
                                            <div class="col-6 titleright"> Make</div>
                                            <div class="col-6 titleright"><?php echo $prodictspice['make']; ?></div>
                                            <div class="col-6 ttlleft">Model</div>
                                            <div class="col-6 ttlleft"><?php echo $prodictspice['model']; ?></div>
                                        </div>
                                    </div>
                                     
                                </div>                                
                                <div class="row">
                                    <div class="col-12 desc"><?php the_content(); ?></div>
                                </div>
                                <?php
                            endwhile;
                        endif;
                        ?>


                    </div>
                    </section>
                    <?php get_footer(); ?>
