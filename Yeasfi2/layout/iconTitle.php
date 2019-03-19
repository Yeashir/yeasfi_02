<?php
$meta_data = get_post_meta(get_the_ID(), 'custom_page_options', true);
$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
$locality = cs_get_option('addresslocality');
global $post;
$post_slug = $post->post_name;
?>
<div id="iconTitle<?php echo $post_slug; ?>" class="col iconTitle">
    <a class="" href="<?php echo get_permalink(); ?>">
        <div class="col-12 srv-txt">
            <div class="srvimg">
                <img src="<?php echo $meta_data['image_3']; ?>" alt="<?php the_title(); ?> <?php echo $locality; ?>"/>
            </div>
            <h2 class="white-text"><?php the_title(); ?></h2>
        </div>
    </a>
</div>


