<?php 
	$img_href = wp_get_attachment_image_src(get_post_thumbnail_id(), array(500, 500));
	global $count; 

	$is_active = $count != 1 ? '' : ' active';
	$left_apt = types_render_field("left-apartments");
	$post_title = $post->post_title;

	$id = $post->ID;

	$site_address = get_metadata('post', $id, 'wpcf-web-site-address', true);
	if ( empty($site_address) ) {
		$site_address = 'noset';
	}

	$camera = get_metadata('post', $id, 'wpcf-online-camera', true);
	if ( empty($camera) ) {
		$camera = 'noset';
	}

	$sold_text = get_metadata('post', $id, 'wpcf-left-sold-apartment', true);
	//$sold_text = $sold_text == 1 ? 'продано' : 'залишилось';
?>

<?php echo "<div id='number-apt-$count' class='smalligon $is_active' data-number='$left_apt' data-id=$id data-camera='$camera' data-title='$post_title' data-link='$site_address' data-soldText='$sold_text' data-next=''>" ?>
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
            <span class="hint"><?php echo $post_title ?></span>
	    </a>
	</svg>


	<?php unset($count); ?>

</div>