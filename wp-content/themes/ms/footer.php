<?php wp_footer(); ?>

<?php
	$contact_page_id = 81;

	$vk = get_metadata('post', $contact_page_id, 'wpcf-vk', true);
	$facebook = get_metadata('post', $contact_page_id, 'wpcf-facebook', true);
	$skype = get_metadata('post', $contact_page_id, 'wpcf-skype', true);
?>

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
      			<a href="<?php echo $vk ?>" target="_blank"><h3><i class="fa fa-vk"></i> ВКОНТАКТІ</h3></a>
	            <a href="<?php echo $facebook ?>" target="_blank"><h3><i class="fa fa-facebook"></i> FACEBOOK</h3></a>
	            <a href="skype:<?php echo $skype ?>?chat" target="_blank"><h3><i class="fa fa-skype"></i> SKYPE</h3></a>
	      		</div>
	        </div>
        </div>
      </div> 
    </div>
</footer>
<section class="afterfooter">
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

</body>
</html>