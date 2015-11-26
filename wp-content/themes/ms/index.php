<?php get_header(); ?>
<?php $pwd = pwd(); ?>
<?php
    $contact_page_id = 81;

    $marker_lviv = get_metadata('post', $contact_page_id, 'wpcf-marker-office-lviv', true);
    $marker_chernivtsi = get_metadata('post', $contact_page_id, 'wpcf-marker-office-chernivtsi', true);
?>

    <?php get_template_part( 'templates/home', 'our-project' ); ?>

    <section class="preparing horizontal_block parallax-window" data-parallax="scroll" data-image-src="<?php echo $pwd ?>css/images/1.jpg">
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

    <section class="supervision horizontal_block parallax-window" data-parallax="scroll" data-image-src="<?php echo $pwd ?>css/images/2.jpg">
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

    <section class="brick horizontal_block parallax-window" data-parallax="scroll" data-image-src="<?php echo $pwd ?>css/images/3.jpg">
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

    <section class="windows horizontal_block parallax-window" data-parallax="scroll" data-image-src="<?php echo $pwd ?>css/images/4.jpg">
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

    <section class="our_team">
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
                <div class="contacons contacons-chernivtsi" style="display:none;">
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
        <div id="map" class="map"></div>
    </section>

<?php get_footer(); ?>