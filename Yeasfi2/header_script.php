<script>
    jQuery(document).ready(function ($) {
        $("#hide").click(function () {
            $(".readmore-wlq").hide(1000);
            $("#show").css("display", "block");
            $("#hide").css("display", "none");
        });
        $("#show").click(function () {
            $(".readmore-wlq").show(1000);
            $("#show").css("display", "none");
            $("#hide").css("display", "block");
        });

        $(function () {
            $('#dg-container').gallery();
        });

        $(".fancybox").fancybox();
    });



</script>

<script >
    new WOW().init();
    jQuery(document).ready(function ($) {
        $('#header-social img').bind('mouseenter mouseleave', function () {
            $(this).attr({
                src: $(this).attr('data-other-src')
                , 'data-other-src': $(this).attr('src')
            })
        });


//unite Gallery 
        jQuery("#gallerypage").unitegallery({
            gallery_theme: "tilesgrid",
            tile_width: 300,
            tile_height: 300,
            tile_enable_shadow: false,
            grid_padding: 10,
        });

        jQuery("#galleryhome").unitegallery({
            gallery_theme: "carousel",
            carousel_space_between_tiles: 0,
            carousel_navigation_numtiles: 3,
            tile_width: 505,
            tile_height: 400,
            carousel_padding: 0,
            tile_enable_border: false,
            theme_navigation_offset_hor: 0,
        });


    });
</script>



<script>
    // FAQ 
    jQuery(document).ready(function ($) {
        $('.collapsible').collapsible({
            //defaultOpen: 'section1,section3'
        });
        $("#homeblog").owlCarousel({
            items: 3,
            itemsDesktop: [1199, ],
            itemsDesktopSmall: [979, 3],
            itemsTablet: [768, 2],
            itemsTabletSmall: false,
            itemsMobile: [479, 1],
            singleItem: false,
            navigation: true,
            pagination: false,
            navigationText: ["Previous", "Next"]
        });


    });




</script>


<script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "Organization",
    "url": "<?php echo get_home_url(); ?>",
    "logo": "<?php echo get_home_url(); ?><?php echo cs_get_option('logo_upload'); ?>",

    "sameAs" : [<?php
    $group_items = cs_get_option('socialmediaa');
    if (!empty($group_items)) {
        foreach ($group_items as $item) {
            $link = !empty($item['smolink']) ? $item['smolink'] : '';
            ?>
            "<?php echo $link; ?>", 
            <?php
        }
    }
    ?>

    ""]
    }
</script>

<script type="application/ld+json">
    { 
    "@context": "http://schema.org",
    "@type": "<?php echo cs_get_option('businesstype'); ?>", 
    "url": "<?php echo get_home_url(); ?>",
    "image": "<?php echo get_home_url(); ?><?php echo cs_get_option('logo_upload'); ?>",
    "name": "<?php echo esc_attr(get_bloginfo('name', 'display')); ?>",
    "priceRange": "$$", 
    "telephone": "<?php echo cs_get_option('phone_number'); ?> , <?php echo cs_get_option('mobile_number'); ?>", 
    "email": "<?php echo cs_get_option('email'); ?>", 
    "address":{
    "@type":"PostalAddress",
    "streetAddress":"<?php echo cs_get_option('streetaddress'); ?>",
    "addressLocality":"<?php echo cs_get_option('addresslocality'); ?>",
    "addressRegion":"<?php echo cs_get_option('addressregion'); ?>",
    "postalCode":"<?php echo cs_get_option('postalcode'); ?>"
    }
    }
</script>






