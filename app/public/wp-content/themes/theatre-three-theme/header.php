<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <?php wp_head(); ?>
</head>

<body class="body" <?php body_class(); ?>>
  <header class="site-header">
    <div class="title-container">
      <h1 class="title-font"><a href="<?php echo site_url('/') ?>">Theatre<i>Three</i></a></h1>
      <p class="subtitle-font">Broadway on Main Street</p>
    </div>
    <nav class="nav-bar">
    <button class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </button>
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
              <a href="<?php echo site_url('/tickets') ?>">Tours</a>
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
              <a href="<?php echo site_url('/tickets') ?>">Volunteer</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>