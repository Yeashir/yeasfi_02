<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
?>
<div id="content" class=" item  blog_content"> 
    <div class="blog-tnumb col-12 post-bl">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo $url; ?>" alt="<?php echo cs_get_option('keyword'); ?> <?php the_title(); ?> "/>
        </a>
        <div class="row">
            <div class="titel-blog col-lg-12 col-md-12">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <div class="blogtext"><?php echo wp_trim_words(get_the_content(), 30); ?> </div>
                <div class="admininfo"><?php echo get_the_date(' F j, Y'); ?></div>
            </div>                                         
        </div>
    </div> 
</div>
<style>
    .titel-blog a { font-size:25px; color: #000; font-weight:500; margin: 20px 0; display: block;}
    .blogtext {font-size: 18px;}
    .admininfo { padding: 10px 0;}
</style>