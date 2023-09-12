<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, inital-scale=1">
  <?php wp_head(); ?>
  <!-- imported custom google fonts: -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;1,200;1,400&display=swap" rel="stylesheet"> 
</head>

<body class="body" <?php body_class(); ?>>
  <header class="site-header">
    <div class="title-container">
      <h1 class="title-font"><a href="<?php echo site_url('/') ?>">Theatre<i>Three</i></a></h1>
      <p class="subtitle-font">Broadway on Main Street</p>
    </div>
    <nav class="nav-bar">
      <ul class="nav-list">
        <li class="nav-item">
          <a href="<?php echo site_url('/tickets') ?>" class="nav-link">TICKETS</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('/tickets') ?>">Buy Tickets</a>
            </li>
            <li>
              <a href="<?php echo site_url('/tickets') ?>">Seating Chart</a>
            </li>
            <li>
              <a href="<?php echo site_url('/tickets') ?>">Ticket Policy</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">SEASON</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('/tickets') ?>">Events Calendar</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">ENGAGE & LEARN</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('/tickets') ?>">Acting Classes</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">YOUR VISIT</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('/tickets') ?>">Tours</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?php echo site_url('/about-us') ?>" class="nav-link">ABOUT US</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('/tickets') ?>">Theatre History</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">SUPPORT US</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('/tickets') ?>">Donate</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>