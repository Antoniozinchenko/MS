<?php wp_footer(); ?>

<footer>
    <div class="container">
        <div class="col-md-6 col-md-offset-2">
            <h2 class="footer_title">
                Залишились запитання?
            </h2>

            <div class="text">
                Заповни форму і наш менеджер зв’яжеться з Вами <br>
                протягом 15-ти хвилин і відповість на усі Ваші запитання
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php echo do_shortcode('[contact-form-7 id="57"]'); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <h2 class="footer_title">
                    КОНТАКТИ
                </h2>
                <h4 class="orange-caption">
                    М. ЧЕРНІВЦІ
                </h4>
                <h4>
                    ВУЛ. РУСЬКА, 1А
                </h4>
                <h4 class="orange-caption">
                    М. ЛЬВІВ
                </h4>
                <h4>
                    М. ЛЬВІВ, ВУЛ. ВОЛОШИНА, 5
                </h4>

                <div class="socials">
                    <h2 class="footer_title">
                        МИ В СОЦМЕРЕЖАХ
                    </h2>
                    <a href="javascript:void(0)"><h3><i class="fa fa-vk"></i> ВКОНТАКТІ</h3></a>
                    <a href="javascript:void(0)"><h3><i class="fa fa-facebook"></i> FACEBOOK</h3></a>
                    <a href="javascript:void(0)"><h3><i class="fa fa-youtube"></i> YOUTUBE</h3></a>

                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</footer>

<script>
    jQuery(document).ready(function () {

        function initialize() {
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: new google.maps.LatLng(49.843374988638054, 24.03210762888193),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            var map = new google.maps.Map(mapCanvas, mapOptions);

            var image = '<?php echo pwd(); ?>img/markerTop.png';
            console.log(image);
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