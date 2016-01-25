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

<?php /* ?>
<!-- MODAL PROMO POPUP -->
<div class="modal-promo">
  <div class="close-promo-btn">
    <i class="fa fa-times"></i>
  </div>
  <div class="modal-promo-img-container">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_promo_popup.jpg">
  </div>
  <div class="modal-promo-content">
    <h3>Шалена п’ятниця</h3>
    <h4>знижки на квартири до 120.000 грн.</h4>
    <p>період дії акції до 13.11.2015</p>
    <hr>
    <a href="#" id="modal-promo-link">детальніше</a>
  </div>
</div>


<!-- fxd menu -->
<div id="promo-popup">
    <div class="clearfix wrap-860 box">
        <i id="promo-popup-close-btn" class="fa fa-close"></i>
        <div id="our-promo">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img/News_2.png">
        </div>
    </div>
</div>


<script type="text/javascript">
  (function() {
    $(document).ready(function(){

      $('#promo-popup-close-btn').on('click', function(){
        $('#promo-popup').fadeOut(500);
        $('body').removeClass('blur');
        $('body').removeAttr('style');
      });

    });
  })(window.jQuery)
</script>
<?php //*/ ?>
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
        Офіс м. Львів, вул. Волошина, 6
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

<script src="<?php echo $pwd ?>js/main.js" type="text/javascript"></script>

</body>
</html>