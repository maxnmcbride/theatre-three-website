<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <?php wp_head();?>
    </head>
    <body class="body" <?php body_class();?>>
    <header class="site-header">
      <div class="title-container">
        <h1 class="title-font"><a href="<?php echo site_url('/')?>">Theatre<i>Three</i></a></h1>
        <p class="subtitle-font">Broadway on Main Street</p>
      </div>
      <div class="nav-bar">
        <a href="<?php echo site_url('/tickets')?>">Tickets</a>
        <a href="#">Season</a>
        <a href="#">Engage & Learn</a>
        <a href="#">Your Visit</a>
        <a href="<?php echo site_url('/about-us')?>">About Us</a>
        <a href="#">Support Us</a>
      </div>
    </header>