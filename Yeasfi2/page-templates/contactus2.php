<?php
/**
 * Template Name:Contact us Page  Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.

 */
get_header();
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('map_image');
$mapimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');
$mwta = cs_get_option('keyword');
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

<section class="conutctpage-text">
    <div class="container">
        <div class="row">                      
            <div id="content" class="contactpage  post-content-innerpage entrytext contuctapage col-12">
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
        </div>
    </div>
</section>
<section class="conutctpage-bg">
    <div class="container">
        <div class="row">  
            <div class="col-12 ">
                <div class="row ">                       
                    <div class="col-md-12  col-lg-4 ctp-add-sec ">                        
                        <div class="address-ctp col-12"> 
                            <i class="<?php echo cs_get_option('address_icon'); ?> ctpaddressicon"></i>
<!--                                        <img src="<?php echo $addrsimg[0]; ?>"                                                     
                                 alt="<?php echo cs_get_option('keyword'); ?> Address" class="banerphone" aria-hidden="true"> -->
                            <a target="_blank" href="<?php echo cs_get_option('maplink'); ?>">
                                <?php echo cs_get_option('streetaddress'); ?> 
                                <?php echo cs_get_option('addresslocality'); ?> 
                                <?php echo cs_get_option('addressregion'); ?> 
                                <?php echo cs_get_option('postalcode'); ?> 
                            </a> 
                        </div>


                        <div id="ctp-email" class="col-12 ctp-com">  
                            <i class="<?php echo cs_get_option('email-icon'); ?> ctpaddressicon"></i>
    <!--                                        <img src="<?php echo $emailimg[0]; ?>"                                                     
                                alt="<?php echo cs_get_option('keyword'); ?> Phone & email" class="banerphone" aria-hidden="true"> -->
                            <a  class="ctpemeil" href="mailto:<?php echo cs_get_option('email'); ?>">  <?php echo cs_get_option('email'); ?>  </a> 
                        </div>

                        <div id="ctp-phone" class="col-12 d-none  d-lg-block ctp-com"> 
                            <i class="<?php echo cs_get_option('phone-icon'); ?> ctpaddressicon"></i>
    <!--                                        <img src="<?php echo $phoneimg[0]; ?>"                                                     
                                 alt="<?php echo cs_get_option('keyword'); ?> Phone" class="banerphone" aria-hidden="true"> -->
                            <a class="ctprphone"  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a>

                        </div>
                    </div> 

                    <div class="col"></div>
                    <div class="ctpformsec  col-md-12 col-lg-7">  
                        <div class="col-12 innerform">                        
                        <h2 class="hjaddr">Send Us a Message</h2> 
                        <?php echo FrmFormsController::get_form_shortcode(array('id' => 2, 'title' => false, 'description' => false)); ?>
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>

<?php get_footer(); ?>