<?php 

/*
* Template Name: Відгуки
*/

$page = get_page(4);

?> 

<section class="feedback">
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <h2 class="section_title text-center">
                Відгуки
            </h2>

            <div class="text text-center">
                Взнайте більше про нас словами наших клієнтів
            </div>
            <div class="row carousel-wrap">
                <i class="feedback-arrow-left slider-arrow-left fa fa-angle-left"></i>
                <i class="feedback-arrow-right slider-arrow-right fa fa-angle-right"></i>
                <div id="carousel-feedback" class="hexagon-feedback">
                    <?php
                    query_posts(array(
                        'cat' => 4,
                        'posts_per_page' => 10,
                        'order' => 'DESC'
                    ));
                    while (have_posts()) : the_post(); ?>
                        <div>
                            <div class="center-content">
                                <?php
                                if (has_post_thumbnail()) {
                                    $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(), array(200, 200));
                                } else {
                                    $img_url[0] = 'img/no-image.jpg';
                                }
                                ?>
                                <div class="hexagon-wrap hexagon-right">
                                    <div class="hexagon-left" style="background: url('<?php echo $img_url[0]; ?>') 50% 0 no-repeat;min-height:100%;background-size:100% auto;">
                                        <?php /* ?><img src="<?php echo $img_url[0]; ?>" alt=""><?php //*/ ?>
                                    </div>
                                </div>
                                <div class="pre-content"></div>
                                <div class="content-box">
                                    <h4 class><?php the_title(); ?></h4>
                                    <?php
                                        $position = types_render_field("human-position");
                                        if( !empty($position) ) echo "<div class='position-humen'>$position</div>";
                                    ?>
                                    <div class="discription">
                                        <div class="short-discription"><?php echo get_the_excerpt(); ?></div>
                                        <div class="full-discription"><?php the_content(); ?></div>
                                        <a href="javascript:void(0)" class="read-more-btn" data-more="більше" data-less="менше">більше</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>