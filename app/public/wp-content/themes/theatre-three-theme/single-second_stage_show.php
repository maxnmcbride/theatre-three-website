<?php
get_header();
?>

<h1 class="post-title"><?php 
 echo get_acf_field_count();
?></h1>

<div class="show-layout">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            // Get the image URL from the ACF field
            $image = get_field('second_stage_image');
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
                <div class="generic-post-content">
                    <?php the_content(); ?>
                </div>
            </div>

            <div class="show-metabox">
                <!-- Your metabox content will go here -->
            </div>

            <?php
        }
    }
    ?>
</div>

<?php
get_footer();
?>