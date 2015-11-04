<?php 
	$img_href = wp_get_attachment_image_src(get_post_thumbnail_id(), array(750, 750));
	global $count; 

	$is_active = $count != 1 ? '' : ' active';
	$left_apt = types_render_field("left-apartments");

?>

<div id="number-apt-<?php echo $count?>" class="smalligon<?php echo $is_active ?>" data-number="<?php echo $left_apt ?>" data-title='<?php echo $post->post_title ?>' data-link="<?php echo get_the_permalink($post->ID) ?>" data-next="">
	<svg class="svg-graphic" width="95" height="96" viewBox="0 0 95 96" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
	    <g>
	        <clipPath id="hex-mask_small">
	            <polygon points="47,0 0,27 0,70 47,96 95,70 95,27 47,0" />
	        </clipPath>
	    </g>
	    <a xlink:href="javascript:void(0);">
	        <polygon fill="#fff" points="47,0 0,27 0,70 47,96 95,70 95,27 47,0" transform="" />
	        <image clip-path="url(#hex-mask_small)" height="100%" width="100%" xlink:href="<?php echo $img_href[0]; ?>" preserveAspectRatio="xMidYMin slice" />
	        <p class="smalligon_mask"><?php echo $count ?></p>
	    </a>
	</svg>


	<?php unset($count); ?>

</div>