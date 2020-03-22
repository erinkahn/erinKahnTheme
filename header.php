<!DOCTYPE html>
<html lang="en-US">
<head>
    <script>document.addEventListener("DOMContentLoaded",function(e){var n=0===window.orientation?window.screen.width:window.screen.height;return navigator.userAgent.indexOf("Android")>=0&&window.devicePixelRatio&&(n/=window.devicePixelRatio),[320,375,414,568,667,736,768,812,1024,1366].indexOf(n)>=0&&document.getElementsByTagName("BODY")[0].classList.add("ios"),e});</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slick.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fontawesome-all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/liq6jgo.css">
    <link rel="stylesheet" href="https://use.typekit.net/gfx6lfe.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset-min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css" type="text/css" media="all">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/favicon-96x96.png">

    <title>Erin Kahn</title>

</head>


<body class="<?php echo $page_id; ?>">

<header>
    <a class="logo" href="index.php"><img class="logo-img" src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="logo"></a>

    <span class="desktop-pages">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container' => false,
            ) );  
        ?>
        <!-- <a class="hvr-underline-from-center" href="about.php">About</a> -->
        <!-- <a class="hvr-underline-from-center" href="work.php">Work</a> -->
    </span>


    <div class="burger">
        <div></div>
        <div></div>
    </div>

    <div class="mobile-nav">
        <div class="container">
            <a class="about" href="index.php">About</a>
            <a class="work" href="work.php">Work</a>
            <a class="resume" href="resume.php">Resume</a>
            <a class="contact" href="mailto:erinnicolekahn@gmail.com">Contact</a>
        </div>
    </div>
</header>



<div class="sidebar">
    <a class="resume" href="">Resume</a>
</div>


