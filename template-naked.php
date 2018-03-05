<?php
/**
 * Template Name: Nu pour page d'accueil
 * Template Post Type: post, page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
