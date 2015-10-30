<?php
$pwd = pwd();
?>
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
    <link href="<?php echo $pwd ?>css/application.css" rel="stylesheet">
    <link href="<?php echo $pwd ?>css/backgrounds.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="<?php echo $pwd ?>style.css" rel="stylesheet">

    <!-- JS -->
    <script src="<?php echo $pwd ?>js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="<?php echo $pwd ?>js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="<?php echo $pwd ?>js/main.js" type="text/javascript"></script>

</head>
<body>
<?php wp_head();?>

<header>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <a href="javascript:;" class="logo pull-left">
                <img src="<?php echo $pwd ?>img/logo.png" alt="">
            </a>

            <div class="contacts pull-left">
                <p>(095) 231 11 00<span> м.Львів</span></p>

                <p>(098) 231 77 00<span> м.Чернівці</span></p>
            </div>
        </div>
    </div>
</header>