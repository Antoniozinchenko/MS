<?php 

/*
* Template Name: Залишились запитання?
*/

$pwd = pwd();

?> 

<section id="question-form" class="question_form parallax-window hidden-mb" data-parallax="scroll" data-image-src="<?php echo $pwd ?>css/images/5.jpg">
    <div class="wrap-860 clearfix display-flex">
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
        <div class="col-left consultant">
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
</section>