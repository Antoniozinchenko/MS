<?php get_header(); ?>
<?php $pwd = pwd(); ?>
<?php
$contact_page_id = 81;

$marker_lviv = get_metadata('post', $contact_page_id, 'wpcf-marker-office-lviv', true);
$marker_chernivtsi = get_metadata('post', $contact_page_id, 'wpcf-marker-office-chernivtsi', true);


//MS INIT BACKGROUNDS

//217
//220
//223
//226
//229

$parallax = [];
$img_url = wp_get_attachment_url( get_post_thumbnail_id(217));
$parallax[0] = empty($img_url) ? 'http://ms-bud.com.ua/wp-content/themes/ms/css/images/1.jpg' : $img_url;

$img_url = wp_get_attachment_url( get_post_thumbnail_id(220));
$parallax[1] = empty($img_url) ? 'http://ms-bud.com.ua/wp-content/themes/ms/css/images/2.jpg' : $img_url;

$img_url = wp_get_attachment_url( get_post_thumbnail_id(223));
$parallax[2] = empty($img_url) ? 'http://ms-bud.com.ua/wp-content/themes/ms/css/images/3.jpg' : $img_url;

$img_url = wp_get_attachment_url( get_post_thumbnail_id(226));
$parallax[3] = empty($img_url) ? 'http://ms-bud.com.ua/wp-content/themes/ms/css/images/4.jpg' : $img_url;

$img_url = wp_get_attachment_url( get_post_thumbnail_id(229));
$parallax[4] = empty($img_url) ? 'http://ms-bud.com.ua/wp-content/themes/ms/css/images/5.jpg' : $img_url;

//MS INIT OUR TEAM


$our_team = [];

$args = array(
    'posts_per_page'   => 5,
    'limit'            => 5,
    'offset'           => 0,
    'category'         => 11,
    'orderby'          => 'date',
    'order'            => 'ASC',
    'post_type'        => 'post',
    'post_status'      => 'publish',
    'suppress_filters' => true
);

$our_team['lviv'] = get_posts( $args );


foreach ($our_team['lviv'] as $v):
    $v->employee_position = do_shortcode('[types id='.$v->ID.' field="employee_position"][/types]');
    $v->employee_email = do_shortcode('[types id='.$v->ID.' field="employee_email"][/types]');
    $v->employee_phone = do_shortcode('[types id='.$v->ID.' field="employee_phone"][/types]');
    $v->photo = wp_get_attachment_url( get_post_thumbnail_id($v->ID));
endforeach;


$args = array(
    'posts_per_page'   => 5,
    'limit'            => 5,
    'offset'           => 0,
    'category'         => 12,
    'orderby'          => 'date',
    'order'            => 'ASC',
    'post_type'        => 'post',
    'post_status'      => 'publish',
    'suppress_filters' => true
);

$our_team['chernivtsi'] = get_posts( $args );


foreach ($our_team['chernivtsi'] as $v):
    $v->employee_position = do_shortcode('[types id='.$v->ID.' field="employee_position"][/types]');
    $v->employee_email = do_shortcode('[types id='.$v->ID.' field="employee_email"][/types]');
    $v->employee_phone = do_shortcode('[types id='.$v->ID.' field="employee_phone"][/types]');
    $v->photo = wp_get_attachment_url( get_post_thumbnail_id($v->ID));
endforeach;

