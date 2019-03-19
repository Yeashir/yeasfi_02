<div id="exTab3" class="project col-12">
    <?php
    $i = 0;
    $count = 0;
    $taxonomy = 'project_categories';
    $terms = get_terms($taxonomy); // Get all terms of a taxonomy
    if ($terms && !is_wp_error($terms)) :
        ?>
        <ul class="nav nav-tabs " role="tablist">
            <li class="nav-item"> <a  class="nav-link active" href="#tab1"   data-toggle="tab">All PROJECTS</a></li>
            <?php foreach ($terms as $term) { ?>
                <li class="nav-item">                                
                    <a  class="nav-link" href="#<?php echo $term->name; ?>" id="menu-li"  data-toggle="tab"><?php echo $term->name; ?></a>                      
                </li>
            <?php } ?>
        </ul>
    <?php endif; ?>
    <?php
    $taxonomy = 'project_categories';
    $terms = get_terms($taxonomy); // Get all terms of a taxonomy
    if ($terms && !is_wp_error($terms)) :
        ?> 
        <div class="tab-content clearfix col-12">
            <div role="tabpanel" class="tab-pane active" id="tab1">
                <div id="projectall" class="owl-carousel p-0" > 
                    <?php
                    $args = array(
                        'post_type' => 'project', 'posts_per_page' => 6
                    );
                    $wp_query = new WP_Query($args);
                    while (have_posts()) : the_post();
                    $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                        ?>
                        <div class="item">
                            <img src="<?php echo $url ?>" alt="<?php the_title(); ?> <?php echo $locality; ?>"/>
                            <div class="customepostancore">  <a href="<?php echo get_permalink(); ?>">View Project </a></div>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>  

            <?php foreach ($terms as $term) { ?>
                <div role="tabpanel" class="tab-pane fade" id="<?php echo $term->name; ?>">
                    <div id="projectall<?php echo $i; ?>" class="owl-carousel p-0" > 
                        <?php
                        $args = array(
                            'post_type' => 'project', 'posts_per_page' => 6, 'tax_query' => array(array('taxonomy' => 'project_categories', 'field' => 'slug', 'terms' => array($term->slug)
                                ))
                        );
                        $wp_query = new WP_Query($args);
                        while (have_posts()) : the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                            ?>
                            <div class="item" id="">                                  
                                <img src="<?php echo $url ?>" alt="<?php the_title(); ?> <?php echo $locality; ?>"/>
                                <div class="customepostancore">  <a href="<?php echo get_permalink(); ?>">View Project </a></div>
                            </div>
                        <?php endwhile; ?>
                        <script>
                            jQuery(document).ready(function ($) {
                                $("#projectall<?php echo $count; ?>").owlCarousel({
                                    items: 4,
                                    itemsDesktop: [1199, 4],
                                    itemsDesktopSmall: [979, 4],
                                    itemsTablet: [768, 2],
                                    itemsTabletSmall: false,
                                    itemsMobile: [479, 1],
                                    singleItem: false,
                                    navigation: true,
                                    pagination: false,
                                    navigationText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"]
                                });
                            });</script>
                    </div>  
                </div>
                <?php
                $i++;
                $count++;
                ?>



            <?php } endif; ?>

    </div>

</div>
<script>
    jQuery(document).ready(function ($) {
        $("#projectall").owlCarousel({
            items: 4,
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [979, 4],
            itemsTablet: [768, 2],
            itemsTabletSmall: false,
            itemsMobile: [479, 1],
            singleItem: false,
            navigation: true,
            pagination: false,
            navigationText: ["<img src='/wp-content/themes/Yeasfi2/img/recent-project-left-arroe.png'/>", "<img src='/wp-content/themes/Yeasfi2/img/recent-project-right-arroew.png'/>"]
        });
    });

</script>

<style>
    ul.nav.nav-tabs {display: block; border: none !important; text-align: center;}
    ul.nav.nav-tabs li{min-width:150px; display: inline-block; }
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{color:#e30b00!important;background-color:transparent !important; border: none;
                                                                   background: url(/wp-content/themes/Yeasfi2/img/menu-hover.png) no-repeat center;     }
    .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover{border: none !important;}
    .nav-tabs .nav-link{font-size: 18px;   font-weight: 500; color: #000;}
</style>