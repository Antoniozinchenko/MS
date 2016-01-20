<?php
$img_href = do_shortcode('[types id="'.$post->id.'" field="our_projects_mobile_img" url="true"]');
$post_title = $post->post_title;

$id = $post->ID;

$site_address = get_metadata('post', $id, 'wpcf-web-site-address', true);

$camera = get_metadata('post', $id, 'wpcf-online-camera', true);

$left_apt = get_metadata('post', $id, "wpcf-left-apartments", true);
$left_sold_text = get_metadata('post', $id, 'wpcf-left-sold-apartment', true);
?>

<div class="our-projects-mob-slider-elem">
    <div>
        <img src="<?php echo $img_href; ?>" alt="">
    </div>

    <div class="container">
        <h2 id="" class="title"><?php echo $post_title; ?></h2>
        <!-- <span id="" class="count-apartment"><?php //echo $left_apt; //кількість кватир ?></span> -->
        <!-- <span id="" class="lost-apartment">
            квартир <br>
            <span id=""><?php //echo $left_sold_text //текст залишилось/продано ?></span>
        </span> -->
        <?php if(!empty($site_address)): ?>
            <a id="" class="more btn_style" href="<?php echo $site_address ?>" target="_blank" >Детальніше</a>
        <?php endif; ?>
    </div>

</div>