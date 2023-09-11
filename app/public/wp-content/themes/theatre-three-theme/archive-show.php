<?php
get_header(); ?>

<div class="mainstage-archive-page">

    <h1 class="mainstage-archive-page-title">Mainstage Shows</h1>
    <hr class="archive-title-content-break">

    <?php
    $today = date('Ymd');
    $args = array(
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
    );
    $homepageShows = new WP_Query($args);

    if ($homepageShows->have_posts()) {
        while ($homepageShows->have_posts()) {
            $homepageShows->the_post(); ?>

            <div class="card single-show-div-container">
                <div class="single-show-title-container">
                    <h1 class="single-show-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h1>
                    <hr class="archive-title-content-break">
                    <?php
                    $startDate = new DateTime(get_field('start_date'));
                    $endDate = new DateTime(get_field('end_date'));

                    if ($startDate == $endDate) {
                        ?>
                        <div class="show-date-span-container">
                            <span class="show-date">
                                <?php echo $startDate->format('M j Y'); ?>
                            </span>
                            <span class="show-date">
                                <i>&nbsp;&nbsp;One Night Only!</i>
                            </span>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="show-date-span-container">
                            <span class="show-date">
                                <?php echo $startDate->format('M j Y'); ?>
                            </span>
                            <span class="show-date">
                                <b>&nbsp;&nbsp;-&nbsp;&nbsp;</b>
                            </span>
                            <span class="show-date">
                                <?php echo $endDate->format('M j Y'); ?>
                            </span>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="columns-container">

                    <div class="left-column">
                    </div>

                    <div class="single-show-description-container">
                        <p class="single-show-description">
                            <?php echo get_field('show_description'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <?php
        }
        wp_reset_postdata();
    } ?>
</div>
<?php get_footer();