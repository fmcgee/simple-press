<?php get_header();?>


<div class="row">

  <div class="eight columns">
  <?php while ( have_posts() ) : the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
  <?php endwhile ;?>
  </div>

  <div class="four columns">
  <?php get_sidebar(); ?>
  </div>
  
</div><!-- end row -->



<?php get_footer(); ?>
