<?php 
	$img_href = wp_get_attachment_image_src(get_post_thumbnail_id(), array(750, 750));
	global $count; 

	$is_active = $count != 1 ? '' : ' active';
	$left_apt = types_render_field("left-apartments");
	$post_title = $post->post_title;

	$site_address = get_metadata('post', $post->ID, 'wpcf-web-site-address', true);
	if ( empty($site_address) ) {
		$site_address = 'javascript:void(0)';
	}

	$sold_text = get_metadata('post', $post->ID, 'wpcf-left-sold-apartment', true);
	$sold_text = $sold_text == 1 ? 'продано' : 'залишилось';
?>

<?php echo "<div id='number-apt-$count' class='smalligon $is_active' data-number='$left_apt' data-title='$post_title' data-link='$site_address' data-sold-text='$sold_text' data-next=''>" ?>
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