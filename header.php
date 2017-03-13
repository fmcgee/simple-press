<!DOCTYPE html>
<html >
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="container"> <!--  open  site container -->
  <div class="row">	
   <header class="twelve columns">
	   <div id="header" class="twelve columns">
        <h1>
          <a href="<?php echo get_option('home'); ?>">
         <?php bloginfo('name'); ?></a>
        </h1>
        <div class="description">
        <?php bloginfo('description'); ?>
        </div>
      </div>
   </header>
  </div><!-- end row -->

  <div class="row">
    <div class="twelve columns" id="show-nav"><a  href="#"><i class="fa fa-bars toggle-icon" aria-hidden="true"></i></a></div>
      <nav class="twelve columns">
       <?php wp_nav_menu( array( 'theme_location' => 'header-menu' , 'container_class' => 'main-nav' ) ); ?>
      </nav>
  </div><!-- end row -->









