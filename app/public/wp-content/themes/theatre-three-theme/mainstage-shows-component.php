<?php
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

  echo '<style>.main-div-events-mainstage-shows::before { background-image: url(' . esc_url($show_image_url) . '); }</style>';
  // reset the post data so we can run another loop below
  wp_reset_postdata();
}
?>

<div class="div-one">
    <h2 class="upcoming-stage-titles"><a href="<?php echo get_post_type_archive_link('show') ?>">Mainstage Shows</a></h2>

    <?php
    $homepageShowsThree = new WP_Query(
        array(
            'posts_per_page' => 5,
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

    while ($homepageShowsThree->have_posts()) {
        $homepageShowsThree->the_post(); 
    ?>
        <div>
            <h3 class="upcoming-show-titles">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
            <?php
            $startDate = new DateTime(get_field('start_date'));
            $endDate = new DateTime(get_field('end_date'));

            if ($startDate == $endDate) {
            ?>
                <div>
                    <span class="div-one-text">
                        <?php echo $startDate->format('M j Y'); ?>
                    </span>
                    <span class="div-one-text">
                        <i>One Night Only!</i>
                    </span>
                </div>
            <?php
            } else {
            ?>
                <div>
                    <span class="div-one-text">
                        <?php echo $startDate->format('M j Y'); ?>
                    </span>
                    <span class="div-one-text">
                        <b>-</b>
                    </span>
                    <span class="div-one-text">
                        <?php echo $endDate->format('M j Y'); ?>
                    </span>
                </div>
            <?php
            }
            ?>
        </div>
    <?php 
    } 
    ?>
</div>