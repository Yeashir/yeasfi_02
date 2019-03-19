<?php
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('openinghour_image');
$opnhour = wp_get_attachment_image_src($image_id, 'full');
?>
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-12 titlefooter">
                <h2><?php echo cs_get_option('maintitle'); ?></h2>
            </div> 
            <div class="col-md-12  col-lg-8 footer-form footer-seccomon">
<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 7, 'title' => false, 'description' => false ) ); ?>
            </div>            

            <div class="col-md-12  col-lg-4 footer-add-sec footer-seccomon">
                <div class="row">
                    <div id="footer-address" class="col-12 foot-com">  
                        <div class="row">
                            <div class="col-md-12 col-lg-2 align-self-center">
                                <img src="<?php echo $addrsimg[0]; ?>"                                                     
                                     alt="<?php echo cs_get_option('keyword'); ?> Address" class="banerphone" aria-hidden="true"> 
                            </div>
                            <div class="col-md-12 col-lg-10 align-self-center pl-lg-0">
                                <a target="_blank" href="<?php echo cs_get_option('maplink'); ?>">
                                    <?php echo cs_get_option('streetaddress'); ?> 
                                    <?php echo cs_get_option('addresslocality'); ?> 
                                    <?php echo cs_get_option('addressregion'); ?> 
                                    <?php echo cs_get_option('postalcode'); ?> 
                                </a> 
                            </div>
                        </div>
                    </div>
                    <div id="footer-phone" class="col-12 d-none  d-lg-block foot-com">  
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <img src="<?php echo $phoneimg[0]; ?>" alt="<?php echo cs_get_option('keyword'); ?> Phone" class="banerphone" aria-hidden="true"> 
                            </div>
                            <div class="col-md-12 col-lg-10 align-self-center pl-lg-0">
                                <a class="footerphone"  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a>
                            </div>
                        </div>
                    </div>
                    <div id="footer-email" class="col-12 foot-com">
                        <div class="row">
                            <div class="col-md-12 col-lg-2 align-self-center">
                                <img src="<?php echo $emailimg[0]; ?>" alt="<?php echo cs_get_option('keyword'); ?> Phone & email" class="banerphone" aria-hidden="true"> 
                            </div>
                            <div class="col-md-12 col-lg-10 align-self-center pl-lg-0">                               
                                <a  class="footeremeil" href="mailto:<?php echo cs_get_option('email'); ?>">  <?php echo cs_get_option('email'); ?>  </a> 

                            </div>
                        </div>
                    </div> 

                    <div id="footer-openhour" class="col-12 foot-com">
                        <div class="row">
                            <div class="col-md-12 col-lg-2 align-self-center">
                                <img src="<?php echo $opnhour[0]; ?>" alt="<?php echo cs_get_option('keyword'); ?> Phone & email" class="banerphone" aria-hidden="true"> 
                            </div>
                            <div class="col-md-12 col-lg-10 align-self-center pl-lg-0">                               
                                <p class="opnhour">  <?php echo cs_get_option('openinghour'); ?>  </p> 
                            </div>
                        </div>
                    </div> 


                    <div id="footer-social" class="col-12 foot-com">
                        <div class="row">
                            <?php get_template_part('social-media'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 footermenu">
                <?php
                wp_nav_menu(array(
                    'menu' => 'footer',
                    'theme_location' => 'footer',
                    'container_id' => 'footermenu',
                    
                ));
                ?>
            </div>
        </div>
    </div>
</section>
<section class="copywright">
     <div class="container">
         <div class="row"> 
              <div class="text-copy col-12">&copy; <?php echo the_date('Y'); ?> <?php echo cs_get_option('copytext'); ?>.
                    All Rights Reserved.<span class="dtb"> <img src="<?php echo get_template_directory_uri(); ?>/img/BeLocal.png" alt="<?php echo cs_get_option('keyword'); ?> belocal icon"> Digital Transformation by 
                        <a target="_blank" href="http://belocal.today">BeLocal Today</a></span>
                </div>
         </div>
     </div>
</section>