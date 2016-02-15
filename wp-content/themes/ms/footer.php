<?php wp_footer(); ?>

<?php
  $pwd = pwd();
  $contact_page_id = 81;

  $vk = get_metadata('post', $contact_page_id, 'wpcf-vk', true);
  $facebook = get_metadata('post', $contact_page_id, 'wpcf-facebook', true);
  $skype = get_metadata('post', $contact_page_id, 'wpcf-skype', true);

    $address_lviv = get_metadata('post', $contact_page_id, 'wpcf-address-office-lviv', true);
    $address_chernivtsi = get_metadata('post', $contact_page_id, 'wpcf-address-office-chernivtsi', true);
?>


<!-- fxd menu -->
<div id="popup-box">
    <div class="clearfix wrap-860 box">
        <i id="popup-box-close-btn" class="fa fa-close"></i>
        <ul id="pop-up-list">
        <?php
            $min_hex_arg = array(
                'cat' => 7,
                'posts_per_page' => 6,
                'offset'=> 0,
                'order' => 'ASC',
            );

            query_posts($min_hex_arg);
            while (have_posts()) : the_post();
              
              $id = $post->ID;

        $camera = get_metadata('post', $id, 'wpcf-online-camera', true);

        if ( !empty($camera) ) {

                $title = $post->post_title;
          $build_address = get_metadata('post', $id, 'wpcf-building-address', true);
                
                $li = "<li id='modal-camera-$id' class='modal-block hide'>";
            $li .= "<h2 class='title'>$title хід будівництва</h2>";
            $li .= "<p class='address'>$build_address</p>";

            $li .= "<video id='my-video-$id' class='video-js vjs-default-skin' controls preload='auto' width='648' height='365' data-setup='{}'>";
                  $li .= "<source src='$camera' type='rtmp/mp4'>";
              $li .= "</video>";

          $li .= '<li>';

          echo $li;
        }

            endwhile;
        ?>
        </ul>
    </div>
</div>


<!-- fxd menu -->
<div id="contact-popup-box">
	<div class="clearfix wrap-860 box">
		<i class="fa fa-times" id="close-footer-contact-form"></i>

		<div class="col-md-6 footer-contact-form clear-both">
			<h2 class="footer_title clearfix">
				Залишились запитання?
			</h2>
			<div class="footer_text">
				Заповни форму і наш менеджер зв’яжеться з Вами <br>
				протягом 15-ти хвилин і відповість на усі Ваші запитання
			</div>
			<?php echo do_shortcode('[contact-form-7 id="57"]'); ?>
		</div>

	</div>
</div>


<?php
//Getting promo posts
//wp_reset_query();
$args = array(
    'posts_per_page'   => 1,
    'limit'            => 1,
    'offset'           => 0,
    'category'         => array(13),
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'post',
    'post_status'      => 'publish',
    'suppress_filters' => true
);

$promo = get_posts( $args );
if(!empty($promo)):
    foreach ($promo as $v):
        $v->image_url = wp_get_attachment_image_src(get_post_thumbnail_id($v->ID), 'big');
        $v->banner_title = do_shortcode('[types id='.$v->ID.' field="promo_banner_title"][/types]');
        $v->banner_content = do_shortcode('[types id='.$v->ID.' field="promo_banner_content"][/types]');
        $v->banner_image = do_shortcode('[types id='.$v->ID.' field="promo_banner_image" size="thumbnail" url="true"][/types]');
        $v->promo_end_date = do_shortcode('[types id='.$v->ID.' field="promo_end_date" format="d.m.Y"][/types]');
    endforeach;

    $promo = $promo[0];
?>
<!-- MODAL PROMO POPUP -->
<div class="modal-promo">
  <div class="close-promo-btn">
    <i class="fa fa-times"></i>
  </div>
    <?php if(!empty($promo->banner_image)): ?>
        <div class="modal-promo-img-container">
            <img src="<?php echo $promo->banner_image ?>">
        </div>
    <?php endif; ?>
  <div class="modal-promo-content">
    <h3><?php echo $promo->banner_title ?></h3>
    <h4><?php echo $promo->banner_content ?></h4>
    <p>період дії акції до <?php echo $promo->promo_end_date ?></p>
    <hr>
    <a href="#" id="modal-promo-link">детальніше</a>
  </div>
