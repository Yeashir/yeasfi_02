<?php
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');
$mwta = cs_get_option('keyword');

?>

<section class="footer-section footer-widget-area">
    <div class="container">        
        <div class="row">
            <div class="col-12">
                <h2 class="footermaintaitle"><?php echo cs_get_option('maintitle') ?></h2>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-8">    <?php echo FrmFormsController::get_form_shortcode(array('id' => 3, 'title' => false, 'description' => false)); ?></div>
                    <div class="col"></div>
                </div>   
            </div>
            <div class="col-md-12  col-lg-4 footer-add-sec"> 
                <h2>Contact Us</h2> 
                <div class="row footer-add-sec-com">
                    <div class="img-sec col-lg-2 col-md-2">
                        <img src="<?php echo $addrsimg[0]; ?>"  alt="<?php echo cs_get_option('keyword'); ?> Address icon" class="banerphone" aria-hidden="true"> 
                    </div>
                    <div class="col-lg-10 col-md-12 pl-lg-0">  
                        <a target="_blank" href="<?php echo cs_get_option('maplink'); ?>">
                            <?php echo cs_get_option('streetaddress'); ?> 
                            <?php echo cs_get_option('addresslocality'); ?> 
                            <?php echo cs_get_option('addressregion'); ?> 
                            <?php echo cs_get_option('postalcode'); ?> 
                        </a> 
                    </div>
                </div>
                <div class="row footer-add-sec-com">
                    <div class="img-sec col-lg-2 col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/footer-call.png"                                                     
                             alt="<?php echo cs_get_option('keyword'); ?> Phone icon" class="banerphone" aria-hidden="true"> 
                    </div>
                    <div class="col-lg-10 col-md-12 pl-lg-0">
                        <a class="footerphone"  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a>
                    </div>
                </div>
                <div class="row footer-add-sec-com">
                    <div class="img-sec col-lg-2 col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/email-footer.png"                                                     
                             alt="<?php echo cs_get_option('keyword'); ?> Email icon" class="banerphone" aria-hidden="true"> 
                    </div>   
                    <div class="col-lg-10 col-md-12 pl-lg-0"><a  class="footeremeil" href="mailto:<?php echo cs_get_option('email'); ?>">  <?php echo cs_get_option('email'); ?>  </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12  col-lg-4 bis-hour footer-add-sec">
                <h2>Opening Hours</h2>

                <?php echo cs_get_option('openinghour'); ?>
                <img class="cardimg"  src="<?php echo cs_get_option('footer_logo');?> "                                                     
                             alt="<?php echo cs_get_option('keyword'); ?> card icon" class="banerphone" aria-hidden="true"> 

            </div>
            <div class="col-md-12  col-lg-4 Socialmediafooter footer-add-sec">
                <h2>Social Media</h2>
                <ul class="social-sec-footer ">
                    <?php
                    $group_items = cs_get_option('socialmediaa');
                    if (!empty($group_items)) {

                        foreach ($group_items as $item) {
                            //var_dump( $item );// has title
                            $link = !empty($item['smolink']) ? $item['smolink'] : '';
                            $icon = !empty($item['smicon']) ? $item['smicon'] : '';
                            $imagesm = !empty($item['smimg']) ? $item['smimg'] : '';
                            $socialimg = wp_get_attachment_image_src($imagesm, 'full');
                            $title = !empty($item['smotitle']) ? $item['smotitle'] : '';
                            $imagesmhov = !empty($item['smimghv']) ? $item['smimghv'] : '';
                            $socialimghov = wp_get_attachment_image_src($imagesmhov, 'full');

                            if (!empty($icon)) {
                                echo '<li class="'.$title.'"><a  target="_blank" href="' . $link . '"><span class="fght"> <i class="' . $icon . '"> </i></span></a></li>';
                            } else {
                                echo '<li  class="'.$title.'"><a  target="_blank" href="' . $link . '"><span class="fght"> <img class="socialimg" src="' .  $socialimg[0] . '" alt="' . $mwta . '|' . $title . '"/></span> </a></li>';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>








        </div>            
    </div>        
</section>

<section class="map-section" >
    <div class="container">
        <div class="row">
            <a class="mapancore" target="_blank" href="<?php echo cs_get_option('maplink'); ?>"></a>
        </div>
    </div>
</section>

<section class="copyright-section" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8  copyright-text-srea text-center align-self-center">
                <div class="text-copy">&copy; <?php echo the_date('Y'); ?> <?php echo cs_get_option('copytext'); ?>.
                    All Rights Reserved.<span class="dtb"> <img src="<?php echo get_template_directory_uri(); ?>/img/belocal-icon.png" alt="<?php echo cs_get_option('keyword'); ?> belocal icon"> Digital Transformation by 
                        <a target="_blank" href="http://belocal.today">BeLocal Today</a></span>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 copymenu d-none d-lg-block">
                <div class=" copw-menu"> 
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'Copy Menu',
                        'theme_location' => 'copy',
                        'container_id' => 'copymenu',
                    ));
                    ?>
                </div>
            </div>

        </div>
</section>


<style>
    .footer-social li {
        display: inline-block;
        margin: 5px 12px;
        background: #263e92;
        text-align: center;
        width: 40px;
        height: 40px;
        border-top-left-radius: 20px;
        border-bottom-right-radius: 20px;
    }
    .footer-social li i{
        display: block;
        padding:10px;
    }

    div#header-social li:last-child {
        background: url(/wp-content/themes/yeasfi/img/google-review.png) no-repeat center;
    }

    
    section.copyright-section a{color:#fbda05; font-weight:400; text-decoration:none;}



    div#footer-phone a {
        font-size: 18px;
        font-weight: 600;
        color: #fff;
    }


    .copyright-section #cssmenu a{color: #fff; padding: 0; text-transform: capitalize; font-size: 0.6em;}
    .copyright-section #cssmenu a:hover, .copyright-section .current-menu-item a{color: #fca200 !important;}

    section.mobile-bottom {
        position: fixed;
        bottom: 0;
        width: 100%;
        background: #170a0a;
        z-index:7777;
        text-align: center; 
        height: 45px;
    }

    a.btm-cl, a.btm-eml{
        font-size: 24px;
        padding: 5px;
        color: #fff;
        font-weight: 600;
        display: block;
        transition: 0.2s;
        -webkit-transition: 0.2s;
        width: 50%;
        float: left;
    }
    div#call {
        border-right: 1px solid;
    }
    a.btm-cl:hover, a.btm-eml:hover{
        background:#2382c4;
    }
    section#home-form {  position: relative;  z-index: 8888;}
</style>