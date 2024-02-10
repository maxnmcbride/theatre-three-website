<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <?php wp_head(); ?>
</head>

<body class="body" <?php body_class(); ?>>
  <header class="site-header">
    <div class="logo-container">
      <a href="<?php echo site_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/T3 Logo.png" alt="Theatre Three Logo">
      </a>
    </div>
    <nav class="navbar">
      <ul class="main-nav">
        <li><a href="#">Tickets</a>
          <ul class="subnav">
            <li><a href="<?php echo site_url('/events-calendar'); ?>">Buy Tickets</a></li>
            <li><a href="<?php echo site_url('#'); ?>">Group Tickets</a></li>
            <li><a href="<?php echo site_url('#'); ?>">Gift Certificates</a></li>
            <li><a href="<?php echo site_url('ticket-policy'); ?>">Ticket Policy</a></li>
          </ul>
        </li>
        <li><a href="#">Season</a>
          <ul class="subnav">
            <li><a href="<?php echo site_url('/events-calendar'); ?>">Calendar</a></li>
            <li><a href="<?php echo site_url('/shows'); ?>">Mainstage</a></li>
            <li><a href="<?php echo site_url('/second_stage_shows'); ?>">Second Stage</a></li>
            <li><a href="<?php echo site_url('/childrens_theatre_shows'); ?>">Children's Theatre</a></li>
            <li><a href="<?php echo site_url('#'); ?>">Subscriptions</a></li>
          </ul>
        </li>
        <li><a href="#">Educational Experiences</a>
          <ul class="subnav">
            <li><a href="#">Workshops</a></li>
            <li><a href="#">School Programs</a></li>
          </ul>
        </li>
        <li><a href="#">One Act Plays</a></li>
        <li><a href="<?php echo site_url('/acting_classes'); ?>">Acting Classes</a></li>
        <li><a href="#">Auditions</a></li>
      </ul>
    </nav>
  </header>