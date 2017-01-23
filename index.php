<?php get_header();?>


<div class="row">

  <div class="eight columns">
  <?php while ( have_posts() ) : the_post(); ?>
  <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  <?php the_post_thumbnail(); ?>
  <?php the_excerpt(); ?>
  <?php endwhile ;?>
  </div>

  <div class="four columns">
  <?php get_sidebar(); ?>
  </div>

</div>  <!-- end row -->

<?php get_footer(); ?>
