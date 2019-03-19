
<section  class="dblgrd-sectionD" style="clear: both;">
    <div class="container"> 
        <div class="row justify-content-center">
                <?php
                $group_items = cs_get_option('forthsectionimg');                
                if (!empty($group_items)) {
                    foreach ($group_items as $item) {                      
                        $link = !empty($item['forthsection_1']) ? $item['forthsection_1'] : '';    
                         $title = !empty($item['gropitemname']) ? $item['gropitemname'] : '';  
                        $mwta = cs_get_option('keyword');                        
                            echo '<div id="" class="col-lg-2 col-md-3 col-6 comlogo"><img src="'.  $link .'" alt="'.  $title.'|' .$mwta.'"/></div>';
                    }
                }
                ?>
            </div>           
        </div>
    </div>
</section>
