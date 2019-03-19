<?php
$meta_data = get_post_meta(get_the_ID(), 'custom_page_options', true);
$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
$locality = cs_get_option('addresslocality');
$slug = get_post_field( 'post_name', get_post() );

?>
<div id="regulerstyle" class="<?php echo cs_get_option('srvgrid'); ?> regulerstyle <?php  echo $slug;?>">
    <div class="col-12 outline-sec">
    <a class="" href="<?php echo get_permalink(); ?>">
        <div class="col-12 srv-txt">
            <div class="srvimg">
                <img src="<?php echo $meta_data['image_2']; ?>" alt="<?php the_title(); ?> <?php echo $locality; ?>"/>
            </div>
            <h2 class="white-text"><?php the_title(); ?></h2>
            <div class="srvtext"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></div>
        </div>
    </a>
    </div>
</div>
