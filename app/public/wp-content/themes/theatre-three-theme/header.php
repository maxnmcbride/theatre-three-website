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
          <a href="<?php echo site_url('#') ?>" class="nav-link">Tickets</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('#') ?>">Buy Tickets</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Group Tickets</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Seating Chart</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Gift Certificates</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Ticket Policy</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Season</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('#') ?>">Calendar</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Mainstage</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Second Stage</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Children's Theatre</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">One-Act Plays</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Subscriptions</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Engage & Learn</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('#') ?>">Auditions</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Acting Classes</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Submit a One-Act Play</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">School Outreach</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Plan Your School Trip</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Julie Peierls Scholarship</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Your Visit</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('#') ?>">Accessibility</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Directions</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Contact Us</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">About Us</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?php echo site_url('#') ?>" class="nav-link">Support Us</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('#') ?>">Donate</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Volunteer</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Become a Sponsor</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>