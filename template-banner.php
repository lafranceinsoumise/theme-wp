<?php
/**
 * Template Name: Banner (No content)
 * Template Post Type: post, page
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'banner'); ?>

    <?php comments_template('/templates/comments.php'); ?>
<?php endwhile; ?>
