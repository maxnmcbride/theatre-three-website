<?php

get_header();

while(have_posts()) {
    the_post();?>

<h1 class="page-title"><?php the_title();?></h1>
<div class="page-content">
    <?php the_content();?>
</div>

<?php }
    get_footer();
?>