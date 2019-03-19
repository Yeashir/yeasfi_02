<?php
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');
?>
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12  col-lg-8 footer-add-sec footer-seccomon">
                
            </div>
            
            
            <div class="col-md-12  col-lg-4 footer-add-sec footer-seccomon">

                <div id="footer-address" class="col-12 foot-com">                    
                    <div class="col-12 align-self-center insetborder">
                        <h2>Address</h2>
                        <a  href="<?php echo cs_get_option('maplink'); ?>">
                            <?php echo cs_get_option('streetaddress'); ?> 
                            <?php echo cs_get_option('addresslocality'); ?> 
                            <?php echo cs_get_option('addressregion'); ?> 
                            <?php echo cs_get_option('postalcode'); ?> 
                        </a> 
                    </div>
                    <img src="<?php echo $addrsimg[0]; ?>"  alt="<?php echo cs_get_option('keyword'); ?> Phone" class="banerphone" aria-hidden="true"> 
                </div>
            </div>

            <div class="col-md-12  col-lg-3 footer-email-sec footer-seccomon">

                <div id="footer-phone" class="col-12 d-none  d-lg-block foot-com">                    
                    <div class="col-12 align-self-center insetborder">
                        <h2>Phone</h2>
                        <a  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a> 
                    </div>
                    <img src="<?php echo $phoneimg[0]; ?>"                                                     
                         alt="<?php echo cs_get_option('keyword'); ?> Phone" class="banerphone" aria-hidden="true"> 
                </div>
            </div>


            <div class="col-md-12  col-lg-3 footer-email-sec footer-seccomon">

                <div id="footer-email" class="col-12 foot-com">
                    <div class="col-12 align-self-center insetborder ">
                        <h2>Email</h2> 
                        <a  href="mailto:<?php echo cs_get_option('email'); ?>">  <?php echo cs_get_option('email'); ?>  </a> 
                    </div>
                    <img src="<?php echo $emailimg[0]; ?>"                                                     
                         alt="<?php echo cs_get_option('keyword'); ?> email" class="banerphone" aria-hidden="true"> 
                </div>
            </div> 


            <div class="col-md-12  col-lg-3 footeropenhour footer-seccomon">

                <div id="footer-opg" class="col-12 foot-com">                   
                    <div class="col-12 align-self-center insetborder">
                        <h2>Business Hours</h2>
                        <?php echo cs_get_option('openinghour'); ?>
                    </div>
                    <img src="<?php echo $emailimg[0]; ?>"                                                     
                         alt="<?php echo cs_get_option('keyword'); ?> email" class="banerphone" aria-hidden="true">
                </div>

            </div>
        </div>
    </div>
</section>