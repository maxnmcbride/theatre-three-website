<div class="div-one">
    <h2 class="upcoming-stage-titles"><a href="<?php echo get_post_type_archive_link('show') ?>">Mainstage Shows</a>
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