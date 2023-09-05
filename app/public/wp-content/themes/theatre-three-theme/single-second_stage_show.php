<?php
get_header();
?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        $image = get_field('show_image');
        $castImages = array();
        for ($i = 1; ; $i++) {
            $castImage = get_field('cast_image_' . $i);
            if ($castImage) {
                $castImages[] = $castImage;
            } else {
                break;
            }
        }
        ?>

        <div class="second-stage-content-columns">

            <div class="second-stage-left-column">
                <h1 class="post-title">
                    <?php the_title(); ?>
                </h1>
                <hr class="second-stage-title-line-break">

                <?php
                if ($image) {
                    $image_url = $image['url'];
                    $image_alt = $image['alt'];
                    ?>

                    <div class="single-show-custom-image-div">
                        <img class="custom-image" src="<?php echo esc_url($image_url); ?>"
                            alt="<?php echo esc_attr($image_alt); ?>">
                    </div>

                    <?php
                }
                ?>
            </div>
            <div class="second-stage-middle-column">
                <h2 class="post-title">About the Show</h2>
                <hr class="second-stage-title-line-break">
                <div class="generic-post-content">
                    <?php the_content(); ?>
                </div>
                <div class="second-stage-cast-container">
                    <?php foreach ($castImages as $index => $castImage): ?>
                        <div class="second-stage-cast-images">
                            <span class="second-stage-cast-content">
                                <img class="second-stage-cast" src="<?php echo esc_url($castImage['url']); ?>"
                                    alt="<?php echo esc_attr($castImage['alt']); ?>">
                                <p class="second-stage-cast-caption">
                                    <?php echo esc_attr($castImage['caption']); ?>
                                </p>
                                <p class="second-stage-cast-description">
                                    <?php echo esc_attr($castImage['description']); ?>
                                </p>
                            </span>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>

            <div class="second-stage-right-column">
                <h2 class="post-title">Ticket Information</h2>
                <hr class="second-stage-title-line-break">
                <div class="metabox-ticket-information-header">
                    <?php
                    $ticket_information = get_field('show_ticket_information');
                    if ($ticket_information) {
                        ?>
                        <div class="metabox-ticket-information-container">
                            <p class="metabox-ticket-information-text">
                                <?php echo htmlspecialchars_decode($ticket_information) ?>
                            </p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
            <div class="show-metabox">
                <h2 class="post-title">Ticket Information</h2>
                <div class="metabox-ticket-information-header">
                    <?php
                    $ticket_information = get_field('show_ticket_information');
                    if ($ticket_information) {
                        ?>
                        <div class="metabox-ticket-information-container">
                            <p class="metabox-ticket-information-text">
                                <?php echo htmlspecialchars_decode($ticket_information) ?>
                            </p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>

            <div class="second-stage-cast-images">
                <?php
                foreach ($castImages as $index => $castImage) {
                    $castImage_url = $castImage['url'];
                    $castImage_alt = $castImage['alt'];
                    $castImage_caption = $castImage['caption'];
                    $castImage_description = $castImage['description'];
                    ?>

                    <span>
                        <img class="second-stage-cast" src="<?php echo esc_url($castImage_url); ?>"
                            alt="<?php echo esc_attr($castImage_alt); ?>">
                        <p class="second-stage-cast-caption">
                            <?php echo esc_attr($castImage_caption); ?>
                        </p>
                        <p class="second-stage-cast-description">
                            <?php echo esc_attr($castImage_description); ?>
                        </p>
                    </span>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
        }
    }
}
?>

</div>

<?php
get_footer();
?>