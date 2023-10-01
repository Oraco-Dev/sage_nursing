<?php

$headerHomeMenu = array(
  'menu' => 'Home - Header',
  // Specify the menu name here
  'menu_class' => 'header__inner-menu-item',
  'menu_id' => 'header__inner-menu',

);

$headerBookStaffMenu = array(
  'menu' => 'Book Staff - Header',
  // Specify the menu name here
  'menu_class' => 'header__inner-menu-item',
  'menu_id' => 'header__inner-menu',

);

$headerAboutMenu = array(
  'menu' => 'About - Header',
  // Specify the menu name here
  'menu_class' => 'header__inner-menu-item',
  'menu_id' => 'header__inner-menu',

);

$headerWorkForUsMenu = array(
  'menu' => 'Work For Us - Header',
  // Specify the menu name here
  'menu_class' => 'header__inner-menu-item',
  'menu_id' => 'header__inner-menu',

);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="author" content="Oraco Agency">
  <!-- ADD CONTENT -->
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sage Nursing Agency</title>
  <?php wp_head(); ?>
</head>

<body>

  <div id="custom-modal" class="modal">
    <div class="modal__content">
      <span class="close-modal-button">&times;</span>
      <div class="modal__content-col one">
        <img src="" class="modal__content-staffimg" />
        <a href="" class="modal__content-link">
          <span class="alternate-text">
            CONNECT
          </span>
          <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Vector-2-1.svg" alt="Linked In - Logo"
            class="modal__content-liimg" />
        </a>
      </div>
      <div class="modal__content-col two">
        <h3 class="modal__content-stafftitle"></h3>
        <span class="alternate-text modal__content-staffrole">

        </span>
        <span class="alternate-text modal__content-staffcode">

        </span>
        <p class="modal__content-staffabout"></p>
      </div>
      <div class="modal__content-col three">
        <p class="modal__content-favourites">
          Favourites
        </p>
        <div class="modal__content-info">
          <div class="modal__content-info-row one">
            <div class="modal__content-info-row-head">
              <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Layer_1.svg" alt="Martini - Icon"
                class="modal__content-info-row-head-icon" />
              <p class="modal__content-info-row-head-title">
                Drink
              </p>
            </div>
            <p class="modal__content-info-row-content modal__content-staffdrink"></p>
          </div>
          <div class="modal__content-info-row two">
            <div class="modal__content-info-row-head">
              <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/CINEMA.svg" alt="Movie - Icon"
                class="modal__content-info-row-head-icon" />
              <p class="modal__content-info-row-head-title">
                Movie
              </p>
            </div>
            <p class="modal__content-info-row-content modal__content-staffmovie"></p>
          </div>
          <div class="modal__content-info-row three">
            <div class="modal__content-info-row-head">
              <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Layer_1-1.svg" alt="Business - Icon"
                class="modal__content-info-row-head-icon" />
              <p class="modal__content-info-row-head-title">
                Local Business
              </p>
            </div>
            <p class="modal__content-info-row-content modal__content-staffbusiness"></p>
          </div>
          <div class="modal__content-info-row four">
            <div class="modal__content-info-row-head">
              <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/Illustration.svg" alt="Food - Icon"
                class="modal__content-info-row-head-icon" />
              <p class="modal__content-info-row-head-title">
                Tasty Treat
              </p>
            </div>
            <p class="modal__content-info-row-content modal__content-stafftreat"></p>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="menu">
    <div class="container">
      <div class="menu__inner">
      </div>
    </div>
  </div>

  <div class="bt__button">
    <img src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/arrow-right.svg"
      alt="Arrow Icon - Scroll To Top" class="bt__button-img" />
  </div>

  <header class="header">
    <section class="header__top">
      <h3 class="header__top-link desktop">CALL: (03) 5910 4343</h3>
      <span class="header__top-link mobile alternate-text">CALL: (03) 5910 4343</span>

      <?php get_template_part('template-parts/button', null, array('buttonText' => 'Join Us', 'buttonLink' => '', 'variant' => 'blue')); ?>
      <?php get_template_part('template-parts/button', null, array('buttonText' => 'Contact', 'buttonLink' => '', 'variant' => 'sage')); ?>

    </section>
    <section class="header__bottom">
      <div class="container">
        <div class="header__bottom-inner">
          <a href="http://sage-nursing-agency.local"><img
              src="http://sage-nursing-agency.local/wp-content/uploads/2023/09/sage-nursing-agency-files-wordmark-navy-full-color-rgbSAGE_-1.svg"
              alt="Sage Nursing Logo" class="header__bottom-img" /></a>
          <div class="header__bottom-inner-menus">
            <?php
            wp_nav_menu($headerHomeMenu);
            ?>
            <?php
            wp_nav_menu($headerAboutMenu);
            ?>
            <?php
            wp_nav_menu($headerWorkForUsMenu);
            ?>
            <?php
            wp_nav_menu($headerBookStaffMenu);
            ?>
          </div>
          <div class="hamburger">
            <div class="hamburger__icon">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>