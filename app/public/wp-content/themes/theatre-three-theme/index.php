<?php get_header(); ?>

<div class="main-div-container">
  <div class="main-div-one">
    <h1 class="main-div-text">Explore Theatre Three</h1>
  </div>
</div>

<div class="div-container">
  <div class="div-one">
    <h1 class="div-one-text">Upcoming Shows</h1>

    <!-- this is querying the show data from the custom post type of shows -->
    <!-- this logic is handling displaying shows that end after todays date -->
    <?php
    $today = date('Ymd');
    $homepageShows = new WP_Query(
      array(
        'posts_per_page' => -1,
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
        <a href="<?php the_permalink(); ?>" class="div-one-text">
          <li>
            <?php the_title(); ?>
          </li>
        </a>
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
    <a class="div-one-text"></a>
  </div>


  <div class="div-two">
    <h1 class="div-two-text"><a href="<?php echo site_url('#') ?>">View our Calendar</a></h1>
  </div>
</div>


<?php
get_footer();
?>