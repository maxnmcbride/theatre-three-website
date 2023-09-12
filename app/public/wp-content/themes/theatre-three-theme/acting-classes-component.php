<?php
$today = date('Ymd');
$homepageShows = new WP_Query(
    array(
        'posts_per_page' => 1,
        'post_type' => 'acting_class',
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

    $show_image = get_field('show_image');

    if (is_array($show_image) && !empty($show_image['url'])) {
        $show_image_url = $show_image['url'];
    } else {
        $show_image_url = 'default-image-url.jpg';
    }

    echo '<style>.main-div-events-acting-classes::before { background-image: url(' . esc_url($show_image_url) . '); }</style>';
    wp_reset_postdata();
}
?>

<div class="div-one">
    <h2 class="upcoming-stage-titles"><a href="<?php echo get_post_type_archive_link('acting_class') ?>">Acting
            Classes</a></h2>
    <hr class="upcoming-stage-titles-break">

    <?php
    $homepageShowsThree = new WP_Query(
        array(
            'posts_per_page' => -1,
            'post_type' => 'acting_class',
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
            <h3 class="age-group-text">
                <?php echo get_field('age_group'); ?>
            </h3>
            <?php
            $startDate = new DateTime(get_field('start_date'));
            $endDate = new DateTime(get_field('end_date'));
            ?>

            <div class="upcoming-show-date-span">
                <span class="div-one-text">
                    <?php echo $startDate->format('M j Y'); ?>
                </span>
                <span class="div-one-text">
                    <b>&nbsp;&nbsp;-&nbsp;&nbsp;</b>
                </span>
                <span class="div-one-text">
                    <?php echo $endDate->format('M j Y'); ?>
                </span>
            </div>
        </div>
        <?php
    }
    ?>
</div>