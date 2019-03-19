<?php
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');
?>

<section id="topheader" class="topheader">
    <div class="container-fluid">
        <div class="row">
            <div class="col"></div>
            <div id="header-phone" class="col-lg-3 align-self-center text-left">

                <div class="email col-12">                
                    <img src="<?php echo $emailimg[0] ?>"                                                     
                         alt="<?php echo cs_get_option('keyword'); ?> phone" class="banerphone hedcomon" aria-hidden="true"> 
                         <?php if (cs_get_option('email')) : ?> 
                        <a  href="mailto:<?php echo cs_get_option('email'); ?>">   <?php echo cs_get_option('email'); ?>  </a> 
                    <?php endif; ?>
                </div>
                <div class="masenger col-12">

                    <a target="_blank" href="https://m.me/XYZ"> <img src="<?php echo get_template_directory_uri(); ?>/img/messanger.png"                                                     
                                                                     alt="<?php echo cs_get_option('keyword'); ?> messanger icon" class="banerphone" aria-hidden="true">  Message us </a>
                </div>

                <div class="phone col-12">
                    <?php
                    $image_id = cs_get_option('phone_image');
                    $attachment = wp_get_attachment_image_src($image_id, 'full');
                    ?>
                    <img src="<?php echo $attachment[0] ?>"                                                     
                         alt="<?php echo cs_get_option('keyword'); ?> phone" class="banerphone hedcomon" aria-hidden="true"> 
                         <?php if (cs_get_option('phone')) : ?> 
                        <a  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a> 
                    <?php endif; ?>
                </div>

            </div> 
            <div id="logo-area"  class="col-lg-4 align-self-center text-center">
                <?php if (cs_get_option('logo_upload')) : ?>
                    <a href='<?php echo esc_url(home_url('/')); ?>' >
                        <img class="img-fluid logo " src='<?php echo cs_get_option('logo_upload') ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?> Logo'>
                    </a>
                <?php endif; ?>
            </div>

            <div id="header-social"  class="col-lg-3 align-self-center text-left">
                <div class="row">
                    <div class="topmenu col-12">
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'Top Menu',
                            'theme_location' => 'topmenu',
                            'container_id' => 'cssmenu',
                            'walker' => new CSS_Menu_Walker()
                        ));
                        ?>
                    </div>
                    <div class="topsearch col-lg-9 " >
                        <?php echo do_shortcode('[wcas-search-form]') ?>
                    </div>
                    <div class="col-lg-3 cartwithcount">
                        <?php
                        if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
                            $count = WC()->cart->cart_contents_count;
                            
                            ?>
                        <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart'); ?>">
                            <?php if ($count == 0) { ?>
                                     <span class="cart-contents-count"><?php echo esc_html( $count ); ?> </span> 
                                    <?php
                                }                               
                                ?>
                                         
                        </a>
                                <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col"> </div>

        </div>
</section>

<section id="top-header-menu" class="topheader d-none d-lg-block">
    <div class="container-fluid">
        <div class="row">             
            <div class="col-1"></div>
            <div class="col catmenu"> 
            <?php              
              wp_nav_menu(array(
                    'menu' => 'catmenu',
                    'theme_location' => 'catmenu',
                    'container_id' => 'cssmenu',
                    'walker' => new CSS_Menu_Walker()
                ));             
             ?>
            </div>
            <div  class="col-10">
                <?php
                wp_nav_menu(array(
                    'menu' => 'mainmenu',
                    'theme_location' => 'mainmenu',
                    'container_id' => 'cssmenu',
                    'walker' => new CSS_Menu_Walker()
                ));
                ?>
            </div>

        </div>
    </div>
</section>


