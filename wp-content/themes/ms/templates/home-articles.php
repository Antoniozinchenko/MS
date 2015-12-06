<?php 

/*
* Template Name: Новини
*/

$page = get_page(4);

?> 

<section class="news articles">
    <div class="container wrap-860">
        <h2 class="section_title text-center">
            Статті
        </h2>
        <i class="articles-arrow-left slider-arrow-left fa fa-angle-left"></i>
        <i class="articles-arrow-right slider-arrow-right fa fa-angle-right"></i>
        <div id="carousel-articles" class="hexagon-news">
            <?php
            query_posts(array(
                'cat' => 5,
                'posts_per_page' => 16,
                'order' => 'ASC'
            ));
            while (have_posts()) : the_post(); ?>
                <div>
                    <div class="modal-pop-up modal-article" data-modal="<?php echo $post->ID; ?>">
                        <div class="border-box"></div>
                        <?php
                        if (has_post_thumbnail()) {
                            $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), array(200, 200));
                        } else {
                            $large_image_url[0] = 'img/no-image.jpg';
                        }
                        ?>
                        <img src="<?php echo $large_image_url[0]; ?>" alt="">
                        <div class="title">
                            <h4>
                                <?php
                                    $title = get_the_title();
                                    $max_length = 40;
                                    if(mb_strlen($title) > $max_length ) {
                                        $title = substr($title, 0, $max_length) . '...';
                                    }
                                    echo $title;
                                ?>
                            </h4>
                            <p><?php echo get_the_date('d.m.Y'); ?></p>
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