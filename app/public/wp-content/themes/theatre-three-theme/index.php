<?php get_header(); ?>

<div class="main-div-container">
  <div class="main-div-one">
    <h1 class="main-div-text">Explore Theatre Three</h1>
  </div>
</div>

<div class="div-container">
  <div class="div-one">
    <h1 class="div-one-text">Upcoming Shows</h1>
  </div>
  <div class="div-two">
    <h1 class="div-two-text"><a href="<?php echo site_url('#')?>">View our Calendar</a></h1>
  </div>
</div>

<div class="container container--narrow page-section">
  <!-- <?php
    while(have_posts()){
      the_post(); ?>
      <div class="post-item">
        <h2><a class="headline headline--medium headline--post-title" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <div class="metabox">
          <p>Posted by <?php the_author_posts_link();?> on <?php the_time('M j, Y');?> in <?php echo get_the_category_list(',');?></p>
        </div>

        <div class="generic-content">
          <?php the_excerpt();?>
          <p><a class="btn btn--blue" href="<?php the_permalink();?>">Continue Reading &raquo;</a></p>
        </div>
      </div>
    <?php }
    echo paginate_links();
  ?> -->
</div>


<?php
get_footer();

?>