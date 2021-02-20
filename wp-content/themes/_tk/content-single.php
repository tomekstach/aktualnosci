<?php

/**
 * @package _tk
 */
?>

<article class="single-post" id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
  <!--<a href="javascript:window.history.go(-1);" class="button-btn-back"><span></span><span>WRÓĆ</span></a>-->
  <a href="<?php echo $_SESSION['return']; ?>" class="button-btn-back"><span></span><span>WRÓĆ DO LISTY
      ARTYKUŁÓW</span></a>
  <header>
    <div class="entry-meta">
      <?php
      $values = print_grid_meta('eg-kategoria');
      _tk_posted_on();
      if ($values) {
        echo ' <span class="space">|</span> ' . $values;
      }
      ?>
    </div><!-- .entry-meta -->
    <h1 class="page-title"><?php the_title(); ?></h1>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php the_content(); ?>
  </div><!-- .entry-content -->

  <footer>
    <?php if ($values) : ?>
    <h2>Zobacz także</h2>
    <?php
      echo do_shortcode('[ess_grid alias="' . $values . '"]');
      ?>
    <?php endif; ?>
  </footer>
</article><!-- #post-## -->