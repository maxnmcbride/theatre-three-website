<?php get_header(); ?>

<div class="main-div-container">
  <div class="video-container">
    <video autoplay loop muted preload="auto">
      <source src="<?php echo get_template_directory_uri(); ?>/images/theatre_3_video.mp4" type="video/mp4">
      <source src="<?php echo get_template_directory_uri(); ?>/images/theatre_3_video.webm" type="video/webm">
      Your browser does not support the video tag.
    </video>
  </div>
</div>

<h1 class="div-one-text">Upcoming Events</h1>

<div class="main-div-events-container">
  <div class="main-div-events-mainstage-shows">
    <?php get_template_part('mainstage-shows-component'); ?>
  </div>

  <div class="main-div-events-secondstage-shows">
    <?php get_template_part('second-stage-shows-component'); ?>
  </div>

  <div class="main-div-events-childrens-theater-shows">
    <?php get_template_part('childrens-theatre-shows-component'); ?>
  </div>

  <div class="main-div-events-acting-classes">
    <?php get_template_part('acting-classes-component'); ?>
  </div>

</div>
</div>

</div>


<?php
get_footer();
?>