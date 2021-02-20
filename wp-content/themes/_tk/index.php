<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header(); ?>

<?php if (have_posts()) : ?>

<?php echo do_shortcode('[ajax_load_more posts_per_page="6" scroll="false" button_label="Pokaż więcej" container_type="div"]'); ?>

<?php else : ?>

<?php get_template_part('no-results', 'index'); ?>

<?php endif; ?>

<div class="clearfix">&nbsp;</div>


<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>