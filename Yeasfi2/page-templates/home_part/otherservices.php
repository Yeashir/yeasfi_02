<?php
$locality = cs_get_option('addresslocality');
$srvtitlesec = cs_get_option('othersrvvicetitle');
if (!empty($srvtitlesec)) {
    $othersrvtitle = $srvtitlesec['title'];
    $othersrvfontsize = $srvtitlesec['size'];
    $othersrvfontweight = $srvtitlesec ['font_weight'];
    $othersrvcolor = $srvtitlesec ['colour'];
}
$srvdescsec = cs_get_option('othersrvvicedesc');
?>
<section class="otherservices-section roundiconstyle" >
    <div class="<?php echo cs_get_option('othersrviccontanier') ?>">
        <div class="row">           
            <div class="col-12 otherservicesbb">
                <h2 class="othersrv-titelaa"><?php echo $othersrvtitle; ?> </h2>  
                <?php if (!empty($srvdescsec)) { ?>
                    <span class="titledesc"> <?php echo $srvdescsec; ?></span>
                <?php } ?>
                <div class="row">
                    <?php
                    $srvlayout = cs_get_option('othersrvsorter')['enabled'];
                    if ($srvlayout): foreach ($srvlayout as $key => $value) {
                            switch ($key) {
                                case 'roundicon': get_template_part('page-templates/home_part/otherservice/basic', 'page');
                                    break;
                                case 'iconText': get_template_part('page-templates/home_part/otherservice/iconText', 'page');
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
    h2.othersrv-titelaa{
        font-size:<?php echo $othersrvfontsize; ?>px;
        color:<?php echo $othersrvcolor; ?>;
        font-weight:<?php echo $othersrvfontweight; ?>; 
    }
</style>























