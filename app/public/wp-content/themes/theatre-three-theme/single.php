<?php

get_header();
?>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
<h1 class="post-title"><?php the_title();?></h1>
<h2 class="generic-post-content">this is from the single.php file</h2>
<div class="generic-post-content"><?php the_content();?></div>
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