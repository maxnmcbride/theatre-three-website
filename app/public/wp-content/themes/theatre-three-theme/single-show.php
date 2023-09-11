<?php
get_header();
?>

<div class="show-layout">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $image = get_field('show_image');
            ?>

            <div class="show-header">
                <h1 class="post-title">
                    <?php the_title(); ?>
                </h1>

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

            <div class="show-content">
                <h2 class="post-title">About the Show</h2>
                <div class="generic-post-content">
                    <?php the_content(); ?>
                </div>
            </div>

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
        </div>

        <?php
        }
    }
    ?>
</div>

<?php
get_footer();
?>