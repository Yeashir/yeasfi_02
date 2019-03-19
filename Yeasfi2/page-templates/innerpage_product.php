<?php
/**
 * Template Name:Product Page  Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.

 */
get_header();
?> 
<div class="tetel-inner-page">
    <div class="container">
        <div class="row">
            <div class="col-12"><h2 id="page-<?php the_ID(); ?>" class="innerpage-titel"> <?php echo the_title(); ?></h2></div>            
        </div>
    </div>
</div>

<section class="innerpage product_sec" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 inner-content-div">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                        ?>
                        <div class="post-content-innerpage">                          
                            <?php the_content(); ?>                          
                        </div>

                        <?php
                    endwhile;
                endif;
                ?>
                <?php //edit_post_link('Edit this entry.', '<p>', '</p>');     ?>
            </div>
        </div>
    </div>
</section>

<?php
?>
<section id="productsec"  class="innerpage faq-sec" >
    <div class="container">
        <div class="row">
            <div id="exTab3" class="products col-12">
                <div class="col-12"><h2 id="productsectitle" class="innerpage-titel">Products</h2></div> 
                <?php
                global $post;
                $post_slug = $post->post_name;
                $i = 0;
                $count = 0;
                $taxonomy = 'products_categories';
                $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                if ($terms && !is_wp_error($terms)) :
                    ?>
                    <ul class="nav nav-tabs row" role="tablist">
                        <!--                        <li class="nav-item"> <a  class="nav-link active" href="#tab1"   data-toggle="tab">All</a></li>-->
                        <?php foreach ($terms as $term) { ?>
                            <li class="nav-item col">                                
                                <a  class="nav-link <?php if($post_slug == $term->slug){echo 'active';} ?>" href="#<?php echo $term->name; ?>" id="menu-li"  data-toggle="tab"><?php echo $term->name; ?></a>                      
                            </li>
                        <?php } ?>
                    </ul>
                <?php endif; ?>
                <?php
                $taxonomy = 'products_categories';
                $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                
                if ($terms && !is_wp_error($terms)) :
                    ?> 
                    <div class="tab-content clearfix col-12">
                        <?php foreach ($terms as $term) { ?>
                            <div role="tabpanel" class="tab-pane  <?php if($post_slug == $term->slug){echo 'active';} ?>" id="<?php echo $term->name; ?>">
                                <div id="productsall<?php echo $i; ?>" class="row" > 
                                    <?php
                                    $args = array(
                                        'post_type' => 'products', 'posts_per_page' => 100, 'tax_query' => array(array('taxonomy' => 'products_categories', 'field' => 'slug', 'terms' => array($term->slug)
                                            ))
                                    );
                                    $wp_query = new WP_Query($args);
                                    while (have_posts()) : the_post();
                                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
                                        $prodictspice = get_post_meta(get_the_ID(), 'product_options', true);
                                        ?>
                                        <div class="productitem col-md-6 col-sm-12 col-lg-4">
                                            <div class="prdimg p-0 col-12"> <img src="<?php echo $url ?>" alt="<?php the_title(); ?> <?php echo $locality; ?>"/></div>
                                            <h2 class="prdtitle"><?php the_title(); ?></h2>
                                            <h2 class="titleproduct"><span><?php echo $prodictspice['lotno']; ?> </span>| <span><?php echo $prodictspice['make']; ?></span> | <span><?php echo $prodictspice['model']; ?></span></h2>
                                            <a class="productancore" href="<?php the_permalink(); ?>"></a>
                                        </div>
                                    <?php endwhile; ?>

                                </div>  
                            </div>
                            <?php
                            $i++;
                            $count++;
                            ?>



                        <?php } endif; ?>

                </div>

            </div>
        </div>
    </div>

</section>
<?Php get_footer('option');
?>
