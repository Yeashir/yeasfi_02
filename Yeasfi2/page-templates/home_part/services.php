<?php
$locality = cs_get_option('addresslocality');
$contanergrid = cs_get_option('srvviccontanier');
$gridclass = cs_get_option('srvgrid');
$srvtitlesec = cs_get_option('srvvicetitle');
$srvdescsec = cs_get_option('srvvicedesc');

if (!empty($srvtitlesec)) {
    $srvtitle = $srvtitlesec['title'];
    $srvfontsize = $srvtitlesec['size'];
    $srvfontweight = $srvtitlesec ['font_weight'];
    $srvcolor = $srvtitlesec ['colour'];
}
?>
<section class="services-section roundiconstyle" >
    <div class="<?php echo $contanergrid; ?>">
        <div class="row">           
            <div class="col-md-12 col-lg-12 section_title align-self-center">
                <h2 class="srv-titelaa"><?php echo $srvtitle; ?> </h2>  
                <?php if (!empty($srvdescsec)) { ?>
                    <span class="titledesc"> <?php echo wpautop(cs_get_option('srvvicedesc')); ?></span>
                <?php } ?>
            </div>
            <div class="col-md-12 col-lg-12 section_srv">
            <div class="row justify-content-end">
                
                <?php
                $srvlayout = cs_get_option('srvsorter')['enabled'];
                if ($srvlayout): foreach ($srvlayout as $key => $value) {
                        switch ($key) {
                            case 'regular': get_template_part('page-templates/home_part/service/regular', 'page');
                                break;
                             case 'doublepart': get_template_part('page-templates/home_part/service/doublepart', 'page');
                                break;
                        }
                    }
                endif;
                ?>
                
            </div>
            </div>
        </div>
    </div>
</section>
<style>
    h2.srv-titelaa{
        font-size:<?php echo $srvfontsize; ?>px;
        color:<?php echo $srvcolor; ?>;
        font-weight:<?php echo $srvfontweight; ?>; 
    }
</style>



<?php
$botomsec = cs_get_option('textareaextasection1');
if (!empty($botomsec)) {
    ?>
    <section class="bottomsecmasage">
        <div class="container">
            <div class="row">   
                <div class="col-lg-10 col-md-12 sectionmasage"><?php echo $botomsec; ?></div>      
                <div class="col p-0"><a href="tel:<?php echo cs_get_option('phone'); ?>" class="sectioncall">Call Now</a></div>
            </div>
        </div>
    </section>
<?php
}?>