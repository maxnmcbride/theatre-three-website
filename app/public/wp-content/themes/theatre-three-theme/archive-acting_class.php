<?php
get_header(); ?>
<div class="title-container">
    <h1 class="archive-page-title">ACTING CLASSES</h1>
    <hr class="archive-title-content-break1">
</div>
<div class="mainstage-archive-page">
    <div class="archive-content-container">
        <div class="left-static-section">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mainstage_image.jpeg" alt="Background Image"
                class="background-image">
            <p class="mainstage-description">Theatre Three has created a safe and supportive acting class experience.
                Our trained
                teachers guide participants as they explore their creativity, expand their skills, and
                encounter live theatre in new ways, all the while having fun. Theatre Three offers four
                workshops for different age levels, each culminating in a showcase based on class work.
                The summer Musical Theatre Factory gives young actors an opportunity to appear in a
                full-rehearsed and presented musical.
            </p>
        </div>
        <div class="right-scroll-section">

            <?php
            $today = date('Ymd');
            $args = array(
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
            );
            $homepageShows = new WP_Query($args);

            if ($homepageShows->have_posts()) {
                while ($homepageShows->have_posts()) {
                    $homepageShows->the_post();
                    $is_sold_out = get_field('sold_out'); ?>

                    <div class="card single-show-div-container <?php echo $is_sold_out ? 'sold-out-event' : ''; ?>">

                        <?php if ($is_sold_out): ?>
                            <div class="sold-out-sign">Sold Out</div>
                        <?php endif; ?>

                        <?php
                        $show_image = get_field('promotional_image');
                        if ($show_image): ?>
                            <div class="show-image-container">
                                <img src="<?php echo esc_url($show_image['url']); ?>"
                                    alt="<?php echo esc_attr($show_image['alt']); ?>">
                            </div>
                        <?php endif; ?>

                        <div class="single-show-title-container">
                            <h1 class="single-show-title">
                                <?php the_title(); ?>
                            </h1>

                            <?php
                            $startDate = new DateTime(get_field('start_date'));
                            $endDate = new DateTime(get_field('end_date'));
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
                            <hr class="archive-title-content-break">
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
    <?php get_footer();