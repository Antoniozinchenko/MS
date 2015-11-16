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

            <div class="top_slider">

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

                            // $big_hex_img;
                            // $big_hex_title;
                            // $big_hex_count_apt;
                            // $big_hex_link;

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
                                    //$site_address = get_the_permalink($post->ID);
                                    $site_address = get_metadata('post', $post->ID, 'wpcf-web-site-address', true);
                                    $big_hex_link = empty($site_address)  ? 'javascript:void(0)' : $site_address;
                                }
  
                                get_template_part( 'templates/svg', 'hexagon' );
                            endwhile;
                        ?>
                    </div>
                    <div class="line clearfix second">
                        <?php
                            $min_hex_arg['offset'] += $min_hex_limit;

                            query_posts($min_hex_arg);
                            while (have_posts()) : the_post();
                                $count++;
                                get_template_part( 'templates/svg', 'hexagon' );
                            endwhile;
                        ?>
                    </div>

                </div>

                <div class="pre_slide">
                    <a href="javascript:void(0)" class="camera">
                        <span>вебкамера</span>   
                    </a>
                    <div class="content">
                        <h2 id="big-hex-title" class="title"><?php echo $big_hex_title; ?></h2>
                        <span id="big-hex-count" class="count-apartment"><?php echo $big_hex_count_apt; ?></span>
                        <span id="lost-apartment" class="lost-apartment">
                            квартир <br>
                            <span id="lost-apartment-text"><?php echo $big_hex_count_text ?></span>
                        </span>
                        <a id="big-hex-link" class="more" href="<?php echo $big_hex_link; ?>" target="_blank" >Детальніше</a>
                    </div>
                    <div id="remains" class="remains <?php echo $big_hex_count_apt != 0 ? 'hide' : '' ?>"></div>
                    <i id="next-appartmen-btn" class="fa fa-angle-right next-appartmen"></i>
                </div>
                <div class="slide_image">
                    <svg class="svg-graphic" width="488" height="497" viewBox="0 0 488 497" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                        <g>
                            <clipPath id="hex-mask">
                                <polygon points="244 0 0 130 0 350 244 497 497 350 497 130 244 0" />
                            </clipPath>
                        </g>

                        <a xlink:href="javascript:void(0);">
                            <polygon fill="#fff" points="244 0 0 130 0 350 244 497 497 350 497 130 244 0" transform="translate(1, 1)" />
                            <image clip-path="url(#hex-mask)" height="100%" width="100%" xlink:href="<?php echo $big_hex_img; ?>" preserveAspectRatio="xMidYMin slice" />
                        </a>
                    </svg>
                </div>
            </div>

            <div class="project_about">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ico_wr">
                            <i class="ico ico_01"></i>
                        </div>
                        <div class="number">
                            <?php echo get_metadata('post', $page_id, 'wpcf-architects-designers', true); ?>
                        </div>
                        <div class="text">
                            архітекторів-
                            <br> 
                            проектантів  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ico_wr">
                            <i class="ico ico_02"></i>
                        </div>
                        <div class="number">
                            <?php echo get_metadata('post', $page_id, 'wpcf-experts', true); ?>
                        </div>
                        <div class="text">
                            фахівців
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ico_wr">
                            <i class="ico ico_03"></i>
                        </div>
                        <div class="number">
                            <?php echo get_metadata('post', $page_id, 'wpcf-hours-planning', true); ?>
                        </div>
                        <div class="text">
                            годин <br> проектування
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ico_wr">
                            <i class="ico ico_04"></i>
                        </div>
                        <div class="number">
                            <?php echo get_metadata('post', $page_id, 'wpcf-happily-families', true); ?>
                        </div>
                        <div class="text">
                            щасливих <br> сімей
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>