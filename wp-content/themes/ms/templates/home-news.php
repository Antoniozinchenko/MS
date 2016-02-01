<?php 

/*
* Template Name: Новини
*/

$page = get_page(4);

?> 


<section class="news" id="news">
    <div class="container wrap-860">
        <h2 class="section_title text-center">
            Новини
        </h2>
        <i class="news-arrow-left slider-arrow-left fa fa-angle-left"></i>
        <i class="news-arrow-right slider-arrow-right fa fa-angle-right"></i>
        <div id="carousel-news" class="hexagon-news">
            <?php
            query_posts(array(
                'cat' => 3,
                'posts_per_page' => 16,
                'order' => 'ASC'
            ));
            while (have_posts()) : the_post(); ?>
                <div>
                    <div class="<?php echo "modal-pop-up modal-news" ?>" data-modal="<?php echo $post->ID; ?>">
                        <div class="clearfix news_skull">
                            <div class="border-box"></div>
                            <?php
                            if (has_post_thumbnail()) {
                                $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), array(200, 200));
                            } else {
                                $large_image_url = 'img/no-image.jpg';
                            }
                            ?>
                            <img src="<?php echo $large_image_url[0]; ?>" alt="">
                        </div>
                        <div class="title">
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo get_the_date('d.m.Y'); ?></p>
                        </div>

                        <div class="post-content d-none">
                            <?php echo $post->post_content; ?>
                        </div>
                    </div>
                </div>
            <?
            endwhile;
            wp_reset_postdata();
            ?>
        </div>

    </div>
</section>