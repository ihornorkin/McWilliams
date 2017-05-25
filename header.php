<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="description" content="">
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <!-- Fonts-->
    <!--[if lt IE 9]>
    <script src="libs/html5shiv/dist/html5shiv.js"></script><![endif]-->
    <!-- Load CSS Start-->
    <!-- script.loadCSS( "/css/header.min.css", false, "all" );
    -->
    <!--
    <script>
      loadCSS("libs/normalize-css/normalize.css", false, "all");
      loadCSS("css/styles.min.css", false, "all");
    </script>
    -->
    <!-- Load CSS End-->
    <!-- Load CSS Compilled without JS-->
    <!--
    <noscript>
      <link rel="stylesheet" href="libs/normalize-css/normalize.css">
      <link rel="stylesheet" href="css/styles.min.css">
      
    </noscript>
    -->
  </head>
  <?php wp_head(); ?>
  <body>
    <header class="l-header">
      <div class="l-header__logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo" class="l-header__logo-svg" title=""/></a>
      </div>
      <div class="l-header__menu-wrapper">
        <div class="l-header__utills">
          <div class="m-header-utils">
            <ul class="m-header-utils__list">
              <li class="m-header-utils__item"><a href="#">JOIN OUR MAILING LIST<i class="i-icon-mail"></i></a>
              </li>
              <li class="m-header-utils__item"><a href="#">SHOP WINES<i class="i-icon-arrowright"></i></a>
              </li>
              <li class="m-header-utils__item"><a href="#">SEARCH<i class="i-icon-search"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="l-header__menu">
          <nav class="m-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '', 'menu_id' => '', 'menu_class' => 'm-menu__list' ) );?>
          </nav>
        </div>
      </div>
    </header>