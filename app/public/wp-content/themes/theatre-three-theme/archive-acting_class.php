<?php
get_header(); ?>

<div class="mainstage-archive-page">

    <h1 class="mainstage-archive-page-title">ACTING CLASSES</h1>
    <p class="acting-class-content">
Theatre Three strives to offer the best educational acting experience.<br>
Our experienced teachers help participants explore their creativity, <br>
expand their skills, and experience live theatre in new ways, all while having fun.<br> 
We believe any student should have a chance to be onstage. We create a safe space<br>
for all students to try new things. Part of our mission is to give our students the <br>
most interesting, innovative, and exciting experience possible. Students will receive <br>
two tickets to attend any Mainstage or Children's Theatre production during the season <br>
in which they are enrolled. They will be given an opportunity to discuss the production <br> 
with their instructors and classmates.<br>

<br>Workshops are limited to 20 students and meet once a week for for a total of 10 classes.<br>

<br>SPACES ARE VERY LIMITED. REGISTER NOW!!!<br>

<br>Sorry, no refunds unless classes are cancelled.<br>
<br>Register online, by mail, at the Box Office, or charge by phone!<br>

<br>Questions? Call Tuesday through Friday, 10 a.m. to 4 p.m.<br>
(631) 928 - 9202</p>
    <hr class="archive-title-content-break1">

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

                <?php if ($is_sold_out) : ?>
                    <div class="sold-out-sign">Sold Out</div>
                <?php endif; ?>

                <?php
                $show_image = get_field('promotional_image');
                if ($show_image): ?>
                    <div class="show-image-container">
                        <img src="<?php echo esc_url($show_image['url']); ?>" alt="<?php echo esc_attr($show_image['alt']); ?>">
                    </div>
                <?php endif; ?>

                <div class="single-show-title-container">
                    <h1 class="single-show-title">
                        <?php the_title(); ?>
                    </h1>

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

                    <hr class="archive-title-content-break">

                </div>
                <div class="single-show-description-container">
                    <p class="single-show-description">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                    <div class="single-show-buttons-container">
                        <button class="single-show-buttons"><a href="<?php the_permalink(); ?>"><i>More Information</i></a></button>
                    </div>
                </div>
            </div>

            <?php
        }
        wp_reset_postdata();
    } ?>
</div>
<?php get_footer();