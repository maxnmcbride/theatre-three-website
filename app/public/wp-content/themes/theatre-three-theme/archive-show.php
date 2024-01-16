<?php
get_header(); ?>

<div class="mainstage-archive-page">
    <div class="mainstage-container">
        <div class="left-static-section">
            <img src="<?php echo get_template_directory_uri(); ?>/images/background.png" alt="Background Image"
                class="background-image">
            <h1 class="mainstage-description">The Mainstage at Theatre Three, celebrated for its premier shows, provides
                basic handicap accessibility within its classic, welcoming setting. Please note if you are a patron who
                requires wheelchair accessibility to arrive at least 15 minutes prior to show time!
            </h1>
        </div>
        <div class="right-scroll-section">
            <div class="fixed-title-container">
                <h1 class="mainstage-archive-page-title">MAINSTAGE SHOWS</h1>
            </div>
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
                        <?php
                        $show_image = get_field('promotional_image');
                        if ($show_image): ?>
                            <div class="card-background-image">
                                <img src="<?php echo esc_url($show_image['url']); ?>"
                                    alt="<?php echo esc_attr($show_image['alt']); ?>">
                            </div>
                        <?php endif; ?>
                        <div class="single-show-title-container">
                            <h1 class="single-show-title">
                                <?php the_title(); ?>
                            </h1>
                            <hr class="archive-title-content-break">
                            <?php
                            $startDate = new DateTime(get_field('start_date'));
                            $endDate = new DateTime(get_field('end_date'));

                            if ($startDate == $endDate) {
                                ?>
                                <div class="show-date-span-container">
                                    <span class="show-date">
                                        <i>
                                            <?php echo $startDate->format('M j Y'); ?>
                                        </i>
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
                                        <i>
                                            <?php echo $startDate->format('M j Y'); ?>
                                        </i>
                                    </span>
                                    <span class="show-date">
                                        <b>&nbsp;&nbsp;-&nbsp;&nbsp;</b>
                                    </span>
                                    <span class="show-date">
                                        <i>
                                            <?php echo $endDate->format('M j Y'); ?>
                                        </i>
                                    </span>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="single-show-description-container">
                            <p class="single-show-description">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <div class="single-show-buttons-container">
                                <button class="single-show-buttons"><a href="<?php the_permalink(); ?>"><i>More
                                            Information</i></a></button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            } ?>
        </div>
    </div>
</div>

<?php get_footer();
