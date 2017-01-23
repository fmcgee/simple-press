
<?php /* Template Name: Full Width */ ?>

<?php get_header();?>
<div class="row">

  <div class="twelve columns">
  <?php while ( have_posts() ) : the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
  <?php endwhile ;?>
  </div>

</div><!-- end row -->


<?php get_footer(); ?>
