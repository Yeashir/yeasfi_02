<?php

// Theme Setup
function yeasfi_setup() {
    add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));
    // add_theme_support('custom-background', array('default-color' => 'e6e6e6',));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    set_post_thumbnail_size(624, 9999); // Unlimited height, soft crop
}

add_action('after_setup_theme', 'yeasfi_setup');
//Framework Setup
/**
 *
 * Codestar Framework
 * A Lightweight and easy-to-use WordPress Options Framework
 *
 */
require_once get_template_directory() . '/cs-framework/cs-framework.php';

// -( or )-
// require_once get_template_directory() .'/subfolder/cs-framework/cs-framework.php';

/**
 * Menu walker. 
 */
require_once get_template_directory() . '/lib/menunavewalker.php';

/**
 * Filter the page menu arguments.
 * 
 */
function yeasfi_page_menu_args($args) {
    if (!isset($args['show_home']))
        $args['show_home'] = true;
    return $args;
}

add_filter('wp_page_menu_args', 'yeasfi_page_menu_args');

function menu_setup() {
    register_nav_menu('topmenu', __('Top Menu', 'yeasfi'));
    register_nav_menu('mainmenu', __('Main Menu', 'yeasfi'));
    register_nav_menu('footer', __('Footer Menu', 'yeasfi'));
    register_nav_menu('service', __('Service Menu', 'yeasfi'));
    register_nav_menu('copy', __('Copy Menu', 'yeasfi'));
    register_nav_menu('catmenu', __('Cat Menu', 'yeasfi'));
}

add_action('after_setup_theme', 'menu_setup');

/**
 * Register sidebars.
 *
 */
function yeasfi_widgets_init() {
    register_sidebar(array(
        'name' => __('Left Sidebar'),
        'id' => 'left-sidebar',
        'description' => __('Appears in the Sidebar Widget Area of the site.'),
        'before_title' => '<h3 class="left-sidebar-widget-titel">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Footer Address Widget'),
        'id' => 'footer-address-widget',
        'description' => __('Appears in the Footer Widget Area of the site.'),
        'before_title' => '<h3 class="footer-widget-titel">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'yeasfi_widgets_init');

// Style registration
function yeasfi_css() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', 'all');
    wp_enqueue_style('owlcss', get_template_directory_uri() . '/css/owl.carousel.css', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', 'all');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900', 'all');
    wp_enqueue_style('icon', get_template_directory_uri() . '/css/font-awesome.css', 'all');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', 'all');
    wp_enqueue_style('unite-gallery', get_template_directory_uri() . '/css/unite-gallery.css', 'all');
    wp_enqueue_style('slider', get_template_directory_uri() . '/css/slider.css', 'all');
    wp_enqueue_style('3dgallery', get_template_directory_uri() . '/css/3dgallery.css', 'all');
}

add_action('wp_enqueue_scripts', 'yeasfi_css');

// Scripts registration
function yeasfi_scripts() {
    $js_path = esc_url(get_template_directory_uri() . '/js/');
    $deps = array('jquery');
    wp_enqueue_script('jquery');
    wp_enqueue_script('tether', $js_path . 'tether.min.js', $deps, '', true);
    wp_enqueue_script('menusticky', $js_path . 'float-panel.js', $deps, '', true);
    wp_enqueue_script('bootstrap', $js_path . 'bootstrap.min.js', $deps, '', true);
    wp_enqueue_script('woo', $js_path . 'wow.min.js', $deps, '', true);
    wp_enqueue_script('owl', $js_path . 'owl.carousel.min.js', $deps, '', true);
    wp_enqueue_script('fancybox', $js_path . 'jquery.fancybox.min.js', $deps, '', true);
    wp_enqueue_script('unitegallery', $js_path . 'unitegallery.min.js', $deps, '', true);
    wp_enqueue_script('ugtilegrid', $js_path . 'ug-theme-tilesgrid.js', $deps, '', true);
    wp_enqueue_script('ugtile', $js_path . 'ug-theme-tiles.js', $deps, '', true);
    wp_enqueue_script('unitegallery-caro', $js_path . 'ug-theme-carousel.js', $deps, '', true);
    wp_enqueue_script('faq', $js_path . 'jquery.simpleFAQ.js', $deps, '', true);
    wp_enqueue_script('main', $js_path . 'classie.js', $deps, '', true);
    wp_enqueue_script('galleryimain', $js_path . 'jquery.gallery.js', $deps, '', true);
    wp_enqueue_script('custom53451', $js_path . 'modernizr.custom.53451.js', $deps, '', true);
}

add_action("wp_enqueue_scripts", "yeasfi_scripts");






add_action('init', 'create_post_type_ourteam');

function create_post_type_ourteam() {
    $labels = array(
        'name' => 'Our Team',
        'all_items' => 'All Item',
        'singular_name' => 'Add A Item',
    );

    $args = array(
        'labels' => $labels,
        'publicly_queryable' => true,
        'show_in_menu' => true,
        'exclude_from_search' => true,
        'menu_position' => null,
        'public' => true,
        'menu_class' => 'wp-menu-image dashicons-before dashicons-admin-comments',
        'has_archive' => true,
        'query_var' => true,
        'show_ui' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-format-status',
        'description' => 'Description for Signature Dishes',
        'query_var' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'attributes')
    );

    register_post_type('ourteam', $args);
}

