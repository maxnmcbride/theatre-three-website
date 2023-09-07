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


    <!-- <?php
    $today = date('Ymd');
    $homepageShows = new WP_Query(
      array(
        'posts_per_page' => 1,
        'post_type' => 'show',
        'meta_key' => 'start_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => array(
          array(
            'key' => 'end_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric'
          )
        )
      )
    );

    if ($homepageShows->have_posts()) {
      $homepageShows->the_post();

      $show_image = get_field('promotional_image');

      if (is_array($show_image) && !empty($show_image['url'])) {
        $show_image_url = $show_image['url'];
      } else {
        $show_image_url = 'default-image-url.jpg';
      }

      echo '<style>.main-div-events-mainstage-shows { background-image: url(' . esc_url($show_image_url) . '); }</style>';
      rewind_posts();
    }
    ?> -->


  </div>

  <div class="main-div-events-secondstage-shows">

    <div class="div-one">
      <h2 class="upcoming-stage-titles"><a href="<?php echo get_post_type_archive_link('show') ?>">Second Stage
          Shows</a>
      </h2>
      <?php
      $today = date('Ymd');
      $homepageShows = new WP_Query(
        array(
          'posts_per_page' => 3,
          'post_type' => 'show',
          'meta_key' => 'start_date',
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'end_date',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric'
            )
          )
        )
      );

      while ($homepageShows->have_posts()) {
        $homepageShows->the_post(); ?>
        <div>
          <h3 class="upcoming-show-titles">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>
          <div>
            <span class="div-one-text">
              <?php
              $startDate = new DateTime(get_field('start_date'));
              echo $startDate->format('M Y');
              ?>
            </span>
            <span class="div-one-text">
              <?php
              $endDate = new DateTime(get_field('end_date'));
              echo $endDate->format('M Y');
              ?>
            </span>
          </div>
        </div>

      <?php }

      ?>
    </div>

  </div>

  <div class="main-div-events-childrens-theater-shows">

    <div class="div-one">
      <h2 class="upcoming-stage-titles"><a href="<?php echo get_post_type_archive_link('show') ?>">Children's
          Theatre</a>
      </h2>
      <?php
      $today = date('Ymd');
      $homepageShows = new WP_Query(
        array(
          'posts_per_page' => 3,
          'post_type' => 'show',
          'meta_key' => 'start_date',
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'end_date',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric'
            )
          )
        )
      );

      while ($homepageShows->have_posts()) {
        $homepageShows->the_post(); ?>
        <div>
          <h3 class="upcoming-show-titles">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>
          <div>
            <span class="div-one-text">
              <?php
              $startDate = new DateTime(get_field('start_date'));
              echo $startDate->format('M Y');
              ?>
            </span>
            <span class="div-one-text">
              <?php
              $endDate = new DateTime(get_field('end_date'));
              echo $endDate->format('M Y');
              ?>
            </span>
          </div>
        </div>

      <?php }

      ?>
    </div>

  </div>

  <div class="main-div-events-acting-classes">

    <div class="div-one">
      <h2 class="upcoming-stage-titles"><a href="<?php echo get_post_type_archive_link('show') ?>">Acting Classes</a>
      </h2>
      <?php
      $today = date('Ymd');
      $homepageShows = new WP_Query(
        array(
          'posts_per_page' => 3,
          'post_type' => 'show',
          'meta_key' => 'start_date',
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'end_date',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric'
            )
          )
        )
      );

      while ($homepageShows->have_posts()) {
        $homepageShows->the_post(); ?>
        <div>
          <h3 class="upcoming-show-titles">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>
          <div>
            <span class="div-one-text">
              <?php
              $startDate = new DateTime(get_field('start_date'));
              echo $startDate->format('M Y');
              ?>
            </span>
            <span class="div-one-text">
              <?php
              $endDate = new DateTime(get_field('end_date'));
              echo $endDate->format('M Y');
              ?>
            </span>
          </div>
        </div>

      <?php }

      ?>
    </div>

  </div>
</div>

</div>


<?php
get_footer();
?>