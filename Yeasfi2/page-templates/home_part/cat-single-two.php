<?php
$catid = cs_get_option('catidtwo');
$catslug = cs_get_option('catslugtwo');
?>

<section class="cat-single-two">
    <div class="container">
        <div class="row">  
            <div class="col-lg-6 col-md-12 pl-lg-0"> <h2 class="cat-title"><?php echo cs_get_option('cattitletwo'); ?></h2></div>
            <div class="col-lg-6 col-md-12 ">
                <div class="outline-sec">
                    <a href="/<?php echo $catslug; ?>" class="sectioncall">View All</a>
                </div>
            </div>
        </div>
        <div class="row">  
            <div id="exTab3" class="col-lg-12 col-md-12 bhoechie-tab-container ">
                <?php
                $i = 0;
                $wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'orderby' => 'ASC', 'parent' => $catid,));
                ?>
                <div class="row tabrow">
                    <div class="col-6 catmenubg">
                        <ul class="nav nav-tabs " role="tablist">                        
                            <?php
                            foreach ($wcatTerms as $wcatTerm) {
                                ?>
                                <li class="nav-item">                                
                                    <a  class="nav-link" href="#<?php echo $wcatTerm->slug; ?>" id="menu-li"  data-toggle="tab"><?php echo $wcatTerm->name; ?></a>                      
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div id="allp" role="tabpanel" class="tab-pane  active" >
                            <div id="" class="col-12" >                           
                                <div id="<?php $catname ?>" class="bhoechie-tab-content ">
                                    <?php echo do_shortcode('[product_category category="' . $catslug . '" columns="2" per_page="4"]') ?>
                                </div> 
                            </div>
                        </div>

                        <?php foreach ($wcatTerms as $wcatTerm) {
                            ?>
                            <div id="<?php echo $wcatTerm->slug; ?>" role="tabpanel" class="tab-pane fade" >
                                <div id="" class="col-12" >                           
                                    <div id="<?php $catname ?>" class="bhoechie-tab-content">
                                        <?php echo do_shortcode('[product_category category="' . $wcatTerm->slug . '" columns="2" per_page="4"]') ?>
                                    </div> 
                                </div>
                            </div>
                            <?php $i++;
                        }
                        ?>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
