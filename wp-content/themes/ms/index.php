<?php get_header(); ?>

  <section class="our_projects">
    <div class="container">
      <div class="col-md-10 col-md-offset-1">
        <h1 class="section_title">
          Наші <br> проекти
        </h1>
        <div class="top_slider">
          <ul class="slides hexagon">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li class="row-2">4</li>
            <li>5</li>
            <li>6</li>
          </ul>
          <div class="slide_image"></div>
          <div class="underimage_text">
            жк "DIAMANT"
            20 квартир залишилось
            детальніше  
          </div>
        </div>

        <div class="project_about">
          <div class="row">
            <div class="col-md-6">
              <div class="ico_wr">
                <i class="ico ico_01"></i>
              </div>
              <div class="number">
                100
              </div>
              <div class="text">
                креативних <br> ідей
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
      <div class="col-md-10 col-md-offset-1">
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
      <div class="col-md-10 col-md-offset-1">
<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=about' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post();
?>
        <h2 class="section_title">
          <?php the_title();?>
        </h2>
        <div class="top row"> </div>
        <div class="row">
          <div class="col-md-6">
            <?php the_content();?>
          </div>
<?
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>



        
          <div class="col-md-6">
            <h1>Наші останні перемоги</h1>
            <div class="row">
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
      if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail();
      } 
    ?>
      <h5><?php the_excerpt()?></h5>
      <h4><?php the_title(); ?><h4>
    </div>
<?
endwhile;
?>
            </div>
          </div>
        </div>
        <div class="bot row"> </div>
      </div>
    </div>
  </section>




  <section class="supervision horizontal_block">
    <div class="container">
      <div class="col-md-10 col-md-offset-1">
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
      <div class="col-md-10 col-md-offset-1">
        <h2 class="section_title text-center">
          наші переваги
        </h2>
        <div class="row">
          <div class="col-md-6">
            <div class="ico_wr">
              <i class="ico ico_06"></i>
            </div>
            <div class="text">
              Відеоспостереження території <br>
              та можливість перегляду <br>
              прямо із смартфону 
            </div>
          </div>  
          <div class="col-md-6">
            <div class="ico_wr">
              <i class="ico ico_05"></i>
            </div>
            <div class="text">
              Розвинена зовнішня <br>
              та внутрішня інфраструктура
            </div>
          </div> 
          <div class="col-md-6">
            <div class="ico_wr">
              <i class="ico ico_07"></i>
            </div>
            <div class="text">
              Економія впродовж життя <br>
              на комунальні послуги
            </div>
          </div> 
          <div class="col-md-6">
            <div class="ico_wr">
              <i class="ico ico_08"></i>
            </div>
            <div class="text">
              Сучасне комфортабельне <br>
              планування
            </div>
          </div> 
          <div class="col-md-6">
            <div class="ico_wr">
              <i class="ico ico_09"></i>
            </div>
            <div class="text">
              Безперебійне <br>
              електропостачання
            </div>
          </div> 
          <div class="col-md-6">
            <div class="ico_wr">
              <i class="ico ico_10"></i>
            </div>
            <div class="text">
              Чиста вода <br>
              у Вашому помешканні
            </div>
          </div> 
          <div class="col-md-6">
            <div class="ico_wr">
               <i class="ico ico_11"></i>
            </div>
            <div class="text">
              Доступна ціна
            </div>
          </div> 
          <div class="col-md-6">
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
      <div class="col-md-10 col-md-offset-1">
        <div class="title_white">
          Цегла (марка М 125)
        </div>
        <div class="text_white">
          проходить за показниками міцності при стиску та при <br> 
          згині, відповідає вимогам ДСТУ Б В.2.7-61-97 <br> <br>

          Компанія сама проводить вхідний контроль, випробування <br> 
          на марки цегли, розчину, інших буд.матеріалів, <br>
          виробів, конструкцій на відповідність перед застосуванням <br>
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
    </div>
  </section>

  <section class="windows horizontal_block">
    <div class="container">
      <div class="col-md-10 col-md-offset-1">
        <div class="text_white">
          Вікна від наших постачальників завозяться виключно з <br>
          Німеччини. Сертифікати відповідності видані на підставі <br> 
          випробувань ДП "Тернопільстандартметрологія" та акту <br> 
          обстеження виробництва. <br>
          Компанія придбала спеціальний прилад для визначення <br> 
          відповідності заявленої к-сті енергозберігаючих склопакетів <br> 
          постачальником. <a href="javascript:void(0);">Більше</a>
        </div>
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

  <section class="question_form text-center">
    <div class="container">
      <div class="col-md-10 col-md-offset-1">
        <h2 class="section_title">
          Залишились запитання?
        </h2>
        <div class="text">
          Заповни форму і наш менеджер зв’яжеться з Вами <br>
          протягом 15-ти хвилин і відповість на усі Ваші запитання
        </div> 
        <div class="row">
          <form action="" id="" class="col-md-8 col-md-offset-2">
            <input type="text" class="inp_style" placeholder="Ваше ім’я">
            <input type="tel" class="inp_style" placeholder="Телефон">
            <input type="email" class="inp_style" placeholder="E-mail">
            <input type="submit" class="btn_style" value="Відправити">
          </form>
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
        <div class="row">
          carousel slider
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="our_team">
    <div class="container">
      <h2 class="section_title">
        наша команда
      </h2>
      <div class="row">
        <svg class="svg-graphic" width="180" height="200" viewBox="0 0 560 645" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1">
          <g>
            <clipPath id="hex-mask">
                <polygon points="270,0 0,160 0,485 270,645 560,485 560,160"></polygon>
            </clipPath>
          </g>
          <a xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="javascript:;" transform="">
            <image clip-path="url(#hex-mask)" height="100%" width="100%" xlink:href="http://img07.deviantart.net/4bec/i/2015/198/0/f/oko_by_secret_mirror-d91o4mc.jpg" preserveAspectRatio="xMidYMin slice"></image>
          <figcaption></figcaption>
          </a>
        </svg>
      </div>
    </div>
  </section> -->
  
  <section class="contacts">
    <div class="container">
      <div class="col-md-10 col-md-offset-1">
        <div class="section_title">
          Контакти
        </div>
      </div>
    </div>
    <div id="map" style=" background-color: #000; color: #fff;" class="text-center">
      map 100% x 575px
    </div>
    <div class="contacts_aftermap">
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="col-md-6">
              form
            </div>
            <div class="col-md-3 col-md-offset-1">
              right
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>