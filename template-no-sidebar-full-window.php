<?php
/**
 * Template Name: No Sidebar (Full window)
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <?php comments_template('/templates/comments.php'); ?>
<?php endwhile; ?>
