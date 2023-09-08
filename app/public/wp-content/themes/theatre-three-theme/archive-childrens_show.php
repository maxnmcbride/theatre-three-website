<?php

get_header();

while (have_posts()) {
    the_post(); ?>

    <div class="single-show-div-container">
        <div class="single-show-title-container">
            <h1 class="single-show-title">
                <?php the_title(); ?>
            </h1>
        </div>
        <div class="single-show-description-container">
            <p class="single-show-description">
                <?php the_content(); ?>
            <p>
        </div>
    </div>

<?php }
get_footer();
?>