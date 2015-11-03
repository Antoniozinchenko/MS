<?php wp_footer(); ?>

<footer>
    <div class="container">
    	<div class="wrap-860">
    		<div class="row">
	        <div class="col-md-6">
	            <h2 class="footer_title">
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
		      		<p><span>М. ЧЕРНІВЦІ</span>ВУЛ. РУСЬКА, 1А</p>
	        		<p><span>М. ЛЬВІВ </span>М. ЛЬВІВ, ВУЛ. ВОЛОШИНА, 5</p>
	      		</div>
	      		<div class="f_socials">
	      			<h2 class="footer_title">
	      				ми в соцмережах
	      			</h2>
      			<a href="https://vk.com/club97751232"><h3><i class="fa fa-vk"></i> ВКОНТАКТІ</h3></a>
	            <a href="https://www.facebook.com/ms.budimperial"><h3><i class="fa fa-facebook"></i> FACEBOOK</h3></a>
	            <a href="skype:ms-bud.com.ua?chat"><h3><i class="fa fa-skype"></i> YOUTUBE</h3></a>
	      		</div>
	        </div>
        </div>
      </div> 
    </div>
</footer>
<div class="afterfooter">
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
</div>

<script>
    jQuery(document).ready(function () {

        function initialize() {
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: new google.maps.LatLng(49.843374988638054, 24.03210762888193),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,

				disableDefaultUI: false,
				scrollwheel: false,
				draggable: true
            };

            var map = new google.maps.Map(mapCanvas, mapOptions);

            var image = '<?php echo pwd(); ?>img/markerTop.png';
            var marker = new google.maps.Marker({
                position: mapOptions.center,
                map: map,
                icon: image
            });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
   
    });

</script>


</body>
</html>