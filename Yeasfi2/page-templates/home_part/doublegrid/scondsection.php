<?php if (cs_get_option('ss_switcher') == 1) { ?>  
    <section  class="dblgrd-sectionB" style="clear: both;">
        <div class="container-fluid"> 
            
            <div class="row">
                 <div class="col"></div>
                 <div class="col-lg-5 col-md-12 leftimfsd"></div>
                 <div class="col-lg-3 col-md-12"> <h2 class="scondsectiontitle"><?php echo cs_get_option('dblgridbb_title') ?></h2></div>
                  <div class="col-3"></div>
            </div>
            
            <div class="row">
                <div class="col"></div>
                <div class="col-lg-5 col-md-12 leftimfsd">
                    <?php
                    $dblgridb_img = cs_get_option('dblgridb_img');
                   
                    ?>
                    <img alt="<?php echo cs_get_option('keyword'); ?> <?php echo cs_get_option('dblgrid_title'); ?> Image" src="<?php echo $dblgridb_img; ?>"  >
                </div>
                <div class="col-lg-4 col-md-12 rightsidecontent">
                   
                    <div class="row">
                        <?php
                        $group_items = cs_get_option('whychoseus');
                        if (!empty($group_items)) {
                            foreach ($group_items as $item) {
                                $link = !empty($item['whychose_1']) ? $item['whychose_1'] : '';
                                $text = !empty($item['dblgridb_title']) ? $item['dblgridb_title'] : '';
                                $mwta = cs_get_option('addresslocality');
                                echo '<div class="col-md-6 col-sm-12 col-lg-6"><div class="row botompara"><div id="" class="col-lg-4 col-md-4 col-sm-12 align-self-center whylogo"><div class="col-12 imgani" style="background: url(' . $link . ');     background-position: 0px -71px;"></div></div><div class="align-self-center col-md-8 col-lg-8 pl-lg-0 col-sm-12"><h2 class="hjuio">' . $text . '</h2></div></div></div>';
                            }
                        }
                        ?>
                    </div>
                </div>


                <div class="col-2"></div>

            </div>
        </div>
    </section>
    <?php
} else {
    
};
