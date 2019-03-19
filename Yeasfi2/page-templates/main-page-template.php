<?php

/**
 * Template Name: Home Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header();
$layout = cs_get_option('homelayout')['enabled'];
if ($layout): foreach ($layout as $key => $value) {

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
            case 'otherservices': get_template_part('page-templates/home_part/otherservices', 'page');
                break;
             case 'team': get_template_part('page-templates/home_part/team', 'page');
                break;
             case 'homeblog': get_template_part('page-templates/home_part/homeblog', 'page');
                break;
             case 'customepost': get_template_part('page-templates/home_part/customepost', 'page');
                break;
            case 'cat-single-one': get_template_part('page-templates/home_part/cat-single-one', 'page');
                break;
            case 'cat-single-two': get_template_part('page-templates/home_part/cat-single-two', 'page');
                break;
            case 'devider-sec-one': get_template_part('page-templates/home_part/devider-sec-one', 'page');
                break;
            case 'devider-sec-two': get_template_part('page-templates/home_part/devider-sec-two', 'page');
                break;
        }
    }
endif;
get_footer();

?>