<?php

/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>

<div class="main-content">
  <?php // substitute the class "container-fluid" below if you want a wider content area 
  ?>
  <div class="container">
    <div class="row">
      <!--	<div id="content" class="main-content-inner col-sm-12 col-md-12">-->

      <?php while (have_posts()) : the_post(); ?>

      <?php get_template_part('content', 'single'); ?>

      <?php
        // If comments are open or we have at least one comment, load up the comment template
        /*
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();*/
        ?>

      <?php endwhile; // end of the loop. 
      ?>

    </div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
  </div><!-- close .row -->
</div><!-- close .container -->
<!-- close .main-content -->

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>