// Testmonial

add_action('init', 'create_post_type_testimonial');

function create_post_type_testimonial() {
    $labels = array(
        'name' => 'Testimonial',
        'all_items' => 'All Testimonial',
        'singular_name' => 'Add New Testimonial',
    );

    $args = array(
        'labels' => $labels,
        'publicly_queryable' => true,
        'show_in_menu' => true,
        'exclude_from_search' => true,
        'menu_position' => null,
        'public' => true,
        'menu_class' => 'wp-menu-image dashicons-before dashicons-admin-comments',
        'has_archive' => true,
        'query_var' => true,
        'show_ui' => true,
        'menu_position' => 19,
        'menu_icon' => 'dashicons-format-status',
        'description' => 'Description for Signature Dishes',
        'query_var' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('testimonial', $args);
}

// FAQ

add_action('init', 'create_post_type_faqs');

function create_post_type_faqs() {

    $labels = array(
        'name' => 'FAQs',
        'all_items' => 'All FAQs',
        'singular_name' => 'Add New FAQ',
    );

    $args = array(
        'labels' => $labels,
        'publicly_queryable' => true,
        'show_in_menu' => true,
        'exclude_from_search' => true,
        'menu_position' => null,
        'public' => true,
        'menu_class' => 'wp-menu-image dashicons-before dashicons-admin-comments',
        'has_archive' => true,
        'query_var' => true,
        'show_ui' => true,
        'menu_position' => 21,
        'menu_icon' => 'dashicons-editor-help',
        'description' => 'Description for Signature Dishes',
        'query_var' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('faqs', $args);
}

function create_faqs_taxonomies() {
    $labels = array(
        'name' => _x('Categories', 'taxonomy general name'),
        'singular_name' => _x('Category', 'taxonomy singular name'),
        'search_items' => __('Search Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Category'),
        'parent_item_colon' => __('Parent Category:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category Name'),
        'menu_name' => __('Categories'),
    );

    $args = array(
        'hierarchical' => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'categories'),
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );

    register_taxonomy('faqs_categories', array('faqs'), $args);
}

add_action('init', 'create_faqs_taxonomies');



//
// Gallary
//
//----------------------------------------------
//--------------add theme support for thumbnails
//----------------------------------------------
//----------------------------------------------
//----------register and label gallery post type
//----------------------------------------------
// Register Gallery

add_action('init', 'create_post_type_photo_gallery');

function create_post_type_photo_gallery() {

    $labels = array(
        'name' => 'Gallery',
        'all_items' => 'All Albums',
        'singular_name' => 'Add New Albums',
    );

    $args = array(
        'labels' => $labels,
        'publicly_queryable' => true,
        'show_in_menu' => true,
        'exclude_from_search' => true,
        'menu_position' => null,
        'public' => true,
        'menu_class' => 'wp-menu-image dashicons-before dashicons-admin-comments',
        'has_archive' => true,
        'query_var' => true,
        'show_ui' => true,
        'menu_position' => 27,
        'menu_icon' => 'dashicons-format-gallery',
        'description' => 'Description for Signature Dishes',
        'query_var' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'supports' => array('title', 'custom-fields')
    );

    register_post_type('photo_gallery', $args);
}

function wp_get_attachment($attachment_id) {
    $attachment = get_post($attachment_id);
    return array(
        'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink($attachment->ID),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}

// Add Shortcode
function custom_shortcode() {
    ob_start();
    if (has_post_thumbnail()) {
        the_post_thumbnail('full');
    }
    $output = ob_get_clean();
    return '<div class="col-12 px-0 my-4 innerimage">' . $output . '</div>';
}

add_shortcode('image_withgrid', 'custom_shortcode');

// Add Shortcode
function innerpageimage_shortcode() {
    ob_start();
    if (has_post_thumbnail()) {
        the_post_thumbnail('full');
    }
    $output = ob_get_clean();
    return $output;
}

add_shortcode('image_withoutgrid', 'innerpageimage_shortcode');

function header_opt1() {
    do_action('header_opt1');
}

require_once get_template_directory() . '/template/header/header/hook.php';


// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

//Wooo
function my_header_add_to_cart_fragment($fragments) {
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart'); ?>">
        <?php if ($count == 0) { ?>        
            <span class="cart-contents-count"><?php echo esc_html($count); ?> </span> 
            <?php
        }
        ?>

    </a>
    <?php
    $fragments['a.cart-contents'] = ob_get_clean();
    return $fragments;
}

add_filter('woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment');

function clean_commerce_child_custom_woo_fix() {
    add_filter('woocommerce_show_page_title', '__return_true', 20);
    add_filter('woocommerce_single_product_summary', 'woocommerce_template_single_title', 6);
}

add_action('init', 'clean_commerce_child_custom_woo_fix');


add_action('woocommerce_before_add_to_cart_form', 'dev_designs_show_sku', 5);

function dev_designs_show_sku() {
    global $product;
    $sku = $product->get_sku();
    if (!empty($sku)) {
        echo '<span class="sku-singlepage"> <label>SKU: </label>' . $sku . '</span>';
    }
}

add_action('woocommerce_before_add_to_cart_quantity', 'bbloomer_display_quantity_plus');

function bbloomer_display_quantity_plus() {
    echo '<button type="button" class="plus" >+</button>';
}

add_action('woocommerce_after_add_to_cart_quantity', 'bbloomer_display_quantity_minus');

function bbloomer_display_quantity_minus() {
    echo '<button type="button" class="minus" >-</button>';
}

// -------------
// 2. Trigger jQuery script

add_action('wp_footer', 'bbloomer_add_cart_quantity_plus_minus');

function bbloomer_add_cart_quantity_plus_minus() {
    // Only run this on the single product page
    if (!is_product())
        return;
    ?>
    <script type="text/javascript">

        jQuery(document).ready(function ($) {

            $('form.cart').on('click', 'button.plus, button.minus', function () {

                // Get current quantity values
                var qty = $(this).closest('form.cart').find('.qty');
                var val = parseFloat(qty.val());
                var max = parseFloat(qty.attr('max'));
                var min = parseFloat(qty.attr('min'));
                var step = parseFloat(qty.attr('step'));

                // Change the value if plus or minus
                if ($(this).is('.plus')) {
                    if (max && (max <= val)) {
                        qty.val(max);
                    } else {
                        qty.val(val + step);
                    }
                } else {
                    if (min && (min >= val)) {
                        qty.val(min);
                    } else if (val > 1) {
                        qty.val(val - step);
                    }
                }

            });

        });

    </script>
    <?php
}

add_filter('woocommerce_product_description_heading', '__return_null');

add_filter('woocommerce_product_add_to_cart_text', 'wh_archive_custom_cart_button_text');   // 2.1 +

function wh_archive_custom_cart_button_text() {
    global $woocommerce;
    $currency = get_woocommerce_currency_symbol();
    $price = get_post_meta(get_the_ID(), '_regular_price', true);
    
    return __('Add to BASKET', 'woocommerce');
    
}


add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
    function wcs_woo_remove_reviews_tab($tabs) {
    unset($tabs['reviews']);
    return $tabs;
}