<?php
$img_href = wp_get_attachment_image_src(get_post_thumbnail_id(), array(500, 500));
$post_title = $post->post_title;

$id = $post->ID;

$site_address = get_metadata('post', $id, 'wpcf-web-site-address', true);

$camera = get_metadata('post', $id, 'wpcf-online-camera', true);

$left_apt = get_metadata('post', $id, "wpcf-left-apartments", true);
$left_sold_text = get_metadata('post', $id, 'wpcf-left-sold-apartment', true);
?>

<div class="our-projects-mob-slider-elem">
    <div>
        <img src="<?php echo $img_href[0]; ?>" alt="">
    </div>

<!--    <svg class="svg-graphic" width="95" height="96" viewBox="0 0 95 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">-->
<!--        <g>-->
<!--            <clipPath id="hex-mask_small">-->
<!--                <polygon points="47,0 0,27 0,70 47,96 95,70 95,27 47,0" />-->
<!--            </clipPath>-->
<!--        </g>-->
<!--        <a xlink:href="javascript:void(0);">-->
<!--            <polygon fill="#fff" points="47,0 0,27 0,70 47,96 95,70 95,27 47,0" transform="" />-->
<!--            <image clip-path="url(#hex-mask_small)" height="100%" width="100%" xlink:href="--><?php //echo $img_href[0]; ?><!--" preserveAspectRatio="xMidYMin slice" />-->
<!--        </a>-->
<!--    </svg>-->

    <!--  ^^^^^^^^^^^^^Розкоментувати буде SVG^^^^^^^^^^^^^^  -->

    <div class="container">
        <h2 id="" class="title"><?php echo $post_title; ?></h2>
        <span id="" class="count-apartment"><?php echo $left_apt; //кількість кватир ?></span>
        <span id="" class="lost-apartment">
            квартир <br>
            <span id=""><?php echo $left_sold_text //текст залишилось/продано ?></span>
        </span>
        <?php if(!empty($site_address)): ?>
            <a id="" class="more" href="<?php echo $site_address ?>" target="_blank" >Детальніше</a>
        <?php endif; ?>

        <?php if(!empty($camera)): ?>
            <div class="pre_slide">
                <a id="big-hex-camera" href="javascript:void(0)" data-modal="" class="camera modal-pop-up">
                    <span>вебкамера</span>
                </a>
            </div>
        <?php endif; ?>
    </div>

</div>