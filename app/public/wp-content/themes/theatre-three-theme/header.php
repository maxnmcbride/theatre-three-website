<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <?php wp_head();?>
    </head>
    <body class="body" <?php body_class();?>>
    <header class="site-header">
      <div class="container">
        <h1 class="theatre-three-font"><a href="<?php echo site_url('/')?>">Theatre<i>Three</i></a></h1>
        <p class="slogan-font">Broadway on Main Street</p>
        <div class="navigation-li-container">
        <nav class="main-navigation">
            <!-- <?php
            wp_nav_menu(array(
              'theme_location' => 'headerMenuLocation'
            ));
            ?> -->
            <!-- This is a means of dynamic menu creation using the WP admin interface -->
            <ul class="nav-list">
              <li><a href="<?php echo site_url('/tickets')?>">Tickets</a></li>
              <li><a href="#">Season</a></li>
              <li><a href="#">Engage & Learn</a></li>
              <li><a href="#">Your Visit</a></li>
              <li><a href="<?php echo site_url('/about-us')?>">About Us</a></li>
              <li><a href="#">Support Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
