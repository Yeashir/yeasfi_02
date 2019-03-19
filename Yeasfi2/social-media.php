<ul class="social-sec p-0">
    <?php
    $group_items = cs_get_option('socialmediaa');
    if (!empty($group_items)) {

        foreach ($group_items as $item) {
            //var_dump( $item );// has title
            $link = !empty($item['smolink']) ? $item['smolink'] : '';
            $icon = !empty($item['smicon']) ? $item['smicon'] : '';
            $title = !empty($item['smotitle']) ? $item['smotitle'] : '';
            $imagesm = !empty($item['smimg']) ? $item['smimg'] : '';
            $socialimg = wp_get_attachment_image_src($imagesm, 'full');
            $imagesmhov = !empty($item['smimghv']) ? $item['smimghv'] : '';
            $socialimghov = wp_get_attachment_image_src($imagesmhov, 'full');

            if (!empty($icon)) {
                echo '<li><a  target="_blank" href="' . $link . '">  <i class="' . $icon . '"> </i> <span class="smtitle"></span> </a></li>';
            } else {
                echo '<li><a  target="_blank" href="' . $link . '"> <img class="socialimg" src="' . $socialimg[0] . '" alt="' . $mwta . '|' . $title . '"/>  </a></li>';
            }
        }
    }
    ?>
</ul>
