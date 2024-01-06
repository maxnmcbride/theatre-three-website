<?php get_header(); ?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <div class="generic-page-body-container">
            <div class="generic-page-content">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="post-image-container">
            <div class="post-image">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('large');
                }
    }
}
?>
    </div>
</div>
<?php get_footer();