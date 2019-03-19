<?php
$page_items = cs_get_option('othersrvpage');
if (!empty($page_items)) {
    foreach ($page_items as $item) {
        $pgid = !empty($item['othersrvpage2']) ? $item['othersrvpage2'] : '';
        $args = array('page_id' => $pgid);
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();

            get_template_part('layout/regular', 'page');

        endwhile;
        $i++;
        $pont ++;
    }
}
?>