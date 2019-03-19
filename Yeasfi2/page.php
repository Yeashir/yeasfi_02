<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header();
?> 

<div class="tetel-inner-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 id="page-<?php the_ID(); ?>" class="innerpage-titel"> <?php echo the_title(); ?></h2>
            </div>
        </div>
    </div>
</div>


<section class="innerpage" >
    <div class="container-fluid">
        <div class="row">
            <div class="col"></div>
            <div class="col-lg-3 col-md-12 sideber post-content-innerpage">
                <?php get_sidebar(); ?>             
            </div>
            <div class="col-lg-7 col-md-12 inner-content-div post-content-innerpage">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                        ?>

                        <?php the_content(); ?>                          


                        <?php
                    endwhile;
                endif;
                ?>

            </div>
            <div class="col"></div>

        </div>
    </div>
</section>
<?php
//$pagemeta_data = get_post_meta(get_the_ID(), 'page_layout', true);
//$sponsors =$pagemeta_data[pagelayout][enabled];
//if ($sponsors): foreach ($sponsors as $key => $value) {
//        switch ($key) {
//            case 'banner': get_template_part('page-templates/home_part/banner', 'page');
//                break;
//            case 'services': get_template_part('page-templates/home_part/services', 'page');
//                break;
//            case 'welcome-sec': get_template_part('page-templates/home_part/welcome-sec', 'page');
//                break;
//            case 'testimonials': get_template_part('page-templates/home_part/testimonials', 'page');
//                break;
//            case 'gallery': get_template_part('page-templates/home_part/gallery', 'page');
//                break;
//            case 'form': get_template_part('page-templates/home_part/form', 'page');
//                break;
//             case 'doublegrid': get_template_part('page-templates/home_part/doublegrid', 'page');
//                break;
//        }
//    }
//endif;
get_footer('option');
?>
