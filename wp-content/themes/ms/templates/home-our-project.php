<?php 

/*
* Template Name: Наші проекти
*/

$page_id = 70;
$page = get_page($page_id);

?> 

<section class="our_projects">
    <div class="container">
        <div class="wrap-860">
            <h1 class="section_title">
                <?php echo $page->post_title ?>
            </h1>

            <!-- MOBILE SLIDER START -->
            <div class="mobile-slider-our-projects">
                <i class="mobile-slider-our-projects-arrow-left slider-arrow-left fa fa-angle-left"></i>
                <i class="mobile-slider-our-projects-arrow-right slider-arrow-right fa fa-angle-right"></i>
                <div id="mobile-slider-our-projects-container">

                    <?php
                    $count = 0;
                    $min_hex_limit = 10;
                    $min_hex_arg = array(
                        'cat' => 7,
                        'posts_per_page' => $min_hex_limit,
                        'offset'=> 0,
                        'order' => 'ASC',
                    );
                    wp_reset_query();
                    query_posts($min_hex_arg);
                    while(have_posts()) : the_post();
                        get_template_part('templates/mobile', 'home-svg-hexagon');
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
            </div>
            <!-- MOBILE SLIDER END -->

            <div class="top_slider hidden-mb">

                <div id="small-top-hexagon" class="clearfix">


                    <div class="line clearfix first">
                        <?php

                            global $count;
                            $count = 0;
                            $min_hex_limit = 3;
                            $min_hex_arg = array(
                                'cat' => 7,
                                'posts_per_page' => $min_hex_limit,
                                'offset'=> 0,
                                'order' => 'ASC',
                            );

                            query_posts($min_hex_arg);
                            while (have_posts()) : the_post();
                                $count++;

                                if( empty($big_hex_img) ) {
                                    $img_href = wp_get_attachment_image_src(get_post_thumbnail_id(), array(500, 500));
                                    $big_hex_img = $img_href[0];
                                }
                                if( empty($big_hex_title) ) $big_hex_title = $post->post_title;
                                if( empty($big_hex_count_apt) ) $big_hex_count_apt = types_render_field("left-apartments");
                                if( empty($big_hex_count_text) ) $big_hex_count_text = types_render_field("left-sold-apartment");
                                
                                if( empty($big_hex_link) ) {
                                    $site_address = get_metadata('post', $post->ID, 'wpcf-web-site-address', true);
                                    empty($site_address)  ? $big_hex_class = 'hide' : $big_hex_link = $site_address;
                                }

                                if ( empty($big_hex_camera) ) {
                                    $camera = get_metadata('post', $post->ID, 'wpcf-online-camera', true);

                                    if( empty($camera) ) {
                                        $camera_class = 'hide';
                                        $camera = 'noset';
                                    } else {
                                        $big_hex_camera = $camera;
                                    }
                                }
  
                                get_template_part('templates/home', 'svg-hexagon');
                            endwhile;
                        ?>
                    </div>
                    <div class="line clearfix second">
                        <?php
                            $min_hex_arg['offset'] += $min_hex_limit;

                            query_posts($min_hex_arg);
                            while (have_posts()) : the_post();
                                $count++;
                                get_template_part('templates/home', 'svg-hexagon');
                            endwhile;
                        ?>
                    </div>

                </div>

                <div class="pre_slide">
                    <a id="big-hex-camera" href="javascript:void(0)" data-modal="" class="camera modal-pop-up <?php echo $camera_class ?>">
                        <span>вебкамера</span>   
                    </a>
                    <div class="content">
                        <h2 id="big-hex-title" class="title"><?php echo $big_hex_title; ?></h2>
                        <span id="big-hex-count" class="count-apartment"><?php echo $big_hex_count_apt; ?></span>
                        <span id="lost-apartment" class="lost-apartment">
                            квартир <br>
                            <span id="lost-apartment-text"><?php echo $big_hex_count_text ?></span>
                        </span>
                        <a id="big-hex-link" class="more <?php echo $big_hex_class ?>" href="<?php echo $big_hex_link ?>" target="_blank" >Детальніше</a>
                    </div>
                    <div id="remains" class="remains <?php echo $big_hex_count_apt != 0 ? 'hide' : '' ?>"></div>
                    <i id="next-appartmen-btn" class="fa fa-angle-right next-appartmen"></i>
                </div>
                <div class="slide_image">
                    <svg class="svg-graphic" width="488" height="497" viewBox="0 0 488 497" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                        <g>
                            <clipPath id="hex-mask">
                                <polygon points="244 0 0 139 0 341 244 497 497 341 497 139 244 0" />
                            </clipPath>
                        </g>

                        <a xlink:href="javascript:void(0);">
                            <polygon fill="#fff" points="244 0 0 139 0 341 244 497 497 341 497 139 244 0" transform="translate(1, 1)" />
                            <image clip-path="url(#hex-mask)" height="100%" width="100%" xlink:href="<?php echo $big_hex_img; ?>" preserveAspectRatio="xMidYMin slice" />
                        </a>
                    </svg>
                </div>
            </div>

            <ul class="project_about clearfix">
                <li>
                    <div class="ico_wr">
                        <i class="ico ico_01"></i>
                    </div>
                    <div class="clearfix">
                        <div class="number">
                            <?php echo get_metadata('post', $page_id, 'wpcf-architects-designers', true); ?>
                        </div>
                        <div class="text">
                            архітекторів-
                            <br> 
                            проектантів  
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ico_wr">
                        <i class="ico ico_02"></i>
                    </div>
                    <div class="clearfix">
                        <div class="number">
                            <?php echo get_metadata('post', $page_id, 'wpcf-experts', true); ?>
                        </div>
                        <div class="text">
                            фахівців
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ico_wr">
                        <i class="ico ico_03"></i>
                    </div>
                    <div class="clearfix">
                        <div class="number">
                            <?php echo get_metadata('post', $page_id, 'wpcf-hours-planning', true); ?>
                        </div>
                        <div class="text">
                            годин <br> проектування
                        </div>
                    </div>
                </li>
                <li>
                    <div class="ico_wr">
                        <i class="ico ico_04"></i>
                    </div>
                    <div class="clearfix">
                        <div class="number">
                            <?php echo get_metadata('post', $page_id, 'wpcf-happily-families', true); ?>
                        </div>
                        <div class="text">
                            щасливих <br> сімей
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>