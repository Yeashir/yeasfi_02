<?php
/**
 * Template Name:FAQ Page Template
 *
 * 

 */
get_header();
$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
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

<section class="innerpage faqtext_sec" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 inner-content-div">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        
                        ?>
                        <div class="post-content-innerpage">                          
                            <?php the_content(); ?>                          
                        </div>

                        <?php
                    endwhile;
                endif;
                ?>
                <?php //edit_post_link('Edit this entry.', '<p>', '</p>');     ?>
            </div>
        </div>
    </div>
</section>

<?php
?>
<section id="faqcontent"  class="innerpage faq-sec" >
    <div class="container">
        <div class="row">
            
            
            <?php
            query_posts(array(
                'post_type' => 'faqs',
                'posts_per_page' => 100,
                'orderby' => 'ID',
                'order' => 'ASC',
                'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
            ));
            $count = 1;
            ?> 

            <div class=" col-lg-7 col-md-12">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        ?>
                        <div class="faq-single">
                            <div class="collapsible faq-title" id="section<?php echo $count; ?> "><span class="faqicon"></span><div class="quize-titl"><?php the_title(); ?></div><span class="faqarrow"></span></div>
                            <div class='answer' id="ans<?php echo $count; ?>"><div class="quize-titl"><?php the_content(); ?></div></div>
                        </div>
                        <?php
                        $count ++;
                    endwhile;
                endif;
                wp_reset_query();
                ?>
            </div>
            <div class=" col-lg-5 col-md-12 faqpageimage">
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail')); ?>
                <img src="<?php echo $url; ?>"                                                     
                     alt="<?php echo cs_get_option('keyword'); ?> FAQ Image" class="banerphone" aria-hidden="true"> 
            </div>

        </div>
    </div>

</section>

<?php
$pagemeta_data = get_post_meta(get_the_ID(), 'page_layout', true);
$sponsors = $pagemeta_data[pagelayout][enabled];
if ($sponsors): foreach ($sponsors as $key => $value) {
        switch ($key) {
            case 'banner': get_template_part('page-templates/home_part/banner', 'page');
                break;
            case 'services': get_template_part('page-templates/home_part/services', 'page');
                break;
            case 'welcome-sec': get_template_part('page-templates/home_part/welcome-sec', 'page');
                break;
            case 'testimonials': get_template_part('page-templates/home_part/testimonials', 'page');
                break;
            case 'gallery': get_template_part('page-templates/home_part/gallery', 'page');
                break;
            case 'form': get_template_part('page-templates/home_part/form', 'page');
                break;
            case 'doublegrid': get_template_part('page-templates/home_part/doublegrid', 'page');
                break;
        }
    }
endif;

get_footer('option');
?>