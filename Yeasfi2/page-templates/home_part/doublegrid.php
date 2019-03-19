<?php

$dblgrid_sorter = cs_get_option('dblgrid_sorter')['enabled'];
if ($dblgrid_sorter): foreach ($dblgrid_sorter as $key => $value) {
        switch ($key) {
            case 'firstsection': get_template_part('page-templates/home_part/doublegrid/firstsection', 'page');
                break;
            case 'scondsection': get_template_part('page-templates/home_part/doublegrid/scondsection', 'page');
                break;
            case 'thirdsection': get_template_part('page-templates/home_part/doublegrid/thirdsection', 'page');
                break;
            case 'forthsection': get_template_part('page-templates/home_part/doublegrid/forthsection', 'page');
                break;
        }
    }
endif;

$custom_css = cs_get_option('dblgridcustom_css');
if ($custom_css) {
    echo '<style type="text/css">' . $custom_css . '</style>';
}
?>
                
<?php
$textareadblgrid = cs_get_option('textareadblgrid');
if(!empty($textareadblgrid)){?>
<section class="bottomsecmasage">
    <div class="container">
        <div class="row">   
            <div class="col-lg-10 col-md-12 sectionmasage"><?php echo cs_get_option('textareadblgrid'); ?></div>
      
            <div class="col p-0"><a href="tel:<?php echo cs_get_option('phone'); ?>" class="sectioncall">Call Now</a></div>
        </div>
    </div>
</section>
<?php } ?>