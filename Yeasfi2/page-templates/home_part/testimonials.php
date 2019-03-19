<?php
$tmtitlesec = cs_get_option('tmtitlesec');
$tmcontaner = cs_get_option('tmcontanier');
$tmbotompart = cs_get_option('tmbotomtext');
$tmdesc = cs_get_option('tmsecdesc');
if (!empty($tmtitlesec)) {
    $tmtitle = $tmtitlesec['title'];
    $tmfontsize = $tmtitlesec['size'];
    $tmfontweight = $tmtitlesec ['font_weight'];
    $tmqcolor = $tmtitlesec ['colour'];
}

if (!empty(cs_get_option('testmonialbg'))) {
    $tmbg = cs_get_option('testmonialbg');
    $tmimage = !empty($tmbg['image']) ? $tmbg['image'] . ';' : '';
    $tmrepeat = !empty($tmbg['repeat']) ? $tmbg['repeat'] . ';' : '';
    $tmposition = !empty($tmbg['position']) ? $tmbg['position'] . ';' : '';
    $tmattachment = !empty($tmbg['attachment']) ? $tmbg['attachment'] . ';' : '';
    $tmcolor = !empty($tmbg['color']) ? $tmbg['color'] . ';' : '';
    $tmsize = !empty($tmbg['size']) ? $tmbg['size'] . ';' : '';
}
$tstmopading = cs_get_option('padding_tstmo');
if (!empty($tstmopading)) {
    $top = $tstmopading["top"];
    $right = $tstmopading["right"];
    $bottom = $tstmopading["bottom"];
    $left = $tstmopading["left"];
}
$args = array(
    'post_type' => 'Testimonial',
    'posts_per_page' => 100,
    'paged' => $paged,
);
$count = 0;
$count2 = 0;
$wp_query = new WP_Query($args);
?>

<section class="testimonial-section singlegrid" style="clear: both">
    <div class="<?php echo $tmcontaner; ?>">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <?php
                if (!empty($tmtitle)) {
                    ;
                    ?> 
                    <div class="col-12">   <h2 class="tm-titele comontitle"><?php echo $tmtitle; ?> </h2> </div>
                <?php }; ?>
                <?php
                if (!empty($tmdesc)) {
                    ;
                    ?> 
                    <div class="col-12 tmdesc"><?php echo cs_get_option('tmsecdesc'); ?></div> 
                <?php }; ?>

                <?php
                $layout = cs_get_option('tmsorter')['enabled'];
                if ($layout): foreach ($layout as $key => $value) {
                        switch ($key) {
                            case 'normal': get_template_part('layout/testmonial/tm_option_A');
                                break;
                            case 'doublesec': get_template_part('layout/testmonial/tm_option_B');
                                break;
                        }
                    }
                endif;
                ?>

            </div>


        </div>
    </div>
</section>
<?php
if (!empty($tmbotompart)) {
    ;
    ?> 
    <section class="bottomsecmasage">
        <div class="container">
            <div class="row">   
                <div class="col-lg-10 col-md-12 sectionmasage"><?php echo cs_get_option('tmbotomtext'); ?></div>

                <div class="col p-0"><a href="tel:<?php echo cs_get_option('phone'); ?>" class="sectioncall">Call Now</a></div>
            </div>
        </div>
    </section>
<?php }; ?>
<style>
    /*====================
      TM ===========    */
    .testimonial-section{
        background:url(<?php echo $tmimage; ?>);         
        background-size: <?php echo $tmsize; ?>;
        background-color: <?php echo $tmcolor; ?>;
        background-attachment: <?php echo $tmattachment; ?>;
        background-position: <?php echo $tmposition; ?>;
        background-repeat: <?php echo $tmrepeat; ?>;
        padding-top:<?php echo $top; ?>px;
        padding-right:<?php echo $right; ?>px;
        padding-bottom:<?php echo $bottom; ?>px;
        padding-left:<?php echo $left; ?>px;
    }
    .tm-titele{
        font-size:<?php echo $tmfontsize; ?>px;
        color:<?php echo $tmqcolor; ?>;
        font-weight:<?php echo $tmfontweight; ?>;
    }



</style>

<script>
    jQuery(document).ready(function ($) {
        $("#testimonial").owlCarousel({
            items: <?php echo cs_get_option('tmnumber'); ?>,
            itemsDesktop: <?php echo cs_get_option('tmnumber'); ?>,
            itemsDesktopSmall:<?php echo cs_get_option('tmnumber'); ?>,
            itemsTablet: [768,<?php echo cs_get_option('tmnumber'); ?>],
            itemsTabletSmall: false,
            itemsMobile: [479, 1],
            singleItem: false,
            navigation: false,
            pagination: true,
            paginationNumbers: false,
            //navigationText: ["<i class='fa fa-chevron-circle-left' aria-hidden='true'></i>", "<i class='fa fa-chevron-circle-right' aria-hidden='true'></i>"]
        });
    });
</script>
