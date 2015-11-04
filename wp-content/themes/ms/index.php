<?php get_header(); ?>
<?php $pwd = pwd(); ?>

    <section class="our_projects">
        <div class="container">
            <div class="wrap-860">
                <h1 class="section_title">
                    Наші <br> проекти
                </h1>

                <div class="top_slider">

                    <div id="small-top-hexagon" class="clearfix">


                        <div class="line clearfix first">
                            <?php

                                $count = 0;
                                $min_hex_limit = 3;
                                $min_hex_arg = array(
                                    'cat' => 7,
                                    'posts_per_page' => $min_hex_limit,
                                    'offset'=> 0,
                                    'order' => 'ASC',
                                );

                                $big_hex_img;
                                $big_hex_title;
                                $big_hex_count_apt;
                                $big_hex_link;

                                query_posts($min_hex_arg);
                                while (have_posts()) : the_post();
                                    $count++;

                                    if( empty($big_hex_img) ) {
                                        $img_href = wp_get_attachment_image_src(get_post_thumbnail_id(), array(500, 500));
                                        $big_hex_img = $img_href[0];
                                    }
                                    if( empty($big_hex_title) ) $big_hex_title = $post->post_title;
                                    if( empty($big_hex_count_apt) ) $big_hex_count_apt = types_render_field("left-apartments");
                                    if( empty($big_hex_link) ) $big_hex_link = get_the_permalink($post->ID);

                                    get_template_part( 'svg', 'hexagon' );
                                endwhile;
                            ?>
                        </div>
                        <div class="line clearfix second">
                            <?php
                                $min_hex_arg['offset'] += $min_hex_limit;

                                query_posts($min_hex_arg);
                                while (have_posts()) : the_post();
                                    $count++;
                                    get_template_part( 'svg', 'hexagon' );
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
                            <span class="lost-apartment">квартир <br>залишилось</span>
                            <a id="big-hex-link" class="more" href="<?php echo $big_hex_link; ?>">Детальніше</a>
                        </div>
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
                                25
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
                                170
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
                                2080
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
                                288
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

    <section class="preparing horizontal_block">
        <div class="container">
            <div class="wrap-860">
                <div class="title_white">
                    Підготовка до проектування
                </div>
                <div class="text_white">
                    Перед початком проектуванням запланованого будівництва <br>
                    ми опираємось на такі результати: лабораторні дослідження <br>
                    фізико-механічних властивостей грунтів, склад грунтів, <br>
                    відомості інженерних - геологічних виробок - свердловин, <br>
                    топографічна зйомка з усіма інженерними мережами <br>
                    та відмітками тощо
                </div>
            </div>
        </div>
    </section>


    <section class="about_company">
        <div class="container">
            <div class="wrap-860">
                <?php
                // query for the about page
                $your_query = new WP_Query(array(
                    'p' => 58,
                    'posts_per_page' => 1
                ));
                // "loop" through query (even though it's just one page)
                while ($your_query->have_posts()) :
                $your_query->the_post();
                ?>
                <h2 class="section_title">
                    <?php the_title(); ?>
                </h2>

                <div class="about-company-pefix">
                    <div class="col-md-6 about-1">
                        <?php the_excerpt(); ?>
                        <div style="display:none">
                            <div id="full-content-<?php the_ID();?>"><?php the_content(); ?></div>
                        </div>
                        <a href="#full-content-<?php the_ID(); ?>" rel= "<?php the_ID(); ?>" class="fancybox read-more-popup"> Більше</a>
                    </div>
                    <?
                    endwhile;
                    // reset post data (important!)
                    wp_reset_postdata();
                    ?>
                    <div class="col-md-6 about-2">
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
                                <?php
                                if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                                    the_post_thumbnail();
                                }
                                ?>
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


    <section class="supervision horizontal_block">
        <div class="container">
            <div class="wrap-860">
                <div class="title_white">
                    Авторський нагляд
                </div>
                <div class="text_white">
                    Здійснюється під час будівництва <br>
                    та після введення в експлуатацію
                </div>
            </div>
        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <div class="wrap-860">
                <h2 class="section_title text-center">
                    наші переваги
                </h2>

                <div class="row">
                    <div class="col-md-6 cel-left">
                        <div class="ico_wr">
                            <i class="ico ico_06"></i>
                        </div>
                        <div class="text">
                            Відеоспостереження території <br>
                            та можливість перегляду <br>
                            прямо із смартфону
                        </div>
                    </div>
                    <div class="col-md-6 cel-right">
                        <div class="ico_wr">
                            <i class="ico ico_05"></i>
                        </div>
                        <div class="text">
                            Розвинена зовнішня <br>
                            та внутрішня інфраструктура
                        </div>
                    </div>
                    <div class="col-md-6 cel-left">
                        <div class="ico_wr">
                            <i class="ico ico_07"></i>
                        </div>
                        <div class="text">
                            Економія впродовж життя <br>
                            на комунальні послуги
                        </div>
                    </div>
                    <div class="col-md-6 cel-right">
                        <div class="ico_wr">
                            <i class="ico ico_08"></i>
                        </div>
                        <div class="text">
                            Сучасне комфортабельне <br>
                            планування
                        </div>
                    </div>
                    <div class="col-md-6 cel-left">
                        <div class="ico_wr">
                            <i class="ico ico_09"></i>
                        </div>
                        <div class="text">
                            Безперебійне <br>
                            електропостачання
                        </div>
                    </div>
                    <div class="col-md-6 cel-right">
                        <div class="ico_wr">
                            <i class="ico ico_10"></i>
                        </div>
                        <div class="text">
                            Чиста вода <br>
                            у Вашому помешканні
                        </div>
                    </div>
                    <div class="col-md-6 cel-left">
                        <div class="ico_wr">
                            <i class="ico ico_11"></i>
                        </div>
                        <div class="text">
                            Доступна ціна
                        </div>
                    </div>
                    <div class="col-md-6 cel-right">
                        <div class="ico_wr">
                            <i class="ico ico_12"></i>
                        </div>
                        <div class="text">
                            Власна паркова зона
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brick horizontal_block">
        <div class="container">
            <div class="wrap-860">
                <div class="title_white">
                    Цегла (марка М 125)
                </div>
                <div class="text_white">
                    проходить за показниками міцності при стиску та при <br>
                    згині, відповідає вимогам ДСТУ Б В.2.7-61-97 <br> <br>

                    Компанія сама проводить вхідний контроль, випробуван- <br>
                    ня на марки цегли, розчину, інших буд.матеріалів, ви- <br>
                    робів, конструкцій на відповідність перед застосуванням <br>
                    їх на будовах.
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
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
                        <div class="border-box"></div>
                        <?php
                        if (has_post_thumbnail()) {
                            $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), array(200, 200));
                        } else {
                            $large_image_url = 'img/no-image.jpg';
                        }
                        ?>
                        <img src="<?php echo $large_image_url[0]; ?>" alt="">
                        <h4 class="title"><?php the_title(); ?>
                            <p><?php echo get_the_date('d.m.Y'); ?></p>
                        </h4>
                    </div>
                <?
                endwhile;
                wp_reset_postdata();
                ?>
            </div>

        </div>
    </section>

    <section class="windows horizontal_block">
        <div class="container">
            <div class="wrap-860">
                <div class="text_white">
                    Вікна від наших постачальників завозяться виключно з <br>
                    Німеччини. Сертифікати відповідності видані на підставі <br>
                    випробувань ДП "Тернопільстандартметрологія" та акту <br>
                    обстеження виробництва. <br>
                    Компанія придбала спеціальний прилад для визначення <br>
                    відповідності заявленої к-сті енергозберігаючих склопа- <br>
                    кетів постачальником. <a href="javascript:void(0);">Більше</a>
                </div>
            </div>
        </div>
    </section>

    <section class="news articles">
        <div class="container">
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
                        <div class="border-box"></div>
                        <?php
                        if (has_post_thumbnail()) {
                            $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), array(200, 200));
                        } else {
                            $large_image_url[0] = 'img/no-image.jpg';
                        }
                        ?>
                        <img src="<?php echo $large_image_url[0]; ?>" alt="">
                        <h4 class="title"><?php the_title(); ?>
                            <p><?php echo get_the_date('d.m.Y'); ?></p>
                        </h4>
                    </div>
                <?
                endwhile;

                wp_reset_postdata();
                ?>
            </div>

        </div>
    </section>
    <!--
    <section class="gallery">
      <div class="container">
        <h2 class="section_title">
          Галерея
        </h2>
      </div>
    </section>
    -->

    <section id="question-form" class="question_form">
        <div class="container">
            <div class="wrap-860">
                <div class="row">
                    <div class="col-left">
                        <h2 class="section_title">
                            Залишились<br>
                            запитання?
                        </h2>
                        <div class="text">
                            Заповни форму і наш менеджер зв’яжеться з Вами <br>
                            протягом 15-ти хвилин і відповість на усі Ваші запитання
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="57"]'); ?>
                    </div>
                    <div class="col-md-5 consultant">
                        <img src="<?php echo $pwd ?>img/consultant.png" alt="">
                        <div class="consultant_info text-center">
                            <p>
                                Галина Найда
                                <br>
                                <span>персональний консультант</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                        <div class="hexagon-left" style="background: url('<?php echo $img_url[0]; ?>') 50% 0 no-repeat;height:100%;background-size:contain;">
                                            <?php /* ?><img src="<?php echo $img_url[0]; ?>" alt=""><?php //*/ ?>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <h4 class><?php the_title(); ?></h4>
                                        <?php
                                        $position = types_render_field("human-position");
                                        if( !empty($position) ) {
                                            echo "<div class='position-humen'>$position</div>";
                                        }
                                        ?>
                                        <div class="discription">
                                            <?php echo get_the_excerpt(); ?>
                                            <a href="#full-content-<?php the_ID(); ?>" rel= "<?php the_ID(); ?>" class="fancybox read-more-popup"> більше</a>
                                            <div style="display:none">
                                                <div id="full-content-<?php the_ID();?>"><?php the_content(); ?></div>
                                            </div>
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

    <section class="our_team">
        <div class="container">
            <div class="wrap-860">
                <h2 class="section_title">
                    наша команда
                </h2>
                <ul class="tabs pull-right clearfix">
                    <li class="tab active contact-tab-btn" data-tab="contacons-lviv">м. Львів</li>
                    <li class="tab contact-tab-btn" data-tab="contacons-chernivci">м. Чернівці</li>
                </ul>
                <div class="row">
                </div>
                <div class="contacons contacons-lviv">
                    <div class="line first clearfix">
                        <div class="contacon">
                            <svg class="svg-graphic" width="245" height="250" viewBox="0 0 245 250" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                <g>
                                    <clipPath id="hex-mask_worker">
                                        <polygon points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" />
                                    </clipPath>
                                </g>
                                <a xlink:href="javascript:void(0);">
                                    <polygon fill="#fff" points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" transform="" />
                                    <image clip-path="url(#hex-mask_worker)" height="100%" width="100%" xlink:href="<?php echo $pwd ?>img/ira_senuk.png" preserveAspectRatio="xMidYMin slice" />
                                    <p class="worker_pre">
                                        <span class="name">
                                            Іра Сеник
                                        </span>
                                        <span class="position">
                                            персональний консультант
                                        </span>
                                    </p>
                                    <p class="worker_post">
                                        <span class="mail">
                                            ira@ms-bud.com.ua
                                        </span>
                                        <span class="number">
                                            067 231 00 22
                                        </span>
                                        <span class="get_call">
                                            замовити дзвінок
                                        </span>
                                    </p>
                                </a>
                            </svg>
                            <div class="contacon_fake"></div>
                        </div>
                        <div class="contacon">
                            <svg class="svg-graphic" width="245" height="250" viewBox="0 0 245 250" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                <g>
                                    <clipPath id="hex-mask_worker">
                                        <polygon points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" />
                                    </clipPath>
                                </g>
                                <a xlink:href="javascript:void(0);">
                                    <polygon fill="#fff" points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" transform="" />
                                    <image clip-path="url(#hex-mask_worker)" height="100%" width="100%" xlink:href="<?php echo $pwd ?>img/galia_peskova.png" preserveAspectRatio="xMidYMin slice" />
                                    <p class="worker_pre">
                                        <span class="name">
                                            Галя Пєскова
                                        </span>
                                        <span class="position">
                                            персональний консультант
                                        </span>
                                    </p>
                                    <p class="worker_post">
                                        <span class="mail">
                                            galya@ms-bud.com.ua
                                        </span>
                                        <span class="number">
                                            095 231 12 31
                                        </span>
                                        <span class="get_call">
                                            замовити дзвінок
                                        </span>
                                    </p>
                                </a>
                            </svg>
                            <div class="contacon_fake"></div>
                        </div>
                        <div class="contacon">
                            <svg class="svg-graphic" width="245" height="250" viewBox="0 0 245 250" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                <g>
                                    <clipPath id="hex-mask_worker">
                                        <polygon points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" />
                                    </clipPath>
                                </g>
                                <a xlink:href="javascript:void(0);">
                                    <polygon fill="#fff" points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" transform="" />
                                    <image clip-path="url(#hex-mask_worker)" height="100%" width="100%" xlink:href="<?php echo $pwd ?>img/vasyl_savchuk.png" preserveAspectRatio="xMidYMin slice" />
                                    <p class="worker_pre">
                                        <span class="name">
                                            Василь Савчук
                                        </span>
                                        <span class="position">
                                            персональний консультант
                                        </span>
                                    </p>
                                    <p class="worker_post">
                                        <span class="mail">
                                            savchuk@ms-bud.com.ua
                                        </span>
                                        <span class="number">
                                            097 321 00 77
                                        </span>
                                        <span class="get_call">
                                            замовити дзвінок
                                        </span>
                                    </p>
                                </a>
                            </svg>
                            <div class="contacon_fake"></div>
                        </div>
                    </div>
                    <div class="line second clearfix">
                        <div class="contacon">
                            <svg class="svg-graphic" width="245" height="250" viewBox="0 0 245 250" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                <g>
                                    <clipPath id="hex-mask_worker">
                                        <polygon points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" />
                                    </clipPath>
                                </g>
                                <a xlink:href="javascript:void(0);">
                                    <polygon fill="#fff" points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" transform="" />
                                    <image clip-path="url(#hex-mask_worker)" height="100%" width="100%" xlink:href="<?php echo $pwd ?>img/nadia_lukashuk.png" preserveAspectRatio="xMidYMin slice" />
                                    <p class="worker_pre">
                                        <span class="name">
                                            Надія Лукащук
                                        </span>
                                        <span class="position">
                                            заступник керівника відділу продажу
                                        </span>
                                    </p>
                                    <p class="worker_post">
                                        <span class="mail">
                                            hello@ms-bud.com.ua
                                        </span>
                                        <span class="number">
                                            067 673 67 10
                                        </span>
                                        <span class="get_call">
                                            замовити дзвінок
                                        </span>
                                    </p>
                                </a>
                            </svg>
                            <div class="contacon_fake"></div>
                        </div>
                        <div class="contacon">
                            <svg class="svg-graphic" width="245" height="250" viewBox="0 0 245 250" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                <g>
                                    <clipPath id="hex-mask_worker">
                                        <polygon points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" />
                                    </clipPath>
                                </g>
                                <a xlink:href="javascript:void(0);">
                                    <polygon fill="#fff" points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" transform="" />
                                    <image clip-path="url(#hex-mask_worker)" height="100%" width="100%" xlink:href="<?php echo $pwd ?>img/birma_zaharova.png" preserveAspectRatio="xMidYMin slice" />
                                    <p class="worker_pre">
                                        <span class="name">
                                            Бірма Захарова
                                        </span>
                                        <span class="position">
                                            керівник відділу <br> продажу
                                        </span>
                                    </p>
                                    <p class="worker_post">
                                        <span class="mail">
                                            ms@ms-bud.com.ua
                                        </span>
                                        <span class="number">
                                            (032) 26 01 333
                                        </span>
                                        <span class="get_call">
                                            замовити дзвінок
                                        </span>
                                    </p>
                                </a>
                            </svg>
                            <div class="contacon_fake"></div>
                        </div>
                    </div>
                </div>
                <div class="contacons contacons-chernivci" style="display:none;">
                    <div class="line first clearfix">
                        <div class="contacon contacon_before">
                            <svg class="svg-graphic" width="245" height="250" viewBox="0 0 245 250" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                <g>
                                    <clipPath id="hex-mask_worker">
                                        <polygon points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" />
                                    </clipPath>
                                </g>
                                <a xlink:href="javascript:void(0);">
                                    <polygon fill="#fff" points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" transform="" />
                                    <image clip-path="url(#hex-mask_worker)" height="100%" width="100%" xlink:href="<?php echo $pwd ?>img/sviatoslav_lucushun.png" preserveAspectRatio="xMidYMin slice" />
                                    <p class="worker_pre">
                                        <span class="name">
                                            Святослав Луцишин
                                        </span>
                                        <span class="position">
                                           керівник відділу <br> продажу
                                        </span>
                                    </p>
                                    <p class="worker_post">
                                        <span class="mail">
                                            sv@ms-bud.com.ua
                                        </span>
                                        <span class="number">
                                            050 430 33 34
                                        </span>
                                        <span class="get_call">
                                            замовити дзвінок
                                        </span>
                                    </p>
                                </a>
                            </svg>
                            <div class="contacon_fake"></div>
                        </div>
                        <div class="contacon">
                            <svg class="svg-graphic" width="245" height="250" viewBox="0 0 245 250" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                <g>
                                    <clipPath id="hex-mask_worker">
                                        <polygon points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" />
                                    </clipPath>
                                </g>
                                <a xlink:href="javascript:void(0);">
                                    <polygon fill="#fff" points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" transform="" />
                                    <image clip-path="url(#hex-mask_worker)" height="100%" width="100%" xlink:href="<?php echo $pwd ?>img/irina_romanuk.png" preserveAspectRatio="xMidYMin slice" />
                                    <p class="worker_pre">
                                        <span class="name">
                                            Ірина Романюк
                                        </span>
                                        <span class="position">
                                            заступник керівника <br>
                                            відділу продажу
                                        </span>
                                    </p>
                                    <p class="worker_post">
                                        <span class="mail">
                                            iryna@ms-bud.com.ua
                                        </span>
                                        <span class="number">
                                            098 231 77 00
                                        </span>
                                        <span class="get_call">
                                            замовити дзвінок
                                        </span>
                                    </p>
                                </a>
                            </svg>
                            <div class="contacon_fake"></div>
                        </div>
                        <div class="contacon">
                            <svg class="svg-graphic" width="245" height="250" viewBox="0 0 245 250" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                <g>
                                    <clipPath id="hex-mask_worker">
                                        <polygon points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" />
                                    </clipPath>
                                </g>
                                <a xlink:href="javascript:void(0);">
                                    <polygon fill="#fff" points="123,0 0,67 0,183 123,250 245,183 245,67 123,0" transform="" />
                                    <image clip-path="url(#hex-mask_worker)" height="100%" width="100%" xlink:href="<?php echo $pwd ?>img/galina_nayda.png" preserveAspectRatio="xMidYMin slice" />
                                    <p class="worker_pre">
                                        <span class="name">
                                            Галина Найда
                                        </span>
                                        <span class="position">
                                            персональний <br> консультант
                                        </span>
                                    </p>
                                    <p class="worker_post">
                                        <span class="mail">
                                            gn@ms-bud.com.ua
                                        </span>
                                        <span class="number">
                                            050 430 93 33
                                        </span>
                                        <span class="get_call">
                                            замовити дзвінок
                                        </span>
                                    </p>
                                </a>
                            </svg>
                            <div class="contacon_fake"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fake"></div>
    </section>

    <section class="contacts">
          <div id="map"></div>
    </section>

<?php get_footer(); ?>