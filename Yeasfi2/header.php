<?php
/**
 * The Header template for our theme
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes('en'); ?>>
    <head>
        <title><?php wp_title(''); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        wp_head();        
        ?>  

    </head>

    <body <?php body_class(); ?>>     
        <header class="float-panel d-none d-lg-block" data-top="0" data-scroll="<?php echo cs_get_option('scorlheight'); ?>">

            <?php
            $option = cs_get_option('image_select_option');
            if ($option == 'opt1') {
                get_template_part('template/header/opt1', 'page');
                //  header_opt1(); 
            }
            if ($option == 'opt2') {
                get_template_part('template/header/opt2', 'page');
            }
            if ($option == 'opt3') {
                get_template_part('template/header/opt3', 'page');
            }
            if ($option == 'opt4') {
                get_template_part('template/header/opt4', 'page');
            }
            if ($option == 'opt5') {
                get_template_part('template/header/opt5', 'page');
            }
            ?>

        </header>


