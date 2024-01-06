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
          <a class="nav-link">Tickets</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('/events-calendar') ?>">Buy Tickets</a>
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
              <a href="<?php echo site_url('ticket-policy') ?>">Ticket Policy</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Season</a>
          <ul class="sub-links">
            <li>
              <a href="<?php echo site_url('/events-calendar') ?>">Calendar</a>
            </li>
            <li>
            <a href="<?php echo site_url('/shows') ?>">Mainstage</a>
            </li>
            <li>
              <a href="<?php echo site_url('/second_stage_shows') ?>">Second Stage</a>
            </li>
            <li>
              <a href="<?php echo site_url('/childrens_theatre_shows') ?>">Children's Theatre</a>
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
              <a href="<?php echo site_url('auditions-2') ?>">Auditions</a>
            </li>
            <li>
              <a href="<?php echo site_url('/acting_classes') ?>">Acting Classes</a>
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
              <a href="<?php echo site_url('julie-peierls-scholarship') ?>">Julie Peierls Scholarship</a>
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
              <a href="<?php echo site_url('about-us') ?>">About Us</a>
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
              <a href="<?php echo site_url('/volunteering') ?>">Volunteer</a>
            </li>
            <li>
              <a href="<?php echo site_url('#') ?>">Become a Sponsor</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>