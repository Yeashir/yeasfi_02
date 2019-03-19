<?php
$homebgcontaner = cs_get_option('homebgcontanier');
$homebgtitlesec = cs_get_option('hmbtitlesec');
if (!empty($homebgtitlesec)) {
    $homebgtitle = $homebgtitlesec['title'];
    $homebgfontsize = $homebgtitlesec['size'];
    $homebgfontweight = $homebgtitlesec ['font_weight'];
    $homebgqcolor = $homebgtitlesec ['colour'];
}
$homebgdesc = cs_get_option('hmbsecdesc');


if (!empty(cs_get_option('homeblogbg'))) {
    $homebg = cs_get_option('homeblogbg');
    $image = !empty($homebg['image']) ? $homebg['image'] . ';' : '';
    $repeat = !empty($homebg['repeat']) ? $homebg['repeat'] . ';' : '';
    $position = !empty($homebg['position']) ? $homebg['position'] . ';' : '';
    $attachment = !empty($homebg['attachment']) ? $homebg['attachment'] . ';' : '';
    $color = !empty($homebg['color']) ? $homebg['color'] . ';' : '';
    $size = !empty($homebg['size']) ? $homebg['size'] . ';' : '';
}
$homebgopading = cs_get_option('padding_tshmbo');
if (!empty($homebgopading)) {
    $top = $homebgopading["top"];
    $right = $homebgopading["right"];
    $bottom = $homebgopading["bottom"];
    $left = $homebgopading["left"];
}
$homebgbotompart = cs_get_option('homebgbotomtext');
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 100,
    'paged' => $paged,
    'orderby' => 'ID',
    'order' => 'ASC',
);
$count = 0;
$count2 = 0;
$wp_query = new WP_Query($args);
?>

<section class="homeblog-section singlegrid" style="clear: both">
    <div class="<?php echo $homebgcontaner; ?>">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <?php
                if (!empty($homebgtitle)) {
                    ;
                    ?> 
                    <div class="col-12">   <h2 class="homblogtitle comontitle"><?php echo $homebgtitle; ?> </h2> </div>
                <?php }; ?>
                <?php
                if (!empty($homebgdesc)) {
                    ;
                    ?> 
                    <div class="col-12 comdescription homedescription"><?php echo $homebgdesc; ?></div> 
                <?php }; ?>

                <div id="homeblog" class="col-12  owl-carousel p-0" > 
                    <?php
                    if (have_posts()) : while (have_posts()) : the_post();                           
                            $layout = cs_get_option('hmbsorter')['enabled'];
                            if ($layout): foreach ($layout as $key => $value) {
                                    switch ($key) {
                                        case 'normal': get_template_part('layout/blog/regularblog');
                                            break;
                                        case 'textoverlap': get_template_part('layout/blog/textoverlap');
                                            break;
                                        }
                                }
                            endif;
                        endwhile;
                    endif;
                    ?>              
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /*====================
      TM ===========    */
    .homeblog-section{
        background:url(<?php echo $image; ?>);         
        background-size: <?php echo $size; ?>;
        background-color: <?php echo $color; ?>;
        background-attachment: <?php echo $attachment; ?>;
        background-position: <?php echo $position; ?>;
        background-repeat: <?php echo $repeat; ?>;
        padding-top:<?php echo $top; ?>px;
        padding-right:<?php echo $right; ?>px;
        padding-bottom:<?php echo $bottom; ?>px;
        padding-left:<?php echo $left; ?>px;
    }
    .homblogtitle{
        font-size:<?php echo $homebgfontsize; ?>px;
        color:<?php echo $homebgqcolor; ?>;
        font-weight:<?php echo $homebgfontweight; ?>;
    }
</style>

<script>
    // FAQ 
    jQuery(document).ready(function ($) {
        $("#homeblog").owlCarousel({
            items: <?php echo cs_get_option('hmblogitemnumbrt'); ?>,
            itemsDesktop: [1199, <?php echo cs_get_option('hmblogitemnumbrt'); ?>],
            itemsDesktopSmall: [979, <?php echo cs_get_option('hmblogitemnumbrt'); ?>],
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
