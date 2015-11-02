<?php $pwd = pwd(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--title-->
    <title>Будівельна компанія MS</title>

    <!--CSS-->
    <link href="<?php echo $pwd ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $pwd ?>css/reset.css" rel="stylesheet">
    <link href="<?php echo $pwd ?>css/application.css" rel="stylesheet">
    <link href="<?php echo $pwd ?>css/poligons.css" rel="stylesheet">
    <link href="<?php echo $pwd ?>css/backgrounds.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="<?php echo $pwd ?>style.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <!-- JS -->
    <script src="<?php echo $pwd ?>js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo $pwd ?>js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo $pwd ?>js/jquery.simplemodal.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>



<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo $pwd ?>fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $pwd ?>fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>




    <script src="<?php echo $pwd ?>js/main.js" type="text/javascript"></script>

</head>
<body>

<header>
    <div class="container">
        <div class="wrap-860">
            <a href="javascript:void(0);" class="logo pull-left">
                <img src="<?php echo $pwd ?>img/logo.png" alt="">
            </a>

            <div class="contacts pull-left">
                <p>
                    <span class="number">
                        (095) 231 11 00
                    </span>
                    <span class="city"> м.Львів</span></p>

                <p>
                    <span class="number">
                        (098) 231 77 00
                    </span>    
                    <span class="city"> м.Чернівці</span></p>
            </div>
            <div id="nav-main-box" class="pull-right">
                <a href="javascript:;" class="btn_menu"></a>
                <ul></ul>
            </div>
        </div>
    </div>
</header>