</div>


<!-- fxd menu -->
<div id="promo-popup">
    <div class="clearfix wrap-860 box">
        <i id="promo-box-close-btn" class="fa fa-close"></i>
        <div id="our-promo">
            <h2><?php echo $promo->post_title ?></h2>
            <h3><?php echo $promo->banner_title ?></h3>
            <h4><?php echo $promo->banner_content ?></h4>
            <p class="valid-until">період дії акції до <?php echo $promo->promo_end_date ?></p>
            <?php if(!empty($promo->image_url)): ?>
                <img src="<?php echo $promo->image_url[0] ?>">
            <?php endif; ?>
            <div class="promo-content"><?php echo $promo->post_content ?></div>
        </div>
    </div>
</div>
<?php endif;  ?>
<!-- END MODAL PROMO POPUP -->


<footer>
    <div class="container hidden-mb">
      <div class="wrap-860">
        <div class="row">
          <div class="col-md-6 footer-contact-form clear-both">
              <h2 class="footer_title clearfix">
                  Залишились запитання?
              </h2>
              <div class="footer_text">
                  Заповни форму і наш менеджер зв’яжеться з Вами <br>
                  протягом 15-ти хвилин і відповість на усі Ваші запитання
              </div>
              <?php echo do_shortcode('[contact-form-7 id="57"]'); ?>
          </div>
          <div class="col-md-4 col-md-offset-2">
            <div class="f_contacts">
              <h2 class="footer_title">
                контакти              
              </h2>   
              <p><span>М. ЧЕРНІВЦІ</span><?php echo $address_chernivtsi; ?></p>
              <p><span>М. ЛЬВІВ </span><?php echo $address_lviv; ?></p>
            </div>
            <div class="f_socials">
              <h2 class="footer_title">
                ми в соцмережах
              </h2>
              <a href="<?php echo $vk ?>" target="_blank"><h3><i class="fa fa-vk"></i> ВКОНТАКТІ</h3></a>
              <a href="<?php echo $facebook ?>" target="_blank"><h3><i class="fa fa-facebook"></i> FACEBOOK</h3></a>
              <a href="skype:<?php echo $skype ?>?chat" target="_blank"><h3><i class="fa fa-skype"></i> SKYPE</h3></a>
            </div>
          </div>
        </div>
      </div> 
    </div>
    <!--  -->
    <div class="container hidden-lg text-center">
      <p class="location">
        <img src="<?php echo $pwd ?>img/m_footer_location.png" alt="">
        <br>
        м. Львів, вул. Волошина, 6
      </p>
      <span class="m_telephone">
        095 231-1-231
      </span>
      <br>
      <span class="m_telephone">
        063 231-1-231
      </span>
      <a href="javascript:;" class="get_call btn_style">
        ЗАМОВИТИ ДЗВІНОК
      </a>
      <div class="m_socials clearfix">
        <div class="col-xs-4">
          <a href="<?php echo $facebook ?>" target="_blank">
            <i class="fa fa-facebook"></i> 
          </a>
        </div>
        <div class="col-xs-4">
          <a href="<?php echo $vk ?>" target="_blank">
            <i class="fa fa-vk"></i>
          </a>
        </div>
        <div class="col-xs-4">
          <a href="javascript:;" target="_blank">
            <i class="fa fa-youtube-play"></i>
          </a>
        </div>
      </div>
    </div>
</footer>

<section class="afterfooter hidden-mb">
  <div class="container">
    <div class="wrap-1024">
      <div class="pull-left">
        &copy; Девелоперська компанія "MS"
      </div>
      <div class="pull-right">
        Сайт зроблено в
        <a href="javascript:;" class="happy">hap:py</a>
      </div>
    </div>
  </div>
</section>

<div id="back-top" class="hidden-mb"></div>

<script src="<?php echo $pwd ?>js/jquery.simplemodal.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript" src="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script src="http://vjs.zencdn.net/4.11/video.js"></script>
<script src="<?php echo $pwd ?>js/main.js" type="text/javascript"></script>
</body>
</html>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo $pwd ?>fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

<link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>
<!-- <link rel="stylesheet" href="<?php echo $pwd ?>css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="<?php echo $pwd ?>style.css" rel="stylesheet">