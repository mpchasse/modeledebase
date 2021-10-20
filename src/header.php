<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">


    <!-- Stylesheets -->

    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/main.css">

    <script src="<?php echo bloginfo('template_url'); ?>/js/script.js"></script>

    <?php wp_head(); ?>
</head>
<body>

<!-- Loader - Nécessaire dans toutes vos pages -->
<div id="preloder">
    <div class="loader"></div>
</div>


<!-- Header Début -->


<header>
    <div class="waveWrapper waveAnimation">

        <div class="waveWrapperInner">
            <div class="wave wave1"></div>
        </div>
        <div class="waveWrapperInner">
            <div class="wave wave2"></div>
        </div>
    </div>

    <nav>
<!--------------------------------------MENU hamburger------------------------------------------------------------------------->
        <span class='menuhamburger'>
        <label for="show-menu" class="show-menu">
            <img class="iconemenu" src="<?php echo bloginfo('template_url'); ?>/images/menu.png"                                                                                                                                                          alt="menu"></label></div>
                <input type="checkbox" id="show-menu" class="toggle-menu">
        </span>


<div class='navbar'>
        <!--------------------------------------MENU------------------------------------------------------------------------->
        <?php wp_nav_menu(array(
                'theme_location' => 'menu_principal')
        ); ?>
        <!--        <ul>-->
        <!--            <li class=""><a href="index.html">Accueil</a></li>-->
        <!--            <li class=""><a href="template-projets.html">Projets</a></li>-->
        <!--            <li class=""><a href="template-apropos.html">À propos</a></li>-->
        <!--            <li class=""><a href="template-contact.html">Contact</a></li>-->
        <!--        </ul>-->

</div>

    </nav>

    <div class="logotype">

        <img src="<?php the_field('mpc_logotype', 'option'); ?>" alt="Logotype MPC"/>



    </div>


</header>

<!-- Header Fin -->

<div class="wrapper">

    <div class="hero">
        <img class="logotitre" src="<?php echo bloginfo('template_url'); ?>/images/logotitre.png"/>