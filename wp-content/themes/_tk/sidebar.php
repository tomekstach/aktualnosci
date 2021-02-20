<?php

/**
 * The sidebar containing the main widget area
 *
 * @package _tk
 */
?>

<div class="sidebar col-sm-12 col-md-4">

  <?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) 
  ?>
  <div class="sidebar-padder">

    <?php do_action('before_sidebar'); ?>
    <?php if (!dynamic_sidebar('sidebar-1')) : ?>

    <aside id="search" class="widget widget_search">
      <?php get_search_form(); ?>
    </aside>

    <aside id="archives" class="widget widget_archive">
      <ul>
        <?php wp_get_archives(array('type' => 'monthly')); ?>
      </ul>
    </aside>

    <aside id="meta" class="widget widget_meta">
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
      </ul>
    </aside>

    <?php endif; ?>

  </div><!-- close .sidebar-padder -->

</div><!-- close .main-content-inner -->