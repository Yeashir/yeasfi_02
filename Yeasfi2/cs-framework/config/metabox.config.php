<?php

if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[] = array(
    'id' => 'custom_page_options',
    'title' => 'Custom Page Options',
    'post_type' => 'page',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        // begin: a section
        array(
            'name' => 'section_1',
            'title' => 'Icon/Image',
            'icon' => 'fa fa-cog',
            // begin: fields
            'fields' => array(
                array(
                    'id' => 'image_2',
                    'type' => 'upload',
                    'title' => 'Image for Custom Section',
                    'add_title' => 'Add  Icon',
                ),
                array(
                    'id' => 'image_3',
                    'type' => 'upload',
                    'title' => 'Image for Custom Section',
                    'add_title' => 'Add image',
                ),
            ), // end: fields
        ), // end: a section
    ),
);

$options[] = array(
    'id' => 'page_layout',
    'title' => 'Add Other Section',
    'post_type' => 'page',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        // begin: a section
        array(
            'name' => 'page_layout',
            'title' => 'paage Layout',
            'icon' => 'fa fa-columns',
            'fields' => array(
                array(
                    'id' => 'pagelayout',
                    'type' => 'sorter',
                    'title' => 'Page Layout',
                    'default' => array(
                        'enabled' => array(
                        ),
                        'disabled' => array(
                            'banner' => 'Banner',
                            'services' => 'Services',
                            'otherservices' => 'Other Services',
                            'welcome-sec' => 'Welcome',
                            'testimonials' => 'Testimonials',
                            'gallery' => 'Gallery',
                            'form' => 'Form',
                            'doublegrid' => 'Double Grid',
                        ),
                    ),
                    'enabled_title' => 'Active Section',
                    'disabled_title' => 'Deactive Section',
                ),
            ),
        ),
    ),
);
// -----------------------------------------
// custom_post Metabox Options                    -
// -----------------------------------------
$options[] = array(
    'id' => 'custom_post_options',
    'title' => 'Gallery Options',
    'post_type' => 'photo_gallery',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        // begin: a section
        array(
            'name' => 'section_1',
            'title' => 'Icon/Image',
            'icon' => 'fa fa-cog',
            // begin: fields
            'fields' => array(
                array(
                    'id' => 'gallery_1',
                    'type' => 'gallery',
                    'title' => 'Gallery',
                ),
            ), // end: fields
        ), // end: a section
    ),
);


// -----------------------------------------
// Product Metabox Options                    -
// -----------------------------------------
$options[] = array(
    'id' => 'product_options',
    'title' => 'Product Specifications',
    'post_type' => 'products',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        array(
            'name' => 'specifications',
            'title' => 'Specifications',
            'icon' => 'fa fa-cog',
            'fields' => array(
                array(
                    'id' => 'lotno',
                    'type' => 'text',
                    'title' => 'Lot No',
                ),
                array(
                    'id' => 'make',
                    'type' => 'text',
                    'title' => 'Make',
                ),
                array(
                    'id' => 'model',
                    'type' => 'text',
                    'title' => 'Model',
                ),
                array(
                    'id' => 'product_gallery',
                    'type' => 'gallery',
                    'title' => 'Product Gallery',
                ),
            ),
        ),
    ),
);
// -----------------------------------------
// Testminial Metabox Options                    -
// -----------------------------------------
$options[] = array(
    'id' => 'custom_post_options',
    'title' => 'Testimonial Custome Option',
    'post_type' => 'testimonial',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        array(
            'name' => 'tmdesigcustome',
            'title' => 'Designation',
            'icon' => 'fa fa-cog',
            // begin: fields
            'fields' => array(
                array(
                    'id' => 'tmdesig',
                    'type' => 'text',
                ),
            ), // end: fields
        ), // end: a section
    ),
);
// -----------------------------------------
// Our Yeam Metabox Options                    -
// -----------------------------------------
$options[] = array(
    'id' => 'custom_options_team',
    'title' => 'Custom Options Team',
    'post_type' => 'ourteam',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        // begin: a section
        array(
            'name' => 'teammembersocial',
            'fields' => array(
                array(
                    'id' => 'subtitle',
                    'type' => 'text',
                    'title' => 'Sub Title',
                ),
                array(
                    'id' => 'deg',
                    'type' => 'text',
                    'title' => 'DEG',
                ),
                array(
                    'id' => 'memberlogo',
                    'type' => 'upload',
                    'title' => 'Logo',
                ),
                array(
                    'id' => 'membermeta_groups',
                    'type' => 'group',
                    'title' => 'Member Social Profile',
                    'button_title' => ' new input ',
                    'accordion_title' => 'input title',
                    'fields' => array(
                        array(
                            'id' => 'memberproicon',
                            'type' => 'icon',
                            'title' => 'Icon ',
                        ),
                        array(
                            'id' => 'memberprolink',
                            'type' => 'text',
                            'title' => 'Link',
                        ),
                    )
                ),
            ),
        ),
    ),
);

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[] = array(
    'id' => 'post_options_group_display',
    'title' => 'Custom Product ancore  Options',
    'post_type' => 'page',
    'context' => 'normal',
    'priority' => 'default',
    'sections' => array(
        array(
            'name' => 'titlemetabox',
            'fields' => array(
                array(
                    'id' => 'meta_groups',
                    'type' => 'group',
                    'title' => 'Product Ancore inputs',
                    'button_title' => ' new input ',
                    'accordion_title' => 'input title',
                    'fields' => array(
                        array(
                            'id' => 'subproducttitle',
                            'type' => 'text',
                            'title' => 'Title ',
                        ),
                        array(
                            'id' => 'pageslug',
                            'type' => 'text',
                            'title' => 'Target Page Slug',
                        ),
                        array(
                            'id' => 'subproductimage',
                            'type' => 'upload',
                            'title' => 'Upload Field',
                        ),
                    )
                ),
            ),
        ),
    ),
);

CSFramework_Metabox::instance($options);
