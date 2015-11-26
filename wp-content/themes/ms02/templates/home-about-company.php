<?php 

/*
* Template Name: Про компанію
*/

$page = get_page(4);

?> 

<section class="about_company">
    <div class="container">
        <div class="wrap-860">
            <h2 class="section_title">
                <?php echo $page->post_title ?>
            </h2>

            <div class="about-company-pefix">
                <div class="about-1">

                    <div class="company_describe">
                        <div class="describe_pre">
                            <?php echo get_metadata('post', 4, 'wpcf-short-description', true); ?>
                        </div>
                        <div class="describe_full">   
                            <?php echo $page->post_content ?>
                        </div>   
                        <a href="javascript:void(0);" class="btn_detailed" data-more="Більше" data-less="Менше">Більше</a>
                    </div>
                    
                </div>
                <div class="about-2">
                    <h2>Наші останні нагороди:</h2>

                    <?php
                    query_posts(array(
                        'cat' => 2,
                        'posts_per_page' => 2,
                        'order' => 'ASC'
                    ));
                    while (have_posts()) : the_post();
                        ?>
                        <div class="col-md-6 text-center">
                            <?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?>
                            <div class="border">
                                <h5><?php the_excerpt() ?></h5>
                                <h4 class="orange-caption"><?php the_title(); ?></h4>
                            </div>
                        </div>
                    <?
                    endwhile;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>