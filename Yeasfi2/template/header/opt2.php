<?php
$image_id = cs_get_option('address_image');
$addrsimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('phone_image');
$phoneimg = wp_get_attachment_image_src($image_id, 'full');
$image_id = cs_get_option('email_image');
$emailimg = wp_get_attachment_image_src($image_id, 'full');
?>

<section id="sticker" class="header-top-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div id="logo-area" class="col-md-12 col-lg-2">
                <?php if (cs_get_option('logo_upload')) : ?>
                    <a href='<?php echo esc_url(home_url('/')); ?>' >
                        <img class="img-fluid logo " src='<?php echo cs_get_option('logo_upload') ?>' alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?> Logo'>
                    </a>
                <?php endif; ?>
            </div>
            <div id="menu-sec" class="col-auto align-self-center">
                <?php
                wp_nav_menu(array(
                    'menu' => 'mainmenu',
                    'theme_location' => 'mainmenu',
                    'container_id' => 'cssmenu',
                    'walker' => new CSS_Menu_Walker()
                ));
                ?>
            </div>
           
            <div id="header-phone" class="col-auto align-self-center">
                <i class="<?php echo cs_get_option('phone-icon') ?>"></i><a  href="tel:<?php echo cs_get_option('phone'); ?>">   <?php echo cs_get_option('phone'); ?>  </a>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>

