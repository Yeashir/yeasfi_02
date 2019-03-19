<?php  $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail'));
 ?>
<div id="content" class=" item  blog_content"> 
    <div class="blog-tnumb col-12 post-bl">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo $url; ?>" alt="<?php echo cs_get_option('keyword'); ?> <?php the_title(); ?> "/>
        </a>
        <div class="row">
            <div class="titel-blog col-lg-8 col-md-12">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <div class="blogtext col-12"><?php echo wp_trim_words(get_the_content(), 8); ?> </div>
            </div>                                         
        </div>
    </div> 
</div>
<style>
    .titel-blog {margin-top: -192px; background: #fff;}
    .titel-blog a {font-size: 20px;color: #000;margin: 17px 0; display: inline-block; text-transform: uppercase; text-align: left; margin-left: 20px;}
    .titel-blog a:after {content: ""; border-bottom: 1px solid #000; width:80px; display: block; margin-left:-20px; margin-top: 15px;}
    .blogtext { font-size: 18px; color: #000;    padding-left: 20px !important;}
</style>
