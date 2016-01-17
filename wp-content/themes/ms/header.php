<?php $pwd = pwd(); ?>
<?php $get_hd = get_hd(); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/png" href="<?php echo $pwd ?>img/favicon.png"/>
    <link rel="apple-touch-icon" href="<?php echo $pwd ?>img/favicon_apple.png"/>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--title-->
    <title>Будівельна компанія MS</title>

    <!--CSS-->
    <link href="<?php echo $pwd ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="<?php echo $pwd ?>fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />

    <link rel="stylesheet" href="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

    <link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">

    <link href="<?php echo $pwd ?>css/reset.css" rel="stylesheet">
    <link href="<?php echo $pwd ?>css/application.css" rel="stylesheet">
    <link href="<?php echo $pwd ?>css/poligons.css" rel="stylesheet">
    <link href="<?php echo $pwd ?>css/backgrounds.css" rel="stylesheet">
    <link href="<?php echo $pwd ?>css/mobile.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css"/>
    <!-- <link rel="stylesheet" href="<?php echo $pwd ?>css/font-awesome.min.css"> -->
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
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
    <script src="<?php echo $pwd ?>js/parallax.min.js"></script>

    <script type="text/javascript" src="<?php echo $pwd ?>fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="<?php echo $pwd ?>fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script src="http://vjs.zencdn.net/4.11/video.js"></script>
    
</head>
<body>

<header>
    <div class="container">
        <div class="wrap-860 clearfix">
            <a href="<?php echo $get_hd; ?>" class="logo pull-left">
                <img src="<?php echo $pwd ?>img/logo.png" alt="">
            </a>

            <?php 
                $contact_page_id = 81;
                $tel_lviv = get_metadata('post', $contact_page_id, 'wpcf-tel-number-office-lviv', true);
                $tel_chernivtsi = get_metadata('post', $contact_page_id, 'wpcf-tel-number-office-chernivtsi', true);
            ?>

            <div class="contacts pull-left hidden-mb">
                <p>
                    <span class="number">
                        <?php echo $tel_lviv; ?>
                    </span>
                    <span class="city"> м.Львів</span></p>

                <p>
                    <span class="number">
                        <?php echo $tel_chernivtsi; ?>
                    </span>    
                    <span class="city"> м.Чернівці</span></p>
            </div>
            <div id="nav-main-box" class="pull-right">
                <?php // wp_nav_menu( array('menu' => 'menu' )); ?>

                <div class="nav-menu-btn"><i></i></div>
                
            </div>
        </div>
    </div>
</header>

<!-- fxd menu -->
<div id="fixed-menu">
    <div class="clearfix wrap-860 box">
        <i id="nav-menu-close-btn" class="fa fa-close"></i>
        <div class="menus_wrap clearfix">
            <ul id="nav-menu"></ul>
            <div id="nav-our-projects">
                <h3>Наші проекти</h3>
                <ul>
                    <?php
                    query_posts('cat=7&posts_per_page=6&order=ASC');
                    while (have_posts()) : the_post();
                        ?>
                        <li><a href="<?php echo get_the_permalink($post->ID) ?>"><?php the_title(); ?></a></li>
                    <?
                    endwhile;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>