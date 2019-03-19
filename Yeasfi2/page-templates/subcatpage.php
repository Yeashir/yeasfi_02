<?php
/**
 * Template Name: Sub Category Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.

 */
get_header();
global $post;
$post_slug = $post->post_name;
$wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'orderby' => 'ASC',));
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
<section class="innerpage subcat_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col"></div>
            <div class="col-lg-3 col-md-12 sideber post-content-innerpage">
                <?php get_sidebar(); ?>             
            </div>
            <div class="col-lg-7 col-md-12 inner-content-div post-content-innerpage">
                 <?php
                foreach ($wcatTerms as $wcatTerm) {
                    $catslug = $wcatTerm->slug;
                    if ($post_slug == $catslug):
                        $wcatsubTerms = get_terms('product_cat', array('hide_empty' => 0, 'orderby' => 'ASC', 'parent' => $wcatTerm->term_taxonomy_id,));
                        ?>
                        <div class="row">
                            <?php
                            foreach ($wcatsubTerms as $wsubcatTerm) {
                                $thumbnail_id = get_woocommerce_term_meta($wsubcatTerm->term_id, 'thumbnail_id', true);
                                $image = wp_get_attachment_url($thumbnail_id);
                                $term_link = get_term_link( $wsubcatTerm, 'product_cat' );
                                ?>                              
                                <div class="col-lg-4 col-md-6 subct"> 
                                    
                                        <?php if (!empty($thumbnail_id)) { ?>
                                            <img src='<?php echo $image; ?>' alt='' />

                                        <?php } else { ?>
                                            <img src="/wp-content/plugins/woocommerce/assets/images/placeholder.png"/>
                                        <?php } ?>
                                        <h2 class="cat-title">  <?php echo $wsubcatTerm->name; ?></h2>
                                        <a  class="subcat-nav-link" href="<?php echo $term_link;?>">  </a>   
                                </div>    

                            <?php }
                            ?>
                        </div>
                        <?php
                    endif;
                }
                ?>

            </div>
            <div class="col"></div>

        </div>
    </div>
</section>

<?php get_footer('option'); ?>
