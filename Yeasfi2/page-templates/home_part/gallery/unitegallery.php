<section class="gallery">
    <div class="container-fluid">
        <div class="row">             
            <div class="col-12 wow fadeInUp wHighlight animated tmcontent-block">            
                <h2 class="gal-titele comontitle"><?php echo cs_get_option('galtitle'); ?></h2> 
                <?php
                global $post;
                $args = array(
                    'post_type' => 'photo_gallery',
                    'posts_per_page' => 50,
                    'orderby' => 'ID',
                    'order' => 'ASC',
                );
                $loop = new WP_Query($args);
                ?>
                <div class="col"></div>
                <div id="galleryhome"  class="col-lg-10 col-md-12 p-0" >
                    <?php
                    while ($loop->have_posts()) : $loop->the_post();
                        $gallery = get_post_meta(get_the_ID(), 'custom_post_options', true);
                        $dfd = $gallery [gallery_1];
                        if (!empty($dfd)) {
                            $ids = explode(',', $dfd);
                            foreach ($ids as $id) {
                                 $attachment = wp_get_attachment_image_src($id, 'full');
                                $thumb = wp_get_attachment_image_src($id, 'medium');
                                ?>
                                <img alt="<?php echo cs_get_option('keyword'); ?>" src=" <?php echo  $thumb[0]; ?>" data-image="<?php echo $attachment[0]; ?>"   >
                                <?php
                            }
                        }
                    endwhile;
                    ?>
                </div>
                <div class="col"></div>
                 <a class="viewmoregal" href="<?php echo get_home_url(); ?>/gallery">View More</a>
            </div>


        </div>
    </div>
</section>