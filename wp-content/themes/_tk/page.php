<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

if (!$_SESSION['return']) {
  global $wp;
  $_SESSION['return'] = home_url($wp->request);
}

get_header(); ?>

<div class="main-content grid-page">
  <?php // substitute the class "container-fluid" below if you want a wider content area 
  ?>
  <div class="container">
    <div class="row">
      <!--	<div id="content" class="main-content-inner col-sm-12 col-md-12">-->

      <div id="primary">
        <div id="content" role="main">
          <?php while (have_posts()) : the_post(); ?>

          <?php get_template_part('content', 'page'); ?>

          <?php comments_template('', true); ?>

          <?php endwhile; // end of the loop. 
          ?>

        </div><!-- #content -->
      </div><!-- #primary -->

    </div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
  </div><!-- close .row -->
</div><!-- close .container -->
<!-- close .main-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>