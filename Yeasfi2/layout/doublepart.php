<?php
$meta_data = get_post_meta(get_the_ID(), 'custom_page_options', true);
$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
$locality = cs_get_option('addresslocality');
?>
<?php
global $post;
$post_slug = $post->post_name;
//var_dump(  $post_slug );
?>
<div id="<?php echo $post_slug ?>" class="col-4 p-0 doublepartstyle align-self-center">
    <a class="" href="<?php echo get_permalink(); ?>">
        <div class="col-12 srv-txt">
            <div class="srvimg">
                <img src="<?php echo $meta_data['image_2']; ?>" alt="<?php the_title(); ?> <?php echo $locality; ?>"/>
            </div>
            <div class="srvtext col-12 align-self-center">

                <h2 class="white-text"><?php the_title(); ?></h2>
                
            </div>
        </div>
    </a>
</div>