?>

    <?php get_template_part( 'templates/home', 'our-project' ); ?>

    <section class="preparing horizontal_block parallax-window hidden-mb" data-parallax="scroll" data-image-src="<?php echo $parallax[0] ?>">
        <div class="container hide">
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

    <?php get_template_part( 'templates/home', 'about-company' ); ?>
    
    <!-- mobile -->
    <section class="question_form_mobile hidden-lg">
        <img src="<?php echo $pwd ?>img/mobile_form.png" alt="" class="visible-mb-480 img-responsive">
        <div class="container">
            <h2 class="section_title">
                замов дзвінок
            </h2>
            <p>
                Замовте дзвінок і наш менеджер
                <br>
                зв’яжеться з Вами протягом
                <br>
                15-ти хилин
            </p>
            <a href="javascript:;" class="btn_style get_call">
                замовити дзвінок
            </a>
        </div>
    </section>

    <section class="recent_awards_mobile hidden-lg">
        <div class="container">
            <h2 class="section_title">
                останні нагороди
            </h2>

            <i class="rewards-mobile-arrow-left slider-arrow-left fa fa-angle-left"></i>
            <i class="rewards-mobile-arrow-right slider-arrow-right fa fa-angle-right"></i>

            <div id="our-rewards-mobile-slider">
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
        <div class="ra_bot"></div>
    </section>
    <!--  -->

    <section class="supervision horizontal_block parallax-window hidden-mb" data-parallax="scroll" data-image-src="<?php echo $parallax[1] ?>" >
        <div class="container hide">
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

	<?php get_template_part( 'templates/home', 'our-advantages' ); ?>

    <section class="brick horizontal_block parallax-window hidden-mb" data-parallax="scroll" data-image-src="<?php echo $parallax[2] ?>">
        <div class="container hide">
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
    
    <?php get_template_part( 'templates/home', 'news' ); ?>

    <section class="windows horizontal_block parallax-window hidden-mb" data-parallax="scroll" data-image-src="<?php echo $parallax[3] ?>">
        <div class="container hide">
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

    <?php get_template_part( 'templates/home', 'articles' ); ?>

    <?php get_template_part( 'templates/home', 'question-form' ); ?>

    <?php get_template_part( 'templates/home', 'feedback' ); ?>

    <section class="our_team hidden-mb">
        <div class="container">
            <div class="wrap-860">
                <h2 class="section_title">
                    наша команда
                </h2>
                <ul class="tabs pull-right clearfix">
                    <li class="tab active contact-tab-btn" data-tab="lviv" data-lon="49.8358245" data-lat="24.031111099999976" data-icon="<?php echo $marker_lviv ?>">м. Львів</li>
                    <li class="tab contact-tab-btn" data-tab="chernivtsi" data-lon="48.29240329885312" data-lat="25.93664886429906" data-icon="<?php echo $marker_chernivtsi ?>">м. Чернівці</li>
                </ul>
                <div class="row">
                </div>
                <div class="contacons contacons-lviv">
                    <?php
                    $i = 0;
                    foreach($our_team['lviv'] as $v ): ?>
                        <?php
                        $i++;
                        if($i == 1) {
                            echo '<div class="line first clearfix">';
                        }
                        if($i == 4){
                            echo '<div class="line second clearfix">';
                        }

                        set_query_var('our_team', $v);
                        get_template_part('templates/our', 'team-element');

                         if($i == 3 || $i == 5) {
                            echo '</div>';
                        } ?>
                    <?php endforeach; ?>
                </div>
                <div class="contacons contacons-chernivtsi" style="display:none;">
                    <?php
                    $i = 0;
                    foreach($our_team['chernivtsi'] as $v ): ?>
                        <?php
                        $i++;
                        if($i == 1) {
                            echo '<div class="line first clearfix">';
                        }
                        if($i == 4){
                            echo '<div class="line second clearfix">';
                        }

                        set_query_var('our_team', $v);
                        get_template_part('templates/our', 'team-element');

                        if($i == 3 || $i == 5) {
                            echo '</div>';
                        } ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="fake"></div>
    </section>

    <section class="contacts relative-contacts">
        <h2 class="section_title visible-mb">
            Розташування
        </h2>
        <div class="maps-navigation">
            <i class="hidden-lg maps-navigation-arrow-left slider-arrow-left fa fa-angle-left slick-arrow" style="display: block;"></i>
            <i class="hidden-lg maps-navigation-arrow-right slider-arrow-right fa fa-angle-right slick-arrow" style="display: block;"></i>
            <div class="navigation-elements">
                <div data-city="1" data-tab="lviv" data-lon="49.8358245" data-lat="24.031111099999976" data-icon="<?php echo $marker_lviv ?>" >Львів</div>
                <div data-city="2" data-tab="chernivtsi" data-lon="48.29240329885312" data-lat="25.93664886429906" data-icon="<?php echo $marker_chernivtsi ?>">Чернівці</div>
            </div>
        </div>
        <div class="set-route-form" id="set-route-form">
            <i class="fa fa-times" id="route-form-close"></i>
            <input type="text" class="inp_style clear-both set-route-form-input" id="set-route-form-input" placeholder="Введіть початкову адресу">
            <div class="text-center text set-route-form-text">Або</div>
            <a href="javascript:;" class="btn_style set-route-form-btn" id="get-geolocation-btn">Прокласти маршрут з поточного місця</a>
        </div>
        <div id="map" data-city="1" class="map"></div>
        <a href="javascript:;" class="btn_style get_route get_route_form">прокласти маршрут</a>
    </section>

<?php get_footer(); ?>