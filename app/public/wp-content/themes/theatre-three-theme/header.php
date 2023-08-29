<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, inital-scale=1">
  <?php wp_head(); ?>
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
          <a href="<?php echo site_url('/tickets') ?>" class="nav-link">Tickets</a>
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
          <a href="#" class="nav-link">Season</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('/tickets') ?>">Events Calendar</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Engage & Learn</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('/tickets') ?>">Acting Classes</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Your Visit</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('/tickets') ?>">Plan a Tour</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?php echo site_url('/about-us') ?>" class="nav-link">About Us</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('/tickets') ?>">Theatre History</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Support Us</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('/tickets') ?>">Donate</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- <a href="<?php echo site_url('/tickets') ?>">Tickets</a>
        <a href="#">Season</a>
        <a href="#">Engage & Learn</a>
        <a href="#">Your Visit</a>
        <a href="<?php echo site_url('/about-us') ?>">About Us</a>
        <a href="#">Support Us</a> -->
    </nav>
  </header>